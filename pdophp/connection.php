<?php



try {


$connection = new PDO("mysql:host=localhost;dbname=2509G1", "root","");
echo "Database connected sucessfully";




} catch (\Throwable $th) {
    throw $th;
}







?>