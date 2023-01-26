<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}

if (isset($_POST['add_shareholder'])) {
    $company_name = $_POST['company_name'];
    $qty = $_POST['qty'];
    $percen = $_POST['percen'];


    if (empty($company_name)) {
        echo "<script>alert('Please Enter Company Name')</script>";
    } else if (empty($qty)) {
        echo "<script>alert('Please Enter Qty')</script>";
    } else if (empty($percen)) {
        echo "<script>alert('Please Enter Percen')</script>";
    } else {
        try {


            $shareholder = $conn->prepare("INSERT INTO shareholder(company_name, qty, percen)
                                        VALUES(:company_name, :qty, :percen)");
            $shareholder->bindParam(":company_name", $company_name);
            $shareholder->bindParam(":qty", $qty);
            $shareholder->bindParam(":percen", $percen);

            $shareholder->execute();

            $id_shareholder = $conn->lastInsertId();


            if ($shareholder) {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add shareholder has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
                echo "<meta http-equiv='refresh' content='2;url=shareholder'>";
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">

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
                <h3>Shareholder Add</h3>
            </div>
            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Shareholder</h4>
                            <button type="submit" name="add_shareholder" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">

                            <div class="product-name">
                                <h6>Company Name</h6>
                                <input type="text" name="company_name" class="form-control">
                                <h6>Quantity</h6>
                                <input type="text" name="qty" class="form-control">
                                <h6>Percentage</h6>
                                <input type="text" name="percen" class="form-control">

                            </div>
                        </div>

                    </div>

                </form>
            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script language="javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

 

  
</body>

</html>