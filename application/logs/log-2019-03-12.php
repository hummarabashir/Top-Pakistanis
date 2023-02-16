<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-12 09:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE   (
 )
ERROR - 2019-03-12 09:08:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT `cv_contact_info`.*
FROM `cv_contact_info`
WHERE   (
 )
ERROR - 2019-03-12 09:11:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE   (
 )
ERROR - 2019-03-12 11:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 13 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE   (
`first_name` LIKE '%ali%' ESCAPE '!'
OR  `last_name` LIKE '%ali%' ESCAPE '!'
OR  `type` LIKE '%ali%' ESCAPE '!'
AND    (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `type` LIKE '%%' ESCAPE '!'
OR  `city` LIKE '%Select Location%' ESCAPE '!'
OR  `cat_id` LIKE '%1%' ESCAPE '!'
  )
ERROR - 2019-03-12 18:15:34 --> Query error: Unknown column 'Rawalpindi' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Rawalpindi
OR  `first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
ERROR - 2019-03-12 18:16:31 --> Query error: Unknown column 'Rawalpindi' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Rawalpindi
AND  `first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
ERROR - 2019-03-12 18:18:02 --> Query error: Unknown column 'Multan' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Multan
AND  `first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
ERROR - 2019-03-12 18:47:32 --> Query error: Unknown column 'Rawalpindi' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Rawalpindi
OR  `first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
ERROR - 2019-03-12 18:47:58 --> Query error: Unknown column 'Rawalpindi' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Rawalpindi
OR  `first_name` LIKE '%ali%' ESCAPE '!'
OR  `last_name` LIKE '%ali%' ESCAPE '!'
OR  `type` LIKE '%ali%' ESCAPE '!'
OR  `first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
OR  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
ERROR - 2019-03-12 18:48:43 --> Query error: Unknown column 'Multan' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Multan
AND  `first_name` LIKE '%ali%' ESCAPE '!'
AND  `last_name` LIKE '%ali%' ESCAPE '!'
AND  `type` LIKE '%ali%' ESCAPE '!'
AND  `first_name` LIKE '%zay%' ESCAPE '!'
AND  `last_name` LIKE '%zay%' ESCAPE '!'
AND  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
AND  `last_name` LIKE '%freelance%' ESCAPE '!'
AND  `type` LIKE '%freelance%' ESCAPE '!'
ERROR - 2019-03-12 19:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Select Category' at line 22 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = 'Islamabad'
AND `cat_id` = 'Select Category'
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = 'Islamabad'
OR cat_id = Select Category
ERROR - 2019-03-12 20:09:48 --> Query error: Unknown column 'Karachi' in 'where clause' - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = Karachi
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
ERROR - 2019-03-12 20:17:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LI' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = 
OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
OR  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
ERROR - 2019-03-12 20:31:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LI' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = 
OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
OR  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
ERROR - 2019-03-12 20:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LI' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = 
OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
ERROR - 2019-03-12 20:33:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LI' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = 
OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
ERROR - 2019-03-12 20:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LI' at line 4 - Invalid query: SELECT *
FROM `cv_contact_info`
WHERE city = 
OR `cat_id` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
AND `city` = ''
AND   (
`first_name` LIKE '%zay%' ESCAPE '!'
OR  `last_name` LIKE '%zay%' ESCAPE '!'
OR  `type` LIKE '%zay%' ESCAPE '!'
AND  `first_name` LIKE '%freelance%' ESCAPE '!'
OR  `last_name` LIKE '%freelance%' ESCAPE '!'
OR  `type` LIKE '%freelance%' ESCAPE '!'
 )
