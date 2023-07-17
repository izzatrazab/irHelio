<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html2pdf demo</title>
    <link rel="stylesheet" href="./../lib/pico.css">

    <?php include_once './../lib/highlight-script.html';?>

    <script src="./html2pdf.bundle.min.js"></script>
    <script>
        function printbyID(id, name) {
            var element = document.getElementById(id);
            var opt = {
                enableLinks: true,
                margin: 1,
                filename: name + '.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                // jgn kacau scrollX, scrollY
                html2canvas: {
                    scale: 2,
                    scrollX: 0,
                    scrollY: 0,
                },
                jsPDF: {
                    unit: 'cm',
                    format: 'a4',
                    orientation: 'portrait'
                    // orientation: 'landscape'
                }
            };
            //nok save
            // html2pdf().set(opt).from(element).save();

            //output saja
            html2pdf().set(opt).from(element).output('dataurlnewwindow')
        }
    </script>
    <style>
        main {
            overflow: visible;
        }
        code {
            width: auto;
        }
    </style>
    
</head>

<body>
    <main class='container'>
        <header>
            <hgroup>
                <h1>How to use html2pdf.fs package</h1>
                <p>
                    <a href="https://ekoopmans.github.io/html2pdf.js/" target='_blank'>Click here</a> to read html2pdf
                    documentation.
                    Credit to Erik Koopmans for creating this amazing package.
                </p>
            </hgroup>
        </header>
        <section>
            <hgroup>
                <h2>Scenario</h2>
                <p>
                    <mark>Note:</mark> This tutorial is based on my experience. If my tutorial does not helping you,
                    read <a href="https://ekoopmans.github.io/html2pdf.js/" target='_blank'>Erik's official
                        documentation</a> to learn more.
                </p>
            </hgroup>
            <p>
                <strong>Scenario:</strong> I want to change html view to pdf file of a report/ invoice and be able to
                download it. The styles must be preserved after the conversion.
            </p>
        </section>
        <section>
            <hgroup>
                <h2>Setup</h2>
                <p>I used raw javascript file,
                    <mark>html2pdf.bundle.min.js</mark>. Download it here:
                    <a href="https://github.com/eKoopmans/html2pdf.js/blob/master/dist/html2pdf.bundle.min.js"
                        target='_blank'>https://github.com/eKoopmans/html2pdf.js/blob/master/dist/html2pdf.bundle.min.js</a>.
                </p>
            </hgroup>
            <p>
                Include the script file in the head element as below:
            </p>
            <pre><code class='language-html'>&lt;script src="html2pdf.bundle.min.js"&gt;&lt;/script&gt;</code></pre>

        </section>
        <section>
            <hgroup>
                <h2>Demo</h2>
                <p>We will try to change the article element below to pdf.</p>
            </hgroup>
            <hr>
            <article id="article1">
                <figure>
                    <img src="./eka-p-amdela-55JuNAPgYfo-unsplash.jpg" alt="">
                    <figcaption>A grasshopper</figcaption>
                </figure>
            </article>
            <hr>
            <button onclick='printbyID("article1", "a picture of green grasshopper")'>print</button>
        </section>
    </main>
</body>

</html>
<style>
    figcaption {
        text-align: center;
    }

    #article1 {
        margin: 0;
        width: 100%;
        aspect-ratio: 210/297;

        display: flex;
        flex-direction: column;
        align-items:center;
    }

    #article1 > figure > img{
        object-fit: cover;
        width: 35mm;
        height: 50mm;
    }
</style>