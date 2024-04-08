
$(document).ready(function(){
    $('.edit-products').click(function (e) { 
      e.preventDefault();
    
      var id = $(this).closest('tr').find('.td-id').text();
      var description = $(this).closest('tr').find('.td-description').text();
      var category = $(this).closest('tr').find('.td-categorie').text();
      var priceWithLetters = $(this).closest('tr').find('.td-price').text();
      var price = priceWithLetters.replace(/\D/g,'');
      var stock = $(this).closest('tr').find('.td-stock').text();


        $('#pid').val(id);
        $("#SelectCategories option[data-info='" + category + "']").prop("selected", true);
        $('#pdescription').val(description);
        $('#pprice').val(price);
        $('#pstock').val(stock);
        

        $('#modal-products-label').text('Edit Product');

      $('#modal-product').on('hidden.bs.modal', function () {
          $('#pid').val('');
          $("#SelectCategories option").prop("selected", false);
          $('#pdescription').val('');
          $('#pprice').val('');
          $('#pstock').val('');
      });
    });
});


   $(document).ready(function(){
    $('#addproduct').click(function (e) {
      e.preventDefault();

        $('#pid').val('');
        $("#SelectCategories option").prop("selected", false);
        $('#pdescription').val('');
        $('#pprice').val('');
        $('#pstock').val('');
        $('#modal-products-label').text('Add Product');
    });
   });
