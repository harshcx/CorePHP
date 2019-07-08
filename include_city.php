<?php 
	switch ($row['city'] ){
		case 'Kaunas':
			if(count($city_Kaunas)< $reservation['city']['Kaunas'] ){
				include 'include_nationality.php';
				if($nationality_Pushed && !in_array($row, $city_Kaunas))
					$city_pushed =  array_push($city_Kaunas,$row);
			}
		break;
		case 'Klaipeda':
			if(count($city_Klaipeda)< $reservation['city']['Klaipeda'] ){
				include 'include_nationality.php';
				if($nationality_Pushed && !in_array($row, $city_Klaipeda))
					$city_pushed =  array_push($city_Klaipeda, $row);
			}
		break;
		case 'Panevezys':
			if(count($city_Panevezys)< $reservation['city']['Panevezys'] ){
				include 'include_nationality.php';
				if($nationality_Pushed && !in_array($row, $city_Panevezys))
					$city_pushed =  array_push($city_Panevezys,$row);
			}
		break;

		case 'Vilnius':
			if(count($city_Vilnius)< $reservation['city']['Vilnius'] ){
				include 'include_nationality.php';
				if($nationality_Pushed && !in_array($row, $city_Vilnius))
					$city_pushed =  array_push($city_Vilnius,$row);
			}			
		break;
		default :
			echo 'ERROR';
		break;		
	}