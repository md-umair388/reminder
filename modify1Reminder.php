<?php  session_start();
if(isset($_SESSION['user_login']))
{
	include("connect.php");
 	$id1=$_SESSION['user_login'];
	$condition=0;
?>
<?php
		 if(isset($_POST['check']))
			{     
				 $condition=1;
				  $date=$_POST['date'];
				  
			}
?>
<!----for chkk------------------>
<?php if ($condition==0)
				{?>
			<form method="POST" action="">
			<table align="">

			    <tr>
					<td>Choose the Date:</td>
					<td>
						<input type="date" name="date" id="date" >	
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
							$result=mysqli_query($con,"select * from setreminder where status=1 and date='$date' ");
							while($row = mysqli_fetch_assoc($result))
							{  ?><table>
						           <tr><td><?php    echo $row['subject'];?></td>
								       <td><a href='nextmodify.php?data_id=<?php echo $row['id'] ?>' ><?php   echo $row['description'];?></a></td>
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
