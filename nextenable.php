
<?php
	$id=$_GET['data_id'];
		 if(isset($_POST['confirm']))
			{
				  $id=$_GET['data_id'];
				  $date=$_POST['date'];
				  $subject=$_POST['subject'];
				  $description=$_POST['description'];
				  $email=$_POST['email'];
				  $contact=$_POST['contact'];
				  $sms=$_POST['sms'];
				  if(isset($_POST['recur'])){
					$recur=implode(',', $_POST['recur']);
				  }
				  else{
					  $recur="";
				  }
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"update setreminder set date='$date',subject='$subject',description='$description',email='$email',contact='$contact',sms='$sms',recur='$recur',status=1 where id=$id");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert("Reminder Set");
							window.location="viewReminder.php";
						</script><?php
			        }
				   else
				  {
					?><script> 
						alert("Reminder not set");
					</script><?php
				  }
			}
		  ?>
<html>
	<head>
		<title>Enable Reminder</title>
	</head>
</html>
			<?php
							include("connect.php");
							$result=mysqli_query($con,"select * from setreminder where id=$id and status=0");
							
						$row = mysqli_fetch_assoc($result)
							
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
						<select>
							<option value=""><?php echo $row['subject']?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Add description:</td>
					<td>
						<textarea name="description" id="description" required>
							<?php echo $row['description']?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Email Address:</td>
					<td>
						<input type="text" name="email" id="email" required value="<?php echo $row['email']?>">
					</td>
				</tr>
				<tr>
					<td>Contact No:</td>
					<td>
						<input type="text" name="contact" id="contact" required value="<?php echo $row['contact']?>">
					</td>
				</tr>
				<tr>
					<td>SMS No:</td>
					<td>
						<input type="text" name="sms" id="sms" required value="<?php echo $row['sms']?>">
					</td>
				</tr>
				<tr>
					<td>Recur for next:</td>
					<td>
						<input type="checkbox" name="recur[]" value="<?php echo $row['recur']?>">7 Days<br>
						<input type="checkbox" name="recur[]" value="<?php echo $row['recur']?>">5 Days<br>
						<input type="checkbox" name="recur[]" value="<?php echo $row['recur']?>">3 Days<br>
						<input type="checkbox" name="recur[]" value="<?php echo $row['recur']?>">2 Days<br>
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