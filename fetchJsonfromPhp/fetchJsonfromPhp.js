let clicked = false
async function fetchJsonData(number) {
    console.log(number);

    var formData = new FormData();
    formData.append('data', number);
    const data = await fetch("./getJson.php", {
        method: 'POST',
        body: formData
    }).then((res) => res.json())

    document.getElementById("codejson").textContent = JSON.stringify(data, null, "\t")
    document.getElementById("tbody").replaceChildren()
    hljs.highlightElement(document.getElementById("codejson"))

    data.forEach(datum => {
        prependRow(datum.no, datum.receivedData)
    });

    if (!clicked) {
        document.getElementById("table").style.display = "block"
        document.getElementById("json").style.display = "block"
        clicked = true
    }
}

function prependRow(no, receivedData) {
    let row = document.createElement("tr")
    let cell_1 = document.createElement("td")
    cell_1.append(no)
    let cell_2 = document.createElement("td")
    cell_2.append(receivedData)
    row.append(cell_1, cell_2)
    document.getElementById("tbody").append(row)
}