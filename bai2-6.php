
<?php
//phuong thuc class oop-ke thua
// lop ke thua giup chung ta tao mot lop moi va
// thua huong cac thuoc tinh mot lop da ton tai trước đó
// giúp kế thừa tài nguyên đã tồn tại và dùng lại
// Chỉ kế thừa được phương thức public và protected
class A{
    //private public $attr_1:Neu khai bao pt private,chi hoat dong trong class A
    public $attr_1;
    // ......
    function method_1(){
       //.....
    echo "ok"; 
    }
}
class B extends A{
    public $attr_2;
    public function method_2(){
        return $this->attr_2;
    }
}
//Khai bao phuong thuc moi
$b= new B;
// Trỏ vào pt 2
$b -> attr_2 ="Class b";
echo $b->method_2();
echo $b->method_1();