<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-07 05:40:07 --> Query error: Unknown column 'user_status' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbl_job`
WHERE `user_status` = 1
AND `verify` = 1
AND `method` = 'normal'
ERROR - 2019-03-07 05:40:44 --> Query error: Unknown column 'user_status' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbl_job`
WHERE `user_status` = 1
AND `verify` = 1
AND `method` = 'normal'
ERROR - 2019-03-07 07:08:48 --> Query error: Not unique table/alias: 'cv_contact_info' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM (`users`, `cv_contact_info`)
LEFT JOIN `cv_contact_info` ON `cv_contact_info`.`user_id`=`users`.`id`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `users`.`verify` = 1
AND `users`.`method` = 'normal'
ERROR - 2019-03-07 07:24:08 --> Query error: Column 'first_name' cannot be null - Invalid query: INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `method`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'recruiter')
ERROR - 2019-03-07 07:25:05 --> Query error: Column 'first_name' cannot be null - Invalid query: INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `method`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'recruiter')
