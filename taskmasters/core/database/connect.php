<?php
$connect_error = 'Sorry, we\'re experienceing connection problems.';
mysql_connect('test.cfnwhjtmz9or.us-west-2.rds.amazonaws.com', 'taskmaster', 'hiralgala') or die($connect_error);
mysql_select_db('taskdb') or die($connect_error);
?>