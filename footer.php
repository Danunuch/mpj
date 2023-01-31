<?php require_once('webpanelcw/config/mpj_db.php');
if (!isset($_SESSION)) {
    session_start();
}




if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
        $contact = $conn->prepare("SELECT * FROM contact_en");
        $contact->execute();
        $row_contact = $contact->fetch(PDO::FETCH_ASSOC);
    } else {
        $contact = $conn->prepare("SELECT * FROM contact");
        $contact->execute();
        $row_contact = $contact->fetch(PDO::FETCH_ASSOC);
    }
} else {
    $contact = $conn->prepare("SELECT * FROM contact");
    $contact->execute();
    $row_contact = $contact->fetch(PDO::FETCH_ASSOC);
}
?>







<footer>
    <section id="footer-section">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg-5 box-contact01">

                    <h3 class="d-inline-block"><?php echo $row_contact['company_name']; ?><br></h3>

                    <ul class="flex-column">
                        <li class="mb-3">
                            <?php echo $row_contact['address']; ?>
                        </li>

                    </ul>


                    <a class="box-tel" href="tel:0-2615-2440">
                        <span class="material-icons-sharp d-inline-block">
                            phone_in_talk
                        </span>

                        Audimed Call Center<br>
                        <span class="tel"> <?php echo $row_contact['tel1']; ?></span><br>
                        (auto)
                    </a>

                </div>

                <div class="col-lg-4 box-contact02">

                    <h3 class="mt-4 mt-lg-0"><?php if (isset($_GET['lang'])) {
                                                    if ($_GET['lang'] == "en") {
                                                        echo 'Contact Us';
                                                    } else {
                                                        echo 'ติดต่อเรา';
                                                    }
                                                } else {
                                                    echo "ติดต่อเรา";
                                                } ?></h3>

                    <ul class="flex-column">

                        <li>
                            <?php if (isset($_GET['lang'])) {
                                if ($_GET['lang'] == "en") {
                                    echo 'Tel :';
                                } else {
                                    echo 'โทรศัพท์ :';
                                }
                            } else {
                                echo "โทรศัพท์ :";
                            } ?> <?php echo $row_contact['tel1']; ?>, <?php echo $row_contact['tel2']; ?>
                        </li>
                        <li>
                            <?php if (isset($_GET['lang'])) {
                                if ($_GET['lang'] == "en") {
                                    echo 'Email :';
                                } else {
                                    echo 'อีเมล์ :';
                                }
                            } else {
                                echo "อีเมล์ :";
                            } ?> <?php echo $row_contact['email']; ?>
                        </li>

                    </ul>


                    <div class="box-social">

                        <a href="" title="" target="_blank"><i class="icofont-facebook"></i> </a>
                        <a href="" title="" target="_blank"><i class="icofont-facebook-messenger"></i> </a>
                        <!-- <a href="" title="" target="_blank"><i class="icofont-twitter"></i></a> -->
                        <a href="" title="" target="_blank"><i class="icofont-line"></i> </a>
                        <!-- <a href="" title="" target="_blank"><i class="icofont-instagram"></i></a> -->
                        <a href="" title="" target="_blank"><i class="icofont-youtube"></i></a>
                        <a href="" title="" target="_blank"><i class="icofont-envelope"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 text-center">

                    <img class="img-fluid mb-3" src="upload/ku2.jpg">
                    <h5 class=" mb-0"><?php if (isset($_GET['lang'])) {
                                            if ($_GET['lang'] == "en") {
                                                echo 'Talk to us on Line';
                                            } else {
                                                echo 'คุยกับเราทาง Line';
                                            }
                                        } else {
                                            echo "คุยกับเราทาง Line";
                                        } ?><br>
                        Line ID : </span><a href="https://line.me/ti/p/XbZoquCHJK" target="_blank"> <?php echo $row_contact['line']; ?></a></h5>

                </div>
            </div>
        </div>
    </section>




    <section id="section-copy" class="text-center">
        <div class="container-xl">
            <div class="float-none float-md-end d-inline-block">
                <div class="payment-list box-copyright">
                    <span><span class="material-icons-sharp">person</span> TODAY : 2</span>
                    <span><span class="material-icons-sharp">people</span> THIS MONTH : 158</span>
                    <span><span class="material-icons-sharp">leaderboard</span> TOTAL : 1259</span>

                </div>
            </div>
            <div class="float-none float-md-start d-inline-block">
                <div class="box-copyright">

                    <p class="mt-2 mt-lg-0">
                        <span>
                            <img src="images/logocw.png" alt="บริษัทรับทำเว็บไซต์" title="บริษัทรับทำเว็บไซต์">
                        </span> Engine by <a href="http://www.cw.in.th/" title="บริษัทรับทำเว็บไซต์" target="_blank" class="text-white">CW</a> Copyright 2022 www.mpj-logistics.co.th
                </div>
            </div>
        </div>
    </section>





    <a href="#" id="back-to-top">
        <span class="material-icons-outlined">
            arrow_upward
        </span>
        <span class="text">กลับขึ้นข้างบน</span>
    </a>



</footer>