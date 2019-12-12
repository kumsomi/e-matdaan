
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
	<h1 align=center style="color:#2F4F4F; font-size:40px;">Welcome to manage voters page</h1>
	<table align="center">
	<form action="managevoters.php" method="post">
		<tr>
			<th>Enter the voterid :</th>
			<td><input type="text" name="voterid" placeholder="enter the voterid of a user" required="required"/></td>
		</tr>
		<tr>
			<th>Enter the voter name :</th>
			<td><input type="text" name="votername" placeholder="enter the name of a user" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="search">
		</tr>
	</form>
	</table>
	
	<table align="center" width="80%" border="1" style="margin-top:10px;">
		<tr style="background-color:#000; color:#fff;">
			<th>sr no.</th>
			<th>image</th>
			<th>votername</th>
			<th>voterid</th>
			<th>username</th>
			<th>password</th>
			<th>aadharid</th>
			<th>dob</th>
			<th>district</th>
			<th>state</th>
			<th>phone</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
		<?php
			if(isset($_POST['submit']))
			{
				include("../dbcon.php");
				
				$voterid=$_POST['voterid'];
				$votername=$_POST['votername'];
				$qry="SELECT * FROM `new_voter` WHERE `voterid`='$voterid' AND `votername` LIKE '%$votername%'";
				
				
				$run=mysqli_query($con,$qry);
				if(mysqli_num_rows($run)<1)
				{
					echo"<tr><td colspan='13'>No records found</td></tr>";
				}
				else
				{
					$count=0;
					while($data=mysqli_fetch_assoc($run))
					{
						$count++;
						?>
						<tr>
							<td><?php echo $count?></td>
							<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-height:100px;"/></td>
							<td><?php echo $data['votername'];?></td>
							<td><?php echo $data['voterid'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['password'];?></td>
							<td><?php echo $data['aadharid'];?></td>
							<td><?php echo $data['dob'];?></td>
							<td><?php echo $data['district'];?></td>
							<td><?php echo $data['state'];?></td>
							<td><?php echo $data['phone'];?></td>
							<td><a href="updateform.php?voterid=<?php echo $data['voterid'];?>">Edit</a></td>
							<td><a href="deleteform.php?voterid=<?php echo $data['voterid'];?>">Delete</a></td>
						</tr>
						<?php
					}
				}
			}
			?>
	</table>
	
	