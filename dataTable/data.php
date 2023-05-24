<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

    $arr = array();

    for ($i = 0; $i < 10; $i++) {
        array_push($arr, array(
            "col2" => "test",
            "col3" => "test"
        ));
    };
    
    echo json_encode($arr);