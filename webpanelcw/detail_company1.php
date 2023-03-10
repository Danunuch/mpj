<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
// error_reporting(0);
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}


if (isset($_POST['edit-company'])) {
    $content = $_POST['content'];
    $img = $_FILES['img'];



    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_company1/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                $edit_company = $conn->prepare("UPDATE company1 SET content = :content, img = :img");
                $edit_company->bindParam(":content", $content);
                $edit_company->bindParam(":img", $fileNew1);
                $edit_company->execute();
                if ($edit_company) {
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'The company detail has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
                    echo "<meta http-equiv='refresh' content='2;url=detail_company1'>";
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
        }
    } else {
        $edit_company = $conn->prepare("UPDATE company1 SET content = :content");
        $edit_company->bindParam(":content", $content);
        $edit_company->execute();
        if ($edit_company) {
            echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    text: 'The detail company has been completed.',
                    icon: 'success',
                    timer: 10000,
                    showConfirmButton: false
                });
            })
            </script>";
            echo "<meta http-equiv='refresh' content='2;url=detail_company1'>";
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
}


//add blog company
// if (isset($_POST['add_blog_company'])) {
//     $img = $_FILES['img'];
//     $topic = $_POST['topic'];
//     $content = $_POST['content'];


//     $allow = array('jpg', 'jpeg', 'png', 'webp');
//     $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
//     $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
//     $fileNew1 = rand() . "." . "webp";
//     $filePath1 = "upload/upload_blog/" . $fileNew1;

//     if (empty($topic)) {
//         echo "<script>alert('Please Enter Topic')</script>";
//     } else if (empty($img)) {
//         echo "<script>alert('Please Enter Image')</script>";
//     } else if (empty($content)) {
//         echo "<script>alert('Please Enter Content')</script>";
//     } else {
//         try {
//             if (in_array($fileActExt1, $allow)) {
//                 if ($img['size'] > 0 && $img['error'] == 0) {
//                     if (move_uploaded_file($img['tmp_name'], $filePath1)) {
//                         $blog = $conn->prepare("INSERT INTO blog_company(img,topic,content)
//                                                   VALUES(:img,:topic,:content)");
//                         $blog->bindParam(":img", $fileNew1);
//                         $blog->bindParam(":topic", $topic);
//                         $blog->bindParam(":content", $content);
//                         $blog->execute();

//                         $id_blog = $conn->lastInsertId();
//                     }
//                 }
//             }

//             if ($blog) {
//                 echo "<script>
//                 $(document).ready(function() {
//                     Swal.fire({
//                         text: 'Add Detail Company has been completed.',
//                         icon: 'success',
//                         timer: 10000,
//                         showConfirmButton: false
//                     });
//                 })
//                 </script>";
//                 echo "<meta http-equiv='refresh' content='1.5;url=detail_company4'>";
//             } else {
//                 echo "<script>
//                 $(document).ready(function() {
//                     Swal.fire({
//                         text: 'Something Went Wrong!!!',
//                         icon: 'error',
//                         timer: 10000,
//                         showConfirmButton: false
//                     });
//                 })
//                 </script>";
//             }
//         } catch (PDOException $e) {
//             echo $e->getMessage();
//         }
//     }
// }


//edit blog company
if (isset($_POST['edit_blog_company'])) {
    $img = $_FILES['img'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_blog1/" . $fileNew1;


    if (in_array($fileActExt1, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                $blog = $conn->prepare("UPDATE blog_company1 SET img = :img,content = :content WHERE id = :id");
                $blog->bindParam(":img", $fileNew1);
                $blog->bindParam(":content", $content);
                $blog->bindParam(":id", $id);
                $blog->execute();
            }
        }
    } else {
        $blog = $conn->prepare("UPDATE blog_company1 SET content = :content WHERE id = :id");
        $blog->bindParam(":content", $content);
        $blog->bindParam(":id", $id);
        $blog->execute();
    }

    if ($blog) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Edit Blog Company has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=detail_company1'>";
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



$stmt = $conn->prepare("SELECT * FROM company1");
$stmt->execute();
$row_company1 = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $conn->prepare("SELECT * FROM blog_company1");
$stmt->execute();
$row_blog_company = $stmt->fetchAll();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">

    <link rel="stylesheet" href="css/product.css?v=<?php echo time() ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">

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
                <h3>Company Edit</h3>
            </div>
            <section class="section">
                <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header" style="display: flex ;justify-content: flex-end;">
                            <h4 class="card-title"></h4>
                            <div class="a">
                                <a href="detail_company1_en"><button type="button" class="btn btn-edit">EN</button></a>
                                <button type="submit" name="edit-company" class="btn btn-save">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>Content</h5>
                            <textarea name="content"><?php echo $row_company1['content']; ?></textarea>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    branding: false,
                                    height: "250",
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [{
                                            value: 'First.Name',
                                            title: 'First Name'
                                        },
                                        {
                                            value: 'Email',
                                            title: 'Email'
                                        },
                                    ]
                                });
                            </script>
                        </div>
                        <div class="card-body">
                            <!-- <h5>Image</h5> -->
                            <div class="box-upload-img">
                                <h5>Upload Image here</h5>
                                <div class="box-input-upload">
                                    <input type="file" id="imgInput" name="img" class="form-control">
                                    <!-- <button type="button" id="reset" class="btn btn-reset">Reset</button> -->
                                </div>
                                <span style="color: #ff4122;">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                <div class="preview-img">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img id="previewImg" width="50%" src="upload/upload_company1/<?php echo $row_company1['img'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>


            <div class="page-heading">
                <h3>Blog Company</h3>
            </div>
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blog Company</h4>
                       
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
                                                <th scope="col" width="40%">Content</th>
                                                <th scope="col" width="30%">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($row_blog_company as $row_blog_company) { ?>
                                                <tr align="center">
                                                    <td align="center"><img width="70%" src="upload/upload_blog1/<?php echo $row_blog_company['img'] ?>" alt=""></td>
                                                    <td align="left"><?php echo $row_blog_company['content'] ?></td>
                                                    <td>
                                                        <form method="post">
                                                            <a type="input" data-bs-toggle="modal" href="#editactivity<?php echo $row_blog_company['id'] ?>" class="btn " style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></a>
                                                            <!-- <button type="submit" class="btn" value="<?php echo $row_blog_company['id']; ?>" onclick="return confirm('You want to delete this blog?');" name="delete" style="background-color:#c3412c; color: #FFFFFF;"><i class="bi bi-trash"></i></button> -->
                                                        </form>
                                                    </td>
                                                </tr>

                                                <!-- Modal Edit blog -->
                                                <div class="modal fade" id="editactivity<?php echo $row_blog_company['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                                    <
                                                    <div class="modal-dialog modal-xl  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit
                                                                    Blog</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id" value="<?php echo $row_blog_company['id'] ?>">
                                                                            <span>Cover Image</span>
                                                                            <div class="group-pos">

                                                                                <input type="file" name="img" id="imgInput" class="form-control">
                                                                                <!-- <button type="button" class="btn reset" id="reset1">ยกเลิก</button> -->
                                                                            </div>
                                                                            <span class="file-support">Only file support
                                                                                ('jpg', 'jpeg', 'png','webp').</span>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img class='edit-img-cover' width="80%" id='previewImg' src="upload/upload_blog1/<?php echo $row_blog_company['img'] ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <span>Content</span>
                                                                            <textarea name="content"><?php echo $row_blog_company['content']; ?></textarea>
                                                                            <script>
                                                                                tinymce.init({
                                                                                    selector: 'textarea',
                                                                                    branding: false,
                                                                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                                                                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                                                                    tinycomments_mode: 'embedded',
                                                                                    tinycomments_author: 'Author name',
                                                                                    mergetags_list: [{
                                                                                            value: 'First.Name',
                                                                                            title: 'First Name'
                                                                                        },
                                                                                        {
                                                                                            value: 'Email',
                                                                                            title: 'Email'
                                                                                        },
                                                                                    ]
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="submit" name="edit_blog_company" class="btn btn-save">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            <?php   }
                                            ?>

                                        </tbody>
                                    </table>
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
    <script language="javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#reset').click(function() {
                $('#imgInput').val(null);
                $('#previewImg').attr("src", "");
            });

        });
    </script>
</body>

</html>