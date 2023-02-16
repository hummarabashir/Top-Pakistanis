<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-11 07:11:42 --> job id52
ERROR - 2018-12-11 07:31:34 --> job id52
ERROR - 2018-12-11 09:00:34 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `tbl_job`
WHERE `active/deactive` = 1
AND `job_status` = 1
AND  `job_title` LIKE '%Asp.net JOB%' ESCAPE '!'
AND  `job_location` LIKE '%Islamabad, Islamabad Capital Territory, Pakistan%' ESCAPE '!'
AND `job_emptype` = `Array`
ORDER BY `jobs_id` DESC
 LIMIT 10
ERROR - 2018-12-11 10:14:04 --> Query error: Unknown column 'city_id' in 'field list' - Invalid query: INSERT INTO `tbl_job` (`job_title`, `user_id`, `clevel_id`, `comp_id`, `cat_id`, `city_id`, `subcat_id`, `skill_id`, `job_emptype`, `job_vacancies`, `job_sdate`, `job_edate`, `job_explevel`, `job_edatestatus`, `job_shift`, `job_gender`, `job_age`, `checkbox_value`, `job_salery_min`, `job_salery_max`, `job_sallery_currency`, `benefit_id`, `filter_gender`, `filter_experience`, `filter_age`, `filter_city`, `job_description`, `preffered_skills`, `job_location`) VALUES ('Front End Developer', '395', '3', '13', '26', '2', NULL, 'NULL', 'full-time', '2', '2018-12-11', '2019-01-02', '2 Year', 'job_active', 'morning_shift', 'all', '25-30', NULL, '20000', '30000', 'PKR', '3,6,9', NULL, NULL, NULL, NULL, 'We are looking for a talented front-end developer with at least 2 year commercial experience, good written and verbal communication skills and good attention to detail. The successful candidate will have the following skills:\r\n - Strong knowledge of HTML5, CSS3, JavaScript, jQuery.\r\n- Proficient understanding of GIT version control\r\n- Knowledge and experience of Cross Browser, cross-platform and cross-device testing. \r\n- Experience working with Drupal and / or Wordpress CMS. ', 'Drupal, Jquery, Javascript, Wordpress CMS, CSS3, Understanding of GIT Version Control', 'F-7, Islamabad, Pakistan')
ERROR - 2018-12-11 10:16:40 --> Query error: Column 'job_title' cannot be null - Invalid query: INSERT INTO `tbl_job` (`job_title`, `user_id`, `clevel_id`, `comp_id`, `cat_id`, `city_id`, `subcat_id`, `skill_id`, `job_emptype`, `job_vacancies`, `job_sdate`, `job_edate`, `job_explevel`, `job_edatestatus`, `job_shift`, `job_gender`, `job_age`, `checkbox_value`, `job_salery_min`, `job_salery_max`, `job_sallery_currency`, `benefit_id`, `filter_gender`, `filter_experience`, `filter_age`, `filter_city`, `job_description`, `preffered_skills`, `job_location`) VALUES (NULL, '395', NULL, NULL, NULL, NULL, NULL, 'NULL', NULL, NULL, '2018-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL)
ERROR - 2018-12-11 10:42:00 --> job id53
ERROR - 2018-12-11 10:59:15 --> job id53
