<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id=$_SESSION['user_login'];
	$result1=mysqli_query($con,"select * from admin where id='$id'");
	$row1=mysqli_fetch_assoc($result1);
	$username=$row1['username'];
?>
<?php
		 if(isset($_POST['confirm']))
			{
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
				  mysqli_query($con,"insert into setreminder(username,date,subject,description,email,contact,sms,recur,status) values('$username','$date','$subject','$description','$email','$contact','$sms','$recur','$status')");
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
		<title>Set Reminder</title>
	</head>
</html>	
<form method="POST" action="" onsubmit="return validate()">
			<table align="">
				
				<tr>
					<td>Select Date:</td>
					<td>
						<input type="date" name="date" id="date" required>
					</td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td>
						<select id="subject" name="subject" required>
							<option value="Birthday">Birthday</option>
							<option value="Anniversary">Anniversary</option>
							<option value="Farewell">Farewell</option>
							<option value="TaskDeadline">TaskDeadline</option>
							<option value="Meeting">Meeting</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Add description:</td>
					<td>
						<textarea name="description" id="description" required></textarea>
					</td>
				</tr>
				<tr>
					<td>Email Address:</td>
					<td>
						<input type="text" name="email" id="email" required>
					</td>
				</tr>
				<tr>
					<td>Contact No:</td>
					<td>
						<input type="text" name="contact" id="contact" required>
					</td>
				</tr>
				<tr>
					<td>SMS No:</td>
					<td>
						<input type="text" name="sms" id="sms" required>
					</td>
				</tr>
				<tr>
					<td>Recur for next:</td>
					<td>
						<input type="checkbox" id="recur" name="recur[]" value="7">7 Days<br>
						<input type="checkbox" id="recur" name="recur[]" value="5">5 Days<br>
						<input type="checkbox" id="recur" name="recur[]" value="3">3 Days<br>
						<input type="checkbox" id="recur" name="recur[]" value="2">2 Days<br>
					</td>
				</tr>
				<tr>
					<td><a href="home.php">Back</a></td>
					<td><button type="submit" name="confirm" id="confirm">Confirm</button></td>
				</tr>
				<br>
				
				<tr>
					<td></td>
					<td><a href="home.php">Home</a></td>
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