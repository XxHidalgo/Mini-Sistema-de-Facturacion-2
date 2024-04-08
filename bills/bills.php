<?php include __DIR__ . '/../head.php'; ?>
<?php require 'options.php'; ?>
<script src="add product script"></script>
<script src="bills detail.js"></script>
<script src="warning.js"></script>
<div class="container-fluid mt-5">
        <h1 class="display-6">Create bills</h1>
        <hr>
        <form action="insert bills.php" method="POST" id="formB" onsubmit="imprimirDespuesDeEnviar()">
        <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date</label>
                        <input type="text" class="form-control" name="bdate" id="bdate" disabled>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="mb-3">
                        <input type="hidden" name="cid" id="cid">
                        <label for="exampleInputPassword1" class="form-label">Customer</label>
                        <select id="SelectCustomer" name="SelectCustomer" class="form-select">
                            <option value="seletCustomer">Select customer</option>
                            <?php OptionCustomers(); ?>            
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="hidden" name="pid" id="pid">
                        <label for="exampleInputPassword1" class="form-label">Product</label>
                        <select id="SelectProduct" name="SelectProduct" class="form-select">
                            <option value="seletProduct">Select product</option>
                            <?php OptionProduct(); ?>             
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" >Price</label>
                        <input type="text" class="form-control" name="bprice" id="bprice" disabled>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" >Quantity</label>
                        <input type="number" class="form-control" name="bquantity" id="bquantity">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <button id= "addProduct" type="button" class="btn btn-primary mt-4 p-2" disabled>Add product</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <div class= "container-fluid">
                    <div class="row">
                        <div class="col-md">
                            <label for="exampleInputPassword1" class="form-label" >Effective</label>
                            <input type="text" class="form-control" name="beffec" id="beffec">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="exampleInputPassword1" class="form-label" >Returned</label>
                            <input type="text" class="form-control" name="breturn" id="breturn" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="exampleInputPassword1" class="form-label" >Total</label>
                            <input type="text" class="form-control" name="btotal" id="btotal" readonly>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid">
            
            <table class="table table-striped" id="tableBills">
                <thead class="table-primary">
                    <tr>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
            <input type="hidden" name="codep" id="codep">
            <input type="hidden" name="quantip" id="quantip">
        </div>
        <?php include 'bills script.php' ?>
        <input type="submit" id="enviar" class="btn btn-primary mt-4 p-2" value="Imprimir">
        </form>
    </div>
    </body>
</html>

