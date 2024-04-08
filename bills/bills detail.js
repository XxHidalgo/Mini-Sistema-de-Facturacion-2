$(document).ready(function () { 
    $("#formB").submit(function() {
        
        var codep = [];
        var quantip = [];

        $("#tableBills tr").each(function(index) {
        if (index !== 0) {
            var filap = $(this).find("td:eq(0)").text();
            codep.push(filap);

            var filaq = $(this).find("td:eq(3)").text();
            quantip.push(filaq);
        }
    });

        $("#codep").val(JSON.stringify(codep));
        $("#quantip").val(JSON.stringify(quantip));
    });
});