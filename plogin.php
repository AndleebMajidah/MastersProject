<!DOCTYPE html>
<head>
<title>Login Page</title>
<body>
         <div class="box">
			<div class="border-bot">
				<div class="right-bot-corner">
					<div class="left-bot-corner">
						<div class="inner">
							<div class="box1 alt">
								<div class="inner">
									
								<?php	
									<form method="post" action="NewLogin.php">
										<fieldset>
											<h3> Your Username is your Email Id!!</h3>
											<div class="field"><label>Username:</label><input type="text" name ="Username" /></div>
											<div class="field"><label>Password:</label><input type="Password" name="Password"/></div>
											<table cellspacing="10">
											<tr>
											<td><input type="submit" name="submitbutton" id="submitbutton" value="Login" /></td>
											<td><a href="Register.php">Register</a></td>
											</tr>
											</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		?>
		</body>
		</html>		