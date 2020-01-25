<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="reg1.css">
</head>
<body>
	<div id="head"><center><img src="logo.png" style="height: 80px;width: 80px;"></center>
		<h1 id="headtopic">GREEN EVENTZ</h1>
	</div>
  <ul>
  <li><a href="mainex.php"><h5 class="p"><center><img src="logo.png" style="height: 45px;width: 45px;"></center>Home</h5></a></li>
  <li style="float: right"><a href="LogIn.php"  class="b"><h5 class="p"><center><img src="login.png" style="height: 45px;width: 45px;"></center>LogIn</h5></a></li>
  <li style="float: right"><a href="SignUp.php"><h5 class="p"><center><img src="signup.png" style="height: 45px;width: 45px;"></center>SignUp</h5></a></li>
</ul>
	<br><br>
	<center>
	<div class="form">
		<div class="tit">Login</div>
		<br>
		<img src="icon.png" height="150px" width="150px">
		<form action="validation.php" method="post">
			<p>Username</p>
			<br><br>
			<input type="text" placeholder="Username" name="user" required><br><br>
			<p>Password</p>
			<br><br>
    		<input type="password" placeholder="Enter Password" name="pass" required>
    		<br>
    		<br>
    		<button type="submit">Login</button>
    		<button type="submit"><a href="SignUp.php">Signup</a></button>
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