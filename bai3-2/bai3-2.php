<?php
//tao database phpmyadmin va cau hinh ket noi co so du lieu
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lavabelpro ');

$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($db->connect_error){
    die("kết nối cơ sở dữ liệu k thành công".$db->connect_error);

}
echo "Kết nối thành công";