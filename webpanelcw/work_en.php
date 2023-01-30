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

$data_position = $conn->prepare("SELECT * FROM position_en");
$data_position->execute();
$row_position = $data_position->fetchAll();


$data_detail_pos = $conn->prepare("SELECT * FROM detail_pos_en ORDER BY id DESC");
$data_detail_pos->execute();
$row_detail_pos = $data_detail_pos->fetchAll();



if (isset($_POST['edit-position'])) {
    $id = $_POST['id'];
    $position_name = $_POST['position_name'];

    $edit_pos = $conn->prepare("UPDATE position_en SET position_name = :position_name WHERE id = :id");
    $edit_pos->bindParam(":position_name", $position_name);
    $edit_pos->bindParam(":id", $id);
    $edit_pos->execute();

    if ($edit_pos) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Type has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='2;url=work_en'>";
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


// delete type cer
if (isset($_POST['delete_pos'])) {
    $id = $_POST['delete_pos'];
    $del_pos = $conn->prepare("DELETE FROM position_en WHERE id = :id");
    $del_pos->bindParam(":id", $id);
    $del_pos->execute();

    if ($del_pos) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Type has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=work_en'>";
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

// delete detail pos
if (isset($_POST['delete_detail_pos'])) {
    $detail_pos_id = $_POST['delete_detail_pos'];
    $del_detail_pos = $conn->prepare("DELETE FROM detail_pos_en WHERE id_pos = :id_pos");
    $del_detail_pos->bindParam(":id_pos", $detail_pos_id);
    $del_detail_pos->execute();

    if ($del_detail_pos) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Detail Position has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=work_en'>";
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


if (isset($_POST['save_work_content'])) {
    $content = $_POST['content'];

    $update_work_content = $conn->prepare("UPDATE work_content_en SET content = :content");
    $update_work_content->bindParam(":content", $content);
    $update_work_content->execute();

    if ($update_work_content) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Edit work has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=work_en'>";
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





//query work_content
$stmt = $conn->prepare("SELECT * FROM work_content_en");
$stmt->execute();
$row_work_content = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

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
                <h3>Position</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Position</h4>
                        <div class="flex-end">
                            <a href="work"><button type="button" class="btn btn-edit1">TH</button></a>
                            <a href="work_add"><button type="button" class="btn btn-edit1">Add</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="60%">Position Name</th>
                                        <th width="40%">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_position as $row_position) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_position['position_name']; ?></td>
                                            <td align="center">
                                                <form method="post">
                                                    <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_position['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_pos" value="<?php echo $row_position['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_position['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Contact</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="id" value="<?php echo $row_position['id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="position_name" class="form-control" value="<?php echo $row_position['position_name']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-position">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Position</h4>
                            <div class="flex-end">
                                <a href="detail_pos_add"><button type="button" class="btn btn-add">Add</button></a>
                                <!-- <button type="submit" onclick="return confirm('Do you want to delete all?');" name="delete_all" class="btn btn-del">Delete</button> -->

                            </div>

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead align="center">
                                        <tr>
                                            <th width="60%">Detail Position</th>
                                            <th width="40%">Manage</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    for ($i = 0; $i < count($row_detail_pos); $i++) {
                                       
                                       
                                    ?>
                                        <tbody>
                                            <tr>
                                               
                                            <td align="left"><?php echo $row_detail_pos[$i]['content']; ?></td>
                                              
                                                <td align="center">
                                                    <div class="manage">
                                                        <a href="detail_pos_edit_en?work_id=<?php echo $row_detail_pos[$i]['id_pos']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF; margin:3px;"><i class="bi bi-pencil-square"></i></button></a>
                                                        <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_detail_pos" value="<?php echo $row_detail_pos[$i]['id_pos']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        
                                    <?php }
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Work Content</h4>
                            <div class="box-lang">
                                
                                <button type="submit" name="save_work_content" class="btn btn-save">save</button>
                            </div>
                        </div>
                        <div class="card-body">
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
                                    <textarea name="content"><?php echo $row_work_content['content'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>