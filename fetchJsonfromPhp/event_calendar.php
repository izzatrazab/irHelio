<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");
if (isset($_POST["noid"])) {
    $arr = array();

    for ($i = 0; $i < 2; $i++) {
        array_push($arr, array(
            "received" => true,
            "noid" => $_POST["noid"]
        ));
    };

    echo json_encode($arr);
    return;
}
