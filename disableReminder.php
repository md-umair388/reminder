<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id=$_SESSION['user_login'];
	$result1=mysqli_query($con,"select * from admin where id='$id'");
	$row1=mysqli_fetch_assoc($result1);
?>
<?php
		 if(isset($_POST['confirm']))
			{
				  $id=$_GET['data_id'];
			      include("connect.php");
				  mysqli_query($con,"update setreminder set status=0 where id='$id'");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert("Reminder Disable");
							window.location="viewReminder.php";
						</script><?php
			        }
				   else
				  {
					?><script> 
						alert("Reminder not disable");
					</script><?php
				  }
			}
		  ?>
<html>
	<head>
		<title>Disable Reminder</title>
	</head>
</html>
<?php
							include("connect.php");
							$id=$_GET['data_id'];
							$result=mysqli_query($con,"select * from setreminder where id=$id and status=1");
							$row = mysqli_fetch_assoc($result);
						?>
<form method="POST" action="" onsubmit="return validate()">
			<table align="">
				
				<tr>
					<td>Select Date:</td>
					<td>
						<input type="date" name="date" id="date" required value="<?php echo $row['date']?>">
					</td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td>
						<select id="subject" name="subject">
							<option value=""><?php echo $row['subject']?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Reminders:</td>
					<td>
						<select>
							<option value=""><?php echo $row1['username']." : ".$row['description']?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Description:</td>
					<td>
						
						<?php echo $row['description']?>
					</td>
				</tr>
				<tr>
					<td><td><a href="home.php">Back</a></td></td>
					<td><button type="submit" name="confirm" id="confirm">Confirm</button></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><a href="logout.php">Logout</a></td>
					
				</tr>
			</table>
</form>
<?php 
}
else
{
	header("Location:login.php");
}

?>