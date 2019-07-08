<?php 
	switch ($row['nationality']){
		case 'Lithuania':
			if(count($Lithuania)< $reservation['nationality']['Lithuania'] ){
				if(!in_array($row, $Lithuania))
					$nationality_Pushed =  array_push($Lithuania, $row);
			}
		break;
		case 'Polish':
			if(count($Polish)< $reservation['nationality']['Polish'] ){
				if(!in_array($row, $Polish))
					$nationality_Pushed =  array_push($Polish, $row);
			}
		break;
		case 'Russian':
			if(count($Russian)< $reservation['nationality']['Russian'] ){
				if(!in_array($row, $Russian))
					$nationality_Pushed =  array_push($Russian, $row);
			}
		break;
		default :
			echo 'ERROR';
		break;
	}