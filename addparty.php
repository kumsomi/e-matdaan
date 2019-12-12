
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
		<a href="../admin/admindash.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<a href="logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>
		</h4>
		<!--<h1 align=center>Welcome to Online Voting System</h1>-->
	</div>
	<h1 align=center style="color:#2F4F4F; font-size:40px;">NEW PARTY REGISTRATION</h1>
	<div align=center>
	<br><br><br>
	<div>
		<form method="post" action="addparty.php" enctype="multipart/form-data">
		<table style="width:70%"border="1" align="center">
			
			<!--<td><center>id</center></td>
			<td><input type="number" name="id" placeholder="enter id" required></td>-->
			<tr>
				<td align="center">party id</td>
				<td><input type="varchar" name="pid" placeholder="enter the party id" required></td>
			</tr>
			<tr>
				<td align="center">party name</td>
				<td><input type="varchar" name="pname" placeholder="enter the name of the party" required></td>
			</tr>
			<tr>
				<td align="center">mobile</td>
				<td><input type="varchar" name="mobile" placeholder="enter mobile" required></td>
			</tr>
			<tr>
				<td align="center">mail</td>
				<td><input type="varchar" name="mail" placeholder="enter mail id " required></td>
			</tr>
			<tr>
				<td align="center">secretary</td>
				<td><input type="varchar" name="secretary" placeholder="enter the name of the secretary" required></td>
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
		
		$secretary=$_POST['secretary'];
		$pname=$_POST['pname'];
		$pid=$_POST['pid'];
		$mail=$_POST['mail'];
		$mobile=$_POST['mobile'];

		
		$imagename=$_FILES['img']['name'];
		$tempname=$_FILES['img']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		$qry="INSERT INTO `parties`(`pid`,`pname`, `mobile`, `mail`, `secretary`, `image`) VALUES ('$pid','$pname','$mobile','$mail','$secretary','$imagename');";
		
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