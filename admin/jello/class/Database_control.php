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

    public function SELECT($sql){
       return $this->con->query($sql);
    }  
    public function INSERT($sql){
        return $this->con->query($sql);
     }   
     public function UPDATE($sql){
        return $this->con->query($sql);
     }   
     public function AllSql($sql){
        return $this->con->query($sql);
     }    
    

}
/*
$db=new Database();
$sql="select * from main_category";

$result=$db->con->query($sql);
while($data=$result->fetch_assoc()){
    echo $data['category_name'];
}
*/



?>