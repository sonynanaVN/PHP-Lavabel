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
    //insert
    // Insert
function espace_string($str){
    return $this->conn->real_espace_string($str);
}
function insert($table, $data)
{
    // INSERT INTO table_name ('column1', 'column2', 'column3', ...)
    // VALUES ('value1', 'value2', 'value3', ...);

    foreach($data as $k => $v){
        $list_field[] = "'{$k}'";
        $list_value[] = "'{$this->espace_string($v)}'";
    }

    $list_field = implode(',', $list_field);
    $list_value = implode(',', $list_value);

    $sql = "INSERT INTO {$table} ({$list_field})
    VALUES ({$list_value})";

    if($this -> conn -> query($sql) == true){
        return $this->conn -> insert_id;
    }else{
        echo "Lỗi:" .$this->conn->insert_id;
    }

    echo $sql;
}

}