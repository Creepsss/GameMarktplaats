<?php
session_start();
include "../login/db_conn.php";
if(isset($_SESSION['user_id'])){
    if(isset($_POST['newUsername'])){
        $username = $_POST['newUsername'];
    
        $id = $_GET['user_id'];
        $sessionID = $_SESSION['user_id'];
    
        if(empty($username)){
            header("Location: settings.php?error=Username is empty&user_id=$id");
        }else{
            $stmt = $pdo->prepare("SELECT * FROM usertable WHERE id=?");
            $stmt->execute([$id]);
    
            if($stmt->rowCount() === 1){
                $user = $stmt->fetch();
    
                $user_name = $user['first_name'];
    
                if($username === $user_name){
                    header("Location: settings.php?error=Username is the same&user_id=$id");
                }else{
                    $sql = "UPDATE usertable SET first_name = '$username' WHERE id=?";
                    $pdo->prepare($sql)->execute([$id]);
                    header("location: settings.php?user_id=$sessionID&change=Username has been changed to $username");
    
                }
            }
        }
    }else{
        header("Location: settings.php?error=Username is empty&user_id=$id");
    }
}
