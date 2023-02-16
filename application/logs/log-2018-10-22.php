<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-22 06:49:48 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-22 06:49:58 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-22 06:50:12 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-22 09:29:05 --> entered in filter function  4
ERROR - 2018-10-22 09:29:05 --> entered in filter function  full-time
ERROR - 2018-10-22 09:29:05 --> entered in filter function  50000
ERROR - 2018-10-22 09:29:05 --> entered in filter function  100000
ERROR - 2018-10-22 09:33:35 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-22 09:33:57 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-22 09:35:17 --> entered in filter function  4
ERROR - 2018-10-22 09:35:17 --> entered in filter function  full-time
ERROR - 2018-10-22 09:35:17 --> entered in filter function  50000
ERROR - 2018-10-22 09:35:17 --> entered in filter function  100000
ERROR - 2018-10-22 09:35:30 --> entered in filter function  4
ERROR - 2018-10-22 09:35:30 --> entered in filter function  full-time
ERROR - 2018-10-22 09:35:30 --> entered in filter function  30000
ERROR - 2018-10-22 09:35:30 --> entered in filter function  50000
ERROR - 2018-10-22 09:36:54 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '373'
ORDER BY `jp_id` DESC
ERROR - 2018-10-22 09:36:57 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '373'
ORDER BY `jp_id` DESC
ERROR - 2018-10-22 17:00:06 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '374'
AND `active/deactive` = 1
AND `job_status` = 1
