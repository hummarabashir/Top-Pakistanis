<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-21 03:28:56 --> Query error: Column 'first_name' cannot be null - Invalid query: INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `method`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'recruiter')
ERROR - 2019-01-21 10:39:22 --> Query error: Column 'comp_id' in on clause is ambiguous - Invalid query: SELECT `job_apply`.*, `tbl_job`.*, `users`.*
FROM `job_apply`
JOIN `tbl_job` ON `job_apply`.`job_id`= `tbl_job`.`jobs_id`
JOIN `users` ON `job_apply`.`user_id`= `users`.`id`
JOIN `tbl_company` ON `job_apply`.`comp_id`= `comp_id`
WHERE `job_apply`.`comp_id` = '13'
AND `job_apply`.`shortlist` = 1
ERROR - 2019-01-21 10:44:07 --> job id69
ERROR - 2019-01-21 15:27:43 --> Query error: Column 'first_name' cannot be null - Invalid query: INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `method`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'recruiter')
