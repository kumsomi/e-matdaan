<?php
		include('../dbcon.php');
		$voterid= $_REQUEST['voterid'];
		
		$qry="DELETE FROM `new_voter` WHERE `voterid`='$voterid';";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('data deleted successfully!!');
				window.open('managevoters.php','_self');
			</script>
			<?php
		}
		

?>
