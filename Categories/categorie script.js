$(document).ready(function(){
    $('.edit-categories').click(function (e) { 
      e.preventDefault();
    
      var id = $(this).closest('tr').find('.td-id').text();
      var description = $(this).closest('tr').find('.td-description').text();
      var status = $(this).closest('tr').find('.td-status').text();

        $('#cid').val(id);
        $('#cdescription').val(description);
        if(status === "Active"){
            $('#flexCheckChecked').prop('checked', true);
        }
        else{
            $('#flexCheckChecked').prop('checked', false);
        }

        $('#modal-categories-label').text('Edit Categories');

      $('#modal-categories').on('hidden.bs.modal', function () {
          $('#cid').val('');
          $('#cdescription').val('');
          $('#flexCheckChecked').prop('checked', true);
      }); 
    });
});

$(document).ready(function(){
  $('#add-categories').click(function (e) {
    e.preventDefault();

      $('#cid').val('');
      $('#cdescription').val('');
      $('#flexCheckChecked').prop('checked', true);
      $('#modal-categories-label').text('Add Category');
  });
});
