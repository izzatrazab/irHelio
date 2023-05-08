<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

if (isset($_POST["data"])) {
    // fetch any data here (from database/file system/other api endpoint)

    // for example
    $arr = array();

    for ($i = 0; $i < 4; $i++) {
        array_push($arr, array(
            "no" => $i,
            "receivedData" => $_POST["data"]
        ));
    };
    
    echo json_encode($arr);
    // end of example
    return;
}
