<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-03 07:24:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `job_apply`
JOIN `users` ON `job_apply`.`user_id`= `users`.`id`
WHERE `job_apply`.`user_id` = '71'
AND `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `job_apply`
JOIN `users` ON `job_apply`.`user_id`= `users`.`id`
WHERE `job_apply`.`user_id` = '71'
AND `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `job_apply`
JOIN `users` ON `job_apply`.`user_id`= `users`.`id`
WHERE `job_apply`.`user_id` = '71'
AND `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:28:21 --> Query error: Not unique table/alias: 'job_apply' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
JOIN `job_apply` ON `users`.`id`= `job_apply`.`user_id`
WHERE `job_apply`.`jod_id` = '55'
ERROR - 2018-12-03 07:30:27 --> Query error: Unknown column 'job_apply.jod_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
WHERE `job_apply`.`jod_id` = '55'
ERROR - 2018-12-03 07:35:53 --> Query error: Not unique table/alias: 'job_apply' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`, `job_apply`
WHERE `job_apply`.`job_id` = '55'
ERROR - 2018-12-03 07:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 4 - Invalid query: SELECT *
FROM `job_apply`
WHERE `job_apply`.`job_id` = 'images'
 LIMIT -10, 10
ERROR - 2018-12-03 07:48:38 --> Query error: Unknown column 'job_apply.user_id' in 'on clause' - Invalid query: SELECT `j`.`job_id`, `j`.`user_id`, `users`.`first_name`
FROM `job_apply` as `j`
JOIN `users` ON `job_apply`.`user_id`=`users`.`id`
WHERE `job_id` = '55'
ERROR - 2018-12-03 07:48:57 --> Query error: Unknown column 'job_apply.user_id' in 'on clause' - Invalid query: SELECT `j`.`job_id`, `j`.`user_id`, `users`.`first_name`
FROM `job_apply` as `j`
JOIN `users` ON `job_apply`.`user_id`=`users`.`id`
WHERE `j`.`job_id` = '55'
ERROR - 2018-12-03 07:49:42 --> Query error: Unknown column 'job_apply.user_id' in 'on clause' - Invalid query: SELECT *
FROM `job_apply` as `j`
JOIN `users` ON `job_apply`.`user_id`=`users`.`id`
WHERE `j`.`job_id` = '55'
ERROR - 2018-12-03 17:13:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 7 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = 'images'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2018-12-03 17:13:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 7 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = 'images'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2018-12-03 17:13:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 7 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = 'images'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
