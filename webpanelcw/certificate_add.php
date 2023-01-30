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

if (isset($_POST['add-cer'])) {
    $img = $_FILES['img'];
    $cer_id = $_POST['cer_name'];


    if (empty($cer_id)) {
        echo "<script>alert('Please Enter Type Name')</script>";
    }
    try {

        $allow = array('jpg', 'jpeg', 'png', 'webp');
        $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
        $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
        $fileNew1 = rand() . "." . "webp";
        $filePath1 = "upload/upload_cer/" . $fileNew1;


        if (in_array($fileActExt1, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                    $cer = $conn->prepare("INSERT INTO certificate (img, cer_id)
                        VALUES(:img , :cer_id )");
                    $cer->bindParam(":img", $fileNew1);
                    $cer->bindParam(":cer_id", $cer_id);
                    $cer->execute();

                    $id_cer = $conn->lastInsertId();
                }
            }
        }

        if ($cer) {
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add Certificate has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
            echo "<meta http-equiv='refresh' content='2;url=cer'>";
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="stylesheet" href="css/project.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/service.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>
<?php

$select_stmt = $conn->prepare("SELECT * FROM catta_cer1");
$select_stmt->execute();
$query =  $select_stmt->fetchAll();

?>

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
                <h3>Certificate Add</h3>
            </div>
            <section class="section">
                <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Certificate</h4>
                            <button type="submit" name="add-cer" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">

                            <?php
                            $stmt = $conn->prepare("SELECT* FROM catta_cer1");
                            $stmt->execute();
                            $catta_cer1 = $stmt->fetchAll();

                            ?>
                            <div class="container">
                                <div class="cer-name">
                                    <h6 for="cer_name" class="col-form-label">Category Certificate</h6>
                                    <select class="form-control" name="cer_name" id="">
                                        <option value="" selected disabled>Select</option>
                                        <?php foreach ($query as $value) { ?>
                                            <option value="<?= $value['cer_id'] ?>"><?= $value['cer_name'] ?></option>
                                        <?php } ?>
                                    </select>


                                </div>
                            </div>
                            <br>
                            <div class="title-img">
                                <span id="upload-img">Cover Image</span>
                                <div class="group-pos">
                                    <input type="file" name="img" id="imgInput-cover" class="form-control">

                                </div>
                                <span class="file-support">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                <div id="gallery-cover">
                                    <div class='box-edit-img-cover'>
                                        <span class='del-edit-img'></span>
                                        <img class='edit-img-cover' id='previewImg-cover' src=''>
                                    </div>
                                </div>
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

    <script>
        function preview_image() {
            var total_file = document.getElementById("imgInput").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#gallery').append("<div class='box-edit-img'>  <span class='del-edit-img'></span>  <img class='previewImg' id='edit-img' src='" + URL.createObjectURL(event.target.files[i]) + "'> </div>");
            }
        }
    </script>

    <script>
        let imgInput = document.getElementById('imgInput-cover');
        let previewImg = document.getElementById('previewImg-cover');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#reset2').click(function() {
                $('#imgInput').val(null);
                $('.previewImg').attr("src", "");
                $('.previewImg').addClass('none');
                $('.box-edit-img').addClass('none');
            });
            $('#imgout').click(function() {
                $('#imgInput').val(null);
            });

        });
    </script>

</body>

</html>