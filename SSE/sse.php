<?php
set_time_limit(0);
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
session_write_close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT `id`, `name`, `created_at` FROM `name_list` WHERE `created_at` > ?");

// starting point (dari tarikh mana kita nok fetch)
$ts = '2022-07-12 00:00:00';
$stmt->bind_param("s", $ts);
$counter = 0;
while (!connection_aborted()) {
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {

        echo "data: {\n";
        echo "data: 'id':'" . $row['id'] . "',\n";
        echo "data: 'name':'" . $row['name'] . "',\n";
        echo "data: 'created_at':'" . $row['created_at'] . "',\n";
        echo "data: }\n\n";

        //ob flush to flush
        ob_flush();
        //flush to browser
        flush(); 
        $counter++;

        //store last created_at of last person
        if ($result->num_rows == $counter) {
            echo "data: " . $row['created_at'] . "\n\n";
            $ts = $row['created_at'];
            $counter = 0;
        }
    }
    sleep(5);
}
$conn->close();