<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-08 10:28:26 --> entered in filter function  4
ERROR - 2017-10-08 10:28:26 --> entered in filter function  job
ERROR - 2017-10-08 10:28:26 --> entered in filter function  100000
ERROR - 2017-10-08 10:28:26 --> entered in filter function  10000000
ERROR - 2017-10-08 10:28:38 --> entered in filter function  4
ERROR - 2017-10-08 10:28:38 --> entered in filter function  full-time
ERROR - 2017-10-08 10:28:38 --> entered in filter function  100000
ERROR - 2017-10-08 10:28:38 --> entered in filter function  10000000
ERROR - 2017-10-08 12:15:43 --> entered in filter function  4
ERROR - 2017-10-08 12:15:43 --> entered in filter function  full-time
ERROR - 2017-10-08 12:15:43 --> entered in filter function  100000
ERROR - 2017-10-08 12:15:43 --> entered in filter function  10000000
ERROR - 2017-10-08 14:27:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-10, 10' at line 6 - Invalid query: SELECT *
FROM `tbl_job`
LEFT JOIN `tbl_cat` ON `tbl_job`.`cat_id`=`tbl_cat`.`cat_id`
WHERE `tbl_job`.`job_status` = '0'
ORDER BY `jobs_id` DESC
 LIMIT -10, 10
