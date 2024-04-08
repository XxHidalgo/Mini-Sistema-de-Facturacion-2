<script>
   $(document).ready(function() {
        $('#SelectProduct').change(function() {
            var numberExt = $('#SelectProduct').val().match(/\d+/);
            if(numberExt){
                var number = parseInt(numberExt[0], 10);
            }
            else{
                $('#bprice').val('');
                $('#pid').val('');
                $('#addProduct').prop("disabled", true);
            }
            
            <?php
                $query = "SELECT * FROM products";
                $result = execQuery($query);

                foreach($result as $row) {
                    $idp = $row['Id_Product'];
                    $price = $row['Price'];
            ?>
            
            if(number == <?php echo $idp; ?>){
                $('#bprice').val("RD$ " + <?php echo $price; ?>);
                $('#pid').val(<?php echo $idp?>);
            }
            
            <?php } ?>
        });
        $('#SelectCustomer').change(function() {
            var numberExts = $('#SelectCustomer').val().match(/\d+/);
            if(numberExts){
                var numbers = parseInt(numberExts[0], 10);
            }
            else{
                $('#cid').val('');
            }
            <?php
                $query = "SELECT * FROM customers";
                $result = execQuery($query);

                foreach($result as $row) {
                    $idc = $row['Id_Customer'];
            ?>
            
            if(numbers == <?php echo $idc; ?>){
                $('#cid').val(<?php echo $idc?>);
            }
            
            <?php } ?>
    });
        <?php 
            $query = "SELECT DATE_FORMAT(CURDATE(), '%Y-%m-%d') AS dates";
            $result = execQuery($query);
            ?>

            $('#bdate').val("<?php echo $result[0]['dates']; ?>");
            

    });
</script>




