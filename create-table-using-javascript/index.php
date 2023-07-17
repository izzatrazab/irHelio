<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include_once './../lib/highlight-script.html'; ?>

    <title>Create table using javascript</title>
    <script>
        async function fetchList() {
            var formData = new FormData();
            formData.append('noid', 2);
            formData.append('id', 1023);
            const list = await fetch("./create-table-using-javascript.php", {
                method: 'POST',
                body: formData
            }).then((res) => res.json())
            createTable(list, 'tbody')
        }

        function createTable(list, tbodyID) {
            let tbody = document.getElementById(tbodyID)
            if (list.length === 0) {
                let row = document.createElement("tr")
                row.className = 'table-primary'
                let td = document.createElement("td")
                td.className = 'table-primary'
                td.setAttribute('colspan', '9') //colspan value depends on how many columns you have
                td.append('It seems that you do not have any appointment in this date.')
                row.append(td)
                tbody.append(row)
                return
            }
            list.forEach(items => {
                let row = document.createElement("tr")
                row.className = 'table-primary'
                for (const key in items) {
                    let td = document.createElement("td")
                    td.className = 'table-primary'
                    td.append(items[key])
                    row.append(td)
                }
                tbody.append(row)
            });
        }

        function removeAllChild(id) {
            document.getElementById(id).replaceChildren();
        }
    </script>
</head>

<body class='container'>
    <a href="./..">HOME</a>
    <h1>Create Table Using Javascript</h1>
    <hr>
    <section>
        <h2>Demo</h2>
        <p>
            Click this button to add rows to the table:
            <button class='btn btn-primary' onclick='fetchList()'>Add rows</button>. Click this button to clear the table: <button class='btn btn-danger' onclick='removeAllChild("tbody")'>Clear Table</button>.
        </p>
        <div class="overflow-scroll">
            <table id='table' class='table table-primary table-striped-columns'>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID refer</th>
                        <th scope="col">nama</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">title</th>
                        <th scope="col">start</th>
                        <th scope="col">end</th>
                        <th scope="col">status</th>
                        <th scope="col">slot owner</th>
                    </tr>
                </thead>
                <tbody id='tbody'>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <h2>How ?</h2>
        <p>
            Create the table element including the column header. Specify a unique id for the tbody element. We need to access that element to append elements inside it. In this case I use `tbody` as the id.
        </p>
        <pre>
            <code>
&lt;table id='table' class='table table-primary table-striped'&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th scope="col"&gt;ID&lt;/th&gt;
            &lt;th scope="col"&gt;ID refer&lt;/th&gt;
            &lt;th scope="col"&gt;nama&lt;/th&gt;
            &lt;th scope="col"&gt;Doctor&lt;/th&gt;
            &lt;th scope="col"&gt;title&lt;/th&gt;
            &lt;th scope="col"&gt;start&lt;/th&gt;
            &lt;th scope="col"&gt;end&lt;/th&gt;
            &lt;th scope="col"&gt;status&lt;/th&gt;
            &lt;th scope="col"&gt;slot owner&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody id='tbody'&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
            </code>
        </pre>
    </section>
    <section>
        <h2>The javascript</h2>
        <ul>
            <li>
                <p>
                    <mark>fetchList()</mark>: fetching some data from another file (this is not necessary). You can get the data anywhere you want as long as the format is an <strong>array of object</strong> that has all the element needed for each column of the table.
                </p>
            </li>
            <li>
                <p>
                    <mark>createTable()</mark>: where the table is created. Use the id that specified the tbody element that you use. Pass an array and the id of tbody element. Based on snippet below this function is called in fetchList function at last line.
                </p>
                <p>
                    If you use bootstrap/tailwind or any other css framework that use classes, you can add the class here. Notice the code line
                    <mark>row.className = 'table-primary'</mark>. Class <mark>`table-primary`</mark> (bootstrap) is added to the row
                    element.
                </p>
            </li>
        </ul>
        <pre>
            <code>
async function fetchList() {
    var formData = new FormData();
    formData.append('noid', 2);
    formData.append('id', 1023);
    const list = await fetch("./create-table-using-javascript.php", {
        method: 'POST',
        body: formData
    }).then((res) => res.json())
    createTable(list, 'tbody')
}

function createTable(list, tbodyID) {
    let tbody = document.getElementById(tbodyID)
    
    if(list.length === 0){
        let row = document.createElement("tr")
        row.className = 'table-primary'
        let td = document.createElement("td")
        td.className = 'table-primary'
        td.setAttribute('colspan', '9')//colspan value depends on how many columns you have
        td.append('It seems that you do not have any appointment in this date.')
        row.append(td)
        tbody.append(row)
        return
    }

    list.forEach(items => {
        let row = document.createElement("tr")
        row.className = 'table-primary'
        for (const key in items) {
            let td = document.createElement("td")
            td.className = 'table-primary'
            td.append(items[key])
            row.append(td)
        }
        tbody.append(row)
    });
}
            </code>
        </pre>
        <p>
            And that is all.
        </p>
    </section>
</body>

</html>