<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

//add activity
if (isset($_POST['add_activity'])) {
    $img = $_FILES['img'];
    $topic = $_POST['topic'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    // $status = "on";

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_activity/" . $fileNew1;

    if (empty($topic)) {
        echo "<script>alert('Please Enter Topic')</script>";
    } else if (empty($date)) {
        echo "<script>alert('Please Enter Date')</script>";
    } else if (empty($content)) {
        echo "<script>alert('Please Enter Content')</script>";
    } else {
        try {
            if (in_array($fileActExt1, $allow)) {
                if ($img['size'] > 0 && $img['error'] == 0) {
                    if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                        $activity = $conn->prepare("INSERT INTO activity(cover_img,topic,content,date)
                                                  VALUES(:cover_img,:topic,:content,:date)");
                        $activity->bindParam(":cover_img", $fileNew1);
                        $activity->bindParam(":topic", $topic);
                        $activity->bindParam(":content", $content);
                        $activity->bindParam(":date", $date);
                        // $activity->bindParam(":status", $status);
                        $activity->execute();

                        $id_activity = $conn->lastInsertId();
                    }
                }
            }

            foreach ($_FILES['img_add']['tmp_name'] as $key => $value) {
                $file_names = $_FILES['img_add']['name'];

                $extension = strtolower(pathinfo($file_names[$key], PATHINFO_EXTENSION));
                $supported = array('jpg', 'jpeg', 'png', 'webp');
                if (in_array($extension, $supported)) {
                    $new_name = rand() . '.' . "webp";
                    if (move_uploaded_file($_FILES['img_add']['tmp_name'][$key], "upload/upload_activity/" . $new_name)) {
                        $sql = "INSERT INTO activity_img (image, activity_id) VALUES(:image, :activity_id)";
                        $upload_img = $conn->prepare($sql);
                        $params = array(
                            'image' => $new_name,
                            'activity_id' => $id_activity
                        );
                        $upload_img->execute($params);
                    }
                }
            }

            if ($activity) {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add activity has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
                echo "<meta http-equiv='refresh' content='1.5;url=activity'>";
            } else {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Something Went Wrong!!!',
                        icon: 'error',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


//edit activity
if (isset($_POST['edit_activity'])) {
    $img_edit = $_FILES['img_cover_edit'];
    $topic = $_POST['topic_edit'];
    $date = $_POST['date_edit'];
    $content = $_POST['content_edit'];
    $id_act = $_POST['id_act'];

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_edit['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_activity/" . $fileNew1;


    if (in_array($fileActExt1, $allow)) {
        if ($img_edit['size'] > 0 && $img_edit['error'] == 0) {
            if (move_uploaded_file($img_edit['tmp_name'], $filePath1)) {
                $activity = $conn->prepare("UPDATE activity SET cover_img = :cover_img,topic = :topic,content = :content,date = :date WHERE id = :id");
                $activity->bindParam(":cover_img", $fileNew1);
                $activity->bindParam(":topic", $topic);
                $activity->bindParam(":content", $content);
                $activity->bindParam(":date", $date);
                $activity->bindParam(":id", $id_act);
                $activity->execute();
            }
        }
    } else {
        $activity = $conn->prepare("UPDATE activity SET topic = :topic,content = :content,date = :date WHERE id = :id");
        $activity->bindParam(":topic", $topic);
        $activity->bindParam(":content", $content);
        $activity->bindParam(":date", $date);
        $activity->bindParam(":id", $id_act);
        $activity->execute();
    }

    foreach ($_FILES['img_edit']['tmp_name'] as $key => $value) {
        $file_names = $_FILES['img_edit']['name'];

        $extension = strtolower(pathinfo($file_names[$key], PATHINFO_EXTENSION));
        $supported = array('jpg', 'jpeg', 'png', 'webp');
        if (in_array($extension, $supported)) {
            $new_name = rand() . '.' . "webp";
            if (move_uploaded_file($_FILES['img_edit']['tmp_name'][$key], "upload/upload_activity/" . $new_name)) {
                $sql = "INSERT INTO activity_img (image, activity_id) VALUES(:image, :activity_id)";
                $upload_img = $conn->prepare($sql);
                $params = array(
                    'image' => $new_name,
                    'activity_id' => $id_act
                );
                $upload_img->execute($params);
            }
        }
    }
    if ($activity) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Edit activity has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=activity'>";
    } else {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Something Went Wrong!!!',
                        icon: 'error',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
    }
}


//Chang status
// if (isset($_POST['change-status'])) {
//     $check = $_POST['check'];
//     $slide_id = $_POST['slide_id'];

//     $stmt = $conn->prepare("UPDATE activity SET status = :status WHERE id =  :id");
//     $stmt->bindParam(":status", $check);
//     $stmt->bindParam(":id", $slide_id);
//     $stmt->execute();

//     if ($stmt) {
//         echo "<script>
//         $(document).ready(function() {
//             Swal.fire({
//                 text: 'Change Status Success',
//                 icon: 'success',
//                 timer: 10000,
//                 showConfirmButton: false
//             });
//         })
//         </script>";
//         echo "<meta http-equiv='refresh' content='1.5;url=activity'>";
//     } else {
//         echo "<script>alert('Something Went Wrong!!!')</script>";
//         echo "<meta http-equiv='refresh' content='1.5;url=activity'>";
//     }
// }

//delete img blog
// if (isset($_POST['del-img'])) {
//     $img_id = $_POST['del-img'];

//     $delete_img = $conn->prepare("DELETE FROM activity_img WHERE id = :id");
//     $delete_img->bindParam(":id", $img_id);
//     $delete_img->execute();

//     if ($delete_img) {
//         echo "<meta http-equiv='refresh' content='1.5;url=activity'>";
//     }


if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $del_activity = $conn->prepare("DELETE FROM activity WHERE id = :id");
    $del_activity->bindParam(":id", $id);
    $del_activity->execute();

    if ($del_activity) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Activity has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=activity'>";
    } else {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Something Went Wrong!!!',
                icon: 'error',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
    }
}

//query activity
$stmt = $conn->prepare("SELECT * FROM activity");
$stmt->execute();
$row_activity = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="css/about_us.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>
<style>
    #gallery_add {
        width: 90%;
        border-radius: 10px;
        height: 220px;
        display: grid;
        grid-template-columns: auto auto;
        margin: 10px auto;
        border: 2px solid #ccc;
        background-color: #e6e6e6;
        position: absolute;
        left: 0;
        right: 0;
        overflow: auto;
    }

    .box-edit-img-add {
        background-color: #FFFFFF;
        width: 90%;
        height: fit-content;
        padding: 5px;
        margin: 10px auto;
        border: 2px solid #ccc;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .switch-box {
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #switch-check {
        width: 50px;
        height: 25px;
        margin: 10px;
    }

    .btn-status {
        background-color: #435ebe;
        color: #FFFFFF;
    }

    .box-btn {
        margin: 0 auto;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .form-switch {
        padding-left: 0px;
    }

    .box-edit-img {
        background-color: #FFFFFF;
        width: 90%;
        height: 220px;
        padding: 5px;
        margin: 10px auto;
        border: 2px solid #ccc;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }



    #edit-img {
        width: 80%;
        margin: 15px auto;
        border-radius: 5px;
    }

    .btn-edit-del-img {
        border-radius: 5px;
        border: 1px solid #c3412c;
    }

    .btn-edit-del-img:hover {
        transition: 0.2s;
        background-color: #f3a599;
    }

    .bi-x-lg {
        color: #c3412c;
        -webkit-text-stroke: 1px;
        cursor: pointer;
    }

    .del-edit-img {
        width: 100%;
        padding: 5px 5px 0px 0px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
</style>

<body>
    <div id="app">
        <?php include('sidebar.php'); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Activities</h3>
            </div>
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Activities</h4>
                        <div class="box-lang">
                            <a href="activity_en"><button type="button" class="btn btn-edit">EN</button></a>
                            <a type="input" data-bs-toggle="modal" class="btn" style="background-color: #fd7e14; color: #FFF;" href="#addactivity">Add</a>
                        </div>
                    </div>
                    <div class="container">
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                branding: false,
                                height: 500,
                                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                tinycomments_mode: 'embedded',
                                tinycomments_author: 'Author name',
                            });
                        </script>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th scope="col" width="30%">Image</th>
                                                <th scope="col" width="40%">Topic</th>
                                                <!-- <th scope="col" width="10%">Status</th> -->
                                                <th scope="col" width="20%">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($row_activity as $row_activity) { ?>
                                                <tr align="center">
                                                    <td><img width="50%" src="upload/upload_activity/<?php echo $row_activity['cover_img'] ?>" alt=""></td>
                                                    <td align="left"><?php echo $row_activity['topic'] ?></td>
                                                    <!-- <td><a type="input" data-bs-toggle="modal" href="#status<?php echo $row_activity['id'] ?>" class="btn btn-gear" <?php if ($row_activity['status'] == "on") {
                                                                                                                                                                        echo " style='background-color: #06c258; color:#FFF;'";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo " style='background-color: #c3412c; color:#FFF;'";
                                                                                                                                                                    } ?>><i class="bi bi-gear"></i></a></td>-->
                                                    <td> 
                                                        <form method="post">
                                                            <a type="input" data-bs-toggle="modal" href="#editactivity<?php echo $row_activity['id'] ?>" class="btn " style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></a>
                                                            <button type="submit" class="btn" value="<?php echo $row_activity['id']; ?>" onclick="return confirm('You want to delete this blog?');" name="delete" style="background-color:#c3412c; color: #FFFFFF;"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <!-- Modal Edit activity -->
                                                <div class="modal fade" id="editactivity<?php echo $row_activity['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                                    <?php
                                                    //query img
                                                    $q_img = $conn->prepare("SELECT * FROM activity_img WHERE activity_id = :id");
                                                    $q_img->bindParam(":id", $row_activity['id']);
                                                    $q_img->execute();
                                                    $row_img = $q_img->fetchAll();
                                                    ?>
                                                    <div class="modal-dialog modal-xl  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit
                                                                    Activity</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id_act" value="<?php echo $row_activity['id'] ?>">
                                                                            <span>Cover Image</span>
                                                                            <div class="group-pos">

                                                                                <input type="file" name="img_cover_edit" id="imgInput-cover-edit" class="form-control">
                                                                                <!-- <button type="button" class="btn reset" id="reset1">ยกเลิก</button> -->
                                                                            </div>
                                                                            <span class="file-support">Only file support
                                                                                ('jpg', 'jpeg', 'png','webp').</span>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class='edit-img-cover' width="80%" id='previewImg-cover-edit' src="upload/upload_activity/<?php echo $row_activity['cover_img'] ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <span>Topic</span>
                                                                            <input type="text" name="topic_edit" value="<?php echo $row_activity['topic'] ?>" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <span>Date</span>
                                                                            <input type="text" name="date_edit" value="<?php echo $row_activity['date'] ?>" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <span>Content</span>
                                                                            <textarea name="content_edit"><?php echo $row_activity['content'] ?></textarea>
                                                                        </div>


                                                                    </div>
                                                                    <div class="content d-flex justify-content-center align-item-center mt-3">
                                                                        <div class="title-img">
                                                                            <span id="upload-img">Photo</span>
                                                                            <div class="group-pos">
                                                                                <input type="file" name="img_edit[]" id="imgInput-add2" onchange="preview_image();" class="form-control" multiple>
                                                                                <!-- <button type="button" class="btn reset" id="reset1">ยกเลิก</button> -->
                                                                            </div>
                                                                            <span class="file-support">Only file support
                                                                                ('jpg', 'jpeg', 'png','webp').</span>
                                                                            <div id="gallery_add">
                                                                                <?php
                                                                                foreach ($row_img as $row_img) { ?>
                                                                                    <div class="box-edit-img">
                                                                                        <span class="del-edit-img"><button type="submit" onclick="return confirm('Do you want to delete this image?')" name="del-img" value="<?php echo $row_img['id'] ?>" class="btn-edit-del-img"><i class="bi bi-x-lg"></button></i></span>
                                                                                        <img class='previewImg' id='edit-img' style="width: 60%;" src="upload/upload_activity/<?php echo $row_img['image'] ?>" alt="">
                                                                                    </div>
                                                                                <?php  }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center-align-item-center">
                                                                        <button type="submit" name="edit_activity" class="btn btn-save">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Status -->
                                                <!-- <div class="modal fade" id="status<?php echo $row_activity['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Status
                                                                    Setting</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-check form-switch">
                                                                    <form method="post">
                                                                        <div class="switch-box">
                                                                            <span>OFF</span>
                                                                            <input type="hidden" name="slide_id" value="<?php echo $row_activity['id']; ?>">
                                                                            <input class="form-check-input" id="switch-check" name="check" type="checkbox" <?php if ($row_activity['status'] == "on") {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } else {
                                                                                                                                                                echo "";
                                                                                                                                                            } ?>>
                                                                            <span>ON</span>
                                                                        </div>
                                                                        <div class="box-btn">
                                                                            <button name="change-status" class="btn btn-save" type="submit">Save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div> -->
                                            <?php   }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Add activity -->
                        <div class="modal fade" id="addactivity" data-bs-backdrop="static" aria-hidden="true">
                            <div class="modal-dialog modal-xl  modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Activity</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span>Cover Image</span>
                                                    <div class="group-pos">

                                                        <input type="file" name="img" id="imgInput-cover" class="form-control">
                                                        <!-- <button type="button" class="btn reset" id="reset1">ยกเลิก</button> -->
                                                    </div>
                                                    <span class="file-support">Only file support ('jpg', 'jpeg',
                                                        'png','webp').</span>

                                                </div>
                                                <div class="col-md-6">
                                                    <img class='edit-img-cover' width="80%" id='previewImg-cover'>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span>Topic</span>
                                                    <input type="text" name="topic" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <span>Date</span>
                                                    <input type="text" name="date" class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <span>Content</span>
                                                    <textarea name="content"></textarea>
                                                </div>


                                            </div>
                                            <div class="content d-flex justify-content-center align-item-center mt-3">
                                                <div class="title-img">
                                                    <span id="upload-img">Photo</span>
                                                    <div class="group-pos">
                                                        <input type="file" name="img_add[]" id="imgInput-add2" onchange="preview_image();" class="form-control" multiple>
                                                        <!-- <button type="button" class="btn reset" id="reset1">ยกเลิก</button> -->
                                                    </div>
                                                    <span class="file-support">Only file support ('jpg', 'jpeg',
                                                        'png','webp').</span>
                                                    <div id="gallery_add">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center-align-item-center">
                                                <button type="submit" name="add_activity" class="btn btn-save">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        function preview_image() {
            var total_file = document.getElementById("imgInput-add2").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#gallery_add').append(
                    "<div class='box-edit-img-add'><img width='100%' class='previewImg' id='edit-img-add' src='" + URL
                    .createObjectURL(event.target.files[i]) + "'></div>");
            }
        }
    </script>
    <script>
        let imgInput = document.getElementById('imgInput-cover');
        let previewImg = document.getElementById('previewImg-cover');
        let imgInput_edit = document.getElementById('imgInput-cover-edit');
        let previewImg_edit = document.getElementById('previewImg-cover-edit');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
        imgInput_edit.onchange = evt => {
            const [file] = imgInput_edit.files;
            if (file) {
                previewImg_edit.src = URL.createObjectURL(file);
            }
        }
    </script>
</body>

</html>