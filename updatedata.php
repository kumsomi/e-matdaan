<?php
		include('../dbcon.php');
		pid,pname,mobile,mail,secretary,image
		$pid=$_POST['pid'];
		$pname=$_POST['pname'];
		$mail=$_POST['mail'];
	
		$secretary=$_POST['secretary'];
		$mobile=$_POST['mobile'];
		
		$imagename=$_FILES['img']['name'];
		$tempname=$_FILES['img']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		$qry="UPDATE `parties` SET `pid` = '$pid', `pname` = '$pname',`mail` = '$mail',`secretary` = '$secretary', `mobile` = '$mobile',`image` = '$imagename' WHERE `pid`='$pid';";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('data uploaded successfully!!');
				window.open('manageparty.php?pid=<?php echo $pid;?>','_self');
			</script>
			<?php
		}
		

?>
