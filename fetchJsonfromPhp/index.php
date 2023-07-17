<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Json from PHP file</title>
    <link rel="stylesheet" href="./../lib/pico.css">
    <link rel="stylesheet" href="./fetchJsonfomPhp.css">
    <?php include_once './../lib/highlight-script.html'; ?>
    <script src="./fetchJsonfromPhp.js"></script>

</head>

<body class="container">
    <main>
        <a href="./..">HOME</a>
        <hgroup>
            <h1>Fetch Json data from php</h1>
            <p>
                This example is regarding fetching Json formatted data from a php file by making a post request. All
                codes used are available in this <a
                    href="https://github.com/izzatrazab/SandBox/tree/main/fetchJsonfromPhp" target="_blank">Github
                    repo</a>.
            </p>
        </hgroup>
        <div id="content">
            <section>
                <p>
                    The body inside the post request contains an object with a key, "data" and a value (string number)
                </p>
                <pre><code>var formData = new FormData();
formData.append('data', number);
const data = await fetch("./getJson.php", {
    method: 'POST',
    body: formData
}).then((res) => res.json())
</code></pre>
            </section>
            <section>
                <p>HTML codes for the buttons below with fetchJsonData function to send the post request.</p>
                <pre><code>&lt;button onclick='fetchJsonData("1016")'&gt;
    1016
&lt;/button&gt;
&lt;button onclick='fetchJsonData("1017")'&gt;
    1017
&lt;/button&gt;
</code></pre>
            </section>
        </div>
        <div id="content">
            <section id="panel">
                <p> Click the
                    buttons below to send post request.</p>
                <div id="buttons">
                    <button onclick='fetchJsonData("1016")'>1016</button>
                    <button onclick='fetchJsonData("1017")'>1017</button>
                </div>
                <div id="table">
                    <table role="grid">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Received Data</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                </div>
            </section>
            <section id="json">
                <pre><code id="codejson" class='language-json'></code></pre>
            </section>
        </div>
        <p>
            Below is the php codes (getJson.php file) that receive the post request made (after clicking the buttons).
            If the post request succeed, the file will have a post data with the key, "data".
        </p>
        <p>
            A dummy array data is generated in the for loop and its' format is converted to json using json_encode()
            function. The echo statement will print the response which will be received by the requestor.
        </p>
        <pre><code>&lt;?php
header('Access-Control-Allow-Origin: *');// I forgot what this line is for, will research in the future
header("Content-Type: application/json; charset=UTF-8"); // to return json format

if (isset($_POST["data"])) {
    // fetch any data here (from database/file system/ any other api endpoint)

    // for example
    $arr = array();

    //generate array data
    for ($i = 0; $i &lt; 4; $i++) {
        array_push($arr, array(
            "no" => $i,
            "receivedData" => $_POST["data"]
            ));
        };

    echo json_encode($arr);//response with the array in json format
    // end of example
    return;
}
</code></pre>
    </main>
</body>

</html>