
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
			<h4><a href="contact.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">home</a><h4> 
	</div>
	<div class="admintitle" align="center">
		<h4>
		<a href="../index.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<a href="logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>
		</h4>
		<!--<h1 align=center>Welcome to Online Voting System</h1>-->
	</div>
	<h1 align=center style="color:#2F4F4F; font-size:40px;">NEW VOTER REGISTRATION</h1>
	<div align=center>
	<br><br><br>
	<div>
		<form method="post" action="newvoter.php" enctype="multipart/form-data">
		<table style="width:70%"border="1" align="center">
			<tr>
			<!--<td><center>id</center></td>
			<td><input type="number" name="id" placeholder="enter id" required></td>-->
			</tr>
			<tr>
				<td align="center">Voter Id</td>
				<td><input type="text" name="voterid" placeholder="enter voterid" required></td>
			</tr>
			<tr>
				<td align="center">voter name</td>
				<td><input type="text" name="votername" placeholder="enter full name of the voter" required></td>
			</tr>
			<tr>
				<td align="center">user name</td>
				<td><input type="text" name="username" placeholder="choose a user name" required></td>
			</tr>
			<tr>
				<td align="center">Password</td>
				<td><input type="password" name="password" placeholder="enter password" required></td>
			</tr>
			<tr>
				<td align="center">Aadhar Id</td>
				<td><input type="text" name="aadharid" placeholder="enter aadhar id " required></td>
			</tr>
			<tr>
				<td align="center">Date Of Birth</td>
				<td><input type="date" name="dob" placeholder="enter date of birth" required></td>
			</tr>
			<tr>
				<td align="center">District</td>
				<td><input type="text" name="district" placeholder="enter district" required></td>
			</tr>
			<tr>
				<td align="center">State</td>
				<td><input type="text" name="state" placeholder="enter state" required></td>
			</tr>
			<tr>
				<td align="center">Phone number</td>
				<td><input type="text" name="phone" placeholder="enter phone number" required></td>
			</tr>
			<tr>
				<td align="center">image</td>
				<td><input type="file" name="img"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>


<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		
		$voterid=$_POST['voterid'];
		$votername=$_POST['votername'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$aadharid=$_POST['aadharid'];
		$dob=$_POST['dob'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$phone=$_POST['phone'];

		
		$imagename=$_FILES['img']['name'];
		$tempname=$_FILES['img']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		$qry="INSERT INTO `new_voter`(`voterid`,`votername`, `username`, `password`, `aadharid`, `dob`, `district`, `state`, `phone`, `image`) VALUES ('$voterid','$votername','$username','$password','$aadharid','$dob','$district','$state','$phone','$imagename')";
		
		$run=mysqli_query($con,$qry);
		if($run)
		{
			?>
			<script>
				alert('data inserted successfully!!');
			</script>
			<?php
		}
		else{
			echo("Error: ".mysqli_error($con));
		}
	}
?>