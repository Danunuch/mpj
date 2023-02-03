-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2023 at 05:13 PM
-- Server version: 5.7.37
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thaibyhost_mpj`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `img`) VALUES
(1, '<p style=\"text-align: left;\"><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span><br><br><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"color: rgb(149, 165, 166);\"> เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;<br></span> </span><br><br><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>MPJ GROUP ของเรามีบริษัทอยู่ในเครือดังต่อไปนี้<br></strong></span> </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.เอ็มพีเจ โลจิสติกส์ จำกัด - ประกอบธุรกิจด้านโลจิสติกส์แบบครบวงจร </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.เอ็มพีเจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด - ประกอบธุรกิจให้บริการจัดเก็บตู้คอนเทนเนอร์ สำหรับการบรรจุสินค้า </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.พรีเมี่ยม พีแอลเอ็ม(ประเทศไทย) จำกัด - ประกอบธุรกิจให้บริการโซลูชั่น ซอร์ฟแวร์ ที่ใช้ใน การออกแบบในภาคอุตสาหกรรม </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.ศรีราชาเจริญยนต์ จำกัด - ประกอบธุรกิจให้บริการซ่อมบำรุงรถเทรลเลอร์แบบ ครบวงจร </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.แหลมฉบัง โลจิสติกส์ จำกัด - ประกอบธุรกิจเป็นตัวแทนในการดำเนินพิธีการทาง ศุลกากรให้กับลูกค้า </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.สมาร์ท โฮลดิ้ง จำกัด - ประกอบธุรกิจให้บริการจัดเก็บตู้คอนเทนเนอร์ สำหรับการบรรจุสินค้า (CMA) </span><br><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(149, 165, 166);\">&bull; บ.เคซี กรุ๊ป คอเปอร์เรชั่น จำกัด - ประกอบธุรกิจนำเข้า-ส่งออก ผลิตภัณฑ์ไม้แปรรูป</span></p>', '154124160.webp');

-- --------------------------------------------------------

--
-- Table structure for table `about_en`
--

CREATE TABLE `about_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_en`
--

INSERT INTO `about_en` (`id`, `content`, `img`) VALUES
(1, '<p style=\"text-align: left;\"><span style=\"color: rgb(149, 165, 166);\">G</span><span style=\"color: rgb(149, 165, 166);\">roup of companies operates in the business of logistics management services. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span><br><br><span style=\"color: rgb(149, 165, 166);\"> We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo; </span><br><br><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Our MPJ GROUP is affiliated with the following companies.<br></strong></span> <br><span style=\"color: rgb(149, 165, 166);\">&bull; MPJ Logistics Co., Ltd. - Complete logistics business </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; MPJ Distribution Center Co., Ltd. - Operates a container storage service business for product packing </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; Premium PLM (Thailand) Co., Ltd. - Engage in the business of providing software solutions used in industrial design </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; Sriracha Charoenyont Co., Ltd. - Operates a full range of trailer maintenance services </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; Laem Chabang Logistics Co., Ltd. - Operate business as an agent in conducting formalities customs to customers </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; Smart Holding Co., Ltd. - Operates a container storage service business for product packing (CMA) </span><br><span style=\"color: rgb(149, 165, 166);\">&bull; KC Group Corporation Co., Ltd. - Import-export business Lumber products</span></p>', 'about03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `cover_img`, `topic`, `content`, `date`, `status`) VALUES
(1, '703389503.webp', 'บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด และบริษัทในเครือ (MPJ GROUP) เป็นองค์กรที่มุ่งให้ความสำคัญกับมีส่วนร่วมในการพัฒนาชุมชนและสังคม  ควบคู่ไปกับการเติบโตของธุรกิจ (Growing with Society and Community)', '<p>คณะผู้บริหารและพนักงาน กลุ่มบริษัท เอ็ม พี เจ ได้เล็งเห็นความสำคัญทางด้านการศึกษาของเยาวชนที่จะเติบโตเป็นผู้ใหญ่และเป็นกำลัง &nbsp;สำคัญในการพัฒนาศักยภาพของสังคมไทย จึงได้จัดกิจกรรม CSR บริจาคทุนการศึกษา &nbsp;สิ่งของจำเป็นสำหรับเด็ก &nbsp;และเลี้ยงอาหารกลางวัน ณ โรงเรียนวัดหนองขาม ต.หนองขาม อ.ศรีราชา จ.ชลบุรี &nbsp;โดยมีคณะผู้บริหารและตัวแทนพนักงานบริษัทฯ ไปร่วมกิจกรรม</p>', '26 มิถุนายน 2561', 'on'),
(2, '1517722992.webp', 'กลุ่มบริษัท เอ็ม พี เจ ได้เข้าร่วมจัดงานกิจกรรมวันเด็กแห่งชาติประจำปี 2563', '<p>กลุ่มบริษัท เอ็ม พี เจ ได้เข้าร่วมจัดงานกิจกรรมวันเด็กแห่งชาติประจำปี 2563 &nbsp;โดยมอบของขวัญ ของรางวัลให้กับเด็ก ๆ พร้อมกับทำกิจกรรมเล่นเกมแจกของรางวัล และเลี้ยงอาหารกลางวัน ให้แก่ ชุมชนหมู่บ้านโชคนิมิตร และชุมชนหมู่บ้านกลางนา &nbsp;ต.หนองขาม อ.ศรีราชา จ.ชลบุรี &nbsp;ซึ่งอยู่ในพื้นที่ใกล้เคียงกับบริษัท</p>', '11 มกราคม 2563', 'on'),
(4, '1237562412.webp', 'กลุ่มบริษัท เอ็ม พี เจ ได้ส่งเสริมและจัดกิจกรรมให้ความรู้เรื่องยาเสพติด  ให้กับลูกหลานในชุมชน', '<p>กลุ่มบริษัท เอ็ม พี เจ ได้ส่งเสริมและจัดกิจกรรมให้ความรู้เรื่องยาเสพติด &nbsp;ให้กับลูกหลานในชุมชน เพื่อสร้างความรู้ความเข้าใจให้เด็กและเยาวชนได้มีภูมิคุ้มกันด้านป้องกันและห่างไกล ภัยยาเสพติดให้แก่นักเรียนชั้นประถมศึกษาปีที่ 5 - 6 &nbsp;โรงเรียนวัดหนองขาม &nbsp;ต.หนองขาม อ.ศรีราชา จ.ชลบุรี &nbsp;ซึ่งเป็นการช่วยสร้างกลไกการมีส่วนร่วมในการลดปัญหาการแพร่ระบาดของยาเสพติดให้หมดสิ้นไปจากชุมชนอย่างมีประสิทธิภาพ</p>', '7 มีนาคม 2564', ''),
(5, '442954875.webp', 'กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคทุนการศึกษา  บริจาคเครื่องคอมพิวเตอร์ กระเป๋านักเรียน และอุปกรณ์การศึกษาต่าง ๆ', '<p>กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคทุนการศึกษา &nbsp;บริจาคเครื่องคอมพิวเตอร์ กระเป๋านักเรียน และอุปกรณ์การศึกษาต่าง ๆ &nbsp;ให้กับโรงเรียนบ้านดอนใหญ่พัฒนา ต.ดอนมัน อ.ประทาย จ.นครราชสีมา ซึ่งเป็นโรงเรียนขยายโอกาสทางการศึกษา มีนักเรียน 34 คน ครูจำนวน 2 คน</p>', '18 มิถุนายน 2565', ''),
(6, '1494689052.webp', 'กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคโต๊ะทานอาหารจำนวน 6 ชุด  โกฟุตบอลจำนวน 1 ตัว และแก้ไขโถปัสวะชายตัน จำนวน 7 ช่อง', '<p>กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคโต๊ะทานอาหารจำนวน 6 ชุด &nbsp;โกฟุตบอลจำนวน 1 ตัว และแก้ไขโถปัสวะชายตัน จำนวน 7 ช่อง ที่โรงเรียนเนินตอง &nbsp;ตั้ง 503 หมู่ 2 ตำบลหนองขาม อำเภอศรีราชา จังหวัดชลบุรี 20230 ซึ่งอยู่ในพื้นที่ใกล้เคียงกับบริษัท</p>', '23 ธันวาคม 2565', ''),
(7, '903067060.webp', 'ประการผู้บริหารรับตำแหน่งระดับสูง !!!!', '<p>ยินดีด้วยนะค่ะ</p>', '02/02/2023', '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_en`
--

CREATE TABLE `activity_en` (
  `id` int(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_en`
--

INSERT INTO `activity_en` (`id`, `cover_img`, `topic`, `content`, `date`, `status`) VALUES
(1, '1893890913.webp', 'MPJ Logistics Co., Ltd. and its affiliates (MPJ GROUP) is an organization that focuses on participation in community and social development. Along with business growth (Growing with Society and Community)', '<p>The management and employees of the MPJ Group have realized the importance of youth education to grow into adults and become strengths. important in the development of the potential of Thai society therefore organized a CSR activity to donate scholarships baby essentials and provided lunch at Wat Nong Kham School, Nong Kham Sub-district, Sriracha District, Chonburi Province, with the management and representatives of the Company\'s employees. go to activities</p>', 'June 26, 2018', 'on'),
(2, '1517722992.webp', 'MPJ Group has participated in the National Children\'s Day 2020 activities.', '<p>MPJ Group has participated in the National Children\'s Day 2020 activities by giving gifts. Prizes for children along with activities to play games and give prizes. and provided lunch to Choknimit village community and Klang Na Village Community, Nong Kham Subdistrict, Sriracha District, Chonburi Province, which are in the area close to the Company.</p>', 'January 11, 2020', 'on'),
(4, '1784472579.webp', 'MPJ Group has promoted and organized activities to educate about drugs. for children in the community', '<p>The MPJ group of companies has promoted and organized activities to educate about drugs. for children in the community To create knowledge and understanding for children and youth to have immunity in protection and distance. to help create a mechanism for participation in reducing the drug epidemic problem effectively put an end to the community</p>', '7 มีนาคม 2564', ''),
(5, '875327902.webp', 'MPJ Group joins CSR activities to donate scholarships. computer donation school bag and various educational equipment', '<p>MPJ Group joins CSR activities to donate scholarships. computer donation school bag and various educational equipment for Ban Don Yai Pattana School, Don Man Subdistrict, Prathai District, Nakhon Ratchasima Province, which is a school to expand educational opportunities. There are 34 students and 2 teachers.</p>', 'June 18, 2022', ''),
(6, '976477951.webp', 'MPJ Group participated in a CSR activity donating 6 sets of dining tables, 1 football and fixing 7 tons of urinals.', '<p>MPJ Group joins CSR activities to donate 6 sets of dining tables, 1 soccer ball and fix 7 bowls of urinal bowls at Noen Tong School, located 503 Moo 2, Nong Kham Sub-district, Sriracha District, Chonburi Province 20230, which is located in the area close to the company</p>', 'December 23, 2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_img`
--

CREATE TABLE `activity_img` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `activity_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_img`
--

INSERT INTO `activity_img` (`id`, `image`, `activity_id`) VALUES
(1, '1220030077.webp', 1),
(5, '1038961758.webp', 2),
(10, '1563075338.webp', 4),
(11, '1458918116.webp', 4),
(12, '1053297098.webp', 4),
(13, '1128367155.webp', 4),
(14, '353058209.webp', 5),
(15, '947426699.webp', 6),
(16, '1895966312.webp', 6),
(17, '1224770066.webp', 6);

-- --------------------------------------------------------

--
-- Table structure for table `activity_img_en`
--

CREATE TABLE `activity_img_en` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `activity_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_img_en`
--

INSERT INTO `activity_img_en` (`id`, `image`, `activity_id`) VALUES
(1, '1220030077.webp', 1),
(4, '1433798153.webp', 2),
(5, '1038961758.webp', 2),
(7, '1505299772.webp', 1),
(8, '1325285164.webp', 1),
(9, '16937119.webp', 2),
(10, '779292577.webp', 4),
(11, '286461173.webp', 4),
(12, '663751536.webp', 4),
(13, '1707098855.webp', 5),
(14, '1412130687.webp', 6),
(15, '1668909685.webp', 6),
(16, '1136772916.webp', 6);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `firstname`, `lastname`) VALUES
(1, 'Adminwebsite', '$2y$10$cgrZ4R3I/a6tZkDsZYztTOdNxuEyHNClgn/FOYmlHte5zGdkb/Bpm', '2022-12-17 18:26:50', 'DOJ', 'SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `blog_company`
--

CREATE TABLE `blog_company` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `topic` longtext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_company`
--

INSERT INTO `blog_company` (`id`, `img`, `topic`, `content`) VALUES
(1, '1309113306.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3; text-align: left;\">ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">พื้นที่สำหรับสินค้าทั่วไป 34,000 ตารางเมตร</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">รองรับการให้บริการคลังสินค้าทั่วไปและการบรรจุชิ้นส่วนอะไหล่ตามที่ลูกค้าต้องการฃ</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">สินค้าขาเข้าและขาออกควบคุมด้วยระบบการจัดการสินค้าคงคลัง WMS และ ระบบ AS/RS</li>\r\n</ul>'),
(2, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n</ul>'),
(5, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n</ul>'),
(6, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n</ul>'),
(7, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n</ul>'),
(8, '1309113306.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>ชลบุรี</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3; text-align: left;\">ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">พื้นที่สำหรับสินค้าทั่วไป 34,000 ตารางเมตร</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">รองรับการให้บริการคลังสินค้าทั่วไปและการบรรจุชิ้นส่วนอะไหล่ตามที่ลูกค้าต้องการฃ</li>\r\n<li style=\"line-height: 1.3; text-align: left;\">สินค้าขาเข้าและขาออกควบคุมด้วยระบบการจัดการสินค้าคงคลัง WMS และ ระบบ AS/RS</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_company1`
--

CREATE TABLE `blog_company1` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_company1`
--

INSERT INTO `blog_company1` (`id`, `img`, `content`) VALUES
(1, '2033706184.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">วิ่งตู้เปล่า และวิ่งตู้หนัก</span></strong></span></h4>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 12pt;\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น&nbsp;&ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์&nbsp;ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล&nbsp;เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>'),
(2, '142218351.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong>วิ่งบรรจุสินค้า</strong></span></h4>\r\n<p style=\"text-align: center;\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น&nbsp;&ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศเราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากลเพื่อความสำเร็จของลูกค้า&rdquo;</p>'),
(3, '1121971628.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong>วิ่งตู้เย็น</strong></span></h4>\r\n<p style=\"text-align: center;\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น&nbsp;&ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศเราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากลเพื่อความสำเร็จของลูกค้า&rdquo;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_company1_en`
--

CREATE TABLE `blog_company1_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_company1_en`
--

INSERT INTO `blog_company1_en` (`id`, `img`, `content`) VALUES
(1, '2033706184.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">Running an empty cabinet and running heavy cabinets</span></strong></span></h4>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 12pt;\">We have been operating for more than 12 years. &ldquo;The leading local service provider within the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>'),
(2, '142218351.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong>Packing goods. </strong></span></h4>\n<p style=\"text-align: center;\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider within the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for customer success.”</p>'),
(3, '1121971628.webp', '<h4 class=\"mb-2\" style=\"text-align: center;\"><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong>Running refrigerator&nbsp;</strong></span></h4>\r\n<p style=\"text-align: center;\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider within the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for customer success.&rdquo;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_company_en`
--

CREATE TABLE `blog_company_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `topic` longtext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_company_en`
--

INSERT INTO `blog_company_en` (`id`, `img`, `topic`, `content`) VALUES
(2, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\n</ul>'),
(3, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>'),
(4, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>'),
(5, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>'),
(6, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>'),
(7, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>'),
(8, '2127265126.webp', '<p><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><strong>Chonburi</strong></span></p>', '<ul>\r\n<li style=\"line-height: 1.3;\">Automotive parts electronic parts and raw materials in other industries such as chemicals, plastic resins, etc.</li>\r\n<li style=\"line-height: 1.3;\">Area for general merchandise 34,000 square meters</li>\r\n<li style=\"line-height: 1.3;\">Support general warehousing and packing of spare parts as required by customers</li>\r\n<li style=\"line-height: 1.3;\">Inbound and outbound goods controlled by WMS inventory management system and AS/RS system</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`id`, `content`, `img`) VALUES
(1, '', '1853828783.webp');

-- --------------------------------------------------------

--
-- Table structure for table `board_en`
--

CREATE TABLE `board_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board_en`
--

INSERT INTO `board_en` (`id`, `content`, `img`) VALUES
(1, '', '2109632301.webp');

-- --------------------------------------------------------

--
-- Table structure for table `catta_cer1`
--

CREATE TABLE `catta_cer1` (
  `cer_id` int(10) NOT NULL,
  `cer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catta_cer1`
--

INSERT INTO `catta_cer1` (`cer_id`, `cer_name`) VALUES
(1, 'ISO 9001:2015'),
(2, 'โรงงานสีขาว');

-- --------------------------------------------------------

--
-- Table structure for table `catta_cer1_en`
--

CREATE TABLE `catta_cer1_en` (
  `cer_id` int(10) NOT NULL,
  `cer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catta_cer1_en`
--

INSERT INTO `catta_cer1_en` (`cer_id`, `cer_name`) VALUES
(1, 'ISO 9001:2015'),
(2, 'White plant');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `img`, `cer_id`) VALUES
(13, '1079954090.webp', '2'),
(14, '1257724834.webp', '2'),
(15, '1068223837.webp', '2'),
(16, '873816282.webp', '2'),
(17, '675927277.webp', '1'),
(18, '2112163161.webp', '1'),
(19, '1844926314.webp', '1');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_en`
--

CREATE TABLE `certificate_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificate_en`
--

INSERT INTO `certificate_en` (`id`, `img`, `cer_id`) VALUES
(12, '871590182.webp', '2'),
(13, '2141061906.webp', '2'),
(14, '1247138072.webp', '2'),
(15, '1204853219.webp', '2'),
(16, '90211929.webp', '1'),
(17, '1381859549.webp', '1'),
(18, '1022644067.webp', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `company_id`) VALUES
(1, 'บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (ธูรกิจ LOGISTICS)', '1'),
(2, 'บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)', '2'),
(3, 'บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)', '3'),
(4, 'บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)', '4');

-- --------------------------------------------------------

--
-- Table structure for table `company1`
--

CREATE TABLE `company1` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company1`
--

INSERT INTO `company1` (`id`, `img`, `content`) VALUES
(1, '1013802504.webp', '<p><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">&nbsp;บริการขนส่งสินค้า (MPJ Logistics Co., Ltd)<br></span></strong></span><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(126, 140, 141);\"> &nbsp; &nbsp; &nbsp;ให้บริการขนส่งในประเทศ ทางรถหัวลาก &ndash; หางพ่วง ให้บริการขนส่งสินค้าแบบประตูสู่ประตู (Door to Door) โดยผู้ส่งออกเป็นผู้รับผิดชอบภาระค่าขนส่ง โดยมีจำนวนรถหัวลาก 226หัว และจำนวนหางพ่วง 271 หาง<br><br>ตั้งอยู่ บ้านเลขที่ 244 หมู่ 5 ต.หนองขาม &nbsp;อ.ศรีราชา &nbsp;จ.ชลบุรี 20230<br></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company1_en`
--

CREATE TABLE `company1_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company1_en`
--

INSERT INTO `company1_en` (`id`, `img`, `content`) VALUES
(1, '1170494050.webp', '<p><strong><span style=\"color: rgb(230, 126, 35); font-size: 14pt;\">Freight Forwarding Service (MPJ Logistics Co., Ltd)</span></strong></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(126, 140, 141);\"> &nbsp; Providing domestic transportation services by tractor-trailer trucks, door-to-door delivery service, where the exporter is responsible for the transportation costs. There are 226 tractors and 271 trailers.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Located at house number 244 Moo 5, Nong Kham Subdistrict, Si Racha District, Chonburi Province 20230</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company2`
--

CREATE TABLE `company2` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company2`
--

INSERT INTO `company2` (`id`, `img`, `content`) VALUES
(1, '384153604.webp', '<p><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">บริการลานตู้และซ่อมบำรุง &nbsp;( MPJ Distribution Center Co., Ltd )<br></span></strong></span><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(126, 140, 141);\"> ให้บริการ ลานจัดเก็บตู้สินค้าเปล่า บริเวณเขตแหลมฉบัง จังหวัดชลบุรี ให้บริการจัดเก็บตู้สินค้าเปล่า รับดูแลและซ่อมบำรุงตู้สินค้า รวมทั้งขยายความสามารถในการรองรับปริมาณตู้สินค้าที่เพิ่มขึ้น ปัจจุบันให้บริการด้วยเครื่องมือและอุปกรณ์ที่ทันสมัยและมีคุณภาพ การสั่งซื้อเครื่องมือใหม่ จะช่วยให้ลานตู้เปล่าสามารถรองรับการเข้ารับตู้สินค้า และลดปริมาณเวลาในการรอรับส่ง-คืนตู้สินค้าเปล่า ทำให้ลดจราจรติดขัด ในลานตู้สินค้าเปล่า ได้อย่างมีประสิทธิภาพมากขึ้น ตามความต้องการของลูกค้าที่เพิ่มมากขึ้น นอกจากการให้บริการลานฝากตู้สินค้าเปล่าแล้ว ทางบริษัทฯ ยังมีบริการอื่นๆ ที่เกี่ยวข้อง เช่นการส่งรับ EDI เพื่อตอบความสนองความต้องการของลูกค้าอย่างครบวงจรอีกด้วย</span><br><br><span style=\"color: rgb(126, 140, 141);\">ตั้งอยู่ บ้านเลขที่ 291/45 ม.5 ต.หนองขาม อ.ศรีราชา &nbsp;จ.ชลบุรี 20230</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company2_en`
--

CREATE TABLE `company2_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company2_en`
--

INSERT INTO `company2_en` (`id`, `img`, `content`) VALUES
(1, '135147298.webp', '<p><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong>Container depot service and maintenance ( MPJ Distribution Center Co., Ltd )</strong></span></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: rgb(126, 140, 141);\">Provide empty container storage yard Laem Chabang area Chonburi Province Providing storage services for empty containers Maintenance and repair of containers Including expanding the capacity to accommodate the increasing amount of containers. Currently providing services with modern and quality tools and equipment. ordering new tools It will allow the empty container yard to support the container receiving. And reduce the amount of time waiting for delivery - returning empty containers reduce traffic congestion in the empty container yard more efficiently according to the increasing demand of customers In addition to providing empty container yard services, the company also offers other services. Related such as sending and receiving EDI to fully meet the needs of customers as well</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Located at house number 291/45 Moo 5, Nong Kham Subdistrict, Si Racha District, Chonburi Province 20230</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company3`
--

CREATE TABLE `company3` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company3`
--

INSERT INTO `company3` (`id`, `img`, `content`) VALUES
(1, '468912492.webp', '<p><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; MPJ ในฐานะสมาชิกของ Global Alliance เรามุ่งมั่นที่จะส่งมอบผลิตภัณฑ์และบริการคุณภาพสูงให้กับลูกค้าของเราทุกคน</span></p>\r\n<p><strong><span style=\"color: rgb(230, 126, 35);\">การขนส่งทางน้ำ</span></strong><br><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; เราสามารถดําเนินงานในโครงการโลจิสติกส์ครอบคลุมการดําเนินงานนำเข้าและส่งออก ได้ให้บริการ FCL (Full Container Loaded) และ LCL (Less than Container Loaded) ไปยัง พอร์ตต่างๆทั่วโลก</span><br><br><strong><span style=\"color: rgb(230, 126, 35);\">การขนส่งทางอากาศ</span></strong><br><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; การขนส่งทางอากาศของเราให้บริการที่ถูกต้องผ่านสายการบินต่างๆไปยังสนามบินปลายทางทั่วโลก ไม่ว่าจะเป็นสินค้าขนาดเล็กหรือสินค้าหนัก เราให้บริการที่เชื่อถือได้ผ่านเที่ยวบินตรง เที่ยวบินเปลี่ยนเครื่องและแบบ door-to-door เพื่อตอบสนองความต้องการของลูกค้าของเรา</span><br><br><span style=\"color: rgb(230, 126, 35);\"><strong>การขนส่งทางบก</strong></span><br><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; เราให้บริการขนส่งในประเทศ ทางรถหัวลาก &ndash; หางพ่วง ให้บริการขนส่งสินค้าแบบประตูสู่ประตู (Door to Door) ทํางานร่วมกับบริษัทรถบรรทุกท้องถิ่นในเอเชีย มีการทำประกันสินค้าและอุบัติเหตุ เนื่องจากเราเป็นพันธมิตรที่สําคัญของ กับบริษัทรถบรรทุกท้องถิ่นทำให้อัตราการบริการที่เหมาะสม ช่วยให้เราไม่ต้องกังวลกับการใช้รถบรรทุกและเราสามารถมุ่งเน้นไปที่การขนส่งสินค้าของคุณโดยเฉพาะ เราพร้อมเสมอในการให้บริการ</span><br><br><span style=\"color: rgb(230, 126, 35);\"><strong>เดินเอกสารพิธีการศุลกากร</strong></span><br><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; ด้วยมาตรฐาน ISO 9001 - 2015 เรามั่นใจว่าบริการที่มีคุณภาพของเราจะตอบสนองความต้องการของลูกค้า ทีมพิธีการศุลกากรของเราพร้อมให้บริการลูกค้าอย่างมืออาชีพและก้าวหน้าผ่านระบบไร้กระดาษอิเล็กทรอนิกส์ รวมถึงบริการหักภาษีผ่านระบบ E-Payment ของธนาคารต่างๆ นอกจากนี้เรายังสามารถให้บริการข้ามพรมแดน /19 BIS / BOI / การชดเชยภาษี / เขตปลอดอากร IEAT (โซน EPZ) / คลังสินค้าทัณฑ์บนและเขตปลอดอากร</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company3_en`
--

CREATE TABLE `company3_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company3_en`
--

INSERT INTO `company3_en` (`id`, `img`, `content`) VALUES
(1, '89692591.webp', '<p>&nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: rgb(126, 140, 141);\">MPJ, as a member of the Global Alliance, is committed to delivering high quality products and services to all of our customers.</span></p>\r\n<p><strong><span style=\"color: rgb(230, 126, 35);\">Water transportation</span></strong><br>&nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: rgb(126, 140, 141);\">We can undertake logistics projects covering import and export operations, providing FCL (Full Container Loaded) and LCL (Less than Container Loaded) services to ports around the world.</span></p>\r\n<p><strong><span style=\"color: rgb(230, 126, 35);\">Air transport</span></strong><br><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; Our air freight provides accurate services via various airlines to destination airports around the world. Whether it\'s a small item or a heavy item. We provide reliable service via direct flights. Transit and door-to-door flights to meet the needs of our customers.</span></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Land transport</strong></span><br>&nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(126, 140, 141);\"> We provide domestic transportation via tractor-trailer, door-to-door delivery, working with local trucking companies in Asia. There is product and accident insurance. Because we are important partners of with a local trucking company making service rates reasonable. This allows us not to worry about using a truck and we can focus exclusively on your freight. We are always ready to serve you.</span></p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong>Customs clearance documents</strong></span><br>&nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color: rgb(126, 140, 141);\">With ISO 9001 - 2015 certification, we are confident that our quality services will meet the needs of our customers. Our customs clearance team offers professional and progressive customer service through electronic paperless systems. Including tax deduction services through the E-Payment system of various banks. We can also provide cross-border services /19 BIS / BOI / Tax Compensation / IEAT Free Zone (EPZ Zone) / Bonded Warehouse and Free Zone.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `company4`
--

CREATE TABLE `company4` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company4`
--

INSERT INTO `company4` (`id`, `img`, `content`, `content1`, `content2`, `content3`) VALUES
(1, '444175619.webp', '<p><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">บริการคลังสินค้า &nbsp;Warehouse<br><br></span></strong><span style=\"font-size: 12pt; color: rgb(126, 140, 141);\">บริการให้เช่าคลังสินค้าด้วยอาคารคลังสินค้า คุณภาพสูงพร้อมสิ่งอำนวยความสะดวก ระบบสาธารณูปโภคต่างๆ ที่ออกแบบมาให้เหมาะสม กับการบริหารจัดการบำรุงรักษาให้มีสภาพดีอยู่เสมอ พื้นที่กว้างขวาง ด้วยพื้นที่ &nbsp; 4,800 &nbsp;ตรม.<br><br>ระบบประปา : น้ำคุณภาพตรงจากการประปาส่วนภูมิภาค<br><br>ถนน : คอนกรีตเสริมเหล็ก รองรับรถคอนเทนเนอร์ 40 ฟุต มีพื้นที่ขนถ่ายสินค้าอย่างเป็นสัดส่วน และเชื่อมโยงเส้นทางคมนาคม เส้นทางหลัก<br><br>ระบบไฟฟ้า : &nbsp;การไฟฟ้าส่วนภูมิภาค กำลังสำรองเต็มระบบ 3 เฟส ไฟแสงสว่าง ครอบคลุมทั่วถึงทุกบริเวณ<br></span><strong><span style=\"font-size: 14pt;\"><br></span></strong><span style=\"font-size: 12pt; color: rgb(126, 140, 141);\">ตั้งอยู่บ้านเลขที่ 244 ม.5 ต.หนองขาม อ.ศรีราชา จ.ชลบุรี 20230</span><strong><span style=\"font-size: 14pt;\"><br></span></strong></span></p>', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 12pt;\"><span style=\"color: rgb(186, 55, 42);\"><span style=\"color: rgb(255, 255, 255);\">พื้นที่คลังสินค้าทั้งหมด</span><br></span><strong><span style=\"color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(230, 126, 35); font-size: 18pt;\"><span style=\"font-size: 24pt;\">4,800</span>&nbsp;</span></strong><span style=\"color: rgb(230, 126, 35);\"> </span><span style=\"color: rgb(255, 255, 255);\">ตรม</span></span></h6>', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 12pt;\"><span style=\"color: rgb(255, 255, 255);\">คลังสินค้า<br></span></span><br><span style=\"font-size: 12pt;\"><span style=\"font-size: 24pt;\"><strong><span style=\"color: rgb(230, 126, 35);\">8&nbsp;</span></strong></span><span style=\"color: rgb(255, 255, 255);\">วาง</span></span></h6>', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 12pt;\"><span style=\"color: rgb(255, 255, 255);\">ความจุในการจัดเก็บ<br></span><strong><span style=\"color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(230, 126, 35); font-size: 18pt;\"><span style=\"font-size: 24pt;\">60,000</span> </span></strong><span style=\"color: rgb(255, 255, 255);\">+พาเลทต่อปี</span></span></h6>');

-- --------------------------------------------------------

--
-- Table structure for table `company4_en`
--

CREATE TABLE `company4_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `content1` longtext NOT NULL,
  `content2` longtext NOT NULL,
  `content3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company4_en`
--

INSERT INTO `company4_en` (`id`, `img`, `content`, `content1`, `content2`, `content3`) VALUES
(1, '1745288093.webp', '<p><span style=\"color: rgb(230, 126, 35); font-size: 14pt;\"><strong>Warehouse Service Warehouse</strong></span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Warehouse rental service with warehouse buildings High quality with facilities Utilities designed to fit with management and maintenance to always be in good condition Spacious area with an area of 4,800 sq m.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Water supply system: quality water directly from the Provincial Waterworks Authority</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Road : reinforced concrete Accommodates 40-foot containers with proportional loading and unloading areas and connect the main transport routes</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Electric system : Provincial Electricity Authority Full backup power, 3-phase system, lighting, covering all areas</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Located at house number 244, Village No. 5, Nong Kham Subdistrict, Si Racha District, Chonburi Province 20230</span></p>', '<h6 style=\"line-height: 1;\"><span style=\"color: rgb(255, 255, 255); font-size: 14pt;\">Total warehouse space</span></h6>\r\n<h6 style=\"line-height: 1;\"><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 24pt;\">4,200&nbsp;</span> </strong></span><span style=\"color: rgb(255, 255, 255);\"><strong>sqm</strong></span></h6>', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 14pt; color: rgb(255, 255, 255);\"><strong>Warehouse</strong></span> <br><br><strong><span style=\"font-size: 14pt;\"><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><span style=\"font-size: 24pt;\">8</span> </span><span style=\"color: rgb(255 , 255, 255);\">place</span></span></strong></h6>', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 14pt;\"><strong><span style=\"color: rgb(255, 255, 255);\">Storage capacity</span> </strong></span><br><br><span style=\"font-size: 14pt;\"><strong><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\"><span style=\"font-size: 24pt;\">60,000</span> </span><span style=\"color: rgb(255, 255, 255);\">+pallets per year</span></strong></span></h6>');

-- --------------------------------------------------------

--
-- Table structure for table `company_en`
--

CREATE TABLE `company_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_en`
--

INSERT INTO `company_en` (`id`, `company_name`, `company_id`) VALUES
(1, 'MPJ Logistics Company Limited (LOGISTICS BUSINESS)', '1'),
(2, 'MPJ Distribution Center Co., Ltd. (Head Office)', '2'),
(3, 'MPJ Distribution Center Co., Ltd. (Bangkok) ', '3'),
(4, 'MPJ Warehouse Company Limited (Warehouse Business)', '4');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `company_name`, `address`, `tel1`, `tel2`, `email`, `line`, `line_qr`) VALUES
(1, 'MPJ Distribution Center Co.,Ltd.', '244 หมู่5 หนองขาม ศรีราชา จ.ชลบุรี 20230', '084-088-0668', '084-088-0669', 'hr@mpjlogistics.com', 'Mpjlogistic', 'ku2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_01`
--

CREATE TABLE `contact_01` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_01`
--

INSERT INTO `contact_01` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (สาขาสำนักงานใหญ่)', '244 หมู่ 5 ต.หนองขาม อ.ศรีราชา จ. ชลบุรี 20230', ' 038-060764', 'itsupport@mpjdc.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_01_en`
--

CREATE TABLE `contact_01_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_01_en`
--

INSERT INTO `contact_01_en` (`id`, `company_name`, `address`, `tel1`, `tel2`, `email`, `line`, `line_qr`) VALUES
(1, 'MPJ Distribution Center Co.,Ltd.', '244 Moo 5, Nong Kham, Sriracha, Chonburi 20230', '084-088-0668', '084-088-0669', 'hr@mpjlogistics.com', 'Mpjlogistic', 'ku2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_02`
--

CREATE TABLE `contact_02` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_02`
--

INSERT INTO `contact_02` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'บริษัท เอ็ม พี เจ  ดีสทริบิวชั่น เซ็นเตอร์  จำกัด (สาขาสำนักงานใหญ่)', '291/45  หมู่ 5 ต.หนองขาม อ.ศรีราชา จ. ชลบุรี 20230  ', ' 038-060764', 'itsupport@mpjdc.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_02_en`
--

CREATE TABLE `contact_02_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_02_en`
--

INSERT INTO `contact_02_en` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'MPJ Distribution Center Co., Ltd. (Head office branch)', '291/45 Moo 5, Nong Kham Subdistrict, Si Racha District, Chonburi Province 20230', ' 038-060764', 'marketing@mpjlogistics.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_03`
--

CREATE TABLE `contact_03` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_03`
--

INSERT INTO `contact_03` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'บริษัทเอ็ม​ พี เจ ดีส​ทริ​บิวชั่น​ เซ็นเตอร์​ จำกัด สาขาที่ 2', '2198​/10-11​ อาคาร​อีเอ็มเอส​ ชั้น​4​ ซอย​ทวีวัฒนา​ ถนน​จันทน์​ แขวง​ช่องนนทรี​ เขต​ยานนาวา​ กรุงเทพ​ 10120', ' 038-060764', 'itsupport@mpjdc.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_03_en`
--

CREATE TABLE `contact_03_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_03_en`
--

INSERT INTO `contact_03_en` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'MPJ Distribution Center Company Limited Branch 2', '2198/10-11 EMS Building, 4th Floor, Soi Tawee Wattana, Chan Road, Chong Nonsi Subdistrict, Yannawa District, Bangkok 10120', ' 038-060764', 'marketing@mpjlogistics.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_04`
--

CREATE TABLE `contact_04` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_04`
--

INSERT INTO `contact_04` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (สาขาสำนักงานใหญ่)', '244 หมู่ 5 ต.หนองขาม อ.ศรีราชา จ. ชลบุรี 20230  ', ' 038-060764', 'itsupport@mpjdc.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_04_en`
--

CREATE TABLE `contact_04_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_04_en`
--

INSERT INTO `contact_04_en` (`id`, `company_name`, `address`, `tel1`, `email`) VALUES
(1, 'MPJ Logistics Company Limited (Head Office Branch)', '244 Moo 5, Nong Kham Subdistrict, Si Racha District, Chonburi Province 20230', ' 038-060764', 'marketing@mpjlogistics.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_en`
--

CREATE TABLE `contact_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `line_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_en`
--

INSERT INTO `contact_en` (`id`, `company_name`, `address`, `tel1`, `tel2`, `email`, `line`, `line_qr`) VALUES
(1, 'MPJ Distribution Center Co.,Ltd.1', '244 Moo 5, Nong Kham, Sriracha, Chonburi 20230', '084-088-0668', '084-088-0669', 'hr@mpjlogistics.com', 'Mpjlogistic', 'ku2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
(1, '<h1 style=\"text-align: center; line-height: 1.4;\"><span style=\"font-family: helvetica, arial, sans-serif; color: rgb(230, 126, 35); font-size: 36pt;\"><strong>MPJ&nbsp; </strong><span style=\"color: rgb(0, 0, 0);\">Logistics</span></span></h1>\r\n<pre style=\"text-align: center; line-height: 1.4;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14pt; color: rgb(149, 165, 166);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร</span><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14pt; color: rgb(149, 165, 166);\">การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับ</span><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14pt; color: rgb(149, 165, 166);\">ซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี</span><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14pt; color: rgb(149, 165, 166);\">โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่น</span><br><span style=\"font-family: arial, helvetica, sans-serif; font-size: 14pt; color: rgb(149, 165, 166);\">ภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></pre>');

-- --------------------------------------------------------

--
-- Table structure for table `content_en`
--

CREATE TABLE `content_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_en`
--

INSERT INTO `content_en` (`id`, `content`) VALUES
(1, '<h1 style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; color: rgb(230, 126, 35); font-size: 36pt;\"><strong>MPJ&nbsp;</strong><span style=\"color: rgb(0, 0, 0);\">Logistics</span></span></h1>\r\n<p style=\"text-align: center;\"><span style=\"color: rgb(126, 140, 141);\"><span style=\"font-size: 14pt;\">The MPJ GROUP group of companies operates in the business of logistics management services.<br>both in terms of delivery and administrative services </span><span style=\"font-size: 14pt;\">Turnkey container storage for domestic packing for import-export<br>of goods Including providing services about </span><span style=\"font-size: 14pt;\">Comprehensive software packages covering all types of businesses <br>along with after-sales service.&nbsp;We have been operating for more than 12 years. </span><span style=\"font-size: 14pt;\">which we strive to be &ldquo;The leading local <br>service provider in the country.&nbsp;Logistics management with an understanding of local needs. </span><span style=\"font-size: 14pt;\">Domestically, we will deliver <br>services that meet the needs of customers at international standards.&nbsp;for the success of our customers.&rdquo;</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">หมวดที่ 1 สิทธิของผู้ถือหุ้น</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">หมวดที่ 2 การปฏิบัติต่อผู้ถือหุ้นอย่างเท่าเทียมกัน</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">หมวดที่ 3 บทบาทของผู้มีส่วนได้เสีย</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">หมวดที่ 4 การเปิดเผยข้อมูลและความโปร่งใส</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">หมวดที่ 5 ความรับผิดชอบของคณะกรรมการ</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">คณะกรรมการบริษัท มีความมุ่งมั่นที่จะบริหารงาน โดยยึดหลักการกำกับดูแลกิจการตามหลักการการกำกับดูแลกิจการที่ดี ปฏิบัติตาม กฎระเบียบ และข้อกำหนดที่เกี่ยวข้องของตลาดหลักทรัพย์แห่งประเทศไทย สำนักคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ เพื่อให้บรรลุเป้าหมายในการสร้างความมั่นคง และเติบโตอย่างยั่งยืน ซึ่งมีสาระสำคัญ แบ่งออกเป็น 5 หมวด ดังนี้</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_en`
--

CREATE TABLE `corporate_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `corporate_en`
--

INSERT INTO `corporate_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Category 1: Rights of Shareholders</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Category 2 Equitable Treatment of Shareholders</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Chapter 3: Role of Stakeholders</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Category 4: Disclosure and Transparency</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Chapter 5 Responsibilities of the Board</span></h4>\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ GROUP Group operates logistics management business. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">Board of Directors. Have a commitment to management By adhering to the principles of good corporate governance, complying with the rules and regulations of the Stock Exchange of Thailand. Office of the Securities and Exchange Commission to achieve the goal of building stability and grow sustainably Which is important, divided into 5 categories as follows:</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pos`
--

CREATE TABLE `detail_pos` (
  `id_pos` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_pos`
--

INSERT INTO `detail_pos` (`id_pos`, `content`, `id`) VALUES
(17, '<p><strong>คุณสมบัติ<br></strong></p>\r\n<ul>\r\n<li>&nbsp;เพศชาย-หญิง</li>\r\n<li>&nbsp;อายุ 22-55 ปี</li>\r\n<li>&nbsp;มีใบอนุญาตขับขี่ ท.3 ขึ้นไป (อายุใบขับขี่ 6 เดือนขึ้นไป)</li>\r\n<li>&nbsp;สามารถกิน-นอนบนรถได้</li>\r\n</ul>\r\n<p><strong>ลักษณะการทำงาน</strong></p>\r\n<ul>\r\n<li>วิ่งงานสายเรือ ท่าเรือแหลมฉบัง &ndash; ลาดกระบัง</li>\r\n<li>วิ่งงานสายบรรจุตามนิคมอุตสาหกรรมระยอง &ndash; ท่าเรือแหลมฉบัง</li>\r\n<li>วิ่งงานสายทอยตู้</li>\r\n</ul>\r\n<p>(มีห้องรับรองห้องอาบน้ำ &nbsp;สำหรับพักระหว่างวัน)</p>\r\n<p><em><strong>***สมัครทุกวันจันทร์-เสาร์ สมัครรู้ผลทันที***</strong></em></p>\r\n<p>เวลา 08.00-16.00น.***</p>\r\n<p>ต.หนองขาม อ.ศรีราชา จ.ชลบุรี</p>\r\n<p>ติดต่อสอบถาม โทร 091-774-2087 หรือ 084-088-0677 (ฝ่ายทรัพยากรบุคคล)</p>', '2');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pos_en`
--

CREATE TABLE `detail_pos_en` (
  `id_pos` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_pos_en`
--

INSERT INTO `detail_pos_en` (`id_pos`, `content`, `id`) VALUES
(11, '<p><strong>Feature</strong></p>\r\n<ul>\r\n<li>male-female</li>\r\n<li>22-55 years old</li>\r\n<li>Have a driver\'s license Thor. 3 or more (driver\'s license valid for 6 months or more)</li>\r\n<li>Able to eat-sleep in the car</li>\r\n</ul>\r\n<p><strong>Behavior</strong></p>\r\n<ul>\r\n<li>Run a boat Laem Chabang Port &ndash; Lat Krabang</li>\r\n<li>Running packing lines in Rayong Industrial Estate - Laem Chabang Port</li>\r\n<li>Running the line of tossing the cabinet<br><br>(There is a shower room for staying during the day)</li>\r\n</ul>\r\n<p><strong>*** Apply every Monday - Saturday. Apply and know the result immediately***</strong></p>\r\n<p>Time 08.00-16.00***</p>\r\n<p>Nong Kham Subdistrict, Si Racha District, Chonburi Province<br>For inquiries, call 091-774-2087 or 084-088-0677 (Human Resources Department).</p>', '3');

-- --------------------------------------------------------

--
-- Table structure for table `email_1`
--

CREATE TABLE `email_1` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_1`
--

INSERT INTO `email_1` (`id`, `email`, `company_id`) VALUES
(4, 'itsupport@mpjdc.com', 1),
(8, 'danunuchk@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_2`
--

CREATE TABLE `email_2` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_2`
--

INSERT INTO `email_2` (`id`, `email`, `company_id`) VALUES
(4, 'programmer@thaibyhost.com', 2),
(5, 'danunuchk@gmail.com', 2),
(6, 'itsupport@mpjdc.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `email_3`
--

CREATE TABLE `email_3` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_3`
--

INSERT INTO `email_3` (`id`, `email`, `company_id`) VALUES
(5, 'danunuchk@gmail.com', 3),
(6, 'programmer@thaibyhost.com', 3),
(7, 'itsupport@mpjdc.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `email_4`
--

CREATE TABLE `email_4` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_4`
--

INSERT INTO `email_4` (`id`, `email`, `company_id`) VALUES
(6, 'danunuchk@gmail.com', 3),
(7, 'truegolf19@gmail.com', 3),
(8, 'itsupport@mpjdc.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `email_5`
--

CREATE TABLE `email_5` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_5`
--

INSERT INTO `email_5` (`id`, `email`, `company_id`) VALUES
(5, 'danunuchk@gmail.com', 3),
(6, 'programmer@thaibyhost.com', 3),
(7, 'itsupport@mpjdc.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `email_6`
--

CREATE TABLE `email_6` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_6`
--

INSERT INTO `email_6` (`id`, `email`, `company_id`) VALUES
(5, 'danunuchk@gmail.com', 3),
(6, 'programmer@thaibyhost.com', 3),
(7, 'itsupport@mpjdc.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ethics`
--

CREATE TABLE `ethics` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ethics`
--

INSERT INTO `ethics` (`id`, `content`) VALUES
(1, '<div class=\"row\">\r\n<h4><span style=\"font-size: 14pt;\"><strong><span style=\"color: rgb(230, 126, 35);\">ความหมายของจริยธรรมและจรรยาบรรณ</span></strong></span></h4>\r\n<p><span style=\"color: rgb(149, 165, 166);\">บริษัทฯ มีเจตนารมณ์ในการดำเนินธุรกิจตามหลักการกำกับดูแลกิจการที่ดี โดยยึดมั่นกฎหมาย คุณธรรมจริยธรรม บริหารงานด้วยความโปร่งใส และรับผิดชอบต่อผู้มีส่วนได้เสีย</span></p>\r\n<p><span style=\"color: rgb(149, 165, 166);\">เพื่อให้การปฏิบัติงานเกี่ยวกับการจัดซื้อและจัดจ้างเป็นไปอย่างเหมาะสม มีประสิทธิภาพ และรักษาภาพพจน์ที่ดีของบริษัทฯ ไว้อย่างต่อเนื่อง จึงกำหนดหลักเกณฑ์อันเกี่ยวกับจรรยาบรรณของการจัดซื้อและจัดจ้าง เพื่อเป็นแนวทางปฏิบัติของทั้งบริษัทฯ ไว้</span></p>\r\n<p><span style=\"color: rgb(149, 165, 166);\">จริยธรรม คือ พฤติกรรมที่ใช้เป็นข้อปฏิบัติในการประพฤติที่ดีที่ชอบ โดยมีพื้นฐานมาจากกฎหมาย ศีลธรรม หรือ จารีตประเพณีวัฒนธรรมของคนในแต่ละสังคม จรรยาบรรณ คือ หลักความประพฤติปฏิบัติอันเหมาะสม แสดงถึงคุณธรรมและจริยธรรมที่พึงปฏิบัติในการ ประกอบวิชาชีพ ที่บริษัทคาดหวังให้พนักงานประพฤติปฏิบัติตามเพื่อรักษาชื่อเสียงและส่งเสริมเกียรติของตนเองและบริษัท</span></p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `ethics_en`
--

CREATE TABLE `ethics_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ethics_en`
--

INSERT INTO `ethics_en` (`id`, `content`) VALUES
(1, '<p><strong><span style=\"color: rgb(230, 126, 35);\"><span style=\"font-size: 14pt;\">Definition of Ethics and Code of Conduct</span><br></span></strong><br><span style=\"color: rgb(149, 165, 166);\">The Company intends to conduct business in accordance with good corporate governance principles. by adhering to the law moral ethics Manage with transparency and responsible to stakeholders</span></p>\r\n<p><span style=\"color: rgb(149, 165, 166);\">In order to perform the work related to procurement and outsourcing appropriately. effective and maintain a good image of the company continuously thus establishing the criteria relating to the ethics of procurement and employment as a guideline for the whole company</span></p>\r\n<p><span style=\"color: rgb(149, 165, 166);\">Ethics is behavior that is used as a guideline for good behavior. It is based on laws, morals or customs and cultures of people in each society. Ethics are the principles of proper conduct. Demonstrate morality and ethics that should be practiced in practice which the Company expects employees to act in order to maintain their reputation and promote their own and the Company\'s dignity</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(10) NOT NULL,
  `financial_name` varchar(255) NOT NULL,
  `link_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `financial_name`, `link_pdf`) VALUES
(3, 'งบการเงินประจำปี 1/2564', 'https://drive.google.com/file/d/1apgokXl-XKGTj4Ed8NG2UmhdMKtC1fct/view?usp=sharing'),
(4, 'งบการเงินประจำปี 1/2564', 'https://drive.google.com/file/d/1apgokXl-XKGTj4Ed8NG2UmhdMKtC1fct/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `financial_en`
--

CREATE TABLE `financial_en` (
  `id` int(10) NOT NULL,
  `financial_name` varchar(255) NOT NULL,
  `link_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financial_en`
--

INSERT INTO `financial_en` (`id`, `financial_name`, `link_pdf`) VALUES
(3, 'Annual Financial Statement 1/2021', 'https://drive.google.com/file/d/1apgokXl-XKGTj4Ed8NG2UmhdMKtC1fct/view?usp=sharing'),
(4, 'Annual Financial Statement 1/2021', 'https://drive.google.com/file/d/1apgokXl-XKGTj4Ed8NG2UmhdMKtC1fct/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `content`, `img`) VALUES
(1, '<h4><span style=\"font-size: 18pt; color: rgb(230, 126, 35);\">เบื้องหลังของบริษัท MPJ</span></h4>\r\n<div class=\"about\">\r\n<p><span style=\"color: rgb(126, 140, 141);\">MPJ Group ก่อตั้งขึ้นตั้งแต่ปี 2551 เพื่อเป็นผู้ให้บริการด้านโลจิสติกส์แบบครบวงจร เราให้บริการบำรุงรักษาและซ่อมแซมตู้คอนเทนเนอร์พร้อมกับธุรกิจขนส่งตู้คอนเทนเนอร์ที่เติบโตอย่างต่อเนื่องนับตั้งแต่ก่อตั้ง ในแง่ของธุรกิจคลังสินค้า เราเพิ่มประสิทธิภาพในการทำงานด้วยการเพิ่มอุปกรณ์และเทคโนโลยีใหม่ๆ เพื่อรองรับความต้องการของลูกค้า เพื่อให้ได้รับความพึงพอใจจากบริการที่มีคุณภาพ ด้วยความไว้วางใจจากลูกค้า เราได้กลายเป็นหนึ่งในคลังสินค้าที่เติบโตเร็วที่สุดและ</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">ได้ให้บริการบำรุงรักษาและซ่อมแซมมากกว่า 80,000 TEU ต่อปี</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">บริษัท เอ็มพีเจ โลจิสติกส์ จำกัด : ก่อตั้งเมื่อ ตุลาคม 2551</span><br><span style=\"color: rgb(126, 140, 141);\">สายงานบริการ : บริการขนส่ง</span><br><span style=\"color: rgb(126, 140, 141);\">วันและเวลาทำการ : จันทร์ &ndash; เสาร์ 24 ชม. (2 กะ)</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">รถบรรทุก 196 คัน และรถพ่วง 230 คัน</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">บริษัท เอ็มพีเจ ดิสทริบิวชั่น เซ็นเตอร์ จำกัด : ก่อตั้งเมื่อ พฤศจิกายน 2551</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">สายบริการ : บริการคอนเทนเนอร์เปล่า</span><br><span style=\"color: rgb(126, 140, 141);\">บริการล้างตู้คอนเทนเนอร์</span><br><span style=\"color: rgb(126, 140, 141);\">บริการซ่อมตู้คอนเทนเนอร์</span><br><span style=\"color: rgb(126, 140, 141);\">วัน&amp;เวลาทำการ : จันทร์ &ndash; ศุกร์ 8.00-24.00 - เสาร์ 8.00-21.00 น.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">บริษัท สมาร์ท โฮลดิ้ง จำกัด : ก่อตั้ง มีนาคม 2557</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">สายบริการ : บริการคอนเทนเนอร์เปล่า</span><br><span style=\"color: rgb(126, 140, 141);\">บริการล้างตู้คอนเทนเนอร์</span><br><span style=\"color: rgb(126, 140, 141);\">บริการซ่อมตู้คอนเทนเนอร์</span><br><span style=\"color: rgb(126, 140, 141);\">วัน&amp;เวลาทำการ : จันทร์ &ndash; ศุกร์ 8.00-24.00 - เสาร์ 8.00-21.00 น.</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">รถบรรทุก 196 คัน และรถพ่วง 230 คัน</span></p>\r\n</div>', '1443588052.webp');

-- --------------------------------------------------------

--
-- Table structure for table `history_en`
--

CREATE TABLE `history_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_en`
--

INSERT INTO `history_en` (`id`, `content`, `img`) VALUES
(1, '<p style=\"text-align: center;\"><span style=\"font-size: 24pt; color: rgb(230, 126, 35);\"><strong>History&nbsp;</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 18pt;\">MPJ Group&rsquo;s Background</span></strong></span></p>\r\n<p>MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance &amp; repair services along with container transportation business which has been growing continuously &nbsp;since established. In terms of depot business, we increase our work efficiency by adding up new equipment and technologies to support customer&rsquo;s requirements in order to achieve their satisfaction with qualified services. With trust from customers, we have become one of the fastest growing depot and</p>\r\n<p>have given maintenance and repair services for more than 80,000 TEU&rsquo;s a year</p>\r\n<p>MPJ Logistics Co., Ltd. : Establish October, 2008<br>Service Line : Transportation service<br>Date &amp; time of working : Mon &ndash; Sat 24 Hrs. (2 shifts)</p>\r\n<p>Truck 196 Units and Trailer 230 Units</p>\r\n<p>MPJ Distribution Center Co., Ltd. : Establish November, 2008</p>\r\n<p>Service Line : Empty container service<br>Container cleaning service<br>Container repairing service<br>Date &amp; time of working : Mon &ndash; Fri 8.00-24.00 - Sat 8.00-21.00</p>\r\n<p>Smart Holding Co., Ltd. : Establish March, 2014</p>\r\n<p>Service Line : Empty container service<br>Container cleaning service<br>Container repairing service<br>Date &amp; time of working : Mon &ndash; Fri 8.00-24.00 - Sat 8.00-21.00</p>\r\n<p>Truck 196 Units and Trailer 230 Units</p>', '268105530.webp');

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

CREATE TABLE `measure` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `measure`
--

INSERT INTO `measure` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `measure_en`
--

CREATE TABLE `measure_en` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `measure_en`
--

INSERT INTO `measure_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">The MPJ GROUP group of companies operates in the business of logistics management services. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `date_show` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `date_show`, `link`) VALUES
(1, '<p>รายงานความเห็นของที่ปรึกษาทางการเงินอิสระเกี่ยวกับธุรกรรมการรวมกิจการระหว่าง บริษัท เจดับเบิ้ลยูดี อินโฟโลจิสติกส์ จำกัด (มหาชน) และ บริษัท เอสซีจี โลจิสติกส์ แมเนจเม้นท์ จำกัด โดยการแลกหุ้น (แก้ไข)</p>', '08 ธันวาคม 2565 ', 'https://drive.google.com/file/d/1YPNq0GrQLH9dMNYIBDpjKKy3hn0t_hYk/view?usp=sharing '),
(2, '<p>รายงานความเห็นของที่ปรึกษาทางการเงินอิสระเกี่ยวกับธุรกรรมการรวมกิจการระหว่าง บริษัท เจดับเบิ้ลยูดี อินโฟโลจิสติกส์ จำกัด (มหาชน) และ บริษัท เอสซีจี โลจิสติกส์ แมเนจเม้นท์ จำกัด โดยการแลกหุ้น</p>', '08 ธันวาคม 2565    ', 'https://drive.google.com/file/d/1YPNq0GrQLH9dMNYIBDpjKKy3hn0t_hYk/view?usp=sharing ');

-- --------------------------------------------------------

--
-- Table structure for table `news_en`
--

CREATE TABLE `news_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `date_show` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_en`
--

INSERT INTO `news_en` (`id`, `content`, `date_show`, `link`) VALUES
(2, '<p>Opinion of the Independent Financial Advisor on the Merger Transaction between JWD InfoLogistics Public Company Limited and SCG Logistics Management Company Limited by share swap&nbsp;</p>', '08 December 2022 ', 'https://drive.google.com/file/d/1YPNq0GrQLH9dMNYIBDpjKKy3hn0t_hYk/view?usp=sharing '),
(3, '<p>Opinion of the Independent Financial Advisor on the Merger Transaction between JWD InfoLogistics Public Company Limited and SCG Logistics Management Company Limited by share swap</p>', '08 December 2022 ', 'https://drive.google.com/file/d/1YPNq0GrQLH9dMNYIBDpjKKy3hn0t_hYk/view?usp=sharing ');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; นโยบายเพื่อการพัฒนาที่ยั่งยืนของบริษัทฯ กำหนดขึ้นโดยพิจารณาจากวิสัยทัศน์ พันธกิจ และกลยุทธ์ทางธุรกิจที่ครอบคลุมในด้านสังคม สิ่งแวดล้อม และการกำกับดูแลที่ดี &nbsp;เพื่อพัฒนาการดำเนินธุรกิจให้มีแนวทางในการจัดการที่ยั่งยืน และสามารถตอบสนองต่อความคาดหวังของผู้มีส่วนได้ ส่วนเสียทุกภาคส่วนในทุกกระบวนการดำเนินธุรกิจ ทั้งนี้บริษัทฯ ได้กำหนดนโยบายและแนวปฏิบัติทางด้านความยั่งยืน โดยมีสาระสำคัญ &nbsp;ดังนี้</span></p>\r\n<ul>\r\n<li style=\"color: rgb(230, 126, 35);\"><span style=\"color: rgb(230, 126, 35);\"><strong>ด้านสิ่งแวดล้อม</strong></span><br><span style=\"color: rgb(126, 140, 141);\">- บริหารจัดการทรัพยากรอย่างคุ้มค่า มีประสิทธิภาพ</span><br><span style=\"color: rgb(126, 140, 141);\">- ลดการเกิดผลกระทบต่อสิ่งแวดล้อมให้น้อยที่สุด</span><br><br></li>\r\n<li style=\"color: rgb(230, 126, 35);\"><span style=\"color: rgb(230, 126, 35);\"><strong>ด้านสังคม</strong></span><br><span style=\"color: rgb(126, 140, 141);\">- บริหารจัดการทรัพยากรบุคคล ยึดหลักสิทธิมนุษยชน คุ้มครองสิทธิแรงงาน สุขภาพและความปลอดภัยในการทำงาน </span><br><span style=\"color: rgb(126, 140, 141);\">- ร่วมพัฒนาชุมชนและสังคม พร้อมเติบโตทางธุรกิจ ดำเนินงาน 3 มิติ ได้แก่ การศึกษา กีฬา พัฒนาชุมชน</span></li>\r\n<li style=\"color: rgb(230, 126, 35); font-weight: bold;\"><span style=\"color: rgb(230, 126, 35);\"><strong>ด้านการกำกับดูแลที่ดี</strong></span></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `policy_en`
--

CREATE TABLE `policy_en` (
  `id` int(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `policy_en`
--

INSERT INTO `policy_en` (`id`, `content`) VALUES
(1, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"color: rgb(126, 140, 141);\">Sustainable Development Policy of the Company Established based on vision, mission and comprehensive business strategy in social, environmental and governance areas. To develop business operations to have sustainable management guidelines. and able to respond to the expectations of stakeholders Every stakeholder in every business process The company Has established a policy and guidelines for sustainability. The important points are as follows:</span></p>\r\n<ul>\r\n<li style=\"color: rgb(230, 126, 35);\"><strong><span style=\"color: rgb(230, 126, 35);\">Environmental</span></strong><br><span style=\"color: rgb(126, 140, 141);\">- Manage resources worthwhile efficient</span><br><span style=\"color: rgb(126, 140, 141);\">- Minimize the impact on the environment</span><br><br></li>\r\n<li style=\"color: rgb(230, 126, 35);\"><strong><span style=\"color: rgb(230, 126, 35);\">Social</span></strong><br><span style=\"color: rgb(126, 140, 141);\">- Human resource management adhere to human rights principles protect labor rights health and safety at work</span><br><span style=\"color: rgb(126, 140, 141);\">- Participate in community and social development ready to grow the business, operating in 3 dimensions, namely education, sports, and community development</span><br><br></li>\r\n<li style=\"color: rgb(230, 126, 35); font-weight: bold;\"><strong><span style=\"color: rgb(230, 126, 35);\">Good governance</span></strong></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(10) NOT NULL,
  `position_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_name`) VALUES
(2, 'พนักงานขับรถเทรลเลอร์  จำนวนหลายอัตรา');

-- --------------------------------------------------------

--
-- Table structure for table `position_en`
--

CREATE TABLE `position_en` (
  `id` int(10) NOT NULL,
  `position_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position_en`
--

INSERT INTO `position_en` (`id`, `position_name`) VALUES
(3, 'Trailer driver number of rates');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `link_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `img`, `content`, `link_pdf`) VALUES
(1, '1646517178.webp', '<p><span style=\"font-size: 14pt;\"><strong><span style=\"color: rgb(230, 126, 35);\">รายงานประจำปี 2563</span></strong></span> <br>แบบฟอร์ม 56-1 ประจำปี 2563</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing'),
(2, '835670103.webp', '<h4><span style=\"color: rgb(230, 126, 35);\">รายงานประจำปี 2563</span></h4>\r\n<p class=\"text-secondary\">แบบฟอร์ม 56-1 ประจำปี 2563</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing'),
(3, '1859521263.webp', '<p><span style=\"color: rgb(230, 126, 35); font-size: 14pt;\"><strong>รายงานประจำปี 2563</strong><br></span>แบบฟอร์ม 56-1 ประจำปี 2563</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `publication_en`
--

CREATE TABLE `publication_en` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `link_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication_en`
--

INSERT INTO `publication_en` (`id`, `img`, `content`, `link_pdf`) VALUES
(1, '1566402691.webp', '<p><span style=\"color: rgb(230, 126, 35);\"><strong><span style=\"font-size: 14pt;\">Annual Report 2020</span></strong></span> <br>Form 56-1 Year 2020</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing'),
(2, '440622454.webp', '<p><strong><span style=\"color: rgb(230, 126, 35); font-size: 14pt;\">Annual Report 2020</span></strong><br>Form 56-1 Year 2020</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing'),
(3, '1373667061.webp', '<p><strong><span style=\"font-size: 14pt; color: rgb(230, 126, 35);\">Annual Report 2020</span></strong></p>\r\n<p>Form 56-1 Year 2020</p>', 'https://drive.google.com/file/d/1kfTVNuiolMTQrGr1KBObdBrTB8avt5tc/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `regulation`
--

CREATE TABLE `regulation` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regulation`
--

INSERT INTO `regulation` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนsaเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `regulation_en`
--

CREATE TABLE `regulation_en` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regulation_en`
--

INSERT INTO `regulation_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">The MPJ GROUP group of companies operates in the business of logistics management services. both in terms of delivery and administrative services All-in-one container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `safety`
--

CREATE TABLE `safety` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `safety`
--

INSERT INTO `safety` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `safety_en`
--

CREATE TABLE `safety_en` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `safety_en`
--

INSERT INTO `safety_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">The MPJ GROUP group of companies operates in the business of logistics management services. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `shareholder`
--

CREATE TABLE `shareholder` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `percen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shareholder`
--

INSERT INTO `shareholder` (`id`, `company_name`, `qty`, `percen`) VALUES
(3, 'บริษัท เอเอเอบิบิบิ จำกัด', '6,000,000', '2.96'),
(4, 'บริษัท เอเอเอบิบิบิ จำกัด', '6,000,000', '2.96');

-- --------------------------------------------------------

--
-- Table structure for table `shareholder_en`
--

CREATE TABLE `shareholder_en` (
  `id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `percen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shareholder_en`
--

INSERT INTO `shareholder_en` (`id`, `company_name`, `qty`, `percen`) VALUES
(1, 'AA Bibibi Co., Ltd.', '20,683,125', '2.73'),
(2, 'MPJ Distribution Center Co.,Ltd.', '20,683,125', '2.73');

-- --------------------------------------------------------

--
-- Table structure for table `sha_content`
--

CREATE TABLE `sha_content` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sha_content`
--

INSERT INTO `sha_content` (`id`, `content`) VALUES
(1, '<p><span style=\"font-size: 14pt;\"><strong><span style=\"color: rgb(230, 126, 35);\">โครงสร้างการถือหุ้น</span></strong></span><br><span style=\"font-size: 14pt;\">รายชื่อผู้ถือหุ้นรายใหญ่ 10 อันดับแรก ที่ปรากฏในสมุดทะเบียนผู้ถือหุ้น ณ วันที่ 31 ธันวาคม 2563 มีดังนี้</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sha_content_en`
--

CREATE TABLE `sha_content_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sha_content_en`
--

INSERT INTO `sha_content_en` (`id`, `content`) VALUES
(1, '<h4><span style=\"color: rgb(230, 126, 35);\">Shareholder structure</span></h4>\r\n<p>List of the top 10 major shareholders appearing in the shareholder register book as of December 31, 2020 are as follows</p>');

-- --------------------------------------------------------

--
-- Table structure for table `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_img`
--

INSERT INTO `slide_img` (`id`, `img`) VALUES
(1, '970547332.webp'),
(2, 's02.jpg'),
(3, '313185265.webp');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text`
--

CREATE TABLE `slide_text` (
  `id` int(10) NOT NULL,
  `slide_text1` longtext NOT NULL,
  `slide_text2` longtext NOT NULL,
  `slide_text3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_text`
--

INSERT INTO `slide_text` (`id`, `slide_text1`, `slide_text2`, `slide_text3`) VALUES
(1, '<p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 36pt; color: rgb(230, 126, 35);\"><strong>MPJ Logistics<br></strong></span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">ให้บริการขนส่ง 7 วัน 24 ชั่วโมง มีระบบ GPS ติดตาม รถทุกคัน</span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">ประกันสินค้ามูลค่า 7 ล้านบาทต่อเที่ยวการขนส่ง</span></p>\r\n<p style=\"text-align: center; line-height: 1;\">&nbsp;</p>', '<p style=\"text-align: center; line-height: 1;\"><span style=\"color: rgb(230, 126, 35);\"><span style=\"font-size: 36pt;\"><strong>MPJ Logistics<br></strong></span></span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">มีการควบคุมความเร็วในการขนส่งไม่ให้เกิน 60 กิโลเมตรต่อชั่วโมง</span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">เพื่อลดอัตราการเกิดอุบัติเหตุให้เหลือน้อยที่สุด ให้บริการขนส่ง ไม่น้อยกว่า 6,000 เที่ยวต่อเดือน</span></p>', '<p style=\"text-align: center; line-height: 1;\"><span style=\"color: rgb(52, 73, 94);\"><span style=\"font-size: 36pt; color: rgb(230, 126, 35);\"><strong>MPJ Logistics</strong></span><br><br><span style=\"font-size: 18pt;\">อู่ซ่อมบำรุงรักษารถ ภายในบริษัท โดยช่างที่ผ่านการอบรมจาก ศูนย์บริการของ Hino</span></span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">มีประสบการณ์ด้านการขนส่ง ตู้คอนเทนเนอร์ มากกว่า 8 ปี</span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">มีการตรวจสารเสพติด และ ปริมาณแอลกอฮอล์ ของพนักงานขับรถ เป็นประจำทุกเดือน</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slide_text_en`
--

CREATE TABLE `slide_text_en` (
  `id` int(10) NOT NULL,
  `slide_text1` longtext NOT NULL,
  `slide_text2` longtext NOT NULL,
  `slide_text3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_text_en`
--

INSERT INTO `slide_text_en` (`id`, `slide_text1`, `slide_text2`, `slide_text3`) VALUES
(1, '<p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 36pt; color: rgb(230, 126, 35);\"><strong>MPJ Logistics<br></strong></span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">Providing 7-day, 24-hour transportation services with<br>GPS tracking system for every vehicle, </span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">insurance worth 7 million baht per transportation trip.</span></p>', '<p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 36pt; color: rgb(230, 126, 35);\"><strong>MPJ Logistics<br></strong></span> <br><span style=\"font-size: 18pt;\"><span style=\"color: rgb(52, 73, 94);\">Garage for maintenance and maintenance of cars within&nbsp;the company by technicians&nbsp;<br>who have been trained by Hino </span><span style=\"color: rgb(52, 73, 94);\">service centers have experience in transportation. </span></span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">Containers for more than 8 years, have drug and alcohol testing <br>of the driver&nbsp;on a monthly basis</span></p>', '<p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 36pt; color: rgb(230, 126, 35);\"><strong>MPJ Logistics<br></strong></span> <br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">Transport speed is controlled not to exceed 60 kilometers per hour. </span><br><span style=\"color: rgb(52, 73, 94); font-size: 18pt;\">to reduce the accident rate to a minimum Providing <br>transportation services,&nbsp;not less than 6,000 trips per month</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `social_policy`
--

CREATE TABLE `social_policy` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_policy`
--

INSERT INTO `social_policy` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนsaเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `social_policy_en`
--

CREATE TABLE `social_policy_en` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_policy_en`
--

INSERT INTO `social_policy_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">The MPJ GROUP group of companies operates in the business of logistics management services. both in terms of delivery and administrative services Turnkey container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `link`) VALUES
(4, 'https://www.set.or.th/th/market/product/stock/quote/SGC/price');

-- --------------------------------------------------------

--
-- Table structure for table `stock_en`
--

CREATE TABLE `stock_en` (
  `id` int(10) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock_en`
--

INSERT INTO `stock_en` (`id`, `link`) VALUES
(4, 'https://www.set.or.th/th/market/product/stock/quote/SGC/price');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id`, `content`, `img`) VALUES
(1, '', '583710347.webp');

-- --------------------------------------------------------

--
-- Table structure for table `structure_en`
--

CREATE TABLE `structure_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `structure_en`
--

INSERT INTO `structure_en` (`id`, `content`, `img`) VALUES
(1, '', '1794352698.webp');

-- --------------------------------------------------------

--
-- Table structure for table `use_of_personal`
--

CREATE TABLE `use_of_personal` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `use_of_personal`
--

INSERT INTO `use_of_personal` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนsaเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น &ldquo;ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `use_of_personal_en`
--

CREATE TABLE `use_of_personal_en` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `use_of_personal_en`
--

INSERT INTO `use_of_personal_en` (`id`, `content`) VALUES
(1, '<p><span style=\"color: rgb(126, 140, 141);\">The MPJ GROUP group of companies operates in the business of logistics management services. both in terms of delivery and administrative services All-in-one container storage for domestic packing for import-export of goods Including providing a complete range of ready-made software services covering all types of businesses. along with after-sales service</span></p>\r\n<p><span style=\"color: rgb(126, 140, 141);\">We have been operating for more than 12 years, and we strive to be &ldquo;The leading local service provider in the country. Logistics management With an understanding of the local needs within the country We will deliver services that meet the needs of customers at international standards. for the success of our customers.&rdquo;</span></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `content`) VALUES
(1, '<div class=\"text-center mb-5\">\r\n<h4 style=\"text-align: left;\"><span style=\"color: rgb(230, 126, 35);\">วิสัยทัศน์</span></h4>\r\n<p style=\"text-align: left;\"><span style=\"color: rgb(126, 140, 141);\">MPJ Group ก่อตั้งขึ้นตั้งแต่ปี 2551 เพื่อเป็นผู้ให้บริการด้านโลจิสติกส์แบบครบวงจร เราให้บริการบำรุงรักษาและซ่อมแซมตู้คอนเทนเนอร์พร้อมกับธุรกิจขนส่งตู้คอนเทนเนอร์ที่เติบโตอย่างต่อเนื่องนับตั้งแต่ก่อตั้ง ในแง่ของธุรกิจคลังสินค้า เราเพิ่มประสิทธิภาพในการทำงานด้วยการเพิ่มอุปกรณ์และเทคโนโลยีใหม่ๆ เพื่อรองรับความต้องการของลูกค้า เพื่อให้ได้รับความพึงพอใจจากบริการที่มีคุณภาพ ด้วยความไว้วางใจจากลูกค้า เราได้กลายเป็นหนึ่งในคลังสินค้าที่เติบโตเร็วที่สุดและ</span></p>\r\n<h4 style=\"text-align: left;\"><span style=\"color: rgb(230, 126, 35);\">พันธกิจ</span></h4>\r\n<p style=\"text-align: left;\"><span style=\"color: rgb(126, 140, 141);\">MPJ Group ก่อตั้งขึ้นตั้งแต่ปี 2551 เพื่อเป็นผู้ให้บริการด้านโลจิสติกส์แบบครบวงจร เราให้บริการบำรุงรักษาและซ่อมแซมตู้คอนเทนเนอร์พร้อมกับธุรกิจขนส่งตู้คอนเทนเนอร์ที่เติบโตอย่างต่อเนื่องนับตั้งแต่ก่อตั้ง ในแง่ของธุรกิจคลังสินค้า เราเพิ่มประสิทธิภาพในการทำงานด้วยการเพิ่มอุปกรณ์และเทคโนโลยีใหม่ๆ เพื่อรองรับความต้องการของลูกค้า เพื่อให้ได้รับความพึงพอใจจากบริการที่มีคุณภาพ ด้วยความไว้วางใจจากลูกค้า เราได้กลายเป็นหนึ่งในคลังสินค้าที่เติบโตเร็วที่สุดและ</span></p>\r\n<h4 style=\"text-align: left;\"><span style=\"color: rgb(230, 126, 35);\">ค่านิยม</span></h4>\r\n<p style=\"text-align: left;\"><span style=\"color: rgb(126, 140, 141);\">MPJ Group ก่อตั้งขึ้นตั้งแต่ปี 2551 เพื่อเป็นผู้ให้บริการด้านโลจิสติกส์แบบครบวงจร เราให้บริการบำรุงรักษาและซ่อมแซมตู้คอนเทนเนอร์พร้อมกับธุรกิจขนส่งตู้คอนเทนเนอร์ที่เติบโตอย่างต่อเนื่องนับตั้งแต่ก่อตั้ง ในแง่ของธุรกิจคลังสินค้า เราเพิ่มประสิทธิภาพในการทำงานด้วยการเพิ่มอุปกรณ์และเทคโนโลยีใหม่ๆ เพื่อรองรับความต้องการของลูกค้า เพื่อให้ได้รับความพึงพอใจจากบริการที่มีคุณภาพ ด้วยความไว้วางใจจากลูกค้า เราได้กลายเป็นหนึ่งในคลังสินค้าที่เติบโตเร็วที่สุดและ</span></p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `vision_en`
--

CREATE TABLE `vision_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vision_en`
--

INSERT INTO `vision_en` (`id`, `content`) VALUES
(1, '<div class=\"text-center mb-5\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-size: 24pt; color: rgb(230, 126, 35);\">Vision, Mission and Values</span></h2>\r\n</div>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Vision</span></h4>\r\n<p><span style=\"color: rgb(149, 165, 166);\">MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance &amp; repair services along with container transportation business which has been growing continuously &nbsp;since established. In terms of depot business, we increase our work efficiency by &nbsp;adding up new equipment and technologies to support customer&rsquo;s requirements in order to achieve their satisfaction with qualified services. With trust from customers, we have become one of the fastest growing depot and</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Mission</span></h4>\r\n<p><span style=\"color: rgb(149, 165, 166);\">MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance &amp; repair services along with container transportation business which has been growing continuously &nbsp;since established. In terms of depot business, we increase our work efficiency by &nbsp;adding up new equipment and technologies to support customer&rsquo;s requirements in order to achieve their satisfaction with qualified services. With trust from customers, we have become one of the fastest growing depot and</span></p>\r\n<h4><span style=\"color: rgb(230, 126, 35);\">Values</span></h4>\r\n<p><span style=\"color: rgb(149, 165, 166);\">MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance &amp; repair services along with container transportation business which has been growing continuously &nbsp;since established. In terms of depot business, we increase our work efficiency by &nbsp;adding up new equipment and technologies to support customer&rsquo;s requirements in order to achieve their satisfaction with qualified services. With trust from customers, we have become one of the fastest growing depot and</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `work_content`
--

CREATE TABLE `work_content` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_content`
--

INSERT INTO `work_content` (`id`, `content`) VALUES
(1, '<h4 class=\"text-dark\">สวัสดิการ - เงินเดือน/ค่าเที่ยว</h4>\r\n<ul>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">รายได้รวม 25,000-45,000 บาทต่อเดือน (ขึ้นอยู่กับความขยันวิ่ง)</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ประกันอุบัติเหตุกลุ่ม</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ยูนิฟอร์ม 3 ชุด</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ประกันสังคม</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ทุนการศึกษาบุตร</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ตรวจสุขภาพประจำปี</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">วันหยุดตามประเพณี</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">สวัสดิการกู้ยืม (กรณีฉุกเฉิน/จำเป็น)</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ค่าเที่ยววิ่งพิเศษวันหยุด</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ช่วยเหลืองานศพบิดา &ndash; มารดา</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ค่าอุปสมบท</span></li>\r\n<li style=\"color: rgb(126, 140, 141);\"><span style=\"color: rgb(126, 140, 141);\">ค่าเยี่ยมไข้ (กรณีนอนรักษาตัวที่โรงพยาบาล)</span></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `work_content_en`
--

CREATE TABLE `work_content_en` (
  `id` int(10) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_content_en`
--

INSERT INTO `work_content_en` (`id`, `content`) VALUES
(1, '<p><strong><span style=\"font-size: 14pt;\">Welfare - Salary/travel expenses</span></strong></p>\r\n<ul>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Total income 25,000-45,000 baht per month (depending on diligence)</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Group Accident Insurance</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">3 uniforms</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Social security</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Child Scholarship</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Annual health check</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Traditional holiday</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Loan welfare (emergency/needed)</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Holiday travel expenses</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Helping father-mother\'s funeral</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Ordination fee</span></li>\r\n<li style=\"color: rgb(126, 140, 141); font-size: 12pt;\"><span style=\"color: rgb(126, 140, 141); font-size: 12pt;\">Sick visit fee (in case of hospitalization)</span></li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_en`
--
ALTER TABLE `about_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_en`
--
ALTER TABLE `activity_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_img`
--
ALTER TABLE `activity_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_img_en`
--
ALTER TABLE `activity_img_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_company`
--
ALTER TABLE `blog_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_company1`
--
ALTER TABLE `blog_company1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_company1_en`
--
ALTER TABLE `blog_company1_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_company_en`
--
ALTER TABLE `blog_company_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_en`
--
ALTER TABLE `board_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catta_cer1`
--
ALTER TABLE `catta_cer1`
  ADD PRIMARY KEY (`cer_id`);

--
-- Indexes for table `catta_cer1_en`
--
ALTER TABLE `catta_cer1_en`
  ADD PRIMARY KEY (`cer_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_en`
--
ALTER TABLE `certificate_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company1`
--
ALTER TABLE `company1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company1_en`
--
ALTER TABLE `company1_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company2`
--
ALTER TABLE `company2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company2_en`
--
ALTER TABLE `company2_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company3`
--
ALTER TABLE `company3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company3_en`
--
ALTER TABLE `company3_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company4`
--
ALTER TABLE `company4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company4_en`
--
ALTER TABLE `company4_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_en`
--
ALTER TABLE `company_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_01`
--
ALTER TABLE `contact_01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_01_en`
--
ALTER TABLE `contact_01_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_02`
--
ALTER TABLE `contact_02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_02_en`
--
ALTER TABLE `contact_02_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_03`
--
ALTER TABLE `contact_03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_03_en`
--
ALTER TABLE `contact_03_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_04`
--
ALTER TABLE `contact_04`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_04_en`
--
ALTER TABLE `contact_04_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_en`
--
ALTER TABLE `contact_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_en`
--
ALTER TABLE `content_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_en`
--
ALTER TABLE `corporate_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pos`
--
ALTER TABLE `detail_pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `detail_pos_en`
--
ALTER TABLE `detail_pos_en`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `email_1`
--
ALTER TABLE `email_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_2`
--
ALTER TABLE `email_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_3`
--
ALTER TABLE `email_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_4`
--
ALTER TABLE `email_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_5`
--
ALTER TABLE `email_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_6`
--
ALTER TABLE `email_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ethics`
--
ALTER TABLE `ethics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ethics_en`
--
ALTER TABLE `ethics_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_en`
--
ALTER TABLE `financial_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_en`
--
ALTER TABLE `history_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measure`
--
ALTER TABLE `measure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measure_en`
--
ALTER TABLE `measure_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_en`
--
ALTER TABLE `news_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_en`
--
ALTER TABLE `policy_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_en`
--
ALTER TABLE `position_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication_en`
--
ALTER TABLE `publication_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulation`
--
ALTER TABLE `regulation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulation_en`
--
ALTER TABLE `regulation_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety`
--
ALTER TABLE `safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety_en`
--
ALTER TABLE `safety_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shareholder`
--
ALTER TABLE `shareholder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shareholder_en`
--
ALTER TABLE `shareholder_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sha_content`
--
ALTER TABLE `sha_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sha_content_en`
--
ALTER TABLE `sha_content_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_img`
--
ALTER TABLE `slide_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text`
--
ALTER TABLE `slide_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_text_en`
--
ALTER TABLE `slide_text_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_policy`
--
ALTER TABLE `social_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_policy_en`
--
ALTER TABLE `social_policy_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_en`
--
ALTER TABLE `stock_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structure_en`
--
ALTER TABLE `structure_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_of_personal`
--
ALTER TABLE `use_of_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_of_personal_en`
--
ALTER TABLE `use_of_personal_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision_en`
--
ALTER TABLE `vision_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_content`
--
ALTER TABLE `work_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_content_en`
--
ALTER TABLE `work_content_en`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_en`
--
ALTER TABLE `about_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activity_en`
--
ALTER TABLE `activity_en`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activity_img`
--
ALTER TABLE `activity_img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `activity_img_en`
--
ALTER TABLE `activity_img_en`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_company`
--
ALTER TABLE `blog_company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_company1`
--
ALTER TABLE `blog_company1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_company1_en`
--
ALTER TABLE `blog_company1_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_company_en`
--
ALTER TABLE `blog_company_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `board_en`
--
ALTER TABLE `board_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catta_cer1`
--
ALTER TABLE `catta_cer1`
  MODIFY `cer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catta_cer1_en`
--
ALTER TABLE `catta_cer1_en`
  MODIFY `cer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `certificate_en`
--
ALTER TABLE `certificate_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company1`
--
ALTER TABLE `company1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company1_en`
--
ALTER TABLE `company1_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company2`
--
ALTER TABLE `company2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company2_en`
--
ALTER TABLE `company2_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company3`
--
ALTER TABLE `company3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company3_en`
--
ALTER TABLE `company3_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company4`
--
ALTER TABLE `company4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company4_en`
--
ALTER TABLE `company4_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_en`
--
ALTER TABLE `company_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_01`
--
ALTER TABLE `contact_01`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_01_en`
--
ALTER TABLE `contact_01_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_02`
--
ALTER TABLE `contact_02`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_02_en`
--
ALTER TABLE `contact_02_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_03`
--
ALTER TABLE `contact_03`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_03_en`
--
ALTER TABLE `contact_03_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_04`
--
ALTER TABLE `contact_04`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_04_en`
--
ALTER TABLE `contact_04_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_en`
--
ALTER TABLE `contact_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_en`
--
ALTER TABLE `content_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate_en`
--
ALTER TABLE `corporate_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_pos`
--
ALTER TABLE `detail_pos`
  MODIFY `id_pos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `detail_pos_en`
--
ALTER TABLE `detail_pos_en`
  MODIFY `id_pos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email_1`
--
ALTER TABLE `email_1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email_2`
--
ALTER TABLE `email_2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email_3`
--
ALTER TABLE `email_3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_4`
--
ALTER TABLE `email_4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email_5`
--
ALTER TABLE `email_5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_6`
--
ALTER TABLE `email_6`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ethics`
--
ALTER TABLE `ethics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ethics_en`
--
ALTER TABLE `ethics_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `financial_en`
--
ALTER TABLE `financial_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_en`
--
ALTER TABLE `history_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `measure`
--
ALTER TABLE `measure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `measure_en`
--
ALTER TABLE `measure_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_en`
--
ALTER TABLE `news_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policy_en`
--
ALTER TABLE `policy_en`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `position_en`
--
ALTER TABLE `position_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publication_en`
--
ALTER TABLE `publication_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regulation`
--
ALTER TABLE `regulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regulation_en`
--
ALTER TABLE `regulation_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `safety_en`
--
ALTER TABLE `safety_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shareholder`
--
ALTER TABLE `shareholder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shareholder_en`
--
ALTER TABLE `shareholder_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sha_content`
--
ALTER TABLE `sha_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sha_content_en`
--
ALTER TABLE `sha_content_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_img`
--
ALTER TABLE `slide_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_text`
--
ALTER TABLE `slide_text`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_text_en`
--
ALTER TABLE `slide_text_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_policy`
--
ALTER TABLE `social_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_policy_en`
--
ALTER TABLE `social_policy_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_en`
--
ALTER TABLE `stock_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `structure_en`
--
ALTER TABLE `structure_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `use_of_personal`
--
ALTER TABLE `use_of_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `use_of_personal_en`
--
ALTER TABLE `use_of_personal_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision_en`
--
ALTER TABLE `vision_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_content`
--
ALTER TABLE `work_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_content_en`
--
ALTER TABLE `work_content_en`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
