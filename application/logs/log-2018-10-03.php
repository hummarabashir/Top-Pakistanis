<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-03 13:09:25 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '367'
ERROR - 2018-10-03 14:40:00 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '239'
ERROR - 2018-10-03 14:40:30 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '239'
ERROR - 2018-10-03 14:41:22 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'system_name'
