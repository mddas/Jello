<?php

class Database{

    public $localhost="localhost";
    public $username = "root";
    public $password = "";
    public $databasename="JELLO";
    public $con;
    public $sql;
    public function __construct()
    {
        $this->connectDB();
    }
    public function connectDB()
    {
       $this->con=new mysqli($this->localhost,$this->username,$this->password,$this->databasename);
    }

    public function AllSql($sql){
       return $this->con->query($sql);
    }   
    

}
/*
$db=new Database();
$sql="select * from admin";

$result=$db->AllSql($sql);
while($data=$result->fetch_assoc()){
    echo $data['admin_name'];
}
*/

?>