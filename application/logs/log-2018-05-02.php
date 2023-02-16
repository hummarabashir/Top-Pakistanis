<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-02 08:54:00 --> Query error: Table 'jobscomp_job360.jobseekar_payments' doesn't exist - Invalid query: SELECT *
FROM `jobseekar_payments`
WHERE `user_id` = '326'
ORDER BY `jp_id` DESC
ERROR - 2018-05-02 08:54:40 --> Query error: Table 'jobscomp_job360.job_apply' doesn't exist - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `job_apply` ON `job_apply`.`job_id` = `tbl_job`.`jobs_id`
WHERE `job_apply`.`user_id` = '326'
AND `active/deactive` = 1
AND `job_status` = 1
ERROR - 2018-05-02 13:35:18 --> entered in filter function  4
ERROR - 2018-05-02 13:35:18 --> entered in filter function  job
ERROR - 2018-05-02 13:35:35 --> entered in filter function  4
ERROR - 2018-05-02 13:35:35 --> entered in filter function  job
ERROR - 2018-05-02 17:58:16 --> entered in filter function  4
ERROR - 2018-05-02 17:58:16 --> entered in filter function  
