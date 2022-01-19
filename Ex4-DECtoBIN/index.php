<?php
include_once "Remainder.php";
include_once "madeRemainder.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = "number";
    if($number==null){
        echo "<script> alert('Ban chua nhap so!')</script>";
    }else{
        madeRemainder($number);
        $bin = [];

    }
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
<body>
<form action="" method="post">
    <input type="text" name = "number" placeholder="number">
    <button name = "check">Check</button>
</form>
</body>
</html>
