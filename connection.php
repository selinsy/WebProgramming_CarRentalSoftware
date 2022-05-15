<?php
$vt_sunucu="localhost:4000";
$vt_user="root";
$vt_password="";
$vt_name="rencar";

$connection= mysqli_connect($vt_sunucu, $vt_user, 
$vt_password, $vt_name);

$host="localhost:4000";
$user="root";
$password="";
$vt="rencar";

$connection2= mysqli_connect($vt_sunucu, $vt_user, 
$vt_password, $vt_name);
$host="localhost:4000";
$user="root";
$password="";
$vt="rencar";
mysqli_set_charset($connection,"UTF8");



if(!$connection){ 
die("Bağlantı başarısız.".mysqli_connect_error());
}









    


?>