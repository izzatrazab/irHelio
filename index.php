<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title>irHelio</title>
</head>

<body>
    <main class="container">
        <hgroup>
            <h1>irHelio</h1>
            <p>irHelio is a website that is dedicated as a collection of my solutions of the problems that I have encountered. All of the problems are focusing on HTML, Vanilla JS, and PHP</p>
        </hgroup>
        <p>Here are some problems that I already solved (at least it solves my problem). There will be a lot more in the future.</p>
        <ol>
            <!-- <li>
                <a href="html2pdf/">HTML2PDF demo (php to pdf)</a>
            </li> -->
            <li>
                <a href="fetchJsonfromPhp/">Fetch Json formatted data from PHP file</a>
            </li>
        </ol>
        <footer>
            <?php
            date_default_timezone_set('Asia/Kuala_Lumpur');
            echo 'Asia/Kuala_Lumpur: ';
            echo date('Y/m/d g:ia');
            ?>
        </footer>
    </main>
</body>

</html>