<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-08 06:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
