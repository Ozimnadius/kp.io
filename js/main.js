$(function () {
    $('.download').on('click', function (e) {
        e.preventDefault();

        var docDefinition = { content: $('html').html() };

        // open the PDF in a new window
        pdfMake.createPdf(docDefinition).open();

        // print the PDF
        pdfMake.createPdf(docDefinition).print();

        // download the PDF
        pdfMake.createPdf(docDefinition).download('optionalName.pdf');
    });

});