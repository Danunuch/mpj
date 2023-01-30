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

//add email
if (isset($_POST['add_email'])) {
    $email = $_POST['email'];
    $company_id = 1;
    if (empty($email)) {
        echo "<script>alert('Please Enter Email')</script>";
    } else {
        try {


            $insert_email = $conn->prepare("INSERT INTO email_1(email,company_id)
                                                  VALUES(:email,:company_id)");
            $insert_email->bindParam(":email", $email);
            $insert_email->bindParam(":company_id", $company_id);
            $insert_email->execute();

            if ($insert_email) {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add email has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
                echo "<meta http-equiv='refresh' content='1.5;url=email_1'>";
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

//edit email
if (isset($_POST['edit_email'])) {
    $email = $_POST['email_edit'];
    $id_email = $_POST['id_email'];

    $insert_email = $conn->prepare("UPDATE email_1 SET email = :email WHERE id = :id");
    $insert_email->bindParam(":email", $email);
    $insert_email->bindParam(":id", $id_email);
    $insert_email->execute();

    if ($insert_email) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Edit email has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=email_1'>";
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

//delete email
if(isset($_POST['delete'])){
    $delete = $_POST['delete'];

    $del_email = $conn->prepare("DELETE FROM email_1 WHERE id = :id");
    $del_email->bindParam(":id",$delete);
    $del_email->execute();

    if ($del_email) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Delete email has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=email_1'>";
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

//query email
$stmt = $conn->prepare("SELECT * FROM email_1");
$stmt->execute();
$row_email = $stmt->fetchAll();


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
                <h3>Email</h3>
            </div>
            <section class="section">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Email for receiving messages from customers</h4>
                        <div class="box-lang">
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
                                                <th scope="col" width="20%">Email</th>
                                                <th scope="col" width="10%">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($row_email as $row_email) { ?>
                                                <tr align="center">
                                                    <td><?php echo $row_email['email'] ?></td>
                                                    <td>
                                                        <form method="post">
                                                            <a type="input" data-bs-toggle="modal" href="#editactivity<?php echo $row_email['id'] ?>" class="btn " style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></a>
                                                            <button type="submit" class="btn" value="<?php echo $row_email['id']; ?>" onclick="return confirm('You want to delete this email?');" name="delete" style="background-color:#c3412c; color: #FFFFFF;"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <!-- Modal Edit email -->
                                                <div class="modal fade" id="editactivity<?php echo $row_email['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                                    <div class="modal-dialog modal-md  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Email</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <span>Email (@mpjlogistics.com)</span>
                                                                            <input type="hidden" name="id_email" value="<?php echo $row_email['id']  ?>">
                                                                            <input type="text" name="email_edit" value="<?php echo $row_email['email']  ?>" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center-align-item-center">
                                                                        <button type="submit" name="edit_email" class="btn btn-save">Save</button>
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

                        <!-- Modal Add email -->
                        <div class="modal fade" id="addactivity" data-bs-backdrop="static" aria-hidden="true">
                            <div class="modal-dialog modal-md  modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Email</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>Email (@mpjlogistics.com)</span>
                                                    <input type="text" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center-align-item-center">
                                                <button type="submit" name="add_email" class="btn btn-save">Save</button>
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
</body>

</html>