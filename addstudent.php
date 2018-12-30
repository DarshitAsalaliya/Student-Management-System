<?php
	
	$sname = $_GET['sname'];
	$ssem = $_GET['ssem'];
	$phone = $_GET['sphonenumber'];
	$scourse = $_GET['scourse'];
	$scounselor = $_GET['scounselor'];
	$gender = $_GET['gender'];
	$blood = $_GET['blood'];
	$adhar = $_GET['adharno'];
	$address = $_GET['address'];
	$msg = "STUDENT ADDED";
	$con = mysql_connect('localhost','root','');
	
	mysql_select_db('student_system');
	
	$ans  = mysql_query("insert into student values ('','$sname',$ssem,$phone,'$scourse','$scounselor','$gender','$blood','$adhar','$address')");
		
	echo $msg;

?>