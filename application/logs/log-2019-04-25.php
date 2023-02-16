<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-25 00:03:29 --> Query error: Column 'address' cannot be null - Invalid query: INSERT INTO `payments` (`user_id`, `payment_status`, `payment_confirmation`, `total`, `description`, `first_name`, `last_name`, `address`, `city`, `created_on`, `updated_on`, `package_name`, `package_id`, `credits`, `credits_status`, `start_date`, `expiry_date`) VALUES ('15', 'success', 0, '1500', 'Bank Payment', 'ali', 'zay', NULL, NULL, '2019-04-25 00:03:29', '2019-04-25 00:03:29', 'Basic Pakistanis Plan', '1', '15', 'valid', '2019-04-25', NULL)
ERROR - 2019-04-25 06:18:24 --> Query error: Unknown column 'updated_on' in 'field list' - Invalid query: UPDATE `emp_package_detail` SET `package_id` = '3', `name` = 'Super%20Pakistanis%20Plan', `profile_view_limit` = '40', `promotion_limit` = NULL, `updated_on` = '2019-04-25 06:18:24'
WHERE `user_id` = '15'
ERROR - 2019-04-25 08:34:40 --> Query error: Unknown column 'users.id' in 'where clause' - Invalid query: SELECT `profile_view_limit`
FROM `emp_package_detail`
WHERE `users`.`id` = '14'
