function printElementbyID(id, fileName) {
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
    // html2pdf().set(opt).from(element).save();
    html2pdf().set(opt).from(element).output('dataurlnewwindow')
}