<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-12 07:40:29 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '237'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-11-12 08:27:35 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'system_name'
ERROR - 2018-11-12 08:47:57 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'system_name'
ERROR - 2018-11-12 13:49:19 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '237'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-11-12 17:30:40 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '370'
ORDER BY `jp_id` DESC
ERROR - 2018-11-12 17:30:47 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '370'
ORDER BY `jp_id` DESC
