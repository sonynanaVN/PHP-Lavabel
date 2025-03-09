<?php
//tinh stactic vao phuon thuc class
//static giup chung ta truy xuat cac thuoc tinh,phuong
//thu ma khong can phai khoi tao cac doi tuong
//thay vi $a ->heigt thi co the HinhchuNgat::$height=20
class Hinhchunhat{
    //khaibaothuoctinh
    public static $height = 10;
    public static $width = 12;
    //phuongthuc tinh chu vi
    public static function tinhChuVi(){
        return (2*(self::$height + self::$width));
    }
    //phuong thuc tinh dien tich
    public static function tinhDientich(){
        return (self::$height * self::$width); 
    }
}
//new = khoi tao doi tuong thuoc tinh vao lop cho truoc
$a = new Hinhchunhat();
//-> truy xuat vao gia tri
echo Hinhchunhat::tinhChuVi();
echo Hinhchunhat::tinhDientich();
?>