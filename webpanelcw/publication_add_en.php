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


if (isset($_POST['add-publi'])) {
    $content = $_POST['content'];
    $link_pdf = $_POST['link_pdf'];
    $img = $_FILES['img'];


    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "upload/upload_publication/" . $fileNew1;

    if (empty($content)) {
        echo "<script>alert('Please Enter content')</script>";
    } else if (empty($link_pdf)) {
        echo "<script>alert('Please Enter Link PDF')</script>";
    } else {
        try {
            if (in_array($fileActExt1, $allow)) {
                if ($img['size'] > 0 && $img['error'] == 0) {
                    if (move_uploaded_file($img['tmp_name'], $filePath1)) {
                        $publi = $conn->prepare("INSERT INTO publication_en (content, link_pdf, img)
                                        VALUES(:content, :link_pdf, :img)");
                        $publi->bindParam(":content", $content);
                        $publi->bindParam(":link_pdf", $link_pdf);
                        $publi->bindParam(":img", $fileNew1);
                        $publi->execute();

                        $id_publi = $conn->lastInsertId();
                    }
                }
            }


            if ($publi) {
                echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Add Publication has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
                echo "<meta http-equiv='refresh' content='2;url=publication_en'>";
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
                <h3>Publication Add</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="product-name">
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-header">
                                    <h4 class="card-title">Publication</h4>
                                    <button type="submit" name="add-publi" class="btn btn-save">Save</button>
                                </div>
                                <textarea name="content"></textarea>
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

                                <div class="card-body">
                                    <h6>Link</h6>
                                    <input type="text" name="link_pdf" class="form-control">
                                </div>



                                <div class="title-img">
                                    <span id="upload-img">Image</span>
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
            $('#reset1').click(function() {
                $('#imgInput-cover').val(null);
                $('#previewImg-cover').attr("src", "");
                // $('.previewImg').addClass('none');
                // $('.box-edit-img').addClass('none');
            });
            $('#imgout').click(function() {
                $('#imgInput').val(null);
            });

        });
    </script>


</body>

</html>