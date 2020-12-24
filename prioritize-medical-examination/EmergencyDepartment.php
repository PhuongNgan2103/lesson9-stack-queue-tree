<?php
include_once "patient.php";

class EmergencyDepartment
{
   protected $patients = [];

    public function isEmpty()
    {
        return empty($this->patients);
   }

    public function add($patient)
    {
        if (!$this->isEmpty()){
            foreach ($this->patients as $key=>$value){
                if ($value < $patient->code){
                    continue;
                }
                array_splice($this->patients,$key,0,$patient);
                return;
            }
            $this->patients[] = $patient;
        }
       else{
           $this->patients[] = $patient;
       }
   }

    public function get()
    {
        $patient = $this->patients[0];
        unset($this->patients[0]);
        return $patient;
   }

}
