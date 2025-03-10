<?php
//phuong thuc set và get trong oop
class Demo{
    public $attr_1;
    //tạo pt gởi giá trị
    public function setValue($value){
        $this -> attr_1 = $value;
    }
    //tạo pt lấy giá trị
    public function getValue(){
        return $this ->attr_1;
    }
    //....
}
$a=new Demo;
$a ->attr_1 =20;
$a ->getValue(33);
echo $a ->getValue();
?>
<?php
class Hinhchunhat{
    //khaibaothuoctinh
    private $height = 10;
    private $width = 12;
    //phuong thuc setValue
    public function setValue($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    //phuongthuc tinh chu vi
    public function tinhChuVi(){
        return (2*($this->height + $this->width));
    }
    //phuong thuc tinh dien tich
    public function tinhDientich(){
        return($this->height*$this->width); 
    }
}
//new = khoi tao doi tuong thuoc tinh vao lop cho truoc
$a = new Hinhchunhat();
//-> truy xuat vao gia tri
$a ->height = 5;
$a ->width = 4;
$a ->setValue(6,5);
echo $a ->tinhChuVi();
echo $a ->tinhDientich();
?>