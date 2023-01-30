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


$data_detail_pos = $conn->prepare("SELECT * FROM detail_pos");
$data_detail_pos->execute();
$row_detail_pos = $data_detail_pos->fetch(PDO::FETCH_ASSOC);


if (isset($_GET['work_id'])) {
    $id = $_GET['work_id'];
    $detail_pos_data = $conn->prepare("SELECT * FROM detail_pos WHERE id_pos = :id_pos");
    $detail_pos_data->bindParam(":id_pos", $id);
    $detail_pos_data->execute();
    $row_detail = $detail_pos_data->fetch(PDO::FETCH_ASSOC);
}



if (isset($_POST['edit_detail'])) {
    $content = $_POST['content'];
  //  $id = $_POST['position_name'];
    $id_position = $_POST['id_position'];
 
    
    $detail_pos = $conn->prepare("UPDATE detail_pos SET content = :content, id = :id WHERE id_pos = :id_pos");
    $detail_pos->bindParam(":content", $content);
    $detail_pos->bindParam(":id", $id_position);
    $detail_pos->bindParam(":id_pos", $id);
    $detail_pos->execute();

 


    if ($detail_pos) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'Edit Detail Position has been completed.',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='2;url=work'>";
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
    <link rel="stylesheet" href="css/project.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/service.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="images/logo.svg" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>
<?php

$select_stmt = $conn->prepare("SELECT * FROM position");
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
                <h3>Detail Position Edit</h3>
            </div>
            <section class="section">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Position</h4>
                            <button type="submit" name="edit_detail" class="btn btn-save">Save</button>
                        </div>
                        <div class="card-body">

                            <?php

                            $stmt = $conn->prepare("SELECT* FROM position WHERE id = :id");
                            $stmt ->bindParam(':id', $row_detail_pos['id']);
                            $stmt ->execute();
                            $query =  $stmt ->fetch(PDO::FETCH_ASSOC);

                            ?>
                            <div class="container">
                                <div class="cer-name">
                                    <h6 for="position_name" class="col-form-label">Detail Position</h6>
                                    <input type="hidden"name="id_position" value="<?php echo $query['id'] ?>" >
                                    <input type="text" name="position_name" value="<?php echo $query['position_name'] ?>" class="form-control">


                                </div>
                            </div>
                            <br>

                            <div class="card-body">
                                <div class="content-text">
                                    <textarea name="content"><?php echo $row_detail_pos['content']; ?></textarea>
                                    <script>
                                        tinymce.init({
                                            selector: 'textarea',
                                            branding: false,
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