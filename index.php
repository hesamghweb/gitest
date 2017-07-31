<?php
include 'functions.php';
$backg = "#fff";
if(isset($_POST['submit']) && isset($_POST['rgb'])){
    $backg = select_rgb($_POST['rgb']);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $backg?>">
<form action="" method="POST">
    <input type="checkbox" name="rgb[]" value="r" >Red
    <input type="checkbox" name="rgb[]" value="g" >Green
    <input type="checkbox" name="rgb[]" value="b" >Blue

    <input type="submit" name="submit" value="Color me!">
</form>
</body>
</html>