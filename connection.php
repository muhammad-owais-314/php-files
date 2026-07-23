<?php

try{
$db = mysqli_connect("localhost","root","","2509G1");
echo "Database connected successfully!";

}catch (\Throwable $th){

    echo $th -> getMessage();
}




?>