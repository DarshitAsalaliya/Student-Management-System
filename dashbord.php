<?php
	mysql_connect('localhost','root','');
	
	mysql_select_db('student_system');
	
	

?>
<html>
<head>
	<title>DASHBORD</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid text-center well">
	<h3>DASHBORD</h3>
</div>
<div class="container-fluid">
	
<?php
	$result = mysql_query("SELECT scourse,count(*) FROM student group by scourse");
	
	$num = mysql_num_rows($result);
	
	for($i=0;$i<$num;$i++)
	
	{
	
			$row = mysql_fetch_array($result);
		
			$scourse = $row['scourse'];
			
			$resultofmalegender = mysql_query("select count(gender) from student where gender = 'male' and scourse='$scourse'");
			$resultoffemalegender = mysql_query("select count(gender) from student where gender = 'female' and scourse='$scourse'");

			
			
			$rowformale = mysql_fetch_array($resultofmalegender);
			$rowforfemale = mysql_fetch_array($resultoffemalegender);
			
			
		
?>
		<div class="col-md-4">
						<div class="panel-group">
							<div class="panel panel-warning">
								<div class="panel-heading text-center">
									<?php echo $row['scourse']?>
								</div>
								<div class="panel-body ">
									<?php echo "TOTLE STUDENTS = ".$row[1]."<br>";?>
									<?php echo "TOTLE MALE = ".$rowformale[0]."<br>";?>
									<?php echo "TOTLE FEMALE = ".$rowforfemale[0]."<br>";?>
									<?php
										$resultblood = mysql_query("select bloodgroup,count(*) from student where scourse = '$scourse' group by bloodgroup");
										$numforblood = mysql_num_rows($resultblood);
										for($j=0;$j<$numforblood;$j++)
											{
												$rowforblood = mysql_fetch_array($resultblood);
												echo "BLOOD GROUP = ".$rowforblood[0]." = ".$rowforblood[1]."<br>";
											}
									?>
									<?php
										$resultofclasswise = mysql_query("select ssem,count(*) from student where scourse = '$scourse' group by ssem");
										$numforclass = mysql_num_rows($resultofclasswise);
										for($j=0;$j<$numforclass;$j++)
											{
												$rowforclass  = mysql_fetch_array($resultofclasswise);
												echo "SEM ".$rowforclass[0]." = ".$rowforclass[1]."<br>";
											}
									?>
								</div>
						</div>
						</div>
				</div>
<?php } ?>
					</div>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>