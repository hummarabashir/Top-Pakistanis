<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-09-22 04:11:19 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `job_apply`
WHERE `user_id` = '237'
AND `job_id` = '6'
ERROR - 2018-09-22 04:11:27 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `job_apply`
WHERE `user_id` = '237'
AND `job_id` = '6'
ERROR - 2018-09-22 04:11:35 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `job_apply`
WHERE `user_id` = '237'
AND `job_id` = '6'
ERROR - 2018-09-22 04:11:56 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `job_apply`
WHERE `user_id` = '237'
AND `job_id` = '8'
ERROR - 2018-09-22 04:12:19 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `job_apply`
WHERE `user_id` = '237'
AND `job_id` = '5'
ERROR - 2018-09-22 04:14:44 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '237'
AND `active/deactive` = 1
AND `job_status` = 1
