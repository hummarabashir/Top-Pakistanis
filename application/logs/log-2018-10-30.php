<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-30 00:36:02 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '380'
ERROR - 2018-10-30 00:38:35 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '380'
