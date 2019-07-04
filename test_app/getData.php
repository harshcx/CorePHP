<?php

$conn = new mysqli("localhost", "root", "", "tes_app");


$sql_for_Lithuania = "SELECT gender,city,nationality FROM `users` WHERE `nationality`='Lithuania'";
$sql_for_Russian = "SELECT gender,city,nationality FROM `users` WHERE `nationality`='Russian'";
$sql_for_Polish = "SELECT gender,city,nationality FROM `users` WHERE `nationality`='Polish'";


$total_male = array();
$total_female = array();

$nationality_counter_Lithuania = 0;
$nationality_counter_Russian = 0;
$nationality_counter_Polish = 0;

$male_counter_Kaunas = 0;
$male_counter_Klaipeda = 0;
$male_counter_Panevezys = 0;
$male_counter_Vilnius = 0;

$female_counter_Kaunas = 0;
$female_counter_Klaipeda = 0;
$female_counter_Panevezys = 0;
$female_counter_Vilnius = 0;

if ($result = $conn->query($sql_for_Lithuania)) {
    /* fetch associative array */
    while ($data = $result->fetch_assoc()) {
        //Male Data Save For Lithuania nationality
        if (count($total_male) < 40 && $data['gender'] == 'M' && $nationality_counter_Lithuania < 80) {
            $nationality_counter_Lithuania++;

            if ($data['city'] == 'Kaunas' && $male_counter_Kaunas < 15) {
                $male_counter_Kaunas++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $male_counter_Klaipeda < 7) {
                $male_counter_Klaipeda++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $male_counter_Panevezys < 7) {
                $male_counter_Panevezys++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $male_counter_Vilnius < 20) {
                $male_counter_Vilnius++;
                array_push($total_male, $data['gender']);
            }
        }

        //Female Data save Lithuania nationality
        if (count($total_female) < 40 && $data['gender'] == 'F' && $nationality_counter_Lithuania < 80) {
            $nationality_counter_Lithuania++;

            if ($data['city'] == 'Kaunas' && $female_counter_Kaunas < 15) {
                $female_counter_Kaunas++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $female_counter_Klaipeda < 8) {
                $female_counter_Klaipeda++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $female_counter_Panevezys < 7) {
                $female_counter_Panevezys++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $female_counter_Vilnius < 20) {
                $female_counter_Vilnius++;
                array_push($total_female, $data['gender']);
            }
        }

        if ($total_male < 50) {
            array_push($total_male, $data['gender']);
        }

        if ($total_female < 50) {
            array_push($total_female, $data['gender']);
        }
    }
}

if ($result = $conn->query($sql_for_Russian)) {

    while ($data = $result->fetch_assoc()) {
        //Male Data Save For Russia nationality
        if (count($total_male) < 45 && $data['gender'] == 'M' && $nationality_counter_Russian < 10) {
            $nationality_counter_Russian++;

            if ($data['city'] == 'Kaunas' && $male_counter_Kaunas < 15) {
                $male_counter_Kaunas++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $male_counter_Klaipeda < 8) {
                $male_counter_Klaipeda++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $male_counter_Panevezys < 7) {
                $male_counter_Panevezys++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $male_counter_Vilnius < 20) {
                $male_counter_Vilnius++;
                array_push($total_male, $data['gender']);
            }
        }

        //Female Data save Russia nationality
        else if (count($total_female) < 45 && $data['gender'] == 'F' && $nationality_counter_Russian < 10) {
            $nationality_counter_Russian++;

            if ($data['city'] == 'Kaunas' && $female_counter_Kaunas < 15) {
                $female_counter_Kaunas++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $female_counter_Klaipeda < 7) {
                $female_counter_Klaipeda++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $female_counter_Panevezys < 8) {
                $female_counter_Panevezys++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $female_counter_Vilnius < 20) {
                $female_counter_Vilnius++;
                array_push($total_female, $data['gender']);
            }
        } else {
            if ($total_male < 45) {
                array_push($total_male, $data['gender']);
            }

            if ($total_female < 45) {
                array_push($total_female, $data['gender']);
            }
        }
    }
}

if ($result = $conn->query($sql_for_Polish)) {

    while ($data = $result->fetch_assoc()) {
        //Male Data Save For Russia nationality
        if (count($total_male) < 50 && $data['gender'] == 'M' && $nationality_counter_Polish < 10) {
            $nationality_counter_Polish++;

            if ($data['city'] == 'Kaunas' && $male_counter_Kaunas < 15) {
                $male_counter_Kaunas++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $male_counter_Klaipeda < 7) {
                $male_counter_Klaipeda++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $male_counter_Panevezys < 8) {
                $male_counter_Panevezys++;
                array_push($total_male, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $male_counter_Vilnius < 20) {
                $male_counter_Vilnius++;
                array_push($total_male, $data['gender']);
            }
        }

        //Female Data save Russia nationality
        else if (count($total_female) < 50 && $data['gender'] == 'F' && $nationality_counter_Polish < 10) {
            $nationality_counter_Polish++;

            if ($data['city'] == 'Kaunas' && $female_counter_Kaunas < 15) {
                $female_counter_Kaunas++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Kaunas' && $female_counter_Klaipeda < 7) {
                $female_counter_Klaipeda++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Panevezys' && $female_counter_Panevezys < 8) {
                $female_counter_Panevezys++;
                array_push($total_female, $data['gender']);
            }

            if ($data['city'] == 'Vilnius' && $female_counter_Vilnius < 20) {
                $female_counter_Vilnius++;
                array_push($total_female, $data['gender']);
            }
        } else {
            if ($total_male < 50) {
                array_push($total_male, $data['gender']);
            }

            if ($total_female < 50) {
                array_push($total_female, $data['gender']);
            }
        }
    }
}

echo count($total_male);
echo count($total_female);
