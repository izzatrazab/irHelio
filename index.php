<?php
//to add new post page, add new item in the $posts array on index 1.
$posts = [
    [
        'href' => 'simple-server-sent-event',
        'title' => 'Simple Server Sent Event(SSE) using PHP & Js ',
        'last-update' => '2023-07-28'
    ],
    [
        'href' => 'html-element-to-pdf',
        'title' => 'Convert HTML element to pdf using html2pdf.js',
        'last-update' => '2023-07-22'
    ],
    [
        'href' => 'fetchJsonfromPhp',
        'title' => 'Fetch Json formatted data from PHP file',
        'last-update' => '2023-07-22'
    ],
    [
        'href' => 'bootstraptable',
        'title' => 'Bootstrap table (directly in php file)',
        'last-update' => '2023-07-22'
    ],
    [
        'href' => 'create-table-using-javascript',
        'title' => 'Create table using javascript',
        'last-update' => '2023-07-22'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/de.css">
    <title>irHelio</title>
    <style>
        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding-inline: 20px;
        }

        a {
            display: contents;
            color: var(--muted-color);
        }

        .card {
            padding: 1rem !important;
            width: 220px;
            aspect-ratio: 8/10;
            margin: 0 !important;
        }

        .card:hover{
            transform: scale(1.1);
            border-color:violet;
        }
    </style>
</head>

<body>
    <main class="container" >
        <hgroup>
            <h1>irHelio</h1>
            <p>irHelio is a website that is dedicated as a collection of my solutions of the problems that I have encountered. All of the problems are focusing on HTML, Vanilla JS, and PHP</p>
        </hgroup>
        <p>Here are some problems that I already solved (at least it solves mine). There will be a lot more in the future.</p>
        <section>

            <?php
            foreach ($posts as $key => $value) {
                echo '<a href="' . $value['href'] . '/">';
                echo '<div class="card">';
                echo '<h2>';
                echo $value['title'];
                echo '</h2>';
                echo '<span>' . $value['last-update'] . '</span>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </section>
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