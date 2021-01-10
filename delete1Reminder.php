<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id1=$_SESSION['user_login'];
	$result1=mysqli_query($con,"select * from admin where id=$id1");
	$row1=mysqli_fetch_assoc($result1);
	$username1=$row1['username'];
	$condition=0;
?>
<?php
		 if(isset($_POST['check']))
			{
			    $condition=1;
				  $date=$_POST['date'];
			}
		  ?>
<html>
	<head>
		<title>Delete Reminder</title>
	</head>
</html>
<?php
							if ($condition==0)
				{
						?>
<form method="POST" action="" onsubmit="return validate()">
			<table align="">
				
				<tr>
					<td>Select Date:</td>
					<td>
						<input type="date" name="date" id="date" required">
					</td>
				</tr>
				<tr>
					<td><td><a href="home.php">Back</a></td></td>
					<td><button type="submit" name="check" id="check">Check</button></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><a href="logout.php">Logout</a></td>
					
				</tr>
			</table>
</form>
		<?php	} ?>

			<?php 
			if ($condition==1)
			{
				            include("connect.php");
							//$result=mysqli_query($con,"select * from setreminder where status=1 and date='$date' ");
							$result=mysqli_query($con,"SELECT * from setreminder JOIN admin ON setreminder.username=admin.username where setreminder.date='$date'"); 
							while($row = mysqli_fetch_assoc($result))
							{  ?><table>
						           <tr><td><?php    echo $row['subject'];?></td>
								       <td><a href='nextdelete.php?data_id=<?php echo $row['id'] ?>' ><?php   echo $row['description'];?></a></td>
									<tr>
									</table>
						     <?php 
							}
							//$_SESSION['idd']=$row['id'];
							
			}   ?>
<?php 
}
else
{
	header("Location:login.php");
}

?>