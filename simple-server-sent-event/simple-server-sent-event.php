<?php
set_time_limit(0);
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
date_default_timezone_set('Asia/Kuala_Lumpur');

while (true) {
    echo 'data: {"timezone":"Asia/Kuala_Lumpur",' . "\n";
    echo 'data: "time": "' . date('Y/m/d h:i:s A') . '"}'."\n\n";

    ob_flush();
    flush();

    sleep(2);
}