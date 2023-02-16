<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-30 01:23:39 --> entered in filter function  4
ERROR - 2018-05-30 01:23:39 --> entered in filter function  
ERROR - 2018-05-30 09:50:41 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = ''
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-05-30 15:52:57 --> entered in filter function  4
ERROR - 2018-05-30 15:52:57 --> entered in filter function  full-time
ERROR - 2018-05-30 15:52:57 --> entered in filter function  30000
ERROR - 2018-05-30 15:52:57 --> entered in filter function  50000
ERROR - 2018-05-30 15:53:10 --> entered in filter function  4
ERROR - 2018-05-30 15:53:10 --> entered in filter function  part-time
ERROR - 2018-05-30 15:53:10 --> entered in filter function  30000
ERROR - 2018-05-30 15:53:10 --> entered in filter function  50000
ERROR - 2018-05-30 15:53:28 --> entered in filter function  4
ERROR - 2018-05-30 15:53:28 --> entered in filter function  part-time
ERROR - 2018-05-30 15:53:28 --> entered in filter function  30000
ERROR - 2018-05-30 15:53:28 --> entered in filter function  50000
