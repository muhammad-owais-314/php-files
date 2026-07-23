<?php

    // $arr = [0,4,5,"hello",true,false,76,23,2];

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";


    // for( $i=0; $i < count($arr); $i++ )
    // {
    //     echo "$arr[$i] <br>";
    // }

    // echo "___________________________________________________________________ <br>";

    // foreach($arr as $singleValue)
    // {
    //     echo "$singleValue <br>";
    // }


    $user = [
        "name" => "Usama",
        "city" => "karachi",
        "country" => "Pakistan"
    ];



    $user = [
        [
            "name" => "Usama",
            "city" => "karachi",
            "country" => "Pakistan" 
        ],
        [
            "name" => "Usama",
            "city" => "karachi",
            "country" => "Pakistan" 
        ],
        [
            "name" => "Usama",
            "city" => "karachi",
            "country" => "Pakistan" 
        ]
    ];



    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";



    // echo $user['name'] . "<br>";
    // echo $user[1]['name'] . "<br>";
    echo "_________________________________________________ <br>";

    // foreach($user as $key => $val){
    //     echo "<br> $key = $val <br>";
    // }

    // foreach($user as $val){
    //     echo $val['name'] . "<br>";
    //     echo $val['city'] . "<br>";
    //     echo $val['country'] . "<br>";
    // }








    $numbers = [3,4,5,67,12];

    // array_push($numbers,4555);
    // array_pop($numbers);
    $flipped = array_flip($numbers);
    $reverse = array_reverse($numbers);



    
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";



    echo "<pre>";
    print_r($flipped);
    echo "</pre>";
    
    
    echo "<pre>";
    print_r($reverse);
    echo "</pre>";






























?>