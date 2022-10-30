<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
    function print() {
        console.log("clicked");
        var element = document.getElementById('element-to-print');
        var opt = {
            enableLinks: false,
            margin: 0,
            filename: 'myfile.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };

        // New Promise-based usage:
        html2pdf().set(opt).from(element).save();
        // html2pdf().set(opt).from(element).then();
    }
    </script>
    <title>Document</title>
</head>

<body class="d-flex justify-content-center bg-dark p-4" style="margin: 0; max-height: 29.6cm;max-width: 21cm;">
    <div id="element-to-print" class="bg-light" style="margin:0">
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
            <h1>CREDIT TO Erik Koopmans</h1>
            <a href="https://ekoopmans.github.io/html2pdf.js/">https://ekoopmans.github.io/html2pdf.js/</a>
            <img src="./312680651_429482309343553_558566165589641849_n.jpg" style="width: 12cm">
        </div>
        <button onclick="print()"> Print the div</button>
    </div>
</body>

</html>
<style>
</style>