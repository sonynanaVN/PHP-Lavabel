<?php
//Quy tac dinh nghia class-VD dau tien
class class_name{
    //thuoc tinh
    public $attribute_1;
    public $atribute_k;
    //phuong thuc
    public function method_1 (){
        //code xu ly
    }
}

class Hinhchunhat{
    //khaibaothuoctinh
    public $height = 10;
    public $width = 12;
    //phuongthuc tinh chu vi
    public function tinhChuVi(){
        return (2*($this->height + $this->width));
    }
    //phuong thuc tinh dien tich
    public function tinhDientich(){
        return($this->height*$this->width); 
    }
}