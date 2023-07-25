<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../lib/de.css">
    <link rel="stylesheet" href="./../lib/component/navbar.css">
    <?php include_once './../lib/highlight-script.html'; ?>
    <title>Simple Server Side Event</title>
    <script>
        window.onload = () => {
            // startEventSource()
        }
        async function startEventSource() {
            if (typeof(EventSource) !== "undefined") {
                let source = await new EventSource("./simple-server-side-event.php");
                source.onopen = (e) => {
                    console.log("The connection has been established.");
                };
                source.onmessage = function(event) {
                    console.log(event.data)
                };
            } else {
                console.log('Sorry, your browser does not support server-sent events.');
            }
        }
    </script>
</head>

<body>
    <?php include_once '../lib/component/navbar.php' ?>
    <main class='container'>
        <article>
            <hgroup>
                <h1>
                    Simple Server Side Event
                </h1>
            </hgroup>
            <p>
                on-hold
            </p>
        </article>
    </main>
</body>

</html>