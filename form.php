<?php

// ya post wala kam ha post sa shiow nahii hota ha localhost ma or isma kahi pr space bhi nahii lagatay ha
// echo @$_post ["username"]; php ka star5t ma erreor aa raha tha start form ma @ ka bad nahii show ho ga error 

// if(isset($_post["btn"])){
//     echo $_post ["username"];
//     echo $_post ["email"];
//     echo $_post ["password"];
//     echo $_post ["age"];
// }

// ya get wala kam ha get sa show ho ga local host ma 


if(isset($_GET["btn"])){
    echo $_GET["username"];
    echo $_GET["email"];
    echo $_GET["password"];
    echo $_GET["age"];
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="GET">


<label for="">username</label>
<input type="text" name="username"><br><br>

<label for="">email</label>
<input type="email" name="email"><br><br>

<label for="">password</label>
<input type="password" name="password"><br><br>

<label for="">age</label>
<input type="age" name="age"><br><br>

<input type="submit" value="Submit" name="btn">


</form>

</body>
</html>