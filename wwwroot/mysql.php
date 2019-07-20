<?php

## mysql 测试
$servername = "dc_mysql3307";  # docker容器名称
$username = "admin";
$password = "adminadmin";
$dbname = "db3307";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();

}

$sql = 'select * from user limit 0,3';
$statement = $conn->prepare($sql);
if(!$statement->execute())
{
    echo "execute error";
    exit(1);
}
$items = $statement->fetchAll();


print_r($items);



?>