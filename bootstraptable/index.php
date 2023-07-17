<?php
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
    ],

];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap table (directly in php file)</title>
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include_once './../lib/highlight-script.html';?>
    <style>
        #codes {
            background-color: black;
        }

        code {
            display: contents !important;
        }
    </style>
</head>

<body class="container">
    <main class="d-flex flex-column">
        <a href="./..">HOME</a>
        <section>
            <h1>Below is the raw data used </h1>
            <pre class="p-3">
<?php print_r($results) ?>
</pre>
        </section>
        <section>
            <h1>The raw data in table format</h1>
            <div class="overflow-scroll">
                <table class="table table-striped table-success">
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
            </div>
        </section>
        <section>
            <h1>The codes</h1>
            <pre id="codes" class="p-3"><code class="language-html"><!--
-->&lt;table class="table table-striped"&gt;
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
    &lt;tbody&gt;</code><code class="language-php">
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
    ?&gt;</code><code class="language-html">
    &lt;/tbody&gt;
&lt;/table&gt;<!--

--></code>
</pre>
        </section>
    </main>
</body>

</html>