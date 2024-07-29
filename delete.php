<?php
$connection = new mysqli("localhost","root","","addmin sys");


include "index.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "delete from `register` where id=$id";
    $result =$connection->Query($delete);
    if($result){
        echo "Deleted succesfull !!!";
        header("location: /addming system/index.php");
        exit;

    }else{
        echo $_connection_error;
    }

}
?>