<?php

$conn = mysqli_connect("localhost", "root", "", "tes_app");

require_once 'PHPExcel.php';
include("PHPExcel/IOFactory.php");

$html = "<table border='1'>";
$objPHPExcel = PHPExcel_IOFactory::load('users.xls');

foreach ($objPHPExcel->getWorksheetItretor() as $worksheet) {
    $highestRow = $worksheet->getHighestRow();
    for ($row = 2; $row <= $highestRow; $row++) {
        $html .= "<tr>";
        $gender = mysqli_real_escape_string($conn, $worksheet->getCellByColumnRow(1, $row)->getValue());
        $city = mysqli_real_escape_string($conn, $worksheet->getCellByColumnRow(2, $row)->getValue());
        $nationality = mysqli_real_escape_string($conn, $worksheet->getCellByColumnRow(3, $row)->getValue());
        $sql = "INSERT INTO users(`gender`,`city`,`nationality`)
             VALUES ('" . $gender . "','" . $city . "','" . $nationality . "') ";

        mysqli_query($conn, $sql);
        $html .= '<td>' . $gender . '</td>';
        $html .= '<td>' . $city . '</td>';
        $html .= '<td>' . $nationality . '</td>';
        $html .= '</tr>';
    }
}
$html .= '</table>';
echo $html;
echo 'Data inserted';
