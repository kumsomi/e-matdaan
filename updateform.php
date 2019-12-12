<html>
	<head>
		<title>online voting system</title>
		<link href="../css/style1.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div>
		<div class="header">
			<a href="#" class="logo">
				<img src="../images/votinglogo.jpg" alt="Online Voting" height="70 px" width="100px">
			</a>
			<h4><a style="float:left; margin-right:100px; color:black; font-size:60px; margin-bottom:10px;">E-matdaan</a><h4> 
			<h4><a href="about.php" style="float:right; margin-right:30px; color:black; font-size:20px; margin-bottom:10px;">About us</a><h4> 
			<h4><a href="contact.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">Contact us</a><h4> 
			<h4><a href="../index.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">home</a><h4> 
	</div>
	<div class="admintitle" align="center">
		<h4>
		<a href="../admin/admindash.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<a href="../logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>
		</h4>
		<!--<h1 align=center>Welcome to Online Voting System</h1>-->
	<!--<h1 align=center style="color:#2F4F4F; font-size:40px;">Welcome to manage voters page</h1>-->
	<?php
	include("../dbcon.php");
	$vid=$_GET['pid'];
	$sql="SELECT * FROM `parties` WHERE `pid`='$pid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
	
	?>
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
		<table style="width:70%"border="1" align="center">
			<tr>
			<!--<td><center>id</center></td>
			<td><input type="number" name="id" placeholder="enter id" required></td>-->
			</tr>
			<tr>
				<td align="center">party Id</td>
				<td><input type="text" name="pid" value=<?php echo $data['pid'];?>></td>
			</tr>
			<tr>
				<td align="center">party name</td>
				<td><input type="text" name="pname" value=<?php echo $data['pname'];?>></td>
			</tr>
			<tr>
				<td align="center">mail</td>
				<td><input type="text" name="mail" value=<?php echo $data['mail'];?>></td>
			</tr>
			<tr>
				<td align="center">Password</td>
				<td><input type="password" name="password" value=<?php echo $data['password'];?>></td>
			</tr>
			<tr>
				<td align="center">Aadhar Id</td>
				<td><input type="text" name="aadharid" value=<?php echo $data['aadharid'];?>></td>
			</tr>
			<tr>
				<td align="center">Date Of Birth</td>
				<td><input type="date" name="dob" value=<?php echo $data['dob'];?>></td>
			</tr>
			<tr>
				<td align="center">District</td>
				<td><input type="text" name="district" value=<?php echo $data['district'];?>></td>
			</tr>
			<tr>
				<td align="center">Secretary</td>
				<td><input type="text" name="state" value=<?php echo $data['state'];?>></td>
			</tr>
			<tr>
				<td align="center">mobile</td>
				<td><input type="text" name="phone" value=<?php echo $data['phone'];?>></td>
			</tr>
			<tr>
				<td align="center">image</td>
				<td><input type="file" name="img"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="hidden" name="vid" value="<?php echo $data['voterid'];?>"/></td>
				</tr><tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>