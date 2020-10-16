<?php

if(isset($_POST['message'])){
    require '../db_conn.php';

    $message = $_POST['message'];

    if(empty($message)){
        header("Location: ../M_guest.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO guestbook(message) VALUE(?)");
        $res = $stmt->execute([$message]);

        if($res){
            header("Location: ../M_guest.php?mess=success"); 
        }else {
            header("Location: ../M_guest.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../M_guest.php?mess=error");
}


