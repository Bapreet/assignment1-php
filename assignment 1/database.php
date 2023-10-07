<?php

class database{
    private $connection;
    function __construct(){
        $this->connect_db();
    }
    public function connect_db(){
        $this->connection=mysqli_connect('172.31.22.43','Bapreet200480338','_ke9E56-j5','Bapreet200480338');
        if(mysqli_connect_error()){
            die("Database connection failed" . mysqli_connect_error());
        }
    }
    public function create($pizza_size,$crust,$dough,$sauce,$cook_style,$cheese,$Toppings,$fname,$lname,$phone,$email,$address){
        $sql="INSERT INTO pizza_order (pizza_size,crust,dough,sauce,cook_style,cheese,Toppings,fname,lname,phone,email,address) VALUES ('$pizza_size','$crust','$dough','$sauce','$cook_style','$cheese','$Toppings','$fname','$lname','$phone','$email','$address')";
        $res=mysqli_query($this->connection,$sql);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
    public function read($id=null){
        $sql = "SELECT * FROM pizza_order";
        if($id){
            $sql .= " WHERE id=$id";
        }
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
$database= new database();
?>

