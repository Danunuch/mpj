<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

$data_ref = $conn->prepare("SELECT * FROM catta_cer1_en");
$data_ref->execute();
$row_cer1 = $data_ref->fetchAll();


$data_certificate = $conn->prepare("SELECT * FROM certificate_en ORDER BY id DESC");
$data_certificate->execute();
$row_certificate = $data_certificate->fetchAll();



if (isset($_POST['edit-catta'])) {
    $cer_id = $_POST['cer_id'];
    $cer_name = $_POST['cer_name'];

    $edit_cer = $conn->prepare("UPDATE catta_cer1_en SET cer_name = :cer_name WHERE cer_id = :cer_id");
    $edit_cer->bindParam(":cer_name", $cer_name);
    $edit_cer->bindParam(":cer_id", $cer_id);
    $edit_cer->execute();

    if ($edit_cer) {
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
        echo "<meta http-equiv='refresh' content='2;url=cer_en'>";
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


// delete ref
if (isset($_POST['delete_cer'])) {
    $cer_id = $_POST['delete_cer'];
    $del_cer = $conn->prepare("DELETE FROM catta_cer1_en WHERE cer_id = :id");
    $del_cer->bindParam(":id", $cer_id);
    $del_cer->execute();

    if ($del_cer) {
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
        echo "<meta http-equiv='refresh' content='2;url=cer_en'>";
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


// delete certificate
if (isset($_POST['delete_certi'])) {
    $certi_id = $_POST['delete_certi'];
    $del_certi = $conn->prepare("DELETE FROM certificate_en WHERE id = :id");
    $del_certi->bindParam(":id", $certi_id);
    $del_certi->execute();

    if ($del_certi) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Certificate has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=cer_en'>";
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
                <h3>Type Certificate</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Certificate</h4>
                        <div class="flex-end">
                            <a href="cer"><button type="button" class="btn btn-edit1">TH</button></a>
                            <a href="cer_add_en"><button type="button" class="btn btn-edit1">Add</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="40%">Cer Name</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_cer1 as $row_cer1) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_cer1['cer_name']; ?></td>
                                            <td align="center">
                                                <form method="post">
                                                    <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_cer1['cer_id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_cer" value="<?php echo $row_cer1['cer_id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_cer1['cer_id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Contact</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="cer_id" value="<?php echo $row_cer1['cer_id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="cer_name" class="form-control" value="<?php echo $row_cer1['cer_name']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-catta">Save</button>
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
                            <h4 class="card-title">Certificates & Awards</h4>
                            <div class="flex-end">
                                <a href="certificate_add_en"><button type="button" class="btn btn-edit1">Add</button></a>
                                <!-- <button type="submit" onclick="return confirm('Do you want to delete all?');" name="delete_all" class="btn btn-del">Delete</button> -->

                            </div>

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead align="center">
                                        <tr>
                                            <th width="50%">Image</th>
                                            <th width="50%">Manage</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    for ($i = 0; $i < count($row_certificate); $i++) {
                                       
                                       
                                    ?>
                                        <tbody>
                                            <tr>
                                               
                                                <td align="center" width="20%">
                                                    <img width="40%" src="upload/upload_cer/<?php echo $row_certificate[$i]['img']; ?>" alt="">
                                                </td>
                                              
                                                <td align="center">
                                                    <div class="manage">
                                                        <!-- <a href="certificate_ref_edit?certificate_id=<?php echo $row_certificate[$i]['certificate_id']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF; margin:3px;"><i class="bi bi-pencil-square"></i></button></a> -->
                                                        <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_certi" value="<?php echo $row_certificate[$i]['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
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






            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>