<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-26 02:57:05 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '377'
AND `active/deactive` = 1
AND `job_status` = 1
