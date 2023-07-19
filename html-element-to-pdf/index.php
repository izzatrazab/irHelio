<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert HTML element to pdf using html2pdf.js</title>
    <link rel="stylesheet" href="./../lib/de.css">
    <link rel="stylesheet" href="./html-element-to-pdf.css">
    <?php include_once './../lib/highlight-script.html'; ?>
    <script src="./html2pdf.bundle.min.js"></script>
    <script src="./html-element-to-pdf.js"></script>

</head>

<body class='container'>

    <a href="./..">HOME</a>
    <article>
        <header>
            <hgroup>
                <h1>Convert HTML element to pdf using html2pdf.js</h1>
                <p>
                    <a href="https://ekoopmans.github.io/html2pdf.js/" target='_blank'>Click here</a> to read html2pdf
                    documentation.
                    Credit to Erik Koopmans for creating this amazing package.
                </p>
            </hgroup>
        </header>
        <section>
            <h2>Scenario</h2>
            <p>
                This tutorial is based on my use case. If my tutorial does not helping you,
                read <a href="https://ekoopmans.github.io/html2pdf.js/" target='_blank'>Erik's official
                    documentation</a> to learn more. The following is my scenario:
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
            <p>
                I created a function called <strong>printElementbyID</strong>. It takes two string as the parameters, element id and name.
            </p>
            <pre><code class="language-javascript"><!--
-->function printElementbyID(id, fileName) {
    var element = document.getElementById(id);
    var opt = {
        enableLinks: true,
        margin: 1,
        filename: fileName + '.pdf',
        image: {
            type: 'jpeg',
            quality: 0.98
        },
        html2canvas: {
            scale: 2,
            scrollX: 0,
            scrollY: 0,
        },
        jsPDF: {
            unit: 'cm',
            format: 'a4',
            orientation: 'portrait'
        }
    };
    html2pdf().set(opt).from(element).save();
    // html2pdf().set(opt).from(element).output('dataurlnewwindow')
}
</code></pre>
            <p>
                Then, I called the function using a button.
            </p>
            <pre><code><!--
-->&lt;button onclick='printElementbyID("topdf", "Resume - Popper")'&gt;
    print the element below
&lt;/button&gt;
</code></pre>
            <h3>Download or open PDF in new tab</h3>
            <p>
                If you use <mark>.save()</mark>, it will download the pdf immediately (some browser also opens it to a new tab).
            </p>
            <pre><code class="language-javascript"><!--
-->html2pdf().set(opt).from(element).save();
</code></pre>
            <p>
                If you use <mark>.output('dataurlnewwindow')</mark>, it will opens the pdf in new tab. Note that the name of the file will be different from the one you set.
            </p>
            <pre><code class="language-javascript"><!--
-->html2pdf().set(opt).from(element).output('dataurlnewwindow');
</code></pre>

            <h3>Consideration</h3>
            <h4>Margin</h4>
            <p>
                Be aware that the margin of the element will also get converted. Sometimes I forgot about this and the style became different than what I imagine after converted to pdf. What I like to do is set the element's margin to zero and set `margin` to 1 in the set function.
            </p>
            <pre><code class="language-javascript"><!--
-->var opt = {
    enableLinks: true,
    margin: 1, //set margin here
    filename: name + '.pdf',
    ...
</code></pre>
            <h4>Aspect ratio</h4>
            <p>In the code above, I set the `format` to 'a4'. But the element size is not the same as A4. So, I set the aspect ratio of the element with the aspect ratio of an A4 size. This will make the element roughly the same as the actual pdf format I want. </p>
            <pre><code><!--
-->#topdf {
    margin: 0;
    aspect-ratio: 210/297;/* set aspect ratio */
    background-color: white !important;
    padding: 1cm;
}
</code></pre>
            <h4>Element Size (aspect ratio is not enough)</h4>
            <p>
                When styling, I suggest you to regularly convert the element to pdf to a new tab to see how it will look like. This is because our viewport will not always be the same. For example, lets look in responsive design mode (firefox).
            </p>
            <figure>
                <img src="./demo-mobile.png" alt="">
                <figcaption>mobile view</figcaption>
            </figure>
            <figure>
                <img src="./demo-laptop.png" alt="">
                <figcaption>desktop view</figcaption>
            </figure>
            <p>It's different right ? So you cannot depend 100% on the webview. You have to regularly view it in pdf format.</p>
        </section>
        <section style="overflow-x: scroll;">
            <h2>Demo</h2>
            <button onclick='printElementbyID("topdf", "a picture of green grasshopper")'>print the element below</button>
            <div id="topdf">
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
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Jumping Distance</th>
                            <th scope="col">Flying Speed</th>
                            <th scope="col">Camouflage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1 meter</td>
                            <td>5km/h</td>
                            <td>Expert</td>
                        </tr>
                    </tbody>
                </table>
                <h5>Lorem</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae velit reiciendis reprehenderit, autem sit illo doloribus delectus officia obcaecati cupiditate quidem tempore impedit itaque ratione rerum aut! Numquam, non.</p>
                <h5>Lorem</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis beatae velit reiciendis reprehenderit, autem sit illo doloribus delectus officia obcaecati cupiditate quidem tempore impedit itaque ratione rerum aut! Numquam, non.</p>
            </div>
        </section>
    </article>
</body>

</html>