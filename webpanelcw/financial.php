<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

$data_financial = $conn->prepare("SELECT * FROM financial");
$data_financial->execute();
$row_financial = $data_financial->fetchAll();


if (isset($_POST['edit-financial'])) {
    $id = $_POST['id'];
    $financial_name = $_POST['financial_name'];
    $link_pdf = $_POST['link_pdf'];

    $edit_financial = $conn->prepare("UPDATE financial SET financial_name = :financial_name, link_pdf = :link_pdf WHERE id = :id");
    $edit_financial->bindParam(":financial_name", $financial_name);
    $edit_financial->bindParam(":link_pdf", $link_pdf);
    $edit_financial->bindParam(":id", $id);
    $edit_financial->execute();

    if ($edit_financial) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit Financial has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='2;url=financial'>";
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
if (isset($_POST['delete_financial'])) {
    $id = $_POST['delete_financial'];
    $del_financial = $conn->prepare("DELETE FROM financial WHERE id = :id");
    $del_financial->bindParam(":id", $id);
    $del_financial->execute();

    if ($del_financial) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete financial has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=financial'>";
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
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">
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
                <h3>Type Project</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Type Project</h4>
                        <div class="flex-end">
                            <a href="financial_en"><button type="button" class="btn btn-edit1">EN</button></a>
                            <a href="financial_add"><button type="button" class="btn btn-edit1">Add</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="40%">financial Name</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_financial as $row_financial) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_financial['financial_name']; ?></td>
                                            <td align="center">
                                            <form method="post">
                                                <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_financial['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_financial" value="<?php echo $row_financial['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_financial['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Contact</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="id" value="<?php echo $row_financial['id']; ?>">
                                                                <h6>Type Name :</h6>
                                                                <input type="text" name="financial_name" class="form-control" value="<?php echo $row_financial['financial_name']; ?>">
                                                                <h6>Link PDF</Link> :</h6>
                                                                <input type="text" name="link_pdf" class="form-control" value="<?php echo $row_financial['link_pdf']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-financial">Save</button>
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
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>