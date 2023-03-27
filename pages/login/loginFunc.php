<?php
session_start();
include './db_conn.php';
if(isset($_POST['Email']) && isset($_POST['Password'])){

    $email = $_POST['Email'];
    $password = $_POST['Password'];

    if(empty($email)){
        header("Location: login.php?error=Email is required");
    }else if (empty($password)){
        header("Location: login.php?error=Password is required");
    }else {
        $stmt = $pdo->prepare("SELECT * FROM usertable WHERE email=? ");
        $stmt->execute([$email]);

        if($stmt->rowCount() === 1){
            $user = $stmt->fetch();

            $user_id = $user['id'];
            $user_email = $user['email'];
            $user_password = $user['password'];
            $user_name = $user['first_name'];

            if($email === $user_email){
                if(password_verify($password, $user_password)){
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_name'] = $user_name;
                    echo "$user_name";
                    // header("Location: ..."); //location of the index 
                }else{
                    header("Location: login.php?error=Incorrect username or password");
                }
            }else{
                header("Location: login.php?error=Incorrect username or password");
            }
        }else {
            header("Location: login.php?error=Incorrect username or password");
        }
    }
}