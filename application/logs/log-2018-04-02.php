<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-02 05:57:01 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '238'
ERROR - 2018-04-02 05:57:04 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
WHERE `tbl_job`.`user_id` = '238'
ERROR - 2018-04-02 12:46:18 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = ''
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-04-02 16:24:58 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'system_name'
ERROR - 2018-04-02 16:25:11 --> Query error: Table 'jobscomp_job360.settings' doesn't exist - Invalid query: SELECT *
FROM `settings`
WHERE `type` = 'system_name'
