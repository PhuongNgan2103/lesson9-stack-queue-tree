<?php
include_once "patient.php";

class EmergencyDepartment
{

    public $patients;


    public function __construct()
    {
        $this->patients = new SplDoublyLinkedList();
    }

    public function isEmpty()
    {
        return ($this->patients == null);

    }

    public function add($patient)
    {
        if (!$this->isEmpty()) {
            foreach ($this->patients as $key => $value) {
                if ($value->code < $patient->code) {
                    continue;
                }
                $this->patients->add($key, $patient);
                return;
            }
            $this->patients->push($patient);
        } else {
            $this->patients->push($patient);
        }
    }

    public function display()
    {
        foreach ($this->patients as $key => $patient) {
            echo $key . '-' .$patient->name .'-'.$patient->code."<br>";
        }
    }

    public function examination()
    {
        $patient = $this->patients->shift();
        echo "Đã đưa".'-'.$patient->name.'-'. "đi khám";
        return $patient;
    }

}
