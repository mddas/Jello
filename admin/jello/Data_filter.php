<?php

class filter{

    public $data;

    public function __construct(){
        //$this->secure_data($data);
    }

    public function secure_data($data){

         return htmlspecialchars($data, ENT_QUOTES);
    }




}


?>