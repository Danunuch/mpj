<!DOCTYPE html>
<script src="https://cdn.tiny.cloud/1/2c646ifr40hywrvj32dwwml8e5qmxxr52qvzmjjq7ixbrjby/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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



$board = $conn->prepare("SELECT * FROM board_en");
$board->execute();
$row_board = $board->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['edit-board'])) {
    $content = $_POST['content'];
    $img = $_FILES['img'];
    $id = 1;


    $stmt = $conn->prepare("SELECT * FROM board_en WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row_board = $stmt->fetch(PDO::FETCH_ASSOC);


    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_board/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                $edit_board = $conn->prepare("UPDATE board_en SET content = :content, img = :img WHERE id = :id");
                $edit_board->bindParam(":content", $content);
                $edit_board->bindParam(":img", $fileNew1);
                $edit_board->bindParam(":id", $id);
                $edit_board->execute();
                if ($edit_board) {
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
                    echo "<meta http-equiv='refresh' content='2;url=board_en'>";
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
        }
    } else {
        $edit_board = $conn->prepare("UPDATE board_en SET content = :content WHERE id = :id");
        $edit_board->bindParam(":content", $content);
        $edit_board->bindParam(":id", $id);
        $edit_board->execute();
        if ($edit_board) {
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
            echo "<meta http-equiv='refresh' content='2;url=board_en'>";
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
                <h3>Board Edit (EN)</h3>
            </div>
            <section class="section">
            <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"></h4>
                            <button type="submit" name="edit-board" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">
                            <h5>Content</h5>
                            <textarea name="content"><?php echo $row_board['content']; ?></textarea>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    branding:false,
                                    height:250,
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
                        </div>
                        <div class="card-body">
                            <h5>Image</h5>
                            <div class="box-upload-img">
                                <h5>Upload Image here</h5>
                                <div class="box-input-upload">
                                    <input type="file" id="imgInput" name="img" class="form-control">
                                    <!-- <button type="button" id="reset" class="btn btn-reset">Reset</button> -->
                                </div>
                                <span style="color: #ff4122;">Only file are support ('jpg', 'jpeg', 'png', 'webp').</span>
                                <div class="preview-img">
                                    <img id="previewImg" width="100%" src="upload/upload_board/<?php echo $row_board['img'] ?>" alt="">
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
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#reset').click(function() {
                $('#imgInput').val(null);
                $('#previewImg').attr("src", "");
            });

        });
    </script>
</body>

</html>