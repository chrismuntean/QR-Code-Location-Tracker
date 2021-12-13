function initMap() {
	const pinone = {
		lat: maponelat,
		lng: maponelong
	};
	const pintwo = {
		lat: maptwolat,
		lng: maptwolong
	};
	const pinthree = {
		lat: mapthreelat,
		lng: mapthreelong
	};
	const pinfour = {
		lat: mapfourlat,
		lng: mapfourlong
	};
	const pinfive = {
		lat: mapfivelat,
		lng: mapfivelong
	};
	const pinsix = {
		lat: mapsixlat,
		lng: mapsixlong
	};

	const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 3,
		center: pinone,
	});

	new google.maps.Marker({
		position: pinone, // 1
		map,
	});
	new google.maps.Marker({
		position: pintwo, // 2
		map,
	});
	new google.maps.Marker({
		position: pinthree, // 3
		map,
	});
	new google.maps.Marker({
		position: pinfour, // 4
		map,
	});
	new google.maps.Marker({
		position: pinfive, // 5
		map,
	});
	new google.maps.Marker({
		position: pinsix, // 6
		map,
	});
}