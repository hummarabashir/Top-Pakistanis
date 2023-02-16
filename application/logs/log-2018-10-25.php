<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-25 08:33:14 --> entered in filter function  4
ERROR - 2018-10-25 08:33:14 --> entered in filter function  job
ERROR - 2018-10-25 08:33:14 --> entered in filter function  50000
ERROR - 2018-10-25 08:33:14 --> entered in filter function  100000
ERROR - 2018-10-25 08:33:19 --> entered in filter function  4
ERROR - 2018-10-25 08:33:19 --> entered in filter function  job
ERROR - 2018-10-25 08:33:22 --> entered in filter function  4
ERROR - 2018-10-25 08:33:22 --> entered in filter function  job
ERROR - 2018-10-25 08:33:26 --> entered in filter function  4
ERROR - 2018-10-25 08:33:26 --> entered in filter function  job
ERROR - 2018-10-25 08:33:32 --> entered in filter function  4
ERROR - 2018-10-25 08:33:32 --> entered in filter function  job
ERROR - 2018-10-25 14:10:01 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '370'
ORDER BY `jp_id` DESC
ERROR - 2018-10-25 14:40:26 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '377'
AND `active/deactive` = 1
AND `job_status` = 1
