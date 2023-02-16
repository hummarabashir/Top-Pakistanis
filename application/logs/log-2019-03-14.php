<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-14 06:29:27 --> Query error: Unknown column 'tbl_save_jobs.jobs_id' in 'on clause' - Invalid query: SELECT `cv_contact_info`.*, `tbl_cat`.*, `tbl_save_jobs`.*
FROM `cv_contact_info`
LEFT JOIN `tbl_save_jobs` ON `tbl_save_jobs`.`jobs_id`= `cv_contact_info`.`user_id`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_save_jobs`.`user_id` = '4'
 LIMIT 10
