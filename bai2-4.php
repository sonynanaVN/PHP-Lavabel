<?php
class Hinhchunhat{
    //khaibaothuoctinh
    public $height = 10;
    public $width = 12;
    //Phuongthuckhoitao
    public function __construct(){
        $this->width=12;
        $this->height=30;
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
echo $a ->tinhChuVi();
echo $a ->tinhDientich();
?>