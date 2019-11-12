	<!DOCTYPE html>
	<html >
	<head>
	<title>Sign Up/Log In</title>
	<link rel="stylesheet" href="signup.css" type="text/css" />
	</head>
	<body class="login">

	<div id="Bar">
	<div id="Frame">
	<div id="logo"> University Social Network </div>
	<div id="header-main-right">
	<div id="header-main-right-nav">


	<form method="post" action="includes/login.php" id="login_form" name="login_form">
		<table border="0" style="border:none">
			<tr>
			<td >
				<input type="text" tabindex="1" id="username" placeholder="School ID" name="username" class="inputtext radius1" value="">
			</td>

			<td >
				<input type="password" tabindex="2" id="pass" placeholder="Password" name="password" class="inputtext radius1" >
			</td>


			</tr>

			<tr>

			<td >
				<input type="submit" class="button" name="login" value="Login" />
			</td>

			<td>
				<label>
					<a href="" style="color:#ccc; text-decoration:none">Forgot password?</a>
				</label>

			</td>
			</tr>

		</table>

	</form>
	</div>
	</div>
	</div>
	</div>

	<div class="loginbox radius">
		<h2 style="color:#141823; text-align:center;">Sign Up</h2>
	<div class="loginboxinner radius">
	

	<div class="loginform">
	<div id="message">Hello</div>
	<form id="login" action="includes/sign-up.php" method="post">
		<p>
			<input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius" required/>
		</p>
		<p>
			<input type="text" id="lastname" name="lastname" placeholder="Other Names" value="" class="radius" required/>
		</p>

		<p>
			<input type="text" id="email" name="email" placeholder="Email" value="" class="radius" required/>
		</p>
		<p>
			<?php
				require "includes/database_connect.php";
				$sql="SELECT * FROM `university_details`";

				$result=mysqli_query($conn,$sql);
				echo "<select name='university' class='drop' style='width:440px;height:45px;background-color:white;border-radius:3px;'>";
				echo "<option name='uni'>Select University</option>";
                    while($row=mysqli_fetch_array($result)){
						
                        echo "<option value='".$row["university_name"]."' name='uni'";
                        
                        echo ">".$row["university_name"]."</option>";
                    }
                    echo "</select>";

			?>
		</p>

		<p>
			<input type="text" id="remail" name="userid" placeholder="School ID No." class="radius" required/>
		</p>

		<p>
			<input type="password" id="password" name="password" placeholder="Password" class="radius" required/>
		</p>

		<p>
			<input type="password" id="password" name="password2" placeholder="Confirm Password" class="radius" required/>
		</p>

		<p>
			<button class="radius title" name="signup">Sign Up</button>

		</p>

	</form>
	</div>
	
	</div>
	
	</div>
	
	</body>
	</html>