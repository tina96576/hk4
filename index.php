<?php

session_start();

if(isset($_SESSION["name"])){
    $sname="Welcome! ".$_SESSION["name"];

}else{
    $sname="Hello! "."Guest"; 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>login_system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<!-- css -->
<link rel="stylesheet" href="style.css">

<body>

    <div class="first">
        <h1>會員系統 - 首頁</h1>
        <p> <?= $sname;?></p>

        <div id="buttonitem1">  
            <?php if($sname=="Hello! Guest"):?>
                <a href="login.php" class="btn btn-primary btn-lg" role="button">登入</a>
            <?php else: ?>
                <a href="login.php?logout=1" class="btn btn-warning btn-lg" role="button">登出</a>
            <?php endif; ?>
        </div>
        <div id="buttonitem2">
            
            <a href="secret.php" class="btn btn-primary btn-lg" role="button">會員專用頁</a> 

            
           
        </div>
       


    </div>




</body>


</html>