<?php
//tao database phpmyadmin va cau hinh ket noi co so du lieu
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','localhost');
define('DB_NAME','lavabelpro ');

$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($db->connect_errol){
    die("kết nối cơ sở dữ liệu k thành công") .$db->connect_errol;

}
echo "Kết nối thành công";