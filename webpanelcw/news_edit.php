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


if (isset($_GET['news_id'])) {
    $id = $_GET['news_id'];

    $news = $conn->prepare("SELECT * FROM news WHERE id = :id");
    $news->bindParam(":id", $id);
    $news->execute();
    $row_news = $news->fetch(PDO::FETCH_ASSOC);
}
if (isset($_POST['edit-news'])) {
    $content = $_POST['content'];
    $link = $_POST['link'];
    $date_show = $_POST['date_show'];

    $news = $conn->prepare("UPDATE news SET content = :content, link = :link, date_show = :date_show WHERE id = :id");
    $news->bindParam(":content", $content);
    $news->bindParam(":link", $link);
    $news->bindParam(":date_show", $date_show);
    $news->bindParam(":id", $id);
    $news->execute();
    if ($news) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'The edit has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='2;url=news'>";
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
    <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">

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
                <h3>News Room Edit</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="product-name">
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-header">
                                    <h4 class="card-title">News Room</h4>
                                    <button type="submit" name="edit-news" class="btn btn-save">Save</button>
                                </div>
                                <div class="card-body">
                                    <h6>Date</h6>
                                    <input type="text" name="date_show" value="<?php echo $row_news['date_show'];?> " class="form-control">
                                </div>
                                <div class="card-body">
                                    <h6>Link</h6>
                                    <input type="text" name="link" value="<?php echo $row_news['link']; ?> " class="form-control">
                                </div>
                                <textarea name="content"><?php echo $row_news['content']; ?></textarea>
                                <script>
                                    tinymce.init({
                                        selector: 'textarea',
                                        branding: false,
                                        height: "300",
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
                            </form>
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

  

</body>

</html>