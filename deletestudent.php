<?php
	
	$con = mysql_connect('localhost','root','');
	
	mysql_select_db('student_system');
	
	$sid = $_GET['sid'];
	
	mysql_query("delete from student where sid = $sid");
	
?>