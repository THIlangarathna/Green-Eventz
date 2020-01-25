<?php

session_start();

?>

<html>
<head>
	<title>Event</title>
	<link rel="stylesheet" type="text/css" href="reg1.css">
</head>
<body>
	<div id="head"><center><img src="logo.png" style="height: 80px;width: 80px;"></center>
		<h1 id="headtopic">GREEN EVENTZ</h1>
	</div>
  <ul>
  <li><a href="mainexlogged.php"><h5 class="p"><center><img src="logo.png" style="height: 45px;width: 45px;"></center>Home</h5></a></li>
  <li style="float: right"><a href="LogOut.php"><h5 class="p"><center><img src="logout.png" style="height: 45px;width: 45px;"></center>LogOut</h5></a></li>
</ul>
<br>
<h1 style="color: white; font-size: 50px;">Welocome!</h1>
<br>
<br>

<center>
	<div class="form111">
		<div class="tit">Add Event</div>
		<br>
		<form action="eventreg.php" method="post" enctype="multipart/form-data">
			<p>Name</p>
			<br><br>
			<input type="text" placeholder="Event Name" name="ename" required>
			<br>
			<br>
			<p>Date</p>
			<br><br>
    		<input type="Date" placeholder="Date" name="Date" required>
    		<br>
    		<br>
    		<p>Time</p>
			<br><br>
			<input type="Time" placeholder="Time" name="Time" required>
			<br>
			<br>
			<p>Venue</p>
			<br><br>
			<input type="text" placeholder="Venue" name="Venue" required>
			<br>
			<br>
			<p>Category</p>
			<select style="width: 200px;height: 30px;" name="Category" type="text">
    			<option value="Co-Curricular" type="text">Co-Curricular</option>
    			<option value="Extra-Curricular" type="text">Extra-Curricular</option>
    			<option value="Sports" type="text">Sports</option>
    			<option value="Kuppi" type="text">Kuppi</option>
  			</select>
  			<br><br>

			<p>Select an image to upload : </p>
    		<input type="file" name="userfile" id="fileToUpload" class="inputfile">
    		<br><br>
    		<button type="submit">Add Event</button>
    		<button type="submit"><a href="LogOut.php">Cancel</a></button>
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