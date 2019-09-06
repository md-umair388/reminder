<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id=$_SESSION['user_login'];
	$result=mysqli_query($con,"select * from admin where id='$id'");
	$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
<h2>Welcome to Reminder application <?php echo $row['username'];?></h2>
<p>It helps you to remember each and every reminder</p>



<form>
<h2>Today is <?php echo date("l,dS F Y, h:i:sa")?></h2>
<a href="setReminder.php">Set Reminder</a></br>
<a href="modifyReminder.php">Modify Reminder</a></br>
<a href="disableReminder.php">Disable Reminder</a></br>
<a href="deleteReminder.php">Delete Reminder</a></br>
<a href="enableReminder.php">Enable Reminder</a></br>
<a href="viewReminder.php">View Reminder</a>
</form>

</body>
</html>
<?php 
}
else
{
	header("Location:login.php");
}

?>