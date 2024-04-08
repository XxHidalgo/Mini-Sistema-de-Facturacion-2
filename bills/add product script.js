$(document).ready(function () {
    /*-----------------------Funciones-----------------------*/
    function CalcularTotal(){
        var sumatotal = 0;
        $("#tableBills tr").each(function(){
            var ColMatch = $(this).find("td:eq(4)").text().match(/\d+/);
            
            if (ColMatch !== null) {
                var col4 = ColMatch[0];
                sumatotal += parseInt(col4, 10); 
            }
        });

        $('#btotal').val("$RD "+ sumatotal);
    }

    function CalcularReturn(){
        var total = 0;
        var efective = 0;

        var efectivematch = $('#beffec').val().match(/\d+/);
        if (efectivematch !== null) {
            efective = parseInt(efectivematch[0], 10);
        }
        
        var totalMatch = $('#btotal').val().match(/\d+/);
        if (totalMatch !== null) {
            total = parseInt(totalMatch[0], 10);
        }

        $('#breturn').val("RD$ " + (efective - total));
        if($('#breturn').val() == "RD$ " + NaN){ 
            $('#breturn').val("RD$ 0");
        }
    }

    function TipoMoneda(input){
        var inputValue = $(input).val();

        if (!inputValue.startsWith("RD$")) {
            $(input).val("RD$");
            return;
        }

        if (inputValue === "RD$") {
            return;
        }

        var numberValue = parseFloat(inputValue.replace("RD$", ""));
        if (!isNaN(numberValue)) {
            $(input).val("RD$" + numberValue);
        } else {
            $(input).val("RD$");
        }
    }
    /*----------------------------------------------------------------------*/
    var idRepetido = false;
    $("#addProduct").click(function (e) { 
        e.preventDefault();
        
        var idProduct = $('#pid').val();
        var description =  $('#SelectProduct option:selected').text().replace(/\d+\s*-\s*/, '');

        var numberExtsPrice = $('#bprice').val().match(/\d+/);
        var Price = parseInt(numberExtsPrice[0], 10);
        var Price2 = $('#bprice').val();

        var Quantity = parseInt($('#bquantity').val(), 10);

        var Subtotal = (Quantity * Price);

        $("#tableBills tr").each(function(){
            var idR = $(this).find("td:eq(0)").text();
            
            if(idProduct == idR){
                idRepetido = true;

                var Col3 = parseInt($(this).find("td:eq(3)").text(), 10);
                var newQuantity = Col3 + Quantity;
                $(this).find("td:eq(3)").text(newQuantity);
        
                var ColMatch = $(this).find("td:eq(4)").text().match(/\d+/);
                var Col4 = parseInt(ColMatch[0], 10);
                var newSubtotal = Col4 + (Quantity * Price);
                $(this).find("td:eq(4)").text('RD$ ' + newSubtotal);

            }
            
        });
        
        if (!idRepetido) {
            var table = $("#tableBills");
        
            var newRow = $("<tr>");
        
            newRow.append("<td>"+idProduct+"</td>");
            newRow.append("<td>"+description+"</td>");
            newRow.append("<td>"+Price2+"</td>");
            newRow.append("<td>"+Quantity+"</td>");
            newRow.append("<td>RD$ "+Subtotal+"</td>");
            newRow.append("<td><button type='button' class='btn-close border border-2 border-danger mb-2 removePro' aria-label='Close'></button></td>");
        
            table.append(newRow);
        }
        idRepetido = false;
        
        CalcularTotal();
        CalcularReturn();
        
        $('#SelectProduct option[value=seletProduct]').prop("selected", true);
        $('#bquantity').val('');
        $('#bprice').val('');
        $('#addProduct').prop("disabled", true);

        $('.removePro').click(function (e) { 
            e.preventDefault();
            $(this).closest('tr').remove();
            CalcularTotal();
            CalcularReturn();
    
        });
    });

    $('#beffec').focus('input', function() {
        CalcularReturn();
        TipoMoneda(this);
    });
    $('#beffec').on('input', function() {
        CalcularReturn();
        TipoMoneda(this);
    });
    $('#bquantity').on('input', function() {
        var inputValue = $(this).val();
        if (/\d/.test(inputValue)) {
            
            $('#addProduct').prop("disabled", false);
        } else {
            $('#addProduct').prop("disabled", true);
        }
    });
});

