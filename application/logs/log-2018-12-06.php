<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-06 20:16:05 --> Query error: Table 'job.tbl_blog' doesn't exist - Invalid query: SELECT *
FROM `tbl_blog`
ERROR - 2018-12-06 20:43:06 --> Query error: Column 'cat_name' cannot be null - Invalid query: INSERT INTO `tbl_cat` (`cat_name`) VALUES (NULL)
ERROR - 2018-12-06 20:44:02 --> Query error: Unknown column 'cat_id' in 'field list' - Invalid query: INSERT INTO `tbl_blog` (`blog_name`, `description`, `cat_id`) VALUES (NULL, NULL, NULL)
