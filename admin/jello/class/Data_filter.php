<?php

class FilterData{

    public function secure_data($data){

        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
}


?>