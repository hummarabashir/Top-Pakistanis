<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-05 06:21:40 --> Unable to connect to the database
ERROR - 2018-12-05 07:35:52 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT *
FROM (`tbl_job`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `tbl_job`.`cat_id`
WHERE `active/deactive` = 1
AND `job_status` = 1
ORDER BY `jobs_id` DESC
 LIMIT 6
