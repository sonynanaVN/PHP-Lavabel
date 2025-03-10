<?php
//project cua toi
class Project1{
    private $name;
    private $password;
    private $email;
    private $phonenumber;
    private $db_name="Sony",$db_password="123456",$db_email="sony@gmail.com",$db_phonenumber="0702";


    public function setInfor($name,$password,$email,$phonenumber){
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
        $this->phonenumber=$phonenumber;
    }
    public function checkLogin(){
        if($this->name === $this->db_name && $this->password === $this->db_password){
            echo "Xin chào người dùng:". $this->name;

        }else{
            echo "Vui lòng kiểm tra đăng nhập";
        }
        if($this->email === $this->db_email && $this->phonenumber === $this->db_phonenumber){
            echo "Xác thực thông tin thành công". $this->email;

        }else{
            echo "Sai xót trong quá trình đăng nhập";
        }

    }

}
$a = new Project1;
$a -> setInfor("Sony","123456","sony@gmail.com","0702");
$a -> checkLogin();