<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-29 08:46:11 --> Query error: Unknown table 'toppak.jobseekar_payments' - Invalid query: SELECT `tbl_cat`.*, `cv_contact_info`.*, `jobseekar_payments`.*
FROM `cv_contact_info`
LEFT JOIN `tbl_cat` ON `cv_contact_info`.`cat_id`=`tbl_cat`.`cat_id`
ORDER BY `cv_contact_info`.`user_id` DESC
 LIMIT 3
ERROR - 2019-04-29 11:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '1'
ORDER BY `id` DESC
 LIMIT -100, 100
