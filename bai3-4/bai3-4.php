<?php
require "config.php";
class DB{
    public $conn;
    function __construct(){
        $this->connection();
    }
    function connection()
    {
        $this->conn = new mysqli(DB_HOST,DB_NAME,DB_PASS,DB_USER);
        if($this->conn->connect_error){
            die("Kết nối không thành công") .$this->conn->connect_error;
        }
        echo"Đã kết nối thành công";
    }
}
$db = new DB;
$db ->connection();