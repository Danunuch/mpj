<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM slide_img");
    $stmt->execute();
    $row_slide_img = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM slide_img");
    $stmt->execute();
    $row_slide_img = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM slide_img");
  $stmt->execute();
  $row_slide_img = $stmt->fetchAll();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $slide = $conn->prepare("SELECT * FROM slide_text_en");
    $slide->execute();
    $row_slide_text = $slide->fetch(PDO::FETCH_ASSOC);
  } else {
    $slide = $conn->prepare("SELECT * FROM slide_text");
    $slide->execute();
    $row_slide_text = $slide->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $slide = $conn->prepare("SELECT * FROM slide_text");
  $slide->execute();
  $row_slide_text = $slide->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="pink">

	<div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="false" data-interval="5000">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>

			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
		</div>



		<div class="carousel-inner" role="listbox">

			<div class="item  active ">
				
				<img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[0]['img']; ?>" alt="Outcall Massage Sensual Massage Slide" class="slide-image object-fit_cover" />
				<div class="slide-text slide_style_center">
					<div class="container-fluid pl-sm-5">
						<div class="boxtext " data-animation="animated fadeInDown">

						
							<p><?php echo $row_slide_text['slide_text1']; ?></p>

						</div>







					</div>
				</div>
			</div>






			<div class="item ">
				<img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[1]['img']; ?>" alt="Outcall Massage Sensual Massage Slide" class="slide-image object-fit_cover" />
				<div class="slide-text slide_style_center">
					<div class="container-fluid pl-sm-5">
						<div class="boxtext " data-animation="animated fadeInDown">




						<p><?php echo $row_slide_text['slide_text2']; ?></p>


						</div>







					</div>
				</div>
			</div>






			<div class="item">
				<img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[2]['img']; ?>" alt="Outcall Massage Sensual Massage Slide" class="slide-image object-fit_cover" />
				<div class="slide-text slide_style_center">
					<div class="container-fluid pl-sm-5">
						<div class="boxtext " data-animation="animated fadeInDown">




						<p><?php echo $row_slide_text['slide_text3']; ?></p>

						</div>







					</div>
				</div>
			</div>




















	</div>
	</div>







</div>