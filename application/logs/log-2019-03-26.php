<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-26 05:47:24 --> Query error: Unknown column 'cv_contact_info*' in 'field list' - Invalid query: SELECT `cv_contact_info*`, `cv_contact_info`.`cat_id` as `catie`, `tbl_cat`.*, `tbl_subcat`.*, `tbl_city`.*
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_subcat` ON `cv_contact_info`.`subcat_id`=`tbl_subcat`.`subcat_id`
LEFT JOIN `tbl_city` ON `cv_contact_info`.`city`=`tbl_city`.`city_id`
WHERE `cv_contact_info`.`user_id` = '1'
ERROR - 2019-03-26 06:45:15 --> Query error: Unknown table 'users' - Invalid query: SELECT `tbl_profile_review`.*, `tbl_profile_review`.`description` as `desc`, `cv_contact_info`.`picture_url` as `pic`, `users`.*
FROM `tbl_profile_review`
WHERE `tbl_profile_review`.`profile_id` = '1'
ERROR - 2019-03-26 06:46:12 --> Query error: Unknown column 'cv_contact_info.picture_url' in 'field list' - Invalid query: SELECT `tbl_profile_review`.*, `tbl_profile_review`.`description` as `desc`, `cv_contact_info`.`picture_url` as `pic`, `users`.*
FROM `tbl_profile_review`
JOIN `users` ON `tbl_profile_review`.`user_id` = `users`.`id`
WHERE `tbl_profile_review`.`profile_id` = '1'
