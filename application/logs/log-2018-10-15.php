<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-15 07:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 7 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = 'css'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
