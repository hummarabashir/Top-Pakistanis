<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-08 09:55:17 --> job id59
ERROR - 2019-01-08 09:55:57 --> job id59
ERROR - 2019-01-08 10:17:41 --> Query error: Unknown column 'tbl_job.featured' in 'order clause' - Invalid query: SELECT `tbl_company`.`owner_id`, `tbl_company`.`comp_id`, `tbl_company`.`comp_name`, `tbl_company`.`group_name`, `tbl_company`.`head_name`, `tbl_company`.`head_hrdepartment`, `tbl_company`.`head_cnic`, `tbl_company`.`job_designation`, `tbl_company`.`industry`, `tbl_company`.`product_service`, `tbl_company`.`ownership`, `tbl_company`.`comp_address`, `tbl_company`.`comp_country`, `tbl_company`.`comp_city`, `tbl_company`.`description`, `tbl_company`.`email`, `tbl_company`.`contact_person`, `tbl_company`.`comp_url`, `tbl_company`.`phone_no`, `tbl_company`.`fax`, `tbl_company`.`no_employee`, `tbl_company`.`logo_url`, `tbl_company`.`status`, `users`.`first_name`, `users`.`last_name`
FROM `tbl_company`
JOIN `users` ON `users`.`id` = `tbl_company`.`owner_id`
WHERE `tbl_company`.`comp_id` = '13'
ORDER BY `tbl_company`.`comp_id` DESC, `tbl_job`.`featured` DESC
