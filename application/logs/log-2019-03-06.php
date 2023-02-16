<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-06 08:51:01 --> Query error: Unknown column 'users.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `users`.`cat_id`
JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `users`.`subcat_id`
WHERE `user_status` = 1
AND `verify` = 1
AND `method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:01:29 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `user_status` = 1
AND `verify` = 1
AND `method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:03:06 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:03:21 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
 LIMIT 10
ERROR - 2019-03-06 09:03:31 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:04:51 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:04:53 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:06:00 --> Query error: Unknown column 'cv_contact_info.cat_id' in 'on clause' - Invalid query: SELECT *
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` =`cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:07:19 --> Query error: Unknown table 'toppakistanis.cv_contact_info' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM `users`
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` =`cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:07:55 --> Query error: Not unique table/alias: 'users' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM (`users`, `cv_contact_info`, `users`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` =`cv_contact_info`.`cat_id`
ERROR - 2019-03-06 09:19:58 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*
FROM (`uers`, `cv_contact_info`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `uers`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:20:01 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*
FROM (`uers`, `cv_contact_info`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `uers`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:20:29 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*
FROM (`users`, `cv_contact_info`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:20:55 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*
FROM (`users`, `cv_contact_info`, `tbl_cat`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:21:19 --> Query error: Not unique table/alias: 'tbl_cat' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM (`users`, `cv_contact_info`, `tbl_cat`)
JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:21:30 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM `users`, `cv_contact_info`, `tbl_cat`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:30:08 --> Query error: Unknown column 'cv_contact_info.city_id' in 'on clause' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*, `tbl_subcat`.*, `tbl_skill`.*, `cv_skill`.*, `tbl_city`.*
FROM (`users`, `cv_contact_info`, `tbl_skill`, `cv_skill`)
LEFT JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
LEFT JOIN `tbl_city` ON `tbl_city`.`city_id` = `cv_contact_info`.`city_id`
LEFT JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `cv_contact_info`.`subcat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `users`.`id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:31:19 --> Query error: Unknown table 'toppakistanis.tbl_city' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*, `tbl_subcat`.*, `tbl_skill`.*, `cv_skill`.*, `tbl_city`.*
FROM (`users`, `cv_contact_info`, `tbl_skill`, `cv_skill`)
LEFT JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
LEFT JOIN `tbl_subcat` ON `tbl_subcat`.`subcat_id` = `cv_contact_info`.`subcat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `users`.`id` DESC
 LIMIT 10
ERROR - 2019-03-06 09:47:39 --> Query error: Not unique table/alias: 'users' - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `tbl_cat`.*, `cv_skill`.*
FROM (`users`, `cv_contact_info`, `cv_skill`, `users`)
LEFT JOIN `tbl_cat` ON `tbl_cat`.`cat_id` = `cv_contact_info`.`cat_id`
WHERE `users`.`user_status` = 1
AND `users`.`verify` = 1
AND `users`.`method` = 'normal'
ORDER BY `users`.`id` DESC
 LIMIT 10
ERROR - 2019-03-06 10:23:38 --> Query error: Unknown table 'toppakistanis.cv_contact_info' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM `users`
WHERE `users`.`verify` = 1
AND `users`.`method` = 'normal'
ERROR - 2019-03-06 10:41:09 --> Query error: Unknown column 'cv_contact_info.user_id' in 'field list' - Invalid query: SELECT `users`.*, `cv_contact_info`.`user_id`
FROM `users`
WHERE `cv_contact_info`.`user_id` = 'users.id'
ERROR - 2019-03-06 10:41:41 --> Query error: Unknown column 'cv_contact_info.user_id' in 'where clause' - Invalid query: SELECT `users`.*
FROM `users`
WHERE `cv_contact_info`.`user_id` = 'users.id'
ERROR - 2019-03-06 10:42:04 --> Query error: Unknown table 'toppakistanis.cv_contact_info' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM `users`
WHERE `cv_contact_info`.`user_id` = 'users.id'
ERROR - 2019-03-06 10:42:53 --> Query error: Unknown column 'cv_contact_info.user_id' in 'field list' - Invalid query: SELECT `users`.*, `cv_contact_info`.`user_id`
FROM `users`
WHERE `cv_contact_info`.`user_id` = 'users.id'
ERROR - 2019-03-06 10:49:29 --> Query error: Not unique table/alias: 'users' - Invalid query: SELECT `users`.*, `cv_contact_info`.*
FROM `users`, `cv_contact_info`, `users`
WHERE `cv_contact_info`.`user_id` = 2
ERROR - 2019-03-06 10:53:08 --> Query error: Unknown column 'userid' in 'where clause' - Invalid query: SELECT `users`.*, `cv_contact_info`.`user_id` as `userid`
FROM `users`, `cv_contact_info`
WHERE `userid` = 2
ERROR - 2019-03-06 10:53:36 --> Query error: Unknown column 'cv_contact_info.userid' in 'where clause' - Invalid query: SELECT `users`.*, `cv_contact_info`.`user_id` as `userid`
FROM `users`, `cv_contact_info`
WHERE `cv_contact_info`.`userid` = 2
ERROR - 2019-03-06 10:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as `cvskills`
FROM `users`
LEFT JOIN `cv_contact_info` ON `cv_contact_info`.`use' at line 1 - Invalid query: SELECT `users`.*, `cv_contact_info`.*, `cv_skill`.* as `cvskills`
FROM `users`
LEFT JOIN `cv_contact_info` ON `cv_contact_info`.`user_id`=`users`.`id`
LEFT JOIN `cv_skill` ON `cv_skill`.`user_id`=`users`.`id`
WHERE `users`.`verify` = 1
AND `users`.`method` = 'normal'
ERROR - 2019-03-06 11:18:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `cv_skill`.`user_id` IS NULL' at line 2 - Invalid query: SELECT *
WHERE `cv_skill`.`user_id` IS NULL
ERROR - 2019-03-06 11:18:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `cv_skill`.`user_id` IS NULL' at line 2 - Invalid query: SELECT *
WHERE `cv_skill`.`user_id` IS NULL
ERROR - 2019-03-06 20:05:16 --> Query error: Not unique table/alias: 'cv_skill' - Invalid query: SELECT `cv_skill`.*
FROM `cv_skill`, `cv_skill`
WHERE `cv_skill`.`user_id` = '2'
