<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../lib/de.css">
    <link rel="stylesheet" href="./../lib/component/navbar.css">
    <?php include_once './../lib/highlight-script.html'; ?>
    <script src="./simple-server-sent-event.js"></script>
    <title>Simple Server Sent Event</title>
</head>

<body>
    <?php include_once '../lib/component/navbar.php' ?>
    <main class='container'>
        <article>
            <header>

                <hgroup>

                    <h1>
                        Simple Server Sent Event(SSE) using PHP & Js
                    </h1>
                    <p>2023-07-27</p>
                </hgroup>
            </header>
            <section>
                <h2>Demo</h2>
                <p>
                    In this demo, we will receive timestemp every 2 seconds. It will be displayed below the buttons
                </p>
                <div style="display:flex; gap:10px;">
                    <button class="contrast" onclick="startEventSource()">Start SSE</button>
                    <button class="secondary" onclick="stopEventSource()">Stop SSE</button>
                </div>
                <ol id="list">
                </ol>
            </section>
            <section>
                <h2>Scenario</h2>
                <p>This tutorial is based on my use case. The following is my scenario:</p>
                <ol>
                    <li>
                        Server is written using PHP
                    </li>
                    <li>
                        Client request the SSE using Javascript
                    </li>
                    <li>
                        Client receive json object. (SSE only send string, so the string data has to be in json format so it can be parse later).
                    </li>
                </ol>
            </section>
            <section>
                <h2>Client Side</h2>
                <p>I need two global variable (why global? because I need to access both in two different functions). One is boolean and another one is for event source.</p>
                <pre><code class="language-javascript"><!-- 
-->let isOpen = false // ⬅ indicate SSE is opened
let source // ⬅ varible for EventSource object
</code></pre>
                <p>First function, <mark>startEventSource()</mark>: </p>
                <pre><code><!-- 
-->function startEventSource() {
           // (1) ⤵
    if (typeof (EventSource) !== "undefined") {
        // (2) api endpoint of the server ⤵
        source = new EventSource("./simple-server-sent-event.php");
        // (3) ⤵
        source.onopen = () => {
            isOpen = true
            console.log("SSE connection has been established.");
        }
        // (4) ⤵
        source.onmessage = (event) => {
            console.log(event.data)
        }
        // (5) ⤵
        source.onerror = () => {
            console.log("Error occured, please try again later.");
        }
        return
    }
    console.log('Sorry, your browser does not support server-sent events.');
}
</code></pre>
                <ol>
                    <li>
                        <p>
                        <pre><code>typeof (EventSource) !== "undefined"</code></pre>
                        Determine if your browser supports SSE. <a href="https://caniuse.com/eventsource" target="_blank">Here you can check browser support for SSE</a>
                        </p>
                    </li>
                    <li>
                        <p>
                        <pre><code>source = new EventSource("./simple-server-side-event.php");</code></pre>
                        Return interface for server-sent event from an api endpoint which will be covered later. I assign it to the `source` varible.
                        </p>
                    </li>
                    <li>
                        <p>
                        <pre><code>source.onopen = () => {}</code></pre>
                        Executed right after the connection is established. Here I set the `isOpen` variable to true.
                        </p>
                    </li>
                    <li>
                        <p>
                        <pre><code>source.onmessage = (event) => {}</code></pre>
                        Executed every time server send an event. Event received will be type string. Here you can do many things such as call another function to make use the received data. What I did in demo above is I changed it to object using JSON.parse() then append in the list.
                        </p>
                    </li>
                    <li>
                        <p>
                        <pre><code>source.onerror = () => {}</code></pre>
                        Executed when error occured.
                        </p>
                    </li>
                </ol>
                <p>Second function, <mark>stopEventSource()</mark>:</p>
                <pre><code class="language-javascript"><!-- 
-->function stopEventSource() {
    if (!isOpen) {
        console.log('SSE connection has not been opened yet');
        return
    }
    source.close()
    isOpen = false
    console.log('SSE conection has been closed');
}
</code></pre>
                <p>
                <ul>
                    <li>
                        <p>
                        <pre><code class="language-javascript">source.close()</code></pre>
                        This will close the SSE connection.
                        </p>
                    </li>
                </ul>
                </p>
            </section>
            <section>
                <h2>Server Side (PHP)</h2>
                <p></p>

                <pre><code class="language-php"><!--
-->&lt;?php
set_time_limit(0);  // if you considering a long period of data stream, you might want to use this
header('Content-Type: text/event-stream'); ✅
header('Cache-Control: no-cache');
date_default_timezone_set('Asia/Kuala_Lumpur');

while (true) {
            ⬇
    echo 'data: {"timezone":"Asia/Kuala_Lumpur",' . "\n";
    echo 'data: "time": "' . date('Y/m/d h:i:s A') . '"}'."\n\n";
            ⬆
    ob_flush(); ✅
    flush(); ✅

    sleep(2);
}
                </code></pre>
                <ol>
                    <li>
                        <p>
                        <pre><code class="language-php">header('Content-Type: text/event-stream');</code></pre>
                        I need to set `Content-Type` header to text/event-stream.
                        </p>
                    </li>
                    <li>
                        <p>
                        <pre><code class="language-php"><!--
-->echo 'data: {"timezone":"Asia/Kuala_Lumpur",' . "\n";
echo 'data: "time": "' . date('Y/m/d h:i:s A') . '"}'."\n\n";</code></pre>
                        <mark>data:</mark> is the field for the messages. It will automatically concatenates all messages. Note that last message must have two `\n` espace. It suppose to look like this:
                        </p>
                        <pre><code class="language-json"><!--
-->{
"timezone":"Asia/Kuala_Lumpur",
"time": "2023/07/28 12:07:25 AM" # ⬅ dummy data
}
</code></pre>
<p>Also note that json format uses double quotes `"..."`. If you use single quotes, JSON.parse() function will return error.</p>
                    </li>
                    <li>
                        <pre><code class="language-php"><!--
-->ob_flush();
flush();
</code></pre>
<p>
    Both of these is required. I am not sure what they did. I will research about this and update this post.
</p>
                    </li>
                </ol>
            </section>
        </article>
    </main>
</body>

</html>