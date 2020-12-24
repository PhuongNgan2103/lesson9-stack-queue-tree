<?php
class Patient
{
    public $name;
    public $code;

    /**
     * Patient constructor.
     * @param $name
     * @param $code
     */
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }


}