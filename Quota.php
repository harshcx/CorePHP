<?php 

	$conn = new mysqli("localhost", "root", "", "tes_app");

	$total_male = $total_female = $city_Kaunas = $city_Klaipeda = $city_Panevezys = $city_Vilnius = $Lithuania = $Polish = $Russian = array();

	$reservation['gender']['male'] = $reservation['gender']['female'] = 50;
	$reservation['city']['Kaunas'] = 30;
	$reservation['city']['Klaipeda'] = 15;
	$reservation['city']['Panevezys'] = 15;
	$reservation['city']['Vilnius'] = 40;
	$reservation['nationality']['Lithuania'] = 80;
	$reservation['nationality']['Polish'] = 10;
	$reservation['nationality']['Russian'] = 10;

	$sql = "SELECT * FROM `users`";
	if($result = $conn->query($sql)){
		while($row = $result->fetch_assoc()){
			switch ($row['gender'] ){
				case 'M':
					if(count($total_male)< $reservation['gender']['male'] ){
						include 'include_city.php';
						if($nationality_Pushed && $city_pushed && !in_array($row,$total_male))
							array_push($total_male,$row );
					}
				break;
				case 'F':
					if(count($total_female)< $reservation['gender']['female'] ){
						include 'include_city.php';
						if($nationality_Pushed && $city_pushed && !in_array($row,$total_female))
							array_push($total_female,$row );
					}
				break;
				default :
				echo 'ERROR';
				break;
			}
		}
	}