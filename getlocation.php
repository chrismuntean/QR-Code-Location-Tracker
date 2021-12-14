<?php
//once reached max num (10) rollback to 1 and delete all json data (even IF the 11th connection was cell)
//in the unlikely event of the 7th connection was not valid no data will be collected and the site will display "This QR code has not been scanned yet :/"

$locatenumreset = file_get_contents('locatenum.txt');
if ($locatenumreset > 10) {
		$locatenumreset = 1; //set the num to 1
  	$fmax=fopen('locatenum.txt','w'); //overwrite with 1
		fwrite($fmax,"$locatenumreset");
		fclose($fmax);
			unlink("10.json"); //delete 10.json
			unlink("9.json"); //   ^
			unlink("8.json"); //   |
			unlink("7.json"); //   |
			unlink("6.json"); //   | 
			unlink("5.json"); //  thru
			unlink("4.json"); //   |
			unlink("3.json"); //   |
			unlink("2.json"); //   |
			unlink("1.json"); //delete 1.json
};
?>
<?php
//gets locatenum from file to increase at end of script
$locatenum = file_get_contents('locatenum.txt');
// sets $userip as the clients IP address
$userip = $_SERVER['HTTP_CLIENT_IP']
   ? $_SERVER['HTTP_CLIENT_IP'] 
   : ($_SERVER['HTTP_X_FORWARDED_FOR'] 
        ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
        : $_SERVER['REMOTE_ADDR']);

//get ip info and create unique file ($locatenum.txt)
$location = file_get_contents("https://api.bigdatacloud.net/data/ip-geolocation-full?ip=$userip&localityLanguage=en&key=9da056f6d1f841f7a621d9afb78ae27a");
file_put_contents("$locatenum.json", "$location\n", FILE_APPEND);

//increase locatenum by 1
$locatenum++;
//rewrite locatenum.txt file with increased num
$f=fopen('locatenum.txt','w');
fwrite($f,"$locatenum");
fclose($f);
?>
<?php
//Page redirect either wifi or index ----------

//decrease the locate num to get the most recent file num
$locatenum--;
//get the contents of the most recent file
$celljson = file_get_contents("$locatenum.json");
$cellphp = json_decode($celljson); //convert json to php

//check if it's connection was over cellular or vpn [IF TRUE DELETE DATA & REDIRECT TO wifi.php]
if($cellphp->hazardReport->isCellular == true || $cellphp->hazardReport->hostingLikelihood > 1) {
	//rewrite subtracted locatenum
  $fcell=fopen('locatenum.txt','w');
	fwrite($fcell,"$locatenum");
	fclose($fcell);
	//delete the cellular connection data
	unlink("$locatenum.json");
	//direct user to connect to wifi page
	header("Location: wifi.php");
	exit();
} else {
	//if user is connected to wifi KEEP FILE and go to tracker page
	header("Location: index.php");
	exit();
}
?>
