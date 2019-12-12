<html>
	<head>
		<title>online voting system</title>
		<link href="../css/style1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div>
		<div class="header">
			<a href="../index.php" class="logo">
				<img src="../images/votinglogo.jpg" alt="Online Voting" height="70 px" width="100px">
			</a>
			<h4><a style="float:left; margin-right:100px; color:black; font-size:60px; margin-bottom:10px;">E-matdaan</a><h4> 
			<h4><a href="about.php" style="float:right; margin-right:30px; color:black; font-size:20px; margin-bottom:10px;">About us</a><h4> 
			<h4><a href="contact.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">Contact us</a><h4> 
			<h4><a href="../index.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">home</a><h4> 
	</div>
	<!--<div class="admintitle" align="center">-->
		<h4>
		<a href="admindash.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<a href="logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>
		</h4>
		<!--<h1 align=center>Welcome to Online Voting System</h1>-->
	</div>
	<h1 align=center style="color:#2F4F4F; font-size:40px;">AADHAR REGISTRATION</h1>
	<div align=center>
	<br><br><br>
	<div>
		
		<table align="center"><!-- style="width:79%"border="1"-->
		<form method="post" action="aadharregister.php" enctype="multipart/form-data">
			<tr>
			<!--<td><center>id</center></td>
			<td><input type="number" name="id" placeholder="enter id" required></td>-->
			</tr>
			<tr>
				<td align="center">Aadhar Id</td>
				<td><input type="text" name="aadharid" placeholder="enter a valid aadhaarid" required></td>
			</tr>
			<!--<tr>
				<td align="center">user name</td>
				<td><input type="text" name="username" placeholder="enter full name" required></td>
			</tr>-->
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
		</table>
	</div>
	<?php
	if(isset($_POST['submit']))
			{
				include("../dbcon.php");
				
				$aadharid=$_POST['aadharid'];
				if(strlen($aadharid)==12)
				{
				$qry="INSERT INTO `aadhar_register`(`aadharid`) VALUES ('$aadharid')";
				$run=mysqli_query($con,$qry);
				if($run)
				{ 
					
						?>
						<script>
							alert('aadharid inserted successfully!!');
						</script>
						<?php
				}
				else{
						?>
						<script>
							alert('aadharid is already existing!!');
						</script>
						<?php
				}
				}
			else
				{
				echo("Error in inserting aadhar id  ".mysqli_error($con));
				}
			}
	
	?>