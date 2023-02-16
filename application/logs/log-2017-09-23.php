<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-23 13:01:02 --> 3
ERROR - 2017-09-23 13:10:14 --> Severity: Notice --> Undefined variable: job_id C:\wamp64\www\job360sep9\application\models\User.php 24
ERROR - 2017-09-23 13:13:43 --> 3
ERROR - 2017-09-23 13:14:32 --> 3
ERROR - 2017-09-23 13:14:45 --> 3
ERROR - 2017-09-23 13:15:05 --> 3
ERROR - 2017-09-23 15:02:37 --> Query error: Unknown column 'active/deactive' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
WHERE `user_id` = '71'
AND `active/deactive` =0
ERROR - 2017-09-23 15:03:29 --> Query error: Unknown column 'tbl_job.user_id' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
WHERE `tbl_job`.`user_id` = '71'
ERROR - 2017-09-23 15:06:51 --> Query error: Not unique table/alias: 'job_apply' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `tbl_job`.`user_id`=71
LEFT JOIN `job_apply` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
ERROR - 2017-09-23 15:06:52 --> Query error: Not unique table/alias: 'job_apply' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `tbl_job`.`user_id`=71
LEFT JOIN `job_apply` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
ERROR - 2017-09-23 15:07:25 --> Query error: Not unique table/alias: 'tbl_job' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `tbl_job`.`user_id`=71
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
ERROR - 2017-09-23 15:07:26 --> Query error: Not unique table/alias: 'tbl_job' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `tbl_job`.`user_id`=71
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
ERROR - 2017-09-23 15:07:28 --> Query error: Not unique table/alias: 'tbl_job' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `job_apply`
LEFT JOIN `tbl_job` ON `tbl_job`.`user_id`=71
LEFT JOIN `tbl_job` ON `job_apply`.`job_id`=`tbl_job`.`jobs_id`
ERROR - 2017-09-23 16:37:36 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 174
ERROR - 2017-09-23 16:37:36 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 174
ERROR - 2017-09-23 16:38:53 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 16:38:53 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 16:41:29 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 16:41:29 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 18:08:47 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 18:08:47 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 173
ERROR - 2017-09-23 18:13:49 --> 3
ERROR - 2017-09-23 18:22:03 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 174
ERROR - 2017-09-23 18:22:03 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 174
ERROR - 2017-09-23 18:31:44 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 171
ERROR - 2017-09-23 18:31:44 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 171
ERROR - 2017-09-23 18:34:56 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 67
ERROR - 2017-09-23 18:34:56 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 67
ERROR - 2017-09-23 18:37:19 --> Severity: Notice --> Undefined property: Payment::$jobseekar_payments C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 171
ERROR - 2017-09-23 18:37:19 --> Severity: Error --> Call to a member function insert() on null C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 171
ERROR - 2017-09-23 18:48:05 --> Query error: Column 'address' cannot be null - Invalid query: INSERT INTO `jobseekar_payments` (`user_id`, `payment_id`, `payment_confirmation`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `city`, `created_on`, `updated_on`, `start_date`) VALUES ('32', 'ch_1B5DzIIq3znfZrgfEeNwaxtu', 0, 'success', '1000', 'Stripe Payment', 'hello', 'pakistan', NULL, NULL, '2017-09-23 18:48:05', '2017-09-23 18:48:05', '2017-09-23')
ERROR - 2017-09-23 18:59:44 --> Query error: Column 'address' cannot be null - Invalid query: INSERT INTO `jobseekar_payments` (`user_id`, `payment_id`, `payment_confirmation`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `city`, `created_on`, `updated_on`, `start_date`) VALUES ('32', 'ch_1B5EAYIq3znfZrgf6LmyPan5', 0, 'success', '12000', 'Stripe Payment', 'hello', 'pakistan', NULL, NULL, '2017-09-23 18:59:44', '2017-09-23 18:59:44', '2017-09-23')
ERROR - 2017-09-23 19:02:53 --> Query error: Column 'address' cannot be null - Invalid query: INSERT INTO `payments` (`user_id`, `payment_id`, `payment_confirmation`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `city`, `created_on`, `updated_on`, `package_name`, `credits`, `credits_status`, `start_date`, `expiry_date`) VALUES ('32', 'ch_1B5EDcIq3znfZrgf4A7d1ron', 0, 'success', '3500', 'Stripe Payment', 'hello', 'pakistan', NULL, NULL, '2017-09-23 19:02:53', '2017-09-23 19:02:53', 'basic', '1', 'valid', '2017-09-23', NULL)
