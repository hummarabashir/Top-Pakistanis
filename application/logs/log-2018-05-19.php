<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-19 06:42:55 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '32'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-05-19 06:43:43 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '32'
AND `active/deactive` = 1
AND `job_status` = 1