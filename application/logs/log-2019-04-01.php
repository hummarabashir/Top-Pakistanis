<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-01 05:05:01 --> Severity: error --> Exception: syntax error, unexpected '>' /home/top/public_html/beta/application/views/site/dashboard.php 99
ERROR - 2019-04-01 05:27:42 --> Query error: Unknown column 'status' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `status` = '1'
 LIMIT 8
ERROR - 2019-04-01 05:35:30 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:35:55 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:35:58 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:36:11 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:36:14 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 8' at line 6 - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` =
 LIMIT 8
ERROR - 2019-04-01 05:37:04 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:37:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 8' at line 6 - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` =
 LIMIT 8
ERROR - 2019-04-01 05:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 8' at line 6 - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` =
 LIMIT 8
ERROR - 2019-04-01 05:37:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 8' at line 6 - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` =
 LIMIT 8
ERROR - 2019-04-01 05:40:01 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `city` = `Array`
 LIMIT 8
ERROR - 2019-04-01 05:57:20 --> Severity: error --> Exception: Too few arguments to function Crud_model::get_data_user_id(), 1 passed in /home/top/public_html/beta/application/controllers/Users.php on line 64 and exactly 3 expected /home/top/public_html/beta/application/models/Crud_model.php 45
ERROR - 2019-04-01 05:58:29 --> Query error: Unknown table 'user' - Invalid query: SELECT `user`.*, `tbl_city`.*
FROM `users`
LEFT JOIN `tbl_city` ON `users`.`city`=`tbl_city`.`city_id`
ERROR - 2019-04-01 05:59:32 --> Query error: Unknown table 'user' - Invalid query: SELECT `user`.*, `tbl_city`.*
FROM `users`
LEFT JOIN `tbl_city` ON `users`.`city`=`tbl_city`.`city_id`
WHERE `id` = '2'
