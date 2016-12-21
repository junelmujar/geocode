<?php

	require_once __DIR__ . '/vendor' . '/autoload.php';
	require_once __DIR__ . '/vendor' . '/sergeytsalkov/meekrodb/db.class.php';
	require_once __DIR__ . '/vendor' . '/jstayton/google-maps-geocoder/src/GoogleMapsGeocoder.php';

	DB::$user = 'root';
	DB::$password = '';
	DB::$dbName = 'your_db';

	$Geocoder = new GoogleMapsGeocoder();

	$schools = DB::query("SELECT * FROM your_table WHERE Lat IS NULL and Lng IS NULL LIMIT 500");

	foreach ($schools as $school) {

		print_r($school['Address']."\n");

		$Geocoder->setAddress($school['Address']);
		$response = $Geocoder->geocode();
		$location = $response['results'][0]['geometry']['location'];
		
		print_r([$location['lat'], $location['lng']]);

		$lat = !empty($location['lat']) ? $location['lat'] : 0;
		$lng = !empty($location['lng']) ? $location['lng'] : 0;

		DB::update('staff_geocode', [
				'Lat' => $lat,
				'Lng' => $lng
		  	], "GeocodeID=%i", $school['GeocodeID']);
		 
		sleep(2);
	}

?>