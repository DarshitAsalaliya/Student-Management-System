<html>

<head>
<title>
	INSERT STUDENT INFORMATION
</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid text-center well">
<h2>INSERT NEW STUDENT</h2>

</div>

	<div class="container">
		<form action="#" >
		<table class="table text-center table-bordered table-responsive" style="width:50%;margin-left:23%;margin-top:3%;">
			
				<tr>
					<td><lable>STUDENT NAME :- </lable></td>
					<td><input type="text" class="form-control" name="sname" required placeholder="Enter Student Name"></td>
				</tr>
				<tr>
					<td><lable>STUDENT SEM :- </lable></td>
					<td><select class="form-control" id="c">
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
					<td><input type="text" class="form-control" name="phonenumber" required placeholder="Student Phone Number"></td>
				</tr>
				<tr>
					<td><lable>STUDENT COURSE :- </lable></td>
					<td><select class="form-control" id="course">
							<option>MSCIT</option>
							<option>BCA</option>
							<option>BBA</option>
							<option>B.COM</option>
						</select></td>
				</tr>
				<tr>
					<td><lable>STUDENT COUNSELOR :- </lable></td>
					<td><input type="text" class="form-control" name="scounselor" required placeholder="Student Counselor Name"></td>
				</tr>
				<tr>
					<td><lable>GENDER :- </lable></td>
					<td><select class="form-control" id="gender"><option>MALE</option><option>FEMALE</option></select></td>
				</tr>
				<tr>
					<td><lable>BLOOD GROUP :- </lable></td>
					<td><select class="form-control" id="bloodgroup">
					<option>A+</option>
					<option>O+</option>
					<option>AB+</option>
					<option>B+</option>
					</select></td>
				</tr>
				<tr>
					<td><lable>STUDENT ADHAR NO :- </lable></td>
					<td><input type="text"  class="form-control" name="adhar" required placeholder="Student Adharcard No"></td>
				</tr>
				<tr>
					<td><lable>STUDENT ADDRESS :- </lable></td>
					<td><textarea cols="25" rows="5" class="form-control" placeholder="Student Address" id="add" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><button class="btn btn-success" style="width:100%"  onclick="validation()">ADD</button></td>
				</tr>
		
		</form>
	</div>
<div id="p"></div>
<script>
	
	function validation()
	{
	
		var x = document.getElementsByTagName("input");
		
		var a = document.getElementById('add').value;
	
		if(x[0].value=="")
		{
			alert('STUDENT NAME FIELD IS EMPLTY');
		}
		else if(x[0].value.lengths<3)
		{
			alert('STUDENT NAME LENGHT MUST BE GREATED THAN 3');
		}
		else if(!isNaN(x[0].value))
		{
			alert('NOT ALOW NUMBER IN STUDENT NAME');
		}
		else if(x[1].value=="")
		{
			alert('PHONE NUMBER FIELD IS EMPLTY');
		}
		else if(isNaN(x[1].value) || x[1].value.length<10 || x[1].value.length>10 || x[1].value<0)
		{
			alert('PHONE NUMBER NOT VALID');
		}
		else if(x[1].value.charAt(0)!=9 && x[1].value.charAt(0)!=8 && x[1].value.charAt(0)!=7)
		{
			alert('PHONE NUMBER NOT VALID');
		}
		else if(x[2].value=="")
		{
			alert('COUNSELOR FIELD IS EMPLTY');
		}
		else if(x[2].value.length<3)
		{
			alert('COUNSELOR NAME LENGHT MUST BE GREATED THAN 3');
		}
		else if(x[3].value=="" || isNaN(x[3].value) || x[3].value.length!=11)
		{
			alert('ADHAR NUMBER NOT VALID');
		}
		else if(a=="")
		{
			alert('ADDRESS FIEALD EMPTY');
		}
		else if(a.length<5)
		{
			alert('ENTER AT LEAST 5 CHARACTER IN ADDRESS');
		}
		else
		{
			adddata();
		}
			/*req.onreadystatechange = function()
			{
					if(req.readystate == 4 && req.status == 200)
					{							
					}
			}*/
		
	}
	function adddata()
	{		
			
			ans = confirm('Are You Want To Add This Student ?');
			
			if(ans==1)
			{
			var x = document.getElementsByTagName("input");
		
			var y = document.getElementById('c').value;
			
			var z = document.getElementById('course').value;
			
			var g = document.getElementById('gender').value;

			var b = document.getElementById('bloodgroup').value;
			
			var a = document.getElementById('add').value;
			
			var req = new XMLHttpRequest();
			
req.open("get","http://localhost/student/addstudent.php?sname="+x[0].value+"&ssem="+y+"&sphonenumber="+x[1].value+"&scourse="+z+"&scounselor="+x[2].value+"&gender="+g+"&blood="+b+"&address="+a+"&adharno="+x[3].value,true);
			
			req.send();
			
			alert('STUDENT ADDED');
			}
	}

</script>

</body>
</html>