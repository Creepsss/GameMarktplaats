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
    <title>Document</title>
</head>
<body>
    <header>
    <?php include '../../includes/navbar/navbar.php' ?>
    </header>
    <div class="settingsDiv">
        <div><h1>Logged in as <?php echo $_SESSION['user_name']; ?></h1></div>
        <form method="post" action="changeUsername.php?user_id=<?php echo $_SESSION['user_id'];?>"><div class="username-div"><label>Username</label><input name="newUsername" placeholder="<?php echo $_SESSION['user_name']; ?>"></input></div><div class="btnDiv2"><button>Change username</button></div></form>
        <form>
            <div class="password-div">
                <div><lable>current password<label><input type="password" name="currentpass" placeholder="current"></input></div>
                <div><lable>new password<label><input type="password" name="newpass1" placeholder="new"></input></div>
                <div><lable>new password<label><input type="password" name="newpass2" placeholder="new"></input></div>
            </div>
            <div class="btnDiv"><button>Change password</button></div>
            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
                <?php } ?>
                <?php if(isset($_GET['change'])){ ?>
                <div class="alert alert-success" role="alert">
                <?=$_GET['change']?>
            </div>
                <?php } ?>
            </form>
    </div>
</body>
</html>
<?php
else: header("location: ../login/login.php");
endif;
?>