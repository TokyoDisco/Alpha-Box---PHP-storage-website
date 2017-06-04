<html>
<head>
	<title>
	   Drop Box Login Page
	</title>
</head>

  
    
    

<script src="check.js"></script> 
<body>
	<center><a href="logonA.html"  title="Home Screen/Login Page"><img src="logo.png" /></a></center> 


	<tr><td><td></td></td></tr>
	<tr></tr>
	<form name="form"  action="login.php" method="post">
	
	  <center>
	<tr><td>
	
	<p><tr>
		<td>Login Name  </td>
	</tr>
	</p>
	<p>	<tr>
		<td><input type="text" id="LOGON" name="LOGON" /></td>
	</p>
		</tr>
	<p><tr>
			<tr>
			<td>Password    </td>  </tr>
	</p>	
		<p><tr>
			
			<td><input type="text" id="PASS" name="PASS" /></td></tr>
	</p>
	<p>
	<button type="submit" id="loginbutton" title="Drop Box" onclick= "return CheckPassword(document.form.PASS, document.form.LOGON, document.form.hyper)">Log to the DropBox  </button>
	<p>
<!--	<a href="DBMain.html" title="DropBox"> ALPHA HYPERLINK UNTIL SCRIPT TO BUTTON </a> -->
	</p>
	<p>
	<button name="hyper"  style="visibility:hidden"><a href="DBMain.html"> Login </a></button>
	
	</p>
	<p>
	<a href="register.html" title="Sign In">Sign in</a>/<a href="resetPass.html" title="PassWord Reset">Password reset</a>
	</p>
	</td></tr> 
	</center>
	</form>
</body>
</html>