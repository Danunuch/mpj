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


$data_publi = $conn->prepare("SELECT * FROM publication ORDER BY id DESC");
$data_publi->execute();
$row_publi = $data_publi->fetchAll();

// delete plubic
if (isset($_POST['delete_plubi'])) {
    $id = $_POST['delete_plubi'];
    $del_plubi = $conn->prepare("DELETE FROM publication WHERE id = :id");
    $del_plubi->bindParam(":id", $id);
    $del_plubi->execute();

    if ($del_plubi) {
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
        echo "<meta http-equiv='refresh' content='2;url=publication'>";
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
    <link rel="stylesheet" href="css/product.css?v=<?php echo time();?>">
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
                <h3>Publication</h3>
            </div>
            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Publication</h4>
                            <div class="flex-end">
                                <a href="publication_en"><button type="button" class="btn btn-edit">EN</button></a>
                                <a href="publication_add"><button type="button" class="btn btn-add">Add</button></a>
                          
                            </div>

                        </div>


                        <div class="card-body" >
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead align="center" >
                                        <tr>
                                            
                                            <th  width="20%">Cover Image</th>
                                            <th width="30%">Content</th>
                                            <th  width="40%">Manage</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    for ($i = 0; $i < count($row_publi); $i++) {
                                        $id = $row_publi[$i]["id"];
                                      

                                    ?>
                                        <tbody>
                                            <tr>
                                               
                                                <td align="center" width="20%">
                                                    <img width="50%" src="upload/upload_publication/<?php echo $row_publi[$i]['img']; ?>" alt="">
                                                </td>
                                                <td align="left"><?php echo $row_publi[$i]['content']; ?></td>
                                            
                                                <td align="center">
                                                    <div class="manage">
                                                        <a href="publication_edit?publication_id=<?php echo $row_publi[$i]['id']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></button></a>
                                                        <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_plubi" value="<?php echo $row_publi[$i]['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
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

    <script>
        //for checkbox
        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if (this.checked) {
                    $('.checkbox').each(function() {
                        this.checked = true;
                    })
                } else {
                    $('.checkbox').each(function() {
                        this.checked = false;
                    })
                }
            })
            $('.checkbox').on('click', function() {
                if ($('.checkbox:checked').length == $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            })
        });
    </script>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>