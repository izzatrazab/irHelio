function printbyID(id, name) {
    var element = document.getElementById(id);
    var opt = {
        enableLinks: true,
        margin: 0,
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
            format: 'A4',
            orientation: 'portrait'
        }
    };
    //nok save
    // html2pdf().set(opt).from(element).save();

    //output saja
    html2pdf().set(opt).from(element).output('dataurlnewwindow')
}