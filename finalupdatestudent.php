<?php

	$con = mysql_connect('localhost','root','');
	
	mysql_select_db('student_system');
	
	$sid = $_GET['sid'];
	$sname1 = $_GET['sname'];
	$ssem1 = $_GET['ssem'];
	$phone1 = $_GET['sphonenumber'];
	//$scourse1 = $_GET['scourse'];
	$scounselor1 = $_GET['scounselor'];
	$address1 = $_GET['address'];
	//$sgender = $_GET['gender'];
	$msg = "STUDENT ADDED";
	
	
	$ans  = mysql_query("update student set sname = '$sname1'  where sid = $sid");
	
	$ans  = mysql_query("update student set sphone = $phone1  where sid = $sid");
//	$ans  = mysql_query("update student set scourse = '$scourse1'  where sid = $sid");
	$ans  = mysql_query("update student set scounselor = '$scounselor1'  where sid = $sid");
//	$ans  = mysql_query("update student set gender = '$sgender'  where sid = $sid");
	$ans  = mysql_query("update student set ssem = $ssem1 where sid = $sid");
	$ans  = mysql_query("update student set address = '$address1' where sid = $sid");
	//	and sclass='$sclass' and sphone = $phone and scourse='$scourse' and scounselor='$scounselor'
	//echo $msg;

?>