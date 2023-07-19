<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML element to PDF</title>
    <link rel="stylesheet" href="./../lib/de.css">
    <link rel="stylesheet" href="./html-element-to-pdf.css">
    <?php include_once './../lib/highlight-script.html'; ?>
    <script src="./html2pdf.bundle.min.js"></script>
    <script src="./html-element-to-pdf.js"></script>

</head>

<body class='container'>
    <article>
        <header>
            <hgroup>
                <h1>Convert HTML element to pdf</h1>
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
                    This tutorial is based on my use case. If my tutorial does not helping you,
                    read <a href="https://ekoopmans.github.io/html2pdf.js/" target='_blank'>Erik's official
                        documentation</a> to learn more.
                </p>
            </hgroup>
            <p>The following is my scenario:
            <ol>
                <li>
                    HTML elements to PDF file
                </li>
                <li>
                    Styles must be preserved
                </li>
            </ol>
            </p>
        </section>
        <section>
            <h2>Setup</h2>
            <p>
                I used raw javascript file,
                <mark>html2pdf.bundle.min.js</mark>. Download it here:
                <a href="https://github.com/eKoopmans/html2pdf.js/blob/master/dist/html2pdf.bundle.min.js" target='_blank'>https://github.com/eKoopmans/html2pdf.js/blob/master/dist/html2pdf.bundle.min.js</a>.
                Include the script file below in the head element.
            </p>
            <pre><code class='language-html'>&lt;script src="html2pdf.bundle.min.js"&gt;&lt;/script&gt;</code></pre>
        </section>
        <section>
            <h2>Calling the function</h2>
            <pre><code></code></pre>
        </section>
        <section style="overflow-x: scroll;">
            <hgroup>
                <h2>Demo</h2>
                <p>We will try to change the article element below to pdf.</p>
            </hgroup>
            <div id="article1">
                <section>
                    <img class="passport" src="./eka-p-amdela-55JuNAPgYfo-unsplash.jpg" alt="">
                    <ul>
                        <li>Name: Popper</li>
                        <li>Age: 7 months</li>
                        <li>Education: Backyard Science School</li>
                        <li>Favourite: Lettuce</li>
                    </ul>
                </section>
                <h5>Lorem</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae velit reiciendis reprehenderit, autem sit illo doloribus delectus officia obcaecati cupiditate quidem tempore impedit itaque ratione rerum aut! Numquam, non.</p>
                <h5>Lorem</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae velit reiciendis reprehenderit, autem sit illo doloribus delectus officia obcaecati cupiditate quidem tempore impedit itaque ratione rerum aut! Numquam, non.</p>
                <h5>Lorem</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae velit reiciendis reprehenderit, autem sit illo doloribus delectus officia obcaecati cupiditate quidem tempore impedit itaque ratione rerum aut! Numquam, non.</p>
            </div>
            <hr>
            <button onclick='printElementbyID("article1", "a picture of green grasshopper")'>print</button>
        </section>
    </article>
</body>

</html>