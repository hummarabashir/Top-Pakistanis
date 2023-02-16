<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-08 09:12:32 --> Query error: Table 'toppakistanis.jobs_id' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `jobs_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
ERROR - 2019-03-08 09:18:09 --> Query error: Table 'toppakistanis.jobs_id' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `jobs_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
ERROR - 2019-03-08 09:18:52 --> Query error: Table 'toppakistanis.jobs_id' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `jobs_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
ERROR - 2019-03-08 09:19:44 --> Query error: Table 'toppakistanis.jobs_id' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `jobs_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
ERROR - 2019-03-08 10:00:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `skill_id` IS NULL
AND `job_explevel` IS NULL
AND  `job_location` LIK' at line 11 - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
WHERE `job_title` LIKE '%Codeigniter' ESCAPE '!'
OR  `job_title` LIKE 'Codeigniter%' ESCAPE '!'
OR  `job_title` LIKE '%Codeigniter%' ESCAPE '!'
AND `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = '1'
AND `job_salery_min` >= ''
AND `job_salery_max` < `IS` `NULL`
AND `skill_id` IS NULL
AND `job_explevel` IS NULL
AND  `job_location` LIKE '%Islamabad' ESCAPE '!'
OR  `job_location` LIKE 'Islamabad%' ESCAPE '!'
OR  `job_location` LIKE '%Islamabad%' ESCAPE '!'
AND `job_emptype` IS NULL
ORDER BY `jobs_id` DESC
ERROR - 2019-03-08 10:01:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `skill_id` IS NULL
AND `job_explevel` IS NULL
AND  `job_location` LIK' at line 8 - Invalid query: SELECT *
FROM `tbl_job`
JOIN `tbl_company` ON `tbl_company`.`comp_id` = `tbl_job`.`comp_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND `cat_id` = '1'
AND `job_salery_min` >= ''
AND `job_salery_max` < `IS` `NULL`
AND `skill_id` IS NULL
AND `job_explevel` IS NULL
AND  `job_location` LIKE '%Islamabad' ESCAPE '!'
OR  `job_location` LIKE 'Islamabad%' ESCAPE '!'
OR  `job_location` LIKE '%Islamabad%' ESCAPE '!'
AND `job_emptype` IS NULL
ORDER BY `jobs_id` DESC
ERROR - 2019-03-08 10:03:15 --> Query error: Unknown column 'cv_skill.name' in 'where clause' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*
FROM `users`
LEFT JOIN `cv_contact_info` ON `cv_contact_info`.`user_id`=`users`.`id`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `cv_skill`.`name` LIKE '%' ESCAPE '!'
OR  `cv_skill`.`name` LIKE '%' ESCAPE '!'
OR  `cv_skill`.`name` LIKE '%%' ESCAPE '!'
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
AND  `cv_contact_info`.`city` LIKE '%' ESCAPE '!'
OR  `cv_contact_info`.`city` LIKE '%' ESCAPE '!'
OR  `cv_contact_info`.`city` LIKE '%%' ESCAPE '!'
 LIMIT 10
