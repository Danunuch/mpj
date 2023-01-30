<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/mpj_db.php');
session_start();
error_reporting(0);
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}


$data_news = $conn->prepare("SELECT * FROM news_en ORDER BY id DESC");
$data_news->execute();
$row_news = $data_news->fetchAll();


// delete news
if (isset($_POST['delete_news'])) {
    $id = $_POST['delete_news'];
    $del_news = $conn->prepare("DELETE FROM news_en WHERE id = :id");
    $del_news->bindParam(":id", $id);
    $del_news->execute();

    if ($del_news) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete News has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=news_en'>";
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

    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link rel="stylesheet" href="css/product.css?v=<?php echo time(); ?>">
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
                <h3>News Room</h3>
            </div>
            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">News Room</h4>
                            <div class="flex-end">
                                <a href="news"><button type="button" class="btn btn-edit">TH</button></a>
                                <a href="news_add_en"><button type="button" class="btn btn-add">Add</button></a>

                            </div>

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead align="center">
                                        <tr>
                                            <th width="60%">Content</th>
                                            <th width="40%">Manage</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    for ($i = 0; $i < count($row_news); $i++) {
                                        $id = $row_news[$i]["id"];

                                    ?>
                                        <tbody>
                                            <tr>
                                                <td align="left"><b>วันที่ : </b><?php echo $row_news[$i]['date']; ?>
                                                    <br><?php echo $row_news[$i]['content']; ?>
                                                    <br><b>Link :</b><?php echo $row_news[$i]['link']; ?>
                                                </td>
                                                <td align="center">
                                                    <div class="manage">
                                                        <a href="news_edit_en?news_id=<?php echo $row_news[$i]['id']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></button></a>
                                                        <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_news" value="<?php echo $row_news[$i]['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
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