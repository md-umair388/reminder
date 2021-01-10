<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id=$_SESSION['user_login'];
	$result1=mysqli_query($con,"select * from admin where id='$id'");
	$row1=mysqli_fetch_assoc($result1);
	$username1=$row1['username'];
?>
<html>
	<head>
		<title>View Reminder</title>
	</head>
</html>	
<form method="POST" action="" onsubmit="return validate()">
			<table align="">
				
				<tr>
					<td>Select From Date:</td>
					<td>
						<input type="date" name="date" id="date" required>
					</td>
					<td>Select To Date:</td>
					<td>
						<input type="date" name="date" id="date" required>
					</td>
				</tr>
				<tr>
					<td>Reminder Name</td>
					<td>Reminder Subject</td>
					<td>Reminder Descripion</td>
					<td>Email Address</td>
					<td>Contact No</td>
					<td>SMS</td>
					<td>Status</td>
					<td>Recurrence Frequency</td>
					<td>Delete Reminder</td>
					<td>Disable Reminder</td>
					<td>Enable Reminder</td>
					<td>Modify Reminder</td>
				</tr>
				<?php
			  include("connect.php");
			  //$result=mysqli_query($con,"select * from setreminder");  
			  $result=mysqli_query($con,"SELECT *,setreminder.status,setreminder.email,setreminder.id from setreminder JOIN admin ON setreminder.username=admin.username where setreminder.username='$username1'");  
			   while( $row=mysqli_fetch_assoc($result))
			   {
			    ?>
				<tr>
					<td><?php echo ucwords($row['username']);?></td>
					<td><?php echo ucwords($row['subject']);?></td>
					<td><?php echo ucwords($row['description']);?></td>
					<td><?php echo ucwords($row['email']);?></td>
					<td><?php echo ucwords($row['contact']);?></td>
					<td><?php echo ucwords($row['sms']);?></td>
					<td><?php echo ucwords($row['status']);?></td>
					<td><?php echo ucwords($row['recur']);?></td>
					<td><a href='deleteReminder.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick='javascript:return confirm("Sure to delete ?" );'>Delete</a></td>
					<td><a href='disableReminder.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick='javascript:return confirm("Sure to disable ?" );'>Disable</a></td>
					<td><a href='enableReminder.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick='javascript:return confirm("Sure to enable ?" );'>Enable</a></td>
					<td><a href='modifyReminder.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick='javascript:return confirm("Sure to modify ?" );'>Modify</a></td>
				</tr>
			  <?php }?>
				
				<tr>
					<td></td>
					<td><a href="home.php">Back</a></td>
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