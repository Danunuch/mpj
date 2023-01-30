<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

$stmt = $conn->prepare("SELECT * FROM board");
$stmt->execute();
$row_board = $stmt->fetch(PDO::FETCH_ASSOC);




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
                <h3>Board</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Board</h4>
                        <div class="box-lang">
                            <a href="board_en"><button type="button" class="btn btn-edit">EN</button></a>
                            <a href="board_edit"><button type="button" class="btn btn-edit1">Edit</button></a>
                        </div>
                    </div>
                    <div class="container">
                        <?php echo $row_board['content']; ?>
                        <div class="d-flex justify-content-center align-items-center" style="margin: 30px;">
                        <img width="70%" src="upload/upload_board/<?php echo $row_board['img']; ?>" alt="">
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