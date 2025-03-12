<?php
require "config.php";
class DB{
    public $conn;
    function connection(){
        $this->conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->conn->connect_error){
            die("Kết nối dữ liệu k thành công".$this->conn->connect_error);
        }echo "Đã kết nối thành công";
    }
}
 $db =new DB;
    $db -> connection();