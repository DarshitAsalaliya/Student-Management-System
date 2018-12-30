<?php

	$con = mysql_connect('localhost','root','');
	mysql_select_db('student_system');
	
	
?>
<html>
<head>
	<title>STUDENT VIEW</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		.fortr th{
			text-align:center;
		}
	</style>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<meta http-equiv="refresh" content="2">-->
</head>
<body>
<div class="container-fluid well text-center">
<h2>STUDENT INFORMATION</h2>
</div>
<div class="container-fluid">


	<table class="table table-hover text-center table-bordered">
		<tr class="fortr">
			<th>STUDENT ID</th>
			<th>STUDENT NAME</th>
			<th>SEM</th>
			<th>PHONE NO.</th>
			<th>COURSE</th>
			<th>COUNSELOR</th>
			<th>GENDER</th>
			<th>BLOOD GROUP</th>
			<th>ADHAR NO</th>
			<th>ADDRESS</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	<?php
	
		$result = mysql_query("select * from student");
		
		$num = mysql_num_rows($result);
		
		for($i=0;$i<$num;$i++)
		{
			$row = mysql_fetch_array($result);
				
	?>
	
	<tr>
		<td><?php echo $row['sid'];?></td>
		<td><?php echo $row['sname'];?></td>
		<td ><?php echo $row['ssem'];?></td>
		<td><?php echo $row['sphone'];?></td>
		<td><?php echo $row['scourse'];?></td>
		<td><?php echo $row['scounselor'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['bloodgroup'];?></td>
		<td><?php echo $row['adharno'];?></td>
		<td><?php echo $row['address'];?></td>
		<form action="updatestudent.php" method="post">
		<input type="hidden" value="<?php echo $row['sid'];?>" name="sid">
		<td><button class="btn btn-info" style="width:50px;height:50px;" type="submit"><i class="glyphicon glyphicon-pencil"></i></button></td>
		</form>
		<td><button class="btn btn-danger" style="width:50px;height:50px;" value="<?php echo $row['sid'];?>" onclick="deletedata(this.value)"><i class="glyphicon glyphicon-trash"></i></button></td>
	</tr>
<?php } ?>
	</table>
</div>
<div id="mymodal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Hello Student
			</div>
			<div class="modal-title">
				Hello Student
			</div>
			<div class="modal-body">
				Hello Student
			</div>
		</div>
	</div>
</div>


</div>
<script>
	function deletedata(deleteid)
	{
		ans = confirm("Are Sure Delete This Student ?");
		if(ans==1)
		{
			var req = new XMLHttpRequest();
			
			req.open("get","http://localhost/student/deletestudent.php?sid="+deleteid,true);
			req.send();
			
			alert('STUDENT DELETED');
			}
	}
	setTimeout(function(){location.reload();},4000);
	
</script>

</body>
</html>