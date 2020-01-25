<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="reg1.css">
</head>
<body>
	<script>
function Validate() {
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirm_password").value;
	if (password != confirmPassword){
		alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
		return false;
	}
	return true;
}
	</script>
	<div id="head"><center><img src="logo.png" style="height: 80px;width: 80px;"></center>
		<h1 id="headtopic">GREEN EVENTZ</h1>
	</div>
  <ul>
  <li><a href="mainex.php"><h5 class="p"><center><img src="logo.png" style="height: 45px;width: 45px;"></center>Home</h5></a></li>
  <li style="float: right"><a href="LogIn.php"><h5 class="p"><center><img src="login.png" style="height: 45px;width: 45px;"></center>LogIn</h5></a></li>
  <li style="float: right"><a href="SignUp.php" class="b"><h5 class="p"><center><img src="signup.png" style="height: 45px;width: 45px;"></center>SignUp</h5></a></li>
</ul>

	<br><br>
	<div class="form11">
		<div class="tit">Signup</div>
		<br><center>
		<img src="icon.png" height="150px" width="150px"></center>
		<form action="regis.php" method="post">
			<p>Username</p>
			<br><br>
			<input type="text" placeholder="Username" name="user" required><br><br>
			<p>Password</p>
			<br><br>
    		<input type="password" placeholder="Enter Password" id="password" name="password" required><br><br>
       		<p>Repeat Password</p>
       		<br><br>
    		<input type="password" placeholder="Repeat Password" name="confirm_password" id="confirm_password" required>
    		<br><br>
    		<button type="submit" onclick="return Validate()">SignUp</button>
    		<button type="submit"><a href="mainex.php">Cancel</a></button>
	</div>       
 
</form>
</center>
<div id="foot">
    <h1 class="getin">Get in Touch</h1><br><br>


<ul class="foot">
  <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="Address.png" style="height: 45px;width: 45px;"></center>NSBM</h5></a></li>
    <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="phone.png" style="height: 45px;width: 45px;"></center>+94 712345678</h5></a>
  </li>
    <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="email.png" style="height: 45px;width: 45px;"></center>Mail@Nsbm.com</h5></a>
  </li>
    <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="facebook.png" style="height: 45px;width: 45px;"></center>Facebook</h5></a>
  </li>
    <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="whatsapp.png" style="height: 45px;width: 45px;"></center>Whatsapp</h5></a>
  </li>
  <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="instagram.png" style="height: 45px;width: 45px;"></center>Instagram</h5></a></li>
  <li class="footli" style="float: center;"><a href="" class="c"><h5 class="q"><center><img src="linkedin.png" style="height: 45px;width: 45px;"></center>LinkedIn</h5></a></li>
</ul>


</div>
</body>
</html>