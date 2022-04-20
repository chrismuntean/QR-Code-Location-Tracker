# Track QR-Codes by IP address geolocation

Run your IP address in Repl here: https://swan-v04.chrismuntean.repl.co/getlocation.php

See the list of collected locations here: https://swan-v04.chrismuntean.repl.co/index.php

This web server uses IP address locating to collect the data of the scanned QR-code locations. Since this site uses this locationing method this site does not have to ask the client for their location; however, this means that this site only get locations accurate to the city. This also means that the client has to connect to wifi in order for it to collect the most accurate data as possible. This server also has file managing that will reset, and delete the data so there will be no more that 10 connection data files at one time.

BigData API: https://www.bigdatacloud.com/
Google Maps JS API: https://developers.google.com/maps/documentation/javascript/overview

#### Example from the BigDQataCloud.com API output:
```
"ip": "96.35.37.111",
"localityName": "St. Louis County",
"isoPrincipalSubdivision": "Missouri",
"isoAlpha3": "USA",
"latitude": 38.56,
"longitude": -90.53,
```
This, as well as some other common server-side file creation date and time data are all the data this site needs to collect to make this site work.
## Google Maps API
This site uses Google's javascript maps API in order to take the coordinates recieved from BigDataCloud's API in order to place those points on the map. *Google does not track your exact location.*

#### Code input to Google's API:
```
//pin 1 vars
var maponelat = <?= $maponephp->location->latitude; + x?>;
var maponelong = <?= $maponephp->location->longitude + x ?>;
```
