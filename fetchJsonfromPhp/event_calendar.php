<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");
if (isset($_POST["noid"])) {
    $age = array(
        "receive" => true,
        "noid" => $_POST["noid"]
    );
    echo json_encode($age);
    return;
}
