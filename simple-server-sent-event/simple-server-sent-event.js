let ol
let isOpen = false
let source
window.onload = () => {
    ol = document.getElementById('list')
}

function startEventSource() {
    if (typeof (EventSource) !== "undefined") {
        source = new EventSource("./simple-server-sent-event.php");
        source.onopen = () => {
            isOpen = true
            console.log("SSE connection has been established.");
        }
        source.onmessage = (event) => {
            addtolist(JSON.parse(event.data))
        }
        source.onerror = () => {
            console.log("Error occured, please try again later.");
        }
        return
    }
    console.log('Sorry, your browser does not support server-sent events.');
}

function stopEventSource() {
    if (!isOpen) {
        console.log('SSE connection has not been opened yet');
        return
    }
    source.close()
    isOpen = false
    console.log('SSE conection has been closed');
}

function addtolist(str) {
    let list = document.createElement('li')
    console.log(str);
    list.textContent = str.timezone + ' : ' + str.time
    ol.append(list)
}