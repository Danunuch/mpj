<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}
$id = 1;

$data_contact = $conn->prepare("SELECT * FROM contact WHERE id = :id");
$data_contact->bindParam(":id", $id);
$data_contact->execute();
$row_contact = $data_contact->fetch(PDO::FETCH_ASSOC);



if (isset($_POST['edit-contact'])) {
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $line = $_POST['line'];
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $img = $_FILES['img'];


    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_contact/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                $edit_contact = $conn->prepare("UPDATE contact SET company_name = :company_name, address = :address, tel1 = :tel1, tel2 = :tel2, email = :email, line = :line, line_qr = :line_qr WHERE id = :id");
                $edit_contact->bindParam(":company_name", $company_name);
                $edit_contact->bindParam(":tel1", $tel1);
                $edit_contact->bindParam(":tel2", $tel2);
                $edit_contact->bindParam(":email", $email);
                $edit_contact->bindParam(":line", $line);
                $edit_contact->bindParam(":line_qr", $fileNew1);
                $edit_contact->bindParam(":id", $id);
                $edit_contact->execute();

                if ($edit_contact) {
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Contact has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
                    echo "<meta http-equiv='refresh' content='2;url=contact_us'>";
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
        $edit_contact = $conn->prepare("UPDATE contact SET company_name = :company_name, address = :address, tel1 = :tel1, tel2 = :tel2, email = :email, line = :line WHERE id = :id");
        $edit_contact->bindParam(":company_name", $company_name);
        $edit_contact->bindParam(":address", $address);
        $edit_contact->bindParam(":tel1", $tel1);
        $edit_contact->bindParam(":tel2", $tel2);
        $edit_contact->bindParam(":email", $email);
        $edit_contact->bindParam(":line", $line);
        $edit_contact->bindParam(":id", $id);
        $edit_contact->execute();

        if ($edit_contact) {
            echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Contact has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
            echo "<meta http-equiv='refresh' content='2;url=contact_us'>";
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
                <h3>Contact Us</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contact Us</h4>
                        <div class="flex-end">
                            <a href="contact_us_en"><button type="button" class="btn btn-edit1">EN</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="30%">Company Name</th>
                                        <th width="40%">Address</th>
                                        <th width="10%">Email</th>
                                        <th width="20%">Line ID</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td align="center"><?php echo $row_contact['company_name']; ?></td>
                                        <td align="center"><?php echo $row_contact['address']; ?></td>
                                        <td align="center"><?php echo $row_contact['email']; ?></td>
                                        <td align="center"><?php echo $row_contact['line']; ?></td>
                                        <td align="center">
                                            <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#info<?php echo $row_contact['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                            <!-- <button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></button> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="modal fade" id="info<?php echo $row_contact['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Info Contact</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="content-contact">
                                                <h6>Company Name :</h6>
                                                <span><?php echo $row_contact['company_name']; ?></span>
                                                <h6>Address :</h6>
                                                <span><?php echo $row_contact['address']; ?></span>
                                                <h6>Email :</h6>
                                                <span><?php echo $row_contact['email']; ?></span>
                                                <h6>Line ID :</h6>
                                                <span><?php echo $row_contact['line']; ?></span>
                                                <h6>Tel 1 :</h6>
                                                <span><?php echo $row_contact['tel1']; ?></span>
                                                <h6>Tel 2 :</h6>
                                                <span><?php echo $row_contact['tel2']; ?></span>
                                                <h6>Line Qr-Code :</h6>
                                                <span><img width="40%" src="upload/upload_contact/<?php echo $row_contact['line_qr'] ?>" alt=""></span>
                                            </div>
                                            <div class="edit-contact">
                                                <a type="input" class="btn btn-edit" data-bs-toggle="modal" href="#edit-info<?php echo $row_contact['id'] ?>">Edit</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="edit-info<?php echo $row_contact['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Contact</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="content-contact">
                                                    <h6>Company Name :</h6>
                                                    <input type="text" name="company_name" class="form-control" value="<?php echo $row_contact['company_name']; ?>">
                                                    <h6>Address :</h6>
                                                    <input type="text" name="address" class="form-control" value="<?php echo $row_contact['address']; ?>">
                                                    <h6>Email :</h6>
                                                    <input type="text" name="email" class="form-control" value="<?php echo $row_contact['email']; ?>">
                                                    <h6>Line ID :</h6>
                                                    <input type="text" name="line" class="form-control" value="<?php echo $row_contact['line']; ?>">
                                                    <h6>Tel 1 :</h6>
                                                    <input type="text" name="tel1" class="form-control" value="<?php echo $row_contact['tel1']; ?>">
                                                    <h6>Tel 2 :</h6>
                                                    <input type="text" name="tel2" class="form-control" value="<?php echo $row_contact['tel2']; ?>">
                                                    <h6>Line Qr-Code :</h6>
                                                    <input type="file" name="img" class="form-control">
                                                </div>
                                                <div class="edit-contact">
                                                    <button class="btn btn-save" name="edit-contact">Save</button>
                                                </div>
                                            </form>
                                        </div>

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

</body>

</html>