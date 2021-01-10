<?php
		$id=$_GET['data_id'];
		 if(isset($_POST['confirm']))
			{
				  $id=$_GET['data_id'];
			      include("connect.php");
				  mysqli_query($con, "DELETE FROM setreminder WHERE id='$id'");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert("Reminder Deleted");
							window.location="viewReminder.php";
						</script><?php
			        }
				   else
				  {
					?><script> 
						alert("Reminder not delete");
					</script><?php
				  }
			}
		  ?>
<html>
	<head>
		<title>Delete Reminder</title>
	</head>
</html>
<?php
							include("connect.php");
							$result=mysqli_query($con,"select * from setreminder where id=$id");
							$row = mysqli_fetch_assoc($result);
						?>
<form method="POST" action="" onsubmit="return validate()">
			<table align="">
				
				<tr>
					<td>Select Date:</td>
					<td>
						<?php echo $row['date']?>
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