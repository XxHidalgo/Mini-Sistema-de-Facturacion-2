<?php include __DIR__ . '/../head.php'; ?>

<script src="products script.js"></script>
      <div class="container-fluid mt-5">
        <h1 class="display-6">Product</h1>
        <hr>
        <h1 class="display-5">Product List</h1>
        <nav class="navbar">
          <div class="container-fluid">
            <form class="d-flex" role="search" method="post" action="">
              <input class="form-control me-2" type="search" placeholder="ID Product" aria-label="Search" id="id" name="id">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <button id="addproduct" type="buttom" class="btn float-end btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modal-product">Add Category</button>
        <table class="table table-striped table-hover mb-5">
          <thead class="table-primary">
            <tr>
              <th>ID Product</th>
              <th>Decription</th>
              <th>Category</th>       
              <th>Price</th>
              <th>Stock</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php include 'list product.php'; ?>
          </tbody>
        </table>
        <?php include 'modal product.php';?>
       
</body>
</html>