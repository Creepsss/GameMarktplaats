<?php 
session_start();
if(isset($_SESSION['user_id'])): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">     
    <link rel="stylesheet" href="../../css/settings.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php include '../../includes/navbar/navbar.php' ?>
</body>
</html>



<?php
else: header("location: ../login/login.php");
endif;
?>