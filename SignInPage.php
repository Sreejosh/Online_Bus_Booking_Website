<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="icon" href="Bus name.jpg">
	<link rel="stylesheet" href="SignInPage.css">
</head>
<body>
	<div class="container">
		<h1> <pre>Already have an account ?</pre> </h1>
		<h1>Login Account</h1>
		<form onsubmit="verify()" class="form-inline" method="post" action="signin_data.php">
			<label for="username">UserID:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Sign In" id="si" ><br>
			<div class="refs">
			<a href="ForgotPass.php" style="color:black;margin-top:5px;text-align:left;padding:10px">RESET PASSOWRD</a>
            <a href="createaccount.php" style="color:black;margin-top:5px;text-align:right;padding:10px;margin-left:2.5rem;">CREATE PASSOWRD</a>
			</div>

		</form>
	</div>
	<script>
		
		function verify(){
		var SIN = document.getElementById("si");
		var UN = document.getElementById("username");
		var PS = document.getElementById("password");
		const un_regx = /^[a-zA-Z0-9_]{8,16}$/; 
		const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
		if(!un_regx.test(UN.value)){
			alert("Username must be atleast 8 charecters and must include alphabetical characters")
			return  false;
		}
		
		if (!passwordRegex.test(PS.value)) {
			alert("Password must be atleast 8 charecters and must include alphabetical characters")
			return false;
		}

		}
		
	</script>
</body>
</html>