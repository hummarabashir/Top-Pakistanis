<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-18 06:02:05 --> 9
ERROR - 2017-09-18 06:32:14 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3InqIq3znfZrgfYj8dRPhH', 'success', '20000', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:32:14', '2017-09-18 06:32:14', 'monthly', '20000')
ERROR - 2017-09-18 06:32:18 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3InuIq3znfZrgfiTPPJp52', 'success', '20000', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:32:18', '2017-09-18 06:32:18', 'monthly', '20000')
ERROR - 2017-09-18 06:34:18 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3IprIq3znfZrgfKmNTg84K', 'success', '20000', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:34:18', '2017-09-18 06:34:18', 'monthly', '20000')
ERROR - 2017-09-18 06:41:27 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3IwmIq3znfZrgf93TtujfL', 'success', '3500', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:41:27', '2017-09-18 06:41:27', 'Basic', '3500')
ERROR - 2017-09-18 06:50:49 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3J5qIq3znfZrgfEcTKHz7k', 'success', '3500', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:50:49', '2017-09-18 06:50:49', 'basic', '3500')
ERROR - 2017-09-18 06:53:23 --> 9
ERROR - 2017-09-18 06:54:07 --> Query error: Unknown column 'package_name' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `package_name`, `credits`) VALUES ('71', 11, 'ch_1B3J92Iq3znfZrgfP533YVop', 'success', '3500', 'Stripe Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 06:54:07', '2017-09-18 06:54:07', 'basic', '3500')
ERROR - 2017-09-18 07:31:43 --> 9
ERROR - 2017-09-18 07:45:35 --> Query error: Unknown column 'job_id' in 'field list' - Invalid query: INSERT INTO `payments` (`user_id`, `job_id`, `payment_status`, `total`, `description`, `first_name`, `last_name`, `address`, `zip`, `city`, `created_on`, `updated_on`, `receipt_url`) VALUES ('71', 11, 'success', 1000, 'Bank Payment', 'shahid', 'khan', 'G11,islamabad', '160059', 'Islamabad', '2017-09-18 07:45:35', '2017-09-18 07:45:35', 'http://localhost/job360sep9/uploads/receipt_image/bankr_20170918074535.jpg')
ERROR - 2017-09-18 08:47:01 --> 9
ERROR - 2017-09-18 09:08:52 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:13:08 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:13:35 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:16:48 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:17:30 --> Query error: Unknown column 'users.user_id' in 'on clause' - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`user_id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:17:31 --> Query error: Unknown column 'users.user_id' in 'on clause' - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`user_id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:19:06 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:19:07 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:19:08 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:22:29 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:27:57 --> 9
ERROR - 2017-09-18 09:29:35 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:29:56 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:30:41 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:31:48 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:34:40 --> Severity: Parsing Error --> syntax error, unexpected '$row' (T_VARIABLE), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:34:41 --> Severity: Parsing Error --> syntax error, unexpected '$row' (T_VARIABLE), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:35:42 --> Severity: Parsing Error --> syntax error, unexpected '$row' (T_VARIABLE), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:35:43 --> Severity: Parsing Error --> syntax error, unexpected '$row' (T_VARIABLE), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 28
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 27
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 29
ERROR - 2017-09-18 09:36:16 --> Severity: Notice --> Undefined index: jobs_id C:\wamp64\www\job360sep9\application\views\backend\superadmin\pending_payments.php 31
ERROR - 2017-09-18 09:52:49 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) C:\wamp64\www\job360sep9\application\models\Crud_model.php 346
ERROR - 2017-09-18 09:53:00 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::selet() C:\wamp64\www\job360sep9\application\models\Crud_model.php 345
ERROR - 2017-09-18 09:53:01 --> Severity: Error --> Call to undefined method CI_DB_mysqli_driver::selet() C:\wamp64\www\job360sep9\application\models\Crud_model.php 345
ERROR - 2017-09-18 09:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment' at line 2 - Invalid query: SELECT `users`.`first_name`, `users`.`last_name`, `payments`.`id`
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payments`.`payment_confirmation` = '0'
ORDER BY `payments`.`id` DESC
 LIMIT 10
ERROR - 2017-09-18 10:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payment_confirmati' at line 2 - Invalid query: SELECT *
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payment_confirmation` = '0'
ORDER BY `payments`.`id` DESC
 LIMIT 10
ERROR - 2017-09-18 10:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payment_confirmati' at line 2 - Invalid query: SELECT *
LEFT JOIN `users` ON `payments`.`user_id`=`users`.`id`
WHERE `payment_confirmation` = '0'
ORDER BY `payments`.`id` DESC
 LIMIT 10
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 39
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: cat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 46
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: subcat_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 53
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: clevel_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 60
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_emptype C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 67
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_vacancies C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 74
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_sdate C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 81
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_edate C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 88
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_explevel C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 95
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_edatestatus C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 102
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_shift C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 109
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_gender C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 116
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_age C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 123
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_salery_min C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 130
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_salery_max C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 130
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_location C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 137
ERROR - 2017-09-18 10:20:38 --> Severity: Notice --> Undefined index: job_description C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 144
ERROR - 2017-09-18 10:49:56 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 40
ERROR - 2017-09-18 10:50:32 --> Severity: Notice --> Undefined index: job_title C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 40
ERROR - 2017-09-18 11:21:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 11:21:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:21:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:28 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 11:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:49 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 11:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 - Invalid query: SELECT * FROM admin ORDER BY admin_id desc LIMIT 10 OFFSET -10
ERROR - 2017-09-18 11:28:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:05:01 --> Severity: Error --> Call to undefined method CI_Loader::join() C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 12
ERROR - 2017-09-18 12:05:14 --> Query error: Unknown column 'payment_id.user_id' in 'on clause' - Invalid query: SELECT *
FROM `payments`
LEFT JOIN `users` ON `payment_id`.`user_id`=`users`.`id`
WHERE `payments`.`id` = '9'
ERROR - 2017-09-18 12:08:33 --> Severity: Parsing Error --> syntax error, unexpected '' / '' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 128
ERROR - 2017-09-18 12:08:36 --> Severity: Parsing Error --> syntax error, unexpected '' / '' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 128
ERROR - 2017-09-18 12:09:04 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_payment_view.php 128
ERROR - 2017-09-18 12:19:29 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
ERROR - 2017-09-18 12:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 2' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -10, 2
ERROR - 2017-09-18 12:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 2' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -10, 2
ERROR - 2017-09-18 12:20:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
ERROR - 2017-09-18 12:20:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
ERROR - 2017-09-18 12:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
ERROR - 2017-09-18 12:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:26:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:05 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:27:06 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 12:35:47 --> 9
ERROR - 2017-09-18 12:39:57 --> Severity: Parsing Error --> syntax error, unexpected '=', expecting ')' C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 72
ERROR - 2017-09-18 12:40:55 --> 9
ERROR - 2017-09-18 12:41:51 --> Severity: Parsing Error --> syntax error, unexpected '=', expecting ')' C:\wamp64\www\job360sep9\application\controllers\Stripe\Payment.php 72
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 33
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 33
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 37
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 40
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 57
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 74
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 83
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 83
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 89
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 107
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 116
ERROR - 2017-09-18 12:56:19 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\job360sep9\application\views\site\preview1.php 116
ERROR - 2017-09-18 12:58:16 --> Severity: Notice --> Undefined variable: contact_info C:\wamp64\www\job360sep9\application\controllers\Users.php 635
ERROR - 2017-09-18 13:18:54 --> 9
ERROR - 2017-09-18 13:20:44 --> 3
ERROR - 2017-09-18 13:20:58 --> 9
ERROR - 2017-09-18 13:21:06 --> 3
ERROR - 2017-09-18 13:21:21 --> 9
ERROR - 2017-09-18 13:21:31 --> 9
ERROR - 2017-09-18 13:23:42 --> 9
ERROR - 2017-09-18 13:24:44 --> 9
ERROR - 2017-09-18 13:55:22 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\helpers\multi_language_helper.php 31
ERROR - 2017-09-18 13:56:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
ERROR - 2017-09-18 13:56:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 5 - Invalid query: SELECT *
FROM `payments`
WHERE `payment_confirmation` = '0'
ORDER BY `id` DESC
 LIMIT -100, 100
