<?php session_start();?>
<html>
	<head>
		<title>Login Here</title>
		
	</head>
	
	<body align="center">
		<div class="main">
			
			<h1>Login Here</h1>
			  
			  <?php 
			if(isset($_POST['login']))
			{
				$uname=$_POST['uname'];
				$pwd=$_POST['pass'];
				//COnnect to DB
				include("connect.php");
				
				$result=mysqli_query($con,
				"select *from admin where username='$uname'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_assoc($result);
					if($row['status']=="1")
					{
						if($row['password']==$pwd)
						{
							
								//redirect to Home Page
								$_SESSION['user_login']=$row['id'];
								header("Location:home.php");
							
						}
						else
						{
							echo "<p class='text-center alert alert-danger'>Password not matched 
							for the Username</p>";
						}
						
					}	
					else
					{
					  echo "<p>Please Activate your account</p>";
					}
						
						
					
				}
				else
				{
					echo "<p class='text-center alert alert-danger'>Sorry! Username Does not Exists</p>";
				}
				
			}
			?>
			
			<form method="POST" action="">
				<table align="center">
				
				<tr>
					<td>User Name*</td>
					<td>
						<input type="text" name="uname"
						id="uname" data-validation="required">
						<br><span id="uname_error"></span>
					</td>
				</tr>
				<tr>
					<td>Password*</td>
					<td>
						<input type="password" name="pass"
						id="pass" data-validation="required">
						<br><span id="pass_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Login"></td>
					<td><a href="register.php">Register</a></td>
				</tr>
			</table>
			</form>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
			<script>
$.validate({
    lang: 'en',
	modules : 'security'
  });
			</script>
	</body>
</html>