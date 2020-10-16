<?php

$sName = "localhost";
$dbusername = "root";
$dbpassword = "";
$db_name = "to-do-list";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                    $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo  "connection failed : ".$e->getMessage();
}

?>