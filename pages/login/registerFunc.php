<?php
session_start();
include './db_conn.php';
if(isset($_POST['Firstname']) && isset($_POST['Lastname']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['zipcode']) && isset($_POST['country'])){
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $pass = $_POST['password'];
    $conPass = $_POST['confirmpassword'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];

    if(empty($firstname)){
        header("Location: register.php?error=Firstname is required");
    } else if(empty($lastname)){
        header("Location: register.php?error=Lastname is required");
    } else if(empty($email)){
        header("Location: register.php?error=Email is required");
    } else if(empty($phone)){
        header("Location: register.php?error=Phonenumber is required");
    } else if(empty($pass)){
        header("Location: register.php?error=Password is required");
    } else if(empty($conPass)){
        header("Location: register.php?error=Password is required");
    } else if(empty($zipcode)){
        header("Location: register.php?error=Zipcode is required");
    } else if(empty($country)){
        header("Location: register.php?error=Country is required");
    } else{
        $stmt = $pdo->prepare("SELECT * FROM usertable WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if($user){
            header("Location: register.php?error=Email already exists");
        } else{
            $hash_password = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `usertable` (`first_name`, `last_name`, `email`, `password`, `phonenumber`, `zipcode`, `location`, `id`) VALUES ('$firstname', '$lastname', '$email', '$hash_password', '$phone', '$zipcode', '$country', NULL)";
            header("Location: ./login.php ");
            if ($pdo->query($sql) === TRUE) {
                
              }
        }
    } 
}  