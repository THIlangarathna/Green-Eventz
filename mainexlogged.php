<?php

include_once('connection.php');
$query="select * from regevents1 order by date";
$result=mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Green Eventz</title>
	<link href="styleex.css" rel="stylesheet">
	<link href="style1ex.css" rel="stylesheet">
</head>

<body>
	<div id="head"><center><img src="logo.png" style="height: 80px;width: 80px;"></center>
    <h1 id="headtopic">GREEN EVENTZ</h1>
  </div>
  <ul>
  <li><a href="mainexlogged.php" class="b"><h5 class="p"><center><img src="logo.png" style="height: 45px;width: 45px;"></center>Home</h5></a></li>
    <li><a href="co-curlogged.php"><h5 class="p"><center><img src="study.png" style="height: 45px;width: 45px;"></center>Co-Curricular</h5></a>
  </li>
    <li><a href="ex-curlogged.php"><h5 class="p"><center><img src="extra.png" style="height: 45px;width: 45px;"></center>Extra Curricular</h5></a>
  </li>
    <li><a href="sportslogged.php"><h5 class="p"><center><img src="sports.png" style="height: 45px;width: 45px;"></center>Sports</h5></a>
  </li>
    <li><a href="kuppilogged.php"><h5 class="p"><center><img src="kuppi.png" style="height: 45px;width: 45px;"></center>Kuppi</h5></a>
  </li>
  <li style="float: right"><a href="LogOut.php"><h5 class="p"><center><img src="logout.png" style="height: 45px;width: 45px;"></center>LogOut</h5></a></li>
  <li style="float: right"><a href="home.php"><h5 class="p"><center><img src="add.png" style="height: 45px;width: 45px;"></center>Add Event</h5></a></li>
</ul><br><br><br><br>
<center><div style="width: 100%; height: 460px; display: flex; flex-align: center; place-items: center;">
<?php

while($rows=mysqli_fetch_array($result))
{
?>
<div class="cards">
  <div class="card bg3">
			<center><div class="box-sub"><?php echo $rows['name']; ?><br>
        <?php echo $rows['date']; ?><br>
        <?php echo $rows['time']; ?><br>
        <?php echo $rows['venue']; ?><br>
      </div></center>
      <img src="<?php echo $rows['img']; ?>" class="imgbx">
	</div>
  <?php
}
  ?>
  </div></div></div></div></div></div></div></div></div></div></div></div></center>

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
</div>
</body>
</html>