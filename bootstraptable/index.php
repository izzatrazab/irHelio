<?php
$results = [
    [
        'bil' => 1,
        'id_refer' => "DT2854522023",
        "nama" => "MOHD AZROY BIN YUSOF",
        "dr" => "MOHD NASIR BIN YUSOF",
        "title" => "Dr razif kurus badan",
        "start" => "2023-07-04 11:00:55",
        "end" => "2023-07-04 05:00:07",
        "status" => "ACTIVE",
        "slot_owner" => "1015"
    ],
    [
        'bil' => 1,
        'id_refer' => "DT2854522023",
        "nama" => "MOHD AZROY BIN YUSOF",
        "dr" => "MOHD NASIR BIN YUSOF",
        "title" => "Dr razif kurus badan",
        "start" => "2023-07-04 11:00:55",
        "end" => "2023-07-04 05:00:07",
        "status" => "ACTIVE",
        "slot_owner" => "1015"
    ]

];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./../lib/highlight/styles/ir-black.min.css">
    <script src="./../lib/highlight/highlight.min.js"></script>
    <script>
        window.onload = () => {
            hljs.highlightAll()
        }
    </script>
</head>

<body class="container">
    <main>
        <section>
            <h1>Below is the raw data used </h1>

            <pre>
    <?= print_r($results) ?>
</pre>
            </p>
        </section>
        <section>
            <h1>The raw data in table format</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID refer</th>
                        <th scope="col">nama</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">title</th>
                        <th scope="col">start</th>
                        <th scope="col">end</th>
                        <th scope="col">status</th>
                        <th scope="col">slot owner</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $result) {
                        echo '<tr class="table-primary">';
                        foreach ($result as $element) {
                            echo '<td class="table-primary">';
                            echo $element;
                            echo '</td>';
                        }
                        echo '</tr>';
                    }

                    ?>
                </tbody>
            </table>
        </section>
        <section>
            <h1>The codes</h1>
            <pre>
                <code >
&lt;table class="table table-striped"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th scope="col"&gt;ID&lt;/th&gt;
            &lt;th scope="col"&gt;ID refer&lt;/th&gt;
            &lt;th scope="col"&gt;nama&lt;/th&gt;
            &lt;th scope="col"&gt;Doctor&lt;/th&gt;
            &lt;th scope="col"&gt;title&lt;/th&gt;
            &lt;th scope="col"&gt;start&lt;/th&gt;
            &lt;th scope="col"&gt;end&lt;/th&gt;
            &lt;th scope="col"&gt;status&lt;/th&gt;
            &lt;th scope="col"&gt;slot owner&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;?php
        foreach ($results as $result) {
            echo '&lt;tr class="table-primary"&gt;';
            foreach ($result as $element) {
                echo '&lt;td class="table-primary"&gt;';
                echo $element;
                echo '&lt;/td&gt;';
            }
            echo '&lt;/tr&gt;';
        }
    ?&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
    </code>
            </pre>
        </section>
    </main>
</body>

</html>