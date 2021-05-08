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
       $result=$this->con->query($sql) or die ($this->con->error.__line__);
       return $result;
    }  
    public function INSERT($sql){
       
        $insert= $this->con->query($sql) or die ($this->con->error.__line__);
        if($insert){
         echo "<script>alert('Sucessfully inserted...')</script>";

        }else{
         echo "<script>alert(".$this->con->error.")</script>";
           die("Error :(".$this->con->error.")".$this->con->error);
        }


     }   
     public function UPDATE($sql){
        return $this->con->query($sql) or die ($this->con->error.__line__);
     }   
     
    

}
/*
$db=new Database();
$nam="'manoj,'";
$name=$db->con->real_escape_string($nam);
echo $name." secure ";

$sql="select * from main_category";

$result=$db->con->query($sql);
while($data=$result->fetch_assoc()){
    echo $data['category_name'];
}


*/

?>