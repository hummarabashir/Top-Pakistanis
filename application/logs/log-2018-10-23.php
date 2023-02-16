<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-23 04:02:28 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '237'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-10-23 06:04:59 --> entered in filter function  4
ERROR - 2018-10-23 06:04:59 --> entered in filter function  full-time
ERROR - 2018-10-23 06:05:09 --> entered in filter function  4
ERROR - 2018-10-23 06:05:09 --> entered in filter function  full-time
ERROR - 2018-10-23 06:21:06 --> entered in filter function  4
ERROR - 2018-10-23 06:21:06 --> entered in filter function  job
ERROR - 2018-10-23 06:21:19 --> entered in filter function  4
ERROR - 2018-10-23 06:21:19 --> entered in filter function  full-time
ERROR - 2018-10-23 06:21:23 --> entered in filter function  4
ERROR - 2018-10-23 06:21:23 --> entered in filter function  full-time
ERROR - 2018-10-23 07:39:06 --> entered in filter function  4
ERROR - 2018-10-23 07:39:06 --> entered in filter function  job
ERROR - 2018-10-23 07:39:06 --> entered in filter function  50000
ERROR - 2018-10-23 07:39:06 --> entered in filter function  100000
ERROR - 2018-10-23 10:26:17 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
ERROR - 2018-10-23 10:26:51 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'language'
