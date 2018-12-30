<?php
	mysql_connect("localhost","root",'');
	
	mysql_select_db('student_system');
	
	$sid = $_POST['sid'];
	
	$result = mysql_query("select*from student where sid = $sid");
	
	$row = mysql_fetch_array($result);
	
?>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid text-center well">
<h2>UPDATE STUDENT INFORMATION</h2>
</div>
<div class="container">
		<form action="#" >
		<table class="table text-center table-bordered table-responsive" style="width:50%;margin-left:23%;margin-top:3%;">
				<tr>
					<td><lable>STUDENT ID :- </lable></td>
					<td><input type="text" value="<?php echo $row['sid'];?>" readonly class="form-control"></td>
				<tr>
					<td><lable>STUDENT NAME :- </lable></td>
					<td><input type="text"  class="form-control" name="sname" value="<?php echo $row['sname'];?>" required></td>
				</tr>
				<tr>
					<td><lable>STUDENT SEM :- </lable></td>
					<td><input type="text" value="<?php echo $row['ssem'];?>" class="form-control text-center " disabled style="width:40px;float:left;" id="c">
					<select class="form-control text-center" style="width:100px;" onchange="changeclass(this.value)">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select></td>
				</tr>
				<tr>
					<td><lable>STUDENT PHONE NUMBER :- </lable></td>
					<td><input type="text" class="form-control" name="phonenumber" value="<?php echo $row['sphone'];?>"required></td>
				</tr>
				<tr>
					<td><lable>STUDENT COURSE :- </lable></td>
					<td><?php echo $row['scourse']?></td>
							
				</tr>
				<tr>
					<td><lable>STUDENT COUNSELOR :- </lable></td>
					<td><input type="text" class="form-control" name="scounselor" required value="<?php echo $row['scounselor'];?>"></td>
				</tr>
				<tr>
					<td ><lable>STUDENT GENDER :- </lable></td>
					<td><?php echo $row['gender']?></td>
					
				</tr>
				<tr>
					<td ><lable>STUDENT BLOOD GROUP :- </lable></td>
					<td><?php echo $row['bloodgroup']?></td>
					
				</tr>
				<tr>
					<td ><lable>STUDENT ADHAR NO :- </lable></td>
					<td><?php echo $row['adharno']?></td>
					
				</tr>
				<tr>
					<td><lable>STUDENT ADDRESS :- </lable></td>
					<td><textarea cols="25" rows="5" class="form-control" placeholder="Student Address" id="add" required><?php echo $row['address']?></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><button class="btn btn-success" style="width:100%"  onclick="validation()">UPDATE</button></td>
				</tr>
		
		</form>
	</div>

<script>
	
	function validation()
	{
	
		var x = document.getElementsByTagName("input");
		var a = document.getElementById('add').value;
		
		if(x[1].value=="")
		{
			alert('STUDENT NAME FIELD IS EMPLTY');
		}
		else if(x[1].value.length<3)
		{
			alert('STUDENT NAME LENGHT MUST BE GREATED THAN 3');
		}
		else if(!isNaN(x[1].value))
		{
			alert('NOT ALOW NUMBER IN STUDENT NAME');
		}
		else if(x[3].value=="" || x[3].value==0)
		{
			alert('PHONE NUMBER FIELD IS EMPLTY');
		}
		else if(isNaN(x[3].value) || x[3].value.length<10 || x[3].value.length>10 || x[3].value<0)
		{
			alert('PHONE NUMBER NOT VALID');
		}
		else if(x[4].value=="" || x[4].value==0)
		{
			alert('COUNSELOR FIELD IS EMPLTY');
		}
		else if(x[4].value.length<3)
		{
			alert('COUNSELOR NAME LENGHT MUST BE GREATED THAN 3');
		}
		else if(a=="")
		{
			alert('ADDRESS FIEALD EMPTY');
		}
		else if(a==0)
		{
			alert('ADDRESS NOT VALID');
		}
		else if(a.length<5)
		{
			alert('ADDRESS NOT VALID');
		}
		else
		{
			updatedata();
		}
			/*req.onreadystatechange = function()
			{
					if(req.readystate == 4 && req.status == 200)
					{
							
					}
			}*/
		
	}
	
	function changeclass(c)
	{
		
		document.getElementById('c').value = c;
	}
	
	function updatedata()
	{
			ans = confirm('Are Sure Update This Student ?');
			if(ans==1)
			{
			var x = document.getElementsByTagName("input");
		
			var y = document.getElementById('c').value;
			
			var a = document.getElementById('add').value;


			var req = new XMLHttpRequest();
			
			req.open("get","http://localhost/student/finalupdatestudent.php?sid="+x[0].value+"&sname="+x[1].value+"&ssem="+y+"&address="+a+"&sphonenumber="+x[3].value+"&scounselor="+x[4].value,true);
			
			req.send();
			
			alert('STUDENT UPDATED');
			}
	}

</script>


</body>
</html>