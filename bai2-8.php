<?php
//3 loai tầm vực public,private,protected
class Demo{
    public $attr_1;//tam vua pb=dung linh hoạt
    private $attr_2;//tam vua pri=gioi han trong class
    protected $attr_3=50;
    public function show(){
        return $this->attr_1;//hop le
    }
    public function show2(){
        return $this->attr_2;//hop le,trong clas
    }
}
$a = new Demo;
$a ->attr_1=10;
echo $a->attr_1;//hien thi gt-10
//echo $a->attr_2;//loi ngay=>thuoc tinh private
echo $a->show();
class User extends Demo{
    function __construct()
    {
        echo $this->attr_3;
    }
}
$u=new User;
//$u ->attr_3 =20;//lỗi,chi hoat dong voi cac thuoc tinh bac cau voi lớp cha và lớp con bên trong nó