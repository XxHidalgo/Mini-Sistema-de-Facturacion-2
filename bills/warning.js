$(document).ready(function () {
    $('#formB').submit(function (e) { 
        var InputCustomer = $('#cid').val().trim();
        var InputTotal = $('#beffec').val().trim();
    
        if (!/\d/.test(InputCustomer) || !/\d/.test(InputTotal)) {
            e.preventDefault();
            alert("Por favor, llene todos los campos.");    
        }

        var permitirEnvio = true;
        var inputsARevisar = ['#breturn', '#quantip'];
        inputsARevisar.forEach(function(inputId) {
            var valorInput = $(inputId).val().trim();
            if (valorInput.includes('-')) {
                permitirEnvio = false;
            }
        });
        if (!permitirEnvio) {
            e.preventDefault();
            alert("Por favor, asegúrate de que los números no sean negativos");
        }
        var numRows = $('#tableBills tr').length;
        if(numRows === 1){
            e.preventDefault();
            alert("Por favor, asegúrate de que selecciones al menos 1 producto");
        }
    }); 
}); 
