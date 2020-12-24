<?php
include_once "EmergencyDepartment.php";
include_once "patient.php";

$ed =  new EmergencyDepartment();

$name =["minh","thuong","an","khoi"];

for ($i =1;$i<6;$i++){
    $rand = rand(1,6);
    $nameIndex = rand(0,count($name)-1);
    $patient = new Patient($name[$nameIndex],$rand);
    $ed->add($patient);
}
echo "<pre>";
$ed->display();
$ed->examination();
echo "<br>";
$ed->display();