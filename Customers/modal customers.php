
    <div class="modal fade" id="modal-customers" tabindex="-1" aria-labelledby="modal-customers-label" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form action="inter customers.php" method="post">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-customers-label">Add Customer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="hidden" name="cid" id="cid">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="cname" id="cname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Last name</label>
                                            <input type="text" class="form-control" name="clast" id="clast">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label" >Number</label>
                                            <input type="text" class="form-control" name="cnumber" id="cnumber">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                            <input type="text" class="form-control"  name="cemail" id="cemail">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label" >License</label>
                                            <input type="text" class="form-control" name="clicense" id="clicense">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked name="cactive">
                                            <label class="form-check-label" for="flexCheckChecked">Active</label>
                                        </div>
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
