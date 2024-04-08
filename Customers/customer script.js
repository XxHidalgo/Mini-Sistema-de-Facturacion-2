$(document).ready(function(){
    $('.edit-customer').click(function (e) { 
      e.preventDefault();
    
      var id = $(this).closest('tr').find('.td-id').text();
      var name = $(this).closest('tr').find('.td-name').text();
      var last = $(this).closest('tr').find('.td-last').text();
      var number = $(this).closest('tr').find('.td-number').text();
      var email = $(this).closest('tr').find('.td-email').text();
      var license = $(this).closest('tr').find('.td-license').text();
      var status = $(this).closest('tr').find('.td-status').text();

        $('#cid').val(id);
        $('#cname').val(name);
        $('#clast').val(last);
        $('#cnumber').val(number);
        $('#cemail').val(email);
        $('#clicense').val(license);
        if(status === "Active"){
            $('#flexCheckChecked').prop('checked', true);
        }
        else{
            $('#flexCheckChecked').prop('checked', false);
        }

        $('#modal-customers-label').text('Edit Customer');


      $('#modal-customers').on('hidden.bs.modal', function () {
          $('#cid').val('');
          $('#cname').val('');
          $('#clast').val('');
          $('#cnumber').val('');
          $('#cemail').val('');
          $('#clicense').val('');
          $('#flexCheckChecked').prop('checked', true);
      });
      
      });
   });

   $(document).ready(function(){
    $('#add-customer').click(function (e) {
      e.preventDefault();
 
        $('#cid').val('');
        $('#cname').val('');
        $('#clast').val('');
        $('#cnumber').val('');
        $('#cemail').val('');
        $('#clicense').val('');
        $('#flexCheckChecked').prop('checked', true);
        $('#modal-customers-label').text('Add Customer');
      
    });
   });
