mysql connection

servername=localhost
username=root
password=''



database name=reg



tablename=regdetails

CREATE TABLE `reg`.`regdetails` ( `name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`name`)) ENGINE = MyISAM;



tablename=regevents1

CREATE TABLE `reg`.`regevents1` ( `name` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , `time` TIME NOT NULL , `venue` VARCHAR(255) NOT NULL , `category` VARCHAR(255) NOT NULL , `img` VARCHAR(255) NOT NULL , PRIMARY KEY (`name`)) ENGINE = MyISAM;



THERE SHOULD BE A FOLDER CALLED uploads IN THE SAME FOLDER TO STORE EVENT IMAGES.


Open mainex.php from the localhost