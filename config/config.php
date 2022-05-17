<?php
$db_host = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "cnpm";

$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
if($conn){
    mysqli_query($conn, "SET NAMES 'utf8'");
}else{
    echo "Kết nối thất bại!".mysqli_connect_error();
}
?>