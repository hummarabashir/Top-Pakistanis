<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-02 10:29:05 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '381'
ORDER BY `jp_id` DESC
ERROR - 2018-11-02 10:30:01 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '381'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-11-02 10:30:52 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '381'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-11-02 10:39:25 --> entered in filter function  4
ERROR - 2018-11-02 10:39:25 --> entered in filter function  job
