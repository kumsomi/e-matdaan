
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
			<h4><a href="../about.php" style="float:right; margin-right:30px; color:black; font-size:20px; margin-bottom:10px;">About us</a><h4> 
			<h4><a href="../contact.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">Contact us</a><h4> 
			<h4><a href="../index.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">home</a><h4> 
	</div>
	<div class="admintitle" align="center">
		<h4>
		<a href="../index.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<!--<a href="../logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>-->
		</h4>
	</div>
	<h1 align="center">Voter Login</h1>
	<form action="voterlogin.php" method="post">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="login">
				</td>
			</tr>
		</table>
	</form>
</body>


<?php
	include("../dbcon.php");
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="SELECT * FROM `new_voter` WHERE `username`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$query); 
		$row=mysqli_num_rows($run);
		if($row<1)
		{
?>
			<script>
			alert('Username or Password does not match');
				window.open('voterlogin.php','self');
			</script> 
<?php
		}
		else
		{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		session_start();
		$_SESSION['uid']=$id;
		header('location:voterdash.php');
		}
	}
?>
	