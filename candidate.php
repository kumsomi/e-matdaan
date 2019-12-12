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
			<h4><a href="index.php" style="float:right; margin-right:10px; color:black; font-size:20px; margin-bottom:10px;">home</a><h4> 
	</div>
	<div class="admintitle" align="center">
		<h4>
		<a href="../index.php" style="float:left; margin-left:40px; margin-top:20px; color:blue font-size:20px;">Back</a>
		<a href="logout.php" style="float:right; margin-right:30px; margin-top:20px; color:blue font-size:20px;">Logout</a>
		<br>
		<br>
		
		<h1 align=center style="color:#2F4F4F; font-size:40px;">List of Candidates</h1>
		<br>
		<br>
		<table align="center" width="80%" border="1" style="margin-top:10px;">
		<tr style="background-color:#000; color:#fff;">
			<th>sr no.</th>
			<th>image</th>
			<th>cname</th>
			<th>cid</th>
			<th>party</th>
			<th>district</th>
		</tr>
		<?php
				include("../dbcon.php");
				
				$qry="SELECT * FROM `candidate`";
	
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
							<td><?php echo $data['cname'];?></td>
							<td><?php echo $data['cid'];?></td>
							<td><?php echo $data['party'];?></td>
							
							<td><?php echo $data['district'];?></td>
							
						</tr>
						<?php
					}
				}
			
			?>
	</table>
	