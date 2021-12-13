<?php date_default_timezone_set('America/Chicago'); //overides server hosts timezone to mine ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Connections || QR-Code #0001</title>
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
      <link href="/css/all.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
			<script type="text/javascript">
					<?php
						//get contents of 1
			    	$maponejson = file_get_contents("1.json");
      			$maponephp = json_decode($maponejson); //convert json to php
						//get contents of 2
						$maptwojson = file_get_contents("2.json");
      			$maptwophp = json_decode($maptwojson); //convert json to php
						//get contents of 3
						$mapthreejson = file_get_contents("3.json");
      			$mapthreephp = json_decode($mapthreejson); //convert json to php
						//get contents of 4
						$mapfourjson = file_get_contents("4.json");
      			$mapfourphp = json_decode($mapfourjson); //convert json to php
						//get contents of 5
						$mapfivejson = file_get_contents("5.json");
      			$mapfivephp = json_decode($mapfivejson); //convert json to php
						//get contents of 6
						$mapsixjson = file_get_contents("6.json");
      			$mapsixphp = json_decode($mapsixjson); //convert json to php
						//get contents of 7
						$mapsevenjson = file_get_contents("7.json");
      			$mapsevenphp = json_decode($mapsevenjson); //convert json to php
						//get contents of 8
						$mapeightjson = file_get_contents("8.json");
      			$mapeightphp = json_decode($mapeightjson); //convert json to php
						//get contents of 9
						$mapninejson = file_get_contents("9.json");
      			$mapninephp = json_decode($mapninejson); //convert json to php
						//get contents of 10
						$maptenjson = file_get_contents("10.json");
      			$maptenphp = json_decode($maptenjson); //convert json to php
					?>
				console.log("Location long/ lat listed below:")
				console.log("-------------------------------")
				//pin 1 vars
				var maponelat = <?= $maponephp->location->latitude; + x?>;
				var maponelong = <?= $maponephp->location->longitude + x ?>;
				console.log('1: ' + maponelat+", "+maponelong); //console log [REMOVE]
				//pin 2 vars
				var maptwolat = <?= $maptwophp->location->latitude + x?>;
				var maptwolong = <?= $maptwophp->location->longitude + x?>;
				console.log('2: ' + maptwolat+", "+maptwolong); //console log [REMOVE]
				//pin 3 vars
				var mapthreelat = <?= $mapthreephp->location->latitude + x?>;
				var mapthreelong = <?= $mapthreephp->location->longitude + x?>;
				console.log('3: ' + mapthreelat+", "+mapthreelong); //console log [REMOVE]
				//pin 4 vars
				var mapfourlat = <?= $mapfourphp->location->latitude + x?>;
				var mapfourlong = <?= $mapfourphp->location->longitude + x?>;
				console.log('4: ' + mapfourlat+", "+mapfourlong); //console log [REMOVE]
				//pin 5 vars
				var mapfivelat = <?= $mapfivephp->location->latitude + x?>;
				var mapfivelong = <?= $mapfivephp->location->longitude + x?>;
				console.log('5: ' + mapfivelat+", "+mapfivelong); //console log [REMOVE]
				//pin 6 vars
				var mapsixlat = <?= $mapsixphp->location->latitude + x?>;
				var mapsixlong = <?= $mapsixphp->location->longitude + x?>;
				console.log('6: ' + mapsixlat+", "+mapsixlong); //console log [REMOVE]
				//pin 7 vars
				var mapsevenlat = <?= $mapsevenphp->location->latitude + x?>;
				var mapsevenlong = <?= $mapsevenphp->location->longitude + x?>;
				console.log('7: ' + mapsevenlat+", "+mapsevenlong); //console log [REMOVE]
				//pin 8 vars
				var mapeightlat = <?= $mapeightphp->location->latitude + x?>;
				var mapeightlong = <?= $mapeightphp->location->longitude + x?>;
				console.log('8: ' + mapeightlat+", "+mapeightlong); //console log [REMOVE]
				//pin 9 vars
				var mapninelat = <?= $mapninephp->location->latitude + x?>;
				var mapninelong = <?= $mapninephp->location->longitude + x?>;
				console.log('9: ' + mapninelat+", "+mapninelong); //console log [REMOVE]
				//pin 10 vars
				var maptenlat = <?= $maptenphp->location->latitude + x?>;
				var maptenlong = <?= $maptenphp->location->longitude + x?>;
				console.log('10: ' + maptenlat+", "+maptenlong); //console log [REMOVE]
				console.log("-------------------------------")
			</script>
			<script type="text/javascript" src="map.js"></script>
  </head>
<body>
<center>
  <div class="number-txt">Connections: QR-Code </div>
  <div class="number number-txt">#0001</div>
  <div class="location-header underline"><a>Locations listed below</a></div>

  <!-- map display cont -->
		<!-- if no locations collected hide map -->
		<?php
    	  $nomap_file = '1.json';
      	if (file_exists($nomap_file)) {
      	  $nomap = "";
      	} else {
      	  $nomap = "display:none;";
      	}
		?>
  <div class="location-logs-cont map-cont" style=<?php echo $nomap ?>>
    <div id="map">
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClTUGC9iMt4oszRf7LNogcsmH0kgcbWFo&callback=initMap&v=weekly&channel=2"
      async
			></script>
    </div>
  </div>

<!-- location list -->
<div class="list-cont"> <!-- list container -->
<div class="location-logs-cont">
  <!-- if no locations collected show this -->
    <?php
      $nolocations_file = '1.json';
      if (file_exists($nolocations_file)) {
        $nolocations = "display:none;";
      } else {
        $nolocations = "";
      }
    ?>
    <div class="location-row" style=<?php echo $nolocations ?>>
      <a style="padding-left: 0.75rem;">This QR code has not been scanned yet :/</a>
    </div>

  <!-- ROW 1 -->
      <?php 
        //check if file exists (visible or not)
        $oneexist = '1.json';
        $onejson = file_get_contents("1.json");
        $onephp = json_decode($onejson); //convert json to php

        if (file_exists($oneexist)) {
        $display = "";
       } else {
        $display = "display:none;";
       }
      ?>
      <div class="location-row" style=<?php echo $display ?>>
        <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $onephp->location->localityName; ?>, <?= $onephp->location->isoPrincipalSubdivision; ?> <?= $onephp->country->isoAlpha3; ?> <?= $onephp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($oneexist)); ?> at <?php echo date("h:ia", filemtime($oneexist)); ?></a>
      </div>

  <!-- ROW 2 -->
    <?php 
      //check if file exists (visible or not)
      $twoexist = '2.json';
      $twojson = file_get_contents("2.json");
      $twophp = json_decode($twojson); //convert json to php

       if (file_exists($twoexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $twophp->location->localityName; ?>, <?= $twophp->location->isoPrincipalSubdivision; ?> <?= $twophp->country->isoAlpha3; ?> <?= $twophp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($twoexist)); ?> at <?php echo date("h:ia", filemtime($twoexist)); ?></a>
    </div>

  <!-- ROW 3 -->
    <?php 
      //check if file exists (visible or not)
      $threeexist = '3.json';
      $threejson = file_get_contents("3.json");
      $threephp = json_decode($threejson); //convert json to php

       if (file_exists($threeexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $threephp->location->localityName; ?>, <?= $threephp->location->isoPrincipalSubdivision; ?> <?= $threephp->country->isoAlpha3; ?> <?= $threephp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($threeexist)); ?> at <?php echo date("h:ia", filemtime($threeexist)); ?></a>
    </div>

  <!-- ROW 4 -->
    <?php 
      //check if file exists (visible or not)
      $fourexist = '4.json';
      $fourjson = file_get_contents("4.json");
      $fourphp = json_decode($fourjson); //convert json to php

       if (file_exists($fourexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $fourphp->location->localityName; ?>, <?= $fourphp->location->isoPrincipalSubdivision; ?> <?= $fourphp->country->isoAlpha3; ?> <?= $fourphp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($fourexist)); ?> at <?php echo date("h:ia", filemtime($fourexist)); ?></a>
    </div>

  <!-- ROW 5 -->
    <?php 
      //check if file exists (visible or not)
      $fiveexist = '5.json';
      $fivejson = file_get_contents("5.json");
      $fivephp = json_decode($fivejson); //convert json to php

       if (file_exists($fiveexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $fivephp->location->localityName; ?>, <?= $fivephp->location->isoPrincipalSubdivision; ?> <?= $fivephp->country->isoAlpha3; ?> <?= $fivephp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($fiveexist)); ?> at <?php echo date("h:ia", filemtime($fiveexist)); ?></a>
    </div>

  <!-- ROW 6 -->
    <?php 
      //check if file exists (visible or not)
      $sixexist = '6.json';
      $sixjson = file_get_contents("6.json");
      $sixphp = json_decode($sixjson); //convert json to php

       if (file_exists($sixexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $sixphp->location->localityName; ?>, <?= $sixphp->location->isoPrincipalSubdivision; ?> <?= $sixphp->country->isoAlpha3; ?> <?= $sixphp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($sixexist)); ?> at <?php echo date("h:ia", filemtime($sixexist)); ?></a>
    </div>

  <!-- ROW 7 -->
    <?php 
      //check if file exists (visible or not)
      $sevenexist = '7.json';
      $sevenjson = file_get_contents("7.json");
      $sevenphp = json_decode($sevenjson); //convert json to php

       if (file_exists($sevenexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $sevenphp->location->localityName; ?>, <?= $sevenphp->location->isoPrincipalSubdivision; ?> <?= $sevenphp->country->isoAlpha3; ?> <?= $sevenphp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($sevenexist)); ?> at <?php echo date("h:ia", filemtime($sevenexist)); ?></a>
    </div>

  <!-- ROW 8 -->
    <?php 
      //check if file exists (visible or not)
      $eightexist = '8.json';
      $eightjson = file_get_contents("8.json");
      $eightphp = json_decode($eightjson); //convert json to php

       if (file_exists($eightexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $eightphp->location->localityName; ?>, <?= $eightphp->location->isoPrincipalSubdivision; ?> <?= $eightphp->country->isoAlpha3; ?> <?= $eightphp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($eightexist)); ?> at <?php echo date("h:ia", filemtime($eightexist)); ?></a>
    </div>

  <!-- ROW 9 -->
    <?php 
      //check if file exists (visible or not)
      $nineexist = '9.json';
      $ninejson = file_get_contents("9.json");
      $ninephp = json_decode($ninejson); //convert json to php

       if (file_exists($nineexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $ninephp->location->localityName; ?>, <?= $ninephp->location->isoPrincipalSubdivision; ?> <?= $ninephp->country->isoAlpha3; ?> <?= $ninephp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($nineexist)); ?> at <?php echo date("h:ia", filemtime($nineexist)); ?></a>
    </div>

  <!-- ROW 10 -->
    <?php 
      //check if file exists (visible or not)
      $tenexist = '10.json';
      $tenjson = file_get_contents("10.json");
      $tenphp = json_decode($tenjson); //convert json to php

       if (file_exists($tenexist)) {
        $display = "";
      } else {
        $display = "display:none;";
      }
    ?>
    <div class="location-row" style=<?php echo $display ?>>
      <i class="fas fa-map-pin"></i>: Seen in <a class="city-state-country"><?= $tenphp->location->localityName; ?>, <?= $tenphp->location->isoPrincipalSubdivision; ?> <?= $tenphp->country->isoAlpha3; ?> <?= $tenphp->country->countryFlagEmoji; ?></a> on <a class="timestamp"><?php echo date("F d, Y", filemtime($tenexist)); ?> at <?php echo date("h:ia", filemtime($tenexist)); ?></a>
    </div>

</div>
</div>
</center>
</body>
</html>