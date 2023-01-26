<?php
require_once('config/mpj_db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

$stmt = $conn->prepare("SELECT * FROM shareholder ORDER BY id DESC");
$stmt->execute();
$row_shareholder = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['delete_all'])) {
    if (count((array)$_POST['ids']) > 0) {
        $all = implode(",", $_POST['ids']);
        $del_shareholder = $conn->prepare("DELETE FROM shareholder WHERE id in ($all)");
        $del_shareholder->execute();



        echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    text: 'Delete shareholder Success',
                    icon: 'success',
                    timer: 10000,
                    showConfirmButton: false
                });
            })
            </script>";
        echo "<meta http-equiv='refresh' content='2;url=shareholder'>";
    } else {
        echo "<script>alert('Something Went Wrong!!!')</script>";
        echo "<meta http-equiv='refresh' content='2;url=shareholder'>";
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
                <h3>Shareholder</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Shareholder</h4>
                        <div class="box-lang">
                            <a href="shareholder_en"><button type="button" class="btn btn-edit">EN</button></a>
                            <a href="shareholder_edit"><button type="button" class="btn btn-edit1">Edit</button></a>
                        </div>
                    </div>
                    <div class="card-body" style="display: flex;">

                        <?php echo $row_shareholder['content']; ?>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead align="center">
                                    <tr>
                                        <th scope="col">
                                            <input type="checkbox" class="form-check-input checkbox-select" id="select_all">
                                        </th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Percentage</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <?php
                                for ($i = 0; $i < count($row_shareholder); $i++) {

                                    $stmt = $conn->prepare("SELECT * FROM shareholder ORDER BY id DESC");
                                    $stmt->execute();
                                    $row_shareholder = $stmt->fetchAll(); ?>

                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <input type="checkbox" class="form-check-input checkbox checkbox-select" name="ids[]" value=<?php echo $row_shareholder[$i]['id'] ?>>
                                            </td>
                                            <td align="center"><?php echo $row_shareholder[$i]['company_name']; ?></td>
                                            <td align="center"><?php echo $row_shareholder[$i]['qty']; ?></td>
                                            <td align="center"><?php echo $row_shareholder[$i]['percen']; ?></td>
                                            <td align="center">
                                                <div class="manage">
                                                    <a href="shareholder_edit?shareholder_id=<?php echo $row_shareholder[$i]['id']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF; margin:3px;"><i class="bi bi-pencil-square"></i></button></a>
                                                    <button class="btn" onclick="return confirm('Do you want to delete?');" name="delete_all" style="background-color:#ff4122; color: #FFFFFF;"><i class="bi bi-trash"></i></button>
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


            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
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
</body>

</html>