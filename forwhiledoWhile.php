<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h1 class="text-center">For Loop</h1>

<div class="container">

<?php 
$i=0;

    for(; $i<=10; $i++){
        echo "{$i} <br>";
    }


?>

<h1 class="text-center">While Loop</h1>

<?php 

    $i=1;

    while( $i <= 10 ){
        echo "{$i} <br>";
        $i++;
    }


?>


<h1 class="text-center">DO While Loop</h1>

<?php 

    $i=10;

    do
    {
        echo "{$i} <br>";
        $i++;
    }
    while( $i <= 20 );


?>


</div>