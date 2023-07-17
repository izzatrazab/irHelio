<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

if (isset($_POST["noid"], $_POST['id'])) {
    $results = [
        [
            'bil' => 1,
            'id_refer' => "AB2851212123",
            "nama" => "Raja Tun Uda Al-Haj bin Raja Muhammad",
            "dr" => "Abdul Aziz Abdul Majid",
            "title" => "Dr Abdul Aziz kurus badan",
            "start" => "2023-07-04 11:00:55",
            "end" => "2023-07-04 05:00:07",
            "status" => "ACTIVE",
            "slot_owner" => "1015"
        ],
        [
            'bil' => 2,
            'id_refer' => "CD2851212123",
            "nama" => "Raja Tun Uda Al-Haj bin Raja Muhammad",
            "dr" => "Abdul Aziz Abdul Majid",
            "title" => "Dr Abdul Aziz habit rokok",
            "start" => "2023-07-04 11:00:55",
            "end" => "2023-07-04 05:00:07",
            "status" => "ACTIVE",
            "slot_owner" => "1016"
        ]
    ];

    echo json_encode($results);
    return;
}
