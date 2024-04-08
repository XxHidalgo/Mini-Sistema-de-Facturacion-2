
    <div class="modal fade" id="modal-categories" tabindex="-1" aria-labelledby="modal-categories-label" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form action="inter categories.php" method="post">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-categories-label">Add Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="hidden" name="cid" id="cid">
                                            <label for="exampleInputEmail1" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="cdescription" id="cdescription">
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
