    <div class="modal fade" id="modal-product" tabindex="-1" aria-labelledby="modal-products-label" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form action="inter product.php" method="post">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-products-label">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="hidden" name="pid" id="pid">
                                            <label for="exampleInputEmail1" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="pdescription" id="pdescription">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Category</label>
                                            <select id="SelectCategories" name="SelectCategories" class="form-select">
                                                <?php listCategories();?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Price</label>
                                            <input type="text" class="form-control" name="pprice" id="pprice">
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Stock</label>
                                                <input type="text" class="form-control" name="pstock" id="pstock">
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="sumbit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
