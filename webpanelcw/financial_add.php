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

if (isset($_POST['financial_add'])) {
    $financial_name = $_POST['financial_name'];
    $link_pdf = $_POST['link_pdf'];


    if (empty($financial_name)) {
        echo "<script>alert('กรุณากรอกข้อมูล')</script>";
    } else {
        $financial = $conn->prepare("INSERT INTO financial (financial_name,link_pdf)
                                        VALUES(:financial_name, :link_pdf)");
        $financial->bindParam(":financial_name", $financial_name);
        $financial->bindParam(":link_pdf", $link_pdf);
        $financial->execute();
    }

    if ($financial) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add financial has been completed.',
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
    <!-- <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>"> -->
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="image/logodoj.png" type="image/png">
    <link rel="stylesheet" href="css/service.css?v=<?php echo time(); ?>">
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
                <h3>Financial Add</h3>
            </div>
            <section class="section">
                <form method="post" >
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Financial</h4>
                            <button type="submit" name="financial_add" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">
                            <div class="product-name">
                                <h6>Financial Name</h6>
                                <input type="text" name="financial_name" class="form-control">
                                <br><h6>Link PDF</h6>
                                <input type="text" name="link_pdf" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>


        <?php include('footer.php'); ?>
    </div>

    <script language="javascript" src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>



</body>

</html>