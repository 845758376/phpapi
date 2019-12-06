<?php
header("Content-type: text/html; charset=utf-8");
//地址，账号，密码，数据库
$conn=mysqli_connect("localhost","root","root","test"); 
// 检查连接 
if (!$conn) 
{ 
    die("连接错误: " . mysqli_connect_error()); 
}

?>