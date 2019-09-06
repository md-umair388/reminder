		<div class="container">
			
			<h1>Register Here</h1>
			<?php 
			if(isset($_POST['register']))
			{
				$name=$_POST['uname'];
				$email=$_POST['email'];
				$pwd=$_POST['pass'];
				$status=1;
				$con=mysqli_connect("localhost","root","","reminder");
				
				mysqli_query($con,"insert into 
					admin(username,
					email,password,status) 
					values('$name','$email','$pwd','$status')");
				if(mysqli_affected_rows($con)==1)
				{
					?>
					<script>
						alert("Account Created Succesfully");
						window.location="login.php"
					</script>
					<?php
				}
				else
				{
					echo "<p>Sorry! Unable to Create an 
					account</p>";
				}
			}
			?>
			<form method="POST" action="" 
			onsubmit="return validate()">
				<table class="table">
				<tr>
					<td>Username*</td>
					<td>
						<input type="text" name="uname" 
						id="uname" class="form-control" onblur="checkTextBox(this)" data-validation="required alphanumeric" data-validation-allowing="_">
						<span class="text-danger" id="uname_error"></span>
					</td>
				</tr>
				<tr>
					<td>Email*</td>
					<td>
						<input type="text" name="email"
						id="email" class="form-control" onblur="checkTextBox(this)">
						<span class="text-danger" id="email_error"></span>
					</td>
				</tr>
				<tr>
					<td>Password*</td>
					<td>
						<input type="password" name="pass"
						id="pass" class="form-control" onblur="checkTextBox(this)">
						<span class="text-danger" id="pass_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="register" 
					value="Register"></td>
				</tr>
			</table>
			</form>
		</div>