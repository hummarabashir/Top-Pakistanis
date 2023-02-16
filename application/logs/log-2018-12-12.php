<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-12 05:49:13 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `tbl_job`.`cat_id`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `tbl_job`.`subcat_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = '26'
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-12 05:51:14 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `tbl_job`.`cat_id`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `tbl_job`.`subcat_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = '26'
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-12 05:52:50 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `tbl_job`.`subcat_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = '21'
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-12 07:09:53 --> Query error: Unknown column 'tbl_job.comp_id_id' in 'on clause' - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
LEFT JOIN `tbl_company` ON `tbl_job`.`comp_id_id`=`tbl_company`.`comp_id`
WHERE `tbl_job`.`job_status` = '1'
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-12 07:43:12 --> Query error: Unknown column 'tbl_job.company_id' in 'on clause' - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_job`.`company_id` = `tbl_company`.`comp_id`
WHERE `tbl_job`.`cat_id` = '26'
AND `tbl_job`.`jobs_id` != '54'
ERROR - 2018-12-12 07:47:49 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_cat` ON `tbl_job`.`cat_id` = `tbl_cat`.`cat_id`
JOIN `tbl_subcat` ON `tbl_job`.`subcat_id` = `tbl_cat`.`subcat_id`
JOIN `tbl_company` ON `tbl_job`.`comp_id` = `tbl_company`.`comp_id`
WHERE `cat_id` = '26'
AND `jobs_id` != '54'
ERROR - 2018-12-12 07:48:40 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_cat` ON `tbl_job`.`cat_id` = `tbl_cat`.`cat_id`
JOIN `tbl_subcat` ON `tbl_job`.`subcat_id` = `tbl_subcat`.`subcat_id`
JOIN `tbl_company` ON `tbl_job`.`comp_id` = `tbl_company`.`comp_id`
WHERE `cat_id` = '26'
AND `jobs_id` != '54'
ERROR - 2018-12-12 07:49:59 --> Query error: Column 'cat_id' in where clause is ambiguous - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_cat` ON `tbl_job`.`cat_id` = `tbl_cat`.`cat_id`
JOIN `tbl_subcat` ON `tbl_job`.`subcat_id` = `tbl_subcat`.`subcat_id`
JOIN `tbl_company` ON `tbl_job`.`comp_id` = `tbl_company`.`comp_id`
WHERE `cat_id` = '26'
AND `jobs_id` != '54'
ERROR - 2018-12-12 10:21:33 --> Query error: Unknown column 'objective' in 'where clause' - Invalid query: UPDATE `cv_contact_info` SET `basicdetails` = Array, `educations` = Array, `works` = Array, `worksingles` = Array, `skills` = Array, `objectives` = Array, `page` = 'profile'
WHERE `first_name` = 'ali'
AND `last_name` = 'zahid'
AND `experience` = '2 Year'
AND `age` = '25'
AND `edulevel` = 'Bachelor'
AND `objective` = ' Prompt, hard working individual with  more than 7 years of  customer service experience and superior language skills seeks opportunity with  Centaurus Mall  Residencia   as a Customer Relationship Officer.'
AND `fb` = 'htpp://facebook.com'
AND `twitter` = 'htpp://twitter.com'
AND `google` = 'htpp://google.com'
AND `linkedin` = 'htpp://linkedin.com'
AND `mob_no` = '8888888888'
AND `email` = 'innocentalizay2@gmail.com'
AND `city` = 'Islamabad'
AND `submit` = 'submit'
ERROR - 2018-12-12 10:27:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as `a Customer Relationship Officer`. = ''
WHERE `user_id` = '393'' at line 1 - Invalid query: UPDATE `cv_objective` SET `Prompt, hard working individual with more than 7 years of customer service experience and superior language skills seeks opportunity with Centaurus Mall Residencia` as `a Customer Relationship Officer`. = ''
WHERE `user_id` = '393'
ERROR - 2018-12-12 10:29:45 --> Query error: Unknown column 'objective' in 'field list' - Invalid query: UPDATE `cv_objective` SET `objective` = ' Prompt, hard working individual with  more than 7 years of  customer service experience and superior language skills seeks opportunity with  Centaurus Mall  Residencia   as a Customer Relationship Officer.'
WHERE `user_id` = '393'
ERROR - 2018-12-12 10:30:15 --> Query error: Unknown column 'submit' in 'field list' - Invalid query: UPDATE `cv_contact_info` SET `first_name` = 'ali', `last_name` = 'zahid', `experience` = '2 Year', `age` = '25', `edulevel` = 'Bachelor', `fb` = 'htpp://facebook.com', `twitter` = 'htpp://twitter.com', `google` = 'htpp://google.com', `linkedin` = 'htpp://linkedin.com', `mob_no` = '8888888888', `email` = 'innocentalizay2@gmail.com', `city` = 'Islamabad', `submit` = 'submit'
WHERE `user_id` = '393'
ERROR - 2018-12-12 21:22:56 --> job id54
