<?php
//bai tap oop
class User{
    private $username;
    private $password;
    private $db_username = "unitop";
    private $db_password = "unitop";
    //hàm thông tin đăng nhập
    public function setInfo($username,$password){
        $this->username=$username;
        $this->password=$password;
    }
    //Hàm kiểm tra đăng nhập
    function checkLogin(){
        if($this->username === this->db_username && this->password === this->db_password){
            echo "Xin chào người dùng:" .$this->username;
        }else{
            echo "Người dùng không tồn tại";
        }
    }
}