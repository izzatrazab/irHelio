<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="./html2pdf.js"></script>
    <title>Document</title>
</head>

<body class="d-flex justify-content-center bg-dark p-4" style="margin: 0;">
    <div id="element-to-print" class="bg-light" style="height: 29.6cm; width: 21cm; margin: 0;">
        <div class="border border-primary" style="margin:0">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $i . "</th>";
                        for ($j = 1; $j <= 3; $j++) {
                            echo "<td>" . $j * $i . "</td>";
                        }
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

            <i style="color:blue;" class="fas fa-cloud ">c</i>
            <i style="color:yellow;" class="fas fa-coffee">d</i>
            <i style="color:blue;" class="fas fa-car">e</i>
            <i style="color:black;" class="fas fa-file"></i>
            <i style="color:blue;" class="fas fa-bars"></i>
            <h1>CREDIT TO Erik Koopmans</h1>
            <a href="https://ekoopmans.github.io/html2pdf.js/">https://ekoopmans.github.io/html2pdf.js/</a>
            <img src="./312680651_429482309343553_558566165589641849_n.jpg" style="width: 12cm">
        </div>
        <button onclick="printbyID('element-to-print','namapdf')"> Print the div</button>
    </div>
</body>

</html>
<style>
</style>