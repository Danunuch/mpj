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
	

<header>

	<!-- Start Navigation -->


	<section id="top-header">
		<div class="container-xxl text-center text-lg-end">
			<p class="d-inline-block mb-0"><?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo 'Business hours Monday - Friday 8:00 AM - 12:00 PM / Saturday 8:00 AM - 9:00 PM.';}else{echo 'เวลาทำการ วันจันทร์ - ศุกร์ เวลา 8.00-24.00 น. / วันเสาร์ เวลา 8.00-21.00 น.';}}else{echo "เวลาทำการ วันจันทร์ - ศุกร์ เวลา 8.00-24.00 น. / วันเสาร์ เวลา 8.00-21.00 น.";} ?>
			</p>


			<div class="box-lang d-inline-block">
				<a href="?lang=en" <?php
                                if (!isset($_GET['lang'])) {
                                  echo "class='not_active'";
                                } else if (isset($_GET['lang'])) {
                                  $lang = $_GET['lang'];
                                  if ($lang == 'en') {
                                    echo "class='active'";
                                  } else {

                                    echo "class='not_active'";
                                  }
                                } ?> class="active">ENG</a>
				<a href="?lang=th" <?php
                                if (!isset($_GET['lang'])) {
                                  echo "class='not_active'";
                                } else if (isset($_GET['lang'])) {
                                  $lang = $_GET['lang'];
                                  if ($lang == 'th') {
                                    echo "class='active'";
                                  } else {

                                    echo "class='not_active'";
                                  }
                                } ?> class="">THA</a>
			</div>
			

		</div>
	</section>

	<section id="logo-section">
		
		<div class="container-xxl pb-4">
			<div class="row align-items-center">
				<div class="col-md-4 text-center text-lg-start">




					<a href="index.php"><img src="images/logo.svg" width="150"></a>

				</div>


				<div class="col-md-8 text-center text-lg-end">

					<a href="" class="text-dark"><p class="mb-0"><span class="material-icons-round">mail</span> <b><?php echo $row_contact['email']; ?></b></p></a>

					<a href="" class="text-dark"><p class="mb-0"><span class="material-icons-round">call</span> <b><?php echo $row_contact['tel1']; ?>, <?php echo $row_contact['tel2']; ?></b></p></a>

				</div>
			</div>

		</div>
	</section>


	<nav hidden> 
		<div class="nav-header">	
			<button class="toggle-bar core-nav-toggle"><i class="icofont-navigation-menu text-white"></i> เมนู</button>
		</div>

		<ul class="menu">
			<li><a href="index<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Home Page";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "หน้าแรก";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "หน้าแรก";
                            } ?></a></li>


			<li class="dropdown">
				<a href="#<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "About the company";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "เกี่ยวกับบริษัท";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "เกี่ยวกับบริษัท";
                            } ?><i class="icofont-caret-down"></i></a>
				<ul class="dropdown-content">

					<li><a href="about<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "About the Group";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "เกี่ยวกับกลุ่มบริษัท";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "เกี่ยวกับกลุ่มบริษัท";
                            } ?></a></li>



					<li><a href="history<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "History";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ประวัติความเป็นมา";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ประวัติความเป็นมา";
                            } ?></a></li>
					<li><a href="vision_mission_values<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Vision Mission Values";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "วิสัยทัศน์ พันธกิจ และค่านิยม";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "วิสัยทัศน์ พันธกิจ และค่านิยม";
                            } ?></a></li>
					<li><a href="management_structure<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Management Structure";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "โครงสร้างการบริหารงาน";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "โครงสร้างการบริหารงาน";
                            } ?></a></li>
					<li><a href="board<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Board";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "คณะกรรมการบริษัทและผู้บริหาร";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "คณะกรรมการบริษัทและผู้บริหาร";
                            } ?></a></li>
					<li><a href="awards_and_certifications<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Awards and Certifications";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "รางวัลและการรับรอง";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "รางวัลและการรับรอง";
                            } ?></a></li>
					<li><a href="business_ethics_and_ethics<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Business ethics and ethics";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "จรรยาบรรและจริยธรรมในการดำเนินธุรกิจ";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "จรรยาบรรและจริยธรรมในการดำเนินธุรกิจ";
                            } ?></a></li>

				</ul>                                 
			</li>

			<li class="dropdown">
				<a href="#<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Affiliated companies";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "กลุ่มบริษัทในเครือ";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "กลุ่มบริษัทในเครือ";
                            } ?><i class="icofont-caret-down"></i></a>
				<ul class="dropdown-content">
					<li><a href="mpj_logistics<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Logistics Company Limited (LOGISTICS BUSINESS)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (ธูรกิจ LOGISTICS)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (ธูรกิจ LOGISTICS)";
                            } ?></a></li>
					<li><a href="container_yard<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Distribution Center Co., Ltd. (Head Office) (Landu business)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)(ธุรกิจลานตู้)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)(ธุรกิจลานตู้)";
                            } ?></a></li>
					<li><a href="freight_forwarder<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Distribution Center Co., Ltd. (Bangkok) (freight forwarder business)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)(ธุรกิจ freight forwarder)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)(ธุรกิจ freight forwarder)";
                            } ?></a></li>
					<li><a href="mpj_warehouse<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Warehouse Company Limited (Warehouse Business)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)";
                            } ?></a></li>

				</ul>                                 
			</li>



			<li class="dropdown">
				<a href="#<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Investor Relations";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "นักลงทุนสัมพันธ์";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "นักลงทุนสัมพันธ์";
                            } ?><i class="icofont-caret-down"></i></a>
				<ul class="dropdown-content">

					<li><a href="sustainability<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Good Corporate Governance";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "กำกับดูแลกิจการที่ดี";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "กำกับดูแลกิจการที่ดี";
                            } ?></a></li>
					<li><a href="financial_information<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Financial Information";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ข้อมูลทางการเงิน";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ข้อมูลทางการเงิน";
                            } ?></a></li>
					<li><a href="stock_information<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Stock price information";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ข้อมูลราคาหลักทรัพย์";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ข้อมูลราคาหลักทรัพย์";
                            } ?></a></li>
					<li><a href="shareholder_info<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Shareholder Information";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ข้อมูลผู้ถือหุ้น";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ข้อมูลผู้ถือหุ้น";
                            } ?></a></li>
					<li><a href="downloads<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Publication (prospectus)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "เอกสารเผยแพร่ (หนังสือชี้ชวน)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "เอกสารเผยแพร่ (หนังสือชี้ชวน)";
                            } ?></a></li>
					<li><a href="newsroom<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Newsroom";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ห้องข่าว";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ห้องข่าว";
                            } ?></a></li>

				</ul>    
			</li>


			<li class="dropdown">
				<a href="#<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Sustainable Development";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "การพัฒนาที่ยั่งยืน";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "การพัฒนาที่ยั่งยืน";
                            } ?><i class="icofont-caret-down"></i></a>
				<ul class="dropdown-content">

					<li><a href="sustainable_development_policy<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Sustainable Development Policy";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "นโยบายการพัฒนาเพื่อความยั่งยืน";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "นโยบายการพัฒนาเพื่อความยั่งยืน";
                            } ?></a></li>
					<li><a href="occupational_safety<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Occupational Safety, Health and Environment";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ความปลอดภัยอาชีวอนามัยและสิ่งแวดล้อม";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ความปลอดภัยอาชีวอนามัยและสิ่งแวดล้อม";
                            } ?></a></li>
					<!-- <li><a href="environmental_management_system.php">ระบบการจัดการสิ่งแวดล้อม</a></li> -->
					<li><a href="measures_to_control_and_reduce_environmental_impact<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Measures to control and reduce environmental impact";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "มาตรการควบคุมและลดผลกระทบสิ่งแวดล้อม";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "มาตรการควบคุมและลดผลกระทบสิ่งแวดล้อม";
                            } ?></a></li>
					<li><a href="social_and_environmental_policy<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Social and Environmental Policy (CSR)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "นโยบายสังคมและสิ่งแวดล้อม (CSR)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "นโยบายสังคมและสิ่งแวดล้อม (CSR)";
                            } ?></a></li>
					<li><a href="use_of_personal_information<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Use of Personal Information";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "การใช้ข้อมูลส่วนบุคคล";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "การใช้ข้อมูลส่วนบุคคล";
                            } ?></a></li>
					<li><a href="company_regulations<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Company Regulations";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "กฎระเบียบข้อบังคับบริษัท";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "กฎระเบียบข้อบังคับบริษัท";
                            } ?></a></li>
					<li><a href="even<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Activity";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "กิจกรรม";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "กิจกรรม";
                            } ?></a></li>

				</ul>    
			</li>
			


			<li class="dropdown">
				<a href="#<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Contact Us";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ติดต่อเรา";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ติดต่อเรา";
                            } ?><i class="icofont-caret-down"></i></a>
				<ul class="dropdown-content">

					<li><a href="contact-01<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Logistics Company Limited";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด";
                            } ?></a></li>
					<li><a href="contact-02<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Distribution Center Company Limited (Head Office)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)";
                            } ?></a></li>
					<li><a href="contact-03<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Distribution Center Company Limited (Bangkok)";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)";
                            } ?></a></li>
					<li><a href="contact-04<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "MPJ Warehouse Company Limited";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริษัท เอ็ม พี เจ คลังสินค้า จำกัด";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริษัท เอ็ม พี เจ คลังสินค้า จำกัด";
                            } ?></a></li>
					<li><a href="career<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Work with us report a complaint";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ร่วมงานกับเรา แจ้งเรื่องร้องเรียน";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ร่วมงานกับเรา แจ้งเรื่องร้องเรียน";
                            } ?></a></li>

				</ul>    
			</li>


		</ul>


	</nav>
	<!-- End Navigation -->


</header>






<!-- <li><a href="index.php">หน้าแรก</a></li>
<li><a href="about.php">เกี่ยวกับบริษัท</a></li>
<li><a href="service.php">บริการ</a></li>
<li><a href="news.php">บทความและข่าวสาร</a></li>
<li><a href="#">นักลงทุนสัมพันธ์</a></li>
<li><a href="contact.php">ติดต่อเรา</a></li>
<li><a href="workwithus.php">ร่วมงานกับเรา</a></li>
 -->