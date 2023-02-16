<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-16 02:09:43 --> entered in filter function  4
ERROR - 2018-10-16 02:09:43 --> entered in filter function  full-time
ERROR - 2018-10-16 02:09:43 --> entered in filter function  5000
ERROR - 2018-10-16 02:09:43 --> entered in filter function  15000
ERROR - 2018-10-16 02:09:54 --> entered in filter function  4
ERROR - 2018-10-16 02:09:54 --> entered in filter function  full-time
ERROR - 2018-10-16 02:09:54 --> entered in filter function  15000
ERROR - 2018-10-16 02:09:54 --> entered in filter function  30000
ERROR - 2018-10-16 02:09:54 --> entered in filter function  4
ERROR - 2018-10-16 02:09:54 --> entered in filter function  full-time
ERROR - 2018-10-16 02:09:54 --> entered in filter function  15000
ERROR - 2018-10-16 02:09:54 --> entered in filter function  30000
ERROR - 2018-10-16 02:10:36 --> entered in filter function  4
ERROR - 2018-10-16 02:10:36 --> entered in filter function  full-time
ERROR - 2018-10-16 02:10:36 --> entered in filter function  15000
ERROR - 2018-10-16 02:10:36 --> entered in filter function  30000
ERROR - 2018-10-16 17:23:08 --> entered in filter function  4
ERROR - 2018-10-16 17:23:08 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:22 --> entered in filter function  4
ERROR - 2018-10-16 17:23:22 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:22 --> entered in filter function  4
ERROR - 2018-10-16 17:23:22 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:23 --> entered in filter function  4
ERROR - 2018-10-16 17:23:23 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:23 --> entered in filter function  4
ERROR - 2018-10-16 17:23:23 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:23 --> entered in filter function  4
ERROR - 2018-10-16 17:23:23 --> entered in filter function  full-time
ERROR - 2018-10-16 17:23:23 --> entered in filter function  4
ERROR - 2018-10-16 17:23:23 --> entered in filter function  full-time
ERROR - 2018-10-16 19:14:36 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = ''
AND `active/deactive` = 1
AND `job_status` = 1
