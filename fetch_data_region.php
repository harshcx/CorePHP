<?php
$start = microtime(true);

$conn = new mysqli("localhost", "root", "", "tes_app");

$total_male = array();
$total_female = array();

$fetch_male_count_sql = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M'";

$fetch_nationality_Lithuania_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE nationality='Lithuania'";
$fetch_nationality_Polish_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  nationality='Polish'";
$fetch_nationality_Russian_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  nationality='Russian'";

$fetch_city_Kaunas_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  city='Kaunas'";
$fetch_city_Klaipeda_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  city='Klaipeda'";
$fetch_city_Panevezys_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  city='Panevezys'";
$fetch_city_Vilnius_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE  city='Vilnius'";

$fetch_male_nationality_Lithuania_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Lithuania'";

$fetch_Lithuania_male_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Lithuania' AND city='Kaunas'";
$fetch_Lithuania_male_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Lithuania' AND city='Klaipeda'";
$fetch_Lithuania_male_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Lithuania' AND city='Panevezys'";
$fetch_Lithuania_male_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Lithuania' AND city='Vilnius'";


$fetch_male_nationality_Polish_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Polish'";

$fetch_Polish_male_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Polish' AND city='Kaunas'";
$fetch_Polish_male_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Polish' AND city='Klaipeda'";
$fetch_Polish_male_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Polish' AND city='Panevezys'";
$fetch_Polish_male_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Polish' AND city='Vilnius'";


$fetch_male_nationality_Russian_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Russian'";

$fetch_Russian_male_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Russian' AND city='Kaunas'";
$fetch_Russian_male_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Russian' AND city='Klaipeda'";
$fetch_Russian_male_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Russian' AND city='Panevezys'";
$fetch_Russian_male_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='M' AND nationality='Russian' AND city='Vilnius'";


//Female Count
$fetch_female_count_sql = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F'";

$fetch_female_nationality_Lithuania_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Lithuania'";

$fetch_Lithuania_female_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Lithuania' AND city='Kaunas'";
$fetch_Lithuania_female_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Lithuania' AND city='Klaipeda'";
$fetch_Lithuania_female_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Lithuania' AND city='Panevezys'";
$fetch_Lithuania_female_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Lithuania' AND city='Vilnius'";


$fetch_female_nationality_Polish_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Polish'";

$fetch_Polish_female_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Polish' AND city='Kaunas'";
$fetch_Polish_female_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Polish' AND city='Klaipeda'";
$fetch_Polish_female_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Polish' AND city='Panevezys'";
$fetch_Polish_female_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Polish' AND city='Vilnius'";


$fetch_female_nationality_Russian_count = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Russian'";

$fetch_Russian_female_for_Kaunas = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Russian' AND city='Kaunas'";
$fetch_Russian_female_for_Klaipeda = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Russian' AND city='Klaipeda'";
$fetch_Russian_female_for_Panevezys = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Russian' AND city='Panevezys'";
$fetch_Russian_female_for_Vilnius = "SELECT COUNT(*) AS 'count' FROM `users` WHERE `gender`='F' AND nationality='Russian' AND city='Vilnius'";


//Storing Result in variable---------------------------------------------------------------------------------------------------------
$Lithuania_count = queryResult($conn, $fetch_nationality_Lithuania_count);
$Polish_count = queryResult($conn, $fetch_nationality_Polish_count);
$Russian_count = queryResult($conn, $fetch_nationality_Russian_count);

$kaunas_count = queryResult($conn, $fetch_city_Kaunas_count);
$klaipeda_count =  queryResult($conn, $fetch_city_Klaipeda_count);
$panevezys_count = queryResult($conn, $fetch_city_Panevezys_count);
$vilinus_count = queryResult($conn, $fetch_city_Vilnius_count);

$total_male_count = queryResult($conn, $fetch_male_count_sql);

$Lithuania_male_count = queryResult($conn, $fetch_male_nationality_Lithuania_count);
$male_Lithuania_kaunas_count =  queryResult($conn, $fetch_Lithuania_male_for_Kaunas);
$male_Lithuania_klaipeda_count = queryResult($conn, $fetch_Lithuania_male_for_Klaipeda);
$male_Lithuania_Panevezys_count = queryResult($conn, $fetch_Lithuania_male_for_Panevezys);
$male_Lithuania_Vilnius_count = queryResult($conn, $fetch_Lithuania_male_for_Vilnius);

$Polish_male_count = queryResult($conn, $fetch_male_nationality_Polish_count);
$male_Polish_kaunas_count =  queryResult($conn, $fetch_Polish_male_for_Kaunas);
$male_Polish_klaipeda_count = queryResult($conn, $fetch_Polish_male_for_Klaipeda);
$male_Polish_Panevezys_count = queryResult($conn, $fetch_Polish_male_for_Panevezys);
$male_Polish_Vilnius_count = queryResult($conn, $fetch_Polish_male_for_Vilnius);

$Russian_male_count = queryResult($conn, $fetch_male_nationality_Russian_count);
$male_Russian_kaunas_count =  queryResult($conn, $fetch_Russian_male_for_Kaunas);
$male_Russian_klaipeda_count = queryResult($conn, $fetch_Russian_male_for_Klaipeda);
$male_Russian_Panevezys_count = queryResult($conn, $fetch_Russian_male_for_Panevezys);
$male_Russian_Vilnius_count = queryResult($conn, $fetch_Russian_male_for_Vilnius);


$total_female_count = queryResult($conn, $fetch_female_count_sql);

$Lithuania_female_count = queryResult($conn, $fetch_female_nationality_Lithuania_count);
$female_Lithuania_kaunas_count =  queryResult($conn, $fetch_Lithuania_female_for_Kaunas);
$female_Lithuania_klaipeda_count = queryResult($conn, $fetch_Lithuania_female_for_Klaipeda);
$female_Lithuania_Panevezys_count = queryResult($conn, $fetch_Lithuania_female_for_Panevezys);
$female_Lithuania_Vilnius_count = queryResult($conn, $fetch_Lithuania_female_for_Vilnius);

$Polish_female_count = queryResult($conn, $fetch_female_nationality_Polish_count);
$female_Polish_kaunas_count =  queryResult($conn, $fetch_Polish_female_for_Kaunas);
$female_Polish_klaipeda_count = queryResult($conn, $fetch_Polish_female_for_Klaipeda);
$female_Polish_Panevezys_count = queryResult($conn, $fetch_Polish_female_for_Panevezys);
$female_Polish_Vilnius_count = queryResult($conn, $fetch_Polish_female_for_Vilnius);

$Russian_female_count = queryResult($conn, $fetch_female_nationality_Russian_count);
$female_Russian_kaunas_count =  queryResult($conn, $fetch_Russian_female_for_Kaunas);
$female_Russian_klaipeda_count = queryResult($conn, $fetch_Russian_female_for_Klaipeda);
$female_Russian_Panevezys_count = queryResult($conn, $fetch_Russian_female_for_Panevezys);
$female_Russian_Vilnius_count = queryResult($conn, $fetch_Russian_female_for_Vilnius);

//Printing Counts--------------------------------------------------------------
echo 'Total Lithuania Cuunt ' . $Lithuania_count . '<br><br>';
echo 'Total Polish Cuunt ' . $Polish_count . '<br><br>';
echo 'Total Russian Cuunt ' . $Russian_count . '<br><br>';

echo 'Total city  Kaunas Cuunt ' . $kaunas_count . '<br><br>';
echo 'Total city  Klaipeda Cuunt ' . $klaipeda_count . '<br><br>';
echo 'Total city  Panevezys Cuunt ' . $panevezys_count . '<br><br>';
echo 'Total city  Vilnius Cuunt ' . $vilinus_count . '<br><br>';

echo 'Total male count ' . $total_male_count . '<br><br>';

echo 'Total male with nationality Lithuania  ' . $Lithuania_male_count . '<br>';

echo 'Totalm male with nationality Lithuania and in Kaunas ' . $male_Lithuania_kaunas_count . '<br>';
echo 'Totalm male with nationality Lithuania and in Klaipeda ' . $male_Lithuania_klaipeda_count . '<br>';
echo 'Totalm male with nationality Lithuania and in Panevezys ' . $male_Lithuania_Panevezys_count . '<br>';
echo 'Totalm male with nationality Lithuania and in Vilnius ' . $male_Lithuania_Vilnius_count . '<br><br>';

echo 'Total male with nationality Polish  ' . $Polish_male_count . '<br>';
echo 'Totalm male with nationality Polish and in Kaunas ' . $male_Polish_kaunas_count . '<br>';
echo 'Totalm male with nationality Polish and in Klaipeda ' . $male_Polish_klaipeda_count . '<br>';
echo 'Totalm male with nationality Polish and in Panevezys ' . $male_Polish_Panevezys_count . '<br>';
echo 'Totalm male with nationality Polish and in Vilnius ' . $male_Polish_Vilnius_count . '<br><br>';

echo 'Total male with nationality Russian  ' . $Russian_male_count . '<br>';
echo 'Totalm male with nationality Russian and in Kaunas ' . $male_Russian_kaunas_count . '<br>';
echo 'Totalm male with nationality Russian and in Klaipeda ' . $male_Russian_klaipeda_count . '<br>';
echo 'Totalm male with nationality Russian and in Panevezys ' . $male_Russian_Panevezys_count . '<br>';
echo 'Totalm male with nationality Russian and in Vilnius ' . $male_Russian_Vilnius_count . '<br><br>';



echo 'Total female count ' . $total_female_count . '<br><br>';

echo 'Total female with nationality Lithuania  ' . $Lithuania_female_count . '<br>';

echo 'Totalm female with nationality Lithuania and in Kaunas ' . $female_Lithuania_kaunas_count . '<br>';
echo 'Totalm female with nationality Lithuania and in Klaipeda ' . $female_Lithuania_klaipeda_count . '<br>';
echo 'Totalm female with nationality Lithuania and in Panevezys ' . $female_Lithuania_Panevezys_count . '<br>';
echo 'Totalm female with nationality Lithuania and in Vilnius ' . $female_Lithuania_Vilnius_count . '<br><br>';

echo 'Total female with nationality Polish  ' . $Polish_female_count . '<br>';
echo 'Totalm female with nationality Polish and in Kaunas ' . $female_Polish_kaunas_count . '<br>';
echo 'Totalm female with nationality Polish and in Klaipeda ' . $female_Polish_klaipeda_count . '<br>';
echo 'Totalm female with nationality Polish and in Panevezys ' . $female_Polish_Panevezys_count . '<br>';
echo 'Totalm female with nationality Polish and in Vilnius ' . $female_Polish_Vilnius_count . '<br><br>';

echo 'Total female with nationality Russian  ' . $Russian_female_count . '<br>';
echo 'Totalm female with nationality Russian and in Kaunas ' . $female_Russian_kaunas_count . '<br>';
echo 'Totalm female with nationality Russian and in Klaipeda ' . $female_Russian_klaipeda_count . '<br>';
echo 'Totalm female with nationality Russian and in Panevezys ' . $female_Russian_Panevezys_count . '<br>';
echo 'Totalm female with nationality Russian and in Vilnius ' . $female_Russian_Vilnius_count . '<br><br>';


//Logic------------------------------------------------------------------------
// available conditions
$available_sheet_Kausan_city = 30;
$available_sheet_Klaipeda_city = 15;
$available_sheet_Panevezys_city = 15;
$available_sheet_Vilnius_city = 40;

$available_nationality_Lithuania = 80;
$available_nationality_Polish  = 10;
$available_nationality_Russian = 10;

$available_male_sheet = 50;
$available_female_list = 50;

$Lithuania_kausana_allowed_male_sheet = 0;
$Lithuania_klaipeda_allowed_male_sheet = 0;

//nationality count
$GLOBALS['L']  = 0;
$GLOBALS['P'] = 0;
$GLOBALS['R'] = 0;

//city counts
$Kaunas = 0;
$Klaipeda = 0;
$Panevezys = 0;
$Vilnius = 0; 


// gender count 
$GLOBALS['m'] =0;
$GLOBALS['f']=0;

//garbed sheets in city and nationality wise
$m_L_kaunas =0;
$m_L_Klaipeda =0;
$m_L_Panevezys =0;
$m_L_Vilnius =0;

$m_R_kaunas =0;
$m_R_Klaipeda =0;
$m_R_Panevezys =0;
$m_R_Vilnius =0;

$m_P_kaunas =0;
$m_P_Klaipeda =0;
$m_P_Panevezys =0;
$m_P_Vilnius =0;

$f_L_kaunas =0;
$f_L_Klaipeda =0;
$f_L_Panevezys =0;
$f_L_Vilnius =0;

$f_R_kaunas =0;
$f_R_Klaipeda =0;
$f_R_Panevezys =0;
$f_R_Vilnius =0;

$f_P_kaunas =0;
$f_P_Klaipeda =0;
$f_P_Panevezys =0;
$f_P_Vilnius =0;


//For Lithuania in Kaunas 
if(($GLOBALS['m'] + $male_Polish_kaunas_count) <= 50){

    if(($P + $male_Polish_kaunas_count) <= 10){
        if(($Kaunas + $male_Polish_kaunas_count) <= 30){
            //add reservation 
            aaddToMale($male_Polish_kaunas_count);
            $m_P_kaunas = $male_Polish_kaunas_count;
            $Kaunas = $Kaunas +  $male_Polish_kaunas_count;
        }
        else{
            $available_sheet_in_Polish = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_kaunas_count);
            $male_Polish_kaunas_count = $male_Polish_kaunas_count - $remove_extra_sheets;
            //add reservation
            aaddToMale($male_Polish_kaunas_count);
            $m_P_kaunas = $male_Polish_kaunas_count;
            $Kaunas = $Kaunas +  $male_Polish_kaunas_count;
        }
    }
    else{
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Polish_kaunas_count);
        $male_Polish_kaunas_count = $male_Polish_kaunas_count - $remove_extra_sheets;

        if(($Kaunas + $male_Polish_kaunas_count) >= 30){
            $available_sheet_in_Polish = available_sheet(30, $Kausana);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_kaunas_count);
            $male_Polish_kaunas_count = $male_Polish_kaunas_count - $remove_extra_sheets;
        }
        //add reservation
        aaddToMale($male_Polish_kaunas_count);
        $m_P_kaunas = $male_Polish_kaunas_count;
        $Kaunas = $Kaunas +  $male_Polish_kaunas_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Polish_kaunas_count) ;

    $male_Polish_kaunas_count = $male_Polish_kaunas_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Polish_kaunas_count);
    $m_P_kaunas = $male_Polish_kaunas_count;
    $Kaunas = $Kaunas +  $male_Polish_kaunas_count;
}

//For Lithuania in Klaipeda 
if(($GLOBALS['m'] + $male_Polish_klaipeda_count) <= 50){
    if(($P + $male_Polish_klaipeda_count) <= 10){
        if(($Klaipeda + $male_Polish_klaipeda_count) >= 15){
           $available_sheet_in_Polish = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_klaipeda_count);
            $male_Polish_klaipeda_count = $male_Polish_klaipeda_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Polish_klaipeda_count);
            $m_P_Klaipeda = $male_Polish_klaipeda_count;
            $Klaipeda = $Klaipeda +  $male_Polish_klaipeda_count;
    }
    else{
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Polish_klaipeda_count);
        $male_Polish_klaipeda_count = $male_Polish_klaipeda_count - $remove_extra_sheets;

        if(($Klaipeda + $male_Polish_klaipeda_count) >= 15){
            $available_sheet_in_Polish = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_klaipeda_count);
            $male_Polish_klaipeda_count = $male_Polish_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddToMale($male_Polish_klaipeda_count);
        $m_P_Klaipeda = $male_Polish_klaipeda_count;
        $Klaipeda = $Klaipeda +  $male_Polish_klaipeda_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Polish_klaipeda_count) ;

    $male_Polish_klaipeda_count = $male_Polish_klaipeda_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Polish_klaipeda_count);
    $m_P_klaipeda = $male_Polish_klaipeda_count;
    $klaipeda = $klaipeda +  $male_Polish_klaipeda_count;
}

//For Lithuania in Panevezys
if(($GLOBALS['m'] + $male_Polish_Panevezys_count) <= 50){
    if(($P + $male_Polish_Panevezys_count) <= 10){
        if(($Panevezys + $male_Polish_Panevezys_count) >= 15){
           $available_sheet_in_Polish = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_Panevezys_count);
            $male_Polish_Panevezys_count = $male_Polish_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddToMale($male_Polish_Panevezys_count);
        $m_P_Panevezys = $male_Polish_Panevezys_count;
        $Panevezys = $Panevezys +  $male_Polish_Panevezys_count;
    }
    else{
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Polish_Panevezys_count);
        $male_Polish_Panevezys_count = $male_Polish_Panevezys_count - $remove_extra_sheets;

        if(($Panevezys + $male_Polish_Panevezys_count) >= 15){
            $available_sheet_in_Polish = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_Panevezys_count);
            $male_Polish_Panevezys_count = $male_Polish_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddToMale($male_Polish_Panevezys_count);
        $m_P_Panevezys = $male_Polish_Panevezys_count;
        $Panevezys = $Panevezys +  $male_Polish_Panevezys_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Polish_Panevezys_count) ;
    $male_Polish_Panevezys_count = $male_Polish_Panevezys_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Polish_Panevezys_count);
    $m_P_Panevezys = $male_Polish_Panevezys_count;
    $Panevezys = $Panevezys +  $male_Polish_Panevezys_count;
}

//For Lithuania in Vilnius
if(($GLOBALS['m'] + $male_Polish_Vilnius_count) <= 50){

    if(($P + $male_Polish_Vilnius_count) <= 10){
        if(($Vilnius + $male_Polish_Vilnius_count) >= 40){
             $available_sheet_in_Polish = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_Vilnius_count);
            $male_Polish_Vilnius_count = $male_Polish_Vilnius_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Polish_Vilnius_count);
            $m_P_Vilnius = $male_Polish_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Polish_Vilnius_count;
    }
    else{
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Polish_Vilnius_count);
        $male_Polish_Vilnius_count = $male_Polish_Vilnius_count - $remove_extra_sheets;
        if(($Vilnius + $male_Polish_Vilnius_count) >= 40){
            //add reservation
            aaddToMale($male_Polish_Vilnius_count);
            $m_P_Vilnius = $male_Polish_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Polish_Vilnius_count;
        }
        else{
            $available_sheet_in_Polish = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish,$male_Polish_Vilnius_count);
            $male_Polish_Vilnius_count = $male_Polish_Vilnius_count - $remove_extra_sheets;
            //add reservation
            aaddToMale($male_Polish_Vilnius_count);
            $m_P_Vilnius = $male_Polish_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Polish_Vilnius_count;
        }
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Polish_Vilnius_count) ;
    $male_Polish_Vilnius_count = $male_Polish_Vilnius_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Polish_Vilnius_count);
    $m_P_Vilnius = $male_Polish_Vilnius_count;
    $Vilnius = $Vilnius +  $male_Polish_Vilnius_count;
}

echo '<br>after Polish Count ';
echo '<br> '. $m_P_kaunas .' <br>'
    . '<br> '. $m_P_Klaipeda .' <br>'
    . '<br> '. $m_P_Panevezys .' <br>'
    . '<br> '. $m_P_Vilnius .' <br>';

//For Lithuania in Kaunas 
if(($GLOBALS['m'] + $male_Russian_kaunas_count) <= 50){

    if(($L + $male_Russian_kaunas_count) <= 10){
        if(($Kaunas + $male_Russian_kaunas_count) >= 30){

            $available_sheet_in_Russian = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_kaunas_count);
            $male_Russian_kaunas_count = $male_Russian_kaunas_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_kaunas_count);
            $m_R_kaunas = $male_Russian_kaunas_count;
            $Kaunas = $Kaunas +  $male_Russian_kaunas_count;
    }
    else{

        $available_sheet_in_Russian = available_sheet(10, $R);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Russian_kaunas_count);
        $male_Russian_kaunas_count = $male_Russian_kaunas_count - $remove_extra_sheets;
        
        if(($Kaunas + $male_Russian_kaunas_count) >= 30){
             $available_sheet_in_Russian = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_kaunas_count);
            $male_Russian_kaunas_count = $male_Russian_kaunas_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_kaunas_count);
            $m_R_kaunas = $male_Russian_kaunas_count;
            $Kaunas = $Kaunas +  $male_Russian_kaunas_count;
        }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Russian_kaunas_count) ;

    $male_Russian_kaunas_count = $male_Russian_kaunas_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Russian_kaunas_count);
    $m_R_kaunas = $male_Russian_kaunas_count;
    $Kaunas = $Kaunas +  $male_Russian_kaunas_count;
}

//For Lithuania in Klaipeda 
if(($GLOBALS['m'] + $male_Russian_klaipeda_count) <= 50){
    if(($R + $male_Russian_klaipeda_count) <= 10){
        if(($Klaipeda + $male_Russian_klaipeda_count) >= 15){
           $available_sheet_in_Russian = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_klaipeda_count);
            $male_Russian_klaipeda_count = $male_Russian_klaipeda_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_klaipeda_count);
            $m_R_Klaipeda = $male_Russian_klaipeda_count;
            $Klaipeda = $Klaipeda +  $male_Russian_klaipeda_count;
    }
    else{
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Russian_klaipeda_count);
        $male_Russian_klaipeda_count = $male_Russian_klaipeda_count - $remove_extra_sheets;
        if(($Klaipeda + $male_Russian_klaipeda_count) >= 15){
            $available_sheet_in_Russian = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_klaipeda_count);
            $male_Russian_klaipeda_count = $male_Russian_klaipeda_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_klaipeda_count);
            $m_R_Klaipeda = $male_Russian_klaipeda_count;
            $Klaipeda = $Klaipeda +  $male_Russian_klaipeda_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Russian_klaipeda_count) ;

    $male_Russian_klaipeda_count = $male_Russian_klaipeda_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Russian_klaipeda_count);
    $m_R_klaipeda = $male_Russian_klaipeda_count;
    $klaipeda = $klaipeda +  $male_Russian_klaipeda_count;
}

//For Lithuania in Panevezys
if(($GLOBALS['m'] + $male_Russian_Panevezys_count) <= 50){
    if(($R + $male_Russian_Panevezys_count) <= 10){
        if(($Panevezys + $male_Russian_Panevezys_count) >= 15){
            $available_sheet_in_Russian = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_Panevezys_count);
            $male_Russian_Panevezys_count = $male_Russian_Panevezys_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_Panevezys_count);
            $m_R_Panevezys = $male_Russian_Panevezys_count;
            $Panevezys = $Panevezys +  $male_Russian_Panevezys_count;
    }
    else{
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Russian_Panevezys_count);
        $male_Russian_Panevezys_count = $male_Russian_Panevezys_count - $remove_extra_sheets;

        if(($Panevezys + $male_Russian_Panevezys_count) >= 15){
             $available_sheet_in_Russian = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_Panevezys_count);
            $male_Russian_Panevezys_count = $male_Russian_Panevezys_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_Panevezys_count);
            $m_R_Panevezys = $male_Russian_Panevezys_count;
            $Panevezys = $Panevezys +  $male_Russian_Panevezys_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Russian_Panevezys_count) ;

    $male_Russian_Panevezys_count = $male_Russian_Panevezys_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Russian_Panevezys_count);
    $m_R_Panevezys = $male_Russian_Panevezys_count;
    $Panevezys = $Panevezys +  $male_Russian_Panevezys_count;
}

//For Lithuania in Vilnius
if(($GLOBALS['m'] + $male_Russian_Vilnius_count) <= 50){

    if(($R + $male_Russian_Vilnius_count) <= 10){
        if(($Vilnius + $male_Russian_Vilnius_count) >= 40){
            $available_sheet_in_Russian = available_sheet(40, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_Vilnius_count);
            $male_Russian_Vilnius_count = $male_Russian_Vilnius_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_Vilnius_count);
            $m_R_Vilnius = $male_Russian_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Russian_Vilnius_count;
    }
    else{
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Russian_Vilnius_count);
        $male_Russian_Vilnius_count = $male_Russian_Vilnius_count - $remove_extra_sheets;

        if(($Vilnius + $male_Russian_Vilnius_count) >= 40){
            $available_sheet_in_Russian = available_sheet(40, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian,$male_Russian_Vilnius_count);
            $male_Russian_Vilnius_count = $male_Russian_Vilnius_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Russian_Vilnius_count);
            $m_R_Vilnius = $male_Russian_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Russian_Vilnius_count;}   
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Russian_Vilnius_count) ;

    $male_Russian_Vilnius_count = $male_Russian_Vilnius_count - $remove_extra_sheets;
    //add reservation
    aaddToMale($male_Russian_Vilnius_count);
    $m_R_Vilnius = $male_Russian_Vilnius_count;
    $Vilnius = $Vilnius +  $male_Russian_Vilnius_count;
}

echo '<br>after Russian Count ';
echo '<br> '. $m_R_kaunas .' <br>'
    . '<br> '. $m_R_Klaipeda .' <br>'
    . '<br> '. $m_R_Panevezys .' <br>'
    . '<br> '. $m_R_Vilnius .' <br>';


//For Lithuania in Kaunas 
if(($GLOBALS['m'] + $male_Lithuania_kaunas_count) <= 50){
    if(($L + $male_Lithuania_kaunas_count) <= 80 ){
        if(($Kaunas + $male_Lithuania_kaunas_count) >= 30){
            $available_sheet_in_kaunas = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_kaunas,$male_Lithuania_kaunas_count);
            $male_Lithuania_kaunas_count = $male_Lithuania_kaunas_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Lithuania_kaunas_count);
            $m_L_kaunas = $male_Lithuania_kaunas_count;
            $Kaunas = $Kaunas +  $male_Lithuania_kaunas_count;
    }
    else{
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Lithuania_kaunas_count);
        $male_Lithuania_kaunas_count = $male_Lithuania_kaunas_count - $remove_extra_sheets;

        //For Lithuania in Kaunas 
        if(($Kaunas + $male_Lithuania_kaunas_count) >= 30){
            $available_sheet_in_kaunas = available_sheet(30, $Kausana);
            $remove_extra_sheets = remove_sheet($available_sheet_in_kaunas,$male_Lithuania_kaunas_count);
            $male_Lithuania_kaunas_count = $male_Lithuania_kaunas_count - $remove_extra_sheets;
        }
        
            //add reservation
            aaddToMale($male_Lithuania_kaunas_count);
            $m_L_kaunas = $male_Lithuania_kaunas_count;
            $Kaunas = $Kaunas +  $male_Lithuania_kaunas_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Lithuania_kaunas_count) ;

    $male_Lithuania_kaunas_count = $male_Lithuania_kaunas_count - $remove_extra_sheets;
            //add reservation
    aaddToMale($male_Lithuania_kaunas_count);
    $m_L_kaunas = $male_Lithuania_kaunas_count;
    $Kaunas = $Kaunas +  $male_Lithuania_kaunas_count;
}

//For Lithuania in Klaipeda 
if(($GLOBALS['m'] + $male_Lithuania_klaipeda_count) <= 50){
    if(($L + $male_Lithuania_klaipeda_count) <= 80 ){
        if(($Klaipeda + $male_Lithuania_klaipeda_count) >= 15){
            $available_sheet_in_Klaipeda = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Klaipeda,$male_Lithuania_klaipeda_count);
            $male_Lithuania_Klaipeda_count = $male_Lithuania_klaipeda_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Lithuania_klaipeda_count);
            $m_L_Klaipeda = $male_Lithuania_klaipeda_count;
            $Klaipeda = $Klaipeda +  $male_Lithuania_klaipeda_count;
    }
    else{
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Lithuania_klaipeda_count);
        $male_Lithuania_klaipeda_count = $male_Lithuania_klaipeda_count - $remove_extra_sheets;

        //For Lithuania in Klaipeda 
        if(($Klaipeda + $male_Lithuania_klaipeda_count) >= 15){
            $available_sheet_in_Klaipeda = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Klaipeda,$male_Lithuania_klaipeda_count);
            $male_Lithuania_klaipeda_count = $male_Lithuania_klaipeda_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Lithuania_klaipeda_count);
            $m_L_Klaipeda = $male_Lithuania_klaipeda_count;
            $Klaipeda = $Klaipeda +  $male_Lithuania_Klaipeda_count;
    }
} else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Lithuania_klaipeda_count) ;

    $male_Lithuania_klaipeda_count = $male_Lithuania_klaipeda_count - $remove_extra_sheets;
            //add reservation
    aaddToMale($male_Lithuania_klaipeda_count);
    $m_L_Klaipeda = $male_Lithuania_klaipeda_count;
    $Klaipeda = $Klaipeda +  $male_Lithuania_klaipeda_count;
}

//For Lithuania in Panevezys
if(($GLOBALS['m'] + $male_Lithuania_Panevezys_count) <= 50){
    if(($L + $male_Lithuania_Panevezys_count) <= 80 ){
        if(($Panevezys + $male_Lithuania_Panevezys_count) >= 15){
             $available_sheet_in_Panevezys = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Panevezys,$male_Lithuania_Panevezys_count);
            $male_Lithuania_Panevezys_count = $male_Lithuania_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddToMale($male_Lithuania_Panevezys_count);
        $m_L_Panevezys = $male_Lithuania_Panevezys_count;
        $Panevezys = $Panevezys +  $male_Lithuania_Panevezys_count;
    }
    else{
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Lithuania_Panevezys_count);
        $male_Lithuania_Panevezys_count = $male_Lithuania_Panevezys_count - $remove_extra_sheets;

        //For Lithuania in Panevezys
        if(($Panevezys + $male_Lithuania_Panevezys_count) >= 15){
            $available_sheet_in_Panevezys = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Panevezys,$male_Lithuania_Panevezys_count);
            $male_Lithuania_Panevezys_count = $male_Lithuania_Panevezys_count - $remove_extra_sheets;
        }

        //add reservation
        aaddToMale($male_Lithuania_Panevezys_count);
        $m_L_Panevezys = $male_Lithuania_Panevezys_count;
        $Panevezys = $Panevezys +  $male_Lithuania_Panevezys_count;
    }
}else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Lithuania_Panevezys_count) ;

    $male_Lithuania_Panevezys_count = $male_Lithuania_Panevezys_count - $remove_extra_sheets;
            //add reservation
    aaddToMale($male_Lithuania_Panevezys_count);
    $m_L_Panevezys = $male_Lithuania_Panevezys_count;
    $Panevezys = $Panevezys +  $male_Lithuania_Panevezys_count;
}

//For Lithuania in Vilnius
if(($GLOBALS['m'] + $male_Lithuania_Vilnius_count) <= 50){
    if(($L + $male_Lithuania_Vilnius_count) <= 80 ){
        if(($Vilnius + $male_Lithuania_Vilnius_count) >= 40){
            $available_sheet_in_Vilnius = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Vilnius,$male_Lithuania_Vilnius_count);
            $male_Lithuania_Vilnius_count = $male_Lithuania_Vilnius_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Lithuania_Vilnius_count);
            $m_L_Vilnius = $male_Lithuania_Vilnius_count;
             $Vilnius = $Vilnius +  $male_Lithuania_Vilnius_count;
    }
    else{
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania,$male_Lithuania_Vilnius_count);
        $male_Lithuania_Vilnius_count = $male_Lithuania_Vilnius_count - $remove_extra_sheets;

        //For Lithuania in Vilnius
        if(($Vilnius + $male_Lithuania_Vilnius_count) >= 40){
            $available_sheet_in_Vilnius = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Vilnius,$male_Lithuania_Vilnius_count);
            $male_Lithuania_Vilnius_count = $male_Lithuania_Vilnius_count - $remove_extra_sheets;
        }
            //add reservation
            aaddToMale($male_Lithuania_Vilnius_count);
            $m_L_Vilnius = $male_Lithuania_Vilnius_count;
            $Vilnius = $Vilnius +  $male_Lithuania_Vilnius_count;
    }
}
else{
    $available_male_sheet = available_sheet(50,$GLOBALS['m']);
    $remove_extra_sheets = remove_sheet($available_male_sheet,$male_Lithuania_Vilnius_count) ;

    $male_Lithuania_Vilnius_count = $male_Lithuania_Vilnius_count - $remove_extra_sheets;
            //add reservation
    aaddToMale($male_Lithuania_Vilnius_count);
    $m_L_Vilnius = $male_Lithuania_Vilnius_count;
    $Vilnius = $Vilnius +  $male_Lithuania_Vilnius_count;
}

echo '<br>after Lithuania Count ';
echo '<br> '. $m_L_kaunas .' <br>'
    . '<br> '. $m_L_Klaipeda .' <br>'
    . '<br> '. $m_L_Panevezys .' <br>'
    . '<br> '. $m_L_Vilnius .' <br>'
    .'<br> '. $GLOBALS['m'] .' <br>';


echo '------------------ For Female ----------------------------';  

// Female Logic -----------------------------------------------------------

    //For Lithuania in Kaunas 
if (($GLOBALS['f'] + $female_Polish_kaunas_count) <= 50) {

    if (($P + $female_Polish_kaunas_count) <= 10) {
        if (($Kaunas + $female_Polish_kaunas_count) <= 30) {
            //add reservation 
            aaddTofemale($female_Polish_kaunas_count);
            $f_P_kaunas = $female_Polish_kaunas_count;
            $Kaunas = $Kaunas + $female_Polish_kaunas_count;
        } else {
            $available_sheet_in_Polish = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_kaunas_count);
            $female_Polish_kaunas_count = $female_Polish_kaunas_count - $remove_extra_sheets;
            //add reservation
            aaddTofemale($female_Polish_kaunas_count);
            $f_P_kaunas = $female_Polish_kaunas_count;
            $Kaunas = $Kaunas + $female_Polish_kaunas_count;
        }
    } else {
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Polish_kaunas_count);
        $female_Polish_kaunas_count = $female_Polish_kaunas_count - $remove_extra_sheets;

        if (($Kaunas + $female_Polish_kaunas_count) >= 30) {
            $available_sheet_in_Polish = available_sheet(30, $Kausana);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_kaunas_count);
            $female_Polish_kaunas_count = $female_Polish_kaunas_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_kaunas_count);
        $f_P_kaunas = $female_Polish_kaunas_count;
        $Kaunas = $Kaunas + $female_Polish_kaunas_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Polish_kaunas_count);

    $female_Polish_kaunas_count = $female_Polish_kaunas_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Polish_kaunas_count);
    $f_P_kaunas = $female_Polish_kaunas_count;
    $Kaunas = $Kaunas + $female_Polish_kaunas_count;
}

//For Lithuania in Klaipeda 
if (($GLOBALS['f'] + $female_Polish_klaipeda_count) <= 50) {
    if (($P + $female_Polish_klaipeda_count) <= 10) {
        if (($Klaipeda + $female_Polish_klaipeda_count) >= 15) {
            $available_sheet_in_Polish = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_klaipeda_count);
            $female_Polish_klaipeda_count = $female_Polish_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_klaipeda_count);
        $f_P_Klaipeda = $female_Polish_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Polish_klaipeda_count;
    } else {
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Polish_klaipeda_count);
        $female_Polish_klaipeda_count = $female_Polish_klaipeda_count - $remove_extra_sheets;

        if (($Klaipeda + $female_Polish_klaipeda_count) >= 15) {
            $available_sheet_in_Polish = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_klaipeda_count);
            $female_Polish_klaipeda_count = $female_Polish_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_klaipeda_count);
        $f_P_Klaipeda = $female_Polish_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Polish_klaipeda_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Polish_klaipeda_count);

    $female_Polish_klaipeda_count = $female_Polish_klaipeda_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Polish_klaipeda_count);
    $f_P_klaipeda = $female_Polish_klaipeda_count;
    $klaipeda = $klaipeda + $female_Polish_klaipeda_count;
}

//For Lithuania in Panevezys
if (($GLOBALS['f'] + $female_Polish_Panevezys_count) <= 50) {
    if (($P + $female_Polish_Panevezys_count) <= 10) {
        if (($Panevezys + $female_Polish_Panevezys_count) >= 15) {
            $available_sheet_in_Polish = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_Panevezys_count);
            $female_Polish_Panevezys_count = $female_Polish_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_Panevezys_count);
        $f_P_Panevezys = $female_Polish_Panevezys_count;
        $Panevezys = $Panevezys + $female_Polish_Panevezys_count;
    } else {
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Polish_Panevezys_count);
        $female_Polish_Panevezys_count = $female_Polish_Panevezys_count - $remove_extra_sheets;

        if (($Panevezys + $female_Polish_Panevezys_count) >= 15) {
            $available_sheet_in_Polish = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_Panevezys_count);
            $female_Polish_Panevezys_count = $female_Polish_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_Panevezys_count);
        $f_P_Panevezys = $female_Polish_Panevezys_count;
        $Panevezys = $Panevezys + $female_Polish_Panevezys_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Polish_Panevezys_count);
    $female_Polish_Panevezys_count = $female_Polish_Panevezys_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Polish_Panevezys_count);
    $f_P_Panevezys = $female_Polish_Panevezys_count;
    $Panevezys = $Panevezys + $female_Polish_Panevezys_count;
}

//For Lithuania in Vilnius
if (($GLOBALS['f'] + $female_Polish_Vilnius_count) <= 50) {

    if (($P + $female_Polish_Vilnius_count) <= 10) {
        if (($Vilnius + $female_Polish_Vilnius_count) >= 40) {
            $available_sheet_in_Polish = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_Vilnius_count);
            $female_Polish_Vilnius_count = $female_Polish_Vilnius_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Polish_Vilnius_count);
        $f_P_Vilnius = $female_Polish_Vilnius_count;
        $Vilnius = $Vilnius + $female_Polish_Vilnius_count;
    } else {
        $available_sheet_in_Polish = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Polish_Vilnius_count);
        $female_Polish_Vilnius_count = $female_Polish_Vilnius_count - $remove_extra_sheets;
        if (($Vilnius + $female_Polish_Vilnius_count) >= 40) {
            //add reservation
            aaddTofemale($female_Polish_Vilnius_count);
            $f_P_Vilnius = $female_Polish_Vilnius_count;
            $Vilnius = $Vilnius + $female_Polish_Vilnius_count;
        } else {
            $available_sheet_in_Polish = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Polish, $female_Polish_Vilnius_count);
            $female_Polish_Vilnius_count = $female_Polish_Vilnius_count - $remove_extra_sheets;
            //add reservation
            aaddTofemale($female_Polish_Vilnius_count);
            $f_P_Vilnius = $female_Polish_Vilnius_count;
            $Vilnius = $Vilnius + $female_Polish_Vilnius_count;
        }
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Polish_Vilnius_count);
    $female_Polish_Vilnius_count = $female_Polish_Vilnius_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Polish_Vilnius_count);
    $f_P_Vilnius = $female_Polish_Vilnius_count;
    $Vilnius = $Vilnius + $female_Polish_Vilnius_count;
}

echo '<br>after Polish Count ';
echo '<br> ' . $f_P_kaunas . ' <br>'
    . '<br> ' . $f_P_Klaipeda . ' <br>'
    . '<br> ' . $f_P_Panevezys . ' <br>'
    . '<br> ' . $f_P_Vilnius . ' <br>';

//For Lithuania in Kaunas 
if (($GLOBALS['f'] + $female_Russian_kaunas_count) <= 50) {

    if (($L + $female_Russian_kaunas_count) <= 10) {
        if (($Kaunas + $female_Russian_kaunas_count) >= 30) {

            $available_sheet_in_Russian = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_kaunas_count);
            $female_Russian_kaunas_count = $female_Russian_kaunas_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_kaunas_count);
        $f_R_kaunas = $female_Russian_kaunas_count;
        $Kaunas = $Kaunas + $female_Russian_kaunas_count;
    } else {

        $available_sheet_in_Russian = available_sheet(10, $R);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_kaunas_count);
        $female_Russian_kaunas_count = $female_Russian_kaunas_count - $remove_extra_sheets;

        if (($Kaunas + $female_Russian_kaunas_count) >= 30) {
            $available_sheet_in_Russian = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_kaunas_count);
            $female_Russian_kaunas_count = $female_Russian_kaunas_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_kaunas_count);
        $f_R_kaunas = $female_Russian_kaunas_count;
        $Kaunas = $Kaunas + $female_Russian_kaunas_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Russian_kaunas_count);

    $female_Russian_kaunas_count = $female_Russian_kaunas_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Russian_kaunas_count);
    $f_R_kaunas = $female_Russian_kaunas_count;
    $Kaunas = $Kaunas + $female_Russian_kaunas_count;
}

//For Lithuania in Klaipeda 
if (($GLOBALS['f'] + $female_Russian_klaipeda_count) <= 50) {
    if (($R + $female_Russian_klaipeda_count) <= 10) {
        if (($Klaipeda + $female_Russian_klaipeda_count) >= 15) {
            $available_sheet_in_Russian = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_klaipeda_count);
            $female_Russian_klaipeda_count = $female_Russian_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_klaipeda_count);
        $f_R_Klaipeda = $female_Russian_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Russian_klaipeda_count;
    } else {
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Russian_klaipeda_count);
        $female_Russian_klaipeda_count = $female_Russian_klaipeda_count - $remove_extra_sheets;
        if (($Klaipeda + $female_Russian_klaipeda_count) >= 15) {
            $available_sheet_in_Russian = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_klaipeda_count);
            $female_Russian_klaipeda_count = $female_Russian_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_klaipeda_count);
        $f_R_Klaipeda = $female_Russian_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Russian_klaipeda_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Russian_klaipeda_count);

    $female_Russian_klaipeda_count = $female_Russian_klaipeda_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Russian_klaipeda_count);
    $f_R_klaipeda = $female_Russian_klaipeda_count;
    $klaipeda = $klaipeda + $female_Russian_klaipeda_count;
}

//For Lithuania in Panevezys
if (($GLOBALS['f'] + $female_Russian_Panevezys_count) <= 50) {
    if (($R + $female_Russian_Panevezys_count) <= 10) {
        if (($Panevezys + $female_Russian_Panevezys_count) >= 15) {
            $available_sheet_in_Russian = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_Panevezys_count);
            $female_Russian_Panevezys_count = $female_Russian_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_Panevezys_count);
        $f_R_Panevezys = $female_Russian_Panevezys_count;
        $Panevezys = $Panevezys + $female_Russian_Panevezys_count;
    } else {
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Russian_Panevezys_count);
        $female_Russian_Panevezys_count = $female_Russian_Panevezys_count - $remove_extra_sheets;

        if (($Panevezys + $female_Russian_Panevezys_count) >= 15) {
            $available_sheet_in_Russian = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_Panevezys_count);
            $female_Russian_Panevezys_count = $female_Russian_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_Panevezys_count);
        $f_R_Panevezys = $female_Russian_Panevezys_count;
        $Panevezys = $Panevezys + $female_Russian_Panevezys_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Russian_Panevezys_count);

    $female_Russian_Panevezys_count = $female_Russian_Panevezys_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Russian_Panevezys_count);
    $f_R_Panevezys = $female_Russian_Panevezys_count;
    $Panevezys = $Panevezys + $female_Russian_Panevezys_count;
}

//For Lithuania in Vilnius
if (($GLOBALS['f'] + $female_Russian_Vilnius_count) <= 50) {

    if (($R + $female_Russian_Vilnius_count) <= 10) {
        if (($Vilnius + $female_Russian_Vilnius_count) >= 40) {
            $available_sheet_in_Russian = available_sheet(40, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_Vilnius_count);
            $female_Russian_Vilnius_count = $female_Russian_Vilnius_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_Vilnius_count);
        $f_R_Vilnius = $female_Russian_Vilnius_count;
        $Vilnius = $Vilnius + $female_Russian_Vilnius_count;
    } else {
        $available_sheet_in_Russian = available_sheet(10, $P);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Russian_Vilnius_count);
        $female_Russian_Vilnius_count = $female_Russian_Vilnius_count - $remove_extra_sheets;

        if (($Vilnius + $female_Russian_Vilnius_count) >= 40) {
            $available_sheet_in_Russian = available_sheet(40, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Russian, $female_Russian_Vilnius_count);
            $female_Russian_Vilnius_count = $female_Russian_Vilnius_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Russian_Vilnius_count);
        $f_R_Vilnius = $female_Russian_Vilnius_count;
        $Vilnius = $Vilnius + $female_Russian_Vilnius_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Russian_Vilnius_count);

    $female_Russian_Vilnius_count = $female_Russian_Vilnius_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Russian_Vilnius_count);
    $f_R_Vilnius = $female_Russian_Vilnius_count;
    $Vilnius = $Vilnius + $female_Russian_Vilnius_count;
}

echo '<br>after Russian Count ';
echo '<br> ' . $f_R_kaunas . ' <br>'
    . '<br> ' . $f_R_Klaipeda . ' <br>'
    . '<br> ' . $f_R_Panevezys . ' <br>'
    . '<br> ' . $f_R_Vilnius . ' <br>';


//For Lithuania in Kaunas 
if (($GLOBALS['f'] + $female_Lithuania_kaunas_count) <= 50) {
    if (($L + $female_Lithuania_kaunas_count) <= 80) {
        if (($Kaunas + $female_Lithuania_kaunas_count) >= 30) {
            $available_sheet_in_kaunas = available_sheet(30, $Kaunas);
            $remove_extra_sheets = remove_sheet($available_sheet_in_kaunas, $female_Lithuania_kaunas_count);
            $female_Lithuania_kaunas_count = $female_Lithuania_kaunas_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_kaunas_count);
        $f_L_kaunas = $female_Lithuania_kaunas_count;
        $Kaunas = $Kaunas + $female_Lithuania_kaunas_count;
    } else {
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Lithuania_kaunas_count);
        $female_Lithuania_kaunas_count = $female_Lithuania_kaunas_count - $remove_extra_sheets;

        //For Lithuania in Kaunas 
        if (($Kaunas + $female_Lithuania_kaunas_count) >= 30) {
            $available_sheet_in_kaunas = available_sheet(30, $Kausana);
            $remove_extra_sheets = remove_sheet($available_sheet_in_kaunas, $female_Lithuania_kaunas_count);
            $female_Lithuania_kaunas_count = $female_Lithuania_kaunas_count - $remove_extra_sheets;
        }

        //add reservation
        aaddTofemale($female_Lithuania_kaunas_count);
        $f_L_kaunas = $female_Lithuania_kaunas_count;
        $Kaunas = $Kaunas + $female_Lithuania_kaunas_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Lithuania_kaunas_count);

    $female_Lithuania_kaunas_count = $female_Lithuania_kaunas_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Lithuania_kaunas_count);
    $f_L_kaunas = $female_Lithuania_kaunas_count;
    $Kaunas = $Kaunas + $female_Lithuania_kaunas_count;
}

//For Lithuania in Klaipeda 
if (($GLOBALS['f'] + $female_Lithuania_klaipeda_count) <= 50) {
    if (($L + $female_Lithuania_klaipeda_count) <= 80) {
        if (($Klaipeda + $female_Lithuania_klaipeda_count) >= 15) {
            $available_sheet_in_Klaipeda = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Klaipeda, $female_Lithuania_klaipeda_count);
            $female_Lithuania_Klaipeda_count = $female_Lithuania_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_klaipeda_count);
        $f_L_Klaipeda = $female_Lithuania_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Lithuania_klaipeda_count;
    } else {
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Lithuania_klaipeda_count);
        $female_Lithuania_klaipeda_count = $female_Lithuania_klaipeda_count - $remove_extra_sheets;

        //For Lithuania in Klaipeda 
        if (($Klaipeda + $female_Lithuania_klaipeda_count) >= 15) {
            $available_sheet_in_Klaipeda = available_sheet(15, $Klaipeda);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Klaipeda, $female_Lithuania_klaipeda_count);
            $female_Lithuania_klaipeda_count = $female_Lithuania_klaipeda_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_klaipeda_count);
        $f_L_Klaipeda = $female_Lithuania_klaipeda_count;
        $Klaipeda = $Klaipeda + $female_Lithuania_Klaipeda_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Lithuania_klaipeda_count);

    $female_Lithuania_klaipeda_count = $female_Lithuania_klaipeda_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Lithuania_klaipeda_count);
    $f_L_Klaipeda = $female_Lithuania_klaipeda_count;
    $Klaipeda = $Klaipeda + $female_Lithuania_klaipeda_count;
}

//For Lithuania in Panevezys
if (($GLOBALS['f'] + $female_Lithuania_Panevezys_count) <= 50) {
    if (($L + $female_Lithuania_Panevezys_count) <= 80) {
        if (($Panevezys + $female_Lithuania_Panevezys_count) >= 15) {
            $available_sheet_in_Panevezys = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Panevezys, $female_Lithuania_Panevezys_count);
            $female_Lithuania_Panevezys_count = $female_Lithuania_Panevezys_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_Panevezys_count);
        $f_L_Panevezys = $female_Lithuania_Panevezys_count;
        $Panevezys = $Panevezys + $female_Lithuania_Panevezys_count;
    } else {
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Lithuania_Panevezys_count);
        $female_Lithuania_Panevezys_count = $female_Lithuania_Panevezys_count - $remove_extra_sheets;

        //For Lithuania in Panevezys
        if (($Panevezys + $female_Lithuania_Panevezys_count) >= 15) {
            $available_sheet_in_Panevezys = available_sheet(15, $Panevezys);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Panevezys, $female_Lithuania_Panevezys_count);
            $female_Lithuania_Panevezys_count = $female_Lithuania_Panevezys_count - $remove_extra_sheets;
        }

        //add reservation
        aaddTofemale($female_Lithuania_Panevezys_count);
        $f_L_Panevezys = $female_Lithuania_Panevezys_count;
        $Panevezys = $Panevezys + $female_Lithuania_Panevezys_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Lithuania_Panevezys_count);

    $female_Lithuania_Panevezys_count = $female_Lithuania_Panevezys_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Lithuania_Panevezys_count);
    $f_L_Panevezys = $female_Lithuania_Panevezys_count;
    $Panevezys = $Panevezys + $female_Lithuania_Panevezys_count;
}

//For Lithuania in Vilnius
if (($GLOBALS['f'] + $female_Lithuania_Vilnius_count) <= 50) {
    if (($L + $female_Lithuania_Vilnius_count) <= 80) {
        if (($Vilnius + $female_Lithuania_Vilnius_count) >= 40) {
            $available_sheet_in_Vilnius = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Vilnius, $female_Lithuania_Vilnius_count);
            $female_Lithuania_Vilnius_count = $female_Lithuania_Vilnius_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_Vilnius_count);
        $f_L_Vilnius = $female_Lithuania_Vilnius_count;
        $Vilnius = $Vilnius + $female_Lithuania_Vilnius_count;
    } else {
        $available_sheet_in_Lithuania = available_sheet(80, $L);
        $remove_extra_sheets = remove_sheet($available_sheet_in_Lithuania, $female_Lithuania_Vilnius_count);
        $female_Lithuania_Vilnius_count = $female_Lithuania_Vilnius_count - $remove_extra_sheets;

        //For Lithuania in Vilnius
        if (($Vilnius + $female_Lithuania_Vilnius_count) >= 40) {
            $available_sheet_in_Vilnius = available_sheet(15, $Vilnius);
            $remove_extra_sheets = remove_sheet($available_sheet_in_Vilnius, $female_Lithuania_Vilnius_count);
            $female_Lithuania_Vilnius_count = $female_Lithuania_Vilnius_count - $remove_extra_sheets;
        }
        //add reservation
        aaddTofemale($female_Lithuania_Vilnius_count);
        $f_L_Vilnius = $female_Lithuania_Vilnius_count;
        $Vilnius = $Vilnius + $female_Lithuania_Vilnius_count;
    }
} else {
    $available_female_sheet = available_sheet(50, $GLOBALS['f']);
    $remove_extra_sheets = remove_sheet($available_female_sheet, $female_Lithuania_Vilnius_count);

    $female_Lithuania_Vilnius_count = $female_Lithuania_Vilnius_count - $remove_extra_sheets;
    //add reservation
    aaddTofemale($female_Lithuania_Vilnius_count);
    $f_L_Vilnius = $female_Lithuania_Vilnius_count;
    $Vilnius = $Vilnius + $female_Lithuania_Vilnius_count;
}

echo '<br>after Lithuania Count ';
echo '<br> '. $f_L_kaunas .' <br>'
    . '<br> '. $f_L_Klaipeda .' <br>'
    . '<br> '. $f_L_Panevezys .' <br>'
    . '<br> '. $f_L_Vilnius .' <br>'
    .'<br> '. $GLOBALS['f'] .' <br>';


function aaddToMale($add_count){
    $GLOBALS['m'] = $GLOBALS['m'] + $add_count;
    $GLOBALS['L'] = $GLOBALS['L']  + $add_count;   
}

function aaddTofemale($add_count){
    $GLOBALS['f'] = $GLOBALS['f'] + $add_count;
    $GLOBALS['L'] = $GLOBALS['L']  + $add_count;   
}

function available_sheet($total_sheet, $grabbing_sheet){
    return ($total_sheet - $grabbing_sheet);
}

function remove_sheet($available_sheet,$grabbing_sheet){
    return ($grabbing_sheet - $available_sheet); 
}


function queryResult($conn, $sql){
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    return $data['count'];
}

$time_elapsed_secs = microtime(true) - $start;
ECHO $time_elapsed_secs;
