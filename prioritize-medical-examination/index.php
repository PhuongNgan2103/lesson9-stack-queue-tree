<?php
include_once "EmergencyDepartment.php";
include_once "patient.php";

$ed = new EmergencyDepartment();

echo "<pre>";
for ($i = 0 ; $i<6 ; $i++){
    $patient = new Patient("benh nhan",$i);
    $ed->add($patient);
    var_dump($patient);
}

$patient = $ed->get();

echo $patient->name;
echo "<pre>";
echo $patient->code;