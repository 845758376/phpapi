<?php
// 获取整个表的数据
    header("Content-type: text/html; charset=utf-8");
    include 'db.php';
    //获取给过来的表和值
    $Tab_Name = iconv('UTF-8', 'GBK', $_POST['TabName']);
    $Cont = iconv('UTF-8', 'GBK', $_POST['Cont']);
	$id = iconv('UTF-8', 'GBK', $_POST['id']);
	$userName = iconv('UTF-8', 'GBK', $_POST['userName']);
	$passWord = iconv('UTF-8', 'GBK', $_POST['passWord']);
    //Tab_Name表名，cont方式.
    //"delete from .$Tab_Name(表) where id=3;
    //"delete from .$Tab_Name(表) where age<20;
    //drop table user； （直接删除表信息，最快）
	//truncate table user；（删除表数据，不删除表的结构，速度排第二）
	//delete from user where 1=1；（根据条件删除数据，不删除表结构，速度慢，一条一条删除）
    $Sqicomm = "INSERT INTO ".$Tab_Name." (userName,passWord) ".
	        "VALUES ".
	        "('$userName','$passWord')";
    $sql=mysqli_query($conn, $Sqicomm);
    if ($sql) {
        echo json_encode('OK');
    } else {
        echo $Sqicomm;
        echo json_encode("false");
    }

?>