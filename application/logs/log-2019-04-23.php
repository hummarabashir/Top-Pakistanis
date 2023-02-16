<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-23 06:12:22 --> Query error: Unknown column 'cvinfo.category_id' in 'field list' - Invalid query: SELECT `cvinfo`.`city`, `cvinfo`.`category_id`, `cvwork`.`designation`
FROM `cv_contact_info` as `cvinfo`
JOIN `cv_workexperience` ON `cv_contact_info`.`user_id` = `cv_workexperience`.`users_id`
WHERE `city` = '5'
OR `cat_id` = '1'
ERROR - 2019-04-23 06:12:37 --> Query error: Unknown column 'cvwork.designation' in 'field list' - Invalid query: SELECT `cvinfo`.`city`, `cvinfo`.`cat_id`, `cvwork`.`designation`
FROM `cv_contact_info` as `cvinfo`
JOIN `cv_workexperience` ON `cv_contact_info`.`user_id` = `cv_workexperience`.`users_id`
WHERE `city` = '5'
OR `cat_id` = '1'
ERROR - 2019-04-23 06:13:28 --> Query error: Unknown column 'cv_workexperience.users_id' in 'on clause' - Invalid query: SELECT `cv_contact_info`.`city`, `cv_contact_info`.`cat_id`, `cv_workexperience`.`designation`
FROM `cv_contact_info`
JOIN `cv_workexperience` ON `cv_contact_info`.`user_id` = `cv_workexperience`.`users_id`
WHERE `city` = '5'
OR `cat_id` = '1'
