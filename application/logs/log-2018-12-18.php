<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-18 07:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
ORDER BY `jobs_id` DESC
 LIMIT 10' at line 12 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND  `job_title` LIKE '%%' ESCAPE '!'
AND  `job_location` LIKE '%%' ESCAPE '!'
AND `cat_id` IN('18', '19', '20', '21', '22', '24', '26', '31', '32', '33', '8', '11')
AND `job_emptype` IN('full-time')
AND `job_salery_min` IN('15000')
AND `job_salery_max` IN('20000')
AND `job_explevel` IN('3 Year')
AND `job_gender` IN()
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-18 07:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
ORDER BY `jobs_id` DESC
 LIMIT 10' at line 12 - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND  `job_title` LIKE '%%' ESCAPE '!'
AND  `job_location` LIKE '%%' ESCAPE '!'
AND `cat_id` IN('18', '19', '20', '21', '22', '24', '26', '31', '32', '33', '8', '11')
AND `job_emptype` IN('full-time')
AND `job_salery_min` IN('15000')
AND `job_salery_max` IN('20000')
AND `job_explevel` IN('3 Year')
AND `job_gender` IN()
ORDER BY `jobs_id` DESC
 LIMIT 10
