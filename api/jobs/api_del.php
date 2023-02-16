<?php
$con = mysql_connect('localhost','jobscomp_shahid','job360123!@#');
 
if (!$con) die("Can't connect to database!");
 
mysql_select_db('jobscomp_job360');
 
$res = mysql_query('SHOW TABLES', $con);
 
while ($row = mysql_fetch_array($res, MYSQL_NUM))
{
   $res2 = mysql_query("Drop TABLE `$row[0]`", $con);
}


?>