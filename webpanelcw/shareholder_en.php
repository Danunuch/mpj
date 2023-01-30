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

$stmt = $conn->prepare("SELECT * FROM shareholder_en ORDER BY id DESC");
$stmt->execute();
$row_shareholder = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $conn->prepare("SELECT * FROM sha_content_en");
$stmt->execute();
$row_sha_content = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['delete_sha'])) {
    $id = $_POST['shareholder_id'];
    $del_sub = $conn->prepare("DELETE FROM sha_content_en WHERE id = :id");
    $del_sub->bindParam(":id", $id);
    $del_sub->execute();

    if ($delete_sha) {
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
        echo "<meta http-equiv='refresh' content='2;url=shareholder_en'>";
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
if (isset($_POST['save_text'])) {
    $content = $_POST['content'];


    $stmt = $conn->prepare("SELECT * FROM sha_content_en");
    $stmt->execute();
    $row_structure = $stmt->fetch(PDO::FETCH_ASSOC);


    $sha_content = $conn->prepare("UPDATE sha_content_en SET content = :content");
    $sha_content->bindParam(":content", $content);
    $sha_content->execute();
    if ($sha_content) {
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
        echo "<meta http-equiv='refresh' content='2;url=shareholder_en'>";
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



// delete shareholder
if (isset($_POST['delete_share'])) {
    $id = $_POST['delete_share'];
    $del_share = $conn->prepare("DELETE FROM shareholder_en WHERE id = :id");
    $del_share->bindParam(":id", $id);
    $del_share->execute();

    if ($del_share) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'Delete Shareholder has been completed.',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='2;url=shareholder_en'>";
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
                            <form method="post">
                                <a href="shareholder"><button type="button" class="btn btn-edit">TH</button></a>
                                <button type="submit" name="save_text" class="btn btn-save">Save</button>
                        </div>
                    </div>


                    <div class="card-body" style="display: flex;">
                        <div class="box-slide-text">
                            <div class="content-text">


                                <textarea name="content"><?php echo $row_sha_content['content'] ?></textarea>
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

                                <br>
                                <form method="post">
                                    <div class="flex-end">
                                        <a href="shareholder_add"><button type="button" class="btn btn-edit">Add</button></a>
                                    </div>
                                    <div class="card-body" style="display: flex;">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead align="center">
                                                    <tr>

                                                        <th scope="col">Company Name</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Percentage</th>
                                                        <th scope="col">Manage</th>
                                                    </tr>
                                                </thead>


                                                <?php
                                                for ($i = 0; $i < count($row_shareholder); $i++) {

                                                    $stmt = $conn->prepare("SELECT * FROM shareholder_en ORDER BY id DESC");
                                                    $stmt->execute();
                                                    $row_shareholder = $stmt->fetchAll(); ?>


                                                    <tbody>
                                                        <tr>
                                                            <td align="center"><?php echo $row_shareholder[$i]['company_name']; ?></td>
                                                            <td align="center"><?php echo $row_shareholder[$i]['qty']; ?></td>
                                                            <td align="center"><?php echo $row_shareholder[$i]['percen']; ?></td>
                                                            <td align="center">
                                                                <div class="manage">
                                                                    <a href="shareholder_edit_en?shareholder_id=<?php echo $row_shareholder[$i]['id']; ?>"><button type="button" class="btn" style="background-color:#ffc107; color: #FFFFFF; margin:3px;"><i class="bi bi-pencil-square"></i></button></a>
                                                                    <button type="submit" class="btn" onclick="return confirm('ต้องการลบใช่หรือไม่?')" name="delete_share" value="<?php echo $row_shareholder[$i]['id']; ?>" style="background-color:red; color: #FFFFFF;"><i class="bi bi-trash3"></i></button>
                                                                </div>
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