<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

$data_stock = $conn->prepare("SELECT * FROM stock");
$data_stock->execute();
$row_stock = $data_stock->fetchAll();


if (isset($_POST['edit-stock'])) {
    $id = $_POST['id'];
    $link = $_POST['link'];

    $edit_stock = $conn->prepare("UPDATE stock SET link = :link WHERE id = :id");
    $edit_stock->bindParam(":link", $link);
    $edit_stock->bindParam(":id", $id);
    $edit_stock->execute();

    if ($edit_stock) {
        echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'Edit stock has been completed.',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
        echo "<meta http-equiv='refresh' content='2;url=stock'>";
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
// if (isset($_POST['delete_stock'])) {
//     $id = $_POST['delete_stock'];
//     $del_stock = $conn->prepare("DELETE FROM stock WHERE id = :id");
//     $del_stock->bindParam(":id", $id);
//     $del_stock->execute();

//     if ($del_stock) {
//         echo "<script>
//         $(document).ready(function() {
//             Swal.fire({
//                 text: 'Delete stock has been completed.',
//                 icon: 'success',
//                 timer: 10000,
//                 showConfirmButton: false
//             });
//         })
//         </script>";
//         echo "<meta http-equiv='refresh' content='2;url=stock'>";
//     } else {
//         echo "<script>
//         $(document).ready(function() {
//             Swal.fire({
//                 text: 'Something Went Wrong!!!',
//                 icon: 'error',
//                 timer: 10000,
//                 showConfirmButton: false
//             });
//         })
//         </script>";
//     }
// }
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
                <h3>Stock Price Information</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stock Price Information</h4>
                        <div class="flex-end">
                            <a href="stock_en"><button type="button" class="btn btn-edit1">EN</button></a>
                            <!-- <a href="stock_add"><button type="button" class="btn btn-edit1">Add</button></a> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th width="40%">link Name</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($row_stock as $row_stock) { ?>
                                        <tr>
                                            <td align="center"><?php echo $row_stock['link']; ?></td>
                                            <td align="center">
                                            <form method="post">
                                                <a type="input" class="btn btn-warning" style="color: #FFFFFF;" data-bs-toggle="modal" href="#edit-info<?php echo $row_stock['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                                <!-- <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_stock" value="<?php echo $row_stock['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button> -->
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edit-info<?php echo $row_stock['id'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Info Stock</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="content-contact">

                                                                <input type="hidden" name="id" value="<?php echo $row_stock['id']; ?>">
                                                                <h6>Link</Link> :</h6>
                                                                <input type="text" name="link" class="form-control" value="<?php echo $row_stock['link']; ?>">

                                                            </div>
                                                            <div class="edit-contact">
                                                                <button class="btn btn-save" name="edit-stock">Save</button>
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