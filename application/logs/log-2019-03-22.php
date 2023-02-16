<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-22 09:27:22 --> Query error: Unknown column 'tbl_blog_comment.user_id' in 'on clause' - Invalid query: SELECT `tbl_profile_review`.*, `cv_contact_info`.`picture_url` as `pic`, `users`.*
FROM `tbl_profile_review`
JOIN `users` ON `tbl_profile_review`.`user_id` = `users`.`id`
JOIN `cv_contact_info` ON `tbl_blog_comment`.`user_id` = `cv_contact_info`.`user_id`
WHERE `tbl_profile_review`.`profile_id` = '3'
