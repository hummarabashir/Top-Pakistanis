<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-26 12:18:17 --> Severity: Notice --> Undefined variable: charge C:\wamp64\www\job360sep9\application\controllers\Stripe\Jpayment.php 146
ERROR - 2017-09-26 12:18:17 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\job360sep9\application\controllers\Stripe\Jpayment.php 146
ERROR - 2017-09-26 12:18:17 --> Query error: Column 'payment_id' cannot be null - Invalid query: INSERT INTO `jobseekar_payments` (`user_id`, `payment_id`, `payment_confirmation`, `payment_status`, `total`, `description`, `start_date`, `receipt_url`) VALUES ('32', NULL, 0, 'success', '1000', 'Stripe Payment', '2017-09-26', 'http://localhost/job360sep9/uploads/receipt_image/jobseekar/bankr_20170926121817.jpg')
ERROR - 2017-09-26 12:28:17 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\job360sep9\application\controllers\Users.php 205
ERROR - 2017-09-26 12:28:17 --> Severity: Notice --> Undefined variable: check_payment C:\wamp64\www\job360sep9\application\views\site\jobseekar_payment.php 154
ERROR - 2017-09-26 12:28:17 --> Severity: Notice --> Undefined variable: check_payment C:\wamp64\www\job360sep9\application\views\site\jobseekar_payment.php 156
ERROR - 2017-09-26 12:30:07 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\job360sep9\application\controllers\Users.php 201
ERROR - 2017-09-26 12:30:07 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\job360sep9\application\controllers\Users.php 206
ERROR - 2017-09-26 12:30:07 --> Severity: Notice --> Undefined variable: check_payment C:\wamp64\www\job360sep9\application\views\site\jobseekar_payment.php 156
ERROR - 2017-09-26 12:30:09 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\job360sep9\application\controllers\Users.php 201
ERROR - 2017-09-26 12:30:09 --> Severity: Notice --> Undefined variable: data C:\wamp64\www\job360sep9\application\controllers\Users.php 206
ERROR - 2017-09-26 12:30:09 --> Severity: Notice --> Undefined variable: check_payment C:\wamp64\www\job360sep9\application\views\site\jobseekar_payment.php 156
ERROR - 2017-09-26 12:32:38 --> Severity: Notice --> Undefined index: js_pay_status C:\wamp64\www\job360sep9\application\controllers\Users.php 198
ERROR - 2017-09-26 07:59:19 --> Severity: Compile Error --> Cannot redeclare Superadmin::approved_payments() C:\wamp64\www\job360sep9\application\controllers\Superadmin.php 418
ERROR - 2017-09-26 07:59:20 --> Severity: Compile Error --> Cannot redeclare Superadmin::approved_payments() C:\wamp64\www\job360sep9\application\controllers\Superadmin.php 418
ERROR - 2017-09-26 07:59:23 --> Severity: Compile Error --> Cannot redeclare Superadmin::approved_payments() C:\wamp64\www\job360sep9\application\controllers\Superadmin.php 418
ERROR - 2017-09-26 08:02:14 --> Severity: Notice --> Undefined index: package_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\jpending_payments.php 30
ERROR - 2017-09-26 08:02:15 --> Severity: Notice --> Undefined index: package_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\jpending_payments.php 30
ERROR - 2017-09-26 09:30:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\wamp64\www\job360sep9\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2017-09-26 09:30:23 --> Unable to connect to the database
ERROR - 2017-09-26 09:54:17 --> Severity: Notice --> Undefined index: package_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 75
ERROR - 2017-09-26 09:54:17 --> Severity: Notice --> Undefined index: package_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 79
ERROR - 2017-09-26 09:54:17 --> Severity: Notice --> Undefined index: package_name C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 79
ERROR - 2017-09-26 09:54:17 --> Severity: Notice --> Undefined index: credits C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 91
ERROR - 2017-09-26 09:54:17 --> Severity: Notice --> Undefined index: created_on C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 99
ERROR - 2017-09-26 09:57:53 --> Query error: Unknown column 'jobseekar_payments.id' in 'where clause' - Invalid query: SELECT *
FROM `jobseekar_payments`
LEFT JOIN `users` ON `jobseekar_payments`.`user_id`=`users`.`id`
WHERE `jobseekar_payments`.`id` = '32'
ERROR - 2017-09-26 09:59:23 --> Severity: Notice --> Undefined index: phone C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 99
ERROR - 2017-09-26 09:59:23 --> Severity: Notice --> Undefined index: mobile C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 106
ERROR - 2017-09-26 10:00:11 --> Severity: Notice --> Undefined index: phone C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 99
ERROR - 2017-09-26 10:00:11 --> Severity: Notice --> Undefined index: mobile C:\wamp64\www\job360sep9\application\views\backend\superadmin\modal_jpayment_view.php 106
ERROR - 2017-09-26 10:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 6 - Invalid query: SELECT *
FROM `jobseekar_payments`
LEFT JOIN `users` ON `jobseekar_payments`.`user_id`=`users`.`id`
WHERE `payment_confirmation` = '0'
ORDER BY `jobseekar_payments`.`jp_id` DESC
 LIMIT -100, 100
ERROR - 2017-09-26 10:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-100, 100' at line 6 - Invalid query: SELECT *
FROM `jobseekar_payments`
LEFT JOIN `users` ON `jobseekar_payments`.`user_id`=`users`.`id`
WHERE `payment_confirmation` = '0'
ORDER BY `jobseekar_payments`.`jp_id` DESC
 LIMIT -100, 100
ERROR - 2017-09-26 13:09:55 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:09:55 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:02 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:02 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:05 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:05 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:07 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:07 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:08 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:08 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:10 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:10 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:16 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:16 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:19 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:19 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:20 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:10:20 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:00 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:00 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:07 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:07 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:14 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:14 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:15 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:15 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:21 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:21 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/helpers/url_helper.php 564
ERROR - 2017-09-26 13:11:22 --> Severity: Warning --> session_start(): Cannot send session cookie - headers already sent by (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:22 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 13:11:53 --> Severity: Warning --> session_start(): Cannot send session cache limiter - headers already sent (output started at /home/jobscomp/public_html/application/models/User.php:2) /home/jobscomp/public_html/system/libraries/Session/Session.php 143
ERROR - 2017-09-26 18:28:00 --> Severity: Notice --> Undefined offset: 0 /home/jobscomp/public_html/application/controllers/Users.php 203
