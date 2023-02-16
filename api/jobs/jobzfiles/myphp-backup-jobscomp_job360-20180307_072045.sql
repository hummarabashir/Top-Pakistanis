CREATE DATABASE IF NOT EXISTS `jobscomp_job360`;

USE jobscomp_job360;

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin` VALUES("5","Noman","m.nomankhan23@gmail.com","6d26d1f89ba064b1dfa53acf2b99c3ff","1");
INSERT INTO `admin` VALUES("7","Faiza Minhas","Faizaminhas_7@live.com","db8f16eb800f2a9b9c7a54d17b0de95b","1");



DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ci_sessions` VALUES("0637a1c42073d761f73f70c5bc4bbd69a549f47f","::1","1497688951","__ci_last_regenerate|i:1497688687;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("1b2309d1f8b42800d559f308d1b7d2f0f86d7063","::1","1497696169","__ci_last_regenerate|i:1497696032;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("2292cafd0f77a28b1444a6133717b0daa87af0a4","::1","1497694887","__ci_last_regenerate|i:1497694592;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";flash_message|s:29:\"Category Updated Successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}");
INSERT INTO `ci_sessions` VALUES("2ae252ab46abd5443c8993f100017bb89b5f6a8c","::1","1497691740","__ci_last_regenerate|i:1497691448;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("2ca404e79e49369621f37660c527cc1fecfbb6b3","::1","1497698367","__ci_last_regenerate|i:1497698343;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("37d3f6566ad24d43ff0c7a2db2d8e06690f9cf0e","::1","1497699526","__ci_last_regenerate|i:1497699237;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";flash_message|s:29:\"Category Updated Successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}");
INSERT INTO `ci_sessions` VALUES("54a578d7fe843dfb9b54deb798a42bc3a7c84f70","::1","1497697824","__ci_last_regenerate|i:1497697824;");
INSERT INTO `ci_sessions` VALUES("560f5ff89ed59ba57ceef7c659ddac10ad3bd0c5","::1","1497699772","__ci_last_regenerate|i:1497699725;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("5ccc1426efc0be3899f9c1fde579c820946cf296","::1","1497688579","__ci_last_regenerate|i:1497688351;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("61d33ca8890e97d7aa2532f36a46e2fbc3306a26","::1","1497689668","__ci_last_regenerate|i:1497689474;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("6e9f54272ff2ac4f5a9ff03256690bbf75d09de4","::1","1497694074","__ci_last_regenerate|i:1497693865;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("71ceb000bb1db5cab2b325279e9b8d105e359959","::1","1497695999","__ci_last_regenerate|i:1497695582;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("7e1b067da6eca3a66a117da12d3f2af045914141","::1","1497687837","__ci_last_regenerate|i:1497687546;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("8f9fd5ec4ddeca0f995c328a4a2c059f82276c89","::1","1497688169","__ci_last_regenerate|i:1497687991;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("92084dfbea6217270dba0c37abebd52a55fc7e77","::1","1497689206","__ci_last_regenerate|i:1497689019;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";flash_message|s:30:\"Subcategory Added Successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}");
INSERT INTO `ci_sessions` VALUES("a6b3d259846c9ad3183cd84e28eb1d3eb709b0c8","::1","1497694384","__ci_last_regenerate|i:1497694189;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("bbb404a6d8449bbc74183a2f03282ee96570fd85","::1","1497695198","__ci_last_regenerate|i:1497694895;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("c640ca9333db0e99372d034cb808583f7d2b3534","::1","1497693351","__ci_last_regenerate|i:1497693351;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("c8a6478a2124df48972dd6dc71f387df5dea0854","::1","1497690808","__ci_last_regenerate|i:1497690515;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("cbd7372dcfadb8d44eaaf27bb8009136a964bd7b","::1","1497700616","__ci_last_regenerate|i:1497700612;");
INSERT INTO `ci_sessions` VALUES("d684e425228f84bfc24b3e7ece8f0a7edf8da505","::1","1497698931","__ci_last_regenerate|i:1497698808;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("d82ada1e476099407752f108e9fc1d77f1d178af","::1","1497691772","__ci_last_regenerate|i:1497691772;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("dd3514800b0c7635cfde4ab0dbf3150e82cbe465","::1","1497696581","__ci_last_regenerate|i:1497696339;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("f3161d2fbf66da15f3e4320f916df3c8be093a88","::1","1497691442","__ci_last_regenerate|i:1497690972;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");
INSERT INTO `ci_sessions` VALUES("fd16297f723b07edaa31af02360efa23e69cacb5","::1","1497696683","__ci_last_regenerate|i:1497696655;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";flash_message|s:27:\"Category Added Successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}");
INSERT INTO `ci_sessions` VALUES("fdc3eba7347fb5f49ec8242056e5cefea5a83755","::1","1497695574","__ci_last_regenerate|i:1497695201;admin_login|s:1:\"1\";admin_id|s:1:\"1\";login_user_id|s:1:\"1\";name|s:9:\"Mr. Admin\";login_type|s:5:\"admin\";");



DROP TABLE IF EXISTS `customer_feedback`;

CREATE TABLE `customer_feedback` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `date_of_birth` varchar(200) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `hear_about_us` varchar(200) NOT NULL,
  `segment_of_KTE` varchar(200) NOT NULL,
  `rate_us_ambience` varchar(200) NOT NULL,
  `rate_us_quality` varchar(200) NOT NULL,
  `rate_us_variety` varchar(200) NOT NULL,
  `rate_us_pricing` varchar(200) NOT NULL,
  `rate_us_hygiene` varchar(200) NOT NULL,
  `rate_us_safety` varchar(200) NOT NULL,
  `rate_us_customer_care` varchar(200) NOT NULL,
  `insert_date` date NOT NULL,
  `date_time` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1810 DEFAULT CHARSET=latin1;

INSERT INTO `customer_feedback` VALUES("264","tiya ","Mr.","naveed","akbar","sec.pvt.pk@gmail.com","+923216919818","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("263","tiya ","Mr.","ayub","ghori","habbob7@yahoo.com","+923215289178","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("262","tiya ","Ms.","qaisra","hayat","qaisrashoaib@hotmail.com","+923455111019","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("261","tiya ","Mr.","abid","","abidcds1@hotmail.com","+923345085175","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("260","tiya ","Mr.","ehsaan","shabbir","ehsanshabbir78@gmail.com","+923328033200","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("259","tiya ","Mrs.","zehra","khan","zehraalikhan0@gmail.com","+923335093595","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("258","tiya ","Mrs.","sariya","abbasi","","+923325103409","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("257","tiya ","Mrs.","faiza","ijaz","","+923005011107","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Poor","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("256","tiya ","Mrs.","qurban","","","+923218002802","Quetta","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Excellent","","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("255","tiya ","Ms.","afra","shah","afrazo4ka@mail.ru","+923165399037","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("254","tiya ","Ms.","sana","arshad","arshadsana1331@gmail.com","+923350065558","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("253","tiya ","Mr.","abdul","samad","samadnayyer@GMAIL.COM","+923315086121","Islamabadj","17 May 1987","Yes","Instagram","Ice Skating,,,","Good","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("252","tiya ","Mrs.","aasma","imran","asmamufti85@gmail.com","+923025900602","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("251","tiya ","Ms.","tuba","rehman","tubarehman312@gmail.com","+923344019591","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("250","tiya ","Mr.","umair","jamil","","+921234567","Islamabad","1 January 1950","","Friend","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("249","tiya ","Mr.","shakeel","khan","khanshakeeel@gmail.com","+923005057750","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("248","tiya ","Mr.","dr","yawar","yawar.hayat@riphah.edu.pk","+923215216308","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("247","tiya ","Mrs.","katryna","shah","areej shah. ah@gmail.com","+923009860000","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("246","tiya ","Ms.","zoya","khan","zoyawadood@hotmail.com","+923311388113","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("245","tiya ","Mrs.","areeba","","","+923225772726","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("244","tiya ","Mr.","ibrahim","khan","maryamkhancute@gmail.com","+923335188058","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("243","tiya ","Mrs.","shehzad","","noshabaakbani@gmail.com","+923002429899","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Average","Poor","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("242","tiya ","Mr.","akbar","lakhani","akbar2025@gmail.com","+923161125721","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("68","tiya ","Mrs.","masooma","safari","","+923485206198","isb","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("69","tiya ","Mr.","","","","+923345169362","Islamabad","1 January 1950","Yes","Mall Branding",",,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("70","tiya ","Mr.","adnan","javed","adnanjaved@hotmail.co.uk","+923145557750","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("71","tiya ","Mr.","Aamir","Khan","aamir79k@yahoo.com","+923333492742","Islamabad","26 January 1979","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("72","tiya ","Mr.","Muhammad muzaffar","iqbal","m03345148730@gmail.com","+923345148730","Islamabad","18 August 1982","","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("73","tiya ","Mr.","ali","anwer","alianweradil@gmail.com","+92312516726","Islamabad","12 May 1981","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("74","tiya ","Mrs.","wafa","haris","","+923348530899","Islamabad","13 May 1987","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("75","tiya ","Mr.","daud","salam","daud.salam81@gmail.com","+923008588582","Islamabad","17 July 1981","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("76","tiya ","Mr.","Abbas","maqsood","abbaskhan555@hotmail.com","+923419166003","Peshawar","8 August 1996","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("77","tiya ","Mr.","daud","shah","daud2181@gmail.co,","+920333787263","Quetta","2 January 1981","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("78","tiya ","Mr.","faizan","zafar","faizan.zafar2@hotmail.com","+923235183021","Islamabad","1 January 1950","No","",",,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("79","tiya ","Mr.","bellal","aziz","ba_786@hotmail.com","+92","","18 May 1989","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("80","tiya ","Ms.","aafia","malik","aafiamalik@yahoo.com","+923319415585","","28 August 1984","No","Friend","Ice Skating,,,","Good","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("81","tiya ","Mrs.","Roha","waqas","sw33tlady82@yahoo.com","+923005042003","Islamabad","2 March 1987","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("82","tiya ","Ms.","tehmina","khan","tehmina.mppl@gmail.com","+923005198272","islamabad","17 January 1980","","Facebook",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("83","tiya ","Ms.","rabies Ullah","khan","rabia-adnan@live.com","+920345502444","Islamabad","9 November 2005","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Average","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("84","tiya ","Ms.","zarlish","khan","khan.shamroze786@gmail.com","+923355108776","Islamabad","23 December 2008","No","Facebook","Ice Skating,,,Gaming Zone","Excellent","Good","Excellent","Poor","Good","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("85","tiya ","Mrs.","ambreen","afridi","amberafridi786@gmail.com","+920344910704","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("86","tiya ","Ms.","amtul","rehman","amtulrehman@gmail.com","+923335036234","islamabad","23 September 1975","No","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("87","tiya ","Mr.","Abdullah","Abbasi","","+920300508373","Islamabad","1 January 1950","","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("88","tiya ","Ms.","jing","hao","haojinglady @126.com","+920340588667","Islamabad","1 August 1985","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("89","tiya ","Mr.","Maarij","Farooq","maarijfarooq@hotmail.com","+923245193421","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("90","tiya ","Mr.","salman","pervaiz","","+923219002268","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("91","tiya ","","anfas","malik","anfas_malik@hotmail.com","+920333541427","Islamabad","1 January 1950","","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("92","tiya ","Mr.","sher","azam","sherazam1928@hotmail.com","+923335708555","Peshawar","1 January 1950","Yes","Instagram",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("93","tiya ","Ms.","asma","naqashband","asma.naqashband@hotmail.com","+923316131613","Islamabad","23 April 1993","No","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("94","tiya ","Mr.","naaem","khan","naaem_151@hotmail.com","+92","Islamabad","5 November 1978","No","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("95","tiya ","Mr.","fahim","khan","","+923009595633","Islamabad","21 November 1962","Yes","Mall Branding",",,,Gaming Zone","Average","Good","Good","Average","Average","Poor","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("96","tiya ","Mrs.","mahenaz","malik","","+923005136494","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Poor","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("97","tiya ","Mr.","Iltifat","Wasti","iltifatwasti@gmail.com","+920300854904","Islamkot","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("98","tiya ","Mrs.","javeria","sulehri","wehaaj@hotmail.com","+923328528676","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("99","tiya ","Mr.","ahsan","jilani","ahsan.jilani@gmail.com","+920303444351","Islamabad","6 November 1980","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("100","tiya ","Ms.","abid","","rabi12meer@hotmail.com","+923325944401","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("101","tiya ","Mrs.","Maryam","khan","mrym2002@email.com","+923455894634","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("102","tiya ","Mr.","hisham","","","+920300888888","","28 March 1980","No","Friend","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("103","tiya ","Mr.","sumair","khan","sumair.khan@sabrern.com.pk","+920300501898","Islamabad","24 January 1976","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("104","tiya ","Mrs.","Dr.  irum","zulfiqar","","+923335774714","Islamabad","28 October 1984","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("105","tiya ","Mr.","abdul","samad","a.samad2929@gmail.com","+923233533697","Islamabad","2 September 1989","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("106","tiya ","Ms.","fouzia","salman","thunderstrom_20@hotmail.com","+923325186849","islamabad","22 September 1984","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("107","tiya ","Mr.","abbas","khan","","+923469100000","Islamabad","11 November 1989","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("108","tiya ","Ms.","anum","faisal","m.faisaljann@gmail.com","+923215326850","Islamabad","2 April 2006","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("109","tiya ","Mrs.","Faryial","Salahuddin","salahuddin. akhtar@marksman.com.pk","+923335231313","rwp","8 March 1980","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("110","tiya ","Mrs.","mrs","kamran","memonaiq@YAHOO.COM","+920331517884","Islamabad","18 January 2006","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("111","tiya ","","alamgir","shah","shahalamgir@hotmail.co","+92","Islamabad","1 January 1950","No","",",,,","Average","Average","Poor","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("112","tiya ","Mr.","tahir","shah","s.tahir@live.com","+92512213248","isb","1 January 1950","No","Mall Branding",",,,","Excellent","Excellent","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("113","tiya ","Mrs.","shazia","akhlaq","shazah@um.dk","+923028512789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("114","tiya ","Mr.","Iftikhar","ahmed","bensonboyus@gmail.com","+923459516699","Swat","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("115","tiya ","","junaid","malik","junaid@renegadefurniture.com","+923005114680","islamabad","19 August 1981","No","Mall Branding",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("116","tiya ","Mr.","murtaza","subhan","nadir.sobia@gmail.com","+923335990033","Islamabad","22 September 2010","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("117","tiya ","Mr.","tehseen","wahid","twahid@worldbank.org","+923109679647","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Average","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("118","tiya ","Mrs.","hina","ghazanfar","","+923215168412","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("119","tiya ","Mrs.","Mother of","hassan","","+92315565200","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("120","tiya ","Mrs.","seemab","kassim","seemab921@gmail.com","+923219552525","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("121","tiya ","Mrs.","olive","","olivenayyer9630@gmail.com","+920321509458","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("122","tiya ","Mrs.","olive","","olivenayyer9630@gmail.com","+920321509458","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("123","tiya ","Mrs.","Mehreen","khan","","+923332345785","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("124","tiya ","Mr.","abdul","raza","araza721@gmail.com","+923415338569","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("125","tiya ","","faisal","sharif","faisalsharif66@hotmail.com","+923215415838","Rawalpindi","18 August 1966","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("126","tiya ","Mrs.","mehreen","jahanzaib","mehreen_40@HOTMAIL.COM","+923316959902","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("127","tiya ","Mrs.","saba","khan","sabasartaj@gmail.com","+923028509110","Islamabad","3 November 1983","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("128","tiya ","Mr.","irfan","malik","ishirts01@gmail.com","+923235491926","rwp","22 October 1993","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("129","tiya ","Ms.","bushra","Hameed","post.truth@hotmail.com","+923348221110","Islamabad","28 September 1988","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("130","tiya ","Ms.","bushra","Hameed","post.truth@hotmail.com","+923348221110","Islamabad","28 September 1988","Yes","",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("131","tiya ","Mr.","obaidullah","ullah","obaid747@gmail.com","+920300854094","Islamabad5973","1 December 1973","","Facebook",",,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("132","tiya ","Mr.","khayyam","hamid","khayyamhamid@gmail.com","+923334514143","Jhelum","15 February 1981","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("133","tiya ","Mr.","samama","mohsin","","+923215222280","Islamabad","4 May 2005","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("134","tiya ","Mr.","naveed","khurram","","+923335110703","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("135","tiya ","","ameen","jan","","+923349967176","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("136","tiya ","Mr.","fawad","murtaza","","+92345278632","isb","1 January 1950","No","Mall Branding","Ice Skating,,,","Good","Poor","Poor","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("137","tiya ","Mr.","asad","lodhi","lodhi12@gmail.com","+923335144142","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("138","tiya ","Mr.","dias","khan","hrtvpakistan@gmail.com","+923335899928","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("139","tiya ","Mr.","raja","hammad","","+923335132421","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("140","tiya ","Mrs.","shazia","","","+923215095083","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("141","tiya ","Mr.","Osama","azhar","osamaazhar@gmail.com","+923235272273","Islamabad","8 January 1973","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("142","tiya ","","lubna","iftikhar","","+923365501474","islamabad","1 January 1950","No","",",,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("143","tiya ","Mr.","rizwan","akram","sfm9008@yahoo.com","+923009511905","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("144","tiya ","Mr.","umar","bhutta","mumer@gmail.com","+923345499742","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Average","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("145","tiya ","Mrs.","mughal","","","+923200555501","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("146","tiya ","Mr.","ramzan","","","+923236299990","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("147","tiya ","Mr.","farooq","manzoor","farooqnap8@gmail.com","+923453208892","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("148","tiya ","Mrs.","khadijah","","hawa_hawa1986@hotmail.com","+923335404568","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("149","sarah ","Mr.","Adeel","Raza","adeel.raza@waridtel.com","+923215004500","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("150","sarah ","Mr.","usman","ali","solvingparadoxes@GMAIL.COM","+923335351001","rwp","2 December 1980","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("151","sarah ","Mr.","salar","khan","shameekhan75@gmail.com","+923339123590","peshawar","27 November 2007","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("152","sarah ","Mrs.","saba","tamoor","","+923005149316","isb","8 August 1983","No","Friend",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("153","sarah ","Mr.","Muhammad","Asif","asif.bit @gmail.com","+923216313794","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("154","sarah ","Mrs.","shayla","muneer","sheenzs@yahoo.com","+923335334333","rawalpini","3 June 1980","Yes","Friend",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("155","sarah ","Mr.","fareed","","","+923129595916","islamabad","2 May 1970","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("156","sarah ","Mrs.","nomana","munir","nomana unir@hotmail.com","+923228558786","islamabad","28 September 1983","Yes","",",,,","Good","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("157","sarah ","Mr.","Muhammad  Amir","Saleem","","+923135165444","Islamabad","1 January 1950","Yes","",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("158","sarah ","Mrs.","madiha","noman","","+923435001013","Islamabad","12 September 1982","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("159","sarah ","Mrs.","afshan","ijaz","afshan_ijaz@hotmail.com","+92","Islamabad","29 March 1978","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("160","sarah ","Mr.","awais","ch","chawais76@gmail.com","+923005554400","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("161","sarah ","Mr.","shahid","mehmood","cheemashahid@hotmail.com","+92333534349","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("162","sarah ","Mr.","usman","ali","","+92518466210","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Excellent","Poor","Good","Good","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("163","tiya ","Mr.","song","","","+923102295089","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("164","tiya ","Mr.","faisal","sherwani","faisalsherwani@gmail.com","+923008565241","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Average","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("165","tiya ","Mrs.","sadaf","nasir","","+923002152360","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Excellent","Good","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("166","tiya ","Mrs.","areej","adeel","ammaraadeel84@gmail.com","+920333512559","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("167","tiya ","Mr.","bilal","yousaf","bilalyousafj@gmail.com","+923335947067","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("168","tiya ","Mrs.","Amna","bhatti","","+921234567","Islamabad","1 January 1950","No","Friend","Ice Skating,,,","Good","","","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("169","tiya ","Mr.","qaiser","khan","qaiser79@gmail.com","+923219175818","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Excellent","Average","Poor","Average","Good","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("170","tiya ","Mrs.","hina","fareed","hennafareed21 @gmail.com","+923219808063","islamabad","21 March 1987","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("171","tiya ","Mrs.","","mudassir","","+923034440606","Islamabad","28 July 1988","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("172","tiya ","Mrs.","Amna","Ansari","","+92333544876","Islamabad","1 January 1950","No","",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("173","tiya ","Ms.","naysa","Hussain","","+923458558055","Islamabad","24 July 2010","","Mall Branding",",,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("174","tiya ","Mrs.","faiza","ijaz","","+923005011107","Islamabad","24 July 1975","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("175","tiya ","Ms.","rose","ahmed","","+921234567","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("176","tiya ","Mr.","zeeshan","raees","zeeshanraees2015@gmail.com","+923335542606","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("177","tiya ","Mrs.","hina","shahab","hina.shahab@gmail.com","+923225330031","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("178","tiya ","","Ali","","awj78@hotmail.com","+923352233504","Islamabad","19 September 1978","Yes","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("179","tiya ","Mr.","asad","sheikho","asad.naeem@hotmail.com","+923219506474","Rawalpindi","20 January 1984","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("180","tiya ","Mrs.","shahida","tahir","tahir.razzaque.tk@icloud.com","+923218506211","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("181","tiya ","Mr.","muhammad","","mohammad_awalkhatak@yahoo.com","+923235111125","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("182","tiya ","Mr.","mohammad","yousaf","usaf5@yahoo.com","+923459033003","Islamabad","1 November 1974","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("183","tiya ","Mrs.","hussain","","sorosh1@gmail.com","+923458558055","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("184","tiya ","Ms.","bahar","karimi","karimiisa@yahoo.com","+923415767856","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("185","tiya ","Ms.","huma","niazi","humaniazi91@gmail.com","+923225069507","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("186","tiya ","","saad","abbassi","","+920314526576","Islamabad","17 March 1980","","",",,,","Excellent","","","Average","Excellent","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("187","tiya ","Mrs.","beena","shabir","beenasiraj25@yahoo.com","+92","","8 June 2013","No","Friend","Ice Skating,,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("188","tiya ","Mrs.","asher","yousfani","Dr. zakiasher @gmail.com","+923333021774","Islamabad","11 June 1982","Yes","Magazine",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("189","tiya ","Mrs.","elina","khan","","+923218507000","Islamabadj","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("190","tiya ","Ms.","shezreen","shah","","+923008508983","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("191","tiya ","Ms.","Zainab","Fayyaz","cheema7070@yahoo.com","+923214171111","islamabad","1 February 2002","","Mall Branding","Ice Skating,,,","Average","Good","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("192","tiya ","Mrs.","kiran","ali","","+920300849295","Islamabad","1 January 1950","No","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("193","tiya ","Mrs.","naveen","ahmed","","+923005000573","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("194","tiya ","Mr.","irfan","ashraf","ccmuhammadirfan@gmail.com","+923005557368","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("195","tiya ","Mrs.","mehwissh","malik","mehwish.a.janjua@gmail.com","+923215566622","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("196","tiya ","Mr.","wahaj","malik","shahid_895@hotmail.com","+923335234567","Islamabad","1 January 1950","","Friend",",,,","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("197","tiya ","Mrs.","Mariam","asad","maryamansari57@gmail.com","+923335391132","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Poor","Poor","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("198","tiya ","Mr.","m","haris","muhammadharis016@yahoo.com","+923345444298","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("199","tiya ","Ms.","zainab","naveed","","+923009727230","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("200","tiya ","Mr.","Rehman","malik","","+923345079216","Islamabad","25 September 1991","","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("201","tiya ","Mr.","shayyan","sajid","sha_988@hotmail.com","+920334949611","Islamabad","11 May 1989","No","",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("202","tiya ","Mr.","hunain","rashid","Hunain 98@hotmail.com","+920300509080","islamabad","19 November 1997","No","Billboard","Ice Skating,,,","Excellent","Poor","Average","Average","Excellent","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("203","sarah ","Mr.","Abdul","Basit","abdulbasit37@hotmail.com","+923009666651","Faisalabad","11 March 1986","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("204","sarah ","Mrs.","talia","omer","omerkhokhar@live.com","+923219565925","Islamabad","24 April 1988","","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("205","sarah ","","mohamed","naweeez","fehiakiri@gmail.com","+923051386145","","21 October 1980","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("206","sarah ","Mr.","ahmed","malik","","+923215014792","Islamabad","29 January 2015","","Friend",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("207","sarah ","","fouzia","abbas","fouziaabbas08@hotmail.com","+92030667993#","rawalpini","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("208","sarah ","Mrs.","farhan","saeed","farhan.s@huawei.com","+923344444278","islamabad","30 December 2010","Yes","Facebook",",,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("209","sarah ","Mrs.","farhan","saeed","farhan.s@huawei.com","+923344444278","islamabad","30 December 2010","Yes","Facebook",",,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("210","sarah ","Mrs.","nadia","ammar","","+923452388456","islamabad","8 November 1989","No","Mall Branding",",,,","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("211","sarah ","Mr.","hashim","muazam","tahirmuazam@gmail.com","+923344441608","Islamabad","16 August 2001","No","Friend",",,,","Good","Good","Good","Average","Excellent","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("212","sarah ","","Antique","zulfiqar","","+920333517675","islamabad","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("213","sarah ","Ms.","umama","gull","umamagull@yahoo.com","+923035849443","Islamabad","30 November 1966","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("214","sarah ","Mr.","bilal","karim","","+923008448876","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("215","sarah ","Mrs.","tehreem","akbar","","+920300512326","Islamabad","26 February 1979","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("216","sarah ","Mrs.","fatima","sattar","fifial_16@yahoo.com","+92","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,,Ice Cafe,,","Good","Good","Good","Poor","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("217","sarah ","Mrs.","beenish","wazir ,","sweetbeenii@hotmail.com","+921984","gilgit","16 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("218","sarah ","Mr.","ibrahim","faraz","","+920324505555","Islamabad","4 January 2014","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("219","sarah ","Mrs.","mahwish","shahid","mahwishshahid@hotmail.com","+92","","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("220","sarah ","Mr.","danial","sh","","+923009547110","Islamabad","31 January 1990","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Poor","Average","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("221","sarah ","Ms.","natasha","","aleezahafeez123@gmail.com","+923355121223","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("222","tiya ","Mr.","ali","","","+923109331001","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("223","tiya ","Mr.","ali","raza","","+923015141255","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Excellent","","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("224","tiya ","Mrs.","irum","sajeel","","+923005208434","Islamabad","1 January 1950","","Mall Branding","Ice Skating,,,","Poor","","Poor","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("225","tiya ","Mr.","agha","usman","usmanjan007@hotmail.com","+923349663151","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("226","tiya ","Mrs.","ali","","waned ha. saif@gmail.com","+923002822228","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("227","tiya ","Mr.","siddiqui","atif","mecis@eim.ae","+923335389519","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("228","tiya ","Mrs.","khan","","","+923008362555","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("229","tiya ","Mr.","wajih","zafar","zafar.wajih.m3 @gmail.com","+923338480555","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("230","tiya ","Ms.","sana","zafar","chani21@hotmail.co.uk","+9212345678","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("231","tiya ","Mr.","farhat","nadeem","sfarhatnadeem@gmail.com","+923082505888","Rawalpindi","1 January 1950","Yes","","Ice Skating,Ice Cafe,,","Good","Good","Good","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("232","tiya ","Mr.","sohail","farid","sohailbinfarid@gmail.com","+923225270013","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("233","tiya ","Mrs.","hadiqa","mehdi","hadiqamehdi@gmail.com","+923335937794","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("234","tiya ","Mrs.","tufail","","","+923332771545","Karachi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("235","tiya ","Mr.","khurram","munir","munirkhurram@live.com","+923028543841","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("236","tiya ","Mr.","m","kamran","kamranch77@gmail.com","+923215333342","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("237","tiya ","Ms.","kiran","","","+921234567","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("238","tiya ","Mrs.","xiao","me","","+923105295236","Islamabad","1 January 1950","Yes","",",,,","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("239","tiya ","Mr.","tahir","aslam","ornatecars@yahoo.com","+923379219889","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("240","tiya ","Mr.","sheikh","atif","speedjoint@hotmail.com","+92321555507","Islamabad","1 January 1950","Yes","Friend","Ice Skating,Ice Cafe,,Gaming Zone","Good","Excellent","Excellent","Good","Average","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("241","tiya ","Mr.","tahir","aslam","ornatecars@gmail.com","+923379219889","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("265","tiya ","Mr.","m","pervaiz","pzassociates2720@gmail.com","+923005187732","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("266","tiya ","Ms.","ramsha","khan","ramshakhan1470@hotmail.com","+923328033200","Karachi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("267","tiya ","Mr.","sahir","aslam","sahiaslam@hotmail.com","+923138569423","Islamabad","1 January 1950","No","Mall Branding",",,,","Good","Good","Good","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("268","tiya ","Mr.","rayyan","ahmed","rayyanahmed41@gmail.com","+923335155590","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("269","tiya ","Mr.","haris","","harisatiq4@gmail.com","+923338657898","Sialkot","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("270","tiya ","Mr.","humayun","khan","k_zarak@hotmail.com","+923459171948","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("271","tiya ","Mrs.","rabia","usman","rabiausman@gmail.com","+923049092777","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Average","Poor","Poor","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("272","tiya ","Mrs.","ayesha","jibran","aishajib@hotmail.com","+923644902662","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("273","tiya ","","ahmed","iqbal","ahissss@hotmail","+921234567","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("274","tiya ","Mrs.","shahid","","hirashahid1988@hotmail.com","+923006011000","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("275","tiya ","Mr.","Sayaf","Arbab","","+921234567","Islamabad","26 June 1984","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("276","sarah ","Mr.","Musa","siddiqui","03117303772","+920333549439","Islamabad","1 January 1950","No","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("277","sarah ","Ms.","sehrish","shafiq","sehrishshafique@hotmail.co","+923348555700","Islamabad","1 January 1950","Yes","Facebook",",,,","Good","Good","Average","Average","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("278","sarah ","Mr.","waseem","yaseen","","+920311956889","Islamabad","21 October 2003","No","Friend","Ice Skating,,,Gaming Zone","Good","Excellent","Good","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("279","sarah ","Mr.","Haider","ali","","+920334531219","islamabad","8 January 2005","No","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("280","sarah ","Mr.","abdul ahad","ahad","","+920224500444","islamabad","1 January 1950","No","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("281","sarah ","Mr.","Haider","ali","haider.ali2004e@outlook.com","+923336653099","Islamabad","4 September 2001","Yes","Instagram","Ice Skating,,,","Average","Excellent","Excellent","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("282","sarah ","Mr.","kayani","wasay","03315534694","+920333536666","lslamabad","27 June 2003","","Facebook","Ice Skating,,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("283","sarah ","Mr.","kayani","wasay","03315534694","+920333536666","lslamabad","27 June 2003","","Facebook","Ice Skating,,,,,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("284","sarah ","Mr.","kayani","wasay","03315534694","+920333536666","lslamabad","27 June 2003","","Facebook","Ice Skating,,,,,,,,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("285","sarah ","Mr.","Hasan","Shah","","+920336529197","Islamabad","26 April 2003","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("286","sarah ","Mr.","chris","zain","","+920321956751","Islamabad","12 February 2004","Yes","",",,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("287","sarah ","","syed","mahad","","+920321506313","Islamabad","21 March 2003","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("288","sarah ","Mr.","Salman","Khan","brightconsultant","+920336507550","Islamabad","16 June 2004","No","Facebook","Ice Skating,,,","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("289","sarah ","Mr.","Salman","Khan","brightconsultant","+920336507550","Islamabad","16 June 2004","No","Facebook","Ice Skating,,,,,,","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("290","sarah ","Mr.","Salman","Khan","brightconsultant","+920336507550","Islamabad","16 June 2004","No","Facebook","Ice Skating,,,,,,,,,,,,","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("291","sarah ","","Azaam","mirza","bazaam@ymail.com","+92","Islamabad","1 January 1950","","",",,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("292","sarah ","","Abdullah","Nadeem","nadeemabdullah27@gmil.com","+920333537876","Islamabad","7 January 2004","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Good","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("293","sarah ","Mr.","waqas","khan","","+923008300790","Islamabad","28 February 2003","No","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Average","Good","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("294","sarah ","Mr.","waqas","khan","","+923008300790","Islamabad","28 February 2003","No","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Average","Good","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("295","sarah ","Mr.","darius","bhatti","","+923005300558","Islamabad","1 January 2003","Yes","Friend","Ice Skating,,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("296","sarah ","","Abdullah","Abdullah chheenah","03215818004","+920321581800","Islamabad,barako, cetramil","1 January 1950","Yes","","Ice Skating,Ice Cafe,,Gaming Zone","Good","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("297","sarah ","Mr.","haziq","binemad","haziqbinemad@gmail.com","+920321537298","Islamabad","7 February 2006","Yes","Mall Branding",",,,Gaming Zone","Excellent","Poor","Excellent","Poor","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("298","sarah ","","Rida","Tashfin","ggghhjirdfreghh","+924470033","Islamabad","1 January 1950","","",",,,Gaming Zone","Good","Average","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("299","sarah ","","Nathalie","Dhont","ndhont@hotmail.com","+92","","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("300","sarah ","Mrs.","sumaira","fahd","","+923008500336","Rawalpindi","8 February 1980","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Good","Poor","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("301","sarah ","Mr.","danish","iftikhar","danish.iftikhar@gmail.com","+923335551023","Rawalpindi","1 January 1950","","","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("302","sarah ","Mrs.","col","zahid","zahidmurtaza14@gmail.com","+923005113848","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("303","sarah ","Mrs.","huma","tahir","mehmood_huma@yahoo.com","+920345855170","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("304","sarah ","Mr.","fahad","saeed","fahadiii@yahoo.com","+92","","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("305","sarah ","Mr.","mariam","umar","mariamnaqsh@hotmail.com","+920333333575","islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("306","tiya ","Mrs.","sidra","nadir","sid_Nadir@hotmail.com","+923369933088","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("307","tiya ","Mrs.","ambreen","riaz","ambreenriaz32@gmail.com","+923012500853","Karachi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("308","tiya ","Mrs.","ghazal","khan","","+923428279090","Karachi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("309","tiya ","Ms.","gulmeena","","gulmina.adil@hotmail.com","+923005095786","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("310","tiya ","Mr.","usman","majid","info@carshopislamabad.com","+923005633228","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("311","tiya ","Mrs.","mohsin","khan","hermoine.menance@gmail.com","+923234999860","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("312","tiya ","Mr.","shehryar","aftab","","+920336055931","isb","16 December 1992","Yes","Instagram",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("313","tiya ","Ms.","huma","sarwar","humasarwar36@hotmail.com","+923455560136","Rawalpindi","1 January 1950","","Facebook","Ice Skating,,,Gaming Zone","Good","Excellent","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("314","tiya ","Mrs.","sher","afghan","Dr.aemon@hotmail.com","+923018651642","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("315","tiya ","Mr.","alex","Dronof","tatzz@mail.ru","+92300850672","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("316","tiya ","Mrs.","dar","","hsconsultation@gmail.com","+923324802909","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("317","tiya ","Mrs.","faiza","ijaz","","+923005011107","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("318","tiya ","Mr.","omar","saeed","umrsd@yahoo.com","+923215012346","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("319","tiya ","Mr.","zeeshan","munir","zeeshan225@hotmail.com","+923005387567","Karachi","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Poor","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("320","tiya ","Mrs.","sheraz","","","+923455289991","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("321","tiya ","Mrs.","faryal","azhar","fzoay01@gmail.com","+923314453934","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("322","tiya ","Mrs.","sana","javeria","sana-javaria@live.com","+923345522650","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("323","tiya ","Mr.","sohaib","sheikh","sohaib.shaikh98@gmail.com","+923329840486","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("324","tiya ","Mrs.","dr","darakhshan","","+923009757344","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("325","tiya ","Mr.","mohd","wasiq","","+923215715474","islmbd","1 January 1950","","Magazine",",,,Gaming Zone","Average","Average","Poor","Poor","Average","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("326","sarah ","Ms.","sunny","misfit","sunnymisfit@gmail.com","+923015454074","islamabad","22 October 1992","Yes","Billboard",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("327","sarah ","Ms.","zara","abbas","zaraabbas016@gmail.com","+92","Islamabad","28 April 1991","No","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Average","Average","Good","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("328","sarah ","Ms.","zara","abbas","zaraabbas016@gmail.com","+92","Islamabad","28 April 1991","No","Mall Branding",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Average","Average","Good","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("329","sarah ","Mr.","Aamir","Najam","","+923408067504","Islamabad","1 January 1950","No","",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("330","sarah ","Mrs.","zouna","haan","zouna3627@gmail.com","+92","Islamabad","1 January 1950","No","",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("331","sarah ","Mrs.","saira","rehmat","","+920300582365","Islamabad","1 January 1975","No","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("332","sarah ","Mrs.","maryam","ali","","+923005000836","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("333","sarah ","Mr.","farooq","anees","","+923204143098","Islamabad","12 October 1981","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("334","sarah ","Mr.","adnan","fahim","zadnan27@yahoo.com","+920336518361","Islamabad","6 October 1993","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("335","sarah ","Mr.","tanseer","asghar","","+923215110089","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("336","sarah ","Mr.","osman","quddusi","usman@eespak.com","+923317333311","Islamabad","19 February 1979","No","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("337","sarah ","Mrs.","nasir","mahmood","nmkhan110@gmail.com","+920300856173","Islamabad","14 January 1973","No","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("338","sarah ","Mrs.","saira","imran","","+923333669674","Islamabad","6 February 1980","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("339","sarah ","Mrs.","hina","mahwish","","+923055555404","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("340","sarah ","Ms.","Zahra","hashim","","+923345167161","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("341","sarah ","Mr.","hassan","fakhar","","+923458505690","Rawalpindi","19 October 1982","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("342","sarah ","Mr.","hassan","fakhar","","+923458505690","Rawalpindi","19 October 1982","No","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Good","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("343","sarah ","Ms.","momina","khan","","+923219043467","peshawar","28 March 2016","Yes","Instagram","Ice Skating,,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("344","sarah ","Mrs.","","saqib","","+923315128973","Islamabad","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("345","sarah ","Ms.","natasha","usama","","+923315259799","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("346","sarah ","Mr.","usman","saleem","","+923335658523","rwp","1 January 1950","No","Friend",",,,Gaming Zone","Average","Good","Good","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("347","sarah ","Mr.","nofil","hakeem","nofilhakeem@gmail.com","+923432585734","Islamabad","11 January 1987","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("348","sarah ","","faiza","riasat","faizariasat2@gmail.com","+92","","4 September 2001","No","Facebook",",,,Gaming Zone","Good","Average","Poor","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("349","tiya ","Mrs.","fahad","","humafahad83@gmail.com","+923236633333","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("350","tiya ","Mr.","hassan","raja","hasanrajatahir@hotmail.com","+923452777111","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("351","tiya ","Mr.","ali","jafri","ali agha. jafri@gmail.com","+923028560581","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("352","tiya ","Mr.","tahir","younas","tahirssuet@hotmail.com","+923332025433","Karachi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("353","tiya ","Mrs.","maham","mujtaba","maham.mujtaba02@gmail.com","+923000466665","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("354","tiya ","Mr.","faisal","gul","fsgul3@yahoo.com","+923315550732","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("355","tiya ","Mr.","dario","cereser","dario.c_69@HOTMAIL.IT","+920300837136","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("356","tiya ","Mrs.","rida","ryan","ridaryan@hotmail.com","+920321529188","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("357","tiya ","Mr.","kashif","baig","baig.kashif@gmail.com","+92330360775","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("358","tiya ","Ms.","kanza","batool","kanzanaqvi93@gmail.com","+92301821920","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("359","tiya ","Mr.","behram","khan","behramkhan75@yahoo.com","+923335087820","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","","Good","Good","","","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("360","tiya ","Mr.","mohsin","abbas","","+923005218475","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("361","tiya ","Mrs.","kamran","","","+923455120195","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("362","tiya ","Mrs.","nouman","","simrakiyani@yahoo.com","+923005001565","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("363","tiya ","Mr.","sanaullah","","sanaullahkhan70@hotmail.com","+923359432650","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("364","tiya ","Mrs.","mariam","umer","","+923325277661","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Good","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("365","tiya ","Mrs.","hassan","saleem","faryia@hotmail.co.uk","+923335414327","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("366","tiya ","Mr.","bilal","khan","bilalusmankhantarakai@hotmail.com","+923312320192","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("367","tiya ","Mr.","salman","rafiq","srafique@gmail.com","+923455190883","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("368","tiya ","Mrs.","sajida","habib","","+923005552502","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("369","tiya ","Mr.","rehan","butt","alerts4rb@gmail.com","+923008286339","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("370","tiya ","Mrs.","faraz","sheikh","sheikhworld_@GMAIL.COM","+923245238211","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("371","tiya ","Mrs.","amaad","butt","amadkhalidbutt@gmail.com","+923055555212","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("372","tiya ","Mrs.","sana","adnan","sana.adnan123@yahoo.com","+920333573290","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Excellent","Excellent","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("373","tiya ","Mrs.","sana","hassan","","+923008567929","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("374","tiya ","Mr.","tariq","ameen","","+923356652856","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("375","tiya ","Mrs.","mubin","","mahwishmubin@gmail.com","+923215013344","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Average","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("376","tiya ","Mrs.","usman","","shamzausman@gmail.com","+923018501476","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("377","tiya ","Mr.","ch","aqeel","aqeel987@hotmail.com","+92321854957","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("378","tiya ","Mrs.","saqib","","saqib79@hotmail.com","+923335334762","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("379","tiya ","Mr.","abdus","samad","","+923325152535","Islamabad","1 January 1950","Yes","",",,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("380","tiya ","Mrs.","zainab","ibrahim","zainab_murad53@hotmail.com","+923009725610","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("381","tiya ","Mrs.","nadia","jawad","nadiajawadrehan@gmail.com","+923025490912","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("382","tiya ","Ms.","dr","nadia","drnadia879@gmail.com","+921234567","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("383","tiya ","Mr.","m","naveed","mnaveed6643@gmail.com","+923006643656","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("384","tiya ","Mrs.","faisal","","hina_fsk@yahoo.com","+923215371610","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("385","tiya ","Mrs.","sheraz","zubair","sherazzubair786@gmail.com","+920333540555","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("386","tiya ","Mr.","sheikh omer","nasim","","+923218542322","Rawalpindi","14 June 1982","No","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("387","tiya ","Mr.","umer","riaz","umer.riaz@hotmail.com","+923465402672","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("388","tiya ","Mrs.","haroon","","","+923225016975","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("389","tiya ","Mrs.","hammad","","aamna_aamad@yahoo.com","+923003855885","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Average","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("390","tiya ","Mr.","faisal","tareen","faisal-tareen@hotmail.com","+923318002277","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("391","tiya ","Mr.","zahid","khan","vizeye@gmail.com","+923005003604","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("392","tiya ","Mrs.","farzana","faisal","faisala752@hotmail. com","+923329853651","Mardan","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("393","tiya ","Ms.","muniba","ali","","+923325588585","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Excellent","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("394","tiya ","Mr.","mustafa","zafarullah","mustafaarsalanahmed@gmail.com","+923000633791","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("395","tiya ","Mr.","afaq","idrees","afaq.idress@YAHOO.COM","+923135952840","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Good","Average","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("396","tiya ","Mrs.","rafia","hammad","raphea@yahoo.com","+923335259341","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("397","tiya ","Mrs.","masroor","","humna.masroor@gmail.com","+923216016226","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("398","tiya ","Mrs.","aamina","umer","","+923216016116","Sargodha","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("399","tiya ","Mr.","mahad","farooq","","+923335657522","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("400","tiya ","Mrs.","aisha","farheen","","+923005393264","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("401","tiya ","Mr.","mohsin","abbas","mohsinbhurban@yahoo.com","+923005596879","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("402","tiya ","Ms.","mariam","naveed","mariam.fahad64@gmail.com","+923444444688","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("403","tiya ","Mr.","tasbeeh","zahra","mniazi65@gmail.com","+920300233765","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("404","tiya ","Mr.","kamran","aamir","kak_niazi@yahoo.com","+923336842863","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("405","tiya ","Mr.","salman","khan","gnaws. org.pk@gmail.com","+923452222945","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("406","tiya ","Mrs.","hina","salman","salmanestate@gmail.cim","+923315848333","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("407","tiya ","Mr.","ghalib","ali","ghalibali605@gmail.com","+923009446788","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","","Excellent","","Average","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("408","tiya ","Mrs.","azam","","swabimarketing@gmail.com","+923005700460","Mardan","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("409","tiya ","Mrs.","zia","ullah","mzia8787@gmail.com","+923022577948","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("410","tiya ","Mrs.","sabeen","intekhab","","+923245184406","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("411","tiya ","Mrs.","naila","nawaz","","+923350023002","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","","Average","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("412","tiya ","Mrs.","ayesha","tehseen","ayeshashah_17@yahoo.com","+923109679645","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("413","tiya ","Mr.","omar","mutaza","omarmurtaza@hotmail.com","+923009794399","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("414","tiya ","Ms.","vaneeya","naqvi","allia_29@hotmail.com","+92","Islamabad","12 October 2003","","Facebook","Ice Skating,,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("415","tiya ","Ms.","vaneeya","naqvi","allia_29@hotmail.com","+92","Islamabad","12 October 2003","","Facebook","Ice Skating,,,,,,","Excellent","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("416","tiya ","Ms.","vaneeya","naqvi","allia_29@hotmail.com","+92","Islamabad","12 October 2003","","Facebook","Ice Skating,,,,,,,,,,,,","Excellent","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("417","tiya ","Mr.","maqsood","ahmed","","+923005009961","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("418","tiya ","","sajid","mehmood","one2four7@gmail.ckm","+923212120009","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Poor","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("419","tiya ","Mr.","rizwan","","","+923132222355","Multan","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("420","tiya ","Mr.","kamran","yousaf","kamran_abcs@yahoo.com","+923215371041","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("421","tiya ","Mrs.","irfan","","drnadiaffan@gmail.com","+923214291095","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("422","tiya ","Mr.","saeed","abdi","saciidwiiff@gmail.com","+923045502138","","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("423","tiya ","Mrs.","fouzia","","","+923005331283","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Excellent","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("424","tiya ","Mrs.","zainab","hasnain","z.qaseem@gmail.com","+923213909039","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("425","tiya ","Mrs.","mona","rauf","mona_alavi@hotmail.com","+923212631213","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("426","tiya ","Mrs.","hanna","akhter","hanna.akhtar@gmail.com","+923439909500","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("427","sarah ","Mr.","ali","kurniawan","alikoerniawan@gmail.com","+92","indonesia","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("428","sarah ","Mr.","ubaid","","","+923005904711","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("429","sarah ","Mr.","ammad","mumtaz","ammad.am@gmail.com","+923335389217","ibd","1 January 1950","No","Friend","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("430","sarah ","Mr.","gohar","khattak","","+923445000026","Islamabad","1 January 1950","No","Mall Branding",",Ice Cafe,,","Excellent","Good","Average","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("431","sarah ","Mrs.","","mumtaz","","+923335389217","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("432","sarah ","Mr.","raja","aftab","","+923008549199","Muzaffarabad","1 January 1950","No","Mall Branding",",Ice Cafe,,","Good","Excellent","Excellent","Poor","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("433","sarah ","","saad","khawaja","","+923165151581","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("434","sarah ","Mrs.","amna","khan","k_amna@live.com","+92","islmbad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("435","sarah ","Mr.","faisal","alizai","","+923212527836","Lahore","8 February 1950","No","Friend","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("436","sarah ","Ms.","alizeh","nurzai","anurzai10@gmail.com","+92","Islamabad","24 August 2002","Yes","Instagram",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("437","sarah ","Mrs.","","naveed","","+923245405220","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Average","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("438","sarah ","Mrs.","mahwish","saqib","","+923215870078","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("439","sarah ","Mrs.","mahwish","saqib","","+923215870078","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("440","sarah ","Mr.","sultan","","","+923009541917","Islamabad","1 January 1950","No","",",Ice Cafe,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("441","sarah ","Mr.","sultan","","","+923009541917","Islamabad","1 January 1950","No","",",Ice Cafe,,,Ice Cafe,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("442","sarah ","Mr.","sultan","","","+923009541917","Islamabad","1 January 1950","No","",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("443","sarah ","Mr.","sultan","","","+923009541917","Islamabad","1 January 1950","No","",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("444","sarah ","Mr.","babar","saeed","","+923447972077","Lahore","1 January 1950","No","",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("445","sarah ","","","","rashidalim2001@gmail.com","+92","","1 January 1950","Yes","","Ice Skating,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Good","Excellent","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("446","sarah ","Mr.","kamal","","","+920333925761","","1 January 1950","Yes","Magazine","Ice Skating,,,","Excellent","Good","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("447","sarah ","Mrs.","sahar","bilal","saharbilal1@gmail.com","+920333920201","Peshawar","1 January 1950","No","Friend",",,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("448","sarah ","Mr.","attiq","rehman","","+923335173022","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Average","Average","Average","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("449","sarah ","Mr.","saad","salman","","+923333787871","peshawar","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("450","sarah ","Mr.","yasir","paracha","","+923335239563","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("451","sarah ","Mrs.","dr","sobia","lcianunique@yahoo.com","+923214760331","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Average","Average","Average","Poor","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("452","sarah ","Mrs.","kashmala","babar","kashmalababar1@gmail.com","+923339280948","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,,,,,,,,,,,,,,,,,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("453","tiya ","Mr.","jawad","khan","jawadkhanisb@yahoo.com","+923129792179","Swabi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","","Good","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("454","tiya ","Mr.","m","rayyan","mohammadrayyan2009@gmail.com","+923004225566","Lahore","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("455","tiya ","Mrs.","raana","samreen","samreenrana64@yahoo.com","+923229939517","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Poor","Poor","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("456","tiya ","Mr.","bilal","ahmed","bilal.ahmad.khan@icloud.com","+923120555822","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("457","tiya ","Mrs.","humaira","khan","Somera.javed@bok.com.pk","+923215094222","Abbottabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("458","tiya ","Mr.","asad","niazi","asadniazi@gmail.com","+923455001443","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("459","tiya ","Mr.","yasir","paracha","y_parachayahoo.com","+923335239563","Islamabad","1 January 1950","Yes","","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("460","tiya ","Mr.","adeel","bhutta","bhuttas@gmail.com","+923335574394","Islamabad","19 September 1979","No","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("461","tiya ","Mr.","aman","alvi","aalivi2869@gmail.com","+923360060403","Faisalabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("462","tiya ","Mr.","faisal","niaz","faisalniaz20@yahoo.com","+923329577335","Peshawar","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("463","tiya ","Mr.","salman","zahid","salmanzahid1@hotmail.com","+923000447449","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("464","tiya ","Mrs.","sundas","hakim","spad217@yahoo.com","+923000415855","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("465","tiya ","Mrs.","aliya","rana","","+923235333712","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("466","tiya ","Mrs.","hussain","ullah","","+92301854449","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("467","tiya ","Mrs.","roshan","ara","","+923339241568","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("468","tiya ","Ms.","salena","akbar","salena.akbar06@gmail.com","+923065005407","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("469","tiya ","Mrs.","palwasha","imtiaz","gorgeouspasho@gmail.com","+923005146519","Islamabad","1 January 1950","Yes","","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("470","tiya ","Mrs.","rabia","yang","707488198@qq.com","+923088888597","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("471","tiya ","Mr.","hussain","sarosh","sorosh1@gmail.com","+92458558055","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("472","tiya ","Mrs.","mariam","khurram","","+923125518677","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("473","tiya ","Mr.","haleema","","","+923000999890","Karachi","1 January 1950","Yes","",",,,Gaming Zone","Average","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("474","tiya ","Mr.","kashif","mateen","","+92512294184","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Average","Good","Good","Average","Average","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("475","tiya ","Mr.","ayaan","nadeem","ayanali91@yahoo.com","+923335777504","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("476","tiya ","Mrs.","jameel","","jameel254@hotmail.com","+923008110254","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("477","tiya ","Mr.","mustafa","gillani","mustafagillani@gmail.com","+923455001010","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("478","tiya ","Mr.","mudassir","albaqir","madaqer36@gmail.com","+923437527520","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("479","tiya ","Mr.","taha","bin kashif","kashif.memood@hotmail.com","+923005118770","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("480","tiya ","Mrs.","samia","khawar","samiasheraz@hotmail.com","+923445511499","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("481","tiya ","Mr.","umair","aziz","umairazizmalik@hotmail.com","+923215751733","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("482","tiya ","Mrs.","khan","","","+923008452920","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("483","tiya ","Mr.","jamshed","aftab","jamshaid. aftab@gmail.com","+923335178745","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("484","tiya ","Mr.","amad","uddin","Uddin.e@gmail.com","+92331910992","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Poor","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("485","tiya ","Mr.","arif","","sargana@hotmail.com","+923148100005","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("486","tiya ","Mr.","muqadas","","ceo@tcapakistan.co","+923203222222","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Excellent","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("487","tiya ","Mr.","rafi","syed","smrafiullah@yahoo.com","+923025551052","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("488","tiya ","Mr.","mirza","zaheer","mzaheer7@hotmail.com","+92344443434","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("489","tiya ","Mrs.","kiran","","","+923115555975","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("490","tiya ","Mrs.","saima","batool","","+923170004484","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("491","tiya ","Mr.","waqas","haneef","waqas81@yahoo.com","+923216822092","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Excellent","Average","Average","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("492","tiya ","Mr.","akram","abbas","","+923334564642","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("493","tiya ","Mrs.","nouman","","nali46@gmail.com","+923328584572","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("494","tiya ","Mrs.","ambreen","kashif","iqbal.kashif@hotmail.com","+923205666444","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("495","tiya ","Mrs.","ambreen","kashif","iqbal.kashif@hotmail.com","+923205666444","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,,,,","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("496","tiya ","Ms.","yomna","renie","","+92123456789","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Excellent","Good","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("497","tiya ","Mrs.","komal","sajjad","komalsajjad11@gmail.com","+923008588163","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("498","tiya ","Mrs.","shahjahan","","","+923315157779","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("499","tiya ","Mr.","arbab","atif","arbabatifkhan@yahoo.com","+923319241629","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("500","tiya ","Mrs.","asad","","","+923005124953","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("501","tiya ","Mr.","abdul","majeed","majeed.isb@gmail.com","+923005012188","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("502","tiya ","Mrs.","javaid","malik","rozina_nz@yahoo.com","+923135086810","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("503","tiya ","Mr.","daniyal","","mmsaqib437@gmail.com","+923215552743","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Poor","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("504","tiya ","Mr.","shahid","munir","smcfo. pak@gmail.com","+920301550090","Islamabad","4 May 1987","Yes","",",,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("505","tiya ","Mr.","tahir","mehmood","khan_beta786@yahoo.com","+923345013340","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("506","tiya ","Ms.","amna","mansoor","aamna313@gmail.com","+92321512934","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("507","tiya ","Mr.","shahrukh","abbasey","s.abbasey@hotmail.com","+923332365954","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("508","tiya ","Mrs.","saima","adeeb","","+923335521885","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("509","tiya ","Mrs.","saqib","","saqib79@hotmail.com","+923335334762","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("510","tiya ","Mrs.","km","auranzeb","nameeraurangzeb@gmail.com","+923445000114","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Poor","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("511","tiya ","Mr.","aamir","","amiruddin@gmail.com","+923018230935","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("512","tiya ","Mr.","umair","zahid","umairzahid@hotmail.com","+923235500725","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("513","tiya ","Mrs.","niaz","","tayyaba_abid26@yahoo.com","+923334695290","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Average","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("514","tiya ","Mrs.","zaree","saad","zari_younas83@hotmail.com","+923335503296","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("515","tiya ","Mr.","kabiru","tanimu","kabiraish@gmail.com","+923358454955","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("516","tiya ","Mr.","kabiru","tanimu","kabiraish@gmail.com","+923358454955","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Excellent","Good","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("517","tiya ","Mrs.","salma","khattak","salmakhattak@yahoo.com","+923325911335","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("518","tiya ","","abdullah","khalifa","khalif2007@gmail.com","+923355814572","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Average","","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("519","tiya ","Mrs.","imran","","sfm9008@yahoo.com","+923009511905","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("520","tiya ","Mr.","jawad","hafeez","jawwadh19@gmail.com","+92345517200","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("521","tiya ","Mr.","tariq","azeem","wgcdr.tariq@gmaicoml","+923215277749","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("522","tiya ","Mrs.","anam","saeed","annuumsaeed@yahoo.com","+923249446864","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("523","tiya ","Mrs.","ibtihal","mirza","ibtihal.mirza@gmail.com","+923335633001","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Good","Poor","Good","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("524","tiya ","Mr.","aamir","janjua","Muslimjanjua@gmail.com","+923335170743","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("525","tiya ","Mr.","aamir","janjua","Muslimjanjua@gmail.com","+923335170743","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Average","Average","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("526","tiya ","Mr.","asim","rehman","asim@hautbuys.com","+923000453335","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("527","tiya ","Mr.","shakeel","baig","mirzashakeel@ymail.com","+923336144658","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("528","tiya ","Ms.","mehwish","rafiq","mahwish_12@outlook.com","+923215157089","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("529","tiya ","Ms.","zainab","asif","zainab.asif@hotmail.co.uk","+923218543125","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("530","tiya ","Mrs.","Nida","khan","nidarkhan@live.com","+923315666157","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("531","tiya ","Mrs.","sajjad","","farwa_ab@hotmail.com","+923245233509","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("532","tiya ","Mr.","umer","niazi","umar.niazi3@gmail.com","+923134619595","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("533","tiya ","Mrs.","irfan","","drnadiaffan@gmail.com","+923214291095","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("534","tiya ","Mr.","tariq","mehmood","tariq409@hotmail.com","+923235316066","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("535","tiya ","Mrs.","shujaat","","faraz.ali_khan@yahoo.com","+923349060149","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("536","tiya ","Mrs.","sadaf","nasir","","+923002152360","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("537","tiya ","","ali","ameen","","+923215252865","Peshawar","1 January 1950","No","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("538","tiya ","Mrs.","najeeb","","sanaf@hotmail.com","+923147856456","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("539","sarah ","","","","mahwishbabar@gmail.com","+92","","1 January 1950","","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone,Ice Cafe,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("540","sarah ","Mr.","hussain","qureshi","","+923235308878","Islamabad","1 January 1950","No","","Ice Skating,Ice Cafe,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("541","sarah ","Mrs.","sana","farooq","","+923004748659","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("542","sarah ","Mr.","atif","khan","","+923209592952","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("543","sarah ","Mr.","mian","moeenuddin","","+923335700085","Islamabad","2 September 2012","Yes","Billboard",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("544","sarah ","Mrs.","fatima","faraz","","+923224340009","Lahore","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("545","sarah ","Mr.","bakhtawar","durrani","","+92335880505","islamabad","27 November 1990","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("546","sarah ","Mr.","bakhtawar","durrani","","+92335880505","islamabad","27 November 1990","Yes","Friend",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("547","sarah ","Mrs.","anas","sheikh","","+923143112777","Sialkot","24 August 1995","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("548","sarah ","","","","farazlaleka@hotmail.com","+920323666613","lahore","14 October 1980","","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("549","sarah ","Mrs.","ansa","raza","ainoops@yahoo.com","+92","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("550","sarah ","Mrs.","khadija","farhad","","+923218543262","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Average","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("551","sarah ","Mrs.","","mushtaq","Thanks","+923009297950","Karachi","1 January 1950","No","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("552","sarah ","Mrs.","kanza","shahrukh","","+923458550267","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Poor","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("553","sarah ","Mrs.","nadia","ali","","+923245151509","Islamabad","1 January 1950","Yes","Instagram",",,,Gaming Zone","Excellent","Excellent","Good","Good","","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("554","sarah ","Mrs.","saima","","","+923158337373","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("555","sarah ","Mrs.","shumaila","afreen","","+923334328978","Sialkot","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("556","tiya ","Mr.","hasnain","kashif","kashifnaeemmalik@gmail.com","+923335166199","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("557","tiya ","Mrs.","sheher","bano","drsheherbano@gmail.com","+920333611466","isb","1 January 1950","No","Billboard","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("558","tiya ","Mrs.","sana","umer","sana.OSMan@gmail.com","+923345910807","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("559","tiya ","Mr.","shahab","uddin","shahinashahabuddin@gmail.com","+923008556574","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("560","tiya ","Mr.","tariq","shafiq","muhammadtariqshafiq@yahoo.ca","+923055659595","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("561","tiya ","Mrs.","ghanwa","shah","","+923335741412","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("562","tiya ","Mr.","ali","ibraheem","aliibraheem45@gmail.com","+923216543217","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("563","tiya ","Mrs.","saima","safdar","saimasafdar999@gmail.com","+923005303903","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("564","tiya ","Mrs.","kazmia","hussaini","kazmiah@gmail.com","+92321855595","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("565","tiya ","Mrs.","alina","rizvi","alinaraza@gmail.com","+923458541219","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("566","tiya ","","rena","malik","rehna_m@hotmail.com","+923365004665","Islamabad","1 January 1950","","",",,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("567","tiya ","Mrs.","nida","salman","nida.ahmad@gmail.com","+923005282526","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("568","tiya ","Mrs.","rahat","","wajeeha.rahat@gmail.com","+923345020722","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("569","tiya ","Mrs.","yasir","","zhaupheen@hotmail.com","+923215246236","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("570","tiya ","Mrs.","mahwish","rizwan","","+92321578147","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("571","tiya ","Mrs.","hafsa","zahoor","hafsa.zahur42@gmail.com","+923344026446","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("572","tiya ","Ms.","fabia","fayyaz","fabiafayyaz38@gmail.com","+923244733639","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("573","tiya ","Mr.","mahad","atif","mrsatifbashir@gmail.com","+923345464859","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","","Average","","Good","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("574","tiya ","Mrs.","jawad","hussain","Ambez.j@hotmail.co","+923132655555","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("575","tiya ","Mr.","fahad","hassan","fahd89@live.com","+923245093529","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("576","tiya ","Mrs.","nadia","zaheer","nadiazk@me.com","+923018500424","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Average","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("577","tiya ","Mrs.","saima","armghan","samzar78@gmail.com","+923004839999","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("578","tiya ","Mr.","shah","zaman","","+923347872922","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("579","tiya ","Mrs.","hafeez","","geeti1983@gmail.com","+923008444416","Faisalabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("580","tiya ","Mr.","toufeeq","ghouri","ghouri1000@yahoo.com","+923002253433","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Excellent","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("581","tiya ","Mrs.","robin","","","+923245199962","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("582","tiya ","Ms.","saleena","beg","saleena.beg@gmail.com","+923455085608","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("583","tiya ","Mrs.","farhan","","rida_farhan@hotmail.com","+923002751782","Karachi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Average","Poor","Average","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("584","tiya ","Mrs.","shazia","amjad","shazia.ch@gmail.com","+923335234933","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("585","tiya ","Mr.","awais","","awais643@yahoo.com","+923218114056","Quetta","1 January 1950","Yes","",",,,Gaming Zone","Average","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("586","tiya ","Mrs.","rohma","kashif","rohma_k@gmail.com","+923356458258","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Poor","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("587","tiya ","Mr.","Rehan","ashraf","","+923214565868","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("588","tiya ","Mrs.","ali","","aliadeel25@hotmail.co","+923005858585","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("589","tiya ","Mrs.","javeria","ahsan","ahsans_me@google.com","+923009559078","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("590","tiya ","Ms.","ghanwa","zahid","ghanwausmani@gmail.com","+923324429271","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("591","tiya ","Mrs.","mahnoor","","ummaira76@gmail.com","+923213923823","Quetta","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("592","tiya ","Mrs.","nida","sajid","sajid.azlam@gmail.com","+923345084805","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("593","tiya ","Mr.","taj","mohammac","tajslakho@gmail.com","+923045656551","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("594","tiya ","Mr.","jaffar","","jaffar.ali.estate@gmail.com","+923335177056","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("595","tiya ","Mrs.","mahnoor","","mahnoorasim@gmail.com","+923458828281","Lahore","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("596","tiya ","Mrs.","minahil","nadeem","righttofarhat@gmail.com","+923455001430","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("597","tiya ","Mrs.","wajeeha","akram","wajeehaakram6@gmail.com","+923005314050","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Good","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("598","tiya ","Mrs.","naheed","jamshed","amna.cool@yahoo.com","+923215141071","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("599","tiya ","","hoor","sultan","","+923333303555","isb","1 October 2001","","",",,,","Excellent","Good","","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("600","tiya ","","sattar","siyal","sattar7525@ .Gmail. com","+920333392126","Islamabad","1 October 1994","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("601","tiya ","Mr.","col","asghar","asghar105@ndu.edu.pk","+923335201646","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("602","tiya ","Mrs.","zainab","asif","zainabasif02@gmail.com","+923345257140","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Average","Average","Average","Good","Good","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("603","tiya ","Mrs.","dr","raheela","raheela-athar@hotmail.com","+923313785580","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("604","tiya ","Mrs.","nisha","adnan","nishadani143@gmail.com","+923215884262","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("605","tiya ","Mr.","fayyax","basheer","fayaz.bashir@hotmail.com","+923155598590","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("606","tiya ","Mr.","fakheem","","mehwishtariq@hotmail.com","+923028555855","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("607","tiya ","Mrs.","saira","syed","","+923219049800","Peshawar","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("608","tiya ","Mrs.","mehwish","qaiser","","+923341141141","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("609","sarah ","Mr.","ikram","khan","","+923315128669","peshawar","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("610","sarah ","Mr.","ikram","khan","","+923315128669","peshawar","1 January 1950","No","Friend",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("611","sarah ","Mr.","qasim","masud","","+923459001910","Peshawar","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","","Average","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("612","sarah ","Ms.","aghna","masood","aghna1995@gmail.com","+92","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,,,,","Excellent","Good","Good","Average","Good","Poor","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("613","sarah ","Ms.","aghna","masood","aghna1995@gmail.com","+92","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,,,,,,,,,,,,,,,,","Excellent","Good","Good","Average","Good","Poor","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("614","sarah ","Ms.","aghna","masood","aghna1995@gmail.com","+92","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,,,,,,,,,,,,,,,,,,,","Excellent","Good","Good","Average","Good","Poor","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("615","sarah ","Mrs.","","usman","","+923018501476","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("616","sarah ","Mrs.","huma","saadat","","+92512111167","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("617","sarah ","Ms.","affaf","waqas","","+920313542135","rwp","1 January 1950","No","",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("618","sarah ","Mr.","waqas","zaheer","waqas@zaasoft.com","+92","Islamabad","1 January 1950","Yes","Friend","Ice Skating,Ice Cafe,,","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("619","sarah ","Mrs.","sana","sajid","","+923445378877","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("620","sarah ","Mrs.","sana","shehzad","","+923235414018","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("621","sarah ","Ms.","ateela","aslam","","+923455500573","Islamabad","1 January 1950","No","Mall Branding",",Ice Cafe,,","Good","Excellent","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("622","sarah ","Mr.","muneeb","rehman","","+923335188554","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("623","sarah ","Mr.","huzaifa","shahid","huzaifashahid1@yahoo.com","+923076888248","Sialkot","25 January 2000","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("624","sarah ","Mrs.","humera","amar","","+923459161973","Peshawar","1 January 1950","No","Mall Branding","Ice Skating,,,,,,,,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("625","sarah ","Mr.","Muhammad","Shaukat","","+923319336016","Islamabad","8 March 2000","Yes","Friend","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Average","Poor","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("626","sarah ","Mrs.","","jawad","","+923018553340","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("627","sarah ","Mr.","haroon","mushtaq","","+923235159213","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("628","sarah ","Mrs.","fatima","muneeb","fatymamuneeb@gmail.com","+92","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("629","sarah ","Mr.","saif","ali","","+923459777414","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("630","sarah ","Mrs.","faisal","","","+923138505742","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("631","sarah ","Mrs.","zara kh","khan","bilalssaleem@yahoo.com","+92","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Average","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("632","sarah ","Mrs.","","shehzad","","+923215556622","Islamabad","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("633","tiya ","Mr.","dr","nisar","","+923338602515","Lahore","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Poor","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("634","tiya ","Ms.","sarah","abid","sarahabid84@gmail.com","+923335046667","Rawalpindi","1 January 1950","Yes","Magazine","Ice Skating,,,","Good","Excellent","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("635","tiya ","Mrs.","laiqa","","laiqa_khan@hotmail.com","+923022886941","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("636","tiya ","Mrs.","naqeeb","","","+923005902080","Peshawar","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("637","tiya ","Mrs.","hina","khan","hina_haroon24@hotmail.com","+923438510811","Mirpur","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("638","tiya ","Mrs.","beenish","","benishiftikhar@hotmail.com","+920331553060","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("639","tiya ","Mr.","naeem","ali","","+923328525855","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("640","tiya ","Ms.","kainat","aslam","kainat_aslam@hotmail.com","+923336565852","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("641","tiya ","Ms.","anusha","qazi","anusha_adnan@hotmail.com","+92","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("642","tiya ","Mrs.","sehrish","ahsan","","+923218557333","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("643","tiya ","Ms.","khadijah","khan","","+923074296786","Peshawar","1 January 1950","Yes","Friend",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("644","tiya ","Mrs.","zeeshan","","arushajavad@gmail.com","+920321667766","Faisalabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("645","tiya ","Mr.","yasir","masood","ymasud@gmail.com","+923348567176","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("646","tiya ","Mr.","samad kareem","","","+923457270876","Multan","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Average","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("647","tiya ","Mrs.","ali","khan","daniyalkhankpk@email.com","+923219131417","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("648","tiya ","Mrs.","hamid","","asma-noor@live.com","+923109222333","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("649","tiya ","Mrs.","abubakar","","","+923005399134","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("650","tiya ","Mrs.","haddad","","kayedd@gmail.com","+92","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Average","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("651","tiya ","Mrs.","sara","azam","sarashosweety88@yahoo.com","+921234567","Karachi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("652","tiya ","Mr.","abubakar","","hafizabubakar@gmail.com","+923455068502","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("653","tiya ","Mr.","tahir","aslam","ornatecars@yahoo.com","+923379219889","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("654","tiya ","Mr.","haroon","","haroonasif@hotmail.com","+923008551510","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("655","tiya ","Mr.","umair","sami","umair.sami@zong.com.pk","+923125200796","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("656","tiya ","Mrs.","sadaf","shahid","sadaf_shahid@hotmail.com","+923005358435","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("657","tiya ","Mrs.","sadaf","shahid","sadaf_shahid@hotmail.com","+923005358435","Islamabad","1 January 1950","Yes","","Ice Skating,,,,,,","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("658","tiya ","Mrs.","mehwish","malik","malikregalstar@yahoo.co.uk","+923206669786","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Average","Average","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("659","tiya ","","noman","ahmed","","+923216549638","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("660","tiya ","Mr.","salman","ali","drsalman123@gmail.com","+923352656585","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("661","tiya ","Mrs.","noreen","saleem","","+92123456766","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("662","tiya ","Mr.","shahbaz","naveed","shahbaz34@gmail.com","+923312457825","Karachi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("663","tiya ","Mr.","shahbaz","naveed","shahbaz34@gmail.com","+923312457825","Karachi","1 January 1950","Yes","Facebook","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("664","tiya ","Ms.","shumaila","bhatti","kshums@yahoo.com","+923356565258","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("665","tiya ","Mrs.","mahjabeen","ch","mahjabeen45@yahoo.com","+923015825474","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("666","tiya ","Mrs.","naima","najeeb","naima.najeeb@gmail.com","+923335869256","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("667","tiya ","Mrs.","naima","najeeb","naima.najeeb@gmail.com","+923335869256","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("668","tiya ","Mr.","kamran","","kami _ Oslo@yahoo.com","+923008070701","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Average","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("669","tiya ","Mr.","waqar","ul haq","waqarulhaq10@gmail.com","+923215104260","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("670","tiya ","Ms.","sana","riaz","sanariaz664@gmail.com","+923235495755","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("671","tiya ","Mrs.","kamran","","","+923009660609","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("672","tiya ","Mrs.","kamran","","","+923009660609","Islamabad","1 January 1950","Yes","",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("673","tiya ","Mr.","malik","faheem","","+923346789991","Dera Ghazi Khan","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("674","tiya ","Mr.","hasham","masood","hashaamp@hotmail.com","+923009733144","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Good","Good","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("675","tiya ","Mr.","azam","","adurrani@logenix.com","+923072774376","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("676","sarah ","Mr.","waleed","umer","","+923225055593","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("677","sarah ","Mrs.","","nizam","","+923017569924","Multan","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("678","sarah ","Ms.","Me rub","khan","","+920301707784","Multan","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("679","sarah ","Mrs.","","imran","imranmushtaq@hotmail.com","+92","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("680","sarah ","Mrs.","sadia","awan","","+923008304440","Rawalpindi","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Excellent","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("681","sarah ","Mr.","usman","khan","","+923034190787","Multan","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("682","sarah ","Mrs.","huda","khurram","","+923215396431","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("683","sarah ","Mrs.","zarmina","rizwan","","+923215709411","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("684","sarah ","Mrs.","sana","faisal","","+920333519900","Islamabad","24 January 1983","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("685","sarah ","Mr.","merub","khan","","+923007330488","Multan","1 January 1950","No","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("686","sarah ","Mrs.","asma","malik","","+923238556792","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("687","sarah ","Mrs.","","adnan","mkiran@yahoo.com","+92","Karachi","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("688","sarah ","Mrs.","imaan","imran","","+923224657701","Lahore","1 January 1950","No","Friend","Ice Skating,,,","Average","Average","Average","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("689","sarah ","","roohi","bano","","+923345029633","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("690","sarah ","Mrs.","sana","ilyas","","+923215055065","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("691","sarah ","Mrs.","ghazal","rashid","ghazalrashid@hotmail.com","+92","Lahore","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("692","sarah ","Mrs.","hina","noman","","+923345424070","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("693","sarah ","Mrs.","sadia","khurram","","+923335386998","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("694","sarah ","Mrs.","zunaira","faiz","","+923215555871","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("695","sarah ","Mrs.","saba","","","+923321520488","","1 January 1950","","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("696","sarah ","Mr.","aamir","mustafa","","+923065050190","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("697","sarah ","Mrs.","dr","shagufta","","+923455294841","Abbottabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("698","sarah ","Mrs.","sana","talha","","+923225025222","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("699","sarah ","Mrs.","maryam","hussain","","+923038012420","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Excellent","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("700","sarah ","Mr.","muhammad","ishaaq","","+923325090184","Haripur","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("701","sarah ","Mrs.","mahwish","qamar","","+923215246058","Islamabad","1 January 1969","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("702","sarah ","Ms.","minah","ali","","+923345535872","Rawalpindi","1 January 1950","No","",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("703","sarah ","Mrs.","rehana","rasul","","+923218530800","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Average","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("704","sarah ","Mrs.","saba","abid","consultwithabid@gmail.com","+92","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("705","sarah ","Mr.","arsalan","tariq","","+923334212813","Lahore","1 January 1950","Yes","Billboard","Ice Skating,,,Gaming Zone","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("706","sarah ","Mr.","kashif","javed","","+923455180283","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("707","sarah ","Ms.","shanel","khan","","+923348502000","Islamabad","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("708","sarah ","Mrs.","mona","bello","mona@hotmail.com","+92","sydney","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("709","sarah ","Mr.","umar","wahid","","+923345042277","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("710","sarah ","Ms.","huda","inam","","+923335092381","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("711","sarah ","Mr.","usman","paracha","","+923008601055","Sargodha","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("712","sarah ","Mr.","ali","","","+923335252468","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("713","sarah ","Mrs.","","syed","","+923009887761","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("714","sarah ","Mrs.","","shehzad","faraz.zoha@gmail.com","+92","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("715","sarah ","Mr.","hasan","iqbal","","+923005006253","Lahore","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("716","sarah ","Mrs.","umaima","hadi","","+923000446105","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("717","sarah ","Mr.","umer","masood","","+923008455644","Lahore","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("718","sarah ","Mrs.","maryam","naim","maryamnaim@hotmail.com","+92","philadelphia","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("719","sarah ","Mrs.","","ahsan","","+923238526984","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("720","sarah ","Mr.","shahmir","mustafa","","+923244494448","Lahore","1 January 1950","No","Mall Branding",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Good","Average","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("721","sarah ","Mrs.","","yasir","","+923361057151","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("722","sarah ","Mrs.","alifya","mustafa","","+923005114194","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("723","tiya ","Mrs.","afshan","fareed","hassanfarid42@gmail.com","+923157117007","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("724","tiya ","Mrs.","sehrish","babar","sehrishbabar305@gmail.com","+923445264103","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("725","tiya ","Mr.","aatif","hussain","atif@accamail.com","+923100000779","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("726","tiya ","Mr.","saad","ayub","saad.ayub@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("727","tiya ","Mrs.","qasim","","sadaf79@outlook.com","+923244494448","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("728","tiya ","Mrs.","nosheen","haseeb","","+923215252177","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Poor","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("729","tiya ","Mrs.","dr","saima","saimapi@yahoo.com","+923335516285","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("730","tiya ","Mrs.","nadia","","nadia_dar@hotmail.co.uk","+92123456789","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("731","tiya ","Mr.","adam","mohyuddin","adam. mohyuddin@gmail.com","+92333434661","Karachi","1 November 1981","No","Friend",",,,Gaming Zone","Good","Average","Poor","Poor","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("732","tiya ","Mr.","babbar","khan","babbaraki","+920321516334","islamabad","1 January 1950","","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("733","tiya ","Mrs.","ismail","syed","sayyed_saadi@yahoo.com","+923331580509","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","Average","Poor","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("734","tiya ","Mrs.","bilal","","","+92322500018","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("735","tiya ","Mrs.","zonish","faisal","zonikhan1@hotmail.com","+923215897689","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("736","tiya ","Mrs.","sumaira","faisal","faisal.yassin80@yahoo.com","+923459900670","Karachi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("737","tiya ","Mr.","iftikhar","gillani","","+923005555561","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("738","tiya ","Mrs.","sabi","waqas","","+923225008090","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("739","tiya ","Mr.","umer","saeed","umrsd@yahoo.com","+923215012346","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Average","Average","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("740","tiya ","Ms.","sama","saleem","samasaleem@outlook.com","+923325259222","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("741","tiya ","Mr.","rizwan","asghar","rizwanasghar77@yahoo.com","+923401523741","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("742","tiya ","Mr.","adnan","khursheec","","+923405418620","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("743","tiya ","Mr.","rizwan","","creators.com@hotmail.com","+923036664250","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Average","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("744","tiya ","Mrs.","madiha","arslan","","+923212159610","Islamabad","1 January 1950","Yes","",",,,","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("745","tiya ","Mrs.","qazi","","jawadkiwan@gmail.com","+923335550686","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Average","Average","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("746","tiya ","Mr.","atif","ikyas","atifilyas100@yahoo.com","+923234034596","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("747","tiya ","Mrs.","ubaid","","bca1@yahoo.com","+923335431179","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("748","tiya ","Ms.","jannat","ameer","jannatameer456@gmail.com","+923058760011","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("749","tiya ","Mrs.","farooq","","humafarooq80@gmail.com","+923315355557","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("750","tiya ","Mrs.","ahmar","","qramha@gmail.com","+923335216201","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("751","tiya ","Mrs.","fatima","azeem","","+923335119211","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("752","tiya ","","amir","","amirahtesham@yahoo.com","+923012357619","Islamabad","1 January 1950","Yes","",",,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("753","tiya ","Mrs.","faryal","jan","faryaljan@yahoo.co.uk","+92123456789","Islamabad","4 May 1985","Yes","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("754","tiya ","Mrs.","shehzad","","saba786@hotmail.com","+923215021666","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Average","Average","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("755","tiya ","Mr.","talha","umair","malik29@gmail.com","+923009557300","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("756","tiya ","","rida","aslam","rida.talha29@gmail.com","+923018557300","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("757","tiya ","Mrs.","arslan","","ghaniaarsalan1@gmail.com","+923018502435","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("758","tiya ","Mrs.","asma","yasin","asmayasin1278@gmail.com","+923345644421","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("759","tiya ","","hassan","","","+923228247777","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("760","tiya ","Mr.","aslam","tabassum","aslamtabassum@gmail.com","+923214045424","Lahore","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Average","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("761","tiya ","Mrs.","quratulain","kamran","annikamran@hotmail.com","+923335501032","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("762","tiya ","Mr.","shuja","hussain","hussain_shuja@hotmail.com","+923045100094","Islamabad","1 January 1950","","Mall Branding","Ice Skating,,,","Average","Poor","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("763","tiya ","Mr.","asim","bukhari","asim@megaplus.com.pk","+923339109113","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Poor","Average","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("764","tiya ","Mrs.","aasma","shoaib","bcshoaib@yahoo.com","+923319062611","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("765","tiya ","Mrs.","raheel","","tehreemshakeel@gmail.com","+923319746806","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("766","tiya ","Mrs.","dr","maryam","maryam sale. khan@yahoo.com","+923335672483","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("767","tiya ","Mrs.","safia","","yssafia82@gmail.com","+923145757002","Mansehra","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Excellent","Good","Excellent","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("768","tiya ","Mrs.","shazia","tanveer","","+923216001696","Sargodha","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("769","tiya ","Mr.","saqib","ali","saqibali5127272@Gmail.com","+923335127272","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("770","tiya ","Mrs.","usman","","drusman_janjua@yahoo.com","+923155394820","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("771","tiya ","Ms.","arooba","khan","aroobakhan2009@hotmail.com","+923349072750","Peshawar","1 January 1950","Yes","",",Ice Cafe,,","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("772","tiya ","Mr.","Muhammad","Abdullah","","+920313725099","Islamabad","1 January 1950","","Friend",",,,","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("773","tiya ","Mr.","ali","","zamanmohammad8@zaman mohammad @gmail.com. com","+923315554742","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("774","tiya ","Mr.","tahir","khan","tahirkhan660@gmail.com","+923459333450","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("775","tiya ","Ms.","amal nadeem","","","+923335173916","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("776","tiya ","Mr.","bilal","","bilal37psp@bilal pop @gmail.com. com","+923008500745","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("777","tiya ","Mr.","bilal","","bilal37psp@bilal pop @gmail.com. com","+923008500745","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Good","Good","Good","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("778","tiya ","Mrs.","ali","","naveed.alizaman@gmail.co","+923315230599","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("779","tiya ","Mrs.","sabika","rizvi","riz I. sabika@outlook.com","+923361288115","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("780","tiya ","Mrs.","faisal","","faisalkhanadv@gmail.com","+923215198284","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("781","tiya ","Mrs.","sara","tayyab","sarahtayyab83@gmail.com","+923215300234","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("782","tiya ","Mrs.","salwa","zeeshan","salwa.saeed@gmail.com","+923159105554","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("783","tiya ","Mr.","attiq","uz zaman","attiq.zaman@mpcl.com.pk","+923025134566","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("784","tiya ","Mr.","aiman","farhan","","+923217878081","Sargodha","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("785","tiya ","Mr.","tariq","khan","tk_sher@hotmail.com","+923338883777","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("786","tiya ","Mrs.","tahmina","gul","gultahmina@gmail.com","+923008494392","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("787","tiya ","Mrs.","ali","","tazeem.ali@gmail.com","+923444488857","Kashmor","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("788","tiya ","Mr.","zafar","iqbal","zafariqbalchaudry@gmail.com","+923335927733","Chakwal","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("789","tiya ","Mr.","farhan","","","+923335587456","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("790","tiya ","Mrs.","mahjabeen","ch","mahjabeen45@mahjabeen45@yahoo.com","+923216542475","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("791","tiya ","Mr.","arslan","qamar","arsalan.qamar@hotmail.com","+923455555643","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("792","tiya ","Ms.","zahra","ali","quickshotz@yahoo.com","+923368575855","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("793","tiya ","Mrs.","iffat","shuja","iffatsiddique@gmail.com","+923365527968","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("794","tiya ","Mr.","wali","ur rehman","waliurrehman@gmail.com","+923224408330","Lahore","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("795","tiya ","Mrs.","uzma","rehman","uzmahanif@gmail.com","+923365491045","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("796","tiya ","Mrs.","dr","tayyaba","nainriaz@yahoo.com","+923339633228","Kohat","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("797","sarah ","Mrs.","aila","yasir","","+923165388244","tarbela","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("798","sarah ","Mrs.","nadia","","","+923336854456","Islamabad","1 January 1950","No","Magazine","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("799","sarah ","Mrs.","","haider","","+923212345191","Mirpur","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("800","sarah ","Mrs.","sania","naqvi","","+923335888500","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("801","sarah ","Mr.","That duc","tri","","+920331594248","Islamabad","1 January 1950","No","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("802","sarah ","Mrs.","sania","barber","","+923212836068","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("803","sarah ","Mrs.","","zarak","","+923149601287","Mardan","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("804","sarah ","Mrs.","samina","taj","","+923000540771","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("805","sarah ","Mrs.","ambreen","jafri","ambreenjafri1@gmail.com","+92","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("806","sarah ","Ms.","iqra","qaiser","","+923005224090","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("807","sarah ","Mr.","sajid","qazi","","+923028550479","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("808","sarah ","Mrs.","","athar","","+923008558823","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Average","Poor","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("809","sarah ","Mr.","abbas","maqsood","a","+923419166003","Peshawar","1 August 1996","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("810","sarah ","Mr.","shayan","zafar","","+923335273460","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("811","sarah ","Mrs.","altaf","khan","cyma248@gmail.com","+923365528590","Islamabad","1 January 1950","Yes","Friend",",Ice Cafe,,Gaming Zone","Good","Good","Excellent","Good","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("812","sarah ","Mrs.","waleed","elahi","","+923454445111","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("813","sarah ","Mr.","mohid","anwar","","+923008522710","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Average","Average","Average","Good","Average","Poor","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("814","tiya ","Mr.","irtiza","hussain","irtizahussain77@hotmail.com","+923008522271","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Good","","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("815","tiya ","Mr.","saadi","hadi","saadi_h1972@hotmail.com","+923365133260","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("816","tiya ","Mrs.","zarmeena","munir","zarminamunir@hotmail.co.uk","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("817","tiya ","Mr.","darwesh","","khanzando66@gmail.com","+923369528889","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("818","tiya ","Ms.","khadijah","khan","ashookhan83@yahoo.com","+923074296786","Peshawar","1 January 1950","Yes","","Ice Skating,,,","Average","Excellent","Excellent","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("819","tiya ","Mrs.","hussain","","sorosh1@gmail.com","+923458558055","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("820","tiya ","Mr.","majid","","abdulmajidib@gmail.com","+923219995502","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("821","tiya ","Mr.","saqib","ali","saqib.swati@gmail.com","+923333322270","Abbottabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("822","tiya ","Mr.","wajid","zahid","drmajidkhan67@yahoo.com","+923365187912","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("823","tiya ","Mrs.","waseem","","bgroupt@hotmail.com","+923218505630","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Average","Average","Poor","Poor","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("824","tiya ","","","","","+923365544852","Islamabad","1 January 1950","","",",,,","Average","","Average","","Average","Average","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("825","tiya ","Mrs.","riffat","malik","riffat.raza@yahoo.com","+923135111617","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Average","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("826","tiya ","Mr.","sheryar","gul","sheryargulkhan@outlook.com","+923105233390","Islamabad","1 August 1995","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("827","tiya ","Mr.","M","ashfaq","ashfaq.kiani@yahoo.com","+923215465455","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("828","tiya ","Ms.","irum","ali","irum97@hotmail.com","+923367534275","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("829","tiya ","Ms.","irum","ali","irum97@hotmail.com","+923367534275","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("830","tiya ","Mrs.","toor","","sairakpmg@hotmail.com","+923339989825","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("831","tiya ","Mrs.","nadia","hassan","nadiashaw98@gmail.com","+923008407579","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("832","tiya ","Mr.","baseer","","baseer_abbasi@hotmail.com","+923005135449","Islamabadi","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("833","tiya ","Mr.","farhan","khan","farhankhan1108@gmail.com","+923455800800","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("834","tiya ","Mr.","hassan","","hassan1177@gmail.com","+923005340403","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("835","tiya ","Ms.","iqra","","iqranasir331@gmail.com","+923245237249","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("836","tiya ","Mr.","asif","khan","kas han. ali@hotmail.com","+923028550071","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("837","tiya ","Mrs.","samreen","","samreen_320@hotmail.com","+923459177727","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("838","tiya ","Mrs.","asad","","","+923218663991","Faisalabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("839","tiya ","Mrs.","hania","","yasir.niazi@gmail.com","+923334832726","Islamabad","1 January 1950","Yes","Magazine",",,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("840","tiya ","Ms.","eman","ansari","lifehouse_eman@hotmail.com","+923214444336","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Poor","Good","Good","Good","Poor","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("841","tiya ","Mr.","ijaz","mangi","aijazmangi@hotmail.com","+923337529319","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("842","tiya ","Mr.","kashif","qudoos","kashifquddus@gmail.com","+923365318500","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("843","tiya ","Ms.","aqsa","malik","axsamalik22@yahoo.com","+923336897604","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("844","tiya ","Mrs.","dr","iram","awaniram@hotmail.com","+923343652222","Multan","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("845","tiya ","Mrs.","fahad","","columbia9700@gmail.com","+923088999777","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("846","tiya ","Mr.","nisar khan","","","+923223536963","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("847","tiya ","Mrs.","nouman","","noumanasad@gmail.com","+923007152001","Sialkot","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("848","tiya ","Ms.","brikhna","rehman","","+923348900911","Swabi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Excellent","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("849","tiya ","Mr.","umar","ahmed","oahmad@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("850","tiya ","Mr.","faisal","nasir","faisal.nasir@gmx.com","+923218530000","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Average","Poor","Good","Average","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("851","tiya ","Mrs.","roshni","sajjad","roshni@montitute.com","+923345519695","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("852","tiya ","Mr.","haider","","","+92123456789","Lahore","1 January 1950","","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("853","tiya ","Mrs.","shehzad","","","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Excellent","Poor","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("854","tiya ","Mr.","haroon","rasheed","haroonrashid8899@yahoo.com","+923339618899","Kohat","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("855","tiya ","Mr.","amber","qureshi","only_amber2000@yahoo.com","+923339614943","Kohat","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("856","tiya ","Mr.","shoaib","momin","shoaibmomin112233@gmail.com","+923165248286","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("857","tiya ","Mrs.","arif","","","+923379753109","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("858","tiya ","Mrs.","saqib","","","+923424116489","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("859","tiya ","Mr.","atif","khan","","+923335366007","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("860","tiya ","Mrs.","hira","tallat","innocent_hira20@yahoo.com","+923245506556","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("861","tiya ","Mr.","hasham","yousaf","","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Average","Poor","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("862","tiya ","Mrs.","khwajah","","kehusane@gmail.com","+923222222969","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("863","tiya ","Mrs.","sharmeen","mazhar","sharmeen.mazhar1@gmail.com","+923333656827","Karachi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Poor","Poor","Poor","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("864","tiya ","Mrs.","sharmeen","mazhar","sharmeen.mazhar1@gmail.com","+923333656827","Karachi","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Poor","Poor","Poor","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("865","tiya ","Mr.","m","ibrahim","abdullahk7778@outlook.com","+923009718558","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("866","tiya ","Mrs.","waheed","butt","","+923438899997","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("867","tiya ","Mr.","mazhar","saleem","mazharshamdani@gmail.com","+923018274457","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("868","tiya ","Mrs.","tahir","","ssadianawaz@hotmail.com","+923115729005","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("869","tiya ","Mrs.","huma","khan","","+923235151338","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("870","tiya ","","huma","khan","","+923235151338","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("871","tiya ","Mr.","arman","shah","ashwantraders@gmail.com","+923102199999","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("872","tiya ","Mr.","ijaz","akhtat","ijazhashir@hotmail.com","+923335141968","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("873","tiya ","Mrs.","tania","hassan","","+92123456789","","1 January 1950","","Facebook","Ice Skating,,,","Good","Average","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("874","tiya ","Ms.","laloona","khan","laloonakhanlaloona@gmail.com","+923008156161","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("875","tiya ","Mr.","rafaqat","javed","","+923467302008","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Average","Average","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("876","sarah ","Mrs.","iram","bashir","","+923335206887","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("877","sarah ","Mrs.","riffat","jabeen","","+923005279441","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("878","sarah ","Mrs.","","dawood","","+923335188559","Islamabad","1 January 1950","No","Billboard",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("879","sarah ","Mr.","faran","alvi","","+923334499666","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Average","Poor","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("880","sarah ","Mrs.","rumeza","hanif","","+923339197603","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Average","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("881","sarah ","Mr.","faheem","farooq","","+923235004842","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("882","sarah ","Mrs.","sobia","","sobia.javed@seecs.edu.pk","+923075558885","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("883","sarah ","Mr.","noman","amjad","nomi551@hotmail.com","+923135403606","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("884","sarah ","Mr.","sajjad","","sajjad.13@hotmail.com","+923458295736","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("885","sarah ","Mrs.","samina","","","+923345268706","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Good","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("886","sarah ","Mr.","zohair","islam","zohairislam@gmail.com","+923215177441","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("887","sarah ","Mr.","zulfiqar","khan","","+923015130889","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("888","sarah ","Mr.","zulfiqar","khan","","+923015130889","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone,,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("889","sarah ","Mr.","zulfiqar","khan","","+923015130889","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("890","sarah ","Mr.","qasim","zaman","qasimzamankhan@gmail.com","+923008472947","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("891","sarah ","Ms.","khadijah","","nanaawan@yahoo.com","+923318864040","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("892","sarah ","Mrs.","abbas","","mehwishumair1@hotmail.com","+923215553096","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("893","sarah ","Mrs.","zahra","hassan","haazaa@gmail.com","+923455959505","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("894","sarah ","Mr.","ameer","zaibkhan","ussan73@yahoo.com","+923332160981","Swat","1 January 1950","Yes","Friend",",Ice Cafe,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("895","tiya ","Mr.","meer","shahnawaz","","+923331616909","Islamabad","1 January 1950","Yes","Facebook",",Ice Cafe,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("896","tiya ","Mrs.","zara","gilani","","+923319100099","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("897","sarah ","Mr.","m","osman","osmanabib@gmail.com","+923215652220","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("898","sarah ","Mrs.","raheela","kashif","","+923005148071","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Average","Average","Good","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("899","sarah ","","","naeem","","+924471620","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("900","sarah ","Mrs.","atif","","atif.ikram@gmail.com","+923008411327","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("901","sarah ","Mrs.","atif","","atif.ikram@gmail.com","+923008411327","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone,,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("902","sarah ","Mr.","faheem","mumtaz","fahmirza@hotmail.com","+923145101663","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("903","sarah ","Mrs.","bina","","usmanlahoti@gmail.com","+923335279006","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("904","sarah ","Ms.","shano","","shanom186@gmail.com","+923129935777","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Average","Good","Poor","Average","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("905","sarah ","Mr.","malik","riax","","+92321500338","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("906","sarah ","Mr.","sajid","mehmood","","+923125089686","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("907","sarah ","Mrs.","zeba","aziz","","+923006730217","barakhao","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("908","sarah ","Mrs.","ayesha","imran","","+923005957448","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("909","sarah ","Mr.","israr","khan","","+923475554444","Swat","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("910","sarah ","Mrs.","aruj","fatima","","+923018560220","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("911","tiya ","Mrs.","zahra","farooq","zahra_yousaf@hotmail.ckm","+923475000531","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("912","tiya ","Mrs.","farid","","farid_pindi@hotmail.com","+923339306161","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Good","","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("913","tiya ","Mrs.","qandeel","","","+923125823565","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("914","tiya ","Mr.","khalid","","khalifa.cheema@ikan.com","+923352444222","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("915","tiya ","Mr.","mian","hamid","lahore4@hotmail.com","+923225166138","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("916","tiya ","Mr.","khurram","","qalandarni@yahoo.co.uk","+923335209759","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("917","tiya ","Ms.","maham","sagheer","maham sagheer.ms@gmail.com","+923025232225","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("918","tiya ","Mrs.","waseem","","","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Good","Excellent","Excellent","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("919","tiya ","Mr.","dr","sheraz","stareen@hotmail.com","+923009554134","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("920","tiya ","Mr.","habib","","seemaaziz786@hotmail.com","+923450547267","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("921","tiya ","Mr.","farzand","khan","jon_zahid999@yahoo.cm","+923110000074","Quetta","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("922","tiya ","Mrs.","fahad","","beenishfahad13@gmail.com","+923215316017","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("923","tiya ","Mrs.","haseena","zohaib","haseenazohaib@gmail.com","+923335777789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("924","tiya ","Mr.","raja","waseem","waseem united intl.net","+923028416955","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("925","tiya ","Mr.","dr","shahid","drshahidshah@gmail.com","+923332280648","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Average","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("926","tiya ","Mr.","mussawir","","","+923335204718","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("927","tiya ","Mrs.","salina","zainab","","+923005099026","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("928","tiya ","Mr.","sakibb","saleem","sakibbs@gmail.com","+923348547778","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Average","Average","Average","Average","Poor","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("929","tiya ","Mr.","abrar","ul haq","abrarulhaqkahloon@hotmail.com","+923233333353","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("930","tiya ","Mr.","anwar","ansari","manwar.ansari@gmail.com","+923325526927","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("931","tiya ","","adam","imran","imran.ikram44@yahoo.com","+920332595744","peshawar","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("932","tiya ","Ms.","bilqees","fatima","bilquees.fatima86@hotmail.com","+923339000905","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("933","tiya ","Mrs.","kainat","umer","space_wise@hotmail.com","+923033338323","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("934","tiya ","Ms.","anny","raaffial","annyraffial.@gmail.ckm","+923215853960","Peshawar","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("935","tiya ","Mr.","m","saleem","dr_muhammadsaleem@hotmail.com","+923438883337","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("936","tiya ","Mr.","babar","naeem","ssbb_143@hotmail.com","+923219617771","Sialkot","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("937","tiya ","Mr.","noor","ul islam","noor.islam2010@gmail.com","+923335183055","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("938","tiya ","Mr.","ammar","islam","ammar.islam143@yahoo.com","+923335142696","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("939","tiya ","Ms.","maham","noor","mahamtherabu@gmail.com","+923322221095","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("940","tiya ","Mr.","col","mubeen","mobirox3@gmail.com","+923028475936","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("941","tiya ","Ms.","anaya","iman","z.hussain@worxlogistics.com","+923237767775","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("942","tiya ","Mr.","haseeb","ahmed","haseeb_ahmed77@hotmail.com","+923328500499","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("943","tiya ","Ms.","alveena","rahim","alveena.rahim@gmail.com","+923479715226","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("944","tiya ","Mr.","usman","","usman.shaukat@zong.com.pk","+923125203018","Wah Cantt","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("945","tiya ","Mrs.","farah","majid","fparizay@yahoo.com","+923222810304","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Average","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("946","tiya ","Mrs.","sameen","qureshi","","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("947","tiya ","Ms.","naila","naz","naila218@yahoo.com","+923219852525","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("948","tiya ","Mr.","anjum","malik","","+923322695858","Karachi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("949","tiya ","Mr.","wali","ur rehman","walirehman15@gmail.com","+923224408330","lahore","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("950","tiya ","Mrs.","sehrish","","","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("951","tiya ","Mr.","imran","raheem","mana_1971@hotmail.com","+923008558851","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Good","Average","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("952","tiya ","","aamina","amir","aamina_amir@hotmail.com","+923423333313","Islamabad","1 January 1950","Yes","Friend","Ice Skating,Ice Cafe,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("953","tiya ","Mrs.","elhan","","","+9212345678","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("954","tiya ","Mrs.","aamna","ali","","+923335404870","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("955","tiya ","","fouzia","sultana","menmyumar2@hotmail.com","+923330222216","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Good","Average","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("956","tiya ","Mr.","mohsin","ali","mohsin_ras@hotmail.com","+923475552077","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Excellent","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("957","tiya ","Mr.","mohsin","ali","mohsin_ras@hotmail.com","+923475552077","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Good","Good","Excellent","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("958","tiya ","Mr.","hamza","khan","hamzakhanqi@gmail.com","+923155269704","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("959","tiya ","Ms.","qandeel","ijaz","qandeelijaz10@gmail.com","+923439113366","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("960","tiya ","Mr.","soban","ghani","sobanghani11@gmail.com","+923331941891","","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("961","tiya ","Mrs.","saba","","sjadoon79@gmail.clm","+923469538391","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("962","tiya ","Mrs.","adnan","","mahsoon.adnan@yahoo.com","+923022727457","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("963","tiya ","Mrs.","maliha","asim","malihaasim21@gmail.com","+923328810582","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("964","tiya ","Mrs.","maliha","asim","malihaasim21@gmail.com","+923328810582","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("965","tiya ","Mrs.","uzma","altaf","bbusyy@hotmail.com","+923325209976","Islamabad","1 January 1950","Yes","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("966","tiya ","Mrs.","m","sabeeh","riaz.amna84@gmail.com","+923365775566","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("967","tiya ","Mr.","zahid","malik","","+923225006732","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("968","sarah ","Mr.","mansoor","khan","","+923218203398","holland","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("969","sarah ","Mrs.","asad","","","+923235444440","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("970","sarah ","Mr.","mushtaq","qureshi","qureshi.mushtaq@gmail.com","+923009100154","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("971","sarah ","Mr.","yasir","faraz","yasirfaraz1@gmail.com","+923325108382","Islamabad","1 January 1991","Yes","Facebook",",,,","Excellent","Good","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("972","sarah ","Mrs.","usman","","usmansaroia@gmail.com","+923008460944","Hafizabad","1 January 1950","Yes","Friend","Ice Skating,Ice Cafe,,","Excellent","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("973","sarah ","","fatima","kamran","fatimak2009@gmail.com","+923362124200","Islamaba","18 September 1969","No","Billboard",",,,Gaming Zone","Good","Good","Average","Poor","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("974","sarah ","Mr.","m","azim","azimsagheer@gmail.com","+923215282830","Islamabad","1 January 1950","Yes","Facebook",",Ice Cafe,,","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("975","sarah ","Mrs.","","zahid","","+923005002929","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Good","Average","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("976","sarah ","Mr.","nurzhenis","","","+923073338745","","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("977","sarah ","Mrs.","sofia","ahsan","","+923002443161","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("978","sarah ","Mr.","zahid","hussein","","+923005002929","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("979","sarah ","Mr.","azm","durrani","","+923035552875","Islamabad","1 January 1950","No","Friend","Ice Skating,,,","Excellent","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("980","sarah ","Mrs.","sidra","azmat","","+923339038314","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("981","sarah ","Mrs.","","shehryar","","+923345554969","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("982","sarah ","Mrs.","hina","isfand","","+923345032626","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Average","Good","Average","Average","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("983","sarah ","Mrs.","madiha","bilal","","+923009288332","Karachi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Average","","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("984","sarah ","Mrs.","","kashif","","+923315891337","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("985","sarah ","Mr.","zulqarnain","shafqat","","+923008500137","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Good","Excellent","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("986","sarah ","Mrs.","sabeen","khan","","+923008473456","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("987","sarah ","Mrs.","rabiea","junaid","","+923425371417","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("988","sarah ","Mrs.","zafar","","","+923231483942","Lahore","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("989","sarah ","Mr.","khurram","qasim","","+923335300528","Islamabad","1 January 1950","No","",",,,Gaming Zone","Average","Average","Good","Poor","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("990","sarah ","Ms.","hunza","mansoor","","+923214661731","Lahore","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("991","sarah ","Mr.","mudassar","azeem","","+923335366993","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Poor","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("992","sarah ","Mrs.","tayyab","","","+923005552099","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Average","Average","Good","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("993","sarah ","Mrs.","anum","bilal","","+923215559916","Karachi","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("994","tiya ","Mr.","ammad","mumtaz","ammad.am@gmail.com","+923335389217","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("995","tiya ","Ms.","sonia","arif","","+92123456789","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("996","tiya ","Mr.","azaan","","","+923158650900","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("997","tiya ","Mrs.","ammad","","ammad.am@gmail.com","+923335389217","Islamabad","1 January 1950","Yes","Friend",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("998","tiya ","Ms.","emaan","fatima","","+923339108025","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("999","tiya ","Ms.","noorulain","sakhi","noorulain952@gmail.com","+923218133954","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1000","tiya ","Mrs.","tehreem","","tehreem_jafri@hotmail.com","+920331523165","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Excellent","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1001","tiya ","Mrs.","samia","javed","samiajaved786@hotmail.com","+923228877777","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1002","tiya ","Mr.","ali","asif","","+923018566133","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1003","tiya ","Mr.","hamza","","hamza133@hotmail.com","+923004675150","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1004","tiya ","Mrs.","naeema","mawaz","","+923434800800","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1005","tiya ","Mrs.","sadia","","sadia.shams@hotmail.com","+923202004481","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1006","tiya ","Mrs.","sadaf","","sadafsaadisaeed@outlook.com","+923035599718","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1007","tiya ","Mrs.","sadaf","","sadafsaadisaeed@outlook.com","+923035599718","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Excellent","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1008","tiya ","Mrs.","maria","","mariagulmeena@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,","Good","Excellent","Good","Excellent","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1009","tiya ","Mrs.","irum","rizwan","","+923035899950","i","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1010","tiya ","Ms.","mehreen","","m3hreen@hotmail.com","+92313855025","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1011","tiya ","Mrs.","nabeel","","","+92123456789","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1012","tiya ","Mr.","babur","khan","","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1013","sarah ","Ms.","rukhshanda","shaikh","","+923312911705","Hyderabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1014","sarah ","","sadiya","hanum","","+923005187350","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1015","sarah ","Mrs.","ayesha","imran","dua_makealife@yahoo.com","+92","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1016","sarah ","Mrs.","neelum","dawar","neelumsaeed888@gmail.com","+923215164579","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1017","sarah ","Mr.","maha","kashif","","+923000974036","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1018","sarah ","Mr.","raja","adil","","+923335575751","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1019","sarah ","Mrs.","","aurangzeb","","+923335632289","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1020","sarah ","Mr.","fahim","khan","","+923315160623","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1021","sarah ","Mrs.","husna","yasini","","+923315128972","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1022","sarah ","Mrs.","gulsabah","gul","","+923555279175","gilgit","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1023","sarah ","Mr.","hamad","dar","","+923345416063","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1024","tiya ","Ms.","sania","malik","sanyamalikawan@gmail.com","+923315997797","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1025","tiya ","","abdullah","gondal","gondal_abdullah94@hotmail.com","+923045007999","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Poor","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1026","tiya ","Mr.","usman","","uj_karim@hotmail.com","+923008589339","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1027","tiya ","Mrs.","farhan","","sabrina@yahoo.com","+923234381912","Lahore","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1028","tiya ","Mr.","mishal","","","+92123456789","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1029","tiya ","Mrs.","elena","","","+923018501532","","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1030","tiya ","Ms.","hina","","lion.22222@yahoo.com","+923216222225","Gujranwala","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1031","tiya ","Ms.","hina","","lion.22222@yahoo.com","+923216222225","Gujranwala","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1032","tiya ","Ms.","sana","jafar","sanajaffar9@gmail.com","+923345075597","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1033","tiya ","Ms.","ayesha","","ayeshazafeer@gmail.com","+923352526276","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1034","tiya ","Mrs.","aasma","","goshee82@yahoo.com","+923005250498","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1035","tiya ","Mr.","raed","mustafa","goshee82@yahoo.com","+923005250498","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1036","tiya ","","sundas","ali","sundasalirq@yahoo.com","+923018593882","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1037","tiya ","Ms.","aimen","tahir","aymen.tahir96@gmail.com","+923335716615","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1038","tiya ","Mrs.","Irum","jameel","imaanabbasi@hotmail.com","+923335502475","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1039","tiya ","Ms.","fatima","","","+923335125095","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Average","Excellent","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1040","tiya ","Ms.","maham","","maham53@hotmail.com","+923335682112","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Poor","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1041","tiya ","Mrs.","azhar","","ambreenazharbhatti@gmail.com","+923025557504","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1042","tiya ","Ms.","haya","nadeem","farzana_5@hotmail.com","+923339857324","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1043","tiya ","Mr.","abdullah","","amna_waqar@hotmail.com.pk","+920321500775","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1044","tiya ","Ms.","iqra","","iqra9013@gmail.com","+923349563487","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1045","tiya ","Mr.","rashid","mehmood","rashid.mehmood@gmail.com","+923018488464","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1046","tiya ","Ms.","zara","","","+92123456789","","1 January 1950","No","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1047","tiya ","Mrs.","tabreed","","tabreedozgen@gmail.com","+923315551060","","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1048","tiya ","Mrs.","zarmeena","","","+92301858278","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1049","tiya ","Mr.","musa","hasan","musa_lfc@hotmail.com","+923215193532","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1050","tiya ","Mrs.","awais","","sahartariq34@gmail.com","+923345382108","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1051","tiya ","Mr.","imran","khan","imran.khan@greenlines.com.pk","+923008639300","Multan","1 January 1950","Yes","Friend",",Ice Cafe,,","Average","Good","Good","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1052","tiya ","Mr.","gul","sher","gsrkhan016@mail.com","+923018639300","Multan","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1053","tiya ","Ms.","suman","","sumantariq93@gmail.com","+923331459744","Lahore","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1054","tiya ","Mr.","danish","raza","danish.raza70@gmail.com","+923245731441","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1055","tiya ","Mrs.","huma","imran","managmana@gmail.com","+923018558851","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Average","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1056","tiya ","Mrs.","huma","imran","managmana@gmail.com","+92","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1057","tiya ","Mr.","sohaib","","suhaibt@gmail.com","+923439111119","Peshawar","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1058","tiya ","Mr.","bilal","","","+923335345564","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1059","tiya ","Mr.","uzair","","","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1060","tiya ","Ms.","romasah","","romasah_baig@hotmail.com","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1061","tiya ","Ms.","beaurukh","","alinojmana@gmail.com","+923336466266","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Average","Average","Good","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1062","tiya ","Mrs.","naimah","khan","naimahadeel@gmail.com","+923365666789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1063","tiya ","Mr.","moazzam","","moaz_sultan@hotmail.com","+923004408952","Lahore","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1064","sarah ","Mr.","muhammad","tufail","","+923445286885","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1065","tiya ","Mrs.","suman","","s.gandapur@yahoo.com","+923345160843","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1066","tiya ","Ms.","amna","qureshi","","+923312944482","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1067","tiya ","Ms.","amna","qureshi","","+923312944482","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1068","tiya ","Mrs.","munir","","lionusman79@gmail.com","+923312944482","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1069","tiya ","Ms.","rabia","","rabiaakbar20@gmail.com","+923432367236","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1070","tiya ","Ms.","rabia","","rabiaakbar20@gmail.com","+923432367236","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1071","tiya ","Mr.","faisal","","drakhtar@gmail.com","+923107655777","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1072","sarah ","Mr.","abeer","azmat","","+9233699995","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Average","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1073","sarah ","Mr.","m","siddique","","+9233355423","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1074","sarah ","Mrs.","irshad","","","+92123456789","","1 January 1950","No","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1075","sarah ","Mrs.","sabeen","","sabeen.ali5@gmail.com","+923005922797","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1076","sarah ","Mrs.","sidra","","sidratayyab@hotmail.com","+923425330382","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1077","sarah ","Mrs.","haroona","","haroonanas@gmail.com","+923219606991","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1078","sarah ","Mr.","aman","ullah","","+923335123065","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1079","sarah ","","muhammad","haseeb","haseebchandi@hotmail.com","+923365414855","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1080","sarah ","Mr.","asim","","","+923366667048","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1081","sarah ","Mr.","zeeshan","","zarshan.siddiqui@gmail.com","+923332287650","Karachi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1082","sarah ","Mrs.","javeria","","samajid80@yahoo.com","+923213773566","Karachi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1083","sarah ","Mrs.","kamran","","nayabkamran@gmail.com","+923007322884","Multan","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1084","sarah ","Ms.","bakhtawar","","taimorkpk@gmail.com","+923335566000","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Poor","Excellent","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1085","sarah ","Ms.","anum","zahid","osakamooriya@gmail.com","+923088888436","Abbottabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1086","sarah ","Mr.","majid","khan","dodikhan@hotmail.com","+923164144414","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1087","sarah ","Mr.","majid","khan","dodikhan@hotmail.com","+923164144414","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1088","sarah ","Ms.","sehar","jamil","","+923015189202","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1089","sarah ","Ms.","rubab","jamil","","+923015189202","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1090","sarah ","Mr.","muhammad","waseem","","+923336330256","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Average","Excellent","Good","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1091","sarah ","Mr.","ahmad","ali","","+923000886111","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1092","sarah ","Mr.","shahid","mehmood","shahid@shaqurri.com","+92","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1093","sarah ","Mr.","zohaib","akhtar","zaab1991@gmail.com","+923315771207","Rawalpindi","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1094","sarah ","Mr.","junaid","rizwan","","+923005116080","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1095","sarah ","Mr.","torki","","","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1096","sarah ","Mr.","hamza","","hamzaq@gmail.com","+923458552347","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1097","sarah ","Mrs.","","aftab","","+923005211678","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1098","tiya ","Mr.","faizan","arif","faizanniazipk@hotmail.com","+923338057854","Islamabad","1 January 1950","Yes","Facebook",",Ice Cafe,,,Ice Cafe,,,Ice Cafe,,","Good","Good","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1099","tiya ","Mr.","ehsan","","shahzi@hotmail.com","+923350035093","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1100","tiya ","Mr.","najeeb","ullah","shah.barcha8@gmail.com","+923115828489","Islamabad","5 April 1984","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1101","tiya ","Mr.","imad","ul hassan","imad.ul.hassan.6@gmail.com","+923004243515","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1102","tiya ","","sajid","","sajid.azlam@gmail.com","+923345084805","Islamabad","1 January 1950","","Facebook",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1103","tiya ","Mr.","ahmed","","ahmadijaz@yandex.com","+923227760932","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1104","tiya ","Mr.","hamza","","","+92123456789","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1105","tiya ","Ms.","Aiza","Siiddiqui","aizasiddiqui28@icloud.com","+923335571179","Islamabad","28 January 2005","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Poor","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1106","tiya ","Mr.","ijaz","","jutt.ijaz@yahoo.vom","+923217801417","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","","Excellent","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1107","tiya ","Mr.","waseem","","smnabbasi2@hotmail.com","+923005800449","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","","Poor","Average","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1108","tiya ","Mrs.","sidra","","","+92123456789","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1109","tiya ","Mrs.","ameen","","","+92123456789","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Average","Good","Good","Good","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1110","tiya ","Ms.","eleen","salman","","+923000572227","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1111","tiya ","Mr.","umer","chishti","","+923100700007","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1112","tiya ","Ms.","mariam","khwajah","mariamfaridkhwaja@gmail.com","+923235043859","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1113","tiya ","Ms.","saima","saeed","","+923015418499","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1114","tiya ","Mrs.","asma","shaukat","","+923215558621","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1115","tiya ","Mrs.","zunaira","amir","amirpaf@yahoo.com","+923212627253","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1116","tiya ","Mrs.","zunaira","amir","amirpaf@yahoo.com","+923212627253","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1117","tiya ","Ms.","haleema","","","+92123456789","","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1118","tiya ","Mr.","zohaib","","ztahir@aspiresolution.com","+923219553862","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1119","tiya ","Ms.","abduhu","khan","abduhukhan6@gmail.com","+923005013707","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1120","tiya ","","abduhu","khan","abduhukhan6@gmail.com","+923005013707","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1121","tiya ","Mr.","sarim","","","+923018518128","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1122","tiya ","Mr.","m","azhar","azhar.fkm@gmail.com","+923335376115","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1123","tiya ","Mr.","salman","hafeez","salman_iqra@hotmail.com","+923215007270","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1124","tiya ","Mr.","nadir","wasim","nadirwasim@hotmail.com","+923018502357","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1125","tiya ","Mr.","danielle","","","+92123456789","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1126","tiya ","Mr.","hussain","azhar","rahlia.azhar@gmail.com","+923215133588","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1127","tiya ","Mrs.","ayesha","","ayeshaaurangzeb21012@gmail.com","+923215072555","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1128","tiya ","Mr.","ammar","yasir","ammar . yasir78@live.com","+923328547278","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1129","tiya ","Mrs.","fahad","","fariafahad@hotmail.com","+923005551727","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1130","tiya ","Ms.","madiha","","rabiaatta77@gmail.com","+923333505464","Karachi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1131","tiya ","Mrs.","summaiya","","somaya_shah@hotmail.com","+923005018887","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Poor","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1132","tiya ","Mrs.","maryam","","maryamwajid@hotmail.com","+923154488637","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1133","tiya ","Mr.","abdul","mujeeb","","+923324566885","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1134","tiya ","Mr.","saad","ali","","+92123456789","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,","Average","Average","Average","Poor","Poor","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1135","tiya ","Ms.","ayesha","","aisha.javed6@gmail.com","+923357032007","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1136","tiya ","Ms.","ayesha","","aisha.javed6@gmail.com","+923357032007","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1137","tiya ","Mrs.","noreen","","noori42@gmail.com","+923356685466","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1138","tiya ","Mrs.","bilal","","","+923005999985","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1139","tiya ","Mr.","waqas","javed","waqas4060@hotmail.com","+923348637604","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1140","tiya ","Mrs.","zaman","","","+923127075035","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1141","tiya ","Mrs.","zainab","ali akbar","zainab.aliakbar@hotmail.com","+923215817852","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1142","tiya ","Mrs.","zorica","adil","nishaadil99@gmail.com","+923009187694","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1143","tiya ","","faisal","zaman","engrfaisal@hotmail.com","+923009594256","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1144","tiya ","Mr.","faraz","khan","faraz_k2@yahoo.com","+923216525252","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1145","tiya ","Mrs.","najam","","","+923338555545","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1146","tiya ","Mrs.","nadia","shahid","frozenfire40@gmail.com","+923215086263","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1147","tiya ","Ms.","noor","","noor_shine@gmail.com","+923364544447","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1148","tiya ","Mr.","nouman","ahmed","nouman.ah21@hotmail.com","+923006547477","Gujranwala","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Excellent","Excellent","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1149","tiya ","","mati","ur rehman","mati.jutt@gmail.com","+923338333383","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1150","tiya ","Mrs.","sundas","","sundus_shah95@yahoo.com","+923369469758","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1151","tiya ","Ms.","shamaim","","shamaimshah@yahoo.com","+92","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1152","tiya ","","hijaab","","","+92123456789","","1 January 1950","","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1153","tiya ","Ms.","mahnoor","","","+92123456789","","1 January 1950","","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1154","tiya ","Ms.","ayesha","","ayeshamehmood875@gmail.com","+923480003332","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1155","tiya ","Mr.","fahad","khan","","+923000440588","Karachi","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1156","tiya ","Mr.","zeeshan","","zeeshan.tasawar@telenor.com.pk","+923455001446","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1157","tiya ","Mr.","farhan","","farhanshafqat_9457@yahoo.com","+923065221089","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1158","tiya ","Ms.","hina","","hinakanwal04@yahoo.com","+923235199009","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1159","tiya ","Mr.","junaid","","junaid.naseeb@gmail.com","+923123300000","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1160","tiya ","Mr.","m","shehryar","syar79@hotmail.com","+923222200077","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1161","tiya ","Mrs.","saima","saqib","","+923008543943","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1162","tiya ","Mrs.","farooq","","","+923009559576","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1163","tiya ","Mr.","malik","farooq","malik1772@gmail.com","+923359158514","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1164","tiya ","Mr.","mudassir","malik","mudassir.malik@gmail.com","+92345944437","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1165","tiya ","","dr","mehtab","nasirrafiquekhan@gmail.com","+923335658888","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1166","tiya ","Mr.","tahir","wakeel","tahir.wakeel@meshgeartech.com","+923335106670","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1167","tiya ","Ms.","anoushay","daud","hina_shim72@hotmail.com","+92","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1168","tiya ","Mr.","awais","amin","sheikhawaisamin@gmail,.com","+923218111102","gujranwala","1 January 1950","","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1169","tiya ","Mrs.","umer","siraj","mariazulfikar83@yahoo.com","+923237603561","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1170","tiya ","Mrs.","saira","shahid","","+923335535153","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1171","tiya ","Mr.","shahid","ali","","+923145331296","Gujrat","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1172","tiya ","Mrs.","sajawal","","","+923112000220","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1173","tiya ","Mr.","mustsfa","","shahid_kalim@hotmil.com","+923005017333","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1174","tiya ","","muhammad","zehrak","","+923018588988","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1175","tiya ","","muhammad","zehrak","","+923018588988","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone,Ice Cafe,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1176","sarah ","Mr.","asad","raza","","+923337843177","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1177","sarah ","Mr.","zuhayr","","abgeenatraders@gmail.com","+923215367545","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1178","sarah ","Mr.","zuhayr","","abgeenatraders@gmail.com","+923215367545","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1179","sarah ","Mr.","faisal","sheikh","mfaisal_yousaf@yahoo.com","+923215183777","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1180","sarah ","Mr.","m","ikram","mianikran47@gmail.com","+923008520330","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1181","sarah ","Mrs.","aslam","","","+92123456789","Peshawar","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Good","Good","Excellent","","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1182","sarah ","Mrs.","arshia","khan","arshia41@yahoo.com","+923005139145","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1183","sarah ","Mrs.","arshia","khan","arshia41@yahoo.com","+923005139145","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1184","sarah ","Mr.","zahid","mehmood","mehmoodz30@gmail.com","+923009557563","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1185","sarah ","Mrs.","afeefa","salahudin","","+923115958484","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1186","sarah ","Mr.","kashif","mohid","kashif.mueen@gmail.com","+923419608806","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Good","Good","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1187","sarah ","Mrs.","irum","naz","","+923032934442","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1188","sarah ","Mrs.","","ahmar","","+923225147362","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1189","sarah ","Mr.","hafeez","afridi","","+923215365930","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Average","Good","Poor","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1190","tiya ","Ms.","sehrish","","sehrishtariq@gmail.com","+920335991154","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1191","tiya ","Mr.","faisal","ghaus","faisal.ghausa@pk.ey.com","+923362551655","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1192","tiya ","Mrs.","junaid","khan","juaidkhanpta@gmail.com","+923469111111","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1193","tiya ","Mrs.","shandana","","shsndana86@hotmail.com","+923335035464","Abbottabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1194","tiya ","Ms.","noor","","noorza069@gmail.com","+923365817765","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1195","tiya ","Ms.","guncha","khan","","+923326008734","Multan","1 January 1950","Yes","","Ice Skating,,,","Poor","Good","Excellent","Good","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1196","tiya ","Ms.","mehwish","","tkmon48@yahoo.com","+923410571214","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1197","tiya ","Mr.","rizwan","uz zaman","bazrzai@yshoo.com","+923008624444","Multan","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1198","tiya ","Mr.","faheem","zaman","faheemzaman73@gmail.com","+923337892007","Quetta","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1199","tiya ","Ms.","bakhtawar","","bktania0@gmail.com","+923335059516","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1200","tiya ","Mrs.","ehtesham","","","+923365083477","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1201","tiya ","Mr.","zeeshan","","misterzeeshan1@gmail.com","+923333144809","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1202","tiya ","Mr.","ghulam","mujtaba","8555500@gmail.com","+923218555500","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1203","tiya ","Mr.","umer","ali shan","umeralishan108@icloud.com","+92334592370","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1204","tiya ","Mr.","zamair","","chsameer15@yahoo.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1205","tiya ","Mr.","m","akmal","a_b_@rogers.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1206","tiya ","Mr.","m","akmal","a_b_@rogers.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1207","tiya ","Mr.","haider","","","+923414444144","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1208","tiya ","Ms.","anum","","umairshahid123@hotmail.com","+923009727292","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1209","tiya ","Mrs.","Imran","","","+923365200868","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1210","tiya ","Ms.","imran","","","+923365200868","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1211","tiya ","Mr.","sohail","","sohail036@yahoo.com","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1212","tiya ","Mr.","mazhar","","mazhar421@hotmsil.com","+923005858016","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1213","tiya ","Mr.","shahid","","sachaudary@yahoo.com","+923028505050","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1214","tiya ","","tahir","iqbal","tahir153@gmail.com","+923445363663","Islamabad","1 January 1950","","",",,,","","","","Poor","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1215","tiya ","Mr.","dr","ahmed","dr.ahmed1988@ymail.com","+923215807435","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1216","tiya ","Mrs.","umer","","mumerbhutta@gmail.com","+923345499742","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1217","tiya ","Mrs.","mehrunissa","","","+920336482588","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1218","tiya ","Ms.","sundus","sultan","sundussultan19@gmail.com","+923325467147","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1219","tiya ","Mrs.","irum","khan","","+923215295078","Lahore","11 March 1983","No","Friend","Ice Skating,,,","Good","Good","Average","Average","Poor","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1220","tiya ","Mr.","mansoor","","mansoor.javed83@gmail.com","+923335555858","Mansehra","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1221","tiya ","Ms.","rahma","","kindeel@gmail.com","+923345880642","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1222","tiya ","Mrs.","naziha","umar","nazihau@gmail.com","+923009422707","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1223","tiya ","Ms.","geetanjali","","dashingprashant2005@yahoo.co.in","+923025161234","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1224","tiya ","Mr.","sohaib","","sohaibawan92@hotmail.com","+923139787875","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1225","tiya ","Mrs.","shumaila","","","+923335414624","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Average","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1226","tiya ","Mr.","mohsin","","itsmohsins@gmail.com","+923337047372","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1227","tiya ","Mrs.","nadia","amir","mr_akhtar@yahoo.com","+923200777717","Karachi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1228","tiya ","Mrs.","rameez","","","+923455928241","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1229","sarah ","Mr.","Muhammad","sheraz","","+923214333822","Gujranwala","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1230","sarah ","Mr.","shakeel","ahmad","","+923015145690","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1231","tiya ","Mr.","nasir","farooq","nasir.farooq2007a2gmail.com","+923009542683","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1232","tiya ","Mr.","m","hamza","hamzakhalid617@gmail.com","+923361066660","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1233","tiya ","Mr.","nawazish","","","+92304783528","Quetta","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","","Excellent","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1234","tiya ","Ms.","nadia","","diya_khan00@hotmail.vom","+923438546376","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1235","tiya ","Ms.","maryam","","mariamsalman17@gmail.com","+923365148767","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1236","tiya ","Mr.","shayan","naufil","garen2468@gmail.com","+923215564309","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1237","tiya ","","sohaib","saleem","sohaibsaleem@gmail.com","+923335957771","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1238","tiya ","Mr.","haseeb","sultan","","+923155697770","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1239","tiya ","Mr.","mir","vaiz","mirwaisekhan09@gmail.com","+923138111841","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1240","tiya ","Mrs.","aisha","meer","","+923345188786","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1241","tiya ","Mr.","ali","","alibinshan@yahoo.com","+923456333331","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1242","tiya ","Mrs.","khaula","habib","kholahabib84@gmail.com","+923235588588","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1243","tiya ","Mrs.","anwar","","","+92310249815","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Good","Average","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1244","tiya ","Mrs.","imran","","mhrn.imran85@gmail.com","+923315171789","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1245","tiya ","Mr.","sultan","","commerce.trade786@gmail.com","+923217300900","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1246","tiya ","Mrs.","lubna","","sunemclave@yahoo.com","+923335252052","Islamabad","1 January 1950","Yes","Mall Branding",",,Party Hall,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1247","tiya ","Mr.","imran","","imranmalikk@yahoo.com","+923345858585","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1248","tiya ","","ali","","ali_khattak@gmail.com","+923219855454","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1249","tiya ","Mrs.","umer","","","+923216016001","Sargodha","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1250","tiya ","Mr.","sharjeel","barki","shurjeelburki@hotmail.com","+923085059296","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1251","tiya ","Mr.","umer","","omar_jawed@hotmail.com","+923458504405","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1252","tiya ","Mrs.","sehrish","","abdullahshanwari82@gmail.com","+923219122733","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1253","tiya ","Mr.","siraj","kayani","sirajj@gmail.com","+923125038701","gujarkhan","5 March 1994","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1254","tiya ","Ms.","mehek","","mehek.zahid26@gmail.com","+923310383217","Lahore","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1255","sarah ","Mrs.","","osman","","+923028550253","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Average","Average","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1256","sarah ","","","","","+923333556558","iijb","1 January 1950","","",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1257","sarah ","","","","","+923333556558","iijb","1 January 1950","","",",,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1258","sarah ","","","","","+92888888888","ksk","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1259","sarah ","","khalid butt","hhgf","","+928598565599","islo","1 January 1950","No","Friend",",,,","","","Good","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1260","sarah ","","USAMA","ARAIN","","+923335358555","Islamabad","1 January 1950","No","Mall Branding",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1261","sarah ","Mrs.","","naveed","","+923215555051","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Good","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1262","sarah ","Ms.","karen","uchong","","+923233293766","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1263","sarah ","Mr.","shahzain","zaman","","+923215533786","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1264","sarah ","","azbia","ismail","azbiaismail@gmail.com","+920331447748","Islamabad","30 October 1969","No","Friend","Ice Skating,,,","Good","Good","Average","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1265","sarah ","Ms.","naila","","nailaevril2002yahoo.vom","+923365783258","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1266","sarah ","Mr.","shahzeb","","khanzaib@hotmsil.com","+923215752334","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1267","tiya ","Mrs.","sana","anwar","tawakkaly@gmail.com","+923074442422","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1268","tiya ","Mrs.","ritaj","suleman","sulemankarim@hotmail.com","+923215506000","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1269","tiya ","Mr.","mubashir","","mriazkhan@uaar.edu.lk","+923008305334","Islamabad","1 January 1950","Yes","Friend","Ice Skating,Ice Cafe,,","Good","","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1270","tiya ","Mrs.","","zeeshan","","+923235068898","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1271","tiya ","Ms.","hania","imran","","+923465002242","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1272","tiya ","Mr.","aahil","","","+92123456789","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1273","tiya ","Mr.","akshaf","siraj","","+92123456789","Islamabad","28 October 1992","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1274","tiya ","Mrs.","asha","meheryar","ashameheryar@gmail.com","+923215267618","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1275","tiya ","Mrs.","zainab","","yasminniaz143@gmail.com","+923027236367","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1276","tiya ","Ms.","hira","jan","snowy9915@gmail.com","+923459592223","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1277","tiya ","Mr.","azaan","","asmarasheed@gmail.com","+923336962064","Okara","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1278","tiya ","Mrs.","rida","","s.ridaabbas@yahoo.co.uk","+92123456789","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1279","tiya ","Mr.","m","sarwar","","+923434344404","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1280","tiya ","Ms.","bakhtawar","","bakhtawar.salik@gmail.com","+923449229594","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1281","tiya ","Mr.","mustafa","","mustafa_leo14@hotmail.vom","+92308888119","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1282","tiya ","Mr.","shehzad","","sobia.shahdad@hotmail.com","+923214006002","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Good","Average","","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1283","tiya ","Mr.","m","qasim","qasim_uj@hotmail.com","+923009555055","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1284","tiya ","Mr.","abbas","khan","irshadk2@hotmail.com","+923008580784","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1285","tiya ","Mrs.","faisal","","","+923335170555","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1286","tiya ","Mrs.","zulfiqar","","zulfiqaralialvi@gmail.com","+923214374405","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1287","tiya ","Mrs.","moazzam","","hussainmoazzam@yahoo.com","+923005278632","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1288","tiya ","Mrs.","moazzam","","hussainmoazzam@yahoo.com","+923005278632","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1289","tiya ","Ms.","maleeha","","arrehan_72@hotmail.com","+923155320504","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1290","tiya ","Mr.","hasnain","ahmed","hasnainhaider356@gmail.com","+923213903039","Lahore","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1291","tiya ","Mrs.","nabeel","","","+923009487343","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1292","tiya ","Mr.","khayyam","masood","khayyam_masood@hotmail.com","+923075545085","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1293","tiya ","Mrs.","saima","zohaib","","+923465343993","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Average","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1294","tiya ","Ms.","mehreen","","mehreen.mehdi48@gmail.com","+923325085685","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1295","tiya ","Mr.","zaman","","safvi.shikoh@gmail.com","+923360011978","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1296","tiya ","Mrs.","aqeel","","aqeel@aqeeliz.com","+923454120092","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1297","tiya ","Mr.","nabeel","zafar","nabeelzafar@gmail.com","+923454301013","Lahore","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1298","sarah ","Mrs.","ghazal","shakeel","","+923335117999","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Poor","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1299","sarah ","Mrs.","um","fahad","","+920308585377","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1300","sarah ","Mrs.","akbar","shaukat","","+923008506832","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1301","sarah ","Mrs.","faiza","khurram","","+923215820520","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1302","sarah ","Mrs.","ammar","najeeb","","+923215175502","Rawalpindi","1 January 1950","No","Friend",",,,Gaming Zone","Good","Average","Average","Poor","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1303","sarah ","Ms.","aelia","naqvi","","+923455266473","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1304","sarah ","Mrs.","ahsan","","","+923225332665","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1305","sarah ","Mrs.","faheem","","","+923008503363","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1306","sarah ","Mr.","asif","khan","","+923449001233","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1307","sarah ","Mr.","mubarak","","","+923343331899","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1308","sarah ","Mrs.","nusrat","","","+923008564456","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1309","sarah ","Mr.","riazat","","","+923348888652","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1310","sarah ","Mrs.","mariam","","mariam_durrani@hotmsil.vom","+923339111736","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1311","sarah ","Mrs.","kashif","","","+923075502316","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1312","sarah ","Mr.","jamil","","jamil254@hotmail.com","+923008110254","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1313","sarah ","Mr.","naeem","","mna002@gmail.com","+923215373570","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1314","sarah ","Mrs.","khadija","riaz","khadeeja_reyaz@hotmail.co,","+923214023560","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1315","sarah ","Ms.","hamna","","humna.honey.12@gmail.com","+923355864343","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1316","sarah ","Mrs.","saleem","","mahvish.salim@gmail.com","+923005001421","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1317","tiya ","Mr.","abdullah","tariq","abdullahgondal293@gmail.com","+923056163005","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Average","Excellent","Good","Poor","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1318","tiya ","Mr.","shiraz","raja","sheerazraja@hotmail.com","+923335281212","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1319","tiya ","Mrs.","afridi","","","+92123456789","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Average","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1320","tiya ","Mrs.","afridi","","","+92123456789","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Average","Average","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1321","tiya ","Mrs.","faraz","","mahirafaraz@gmail.com","+923008000061","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1322","tiya ","Mr.","mubashir","hassan","mubashersheen77@gmail.com","+923239900060","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Good","Poor","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1323","tiya ","Mr.","tabish","hussain","engrtabish@gmail.com","+923335710035","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1324","tiya ","Mrs.","pinkie","javed","javedsaleem10@gmail.com","+923245027208","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1325","tiya ","Mrs.","saleha","anees","an is. uddin@telenor.com.pk","+923452466171","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1326","tiya ","Mrs.","rafiya","","rafiyanaqeeb@hotmail.com","+923348488881","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1327","tiya ","Mr.","waleed","khalid","waleedkhalid44412@gmail.com","+923215858597","Attock","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Good","Average","Average","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1328","tiya ","Mrs.","owais","khan","","+923335567492","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1329","tiya ","Mrs.","junaid","","","+923335424168","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1330","tiya ","Mrs.","sajeel","","","+923008437123","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Average","Good","Good","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1331","tiya ","Mrs.","dr","asma","dr.asma.riazat@gmail.com","+923348888651","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1332","tiya ","Ms.","hamna","","hamna.khalid009@gmail.com","+923335996764","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1333","tiya ","Mr.","irfan","","","+923335457332","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1334","tiya ","Mrs.","anam","malik","animalik1986@gmail.com","+923218500353","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1335","tiya ","Mr.","ghazanfar","siddiq","siddiqug@gmail.cim","+923015124444","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1336","tiya ","Mrs.","roheena","rafaqat","","+923005208355","Gujrat","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1337","tiya ","Mr.","tahir","iqbal","tahir.iqbal@damcon.com.pk","+923135687590","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Average","Good","Good","Average","Good","Good","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1338","tiya ","Mrs.","farhan","","rominafk@gmail.com","+923008435966","Lahore","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1339","tiya ","Mrs.","fatima","atif","","+923008419874","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1340","tiya ","Mr.","dilshad","ali","dilbalti@yahoo.com","+923335971714","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1341","tiya ","Mrs.","saleha","","sualeharasheeq2@gmail.com","+923215459262","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1342","tiya ","Mrs.","ammara","","ammara.najam@jazz.com.pk","+923008555056","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1343","tiya ","Mrs.","samra","","leena_doll2003@hotmail.com","+923439107426","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1344","tiya ","Mr.","kamran","shah","kamranshah@sarhadgroup.com","+923335566333","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1345","tiya ","Mr.","umair","","shan_shanoo@yahoo.com","+923345307086","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Average","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1346","tiya ","Mr.","rashid","","rashid_jamil@ogdcl.com","+923218585692","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1347","tiya ","Mr.","farzan","","","+923149520000","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Good","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1348","tiya ","Mrs.","irum","hassan","erum_hassan83@hotmail.com","+923319142507","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1349","tiya ","Mr.","arslan","","","+92123456789","Islamabad","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Average","Average","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1350","tiya ","Mrs.","asfandyar","","tabinda.shahid86@GMAIL.COM","+923459140906","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1351","tiya ","Mr.","umair","","labrian_7@live.com","+923459088488","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1352","tiya ","Mrs.","shandana","","","+923365992911","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1353","tiya ","Mr.","faisal","","faysel.kamran@gmail.com","+923145600000","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1354","tiya ","Mr.","basit","","basitmunawsr77@gmail.com","+923235391080","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1355","tiya ","Mr.","atif","","raza.atif@gmail.com","+923005007784","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1356","tiya ","Mrs.","zainab","adnan","zainabadnan13@gmail.com","+923218558854","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1357","tiya ","Mr.","Muhammad","Abdullah","","+923137250999","islamabad","30 December 2010","","Mall Branding",",,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1358","tiya ","Mrs.","munib","","hunaina.munif@yahoo.com","+923145376006","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1359","tiya ","Ms.","sara","imran","","+923239009996","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1360","tiya ","Mr.","ahsan","ali","ahsan.ali.16@gmail.com","+923004016006","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1361","tiya ","Mr.","moosa","bhatti","musa.dastgir@gmail.com","+923214471700","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1362","sarah ","Mr.","mohsin","younas","","+923455041835","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1363","sarah ","Mrs.","hasan","","9","+92333522633","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1364","sarah ","Mrs.","zulfiqar","ali","","+923335147911","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1365","sarah ","Mrs.","anita","haider","","+923329096588","Peshawar","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1366","sarah ","Mr.","hammad","imdiaz","","+923145556444","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1367","sarah ","Mr.","asif","hunaina.munif@yahoo.com","bunainasif131@gmail.com","+92","","1 January 1950","No","",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1368","sarah ","Mrs.","shazia","batool","","+923361595693","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1369","sarah ","Mr.","sherali","bhatti","","+923443911911","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1370","sarah ","Mrs.","kanwal","fahad","","+923226665500","Jhelum","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1371","sarah ","Mrs.","ali","ayaz","","+923005500467","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1372","sarah ","Mrs.","nadia","farruqh","","+923000773778","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1373","sarah ","Mrs.","abbas","","","+923335123555","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Good","Good","Excellent","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1374","sarah ","Ms.","momina","aslam","","+923218503167","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1375","sarah ","Mr.","adnan","","adnan@nasco-av.com","+923215842949","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1376","sarah ","Mr.","ali","","aly78251@gmail.com","+923110999508","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1377","sarah ","Mr.","imran","","imrantax@hotmail.com","+923008526272","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1378","sarah ","Mr.","naveed","","naveed_akhtar@yahoo.com","+923028550454","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1379","sarah ","Mrs.","imran","","mahwishimran27@gmail.com","+923215062118","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Average","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1380","sarah ","Mr.","abdul","qadir","abdokunno@gmail.com","+923116667111","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1381","sarah ","Mrs.","mayguna","","","+923125071017","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1382","sarah ","Mr.","mushfiq","bukhari","","+923275489995","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1383","sarah ","Mr.","aleem","shehzad","","+923107777737","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1384","sarah ","Mr.","aleem","shehzad","","+923107777737","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1385","sarah ","Mrs.","junaid","","","+92333707072","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1386","tiya ","Mrs.","saima","","saima_amin01@hotmail.co.uk","+923018506393","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1387","tiya ","Mr.","ali","","ali_healers@hotmail.com","+923465069996","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1388","tiya ","Mrs.","maryam","sultan","mariamsultn@hotmail.com","+923455486312","Rawalpindi","1 January 1950","Yes","Friend",",Ice Cafe,,","Good","Poor","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1389","tiya ","Mr.","shehzad","","shahzad.shafi@gmail.com","+923215166227","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1390","tiya ","Mrs.","tabassum","rahat","","+923005003040","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1391","tiya ","Mr.","noor","ahmed","noorahmed92@gmail.com","+923215398858","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1392","sarah ","Mr.","sher","afzal","sherafzalkhan@hotmail.com","+923129885539","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1393","sarah ","Mr.","moeed","sheraz","chaudhrymuheed@hotmail.com","+923455700007","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Average","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1394","sarah ","Mr.","moeed","sheraz","chaudhrymuheed@hotmail.com","+923455700007","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Average","Average","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1395","sarah ","Mr.","baqir","","baqir.zaitoon@gmail.com","+923335966633","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1396","sarah ","Mrs.","azka","munir","azkamunir@hotmail.com","+923458480880","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1397","sarah ","Mrs.","ali","","alisalik80@gmail.com","+923218544331","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1398","sarah ","Mrs.","mansoor","","pcapartments@gmail.com","+923005000836","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1399","sarah ","Mrs.","mansoor","","pcapartments@gmail.com","+923005000836","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1400","sarah ","Mrs.","mansoor","","pcapartments@gmail.com","+923005000836","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1401","sarah ","Mr.","dr","badar","","+92123456789","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Average","Poor","Poor","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1402","sarah ","Mr.","azmat","raja","ameerazmatraja@yahoo.com","+923369999995","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1403","sarah ","Ms.","sana","","ssanak@bmail.com","+923215005255","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1404","sarah ","Mr.","nadeem","ali","","+923337231320","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1405","sarah ","Mrs.","hassan","","","+923235444440","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1406","sarah ","","hassan","","","+923235444440","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1407","sarah ","Mrs.","dr","saima","cottontail786@gmail.com","+923329295997","Kohat","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1408","sarah ","Ms.","ayela","","ayelakhanz@gmail.com","+923008587654","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1409","sarah ","Mr.","naeem","bukhari","naeembukhari@yahoo.com","+923455131371","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1410","sarah ","Mr.","khurram","saeed","khurramsaeed1@gmail.com","+923005555131","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1411","sarah ","Mr.","sameed","khan","","+923008505218","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1412","sarah ","Ms.","nighat","","","+923008505218","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1413","sarah ","Ms.","mahnam","zaman","","+923215008009","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Average","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1414","sarah ","Mrs.","sohail","","afza sohail111@gmail.com","+923008589795","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Poor","Excellent","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1415","sarah ","Ms.","ibadat","hashmi","ibadat.hashmi@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1416","sarah ","Mrs.","maham","munib","mahammuneeb2014@gmail.com","+923215526616","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1417","sarah ","Mrs.","muzzamil","","","+923325222522","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1418","sarah ","Ms.","zainab","","syedmehrbanshah@yahoo.com","+923235507044","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1419","sarah ","Ms.","laila","habib","lailahabibiullah@me.com","+923339028368","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1420","sarah ","","huma","adeel","","+92123456789","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1421","sarah ","Mr.","taimoor","","t.ahmedxyz@gmail.com","+923143334422","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1422","tiya ","Mrs.","nageen","","pissoffushitt@gmail.com","+923332518871","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1423","tiya ","Mrs.","javeria","","waseemshujaat@live.com","+923060108898","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Average","Good","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1424","tiya ","Mrs.","hooria","naveed","hooriyanaveed@gmail.vom","+923317962771","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1425","tiya ","Mr.","taimoor","khan","taimoor131@gmail.com","+923452391111","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1426","sarah ","Mrs.","rukhsana","mohsin","","+923337927702","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1427","sarah ","Mrs.","hajra","haqeem","","+923128234520","Quetta","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1428","sarah ","Mrs.","sadia","muneer","","+923009270094","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1429","sarah ","Mr.","fahad","baider","","+920348004764","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Excellent","Good","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1430","sarah ","Mr.","waleed","babar","","+923356564205","Rawalpindi","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1431","sarah ","Mr.","thamer","mansour","tnt-cid@hotmail.com","+92","kuwait","1 January 1950","No","",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1432","sarah ","Mrs.","saima","khan","","+923002405631","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1433","sarah ","Mrs.","numrah","wasim","","+92315826032","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1434","sarah ","Mr.","sofia","koneen","","+920346911111","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1435","sarah ","Mr.","ibrahim","tahir","","+923111234999","Abbottabad","1 January 1950","Yes","Friend","Ice Skating,,,","Average","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1436","sarah ","Mrs.","raja","a","","+923125326344","Islamabad","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1437","sarah ","Mr.","shakeel","ahmad","","+923085098035","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1438","sarah ","","zargo","","","+923335059913","Dera Ismail Khan","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1439","sarah ","Mrs.","uzma","shahid","","+923219043652","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Average","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1440","sarah ","Mrs.","umar","","","+923006127348","Sialkot","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1441","sarah ","Mrs.","umar","","","+923006127348","Sialkot","1 January 1950","Yes","Friend","Ice Skating,,,,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1442","tiya ","","areeba","","","+92123456789","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1443","tiya ","Mrs.","hina","farhan","hynafarhan@gmail.com","+923008333170","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1444","tiya ","Mrs.","laila","abbas","comisb@hotmail.com","+923320939783","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1445","tiya ","Mrs.","adeela","","adeelanarzouq@gmail.com","+923009219066","Lahore","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1446","tiya ","Mrs.","samar","shah","sshah@gmail.com","+923355777242","Abbottabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","Average","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1447","tiya ","Ms.","mahnoor","","mfc2496@gmail.ck","+923235544724","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1448","tiya ","Mrs.","maryam","","maryamhafeez20@yahoo.com","+923247000117","Faisalabad","1 January 1950","Yes","","Ice Skating,,,","Good","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1449","sarah ","","palwasha","khan","","+923315267507","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1450","sarah ","Mrs.","bushra","absar","","+923205585860","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1451","sarah ","Mrs.","nosheen","aslam","","+923212223002","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1452","sarah ","Mrs.","nosheen","aslam","","+923212223002","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1453","sarah ","Mrs.","sumera","majid","","+923009557417","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1454","sarah ","Mr.","basit","ali","","+923349663133","Rawalpindi","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","","Good","","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1455","sarah ","Mr.","Anosh","Khan","","+923208561625","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1456","tiya ","Ms.","sara","","sarah.n.khan@hotmail.com","+92123456789","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1457","tiya ","Ms.","ramsha","khan","ramshameds@hotmail.vom","+92123456789","Peshawar","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Average","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1458","tiya ","Ms.","eman","","","+923165351797","Abbottabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Poor","Poor","Poor","Poor","Poor","Poor","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1459","tiya ","Ms.","tayyaba","","","+923175500649","Abbottabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Good","Excellent","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1460","tiya ","","manahil","","","+923125544433","Abbottabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1461","tiya ","Mrs.","hina","","hinster@Hotmail.com","+923008465118","Lahore","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1462","tiya ","Ms.","rimsl","daniyal","danial.manzoor12@gmail.com","+923365546839","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1463","tiya ","Mrs.","kainat","","","+923335000368","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1464","tiya ","Mr.","iskander","khan","","+92512650805","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1465","sarah ","Mr.","yahya","awan","yahyaawanmail@yahoo.co.uk","+923329457047","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1466","sarah ","Mr.","Wahab","Javed","wahab.javed@hotmail.co.uk","+92321","5440001","24 August 1983","Yes","Mall Branding",",,,","Excellent","Good","Average","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1467","sarah ","Mr.","haider","raza","","+923452122546","Karachi","1 January 1950","No","Friend",",,,Gaming Zone","","Good","Good","Average","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1468","sarah ","Mr.","afaq","ahmed","","+923485762119","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1469","sarah ","Ms.","maryam","","","+92347517421","Rawalpindi","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Average","Average","Average","Average","Average","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1470","sarah ","","Dr Muneer Ahmed Mangrio","","","+920344888733","Islamabad","1 January 1950","No","",",,,Gaming Zone","Good","Good","","Good","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1471","sarah ","Mr.","taimoor","khan","","+923145080000","Islamabad","1 January 1950","No","",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1472","sarah ","Mr.","qasim","abbas","farwa@hotmail.com","+920322678407","Lahore","16 April 2010","No","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1473","sarah ","Ms.","amina","shafqat","amina_shafqat69@hotmail.com","+92","Jhelum","1 January 1950","No","","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1474","sarah ","Mr.","asif","khan","","+923005012638","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1475","sarah ","Mr.","muhsi","khan","","+920333599901","Islamabad","2 September 2000","Yes","",",,,","Average","Excellent","","Poor","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1476","sarah ","","mala","zar","","+923359035342","Islamabad","18 October 1990","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1477","sarah ","Mr.","Ali","Mirza","","+923048234777","Islamabad","1 January 1950","Yes","",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1478","sarah ","Mr.","saboor","khan","","+923003863977","Quetta","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1479","sarah ","","ghanwa","","","+923465911477","Attock","1 January 1950","Yes","Friend",",,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1480","sarah ","Mr.","fahad","gillani","fahadgilani07@icloud.com","+923145555570","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1481","sarah ","Mrs.","tania","","tatzaz@gmail.com","+923005224030","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1482","sarah ","Ms.","serene","jamal","","+923000601010","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1483","sarah ","Mr.","ghulam","murtaza","","+923008202647","Karachi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1484","sarah ","Mr.","raja","hammad","","+92345912222","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Poor","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1485","sarah ","Mr.","kadir","khan","","+923458533344","Islamabad","1 January 1950","No","",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1486","tiya ","Mrs.","shagufta","khan","shaguftaayub@gmail.com","+923005309639","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1487","tiya ","Mr.","riazat","","","+923348888652","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1488","tiya ","Mrs.","aneela","faisal","anila.muhammed@gmail.com","+923343494558","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1489","tiya ","Mrs.","wajid","","sana_wajid87@yahoo.com","+923368503090","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1490","sarah ","Mrs.","anisa","imran","","+923335448480","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Good","Good","Excellent","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1491","sarah ","Mr.","ali","","","+923112262228","gilgit","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1492","sarah ","Mr.","sajid","rasheed","","+923335113242","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Excellent","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1493","tiya ","Mrs.","mayla","babar","humababar@outlook.com","+923215274202","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1494","tiya ","Mr.","babar","","babarmumtaz@outlook.com","+923335664111","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1495","tiya ","Mrs.","nuzhat","abbasi","nuzhatabbasi3@gmail.com","+923015337798","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Good","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1496","tiya ","Mr.","omair","","omairismail@gmaicoml","+923475206997","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Excellent","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1497","tiya ","Mr.","ismail","","","+923325905900","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1498","tiya ","Mr.","waheed","khan","ayansardar2005@gmail.com","+923005689575","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1499","tiya ","Mr.","ehtasham","","ehtisham748@hotmail.com","+923333105456","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1500","tiya ","Mr.","adeel","ahmed","engradeelmir@gmail.ckm","+923009112296","Abbottabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1501","tiya ","Mrs.","dr","shazia","drshaziarehman@hotmail.com","+923005290394","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1502","tiya ","Mrs.","maryam","lodhi","maryam.talha@gmail.com","+923236501000","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1503","tiya ","Ms.","huma","inayat","humainayat2009@yahoo.com","+923215015696","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1504","tiya ","Mrs.","faheem","","","+923337892007","Quetta","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1505","tiya ","Mr.","mughees","","mugheesilyas@live.com","+923235321311","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Average","Good","Good","","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1506","tiya ","Mr.","mughees","","mugheesilyas@live.com","+923235321311","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,,,,","Good","Average","Good","Good","","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1507","tiya ","Mr.","sami","khan","samikhan989@yahoo.com","+923335115599","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1508","tiya ","Mrs.","ali","","rabi_waheed@hotmail.com","+92300555390","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1509","tiya ","Mr.","arham","","gjillani1@hotmail.com","+923435293406","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Poor","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1510","tiya ","Mrs.","ali","","ayesharam@gmail.com","+923218614131","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1511","tiya ","Mr.","nadeem","khawar","nadeem.khawar@hotmail.com","+923215015508","Islamabad","1 January 1950","Yes","Friend",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1512","tiya ","Mr.","sunnan","jahanzaib","chaudharysunny36@gmail.com","+923336106804","Sahiwal","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1513","tiya ","Mrs.","qasim","","","+92123456789","","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1514","tiya ","Mr.","malik","rizwan","","+923339860222","Rawalpindi","1 January 1950","","Facebook",",,,Gaming Zone","Excellent","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1515","tiya ","Mrs.","rabia","","sherazk81@gmail.com","+923005013138","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1516","tiya ","Mrs.","moazzam","","","+923005278632","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Good","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1517","tiya ","Mrs.","awais","","hinaawais@hotmail.com","+923008591101","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1518","tiya ","Mr.","haroon","sheikh","","+923455907946","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Average","Average","Poor","Poor","Good","Good","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1519","tiya ","Mrs.","shorahbeel","","hania_ali@hotmail.com","+923334729709","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1520","tiya ","Mrs.","saleem","","","+923335107670","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1521","tiya ","","sajid","sohail","sajidsohail001@gmail.com","+923335102548","Rawalpindi","1 January 1950","","",",,,","Good","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1522","tiya ","Mr.","dr","sheraz","stareen@hotmail.com","+923009554134","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1523","tiya ","Ms.","shanze","","shanzegillani@ymail.com","+923425553059","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1524","tiya ","Mr.","fahad","raheemi","aman.raheemi@hotmail.com","+923017790009","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1525","tiya ","Mr.","faheem","iqbal","","+923216787570","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1526","tiya ","Mr.","faheem","iqbal","","+923216787570","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,,,,,,,,,,","Good","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1527","tiya ","Mr.","zaheer","","zsq786@gmail.com","+923047950000","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1528","tiya ","Mr.","mehmood","","mehmoodabusadat@yahoo.com","+923013704979","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1529","tiya ","Ms.","zahra","ahmed","zartashakhan20@gmail.com","+923366053706","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1530","tiya ","Mrs.","mehwish","adeel","mehwish.adeel@hotmail.com","+923315679776","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1531","tiya ","Mrs.","nadia","haroon","","+923215190677","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1532","tiya ","Mrs.","ayesha","omer","auotm2010@hotmail.com","+923335941232","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Average","","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1533","tiya ","Ms.","nameer","aurangzeb","nameeraurangzeb@gmail.com","+923435250128","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Average","Good","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1534","tiya ","Mrs.","rahma","","rahmakhayyam@gmail.com","+923335177767","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1535","tiya ","Ms.","hamail","shah","milo.shah2002@gmail.com","+923115491111","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1536","tiya ","Mrs.","hamida","","","+923065089100","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1537","tiya ","Mr.","nasir","khan","","+923015000007","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1538","tiya ","Mrs.","mehtab","","","+923336669848","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1539","tiya ","Ms.","rida","","","+923085490419","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1540","tiya ","Mrs.","madiha","","zoyaskitchen@gmail.com","+923315405557","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1541","tiya ","Mrs.","madiha","","zoyaskitchen@gmail.com","+923315405557","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Good","Average","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1542","tiya ","Mr.","raja","fahad","rajacon@hotmail.com","+923008549955","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1543","tiya ","Mrs.","mariam","","mariyum327@gmail.com","+923335599699","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,","Excellent","Excellent","Excellent","","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1544","tiya ","Mrs.","tahira","irfan","isltahira@yahoo.com","+923009740363","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1545","tiya ","Mrs.","saira","","sairataj@hotmail.com","+923339134946","Rawalpindi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1546","tiya ","Mr.","raja","khawar","rajakhawarali@gmail.com","+923125012525","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1547","sarah ","Mr.","bilal","riaz","","+923005555841","Rawalpindi","1 January 1950","","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1548","sarah ","Mr.","muzammil","munir","boss298@hotmail.com","+923215166240","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1549","sarah ","Mrs.","ali","","ali.mahmud@gmail.com","+923239556561","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1550","sarah ","Mrs.","yasir","","yasirfateh@yahoo.com","+923215822899","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1551","sarah ","Mrs.","hassan","","sarwarhassan@gmail.co,","+923152120988","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1552","sarah ","Mrs.","adeel","","adeelghazali@hotmail.com","+923005555732","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1553","sarah ","Mr.","hassan","yousuf","","+923365645897","Islamabad","1 January 1950","No","Billboard",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1554","sarah ","Mr.","raza","ahmad","","+923002471775","Islamabad","1 January 1950","No","",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1555","sarah ","Mrs.","rizwan","","","+923445815850","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Good","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1556","sarah ","Mrs.","major","ali","","+923422173916","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Good","Good","Excellent","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1557","sarah ","Mr.","rahat","ali shah","","+923009599526","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1558","sarah ","Mr.","junaid","","","+923006864243","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1559","sarah ","Mrs.","rabia","adnan","","+923335731266","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1560","sarah ","","ahmed","rehan","","+923018266034","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1561","sarah ","","baseer","","","+923005902060","Peshawar","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Average","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1562","sarah ","Mr.","mohammad","ibrahim","","+92336555582","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Average","Good","Poor","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1563","sarah ","Mrs.","waseem","afzal","","+923225222500","Attock","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1564","sarah ","Mrs.","farhan","ali","","+923005116337","Rawalpindi","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1565","sarah ","Mr.","sohaib","roomi","","+923339194881","Peshawar","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1566","tiya ","Mr.","abdul","hadi","umerkhakwani@gmail.com","+923005556867","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1567","tiya ","Mrs.","saba","iqbal","saba.rakshi@gmail.com","+923018213285","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1568","tiya ","Mrs.","khadijah","","drkiranfarooq@gmail.com","+923215070969","Rawalpindi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1569","tiya ","Mrs.","aroosh","","noshabm@gmail.com","+923458880063","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1570","tiya ","Mr.","jamil","ahmed","jameelkk04@gmail.com","+923314511740","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1571","tiya ","Mrs.","waseem","","harim.wasim@bh.edu.pk","+923070052138","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1572","tiya ","Mr.","daniyal","","daniyal.azeem@hotmail.com","+923018506393","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1573","tiya ","Mr.","junaid","khattak","laughingcries@yahoo.com","+923435650128","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1574","tiya ","","wajid","ali khan","","+923458799987","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1575","tiya ","Mr.","zarak","","zarak.khan@zong.com.pk","+923149601287","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1576","tiya ","Mrs.","sara","ali","sara_mehmood@hotmail.com","+923135418660","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1577","sarah ","Ms.","hiba","","hebabokhare@gmail.com","+923345657004","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Average","Poor","Average","Poor","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1578","sarah ","Mrs.","nadia","","nadjakarimny@gmail.com","+923003331511","Islamabad","1 January 1950","Yes","Friend",",,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1579","sarah ","Mr.","saqib","mahmood","csaqibm@gmail.com","+923329929786","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1580","sarah ","Mr.","shehryar","ansar","","+923321543630","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1581","sarah ","Mr.","asfandyar","","asfandyar12@hotmail.com","+923218511580","Jhelum","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1582","sarah ","Mrs.","iram","azkar","iramazkar@hotmail.com","+923235988445","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1583","sarah ","Mr.","shahjahan","","shahjahan1453@hotmail.com","+923455009306","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1584","sarah ","Mr.","farhan","shah","farhan_iftekhar09@hotmail.com","+923335176844","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1585","sarah ","Mr.","moosa","","","+923365008447","Swabi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Excellent","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1586","sarah ","Mrs.","hemalata","","hemalatalanghani@gmail.com","+923009552952","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1587","sarah ","Mr.","ijaz","","ijaz1453@yahoo.com","+923455415466","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Good","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1588","sarah ","Mr.","amir","shehzad","amershahzadsabri@gmail.com","+923015161617","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1589","sarah ","Mrs.","tania","","tanyazayna@icloud.com","+923215866666","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Average","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1590","sarah ","Mr.","kamran","asghar","","+923335159918","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1591","sarah ","Mrs.","maria","raja","","+923145003949","Islamabad","1 January 1950","Yes","","Ice Skating,Ice Cafe,,Gaming Zone","Excellent","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1592","sarah ","Mr.","ayleen","hashim","s.komals@gmail.com","+923445111122","Islamabad","8 January 2010","Yes","Mall Branding",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1593","sarah ","Mrs.","farrukh","mobin","","+923009220777","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1594","sarah ","Mr.","ahsan","rehman","","+923325233489","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1595","sarah ","Mr.","abeer","kiani","","+923365074406","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1596","sarah ","Mr.","shafqat","","","+923219001666","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone","Good","Average","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1597","sarah ","Mr.","amin","salman","","+923465975282","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1598","sarah ","Mrs.","asif","khan","","+923138500047","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Poor","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1599","sarah ","Mr.","daniyal","malik","","+923075569323","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1600","sarah ","Mrs.","kasim","","m.m.kasim@gmail.com","+923005007989","Islamabad","1 January 1950","Yes","","Ice Skating,,,Gaming Zone","Excellent","Good","Average","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1601","sarah ","Mr.","ali","shahid","","+923135162525","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Average","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1602","sarah ","Mr.","amir","","","+923215113460","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1603","sarah ","Mr.","amir","","","+923215113460","Islamabad","1 January 1950","No","","Ice Skating,,,Gaming Zone,,,Gaming Zone","Good","Good","Good","Poor","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1604","sarah ","Mr.","zawar","talib","","+923009741891","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1605","sarah ","Ms.","esma","erguvan","","+923028930048","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Excellent","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1606","tiya ","Mr.","ammar","mashood","ammarmashood26@gmail.com","+923355452671","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1607","tiya ","Ms.","sana","gulnawaz","s.gulnawaz@yahoo.com","+923235120866","Gujrat","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1608","tiya ","Ms.","sabawoon","","sabawoonali@gmail.com","+92123456789","Peshawar","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Average","Poor","Excellent","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1609","tiya ","Mr.","murtaza","javed","sn_murtaza@hotmail.com","+923335133369","Islamabad","1 January 1950","","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1610","tiya ","Mrs.","aamir","","raja_kiyani@yahoo.com","+923335145221","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Good","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1611","tiya ","Ms.","esha","mahmud","eshamahmood@icloud.com","+923215554122","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1612","tiya ","Mrs.","ishrat","","","+923337222540","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1613","tiya ","Mrs.","azhar","","shehwarazhar@hotmail.com","+923222979898","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1614","tiya ","Mr.","m","rafique","rafiquek06@gmail.com","+923455559969","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1615","tiya ","Mr.","junaid","","","+923339898852","Peshawar","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1616","tiya ","Mrs.","dr","gul","","+92123456789","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1617","tiya ","Mrs.","amber","","amberniaz@hotmail.com","+923002590436","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1618","tiya ","Mr.","attal","khan","sughrasyed@gmail.com","+923345150307","Mardan","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1619","tiya ","Mrs.","farah","","farahanwarkasi@yahoo.com","+92333782840","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1620","tiya ","Mr.","imran","","","+92123456789","","1 January 1950","No","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1621","tiya ","Mrs.","sajida","","sajida.syeda05@gmail.com","+923555553400","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1622","tiya ","Mr.","anwar","jama shah","ajshunzai@gmail.com","+92311881201","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1623","tiya ","Mr.","anwar","jama shah","ajshunzai@gmail.com","+92311881201","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1624","tiya ","","basit","","","+923044441530","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1625","tiya ","Mrs.","aamir","","","+923215100647","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1626","tiya ","Mrs.","mehmood","","","+92123456789","","1 January 1950","No","Facebook",",,,Gaming Zone","Excellent","Good","Average","","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1627","tiya ","Mrs.","hiba","","","+92123456789","","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Average","Good","Good","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1628","tiya ","Mrs.","noor","","noorkhan1992@live.com","+923345552896","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1629","tiya ","Mrs.","haider","bukhari","","+923228501656","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1630","tiya ","Mr.","naqaab","ahmed","","+923018532654","Swat","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1631","tiya ","Mrs.","meena","","meenakhakwani@yahoo.com","+923229812628","Dera Ismail Khan","1 January 1950","Yes","",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1632","tiya ","Mrs.","meher","sohail","","+923248234473","Karachi","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1633","tiya ","Ms.","hafsa","","ghinazeef@gmail.com","+923355866939","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1634","tiya ","Mr.","khan","","","+923329991887","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1635","tiya ","Mrs.","shawana","","shawanaafridi81@gmail.com","+92123456789","Peshawar","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1636","tiya ","Mrs.","sana","hassan","sanakhalid58@gmail.com","+923202200127","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Poor","Poor","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1637","tiya ","Mr.","farhan","","qazi farhan.cr@hotmail.com","+923340079332","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1638","tiya ","Mr.","ghulam","dastageer","hellodastageer@gmail.com","+923335111469","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1639","tiya ","Mrs.","mehreen","jahanzeb","manisays@gmail.com","+923316959902","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1640","tiya ","Mrs.","kiran","","ciranmalik@gmsil.com","+923008558230","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1641","tiya ","Ms.","kanwal","abbasi","anny_zeus@yahoo.com","+923315221570","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1642","tiya ","Mrs.","faiza","wajid","","+923455381019","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1643","sarah ","Mrs.","zeeshan","","","+923335100036","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1644","sarah ","Ms.","simone","khan","","+927514555014","Leads","1 January 1950","No","Friend","Ice Skating,,,Gaming Zone","Excellent","Good","","Excellent","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1645","tiya ","Mrs.","irnam","","malik. irnam@yahoo.com","+923008564329","Rawalpindi","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1646","tiya ","Mrs.","irnam","","malik. irnam@yahoo.com","+923008564329","Rawalpindi","1 January 1950","Yes","Mall Branding",",Ice Cafe,,,Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1647","tiya ","Mr.","usman","","","+923455111705","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Average","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1648","tiya ","Mr.","asad","","asadali9500@gmail.com","+923235243808","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1649","tiya ","Mr.","sultan","","sultanzeb90@gmsil.com","+923329245161","Peshawar","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1650","sarah ","Mrs.","beena","","pink.88yousafzai@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1651","sarah ","Mrs.","farrukh","","mrsfarrukh1@gmail.com","+923078888360","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","","Good","Poor","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1652","sarah ","Mrs.","sana","","sana.afraz.khan@gmail.com","+923334537773","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1653","sarah ","Mr.","wasiq","riaz","","+923169039403","Attock","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Poor","Excellent","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1654","sarah ","Mrs.","ayesha","","ayeshajee@gmail.com","+923334255549","Lahore","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1655","sarah ","Mr.","imdad","","imdadshaikh789@yahoo.com","+923332249802","Karachi","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1656","sarah ","Mrs.","sardar","","","+923224779870","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1657","sarah ","Ms.","nehala","","","+923365013094","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Poor","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1658","sarah ","Ms.","ayesha","","ayeshaakhaliq@gmail.com","+923315403454","Rawalpindi","1 January 1950","","Friend","Ice Skating,,,","Good","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1659","sarah ","Ms.","masooma","","mz.miyan9@gmail.com","+923335188914","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1660","sarah ","Ms.","maria","sajjad","","+923455886396","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Average","Good","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1661","sarah ","Ms.","arooba","safdar","","+923431505711","Islamabad","1 January 1950","No","Facebook","Ice Skating,,,Gaming Zone","Poor","Poor","Poor","Poor","Poor","Poor","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1662","sarah ","Mrs.","uzma","khan","","+923345088513","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone,,,Gaming Zone","Good","Good","Good","Poor","Average","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1663","sarah ","Mrs.","sadaf","ali","","+923005888973","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1664","sarah ","Mrs.","rida","faisal","q1qw1qaa+@+qa1@+#1+q@++++1+1++++++++++1++++++++2++++++++++++++","+923232840872","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Excellent","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1665","sarah ","Ms.","mahnoor","saleem","","+923215288728","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1666","tiya ","","aleena","","","+923315848288","Islamabad","1 January 1950","","Mall Branding",",,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1667","tiya ","Mrs.","aamir","","sharmeenhassan@hotmail.com","+923213332222","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Good","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1668","tiya ","Mr.","saad","liaquat","saadliaquat@gmail.com","+923231585256","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1669","tiya ","Mr.","sajid","","sajidisrar@hotmail.com","+923024080807","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1670","tiya ","Mr.","sajid","","sajidisrar@hotmail.com","+923024080807","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone,,,Gaming Zone","Good","Average","Average","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1671","tiya ","Mrs.","aleena","","aleena_mba@yahoo.com","+923335572761","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1672","tiya ","Mrs.","jahangir","","","+923215093738","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1673","tiya ","Mr.","javed","","ramay76@gmail.com","+923215172421","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Average","Poor","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1674","tiya ","Ms.","yeliz","kurt","yeliz35@hotmail.com","+923823915254","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","","Good","","","Good","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1675","tiya ","Ms.","asna","","","+923335100019","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1676","tiya ","Mrs.","hammad","","snaz_ali@hotmail.com","+923455197717","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1677","tiya ","Mrs.","aadiya","","aadiyaasghar2012@gmail.vom","+923348569255","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Average","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1678","tiya ","Mrs.","syeda","amna","amna.arsalan@hotmail.com","+923345160291","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Average","Average","Average","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1679","tiya ","Mr.","dost","mohammad","do stain. zagar@yahoo,com","+923354866699","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1680","tiya ","Mrs.","kiran","","kiran@laraibgroup.com","+923005552408","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Excellent","Good","Average","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1681","tiya ","Mrs.","dr","mahwish","drmahwashmengal@gmail.com","+923325554217","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1682","tiya ","Mrs.","shakeela","","shakila48@hotmail.vom","+923005544067","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1683","tiya ","Mrs.","sanaullah","","","+923335366073","Rawalpindi","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1684","tiya ","Ms.","malaika","mishaal","malaikazaka549@gmail.com","+92123456789","Islamabad","1 January 1950","","Mall Branding","Ice Skating,,,","Good","Excellent","Excellent","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1685","tiya ","Mr.","m","bilal","latifnawaz80@gmail.com","+923333333633","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1686","tiya ","Mr.","raja","tahir","advrajatahir@gmail.com","+923215526211","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1687","tiya ","Mrs.","mazhar","","mazhar.undp@hotmail.com","+92322517453","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Good","Good","Average","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1688","tiya ","Mr.","nurzhenis","","nurzhenis_b@mail.ru","+923073338745","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1689","sarah ","Mrs.","Ahsan","","ahsan.ali16@gmail.com","+923004016006","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1690","sarah ","Ms.","rabiya","","rabbiyakaleem1995@gmail.com","+923224464940","Lahore","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1691","sarah ","Mr.","salman","","maryamanwar23@gmail.com","+923028566277","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1692","sarah ","Mrs.","faiza","javed","faizajaved@gmail.com","+923345344640","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Good","Average","Good","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1693","sarah ","Mr.","azhar","","","+923008520327","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Poor","Poor","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1694","sarah ","Mr.","rehan","","rehanabbasi@live.com","+923445536750","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1695","sarah ","Ms.","anum","sajid","anam94@live.com","+92321429956","Lahore","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1696","sarah ","Ms.","sumbal","","sumbalrajpoot995@yahoo.com","+923335624605","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Good","","Excellent","Good","Good","","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1697","sarah ","Mrs.","tazeen","","shariqrazeen@gmail.com","+923215857990","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,,,,","Good","Average","Good","Average","Excellent","Average","Average","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1698","sarah ","Ms.","haya","","farzana_5@hotmail.com","+923339857324","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1699","sarah ","Mr.","tharanga","","tranasinghe@gmail.com","+923365592453","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1700","sarah ","Mr.","sohail","","","+923325506123","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Excellent","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1701","sarah ","","sohail","","","+923325506123","Islamabad","1 January 1950","","",",,,","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1702","sarah ","Mr.","shahbax","","","+923008699993","Lahore","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Good","Average","","Excellent","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1703","sarah ","Mrs.","fozia","tahir","","+923228446761","Islamabad","1 January 1950","No","Mall Branding",",Ice Cafe,,Gaming Zone","","Average","Good","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1704","sarah ","Mr.","khurshid","achakzai","","+923342426402","Quetta","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1705","sarah ","Mr.","rizwan","ullah","","+923215033313","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1706","sarah ","Mrs.","aashir","mehmood","","+923009565300","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Excellent","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1707","sarah ","Mr.","khayal","mohammad","","+923008111006","Abbottabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1708","sarah ","Mrs.","aftab","awan","","+923155559555","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1709","sarah ","Mrs.","aftab","malik","","+923005213898","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1710","sarah ","Mr.","asif","javaid","","+923218411417","Lahore","1 January 1950","Yes","Friend","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1711","sarah ","Mr.","shoaib","niaz","","+923165096062","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1712","sarah ","Mrs.","ahsan","zafar","","+923005122381","Rawalpindi","1 January 1950","No","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1713","sarah ","Mrs.","mehwish","haroon","","+923009107263","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1714","sarah ","Mr.","syed","nooridin","","+923108820258","Islamabad","1 January 1950","No","","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1715","tiya ","Mr.","dr","zulfiqar","zaks_257@yahoo.com","+923335147911","Rawalpindi","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1716","tiya ","Mr.","zamarak","","combatfit@hotmail.com","+923436000258","Quetta","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1717","tiya ","Mrs.","saud","","zainabnaeem@gmail.com","+923215357582","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Excellent","Excellent","Excellent","Poor","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1718","tiya ","Mr.","abdul","waheed","awaheedrashid@hotmail.com","+923212679900","Rawalpindi","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Average","Poor","Poor","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1719","tiya ","Mr.","bilal","","","+9212345678","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1720","tiya ","Mrs.","bilal","","","+923008309000","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1721","tiya ","Mrs.","zufishan","ali","zufishan@gmail.com","+923005007910","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1722","tiya ","Mrs.","asma","","aasmamamoon@gmail.com","+923365454008","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Average","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1723","tiya ","Mr.","afzaal","shah","syedafzalhussain@yahoo.com","+923345205789","Quetta","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1724","tiya ","Mrs.","hina","","hinaumer@hotmail.com","+923214048026","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Average","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1725","tiya ","Mrs.","natasha","malik","natasha.anjum@gmail.com","+923334235729","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1726","tiya ","Mrs.","rawia","","rawiaasif@hotmail.com","+923005928759","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1727","tiya ","Mrs.","shezina","","shezinapatel@gmail.com","+923213314491","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1728","tiya ","Mrs.","waseem","ashraf","","+923008549242","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1729","tiya ","Mr.","asif","","","+923215182050","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1730","tiya ","Mr.","ahmed","bilal","ahmedbilalashraf@yahoo.com","+923215661968","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1731","tiya ","Mr.","haroon","","daudharoon@yahoo.com","+923008151113","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1732","tiya ","Mr.","shahmeer","","sebcod@icloud.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Good","Excellent","Poor","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1733","tiya ","Mr.","moeez","ali","sairusali@gmail.com","+92307602874","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1734","tiya ","Mrs.","sadia","waqar","sadia_khaliq@yahoo.com","+923235696542","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Good","Average","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1735","tiya ","Mrs.","sana","","raja_waqas@hotmail.com","+923360000183","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1736","tiya ","Mr.","abid","khan","khanabidarbab@gmail.com","+923008554444","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Average","Average","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1737","tiya ","Mr.","atif","","atifiq@gmail.com","+923215563691","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Average","Poor","Average","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1738","tiya ","Mr.","yawar","","","+923439779777","Islamabad","1 January 1950","Yes","Facebook","Ice Skating,,,","Excellent","Good","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1739","tiya ","Ms.","sundas","asif","sundus.asif@hotmail.com","+923354535337","Rawalpindi","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Good","Excellent","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1740","tiya ","Mrs.","shehla","amir","shahlaamir43@gmail.com","+923345557885","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1741","tiya ","Mrs.","tayyab","","silentdesertrose@hotmail.com","+923234100503","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1742","sarah ","Mr.","usman","","usman103@hotmail.com","+923015000891","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1743","sarah ","Mrs.","giloona","","guloonaajmal@gmail.com","+92336939994","Peshawar","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1744","sarah ","Mrs.","irum","kamran","irumkamran1@gmail.com","+923008501747","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Excellent","Excellent","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1745","sarah ","Mr.","azam","","hiazam@gmail.com","+923335400051","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1746","sarah ","Mr.","umer","","","+923075556666","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1747","sarah ","Mr.","adnan","","adnanch341@gmail.com","+923435750256","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1748","sarah ","Mr.","khayyam","","khayyamhamid@gmail.com","+923334514143","Jhelum","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1749","sarah ","Mr.","m","karim","","+923003770000","Quetta","1 January 1950","Yes","Friend",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1750","sarah ","Mr.","asfandyar","","asfan87@hotmail.com","+923219590595","Peshawar","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Average","Excellent","Excellent","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1751","sarah ","Mr.","mansoor","","fitdiction@gmail.com","+923335355009","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1752","sarah ","Mrs.","mehreen","","mehreenahmad2008@gmail.com","+923335557973","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Average","Good","Excellent","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1753","sarah ","Mr.","khurram","qureshi","khurram_qureshi@hotmail.com","+923335034805","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1754","sarah ","Ms.","mahnoor","","","+92123456789","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Average","Excellent","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1755","sarah ","","","","","+923238545109","","1 January 1950","","",",,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1756","sarah ","","","","","+923055082774","","1 January 1950","","",",,,","Poor","Poor","Poor","Poor","Poor","Poor","Poor","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1757","sarah ","Mr.","ghani","","grbangash@gmail.com","+923458507152","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1758","sarah ","Mrs.","sadaf","","sadafanwer@yahoo.com","+923013949317","Islamabad","1 January 1950","Yes","Facebook",",,,Gaming Zone","Good","Good","Excellent","Good","Good","Good","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1759","sarah ","Mrs.","huma","shahat","humashahat@gmail.vom","+923345381098","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1760","sarah ","Mr.","ehsan","baloch","","+923331311333","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Poor","","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1761","sarah ","Mrs.","komal","bakhtawari","","+923215257555","Islamabad","1 January 1950","No","Mall Branding",",,,Gaming Zone","Good","Good","Average","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1762","sarah ","Mrs.","mussawer","shazad","","+923335445742","Rawalpindi","1 January 1950","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1763","sarah ","Mr.","dr","asad","","+923459555556","Mirpur","1 January 1950","No","Friend","Ice Skating,,,","Average","Good","Good","Average","Good","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1764","sarah ","Mr.","affan","kakar","","+923324445069","Islamabad","1 January 1950","Yes","Friend",",,,Gaming Zone","Good","Excellent","Excellent","Excellent","","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1765","sarah ","Mr.","shahid","sardar","","+923335123809","Islamabad","1 January 1950","No","Friend",",,,Gaming Zone","Excellent","Average","Poor","Poor","Good","Excellent","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1766","sarah ","Mrs.","umaara","afridi","","+923235568318","Rawalpindi","1 January 1950","Yes","Mall Branding","Ice Skating,,,Gaming Zone","Good","Good","Good","Poor","Average","Average","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1767","sarah ","","","","","+928856987756","","1 January 1950","","",",,,Gaming Zone","","","","","","","","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1768","sarah ","Mr.","mohammad","danish","muhammaddanish.909@gmail.com","+923455169994","Islamabad","22 June 1993","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1769","tiya ","Mr.","m","bin yaqub","mughalalways@yahoo.com","+923145300065","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Average","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1770","tiya ","Ms.","ayesha","","isha_nisar@yahoo.com","+923035552534","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Good","Average","Excellent","Good","Poor","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1771","tiya ","Ms.","mariam","","mariamamna90@gmail.com","+923315573042","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Poor","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1772","tiya ","Ms.","mariam","","mariamamna90@gmail.com","+923315573042","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,,,,","Good","Good","Good","Average","Average","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1773","tiya ","Ms.","ayesha","","shamszeb123@gmail.com","+923331882740","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Good","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1774","tiya ","Mr.","m","zubair","zubair_khan_awan@yahoo.com","+923333797333","Islamabad","1 January 1950","Yes","Mall Branding",",Ice Cafe,,","Excellent","Excellent","Excellent","Average","Excellent","Excellent","Excellent","0000-00-00","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1800","tiya ","Mrs.","sukaina","","","+923362822833","Karachi","1 January 1950","Yes","Facebook","Ice Skating,,,","Good","Good","Good","Good","Good","Good","Excellent","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1799","tiya ","Mrs.","tayyab","","tayyab@halkar.com","+923005792769","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1795","tiya ","Ms.","kashmala","","kashmalakhan_96@gmail.com","+923340777707","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Poor","Poor","Poor","Average","Average","Good","Good","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1794","sarah ","Mr.","hashir","","","+923337778889","","1 January 1950","","","Ice Skating, Party Hall","","","","","","","","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1793","tiya ","Mr.","haseeb","khan","haseebaftabkhan19@gmail.com","+923359589996","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1784","sarah ","Ms.","bakhtawar","mumtaz","","+923463047777","Abbottabad","25 February 1995","Yes","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1785","sarah ","Mrs.","amjad","","","+924375716676","Islamabad","21 February 1960","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Poor","Average","Excellent","Good","Excellent","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1786","sarah ","Mrs.","noman","arshad","","+923115268645","Islamabad","18 December 1987","No","Mall Branding",",,,Gaming Zone","Excellent","Excellent","Good","Good","Excellent","Excellent","Excellent","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1787","sarah ","Mr.","muzammil","abbas","","+923425394616","Islamabad","29 September 1992","No","Mall Branding",",,,Gaming Zone","Excellent","Good","Good","Average","Good","Excellent","Excellent","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1788","sarah ","Mr.","shaheer","ammad","","+923441101199","Rawalpindi","5 May 1997","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Good","Good","Good","Good","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1789","sarah ","Ms.","sonia","mangi","","+92306002170","Karachi","17 January 1996","No","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Good","Excellent","Good","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1790","sarah ","Mr.","akbar","khan","","+923469698022","Islamabad","1 January 1950","No","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","2017-01-31","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1798","tiya ","Mrs.","hannan","","mk89maleehahannan@gmail.com","+923331935605","Islamabad","1 January 1950","Yes","Mall Branding",",,,Gaming Zone","Good","Good","Good","Average","Excellent","Excellent","Excellent","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1801","tiya ","Ms.","maria","","","+923168828483","Mansehra","1 January 1950","Yes","Friend","Ice Skating,,,","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","Excellent","2017-02-01","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1806","tiya ","Ms.","maamoor","","","+923225006333","Islamabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Average","Good","Good","Good","2017-02-02","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1805","tiya ","Mr.","jahanzeb","","nasar.jahanzaib@gmail.com","+92123456789","Islamabad","1 January 1950","Yes","Mall Branding","Ice Skating,,,","Excellent","Excellent","Excellent","Good","Excellent","Excellent","Excellent","2017-02-02","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1807","tiya ","Ms.","khoula","afridi","khawlaafridi@gmail.com","+923219700039","Abbottabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Excellent","Average","Excellent","Good","Excellent","2017-02-02","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1808","tiya ","Ms.","zuha","","","+923000500497","Abbottabad","1 January 1950","Yes","Friend","Ice Skating,,,","Good","Excellent","Good","Good","Excellent","Excellent","Excellent","2017-02-02","0000-00-00 00:00:00");
INSERT INTO `customer_feedback` VALUES("1809"," ","","","","","","","","","","","","","","","","","","2017-05-26","");



DROP TABLE IF EXISTS `cv_contact_info`;

CREATE TABLE `cv_contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `mob_no` varchar(300) DEFAULT NULL,
  `alternate_mobile_no` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `picture_url` varchar(500) DEFAULT 'http://via.placeholder.com/150x150',
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO `cv_contact_info` VALUES("2","hashir","javed","islamabad","","","bc@gmail.com","75","http://jobs360.com.pk/uploads/users_profile_pic/75.jpg","male","23","2 year");
INSERT INTO `cv_contact_info` VALUES("3","Muhammad","Nouman",NULL,"0334958802","","mnauman1994@gmail.com","32","http://jobs360.com.pk/uploads/users_profile_pic/32.jpg","male","24","4 year");
INSERT INTO `cv_contact_info` VALUES("4","Faizan ","Asgar ",NULL,"03333650909","03333650909","faizan_leo@yahoo.com","168","http://www.jobs360.com.pk/uploads/users_profile_pic/168.jpg","male","30","3 Year");
INSERT INTO `cv_contact_info` VALUES("5","Muhammad","Salman",NULL,"03337279470","","salmanjumani@outlook.com","169","http://www.jobs360.com.pk/uploads/users_profile_pic/169.jpg","male","29","");
INSERT INTO `cv_contact_info` VALUES("6","noor","muhammad",NULL,"03335468526","03139765034","noor@gmail.com","171","http://localhost/job360sep9/uploads/users_profile_pic/171.jpg","male","25","");
INSERT INTO `cv_contact_info` VALUES("14","shahid","zaman","lahore","7766666","0988888","skzaman630@gmail.com","207","http://www.jobs360.com.pk/uploads/user_image/user_206.jpg","Male","30","3 Year");
INSERT INTO `cv_contact_info` VALUES("15","saad","khan","islamabad","03135698765","0333547688","saadkhan7070@yahoo.com","206","http://www.jobs360.com.pk/uploads/user_image/user_207.jpg","Male","25","2 Year");
INSERT INTO `cv_contact_info` VALUES("16","Mohammad","Hanif","Peshawar","92913005942576","92915253988","hanif_exec@yahoo.com","209","http://www.jobs360.com.pk/uploads/user_image/user_210.JPG","Male","59","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("17","Jamsded","Zia","Islamabad","03215123456","","jugnu22@hotmail.com","208","http://via.placeholder.com/150x150","Male","37","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("18","Arjumund","Shaikh","ISLAMABAD","923008552729","923008552729","aktspk@gmail.com","210","http://via.placeholder.com/150x150","Male","78","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("19","Ather","Butt","Rawalpindi","03215009819","03335712737","atherbutt82@hotmail.com","211","http://www.jobs360.com.pk/uploads/user_image/Ather_J_Butt.docx","Male","36","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("20","Muhammad Ahsen","Qazi",NULL,"03001234567","0515512321","qaziahsen@yahoo.co.uk","220","http://via.placeholder.com/150x150","male","34","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("21","Abdul","Rehman",NULL,"03042105101","02132364209","rehmanweb@gmail.com","221","http://www.jobs360.com.pk/uploads/user_image/user_222.jpg","male","25","1 Year");
INSERT INTO `cv_contact_info` VALUES("22","Awon","Ali","Rawalpindi","03369764317","","awonali@rocketmail.com","223","","Male","22","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("23","shahid","zaman","Islamabad","3128336622","3128336622","skzaman630@gmail.com","234","http://www.jobs360.com.pk/uploads/user_image/user_235.png","Male","22","2 Year");
INSERT INTO `cv_contact_info` VALUES("24",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("25",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("26",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("27",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("28",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("29",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("30",NULL,NULL,"Abbottabad","8888888888888888888888","8888888888888888888",NULL,"235","http://www.jobs360.com.pk/uploads/user_image/user_237.png","Male","28","3 Year");
INSERT INTO `cv_contact_info` VALUES("31","shahid","khan","KARACHI","9898","89898","skzaman630@gmail.com","236","http://www.jobs360.com.pk/uploads/user_image/user_238.jpg","Male","20","1 Year");
INSERT INTO `cv_contact_info` VALUES("32","Muhammad","Ahsan","islamabad","03135698765","0333547688","Ahsenqazi@yahoo.com","237","http://www.jobs360.com.pk/uploads/user_image/user_238.jpg","Male","40","2 Year");
INSERT INTO `cv_contact_info` VALUES("33","mmuhammad","Noman khan",NULL,"03114404474","","M.nomankhan23@gmail.com","172","http://www.jobs360.com.pk/uploads/users_profile_pic/172.jpg","male","26","");
INSERT INTO `cv_contact_info` VALUES("34","shahid","zaman","Islamabad","3128336622","3128336622","skzaman630@gmail.com","243","http://www.jobs360.com.pk/uploads/user_image/user_244.jpg","Male","27","1 Year");
INSERT INTO `cv_contact_info` VALUES("35","faiza","minhas",NULL,"03350524022","0515122796","faizaminhas09@gmail.com","245","http://via.placeholder.com/150x150","female","24","2 Year");
INSERT INTO `cv_contact_info` VALUES("36","Mujib","Rehman",NULL,"03218285788","","mujibpia@gmail.com","252","http://www.jobs360.com.pk/uploads/user_image/user_253.jpg","male","59","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("37","Usman","Muhammad",NULL,"00923008732431","00923339000431","u.aliz29@gmail.com","255","http://www.jobs360.com.pk/uploads/user_image/user_257.jpg","male","31","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("38","shahid","zaman",NULL,"03128336622",NULL,"adarvaish0@gmail.com","247","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-13-40.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("39","Usman","Testing",NULL,"+931234567",NULL,"Usman.testing.email@gmail.com","257","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-30-32.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("40","Haider","Ali",NULL,"+93123456",NULL,"haider@gmail.com","258","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-31-24.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("41","shahid","zaman",NULL,"03128336622",NULL,"adarvaish0@gmail.com","247","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-44-11.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("42","shahid","zaman",NULL,"03128336622",NULL,"adarvaish0@gmail.com","247","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-44-27.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("43","shahid","zaman",NULL,"03128336622",NULL,"skzamanw6skmk30@gmail.com","259","http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-44-39.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("44","jobs360","Ltd",NULL,"03123333333","03021234567","jobs360.pvt.ltd@gmail.com","261","http://via.placeholder.com/150x150","male","26","2 Year");
INSERT INTO `cv_contact_info` VALUES("45","Jobs","user","islamabad","03363603603","03363603603","info@jobs360.com.pk","278","http://www.jobs360.com.pk/uploads/user_image/user_280.jpg","Male","26","1 Year");
INSERT INTO `cv_contact_info` VALUES("46","shahid","khan","Islamabad","9989989","09888777778","skzaman630@gmail.com","280","http://www.jobs360.com.pk/uploads/user_image/user_282.jpg","Male","27","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("47","shahid","zaman",NULL,"03128336622",NULL,"adarvaish0@gmail.com","247","http://www.jobs360.com.pk/uploads/users_profile_pic/09-12-2017-09-19-51.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("48","Akbar","ali","Rawalpindi","03350248322","0512323147","jobs360360@outlook.com","285","http://www.jobs360.com.pk/uploads/user_image/user_286.jpg","Male","24","2 Year");
INSERT INTO `cv_contact_info` VALUES("49","Anila ","Raja",NULL,"03315078660","","anilaraja1995@gmail.com","265","http://via.placeholder.com/150x150","female","22","3 Year");
INSERT INTO `cv_contact_info` VALUES("50","faiza","minhas","rawalpindi ","03311234567","0511234567","faizaminhas_7@live.com","241","http://via.placeholder.com/150x150","Female","22","1 Year");
INSERT INTO `cv_contact_info` VALUES("51","Waqas","Ali","Islamabad","03315375841","03315375841","waqasali9932@gmail.com","290","http://via.placeholder.com/150x150","Male","24","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("52","rehan","ali",NULL,"+931234567",NULL,"Adarvaish0@gmail.com","247","http://www.jobs360.com.pk/uploads/users_profile_pic/26-12-2017-08-33-32.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("53","Muhammad","Noman",NULL,"+920311440447",NULL,"m.nomankhan23@gmail.com","172","http://www.jobs360.com.pk/uploads/users_profile_pic/11-01-2018-06-58-15.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("54","Jahanzeb ","Khan","Islamabad","03325194449","03325194449","jkniazi0123@gmail.com","293","http://via.placeholder.com/150x150","Male","27","1 Year");
INSERT INTO `cv_contact_info` VALUES("55","Awon","Ali",NULL,"876565555555555","555555555555555555","awonali14@gmail.com","295",NULL,"male","22","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("56","Adnan","Bhatti",NULL,"03224446406","03224446406","creativediziner@gmail.com","296","http://via.placeholder.com/150x150","male","35","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("57","ADNAN ","AHMAD","Mardan","03055094450","03055094450","Idnam75@yahoo.com","299","http://www.jobs360.com.pk/uploads/user_image/JPEG_20171007_125056_1184848777.jpg","Male","25","< 1 Year");
INSERT INTO `cv_contact_info` VALUES("58","Shahid ","Zameer ","Islamabad","923052102737","92518438064","shahidzameer27@gmail.com","302","http://www.jobs360.com.pk/uploads/user_image/user_303.gif","Male","24","3 Year");
INSERT INTO `cv_contact_info` VALUES("59","Iqra","Khan",NULL,"03332622899","03332622899","khan_iqra6747@yahoo.com","304","http://via.placeholder.com/150x150","female","24","1 Year");
INSERT INTO `cv_contact_info` VALUES("60","Henna","Jalil","Jeddah","00966547341834","00966547341834","hennamir@hotmail.com","305","http://via.placeholder.com/150x150","Female","33","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("61","chelsea","hansen",NULL,"+17078451283",NULL,"chelseaahansen457@gmail.com","306","http://www.jobs360.com.pk/uploads/users_profile_pic/06-02-2018-12-25-29.png","female",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("62","chelsea","hansen",NULL,"+17078451283",NULL,"chelseaahansen457@gmail.com","306","http://www.jobs360.com.pk/uploads/users_profile_pic/06-02-2018-12-26-27.png","female",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("63","Muhammad","Anwar",NULL,"+923005182721",NULL,"manwar917@yahoo.com","307","http://www.jobs360.com.pk/uploads/users_profile_pic/09-02-2018-02-59-51.png","male",NULL,NULL);
INSERT INTO `cv_contact_info` VALUES("64","  Nauman  Ahmad  ","Ahmad ",NULL,"03361103230","03361103230","nomimit@yahoo.com","309","http://via.placeholder.com/150x150","male","35","> 5 Year");
INSERT INTO `cv_contact_info` VALUES("65","Samya","Kashif",NULL,"03005500775","03155229690","samyakashif@gmail.com","310","http://www.jobs360.com.pk/uploads/user_image/user_311.jpg","female","37","> 5 Year");



DROP TABLE IF EXISTS `cv_education`;

CREATE TABLE `cv_education` (
  `cv_education_id` int(11) NOT NULL AUTO_INCREMENT,
  `starting_date` varchar(300) NOT NULL,
  `ending_date` varchar(300) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `board` varchar(800) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cv_education_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO `cv_education` VALUES("1","2012-06-13","2016-06-15","bscs","maju","3.01","32");
INSERT INTO `cv_education` VALUES("2","2008-12-15","2012-12-25","Electrical Engineering","The University Of Lahore","A / 1st ","168");
INSERT INTO `cv_education` VALUES("3","2007-01-02","2013-07-15","Electronic","Ned UET Karachi","Second","169");
INSERT INTO `cv_education` VALUES("4","2017-09-06","2017-09-29","BsCs","KUST","3","171");
INSERT INTO `cv_education` VALUES("5","2016-09-17","2018-03-29","HRM","CUST","3.67","174");
INSERT INTO `cv_education` VALUES("6","2009-09-27","2014-05-26","BBA-HR","HEC","2.29","177");
INSERT INTO `cv_education` VALUES("7","2017-10-02","2017-01-31","MBA","HEC","3.56","177");
INSERT INTO `cv_education` VALUES("8","2017-10-12","2017-11-12","bcs","kohat university","3","206");
INSERT INTO `cv_education` VALUES("9","2011-06-28","2015-04-29","BBA","APCOMS","3.5","220");
INSERT INTO `cv_education` VALUES("10","2008-08-01","2010-05-31","Matric SSC - Science Group","Board of Secondary Education Karachi","A-Grade (71%)","221");
INSERT INTO `cv_education` VALUES("11","2012-09-01","2014-03-31","Intermediate HSE - Commerce","Board of Intermediate Education Karachi","C - Grade (59%)","221");
INSERT INTO `cv_education` VALUES("12","2015-09-19","","bcs","kohat universityq","3","237");
INSERT INTO `cv_education` VALUES("14","2011-04-21","2012-02-12","intersiences","rawalpindi","a","172");
INSERT INTO `cv_education` VALUES("15","2016-09-25","2018-01-17","Masters in Management Sciences (HR)","Capital University of Science and Technology","3.67","245");
INSERT INTO `cv_education` VALUES("16","2011-08-25","2015-09-28","Bachelors in Business Administration (HR) ","Army Public College of Management Sciences","3.4","245");
INSERT INTO `cv_education` VALUES("17","1982-05-10","","MBA Marketing ","GOMAL University","3","252");
INSERT INTO `cv_education` VALUES("18","1985-05-10","","LLB","SM Law College","3","252");
INSERT INTO `cv_education` VALUES("19","2003-05-08","2005-10-08","Bachelor of Arts","University of Peshawar","C","255");
INSERT INTO `cv_education` VALUES("20","2014-12-20","2015-09-15","Master In International Relations","University Of Prshawar","A","278");
INSERT INTO `cv_education` VALUES("21","2011-08-15","2015-10-14","Bachelors in Business Administration (HR) ","Army Public College of Management Sciences","3.4","285");
INSERT INTO `cv_education` VALUES("22","2016-09-12","2018-01-24","Masters in Management Sciences (HR)","Capital University of Science and Technology","3.67","285");
INSERT INTO `cv_education` VALUES("23","2013-11-10","2017-10-31","BS Mass Communication & Media","University of Gujrat","3.15","265");
INSERT INTO `cv_education` VALUES("24","2013-11-09","2017-10-31","BS Mass Communication & Media","University of Gujrat","3.15","265");
INSERT INTO `cv_education` VALUES("25","2011-09-17","2015-05-31","B.E Electronics Engineering","Iqra University Karachi","2.91","299");
INSERT INTO `cv_education` VALUES("26","2008-05-01","2010-08-31","SSC","FBISE, Ibd.","B","302");
INSERT INTO `cv_education` VALUES("27","2010-09-01","2012-08-31","HSSC","FBISE, Ibd.","C","302");
INSERT INTO `cv_education` VALUES("28","2012-10-01","2015-12-31","B.Sc","Quaid-e-Azam University Islamabad. ","2nd","302");
INSERT INTO `cv_education` VALUES("29","2012-10-05","2016-10-05","Mass communication and media","University of Gujrat","2.88","304");
INSERT INTO `cv_education` VALUES("30","2005-12-03","2008-12-03","MIT","University of  Arid  Agricultur  Rawalpindi ","2.9","309");



DROP TABLE IF EXISTS `cv_objective`;

CREATE TABLE `cv_objective` (
  `objective_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `objective_detail` text,
  PRIMARY KEY (`objective_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO `cv_objective` VALUES("3","31","Beside your last job title or company, employers want to know what you accomplished while there. Detail achievements and contributions made.?Don\'t have work experience yet  ");
INSERT INTO `cv_objective` VALUES("7","32","To continue my career with an organization that will utilize my MANAGEMENT, SUPERVISION & ADMINISTRATIVE skills to benefit mutual growth and success.");
INSERT INTO `cv_objective` VALUES("8","168"," Hard-working graduate with proven leadership and organizational skills, and minute attention to detail. Seeking to apply my abilities to fill the internship role in your company. I am a dedicated team player who can be relied upon to help your company achieve its goals");
INSERT INTO `cv_objective` VALUES("9","169"," To make a decent living through a professional career, further groom myself in a challenging environment with an organization offering growth in my career as well as my skills and provide my services to promote innovation and bring a positive, progressive change in the organization.");
INSERT INTO `cv_objective` VALUES("10","171","\"I feel that my strongest strengths are firstly having a passion for technology and software engineering. Secondly an ability to understand and prioritize my work in a changing business environment, thereby helping me to successfully deliver results. Finally my practice of consulting with all parties involved in a project, then identifying the requirements and to then provide an appropriate solution.”");
INSERT INTO `cv_objective` VALUES("11","174"," dddd");
INSERT INTO `cv_objective` VALUES("12","177","My aim is to serve enterprise with my experience and with my continuous learning.");
INSERT INTO `cv_objective` VALUES("13","206"," objective");
INSERT INTO `cv_objective` VALUES("14","220"," to obtain employment in modern environment.");
INSERT INTO `cv_objective` VALUES("15","221","Looking for a dynamic and steamed organization, which offers me to work in a goal oriented environment, where I can utilize my knowledge and test my skills with field operations in order to serve the industry and develop a future career.");
INSERT INTO `cv_objective` VALUES("16","237"," To find a job in a reputable organization ");
INSERT INTO `cv_objective` VALUES("17","172"," To pursue a career in a reputable organization.");
INSERT INTO `cv_objective` VALUES("18","245"," i want to excel in my career");
INSERT INTO `cv_objective` VALUES("19","252"," Overall 35+ years of experience in managerial roles with Pakistan International Airline(PIA). Specialist in using SAP, Procurement, Logistics, Quality Control, Food Services, Contracts. Core competencies are  analytical approach, Inventory control & Management, Client Handling, Vendor Inspection and customer-oriented attitude. For business development traveled to Dubai, United Kingdom, Paris, Italy, China, France, Spain, Germany.\nCurrently working as General Manager in PIA and planning for my after retirement work life.");
INSERT INTO `cv_objective` VALUES("20","255"," I have 10 Years Experience in office support/ documentation, and want to carry this field as well as i wish to improve my administration skills,.");
INSERT INTO `cv_objective` VALUES("21","278"," To Pursue a Career in a Reputable organizations");
INSERT INTO `cv_objective` VALUES("22","265"," Want to make an appropriate position in the field of media where I can implement my skills.");
INSERT INTO `cv_objective` VALUES("23","285","ii would like to join the institution and enhance my skills ");
INSERT INTO `cv_objective` VALUES("24","295"," This Objective belongs");
INSERT INTO `cv_objective` VALUES("25","299","Graduate Electronics Engineer available to be hired for reputed company, where my endeavors could be utilized .");
INSERT INTO `cv_objective` VALUES("26","304"," To work in a fast placed environment that would allow for personal growth and development.");
INSERT INTO `cv_objective` VALUES("27","309"," Prompt, hard working individual with  more than 7 years of  customer service experience and superior language skills seeks opportunity with  Centaurus Mall  Residencia   as a Customer Relationship Officer.");



DROP TABLE IF EXISTS `cv_skill`;

CREATE TABLE `cv_skill` (
  `name` varchar(300) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cv_skill_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cv_skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO `cv_skill` VALUES("php","98","32","3");
INSERT INTO `cv_skill` VALUES("java","100","32","4");
INSERT INTO `cv_skill` VALUES("asp.net","50","32","5");
INSERT INTO `cv_skill` VALUES("computer proficiency ","94","168","6");
INSERT INTO `cv_skill` VALUES("•	Strong management skills","75","169","7");
INSERT INTO `cv_skill` VALUES("php","80","171","8");
INSERT INTO `cv_skill` VALUES("Bootstrap","67","171","9");
INSERT INTO `cv_skill` VALUES("Wordpress","50","171","10");
INSERT INTO `cv_skill` VALUES("writing","100","174","11");
INSERT INTO `cv_skill` VALUES("HTML","88","171","12");
INSERT INTO `cv_skill` VALUES("communication Skills","75","177","13");
INSERT INTO `cv_skill` VALUES("MS EXCEL","88","177","14");
INSERT INTO `cv_skill` VALUES("php","64","206","15");
INSERT INTO `cv_skill` VALUES("Interviewing","84","220","16");
INSERT INTO `cv_skill` VALUES("writing","47","220","17");
INSERT INTO `cv_skill` VALUES("php","77","237","18");
INSERT INTO `cv_skill` VALUES("node","60","237","19");
INSERT INTO `cv_skill` VALUES("Writing","45","172","20");
INSERT INTO `cv_skill` VALUES("Networking","75","172","21");
INSERT INTO `cv_skill` VALUES("Leadership","100","172","22");
INSERT INTO `cv_skill` VALUES("writing","100","245","23");
INSERT INTO `cv_skill` VALUES("Administration skills","90","245","24");
INSERT INTO `cv_skill` VALUES("procurement and logistics","100","252","25");
INSERT INTO `cv_skill` VALUES("Inventory management ","100","252","26");
INSERT INTO `cv_skill` VALUES("Contracts","100","252","27");
INSERT INTO `cv_skill` VALUES("Catering","100","252","28");
INSERT INTO `cv_skill` VALUES("tenders and vendor management","100","252","29");
INSERT INTO `cv_skill` VALUES("SAP","100","252","30");
INSERT INTO `cv_skill` VALUES("Quality control","100","252","31");
INSERT INTO `cv_skill` VALUES("MS Outlook","88","255","32");
INSERT INTO `cv_skill` VALUES("MS Excel","91","255","33");
INSERT INTO `cv_skill` VALUES("MS Word","82","255","34");
INSERT INTO `cv_skill` VALUES("MS Power point","81","255","35");
INSERT INTO `cv_skill` VALUES("Oracle E-Business Application","51","255","36");
INSERT INTO `cv_skill` VALUES("Internet & Software installation","48","255","37");
INSERT INTO `cv_skill` VALUES("Language English ","68","255","38");
INSERT INTO `cv_skill` VALUES("Urdu","81","255","39");
INSERT INTO `cv_skill` VALUES("Pashtu","78","255","40");
INSERT INTO `cv_skill` VALUES("Writing","100","278","41");
INSERT INTO `cv_skill` VALUES("Computer","100","278","42");
INSERT INTO `cv_skill` VALUES("communication skills","100","285","43");
INSERT INTO `cv_skill` VALUES("Computer skills: MS office, video editing, sub editing, documentary making v/o. Social Media: familiar with Facebook, Twitter, Instagram. Languages: proficient in Urdu, English Pothohari.","99","265","44");
INSERT INTO `cv_skill` VALUES("Computer skills: MS office, video editing, sub editing, documentary making v/o. Social Media: familiar with Facebook, Twitter, Instagram. Languages: proficient in Urdu, English Pothohari.","100","265","45");
INSERT INTO `cv_skill` VALUES("Arduino ","98","299","46");
INSERT INTO `cv_skill` VALUES("Raspberry pi","100","299","47");
INSERT INTO `cv_skill` VALUES("Python","90","299","48");
INSERT INTO `cv_skill` VALUES("C++","58","299","49");
INSERT INTO `cv_skill` VALUES("Matlab","40","299","50");
INSERT INTO `cv_skill` VALUES("Proteus","44","299","51");
INSERT INTO `cv_skill` VALUES("PCB Design","55","299","52");
INSERT INTO `cv_skill` VALUES("MS Office","91","302","53");
INSERT INTO `cv_skill` VALUES("Communication","100","304","55");
INSERT INTO `cv_skill` VALUES("Computer typing and knowlege","88","309","56");
INSERT INTO `cv_skill` VALUES("Microsoft workd  powerpoint , excel","87","309","58");
INSERT INTO `cv_skill` VALUES("Time Mangment and  customer knowlege skills ","74","309","59");



DROP TABLE IF EXISTS `cv_upload`;

CREATE TABLE `cv_upload` (
  `cv_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` text NOT NULL,
  `upload_date` date NOT NULL,
  PRIMARY KEY (`cv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `cv_upload` VALUES("2","32","http://localhost/job360pknoor/uploads/cv/32.pdf","2017-08-16");
INSERT INTO `cv_upload` VALUES("3","168","http://www.jobs360.com.pk/uploads/cv/168.doc","2017-09-09");
INSERT INTO `cv_upload` VALUES("4","169","http://www.jobs360.com.pk/uploads/cv/169.docx","2017-09-10");
INSERT INTO `cv_upload` VALUES("5","171","http://localhost/job360sep9/uploads/cv/171.docx","2017-09-20");
INSERT INTO `cv_upload` VALUES("6","174","http://www.jobs360.com.pk/uploads/cv/174.doc","2017-09-28");
INSERT INTO `cv_upload` VALUES("7","177","http://www.jobs360.com.pk/uploads/cv/177.doc","2017-10-06");
INSERT INTO `cv_upload` VALUES("8","206","http://www.jobs360.com.pk/uploads/cv/206.docx","2017-10-12");
INSERT INTO `cv_upload` VALUES("9","220","http://www.jobs360.com.pk/uploads/cv/220.doc","2017-10-17");
INSERT INTO `cv_upload` VALUES("10","221","http://www.jobs360.com.pk/uploads/cv/221.docx","2017-10-17");
INSERT INTO `cv_upload` VALUES("11","172","http://www.jobs360.com.pk/uploads/cv/172.docx","2017-10-20");
INSERT INTO `cv_upload` VALUES("12","245","http://www.jobs360.com.pk/uploads/cv/245.doc","2017-11-01");
INSERT INTO `cv_upload` VALUES("13","252","http://www.jobs360.com.pk/uploads/cv/252.pdf","2017-11-10");
INSERT INTO `cv_upload` VALUES("14","255","http://www.jobs360.com.pk/uploads/cv/255.pdf","2017-11-17");
INSERT INTO `cv_upload` VALUES("15","265","http://www.jobs360.com.pk/uploads/cv/265.docx","2018-01-09");
INSERT INTO `cv_upload` VALUES("16","290","http://www.jobs360.com.pk/uploads/cv/290.docx","2017-12-26");
INSERT INTO `cv_upload` VALUES("17","285","http://www.jobs360.com.pk/uploads/cv/285.doc","2018-01-09");
INSERT INTO `cv_upload` VALUES("18","304","http://www.jobs360.com.pk/uploads/cv/304.docx","2018-01-29");
INSERT INTO `cv_upload` VALUES("19","309","http://www.jobs360.com.pk/uploads/cv/309.docx","2018-02-20");
INSERT INTO `cv_upload` VALUES("20","310","http://www.jobs360.com.pk/uploads/cv/310.pdf","2018-02-20");



DROP TABLE IF EXISTS `cv_workexperience`;

CREATE TABLE `cv_workexperience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_date` varchar(500) NOT NULL,
  `from_date` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `organization_name` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO `cv_workexperience` VALUES("1","2017-12-31","2016-06-29","teamleads","ebmacs","32");
INSERT INTO `cv_workexperience` VALUES("2","2017-04-28","2015-12-01","Web Developer","isolexpert","32");
INSERT INTO `cv_workexperience` VALUES("3","2015-10-05","2013-04-01","Electrical Supervisor","Gulf Engineering Services Multan","168");
INSERT INTO `cv_workexperience` VALUES("5","2015-08-23","2014-01-01","Assistant Instrument Engineer","Khairpur Sugar Mills","169");
INSERT INTO `cv_workexperience` VALUES("6","2017-09-20","2015-10-03","Web Developer","Ebmacs","171");
INSERT INTO `cv_workexperience` VALUES("7","2017-02-25","2015-01-30","assitant","jobs360","174");
INSERT INTO `cv_workexperience` VALUES("8","2017-10-31","2017-01-16","HR EXECUTIVE","IGLOO PIGLOO","177");
INSERT INTO `cv_workexperience` VALUES("9","2013-12-31","2014-01-31","HR INTERN","WWF","177");
INSERT INTO `cv_workexperience` VALUES("10","2017-10-12","2017-09-13","xyq","abc","206");
INSERT INTO `cv_workexperience` VALUES("11","2016-11-03","2014-12-01","HR Officer","jobs360","220");
INSERT INTO `cv_workexperience` VALUES("12","2017-04-30","2016-10-30","Admin Officer","Allied Bank","220");
INSERT INTO `cv_workexperience` VALUES("13","2012-07-31","2010-08-01","Networking Technician","Local Area Cable & Wireless Networking","221");
INSERT INTO `cv_workexperience` VALUES("14","2014-06-30","2014-04-01","Junior Exhicutive","Need Computer Institute","221");
INSERT INTO `cv_workexperience` VALUES("15","2017-10-31","2014-07-01","Administrator","PK Webmasters (www.pkwebmasters.cf)","221");
INSERT INTO `cv_workexperience` VALUES("16","2017-05-30","2017-10-31","Computer Technician","Global FunLand & Gaming Zone","221");
INSERT INTO `cv_workexperience` VALUES("17","2016-09-18","2015-11-18","webdeveloper","ebmacs","237");
INSERT INTO `cv_workexperience` VALUES("18","2010-05-31","2014-02-12","intern","abcd","172");
INSERT INTO `cv_workexperience` VALUES("19","2016-09-29","2014-10-02","sales officer","axsd","172");
INSERT INTO `cv_workexperience` VALUES("20","2016-09-04","2015-09-20","HR ADMIN","jobs360","245");
INSERT INTO `cv_workexperience` VALUES("21","2003-02-28","1983-02-25","Purchase Officer/ Assistant Manager at Head Office-Karachi","PIA","252");
INSERT INTO `cv_workexperience` VALUES("22","2017-02-28","1990-04-25","Manager Incharge Procurement & Logistics at PIA Peshawar- Lahore -Islamabad","PIA","252");
INSERT INTO `cv_workexperience` VALUES("23","2004-03-06","2003-03-01","eputy Station Manager Customer Services- Passenger Handling Services PIA ","PIA","252");
INSERT INTO `cv_workexperience` VALUES("24","2007-03-03","2004-03-02","Deputy General Manager Procurement & Logistics","PIA","252");
INSERT INTO `cv_workexperience` VALUES("25","2015-03-10","2007-03-08","General Manager Operations & Food Services","PIA","252");
INSERT INTO `cv_workexperience` VALUES("26","","2015-03-11","General Manager Procurement & Logistics.– Karachi ","PIA","252");
INSERT INTO `cv_workexperience` VALUES("27","2012-02-28","2007-01-08","SECURITY COORDINATOR","Jazz (PMCL)","255");
INSERT INTO `cv_workexperience` VALUES("28","2017-11-17","2012-03-01","DEPARTMENT ADMIN COORDINATOR/ DOCUMENTS CONTROLLER","Mobiserve Pakistan (Pvt) Ltd.","255");
INSERT INTO `cv_workexperience` VALUES("29","","2017-11-06","Hr Officer","jobs360","278");
INSERT INTO `cv_workexperience` VALUES("30","2018-01-31","2017-08-16","HR Officer","jobs360","285");
INSERT INTO `cv_workexperience` VALUES("31","2018-01-09","2017-11-20","Marketing & Sales Executive","Jobs360.pvt.ltd","265");
INSERT INTO `cv_workexperience` VALUES("32","2018-01-09","2017-11-20","Marketing & Sales Executive","Jobs360.pvt.ltd","265");
INSERT INTO `cv_workexperience` VALUES("33","2018-01-31","2015-03-18","Secretary Department ","Shifa Tameer-e-Millat University Islamabad","302");
INSERT INTO `cv_workexperience` VALUES("34","2017-12-01","2016-11-10","Assistant producer","Channel","304");
INSERT INTO `cv_workexperience` VALUES("35","2018-02-28","2015-11-15","  CRO","Centaurus Mall Residencia","309");



DROP TABLE IF EXISTS `emp_packages`;

CREATE TABLE `emp_packages` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_basic` int(11) NOT NULL,
  `emp_gof` int(11) NOT NULL,
  `emp_y` int(11) NOT NULL,
  `emp_m` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `emp_packages` VALUES("1","3500","12000","30000","20000");



DROP TABLE IF EXISTS `jbs_packages`;

CREATE TABLE `jbs_packages` (
  `jbs_id` int(11) NOT NULL AUTO_INCREMENT,
  `jbs_premium` int(11) NOT NULL,
  PRIMARY KEY (`jbs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `jbs_packages` VALUES("1","1500");



DROP TABLE IF EXISTS `job_apply`;

CREATE TABLE `job_apply` (
  `job_apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `apply_description` varchar(500) DEFAULT NULL,
  `review` int(2) NOT NULL DEFAULT '0',
  `shortlist` int(2) NOT NULL DEFAULT '0',
  `rejected` int(2) NOT NULL DEFAULT '0',
  `job_apply_date` date NOT NULL,
  PRIMARY KEY (`job_apply_id`),
  KEY `job_id` (`job_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `job_apply_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO `job_apply` VALUES("8","7","75",NULL,"1","1","0","0000-00-00");
INSERT INTO `job_apply` VALUES("10","7","57",NULL,"0","0","0","0000-00-00");
INSERT INTO `job_apply` VALUES("11","7","58",NULL,"0","1","0","0000-00-00");
INSERT INTO `job_apply` VALUES("12","7","59",NULL,"1","0","1","0000-00-00");
INSERT INTO `job_apply` VALUES("13","7","60",NULL,"1","1","0","0000-00-00");
INSERT INTO `job_apply` VALUES("24","9","114",NULL,"0","0","0","2017-08-29");
INSERT INTO `job_apply` VALUES("25","3","71",NULL,"0","0","0","2017-08-30");
INSERT INTO `job_apply` VALUES("28","4","32"," apply now","0","1","0","2017-08-31");
INSERT INTO `job_apply` VALUES("29","2","32"," ","0","1","0","2017-08-31");
INSERT INTO `job_apply` VALUES("30","4","171"," cover","0","0","0","2017-09-20");
INSERT INTO `job_apply` VALUES("33","3","206"," cv ltter","0","0","1","2017-10-12");
INSERT INTO `job_apply` VALUES("34","5","32"," cover","0","1","0","2017-10-19");
INSERT INTO `job_apply` VALUES("35","5","237"," cover","0","0","1","2017-10-19");
INSERT INTO `job_apply` VALUES("36","18","172"," cover","0","0","0","2017-10-20");
INSERT INTO `job_apply` VALUES("37","18","237","vcx","0","0","0","2017-10-23");
INSERT INTO `job_apply` VALUES("38","22","32"," cover","0","0","0","2017-10-23");
INSERT INTO `job_apply` VALUES("39","18","245"," i want it","0","0","0","2017-11-01");
INSERT INTO `job_apply` VALUES("40","18","278"," test","0","0","0","2017-11-29");
INSERT INTO `job_apply` VALUES("41","15","278"," test","0","0","0","2017-11-29");
INSERT INTO `job_apply` VALUES("42","45","278","  I want  to apply ","0","0","0","2018-01-01");
INSERT INTO `job_apply` VALUES("43","47","278"," i want to apply\n","0","1","0","2018-01-01");
INSERT INTO `job_apply` VALUES("44","47","285"," i want to apply","0","0","0","2018-01-09");
INSERT INTO `job_apply` VALUES("45","47","265"," I want to apply for this job post","0","0","1","2018-01-09");
INSERT INTO `job_apply` VALUES("46","48","265"," I wanna be news producer ","0","1","0","2018-01-09");
INSERT INTO `job_apply` VALUES("47","48","278"," i want to apply","0","0","0","2018-01-10");
INSERT INTO `job_apply` VALUES("48","5","172","i want to apply ","0","0","0","2018-01-11");
INSERT INTO `job_apply` VALUES("49","38","299"," \n\nI am really interested to apply for Software Engineer  position in your company. I have the relevant qualification required for the position...\n\nI am hard working and confident with excellent communication, Analytical and supervisory skills which makes strong candidate for the position\n\n\n\nSincerely,\n\nAdnan Ahmad\n\n03055094450","0","0","0","2018-01-19");
INSERT INTO `job_apply` VALUES("50","50","278"," i want to apply for this post ","0","0","0","2018-01-22");
INSERT INTO `job_apply` VALUES("51","50","285"," i want to apply","0","0","0","2018-02-01");
INSERT INTO `job_apply` VALUES("52","9","172","i want to apply","0","0","0","2018-02-09");
INSERT INTO `job_apply` VALUES("53","3","172","i want ","0","0","0","2018-02-09");
INSERT INTO `job_apply` VALUES("54","30","309"," I would like to serve as a key role in your  orgainzaiton as a Coperate assistant . kindly consider my applicaiton ","0","0","0","2018-02-20");
INSERT INTO `job_apply` VALUES("55","39","309"," i would like to serve as a corporate assistant in your organization kindly consider my application for this role ","0","0","0","2018-02-20");
INSERT INTO `job_apply` VALUES("56","40","309","   I would like to serve  a  receptionist in  your organization for your valueable organization ","0","0","0","2018-02-20");



DROP TABLE IF EXISTS `jobseekar_payments`;

CREATE TABLE `jobseekar_payments` (
  `jp_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_confirmation` varchar(100) DEFAULT NULL,
  `payment_status` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `receipt_url` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'valid',
  PRIMARY KEY (`jp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `jobseekar_payments` VALUES("8","ch_1BAzZuIq3znfZrgfPOhJFCdT","32","0","success","1000","Stripe Payment","","","","",NULL,"2017-10-09","0000-00-00","expired");
INSERT INTO `jobseekar_payments` VALUES("9","ch_1BAzcYIq3znfZrgfXaVmJ5qf","32","0","success","1000","Stripe Payment","","","","",NULL,"2017-10-09","2018-01-09","expired");
INSERT INTO `jobseekar_payments` VALUES("10","ch_1BEcxnIq3znfZrgfqpyEXmIc","237","1","success","1500","Stripe Payment","","","","",NULL,"2017-10-19","2018-01-19","valid");
INSERT INTO `jobseekar_payments` VALUES("11","ch_1Bc9XyIq3znfZrgfAtkgZvYr","265","1","success","1500","Stripe Payment","","","","",NULL,"2017-12-23","2018-03-23","valid");



DROP TABLE IF EXISTS `keyword`;

CREATE TABLE `keyword` (
  `k_id` int(11) NOT NULL,
  `words` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci,
  `bengali` longtext COLLATE utf8_unicode_ci,
  `spanish` longtext COLLATE utf8_unicode_ci,
  `arabic` longtext COLLATE utf8_unicode_ci,
  `dutch` longtext COLLATE utf8_unicode_ci,
  `russian` longtext COLLATE utf8_unicode_ci,
  `chinese` longtext COLLATE utf8_unicode_ci,
  `turkish` longtext COLLATE utf8_unicode_ci,
  `portuguese` longtext COLLATE utf8_unicode_ci,
  `hungarian` longtext COLLATE utf8_unicode_ci,
  `french` longtext COLLATE utf8_unicode_ci,
  `greek` longtext COLLATE utf8_unicode_ci,
  `german` longtext COLLATE utf8_unicode_ci,
  `italian` longtext COLLATE utf8_unicode_ci,
  `thai` longtext COLLATE utf8_unicode_ci,
  `urdu` longtext COLLATE utf8_unicode_ci,
  `hindi` longtext COLLATE utf8_unicode_ci,
  `latin` longtext COLLATE utf8_unicode_ci,
  `indonesian` longtext COLLATE utf8_unicode_ci,
  `japanese` longtext COLLATE utf8_unicode_ci,
  `korean` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`phrase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1111 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `language` VALUES("1","manage_categories",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("2","dashboard",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("3","Job Seekar",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("4","Employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("5","Category",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("6","SubCategory",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("7","City",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("8","Career Level",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("9","Benefits",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("10","settings",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("11","general_settings",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("12","language_settings",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("13","account",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("14","edit_profile",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("15","change_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("16","Add Category",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("17","id",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("18","image",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("19","name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("20","update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("21","delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("22","cancel",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("23","category_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("24","Save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("25","edit_category",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("26","Category Name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("27","category_updated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("28","category_deleted_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("29","login",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("30","forgot_your_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("31","admin_dashboard",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("32","event_schedule",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("33","category_added_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("34","Organization",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("35","email",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("36","age",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("37","Mobile No",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("38","Alternate Mobile No",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("39","photo",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("40","account_updated",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("41","data_updated",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("42","jobseekars",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("43","employeer",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("44","Payment",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("45","Admin",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("46","View",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("47","Action",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("48","manage_admin",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("49","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("50","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("51","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("52","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("53","manage_subcategories",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("54","Add SubCategory",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("55","subcat_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("56","cat_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("57","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("58","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("59","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("60","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("61","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("62","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("63","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("64","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("65","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("66","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("67","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("68","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("69","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("70","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("71","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("72","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("73","admin_added_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("74","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("75","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("76","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("77","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("78","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("79","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("80","data_updated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("81","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("82","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("83","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("84","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("85","data_deleted_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("86","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("87","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("88","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("89","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("90","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("91","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("92","Actions",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("93","data_acitvated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("94","system_settings",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("95","system_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("96","system_title",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("97","address",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("98","phone",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("99","paypal_email",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("100","currency",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("101","system_email",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("102","language",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("103","text_align",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("104","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("105","theme_settings",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("106","default",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("107","select_theme",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("108","select_a_theme_to_make_changes",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("109","upload_logo",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("110","upload",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("111","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("112","manage_language",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("113","language_list",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("114","add_phrase",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("115","add_language",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("116","option",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("117","edit_phrase",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("118","delete_language",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("119","phrase",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("120","value_required",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("121","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("122","theme_selected",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("123","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("124","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("125","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("126","job_acitvated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("127","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("128","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("129","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("130","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("131","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("132","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("133","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("134","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("135","SubCategory Name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("136","Select Category",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("137","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("138","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("139","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("140","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("141","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("142","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("143","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("144","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("145","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("146","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("147","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("148","manage_career_level",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("149","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("150","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("151","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("152","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("153","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("154","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("155","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("156","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("157","manage_benefits",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("158","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("159","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("160","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("161","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("162","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("163","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("164","manage_cities",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("165","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("166","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("167","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("168","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("169","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("170","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("171","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("172","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("173","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("174","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("175","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("176","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("177","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("178","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("179","manage_profile",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("180","update_profile",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("181","current_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("182","new_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("183","confirm_new_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("184","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("185","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("186","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("187","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("188","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("189","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("190","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("191","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("192","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("193","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("194","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("195","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("196","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("197","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("198","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("199","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("200","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("201","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("202","manage_comapnies",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("203","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("204","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("205","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("206","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("207","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("208","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("209","data_added_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("210","Company Name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("211","data_inserterd_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("212","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("213","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("214","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("215","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("216","reset_password",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("217","return_to_login_page",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("218","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("219","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("220","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("221","password_updated",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("222","password_mismatch",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("223","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("224","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("225","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("226","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("227","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("228","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("229","data_Inserted_to_cv_contact",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("230","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("231","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("232","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("233","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("234","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("235","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("236","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("237","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("238","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("239","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("240","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("241","settings_updated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("242","jobseekers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("243","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("244","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("245","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("246","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("247","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("248","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("249","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("250","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("251","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("252","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("253","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("254","Admins",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("255","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("256","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("257","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("258","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("259","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("260","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("261","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("262","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("263","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("264","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("265","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("266","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("267","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("268","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("269","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("270","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("271","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("272","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("273","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("274","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("275","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("276","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("277","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("278","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("279","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("280","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("281","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("282","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("283","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("284","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("285","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("286","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("287","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("288","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("289","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("290","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("291","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("292","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("293","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("294","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("295","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("296","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("297","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("298","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("299","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("300","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("301","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("302","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("303","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("304","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("305","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("306","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("307","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("308","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("309","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("310","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("311","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("312","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("313","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("314","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("315","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("316","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("317","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("318","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("319","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("320","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("321","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("322","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("323","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("324","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("325","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("326","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("327","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("328","edit_subcategory",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("329","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("330","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("331","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("332","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("333","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("334","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("335","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("336","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("337","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("338","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("339","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("340","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("341","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("342","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("343","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("344","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("345","data_Inserted_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("346","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("347","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("348","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("349","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("350","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("351","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("352","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("353","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("354","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("355","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("356","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("357","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("358","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("359","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("360","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("361","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("362","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("363","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("364","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("365","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("366","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("367","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("368","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("369","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("370","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("371","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("372","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("373","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("374","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("375","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("376","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("377","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("378","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("379","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("380","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("381","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("382","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("383","edit_company",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("384","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("385","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("386","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("387","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("388","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("389","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("390","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("391","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("392","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("393","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("394","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("395","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("396","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("397","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("398","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("399","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("400","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("401","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("402","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("403","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("404","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("405","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("406","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("407","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("408","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("409","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("410","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("411","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("412","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("413","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("414","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("415","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("416","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("417","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("418","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("419","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("420","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("421","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("422","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("423","career_level_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("424","edit_career_level",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("425","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("426","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("427","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("428","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("429","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("430","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("431","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("432","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("433","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("434","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("435","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("436","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("437","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("438","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("439","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("440","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("441","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("442","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("443","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("444","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("445","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("446","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("447","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("448","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("449","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("450","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("451","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("452","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("453","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("454","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("455","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("456","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("457","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("458","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("459","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("460","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("461","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("462","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("463","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("464","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("465","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("466","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("467","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("468","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("469","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("470","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("471","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("472","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("473","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("474","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("475","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("476","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("477","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("478","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("479","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("480","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("481","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("482","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("483","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("484","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("485","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("486","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("487","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("488","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("489","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("490","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("491","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("492","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("493","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("494","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("495","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("496","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("497","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("498","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("499","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("500","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("501","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("502","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("503","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("504","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("505","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("506","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("507","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("508","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("509","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("510","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("511","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("512","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("513","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("514","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("515","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("516","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("517","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("518","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("519","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("520","subcategory_added_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("521","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("522","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("523","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("524","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("525","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("526","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("527","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("528","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("529","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("530","subcategory_deleted_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("531","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("532","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("533","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("534","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("535","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("536","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("537","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("538","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("539","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("540","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("541","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("542","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("543","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("544","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("545","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("546","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("547","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("548","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("549","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("550","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("551","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("552","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("553","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("554","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("555","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("556","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("557","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("558","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("559","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("560","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("561","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("562","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("563","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("564","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("565","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("566","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("567","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("568","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("569","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("570","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("571","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("572","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("573","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("574","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("575","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("576","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("577","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("578","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("579","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("580","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("581","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("582","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("583","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("584","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("585","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("586","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("587","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("588","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("589","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("590","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("591","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("592","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("593","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("594","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("595","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("596","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("597","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("598","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("599","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("600","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("601","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("602","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("603","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("604","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("605","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("606","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("607","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("608","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("609","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("610","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("611","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("612","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("613","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("614","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("615","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("616","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("617","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("618","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("619","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("620","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("621","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("622","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("623","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("624","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("625","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("626","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("627","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("628","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("629","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("630","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("631","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("632","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("633","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("634","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("635","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("636","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("637","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("638","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("639","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("640","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("641","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("642","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("643","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("644","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("645","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("646","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("647","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("648","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("649","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("650","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("651","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("652","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("653","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("654","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("655","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("656","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("657","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("658","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("659","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("660","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("661","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("662","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("663","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("664","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("665","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("666","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("667","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("668","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("669","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("670","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("671","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("672","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("673","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("674","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("675","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("676","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("677","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("678","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("679","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("680","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("681","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("682","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("683","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("684","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("685","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("686","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("687","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("688","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("689","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("690","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("691","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("692","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("693","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("694","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("695","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("696","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("697","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("698","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("699","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("700","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("701","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("702","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("703","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("704","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("705","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("706","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("707","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("708","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("709","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("710","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("711","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("712","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("713","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("714","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("715","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("716","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("717","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("718","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("719","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("720","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("721","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("722","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("723","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("724","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("725","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("726","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("727","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("728","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("729","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("730","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("731","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("732","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("733","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("734","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("735","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("736","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("737","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("738","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("739","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("740","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("741","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("742","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("743","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("744","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("745","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("746","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("747","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("748","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("749","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("750","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("751","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("752","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("753","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("754","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("755","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("756","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("757","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("758","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("759","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("760","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("761","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("762","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("763","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("764","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("765","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("766","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("767","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("768","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("769","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("770","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("771","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("772","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("773","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("774","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("775","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("776","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("777","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("778","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("779","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("780","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("781","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("782","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("783","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("784","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("785","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("786","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("787","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("788","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("789","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("790","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("791","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("792","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("793","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("794","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("795","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("796","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("797","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("798","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("799","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("800","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("801","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("802","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("803","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("804","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("805","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("806","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("807","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("808","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("809","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("810","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("811","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("812","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("813","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("814","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("815","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("816","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("817","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("818","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("819","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("820","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("821","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("822","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("823","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("824","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("825","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("826","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("827","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("828","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("829","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("830","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("831","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("832","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("833","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("834","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("835","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("836","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("837","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("838","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("839","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("840","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("841","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("842","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("843","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("844","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("845","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("846","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("847","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("848","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("849","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("850","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("851","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("852","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("853","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("854","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("855","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("856","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("857","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("858","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("859","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("860","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("861","edit_benefit",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("862","benefit_name",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("863","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("864","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("865","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("866","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("867","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("868","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("869","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("870","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("871","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("872","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("873","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("874","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("875","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("876","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("877","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("878","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("879","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("880","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("881","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("882","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("883","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("884","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("885","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("886","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("887","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("888","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("889","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("890","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("891","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("892","data_deactivated_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("893","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("894","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("895","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("896","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("897","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("898","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("899","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("900","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("901","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("902","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("903","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("904","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("905","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("906","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("907","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("908","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("909","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("910","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("911","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("912","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("913","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("914","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("915","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("916","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("917","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("918","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("919","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("920","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("921","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("922","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("923","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("924","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("925","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("926","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("927","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("928","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("929","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("930","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("931","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("932","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("933","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("934","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("935","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("936","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("937","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("938","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("939","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("940","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("941","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("942","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("943","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("944","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("945","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("946","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("947","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("948","save",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("949","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("950","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("951","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("952","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("953","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("954","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("955","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("956","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("957","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("958","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("959","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("960","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("961","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("962","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("963","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("964","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("965","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("966","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("967","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("968","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("969","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("970","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("971","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("972","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("973","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("974","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("975","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("976","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("977","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("978","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("979","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("980","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("981","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("982","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("983","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("984","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("985","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("986","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("987","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("988","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("989","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("990","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("991","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("992","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("993","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("994","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("995","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("996","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("997","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("998","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("999","Active/Deactive",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1000","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1001","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1002","Activate",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1003","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1004","Job_deleted_successfully",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1005","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1006","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1007","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1008","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1009","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1010","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1011","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1012","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1013","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1014","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1015","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1016","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1017","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1018","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1019","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1020","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1021","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1022","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1023","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1024","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1025","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1026","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1027","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1028","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1029","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1030","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1031","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1032","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1033","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1034","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1035","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1036","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1037","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1038","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1039","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1040","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1041","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1042","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1043","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1044","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1045","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1046","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1047","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1048","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1049","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1050","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1051","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1052","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1053","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1054","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1055","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1056","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1057","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1058","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1059","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1060","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1061","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1062","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1063","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1064","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1065","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1066","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1067","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1068","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1069","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1070","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1071","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1072","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1073","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1074","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1075","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1076","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1077","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1078","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1079","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1080","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1081","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1082","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1083","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1084","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1085","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1086","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1087","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1088","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1089","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1090","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1091","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1092","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1093","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1094","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1095","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1096","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1097","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1098","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1099","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1100","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1101","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1102","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1103","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1104","employers",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1105","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1106","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1107","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1108","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1109","Update",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `language` VALUES("1110","Delete",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);



DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_confirmation` varchar(100) DEFAULT NULL,
  `payment_status` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `receipt_url` varchar(255) DEFAULT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `credits` varchar(50) DEFAULT NULL,
  `credits_status` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `payments` VALUES("1","ch_1B3KhFIq3znfZrgfwnHj0qQ7","71","1","success","3500","Stripe Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:33:33","2017-09-18 13:33:33",NULL,"basic","1","valid","2017-09-18",NULL);
INSERT INTO `payments` VALUES("2","ch_1B3KhWIq3znfZrgfsWCm9OFi","71","0","success","12000","Stripe Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:33:50","2017-09-18 13:33:50",NULL,"group_of_five","4","valid","2017-09-18",NULL);
INSERT INTO `payments` VALUES("3","ch_1B3KhoIq3znfZrgf3Isgm68M","71","0","success","30000","Stripe Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:34:08","2017-09-18 13:34:08",NULL,"yearly","unlimited","valid","2017-09-18","2018-09-18");
INSERT INTO `payments` VALUES("4","ch_1B3Ki3Iq3znfZrgfl4wB5QM2","71","0","success","20000","Stripe Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:34:23","2017-09-18 13:34:23",NULL,"monthly","unlimited","valid","2017-09-18","2017-10-18");
INSERT INTO `payments` VALUES("5","","71","1","success","3500","Bank Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:39:36","2017-09-18 13:39:36","http://localhost/job360sep9/uploads/receipt_image/bankr_20170918133936.jpg","basic","1","valid","2017-09-18",NULL);
INSERT INTO `payments` VALUES("6","","71","0","success","12000","Bank Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:41:45","2017-09-18 13:41:45","http://localhost/job360sep9/uploads/receipt_image/bankr_20170918134145.jpg","group_of_five","5","valid","2017-09-18",NULL);
INSERT INTO `payments` VALUES("7","","71","0","success","30000","Bank Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:42:31","2017-09-18 13:42:31","http://localhost/job360sep9/uploads/receipt_image/bankr_20170918134231.jpg","yearly","unlimited","valid","2017-09-18","2018-09-18");
INSERT INTO `payments` VALUES("8","","71","1","success","20000","Bank Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-18 13:42:48","2017-09-18 13:42:48","http://localhost/job360sep9/uploads/receipt_image/bankr_20170918134248.jpg","monthly","unlimited","valid","2017-09-18","2017-08-18");
INSERT INTO `payments` VALUES("13","ch_1B4UaCIq3znfZrgfpNpYIyun","71","1","success","12000","Stripe Payment","shahid","khan","G11,islamabad","Islamabad","2017-09-21 18:19:11","2017-09-21 18:19:11",NULL,"group_of_five","0","expired","2017-09-21",NULL);
INSERT INTO `payments` VALUES("15","","71","1","success","3500","Bank Payment","shahid","khan","G11,islamabad","Islamabad","2017-10-05 14:46:44","2017-10-05 14:46:44","http://www.jobs360.com.pk/uploads/receipt_image/bankr_20171005144644.png","basic","0","expired","2017-10-05",NULL);
INSERT INTO `payments` VALUES("16","ch_1BMZxGIq3znfZrgfKvgDYsVN","71","0","success","3500","Stripe Payment","Shahid","khan","Rawalpindi Pakistan","Rawalpindi Pakistan","2017-11-10 15:41:45","2017-11-10 15:41:45",NULL,"basic","1","valid","2017-11-10",NULL);



DROP TABLE IF EXISTS `sadmin_account_settings`;

CREATE TABLE `sadmin_account_settings` (
  `sadmin_account_settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `sadmin_account_id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  PRIMARY KEY (`sadmin_account_settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `sadmin_account_settings` VALUES("1","2","Askari Bank","202","0002390100004336");



DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `settings` VALUES("1","system_name","Administrator");
INSERT INTO `settings` VALUES("2","system_title","Administrator");
INSERT INTO `settings` VALUES("3","address","Islamabad, Pakistan");
INSERT INTO `settings` VALUES("4","phone","0336-360-360-3");
INSERT INTO `settings` VALUES("5","paypal_email","");
INSERT INTO `settings` VALUES("6","currency","PKR");
INSERT INTO `settings` VALUES("7","system_email","adarvaish0@gmail.com");
INSERT INTO `settings` VALUES("20","active_sms_service","disabled");
INSERT INTO `settings` VALUES("11","language","english");
INSERT INTO `settings` VALUES("12","text_align","left-to-right");
INSERT INTO `settings` VALUES("13","clickatell_user","");
INSERT INTO `settings` VALUES("14","clickatell_password","");
INSERT INTO `settings` VALUES("15","clickatell_api_id","");
INSERT INTO `settings` VALUES("16","skin_colour","blue");
INSERT INTO `settings` VALUES("17","twilio_account_sid","");
INSERT INTO `settings` VALUES("18","twilio_auth_token","");
INSERT INTO `settings` VALUES("19","twilio_sender_phone_number","");



DROP TABLE IF EXISTS `superadmin`;

CREATE TABLE `superadmin` (
  `superadmin_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`superadmin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `superadmin` VALUES("1","noor","noor@gmail.com","81dc9bdb52d04dc20036dbd8313ed055","1");
INSERT INTO `superadmin` VALUES("2","Muhammad Ahsen Qazi","Ahsenqazi@yahoo.com","37bd9c6014a22531ac6085bcd19cea73","1");



DROP TABLE IF EXISTS `tbl_benefit`;

CREATE TABLE `tbl_benefit` (
  `benefit_id` int(11) NOT NULL AUTO_INCREMENT,
  `benefit_name` varchar(255) NOT NULL,
  PRIMARY KEY (`benefit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_benefit` VALUES("1","Accomodation");
INSERT INTO `tbl_benefit` VALUES("2","Gratuity");
INSERT INTO `tbl_benefit` VALUES("3","Incentive Bonus");
INSERT INTO `tbl_benefit` VALUES("4","Life Insurance");
INSERT INTO `tbl_benefit` VALUES("5","Pension");
INSERT INTO `tbl_benefit` VALUES("6","Sports & Entertainment");
INSERT INTO `tbl_benefit` VALUES("7","Communication");
INSERT INTO `tbl_benefit` VALUES("8","Health Insurance");
INSERT INTO `tbl_benefit` VALUES("9","Leaves");
INSERT INTO `tbl_benefit` VALUES("10","Medical");
INSERT INTO `tbl_benefit` VALUES("11","Provident Fund");
INSERT INTO `tbl_benefit` VALUES("12","Transport");



DROP TABLE IF EXISTS `tbl_cat`;

CREATE TABLE `tbl_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_cat` VALUES("22","BANKING","22_1.jpg");
INSERT INTO `tbl_cat` VALUES("21","ACCOUNTS & FINANCE ","21_download(3).jpg");
INSERT INTO `tbl_cat` VALUES("18","ENGINEERING","18_515965808.jpg");
INSERT INTO `tbl_cat` VALUES("19","SALES & MARKETING ","19_increase-sales.jpg");
INSERT INTO `tbl_cat` VALUES("8","HUMAN RESOURCE","8_hr.jpg");
INSERT INTO `tbl_cat` VALUES("11","EDUCATIONS","11_teacher.jpg");
INSERT INTO `tbl_cat` VALUES("20","OFFICE MANAGEMENT","20_officem.jpg");
INSERT INTO `tbl_cat` VALUES("24","BUSINESS DEVELOPMENT","24_business-development.jpg");
INSERT INTO `tbl_cat` VALUES("26","INFORMATION TECHNOLOGY ","26_images.jpg");
INSERT INTO `tbl_cat` VALUES("31","MEDIA","31_images(7).jpg");
INSERT INTO `tbl_cat` VALUES("32","SECURITY","32_images(8).jpg");
INSERT INTO `tbl_cat` VALUES("33","GOVERNMENT","33_download(1).jpg");



DROP TABLE IF EXISTS `tbl_city`;

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_city` VALUES("1","Karachi");
INSERT INTO `tbl_city` VALUES("2","Islamabad");



DROP TABLE IF EXISTS `tbl_clevel`;

CREATE TABLE `tbl_clevel` (
  `clevel_id` int(11) NOT NULL AUTO_INCREMENT,
  `clevel_name` varchar(255) NOT NULL,
  PRIMARY KEY (`clevel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_clevel` VALUES("1","Entry Level");
INSERT INTO `tbl_clevel` VALUES("3","Intermediate Level");
INSERT INTO `tbl_clevel` VALUES("4","Experienced/Non-Managerial");
INSERT INTO `tbl_clevel` VALUES("5","Managerial");



DROP TABLE IF EXISTS `tbl_company`;

CREATE TABLE `tbl_company` (
  `comp_id` int(20) NOT NULL AUTO_INCREMENT,
  `owner_id` int(50) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `head_name` varchar(255) NOT NULL,
  `head_hrdepartment` varchar(255) NOT NULL,
  `head_cnic` varchar(255) NOT NULL,
  `job_designation` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `product_service` varchar(255) NOT NULL,
  `ownership` varchar(255) NOT NULL,
  `comp_address` varchar(255) NOT NULL,
  `comp_country` varchar(255) NOT NULL,
  `comp_city` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `comp_url` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `no_employee` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'active 1,deactive 0',
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_company` VALUES("1","71","Ebmacs","dk","Ahmed jamal","Hanan","880989898","Software","Telecom","software Development","Public","G11,islamabad","pa","Islamabad","xyz","skzaman630@gmail.com","Mujahid","www.ebmacs.com","3128336622","3128336622","10-20","http://www.jobs360.com.pk/uploads/company_logo/company_7.jpg","1");
INSERT INTO `tbl_company` VALUES("2","71","Job 360pk","Gb","Muhammad Ahsen Qazi","Muhammad Ahsen Qazi","989889898","Software","Telecom","service","Public","G11,islamabad","Islamabad, Islamabad Capital Territory, Pakistan","Islamabad","abcd","superadmin@gmail.com","Ahmed jamal Ikram","www.ebmacs.com","98989898","989","10-20","http://www.jobs360.com.pk/uploads/company_logo/company_7.jpg","1");
INSERT INTO `tbl_company` VALUES("3","71","Touch Stone","Janjua Group","Janjua","Obaid khan","8989898989","telesale","Telecom","Insurance,security systems","Private","Blue area Islamabad","Pakistan","Islamabad","Touch stone is a company which provide best solution of your home security and provide a best plan of insurance for your secure life ","janju@gmail.com","noor","www.touchstone.com","3128336622","099677777","20-30","http://www.jobs360.com.pk/uploads/company_logo/company_7.png","1");
INSERT INTO `tbl_company` VALUES("4","71","Friendscorporation","sk","Shahid","Muhammad Ahsen Qazi","98998","Software","IT Software","software Development","Private","G11,islamabad","Pakistan","Islamabad","pfriendscorporation","skzaman630@gmail.com","shahid","www.friendscorporation.com","3128336622","3128336622","10-20","http://www.jobs360.com.pk/uploads/company_logo/company_75.png","1");
INSERT INTO `tbl_company` VALUES("5","71","nc","kjdk","jak","jdkaj","kdjkfj","jdkjaf","Telecom","Insurance,security systems","Private","G11,islamabad","Pakistan","Islamabad","dfasffdas","user@gmail.com","noor","www.ebmacs.com","3128336622","3128336622","1-10","http://www.jobs360.com.pk/uploads/company_logo/company_dummy.jpg","0");
INSERT INTO `tbl_company` VALUES("6","71","Job 360pk","skgroup","Muhammad Ahsen Qazi","Muhammad Ahsen Qazi","090909","services","Businees","service","Private","G11,islamabad","DD Colony, Hyderabad, Telangana, India","Islamabad","here you define your company ","user@gmail.com","noor","www.ebmacs.com","3128336622","3128336622","1-10","http://www.jobs360.com.pk/uploads/company_logo/company_7.jpg","0");
INSERT INTO `tbl_company` VALUES("7","239","jobs360","jobs portal","Ahsen Qazi","Faiza minhas","154721254855","CEO","Businees","jobs services","Private","asxz","Pakistan","islamabad","Hr consultants","admin@example.com","Ahsen Qazi","www.jobs360.com.pk","03363603603","03363603603","1-10","http://www.jobs360.com.pk/uploads/company_logo/company_7.png","0");
INSERT INTO `tbl_company` VALUES("8","283","jobs360","services","Muhammad Ali","Ahmad ","Noman Khan ","Head of the Company ","Businees","Recruitment ","Private","3/12 Silk Center ","Pakistan","Rawalpindi","Jobs360 is a Human Resource Consultancy Company. The aim is to provide superior HR services to the clients. We act as a bridge between the employer and employees, guiding both in light of our experience. Job seekers are provided a forum to apply for jobs. Employers can post jobs and can receive right candidates quickly and easily. Let jobs360 serve you better. The Core values include Trust, Competency and Integrity.\n\nMr. Muhammad Ahsen Qazi is the CEO of Jobs360 Pvt Ltd. Company, who is an Aut","faizaminhas_7@live.com","Faiza","http://www.jobs360.com.pk/","03353603603","12345","1-10","http://www.jobs360.com.pk/uploads/company_logo/company_8.jpg","0");
INSERT INTO `tbl_company` VALUES("9","283","jobs360","services","Muhammad Ali","Ahmad ","Noman Khan ","Head of the Company ","Businees","Recruitment ","Private","3/12 Silk Center ","Pakistan","Rawalpindi","Jobs360 is a Human Resource Consultancy Company. The aim is to provide superior HR services to the clients. We act as a bridge between the employer and employees, guiding both in light of our experience. Job seekers are provided a forum to apply for jobs. Employers can post jobs and can receive right candidates quickly and easily. Let jobs360 serve you better. The Core values include Trust, Competency and Integrity.\n\nMr. Muhammad Ahsen Qazi is the CEO of Jobs360 Pvt Ltd. Company, who is an Aut","faizaminhas_7@live.com","Faiza","http://www.jobs360.com.pk/","03353603603","12345","1-10","http://www.jobs360.com.pk/uploads/company_logo/company_9.jpg","0");



DROP TABLE IF EXISTS `tbl_compimages`;

CREATE TABLE `tbl_compimages` (
  `compimages_id` int(11) NOT NULL AUTO_INCREMENT,
  `compimages_name` varchar(200) NOT NULL,
  `compimages_image` varchar(200) NOT NULL,
  PRIMARY KEY (`compimages_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_compimages` VALUES("14","WOOD KASTLE ","14_WKLOGO.jpg");
INSERT INTO `tbl_compimages` VALUES("17","GROUP 101","17_download.jpg");
INSERT INTO `tbl_compimages` VALUES("16","Ghouri Security","16_Ghouri.jpg");
INSERT INTO `tbl_compimages` VALUES("18","DANDOT CEMENT","18_download(1).jpg");
INSERT INTO `tbl_compimages` VALUES("20","TSS-Security","20_TSSlogo.png");
INSERT INTO `tbl_compimages` VALUES("15","MURREE BREWERY ","15_og_image.jpg");
INSERT INTO `tbl_compimages` VALUES("19","BESTWAY CEMENT ","19_download(2).jpg");



DROP TABLE IF EXISTS `tbl_job`;

CREATE TABLE `tbl_job` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `clevel_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `job_emptype` varchar(50) NOT NULL,
  `job_vacancies` varchar(50) NOT NULL,
  `job_sdate` date NOT NULL,
  `job_edate` date NOT NULL,
  `job_explevel` varchar(20) NOT NULL,
  `job_edatestatus` varchar(50) NOT NULL,
  `job_shift` varchar(20) NOT NULL,
  `checkbox_value` int(50) DEFAULT NULL,
  `job_salery_min` int(100) DEFAULT NULL,
  `job_salery_max` int(100) DEFAULT NULL,
  `job_sallery_currency` varchar(25) DEFAULT NULL,
  `benefit_id` int(11) DEFAULT NULL,
  `job_description` text NOT NULL,
  `preffered_skills` text NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_status` varchar(10) NOT NULL DEFAULT '0' COMMENT 'active 1, deactive 0',
  `active/deactive` int(50) NOT NULL DEFAULT '1' COMMENT 'active 1, deactive 0',
  `filter_gender` varchar(5) DEFAULT NULL,
  `filter_experience` varchar(5) DEFAULT NULL,
  `filter_age` varchar(5) DEFAULT NULL,
  `filter_city` varchar(5) DEFAULT NULL,
  `job_age` int(11) NOT NULL,
  `job_gender` varchar(50) NOT NULL,
  `job_pstatus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jobs_id`),
  UNIQUE KEY `jobs_id` (`jobs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_job` VALUES("1","71","1","Java developer ","1","1","9","1","part-time","12","2017-07-14","2017-07-14","4","$option_value","Morning Shift",NULL,"0","5000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","java,html,css","Islamabad, Islamabad Capital Territory, Pakistan","1","0","on","on","on","on","24","Male","0");
INSERT INTO `tbl_job` VALUES("2","71","2","Asp.net JOB ","1","1","9","1","part-time","10","2017-07-18","2017-07-22","2 Year","active_stop_cv","Morning Shift",NULL,"10000","15000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","java,html,css","Islamabad, Islamabad Capital Territory, Pakistan","1","1","0","0","0","0","0","","1");
INSERT INTO `tbl_job` VALUES("3","71","1","PHP JOB","1","1","9","1","full-time","15","2017-07-18","2017-07-28","2 Year","active_stop_cv","Evening Shift",NULL,"5000","15000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","java,html,css","Islamabad, Islamabad Capital Territory, Pakistan","1","1","0","0","0","0","0","","1");
INSERT INTO `tbl_job` VALUES("4","71","3","PHP DEVELOPER","1","1","9","1","remote","10","2017-07-20","2017-07-28","2 Year","job_active","Morning Shift",NULL,"15000","30000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","","Karachi, Sindh, Pakistan","1","1","0","0","0","0","0","","1");
INSERT INTO `tbl_job` VALUES("5","71","2","HR Manager","5","1","3","0","full-time","5","2017-07-29","2017-07-22","2 Year","active_stop_cv","evening_shift",NULL,"30000","50000","PKR","3","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","","Islamabad, Islamabad Capital Territory, Pakistan","1","1","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("6","71","4","Php developer","1","1","9","2","part-time","12","2017-07-31","2017-07-14","4 Year","$option_value","$option_value",NULL,"10000","15000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","","Islamabad, Islamabad Capital Territory, Pakistan","1","0","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("7","71","5","Front End Developer","3","1","9","1","full-time","2","2017-08-01","2017-08-01","3 Year","$option_value","morning_shift",NULL,"0","50000","PKR","1","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","","Islamabad Capital Territory, Pakistan","1","0","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("8","71","1","Graphic Designer","1","1","3","0","weekend","4","2017-08-02","2017-08-23","< 1 Year","job_active","morning_shift",NULL,"25000","40000","PKR","0","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference. If you like to work in a progressive, push yourself, and success driven environment then our Club is your place. We are looking","","Lahore, Punjab, Pakistan","1","0","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("9","71","2","HR Manager","4","1","0","0","full-time","3","2017-08-02","2017-08-31","5 Year","job_active","evening_shift","1","40000","70000","PKR","1","Hr Manager..","","Karachi, Sindh, Pakistan","1","0","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("10","71","3","java","1","2","7","0","part-time","1","2017-08-02","2017-07-10","< 1 Year","active_stop_cv","Evening Shift","1","0","0","PKR","0","We are looking for Full Time Tennis Professionals that are passionate, hardworking, and have a great personality / attitude and who want to make a difference.","","Karachi, Sindh, Pakistan","1","1","0","0","0","0","0","","1");
INSERT INTO `tbl_job` VALUES("11","71","5","new 2","1","1","9","1","temporary/contract","10","2017-08-07","2017-08-07","2 Year","$option_value","$option_value","1","10000","150000","PKR","1","asdflkj aljsd f","","Islamabad, Islamabad Capital Territory, Pakistan","1","0","0","0","0","0","0","","0");
INSERT INTO `tbl_job` VALUES("12","71",NULL,"Test Job","4","1","3","0","full-time","2","2017-08-30","2017-08-10","1 Year","active_stop_cv","evening_shift","1","15000","30000",NULL,"1","this is test job","","Islamabad, Islamabad Capital Territory, Pakistan","1","0",NULL,"on","on",NULL,"0","Female","1");
INSERT INTO `tbl_job` VALUES("13","71",NULL,"Test Job","3","1","3","0","full-time","1","2017-08-30","2017-08-10","1 Year","remove_job_stop_cv","evening_shift","1","15000","30000",NULL,"4","test job","","Islamabad, Islamabad Capital Territory, Pakistan","1","1","on","on",NULL,NULL,"15","Male","0");
INSERT INTO `tbl_job` VALUES("14","165",NULL,"Customer Relation Officer","1","1","3","0","full-time","05","2017-09-09","2017-09-30","< 1 Year","job_active","morning_shift",NULL,"30000","50000",NULL,"0","A well reputed organization is looking for Part time or Full time Customer Relation officer. The suitable candidates should have strong communication and interpersonal skills. Limited seats are available for this position for a very short period of time. Only short listed candidates will be called for the interview. \nNOTE: Clearly mention your present mailing address and your personal mobile number for interview call.\nEligibility criteria: Minimum qualification is Bachelor or above. No experience is required. The candidates living near Rawalpindi/Islamabad will be preferred for this post.","","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,"on","0","Male","0");
INSERT INTO `tbl_job` VALUES("15","71",NULL,"sep 4 job test","1","1","0","0","full-time","2","2017-10-04","2017-10-05","2 Year","active_stop_cv","morning_shift","1","15000","30000",NULL,"4","desciption","","Islamabad, Islamabad Capital Territory, Pakistan","1","1","on",NULL,NULL,NULL,"35","Male","0");
INSERT INTO `tbl_job` VALUES("49","294",NULL,"Web Developer","3","25",NULL,"0","full-time","2","2018-01-11","2018-01-18","1 Year","active_stop_cv","morning_shift",NULL,"10000","15000","PKR","1","This is About Web Development","Php \nHtml \ncss\njava script\nj Query\nbootstrap","Karachi, Sindh, Pakistan","1","1","on","on","on",NULL,"15","all","0");
INSERT INTO `tbl_job` VALUES("17","186",NULL,"test job","1","1","0","0","full-time","1","2017-10-05","2017-10-31","< 1 Year","job_active","morning_shift",NULL,"15000","30000",NULL,"1","Designer must have expertise in layering, styling and document management in indesign. (must have)\nAlong with the technical expertise, imagination is needed to create a good-looking book and the knowledge of what good books looks like. (must have)\nAbility to Handle Tables, Columns, Vertical and Horizontal spaces, Paragraph Style Sheets, Character Style Sheets, Master Pages, Merging and Splitting of InDesign File, create PDF.\nAbility to make CONTENT link of the pages in indesign.\nAbility to check Fonts in PDF, Interactive PDFS, Fillable forms in PDF, Hyperlinking & Bookmarking, math type and power type.\nAt least 2-3 Year working experience in InDesign\nBasic knowledge of Fonts, Activation and Deactivation\nAbility to Read Work Order, client instructions.\nAbility to solve complex Indesign rendering and performance issues\nMust have  knowledge of Adobe CC\nSkills\n\nBookmarking, COLUMNS, Interactive PDFS, Merging and Splitting of InDesign File, Ability to make CONTENT link, Ability to Handle Tables, Vertical and Horizontal spaces, Paragraph Style Sheets, Master Pages, Character Style Sheets\nJob Details\n\nIndustry: Information Technology\nFunctional Area: Creative Design\nTotal Positions: 10 Posts\nJob Shift: First Shift (Day)\nJob Type: Full Time/Permanent\nJob Location: Islamabad, Pakistan\nGender: No Preference\nAge: 27 - 31 Years\nMinimum Education: Bachelors\nCareer Level: Experienced Professional\nMinimum Experience: 1 Year\nApply Before: Oct 05, 2017\nPosting Date: Oct 05, 2017","","Rawalpindi, Punjab, Pakistan","1","1","on",NULL,NULL,"on","25","Male","0");
INSERT INTO `tbl_job` VALUES("18","214",NULL,"HR Assistant ","1","1","3","0","full-time","2","2017-10-18","2017-11-08","1 Year","job_active","morning_shift",NULL,"15000","20000",NULL,"1","The individual will be heavily involved in all aspects of the application - design/architect/build (database, web, client apps, services and system interfaces). Individual must be able to work independently and handle team members. Individual must also have a proven track record of delivering projects in time and with highest possible quality. \n\nThe person we are looking to hire should have some experience with most if not all areas of .NET including (list is in priority):\n\n","Good understanding of C#","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"20","all","0");
INSERT INTO `tbl_job` VALUES("19","214",NULL,"PHP Developer","1","1","3","0","full-time","2","2017-10-18","2017-11-01","1 Year","job_active","morning_shift","1","15000","20000",NULL,"0","3+ Years of Work experience in Front-end Development. Should be proficient in:\nHTML5/CSS3/SASS/JavaScript/jQuery\nBootstrap 4/Foundation 6/Material Design\nGrunt/Gulp Workflow\nKnowledge of Angular JS/React JS will be plus\nStrong WP experience in:\nWordPress theme development from scratch (and child theme development, multisite WP, theme customization etc)\nWordPress plugin development from scratch (and customization)\nIn theme/plugin development, they can make Theme Options in WP Admin panel, CPTs, Custom Taxonomies, Custom Metaboxes, Widgets etc\nCan work with WP Rest API and Customizer API\nCan integrate Third Party Frameworks like Redux, Options Tree etc\nCan work on WordPress websites performances and speed optimization.","Good understanding of C#","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"25","all","0");
INSERT INTO `tbl_job` VALUES("20","238",NULL,"Sales Exacutive","1","1","0","0","full-time","3","2017-10-20","2017-10-24","1 Year","job_active","morning_shift",NULL,"15000","20000",NULL,"0","A well known compony (jobs360 pvt Ltd) are heiring the sales exactuive ","driving, fluent in English","Rawalpindi, Punjab, Pakistan","1","1",NULL,"on",NULL,NULL,"20","all","0");
INSERT INTO `tbl_job` VALUES("21","239",NULL,"Accountant","1","2","7","0","full-time","2","2017-10-23","2017-10-31","2 Year","job_active","evening_shift","1","15000","20000",NULL,"1","Accountant Job Duties:\nPrepares asset, liability, and capital account entries by compiling and analyzing account information.\nDocuments financial transactions by entering account information.\nRecommends financial actions by analyzing accounting options.\nSummarizes current financial status by collecting information; preparing balance sheet, profit and loss statement, and other reports.\nSubstantiates financial transactions by auditing documents.\nMaintains accounting controls by preparing and recommending policies and procedures.\nGuides accounting clerical staff by coordinating activities and answering questions.\nReconciles financial discrepancies by collecting and analyzing account information.\nSecures financial information by completing data base backups.","\nThis accountant sample job description can assist in your creating a job application that will attract job candidates who are qualified for the job. Feel free to revise this job description to meet your specific job duties and job requirements.Then when you\'re ready, post your job on Monster to reach the right talent -- act now and save 20% when you buy a 60-day job ad!\n\n","Islamabad, Islamabad Capital Territory, Pakistan","1","0",NULL,NULL,NULL,NULL,"25","Male","0");
INSERT INTO `tbl_job` VALUES("22","239",NULL,"new job ","1","1","9","1","full-time","10","2017-10-23","2017-10-26","3 Year","active_stop_cv","evening_shift","1","10000","15000",NULL,"1","description","skills","Islamabad, Islamabad Capital Territory, Pakistan","1","1",NULL,NULL,NULL,NULL,"25","Male","0");
INSERT INTO `tbl_job` VALUES("23","71",NULL,"Php developer","3","1","3","0","part-time","1","2017-10-25","2017-10-25","< 1 Year","$option_value","$option_value",NULL,NULL,NULL,"PKR","1","description here","php,asp.net","Islamabad Capital Territory, Pakistan","1","1","on",NULL,NULL,NULL,"15","Male","0");
INSERT INTO `tbl_job` VALUES("24","244",NULL,"Registered Nurses, Travel Nurses, Family Physicians/GPs, Physical/Occupational Therapists, Pharmacists, Medical Technologists required in USA","3","16",NULL,"0","full-time","1000","2017-10-31","2017-11-30","2 Year","job_active","on_rotation",NULL,"0",NULL,NULL,"1","Registered Nurses, Travel Nurses, Family Physicians/General Practitioners, Physical/Occupational Therapists, Pharmacists, Medical Technologists required in USA: Healthcare Jobs Grow to nearly a Half-Million in a Year : \n\nUS President had announced an initiative to devote US$ 600 million for US job-training program to train workers for skills they need for jobs that are open but hard to fill. American Companies will need 1,200,000 Nurses, 150,000 Pharmacists, 450,000 PTs/OTs, 400,000 Family Physicians/General Practitioners, 522,000 software developers & computer programmers according to the Bureau of Labor Statistics over the next five years. \n\nOver 850,000 replacement nurses alone will be needed in the next 5 years to keep up with the growing patient population according to the Bureau of Labor Statistics. Plus nearly two-thirds of registered nurses over age 54 are now considering retirement, according to survey results released by our Research & Analysis Division and its Center for the Advancement of Healthcare Professionals. US Nurses shortage is growing now..\n\nWe are seeking Nurses for all specialties and Physical/Occupational Therapists, Pharmacists and other healthcare workers for our major hospitals to long-term care facilities, skilled nursing homes, medical groups and clinics, physician offices, pharmaceutical companies, medical colleges & universities in United States. We are partnering with state-of-the-art Hospitals and other healthcare facilities in United States where we have currently over 1000 job locations, hospitals & healthcare facilities across USA in collaboration with our partnering hospitals and facilities. We are a progressive USA based healthcare company pioneering new ways to effectively support and transition foreign trained nurses and other healthcare professionals into US healthcare facilities based on our 40 years of experience in International Recruitment. We are Industry Leaders and Specialists in International Healthcare Recruitment for the USA with over 40 years of experience.\n\nNurses must have ability to work as a fully supporting member of the health care team. Applicants must hold current RN registration with relevant clinical experience. They must have passed or have the ability to pass US licensing exam NCLEX-RN. We are also hiring Physical Therapists / Occupational Therapists, Pharmacists, Medical Technologists and other healthcare professionals. Currently we have all shifts available on permanent, contract and Per Diem basis.\n\nSuccessful applicants will:\n• Have a minimum of 2-3 years of current post graduate experience and may have completed additional post graduate courses.\n• Preference will be given to those nurses who already have the NCLEX-RN but we also offer a full NCLEX review and exam preparations\n• Have a Bachelor’s Degree and meet the hours’ requirements for US licensure.\n• RN (with or without Visa-Screen) but we are also offering Visa-Screen assistance. \n	\nThe visa will be an EB-3 immigrant visa for nurses & EB-2 for PTs/OTs, Pharmacists but we also have non-immigrant work visas to bring nurses in shorter period of time while their immigrant visas will be in process and one of the great things about a work visa, EB-3 & EB-2 is that your spouse can travel with you and work here in the US! For Australian citizens E-3 visa is available and applicants can accompany their spouse while travelling to United States and their spouse can also work in United States. Canadian & Mexican nurses can work on TN visa valid upto three years while processing their EB-3 immigrant visa (green card status).\n","Documents required for RN’s Employment based visa & Green Card Process:\n1.	Employment Application as per US Company Format - signed\n2.	Employment Agreement as per US Company Format - signed\n3.	Skills Checklists (Complete one for each area with post-graduate clinical experience)\n4.	Copy of Nursing License in Home Country & any other country if working in overseas \n5.	Copy of Nursing School Diploma/Degree\n6.	Copy of Nursing School Transcripts\n7.	Updated Resume/Curriculum Vitae\n8.	Copy of y","United States of America","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("25","244",NULL,"Registered Nurses, Travel Nurses, Family Physicians/GPs, Physical/Occupational Therapists, Pharmacists, Medical Technologists required in USA","3","16","0","0","full-time","1000","2017-10-31","2017-11-30","2 Year","job_active","on_rotation",NULL,"0",NULL,NULL,"1","Registered Nurses, Travel Nurses, Family Physicians/General Practitioners, Physical/Occupational Therapists, Pharmacists, Medical Technologists required in USA: Healthcare Jobs Grow to nearly a Half-Million in a Year : \n\nUS President had announced an initiative to devote US$ 600 million for US job-training program to train workers for skills they need for jobs that are open but hard to fill. American Companies will need 1,200,000 Nurses, 150,000 Pharmacists, 450,000 PTs/OTs, 400,000 Family Physicians/General Practitioners, 522,000 software developers & computer programmers according to the Bureau of Labor Statistics over the next five years. \n\nOver 850,000 replacement nurses alone will be needed in the next 5 years to keep up with the growing patient population according to the Bureau of Labor Statistics. Plus nearly two-thirds of registered nurses over age 54 are now considering retirement, according to survey results released by our Research & Analysis Division and its Center for the Advancement of Healthcare Professionals. US Nurses shortage is growing now..\n\nWe are seeking Nurses for all specialties and Physical/Occupational Therapists, Pharmacists and other healthcare workers for our major hospitals to long-term care facilities, skilled nursing homes, medical groups and clinics, physician offices, pharmaceutical companies, medical colleges & universities in United States. We are partnering with state-of-the-art Hospitals and other healthcare facilities in United States where we have currently over 1000 job locations, hospitals & healthcare facilities across USA in collaboration with our partnering hospitals and facilities. We are a progressive USA based healthcare company pioneering new ways to effectively support and transition foreign trained nurses and other healthcare professionals into US healthcare facilities based on our 40 years of experience in International Recruitment. We are Industry Leaders and Specialists in International Healthcare Recruitment for the USA with over 40 years of experience.\n\nNurses must have ability to work as a fully supporting member of the health care team. Applicants must hold current RN registration with relevant clinical experience. They must have passed or have the ability to pass US licensing exam NCLEX-RN. We are also hiring Physical Therapists / Occupational Therapists, Pharmacists, Medical Technologists and other healthcare professionals. Currently we have all shifts available on permanent, contract and Per Diem basis.\n\nSuccessful applicants will:\n• Have a minimum of 2-3 years of current post graduate experience and may have completed additional post graduate courses.\n• Preference will be given to those nurses who already have the NCLEX-RN but we also offer a full NCLEX review and exam preparations\n• Have a Bachelor’s Degree and meet the hours’ requirements for US licensure.\n• RN (with or without Visa-Screen) but we are also offering Visa-Screen assistance. \n	\nThe visa will be an EB-3 immigrant visa for nurses & EB-2 for PTs/OTs, Pharmacists but we also have non-immigrant work visas to bring nurses in shorter period of time while their immigrant visas will be in process and one of the great things about a work visa, EB-3 & EB-2 is that your spouse can travel with you and work here in the US! For Australian citizens E-3 visa is available and applicants can accompany their spouse while travelling to United States and their spouse can also work in United States. Canadian & Mexican nurses can work on TN visa valid upto three years while processing their EB-3 immigrant visa (green card status).\n","Documents required for RN’s Employment based visa & Green Card Process:\n1.	Employment Application as per US Company Format - signed\n2.	Employment Agreement as per US Company Format - signed\n3.	Skills Checklists (Complete one for each area with post-graduate clinical experience)\n4.	Copy of Nursing License in Home Country & any other country if working in overseas \n5.	Copy of Nursing School Diploma/Degree\n6.	Copy of Nursing School Transcripts\n7.	Updated Resume/Curriculum Vitae\n8.	Copy of y","United States","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("26","238",NULL,"test job","1","8","0","0","full-time","1","2017-11-15","2017-11-15","1 Year","$option_value","$option_value",NULL,NULL,NULL,"PKR","9","test","test","Islamabad, Islamabad Capital Territory, Pakistan","1","1","on",NULL,NULL,NULL,"20","Male","0");
INSERT INTO `tbl_job` VALUES("27","71",NULL,"Software Engineer","3","1","2","0","full-time","2","2017-11-21","2017-11-30","1 Year","active_stop_cv","morning_shift","1","15000","20000",NULL,"4","software Engineer required for the web development","PHP,CodeIgnter,c++","Islamabad, Islamabad Capital Territory, Pakistan","0","1","on","on","on","on","25","Male","0");
INSERT INTO `tbl_job` VALUES("28","71",NULL,"Front End Developer","3","1","9","1","intership","2","2017-11-21","2017-11-30","< 1 Year","active_stop_cv","evening_shift",NULL,"10000","15000",NULL,"1","job description","html,javescript","Islamabad Capital Territory, Pakistan","0","1","on","on","on","on","20","Male","0");
INSERT INTO `tbl_job` VALUES("29","238",NULL,"Mechanical Engineering ","4","18","16","0","full-time","1","2017-12-07","0000-00-00","> 5 Year","job_active","on_rotation",NULL,"100000","10000000",NULL,"0","\n •	The Individual  Is required to work in a leading name in the FM CG\n•	Evaluates mechanical and electromechanical systems and products by designing and conducting research programs; applying principles of mechanics, thermodynamics, hydraulics, heat transfer, and materials.\n•	Confirms system and product capabilities by designing feasibility and testing methods; testing properties.\n•	Develops manufacturing processes by designing and modifying equipment for fabricating, building, assembling, and installing components.\n•	Assures system and product quality by designing testing methods; testing finished- product and system capabilities; confirming fabrication, assembly, and installation processes.\n•	Prepares product reports by collecting, analyzing, and summarizing information and trends.\n•	Provides engineering information by answering questions and requests.\n•	Maintains product and company reputation by complying with government regulations.\n","Best Mechanical Engineering Experience ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"45","all","0");
INSERT INTO `tbl_job` VALUES("30","238",NULL,"Corporate Assistant ","4","20",NULL,"0","temporary/contract","1","2017-12-07","0000-00-00","3 Year","job_active","morning_shift","1","0",NULL,NULL,"0","•	A leading name in the FMCG Sector is looking for the services of Corporate Assitant \n•	The Individual will be responsible for maintaining good relationship with SECP, Stakeholders and Shareholders. \n•	Relevant degree to carry out the job is mandatory \n•	Experience in a similar position is pereferable \n","Good leadership skills \nWriting Skills \nLearning skills\nComputer Skills ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("31","238",NULL,"Corporate Assistant ","4","20","0","0","temporary/contract","1","2017-12-07","0000-00-00","3 Year","job_active","morning_shift","1","0",NULL,NULL,"0","•	A leading name in the FMCG Sector is looking for the services of Corporate Assitant \n•	The Individual will be responsible for maintaining good relationship with SECP, Stakeholders and Shareholders. \n•	Relevant degree to carry out the job is mandatory \n•	Experience in a similar position is pereferable \n","Good leadership skills \nWriting Skills \nLearning skills\nComputer Skills ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("32","238",NULL,"Corporate Assistant ","4","20","0","0","temporary/contract","1","2017-12-07","0000-00-00","3 Year","job_active","morning_shift","1","0",NULL,NULL,"0","•	A leading name in the FMCG Sector is looking for the services of Corporate Assitant \n•	The Individual will be responsible for maintaining good relationship with SECP, Stakeholders and Shareholders. \n•	Relevant degree to carry out the job is mandatory \n•	Experience in a similar position is pereferable \n","Good leadership skills \nWriting Skills \nLearning skills\nComputer Skills ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("33","238",NULL,"Corporate Assistant ","4","20","0","0","temporary/contract","1","2017-12-07","0000-00-00","3 Year","job_active","morning_shift","1","0",NULL,NULL,"0","•	A leading name in the FMCG Sector is looking for the services of Corporate Assitant \n•	The Individual will be responsible for maintaining good relationship with SECP, Stakeholders and Shareholders. \n•	Relevant degree to carry out the job is mandatory \n•	Experience in a similar position is pereferable \n","Good leadership skills \nWriting Skills \nLearning skills\nComputer Skills ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"0","all","0");
INSERT INTO `tbl_job` VALUES("34","280",NULL,"Laravel Developer","4","1","2","0","full-time","2","2017-12-07","2017-12-07","< 1 Year","active_stop_cv","morning_shift",NULL,"20000","30000",NULL,"1","xyz","Team Lead\nGood communication skills\nWork under pressure\nGood command of opp\n\n","Karachi, Sindh, Pakistan","0","1",NULL,NULL,NULL,NULL,"25","Male","0");
INSERT INTO `tbl_job` VALUES("35","280",NULL,"fda","4","1","2","0","intership","2","2017-12-07","2017-12-22","2 Year","job_active","night_shift",NULL,"0",NULL,NULL,"1","fddf","dfasf","Islamabad, Islamabad Capital Territory, Pakistan","1","1","on",NULL,NULL,NULL,"25","Male","0");
INSERT INTO `tbl_job` VALUES("50","238",NULL,"Teacher ","3","11",NULL,"0","full-time","5","2018-01-22","2018-01-30","2 Year","job_active","morning_shift",NULL,"15000","20000","PKR","9"," A well known Education system required  subjects teacher for their schools in Islamabad.\n  ","Good communications , ","Islamabad, Islamabad Capital Territory, Pakistan","1","1",NULL,NULL,NULL,NULL,"20","all","0");
INSERT INTO `tbl_job` VALUES("37","280",NULL,"Node js Developer","3","1","2","0","full-time","6","2017-12-07","2017-12-29","1 Year","active_stop_cv","evening_shift","1","10000","15000",NULL,"4","this job","Good leadership\nTeam lead","Lahore, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"15","Male","0");
INSERT INTO `tbl_job` VALUES("38","280",NULL,"Software Engineer","3","18","15","0","full-time","2","2017-12-07","2017-12-14","< 1 Year","job_active","morning_shift",NULL,"15000","20000",NULL,"1","This job is about Engineering...","Team player\nWork under pressure\nMeet deadline\n","London, United Kingdom","1","1",NULL,"on",NULL,NULL,"25","Female","0");
INSERT INTO `tbl_job` VALUES("39","238",NULL,"Corporate Assistant ","4","20",NULL,"0","temporary/contract","1","2017-12-08","0000-00-00","3 Year","job_active","morning_shift","1","30000","50000",NULL,"0","•	A leading name in the FMCG Sector is looking for the services of Corporate Assitant \n•	The Individual will be responsible for maintaining good relationship with SECP, Stakeholders and Shareholders. \n•	Relevant degree to carry out the job is mandatory \n•	Experience in a similar position is pereferable \n","Verbal communication\ncomputer skills","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"25","all","0");
INSERT INTO `tbl_job` VALUES("40","238",NULL,"Receptionist ","3","20",NULL,"0","temporary/contract","1","2017-12-08","0000-00-00","2 Year","job_active","morning_shift",NULL,"15000","20000",NULL,"0","•	Welcomes visitors by greeting them, in person or on the telephone; answering or referring inquiries.\n•	Directs visitors by maintaining employee and department directories; giving instructions.\n•	Maintains security by following procedures; monitoring logbook; issuing visitor badges.\n•	Maintains telecommunication system by following manufacturer\'s instructions for house phone and console\noperation.\n\n•	Maintains safe and clean reception area by complying with procedures, rules, and regulations.\n•	Maintains continuity among work teams by documenting and communicating actions, irregularities, and continuing needs\n.\n•	Contributes to team effort by accomplishing related results as needed.\n \n","Verbal communication\nTelephone skills","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"20","Female","0");
INSERT INTO `tbl_job` VALUES("41","280",NULL,"Android Developer","4","2","7","0","full-time","3","2017-12-11","2017-12-27","1 Year","job_active","morning_shift","1","20000","30000",NULL,"1","This is regarding Android..","Java \nC++\nMYsql\nXml\nIonic","London, United Kingdom","0","1",NULL,"on","on",NULL,"20","Female","0");
INSERT INTO `tbl_job` VALUES("42","280",NULL,"Dot Net Developer","3","22","2","0","full-time","1","2017-12-11","2017-12-21","2 Year","active_stop_cv","evening_shift","1","30000","50000","PLN","1","LOL","LOL","Lahore, Punjab, Pakistan","1","1",NULL,"on",NULL,NULL,"30","Male","0");
INSERT INTO `tbl_job` VALUES("43","280",NULL,"Front End Developer","3","1","9","1","intership","2","2017-12-11","2017-12-13","2 Year","job_active","morning_shift","1","15000","20000","KES","1","explain here","html\ncss\nbootstrap\nangular js\n","San Francisco, CA, United States","1","1",NULL,NULL,"on",NULL,"25","Male","0");
INSERT INTO `tbl_job` VALUES("44","283",NULL,"Security Officer ","1","32",NULL,"0","part-time","2","2017-12-18","2017-12-19","2 Year","job_active","morning_shift","1","10000","15000","PKR","1","we need a security office for the company ","verbal and communication skills ","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"20","Male","0");
INSERT INTO `tbl_job` VALUES("45","283",NULL,"Security Officer ","1","32","0","0","part-time","2","2017-12-18","2017-12-18","2 Year","job_active","morning_shift",NULL,NULL,NULL,"PKR","1","we need a security office for the company ","verbal and communication skills ","Islamabad, Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"20","Male","0");
INSERT INTO `tbl_job` VALUES("46","289",NULL,"new job","1","22",NULL,"0","full-time","10","2017-12-23","2017-12-20","2 Year","active_stop_cv","night_shift","1","10000","15000","PKR","1","JOBS","SKILS","islmabad","1","1",NULL,NULL,NULL,NULL,"20","Male","0");
INSERT INTO `tbl_job` VALUES("47","246",NULL,"Content Researcher +","3","31",NULL,"0","seasonal","2","2018-01-01","2018-01-15","3 Year","job_active","morning_shift","1","10000","15000","PKR","1","Writers can produce a wide variety of content for the Web, from articles and reviews to game scripts. Most Web content writers are self-employed and work as freelancers. They can often make their own schedules, but they may have to work odd hours to meet the demands of multiple clients. These writers also can have the added pressure of constantly searching for additional writing assignments.","knowledge of standard writing practices, basic design fundamentals, web optimization, and digital content management systems; ability to meet deadlines, follow guidelines, and communicate with clients","Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"25","Female","0");
INSERT INTO `tbl_job` VALUES("48","239",NULL,"news producer","4","31",NULL,"0","full-time","2","2018-01-09","2018-01-31","3 Year","job_active","morning_shift","1","20000","30000","PKR","1","we need a news producer in a company","communication skills \ninterpersonal skills ","Islamabad, Rawalpindi, Punjab, Pakistan","1","1",NULL,NULL,NULL,NULL,"30","all","0");
INSERT INTO `tbl_job` VALUES("51","313",NULL,"Team Leader","1","19",NULL,"0","part-time","11","2018-03-01","2018-03-15","< 1 Year","job_active","evening_shift",NULL,"30000","50000","PKR","3","We are looking for a qualified team leader to manage our team and provide effective guidance. You will be responsible for supervising, managing and motivating team members on a daily basis.\n\nAs a team leader, you will be the contact point for all team members, so your communication skills should be excellent. You should also be able to act proactively to ensure smooth team operations and effective collaboration.\n\nUltimately, you should lead by setting a good example and engage the team to achieve goals.","Management or training in team leading is a plus\nProven work experience as a team leader or supervisor\nSet clear team goals","Rawalpindi, Islamabad, Pakistan","0","1",NULL,NULL,NULL,NULL,"0","all","0");



DROP TABLE IF EXISTS `tbl_save_jobs`;

CREATE TABLE `tbl_save_jobs` (
  `save_job_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`save_job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_save_jobs` VALUES("24","32","5");
INSERT INTO `tbl_save_jobs` VALUES("27","32","4");
INSERT INTO `tbl_save_jobs` VALUES("28","32","1");
INSERT INTO `tbl_save_jobs` VALUES("29","96","1");
INSERT INTO `tbl_save_jobs` VALUES("30","104","1");
INSERT INTO `tbl_save_jobs` VALUES("32","137","3");
INSERT INTO `tbl_save_jobs` VALUES("33","138","4");
INSERT INTO `tbl_save_jobs` VALUES("34","171","4");
INSERT INTO `tbl_save_jobs` VALUES("35","171","5");
INSERT INTO `tbl_save_jobs` VALUES("36","171","12");
INSERT INTO `tbl_save_jobs` VALUES("37","171","2");
INSERT INTO `tbl_save_jobs` VALUES("38","177","5");
INSERT INTO `tbl_save_jobs` VALUES("39","177","10");
INSERT INTO `tbl_save_jobs` VALUES("40","197","2");
INSERT INTO `tbl_save_jobs` VALUES("41","205","15");
INSERT INTO `tbl_save_jobs` VALUES("42","220","15");
INSERT INTO `tbl_save_jobs` VALUES("43","172","20");
INSERT INTO `tbl_save_jobs` VALUES("44","172","18");
INSERT INTO `tbl_save_jobs` VALUES("45","237","20");
INSERT INTO `tbl_save_jobs` VALUES("46","237","19");
INSERT INTO `tbl_save_jobs` VALUES("47","245","18");
INSERT INTO `tbl_save_jobs` VALUES("48","278","15");
INSERT INTO `tbl_save_jobs` VALUES("49","278","18");
INSERT INTO `tbl_save_jobs` VALUES("50","278","45");
INSERT INTO `tbl_save_jobs` VALUES("51","285","43");
INSERT INTO `tbl_save_jobs` VALUES("52","278","50");



DROP TABLE IF EXISTS `tbl_skill`;

CREATE TABLE `tbl_skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_skill` VALUES("1","1","9","Bootstrap");
INSERT INTO `tbl_skill` VALUES("2","1","9","html5");
INSERT INTO `tbl_skill` VALUES("3","1","9","Jquery");
INSERT INTO `tbl_skill` VALUES("9","1","9","new scale");
INSERT INTO `tbl_skill` VALUES("8","1","9","Ajax");



DROP TABLE IF EXISTS `tbl_subcat`;

CREATE TABLE `tbl_subcat` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_subcat` VALUES("2","1","Php");
INSERT INTO `tbl_subcat` VALUES("3","1","wordpress");
INSERT INTO `tbl_subcat` VALUES("7","2","Java");
INSERT INTO `tbl_subcat` VALUES("9","1","front end");
INSERT INTO `tbl_subcat` VALUES("10","1","Laravel");
INSERT INTO `tbl_subcat` VALUES("21","31","Electronic Media");
INSERT INTO `tbl_subcat` VALUES("15","18","Electrical Engineering ");
INSERT INTO `tbl_subcat` VALUES("16","18","Mechanical  Engineering");
INSERT INTO `tbl_subcat` VALUES("17","18","Civil Engineering ");
INSERT INTO `tbl_subcat` VALUES("18","25","Web developers ");
INSERT INTO `tbl_subcat` VALUES("19","25","Android developers ");
INSERT INTO `tbl_subcat` VALUES("20","25","IOs developers ");
INSERT INTO `tbl_subcat` VALUES("22","31","Print Media");



DROP TABLE IF EXISTS `tbl_user_cat`;

CREATE TABLE `tbl_user_cat` (
  `tbl_user_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subcat_id` varchar(500) NOT NULL,
  `level` varchar(300) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`tbl_user_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_user_cat` VALUES("1","1,2,3","73","3,9","1","");
INSERT INTO `tbl_user_cat` VALUES("4","1,2","74","3,9,7","3","");
INSERT INTO `tbl_user_cat` VALUES("5","1,2","75","3,9,7","1","");
INSERT INTO `tbl_user_cat` VALUES("6","1,2","76","3,9,7","4","");
INSERT INTO `tbl_user_cat` VALUES("7","1,2","77","3,9,7","5","");
INSERT INTO `tbl_user_cat` VALUES("8","1,2","79","3,9,7","3","");
INSERT INTO `tbl_user_cat` VALUES("9","1,2","32","7,9","1","");
INSERT INTO `tbl_user_cat` VALUES("10","1","81","3,9","3","");
INSERT INTO `tbl_user_cat` VALUES("11","1,2","85","3,9,7","","");
INSERT INTO `tbl_user_cat` VALUES("19","1,2","51","7,9","","");
INSERT INTO `tbl_user_cat` VALUES("20","1,2","71","3,9","","");
INSERT INTO `tbl_user_cat` VALUES("21","20","288","2,2","","");
INSERT INTO `tbl_user_cat` VALUES("22","1,5,8","0","2,2","","");
INSERT INTO `tbl_user_cat` VALUES("23","1","96","3","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("24","1,2","101","3,9,7","5","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("25","1,1","0","9,9","","");
INSERT INTO `tbl_user_cat` VALUES("26","1,8","0","9,9","","");
INSERT INTO `tbl_user_cat` VALUES("27","1,2","0","9,9","","");
INSERT INTO `tbl_user_cat` VALUES("28","1,2","207","3,9,7","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("29","1,2","111","3,3","","");
INSERT INTO `tbl_user_cat` VALUES("30","1,2,3","0","3,3","","");
INSERT INTO `tbl_user_cat` VALUES("31","1,1","114","3,3","","");
INSERT INTO `tbl_user_cat` VALUES("32","1,2","111","3,3","","");
INSERT INTO `tbl_user_cat` VALUES("33","1,1","119","3,3","","");
INSERT INTO `tbl_user_cat` VALUES("34","1,1","120","3,9","","");
INSERT INTO `tbl_user_cat` VALUES("35","1,2","137","3,9,7","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("36","1,2","138","3,9,7","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("37","1","57","3,9","7","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("38","8,9","159","","","");
INSERT INTO `tbl_user_cat` VALUES("39","1,","162","3,","","");
INSERT INTO `tbl_user_cat` VALUES("40","1,","163","3,9","","");
INSERT INTO `tbl_user_cat` VALUES("41","11","164","","","");
INSERT INTO `tbl_user_cat` VALUES("42","1,2,3,5,8,11","166","3,9,7,2","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("43","5","168","2","4","Lahore, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("44","5","169","2","1","Sindh, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("45","11","170","","","");
INSERT INTO `tbl_user_cat` VALUES("46","1","34","3,9","","");
INSERT INTO `tbl_user_cat` VALUES("47","1","171","3,9","4","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("48","8","173","","","");
INSERT INTO `tbl_user_cat` VALUES("49","5","174","2","3","Rawalpindi, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("50","11","175","","","");
INSERT INTO `tbl_user_cat` VALUES("51","8","176","","","");
INSERT INTO `tbl_user_cat` VALUES("52","8","177","","","");
INSERT INTO `tbl_user_cat` VALUES("53","1","178","3,9","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("54","5","182","2","5","Lahore, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("55","8","172","","","");
INSERT INTO `tbl_user_cat` VALUES("56","8","183","","","");
INSERT INTO `tbl_user_cat` VALUES("57","11","184","","","");
INSERT INTO `tbl_user_cat` VALUES("58","1","185","3,9","1","Rawalpindi, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("59","1","197","","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("60","1","199","","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("61","","203","","4","Lahore, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("62","11","204","","5","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("63","1","198","","1","London, United Kingdom");
INSERT INTO `tbl_user_cat` VALUES("64","","205","","4","Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("65","1","206","","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("66","11","209","","4","Peshawar, Khyber Pakhtunkhwa, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("67","5","208","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("68","5","210","","6","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("69","11","211","","5","Rawalpindi");
INSERT INTO `tbl_user_cat` VALUES("70","8","220","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("71","1","221","","1","Karachi, Sindh, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("72","1","223","","8","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("73","1","234","","5","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("74","1","237","","1","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("75","2","236","","4","ISL");
INSERT INTO `tbl_user_cat` VALUES("76","2,","240","7,","","");
INSERT INTO `tbl_user_cat` VALUES("77","1","243","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("78","8","245","","4","Rawalpindi, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("95","1,","251","2,","","");
INSERT INTO `tbl_user_cat` VALUES("96","","252","","5","Karachi, Sindh, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("97","","255","","4","Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("98","1,","258","2,","","");
INSERT INTO `tbl_user_cat` VALUES("99","8","261","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("100","8","278","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("101","1","280","","5","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("102","8","285","","3","Pakistan");
INSERT INTO `tbl_user_cat` VALUES("103","31","265","","4","Islamabad, Federal Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("104","21","241","","3","Islamabad, Federal Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("105","26","290","","1","Islamabad, Federal Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("106","19","293","","3","Rawalpindi, Islamabad.");
INSERT INTO `tbl_user_cat` VALUES("107","25","295","","3","Raleigh, NC, United States");
INSERT INTO `tbl_user_cat` VALUES("108","26","296","","5","Lahore, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("109","18","299","","1","Mardan, Khyber Pakhtunkhwa, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("110","20","302","","3","Islamabad, Islamabad Capital Territory, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("111","31","304","","1","Rawalpindi, Punjab, Pakistan");
INSERT INTO `tbl_user_cat` VALUES("112","11","305","","4","Saudi Arabia");
INSERT INTO `tbl_user_cat` VALUES("113","18,11","307","15,16,17","","");
INSERT INTO `tbl_user_cat` VALUES("114","20","309","","4"," Rawalpindi");
INSERT INTO `tbl_user_cat` VALUES("115","20","310","","5","Rawalpindi Cantonment, Rawalpindi, Pakistan");



DROP TABLE IF EXISTS `user_cat`;

CREATE TABLE `user_cat` (
  `user_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`user_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `method` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_ofbirth` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '1 active, o deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` VALUES("32","","",NULL,"hello","pakistan","admin@example.com","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","81dc9bdb52d04dc20036dbd8313ed055",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("57","","",NULL,"shani","putar","shani@gmail.com","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","1234",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("58","","",NULL,"sdf","sdf","sdkfj@slkdfj.com","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","sldfkj",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("59","","",NULL,"sdf","sdf","sdff@dsflkjcomn","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","sdf",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("60","","",NULL,"syed","aylee","adminwkwk@gmail.com","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","12345",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("71","","",NULL,"Shahid","khan","noormuhammad112@gmail.com","Male","","http://www.jobs360.com.pk/uploads/user_image/user_242.jpg","","0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","81dc9bdb52d04dc20036dbd8313ed055","Web Developer","1992-11-02","1","Rawalpindi Pakistan","Pakistan","Rawalpindi Pakistan","5555555555","92515676543","1");
INSERT INTO `users` VALUES("75","","",NULL,"muhammad","nouman","jobseeker@example.com","","","","","0000-00-00 00:00:00","0000-00-00 00:00:00","normal","1234",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("107","","",NULL,"d","b","db@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-08-26-26.png",NULL,"2017-08-29 08:26:26","0000-00-00 00:00:00",NULL,"123",NULL,"2-3","0",NULL,NULL,NULL,NULL,"+93233","1");
INSERT INTO `users` VALUES("108","","",NULL,"fff","gff","d@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-08-33-46.png",NULL,"2017-08-29 08:30:34","0000-00-00 00:00:00",NULL,"123",NULL,"2","0",NULL,NULL,NULL,NULL,"+932","1");
INSERT INTO `users` VALUES("109","","",NULL,"a","b","a@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-08-34-16.png",NULL,"2017-08-29 08:34:16","0000-00-00 00:00:00",NULL,"123",NULL,"2-3-6","0",NULL,NULL,NULL,NULL,"+93123","1");
INSERT INTO `users` VALUES("112","","",NULL,"test","app","test@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-12-08-48.png",NULL,"2017-08-29 12:08:48","0000-00-00 00:00:00",NULL,"12345",NULL,"565","0",NULL,NULL,NULL,NULL,"+93235","1");
INSERT INTO `users` VALUES("114","facebook","1448979651862936",NULL,"Ahsan Imam","Malik","",NULL,NULL,"https://graph.facebook.com/1448979651862936/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2017-08-29 12:19:09","2017-08-30 09:26:42",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("115","","",NULL,"user","test","usertest@yahoo.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-12-46-36.png",NULL,"2017-08-29 12:46:25","0000-00-00 00:00:00",NULL,"123",NULL,"2-3-6","0",NULL,NULL,NULL,NULL,"+933360013739","1");
INSERT INTO `users` VALUES("116","","",NULL,"user","test","user@yahoo.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-12-49-26.png",NULL,"2017-08-29 12:49:19","0000-00-00 00:00:00",NULL,"123",NULL,"2-3-6","0",NULL,NULL,NULL,NULL,"+933360013739","1");
INSERT INTO `users` VALUES("117","","",NULL,"android","developer","android@yahoo.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-12-50-56.png",NULL,"2017-08-29 12:50:56","0000-00-00 00:00:00",NULL,"123",NULL,"2-3-3","0",NULL,NULL,NULL,NULL,"+932","1");
INSERT INTO `users` VALUES("118","","",NULL,"t","v","tv@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-01-00-22.png",NULL,"2017-08-29 12:58:42","0000-00-00 00:00:00",NULL,"123",NULL,"23","0",NULL,NULL,NULL,NULL,"+93233","1");
INSERT INTO `users` VALUES("119","","",NULL,"h","v","hv@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-01-01-05.png",NULL,"2017-08-29 01:01:05","0000-00-00 00:00:00",NULL,"123",NULL,"23-5-6","0",NULL,NULL,NULL,NULL,"+9323","1");
INSERT INTO `users` VALUES("120","","",NULL,"ashir","hafeez","hafeez@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-01-03-53.png",NULL,"2017-08-29 01:03:53","0000-00-00 00:00:00",NULL,"1234",NULL,"5566","0",NULL,NULL,NULL,NULL,"+9355666","1");
INSERT INTO `users` VALUES("122","","",NULL,"a","b","ab@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/29-08-2017-01-29-24.png",NULL,"2017-08-29 01:27:52","0000-00-00 00:00:00",NULL,"123",NULL,"2-3-3","0",NULL,NULL,NULL,NULL,"+9323","1");
INSERT INTO `users` VALUES("124","facebook","1347619235337260",NULL,"Muhammad","Rashid","",NULL,NULL,"https://graph.facebook.com/1347619235337260/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2017-08-29 13:43:03","2017-08-29 13:43:11",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("139","facebook","1926632310911988",NULL,"Sehrish","Malik","",NULL,NULL,"https://graph.facebook.com/1926632310911988/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2017-08-30 10:15:52","2017-08-30 15:11:12",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("140","facebook","1456080421152859",NULL,"Ahsan Imam","Malik","",NULL,NULL,"https://graph.facebook.com/1456080421152859/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2017-08-30 10:17:32","2017-08-30 15:12:53",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("141","facebook","1348321501933700",NULL,"Muhammad","Rashid","",NULL,NULL,"https://graph.facebook.com/1348321501933700/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2017-08-30 10:22:15","2017-08-30 10:23:33",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("143","google","114242617022383344933",NULL,"EBMACS MOBILE","","",NULL,NULL,"null",NULL,"2017-08-30 12:15:19","2017-08-30 14:13:58",NULL,"d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("158","","",NULL,"yuu","wfjk","bc123033@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/31-08-2017-11-11-05.png",NULL,"2017-08-31 11:11:05","0000-00-00 00:00:00",NULL,"12345",NULL,"31/8/2017","1",NULL,NULL,NULL,NULL,"+936554","1");
INSERT INTO `users` VALUES("159","","",NULL,"Abdul","Wajid","abdulvvajid@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","Aroush1234",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("160","","",NULL,"Ahsan","Malik","ahsanimammalik@yahoo.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/05-09-2017-06-53-25.png",NULL,"2017-09-05 06:45:32","0000-00-00 00:00:00",NULL,"12345",NULL,"3/9/2017","1",NULL,NULL,NULL,NULL,"+933360013739","1");
INSERT INTO `users` VALUES("163","","",NULL,"Malik","Ahsan","ahsanmalikawan67@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/05-09-2017-07-10-43.png",NULL,"2017-09-05 07:10:43","0000-00-00 00:00:00",NULL,"12345",NULL,"3/9/2017","1",NULL,NULL,NULL,NULL,"+933360013739","1");
INSERT INTO `users` VALUES("164","","",NULL,"Muammad Nasim","Aadil","nasimaadil@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","playstore.22A",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("171","","",NULL,"noor","muhammad","noor@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","81dc9bdb52d04dc20036dbd8313ed055",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("172","","",NULL,"mmuhammad","Noman khan","M.nomankhan23@gmail.com",NULL,NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/11-01-2018-06-58-15.png",NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","700f446a99e9b811ab26c59a6e0b8f0b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("176","","",NULL,"arif","khan","arifkhan_157@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","27469aaa",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("177","","",NULL,"Muhammad Kamran ","Ashraf","kamran.ash@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","ajkb2345",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("206","","",NULL,"saad","khan","saadkhan7070@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","12345",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("207","","",NULL,"sanakhan","khan","sana@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","1234",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("208","","",NULL,"Jamsded","Zia","jugnu22@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","saranawab",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("210","","",NULL,"Arjumund","Shaikh","aktspk@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","PAKISTAN1947",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("211","","",NULL,"Ather","Butt","atherbutt82@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","03335712737ufone",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("215","","",NULL,"sjdj","kdfjk","addddgmin@example.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","123Abcd123asdfD",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("218","","",NULL,"seham","khan","sehamkhan@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","123ABCDabcd",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("219","","",NULL,"dfakfj","kkjkldfjdedd","admddin@example.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","Amnbvg1233D",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("221","","",NULL,"Abdul","Rehman","rehmanweb@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","Rehman@7353626",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("222","","",NULL,"MOHAMMAD ASAD MEHMOOD","KHAKWANI","khakwani.asad@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","Pakistani1234",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("224","","",NULL,"Awon","Ali","awonali@rocketmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","1234ABCDabcd",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("237","","",NULL,"Muhammad","Ahsan","Ahsenqazi@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","c0a7c2bce44c7fbe7124798186ea3085",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("238","","",NULL,"jobs360","user","jobs360user@yahoo.com","Male",NULL,"http://www.jobs360.com.pk/uploads/user_image/user_239.jpg",NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","a3111006e60bbaaed4b5d9e190d5a146","CEO","1994-02-15","1","xyz,asd","pakistan","rawalpindi","03363603603","03363603603","1");
INSERT INTO `users` VALUES("239","","",NULL,"Muhammad","","qaziahsen@yahoo.co.uk","Male",NULL,"http://www.jobs360.com.pk/uploads/user_image/user_242.JPG",NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","38e2a2bfc20e3e26ea0d5cd9b96d7b77","CEO","1972-03-15","1","auygddgyd","Pakistan","islamabad","0333547688","03363603603","1");
INSERT INTO `users` VALUES("240","","",NULL,"Usman","Sheikh","usmanmerajjj@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/23-10-2017-07-47-17.png",NULL,"2017-10-23 07:47:17","0000-00-00 00:00:00","normal","fc528592c3858f90196fbfacc814f235",NULL,"23/10/1994","1",NULL,NULL,NULL,NULL,"+933135339232","1");
INSERT INTO `users` VALUES("241","","",NULL,"faiza","minhas","faizaminhas_7@live.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","db8f16eb800f2a9b9c7a54d17b0de95b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("244","","",NULL,"ALLIED HEALTHCARE ","GROUP USA","allied-healthcare-hrd@usa.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","93b4c05e66dcbccc6793a0d7844b166b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("245","","",NULL,"faiza","minhas","faizaminhas09@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","db8f16eb800f2a9b9c7a54d17b0de95b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("246","","",NULL,"faiza","Minhass","faizaminhas_2@outlook.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","db8f16eb800f2a9b9c7a54d17b0de95b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("247","","",NULL,"shahid","zaman","adarvaish0@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/26-12-2017-08-33-32.png",NULL,"2017-11-03 11:30:20","0000-00-00 00:00:00","normal","afa299a4d1d8c52e75dd8a24c3ce534f",NULL,"08/02/1990","1",NULL,NULL,NULL,NULL,"03128336622","1");
INSERT INTO `users` VALUES("248","","",NULL,"Usman","Sheikh","usman@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/06-11-2017-11-09-53.png",NULL,"2017-11-06 11:03:49","0000-00-00 00:00:00","normal","6ba5bc4fe4c3f704112d0ba94020f4c2",NULL,"5/9/1994","0",NULL,NULL,NULL,NULL,"+933135339232","1");
INSERT INTO `users` VALUES("249","","",NULL,"Usman","Sheikh","usman@g.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/06-11-2017-11-11-18.png",NULL,"2017-11-06 11:11:18","0000-00-00 00:00:00","normal","25d55ad283aa400af464c76d713c07ad",NULL,"5/9/1994","0",NULL,NULL,NULL,NULL,"+933135339232","1");
INSERT INTO `users` VALUES("250","","",NULL,"Imran","Ali","imran@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/06-11-2017-11-23-08.png",NULL,"2017-11-06 11:13:11","0000-00-00 00:00:00","normal","25d55ad283aa400af464c76d713c07ad",NULL,"6/11/2017","0",NULL,NULL,NULL,NULL,"+93133333","1");
INSERT INTO `users` VALUES("251","","",NULL,"imran","ali","imran_ali@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/06-11-2017-11-23-42.png",NULL,"2017-11-06 11:23:42","0000-00-00 00:00:00","normal","202cb962ac59075b964b07152d234b70",NULL,"6/11/2017","1",NULL,NULL,NULL,NULL,"+9333333","1");
INSERT INTO `users` VALUES("252","","",NULL,"mujib","rehman","mujibpia@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","19c1cd5ee523366b0a43798156a1464a",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("253","","",NULL,"NAVEED","ANWAR","nanwarpk@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","6e67792b",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("254","","",NULL,"Wood","Kastle","hr.wk2017@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","3a646c26c43e014cf806d79b41bdfe95",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("255","","",NULL,"Usman","Muhammad","u.aliz29@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","d1751f97687666d2621910bce3ac1260",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("256","","",NULL,"Usman","Muhammad","ar.edu.003@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","d1751f97687666d2621910bce3ac1260",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("257","","",NULL,"Usman","Testing","Usman.testing.email@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-30-32.png",NULL,"2017-11-14 12:07:30","0000-00-00 00:00:00","normal","202cb962ac59075b964b07152d234b70",NULL,"14/11/2017","0",NULL,NULL,NULL,NULL,"+931234567","1");
INSERT INTO `users` VALUES("258","","",NULL,"Haider","Ali","haider@gmail.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/14-11-2017-12-31-24.png",NULL,"2017-11-14 12:31:24","0000-00-00 00:00:00","normal","202cb962ac59075b964b07152d234b70",NULL,"14/11/2017","0",NULL,NULL,NULL,NULL,"+93123456","1");
INSERT INTO `users` VALUES("260","","",NULL,"jobs360","Ltd","jobs360.pvt.ltd@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","a3111006e60bbaaed4b5d9e190d5a146",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("261","","",NULL,"jobs360","Ltd","jobs360.pvt.ltd@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","65635b08",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("262","","",NULL,"jobs360","user2","jobs360.user2@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","0949347e",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("263","","",NULL,"Anila ","Liaqat","anilaliaqat1995@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","28d633a904a9b279131755b3bd9c08c3",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("264","","",NULL,"Anila ","Liaqat","anilakhan1995@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","c0af2a051eef6aeb7e5e2e2707b864fb",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("265","","",NULL,"Anilaa ","Raja","anilaraja1995@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","81dc9bdb52d04dc20036dbd8313ed055",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("266","","",NULL,"haider","kamal","haiderkamal313@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","87d4d0a8886a185ac90c5d34df351c39",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("267","","",NULL,"zeeshan","khan","shani144@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","3f558aba39ff4e36a860b6bc06a005cc",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("268","","",NULL,"zeeshan","awan","shahniawan44@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","3f558aba39ff4e36a860b6bc06a005cc",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("269","","",NULL,"zeeshan","awan","shaniawan44@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","71fcb0179063b46ce3faa326493ab5ec",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("277","","",NULL,"User","001","user03922@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","3d095bc4e7d21408d385bd70f9897aa5",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("278","","",NULL,"Jobs","user","info@jobs360.com.pk",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","73b8ee9cb3d48b099f1baaa74c986265",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("279","","",NULL,"jobs360","user","hr@jobs360.com.pk",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","15af027c9c671d6c0a9ef05de70c48ba",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("281","","",NULL,"Danish","Saleem","danish9343@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","a2d789dd8085cc95a6d4834b88462077",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("282","","",NULL,"Anila ","Liaqat","anilakhan@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","24a75ac6ae257204017970decf5b213b",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("283","","",NULL,"faiz","Minhas","faizanhaider@live.co.uk","Female",NULL,"http://www.jobs360.com.pk/uploads/user_image/user_284.jpg",NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","db8f16eb800f2a9b9c7a54d17b0de95b","HR Officer","1992-12-07","1","house # 909 street # 3 Rawalpindi ","pakistan ","Rawalpindi","0511234567","03351234567","0");
INSERT INTO `users` VALUES("284","","",NULL,"ayesha","ali","ayeshajavaid_930@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","c98f87c52af169a8f0970c6fdad0b7d8",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("285","","",NULL,"Akbar","ali","jobs360360@outlook.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","db8f16eb800f2a9b9c7a54d17b0de95b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("287","facebook","10210821035062019",NULL,"Muhammad","Qazi","ahsenqazi@yahoo.com","male","en_US","https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/17362367_10208658407077671_6554185269803628129_n.jpg?oh=0e56dae768a1969a094487747d1f877b&oe=5B165097","https://www.facebook.com/10210821035062019","2017-12-23 08:39:25","2018-02-26 17:18:02","normal","d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("288","facebook","1614479358603145",NULL,"Noor","Muhammad","noor_mohd26@yahoo.com","male","en_US","https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18010842_1435388063178943_5680103574848659428_n.jpg?oh=6b5ff88582a8d5e8c55fbe64624cbed3&oe=5AFABDB9","https://www.facebook.com/1614479358603145","2017-12-23 09:05:34","2018-01-04 12:14:24","normal","d41d8cd98f00b204e9800998ecf8427e",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("289","","",NULL,"danny","raja","mr.danny.raja@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","0c58242e",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("290","","",NULL,"Waqas","Ali","waqasali9932@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","e196634f",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("291","","",NULL,"Anila ","khan","anilakhan95@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","56048e4b151b7d142f618d0aa3e4d2a4",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("292","","",NULL,"Inshall","Mehmood","inshallahmed6@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","11839f0bee32e6d6d994460911da8835",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("293","","",NULL,"Jahanzeb ","Khan","jkniazi0123@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","9e95f6d797987b7da0fb293a760fe57e",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("294","","",NULL,"shahid","zaman","skzaman630@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","81dc9bdb52d04dc20036dbd8313ed055",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("295","","",NULL,"Awon","Ali","awonali14@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","81dc9bdb52d04dc20036dbd8313ed055",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("296","","",NULL,"Adnan","Bhatti","creativediziner@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","e33f388c2707f9dd76d7b3696fad1588",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("297","facebook","877960795717030",NULL,"Haya","Khan","",NULL,NULL,"https://graph.facebook.com/877960795717030/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2018-01-16 08:16:24","2018-01-16 08:16:24",NULL,NULL,NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("298","","",NULL,"Ch.","Faisal","ch.faisal1999@hotmail.com","Male",NULL,"http://www.jobs360.com.pk/uploads/user_image/user_299.jpg",NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","e5b038d47cc2e54c667a9e4690abaa6b","","1989-08-08","1","NE-1809 mohalla mehmood ali shah tehmesmabad rawalpindi, pakistan","Pakistan","Rawalpindi","03335050376","03335050376","1");
INSERT INTO `users` VALUES("299","","",NULL,"ADNAN ","AHMAD","Idnam75@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","ad8f67b9b6ea7c8e61b21743b9c027da",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("300","","",NULL,"ansar","shakeel","ansarshakeel354@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","355558f2",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("301","facebook","1500196883393441",NULL,"Nouman","Malik","bc123033@gmail.com","male","en_US","https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/13406895_1043294219083712_3414591903610429168_n.jpg?oh=68be556cfb715e6243e5d4f3508a3024&oe=5AECB743","https://www.facebook.com/1500196883393441","2018-01-21 14:25:18","2018-01-21 14:26:28","normal",NULL,NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("302","","",NULL,"Shahid ","Zameer ","shahidzameer27@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","1c010adff5f47ba9a965848dadd9ae4b",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("303","facebook","10211273804703461",NULL,"Malik","Asif","",NULL,NULL,"https://graph.facebook.com/10211273804703461/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2018-01-25 09:58:27","2018-01-25 09:58:27",NULL,NULL,NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("304","","",NULL,"Iqra","Khan","khan_iqra6747@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","4f24c323e35b932cf8c4d91342713eeb",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("305","","",NULL,"Henna","Jalil","hennamir@hotmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","d1bf6a684f3ca05f391dd10ef1660b49",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("306","","",NULL,"chelsea","hansen","chelseaahansen457@gmail.com","female",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/06-02-2018-12-26-27.png",NULL,"2018-02-06 12:25:29","0000-00-00 00:00:00","normal","52292e0c763fd027c6eba6b8f494d2eb",NULL,"25/1/2018","0",NULL,NULL,NULL,NULL,"+17078451283","1");
INSERT INTO `users` VALUES("307","","",NULL,"Muhammad","Anwar","manwar917@yahoo.com","male",NULL,"http://www.jobs360.com.pk/uploads/users_profile_pic/09-02-2018-02-59-51.png",NULL,"2018-02-09 02:59:51","0000-00-00 00:00:00","normal","18ddf2789475cfd3e86d4c492cd7e742",NULL,"Date of Birth","1",NULL,NULL,NULL,NULL,"+923005182721","1");
INSERT INTO `users` VALUES("308","","",NULL,"waqas","ali","waqasali9932@yahoo.com","Male",NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","090fb70adf1ce594583e27663c76fd67","web developer","1993-03-16","1","house 86 street 5 vip ghouri town islamabad","pakistan","islamabad","","03315375841","1");
INSERT INTO `users` VALUES("309","","",NULL,"  Nauman  Ahmad  ","Ahmad ","nomimit@yahoo.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","f3cd1da872ab1cd156f9b8d8eba52e1d",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("310","","",NULL,"Samya","Kashif","samyakashif@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","c30e6a32916c157b1571fcc28a00e360",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("311","","",NULL,"Dennis","Jones","dj1283@aol.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","normal","ed39c230a351d9ba5cfe1ad394fdab27",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("312","facebook","10156182672014721",NULL,"Michaela","Clement","",NULL,NULL,"https://graph.facebook.com/10156182672014721/picture?height=200&width=200&migration_overrides=%7Boctober_2012%3Atrue%7D",NULL,"2018-02-26 01:31:02","2018-02-26 01:31:02",NULL,NULL,NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("313","","",NULL,"Syed","Aamir","aimglobal411@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","dc33ea257160b684047a48268bdc0440",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("314","","",NULL,"Alfarooq","Technologies","info@alfarooqtechnologies.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","476c4ef6bd1965f2f85f0a66d9bbb891",NULL,NULL,"0",NULL,NULL,NULL,NULL,NULL,"1");
INSERT INTO `users` VALUES("315","","",NULL,"Mian","Rauf","alfarooq.technologies@gmail.com",NULL,NULL,NULL,NULL,"0000-00-00 00:00:00","0000-00-00 00:00:00","recruiter","476c4ef6bd1965f2f85f0a66d9bbb891",NULL,NULL,"1",NULL,NULL,NULL,NULL,NULL,"1");
