<?php include __DIR__ . '/../head.php'; ?>
<script src="customer script.js"></script>
      <div class="container-fluid mt-5">
        <h1 class="display-6">Customers</h1>
        <hr>
        <h1 class="display-5">Customers List</h1>
        <nav class="navbar">
          <div class="container-fluid">
            <form class="d-flex" role="search" method="post" action="">
              <input class="form-control me-2" type="search" placeholder="ID Customers" aria-label="Search" id="id" name="id">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <button id="add-customer" type="buttom" class="btn float-end btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modal-customers">Add Customer</button>
        <table class="table table-striped table-hover mb-5">
          <thead class="table-primary">
            <tr>
              <th>ID Customers</th>
              <th>Name</th>
              <th>Last Name</th>
              <th>Number</th>
              <th>Email</th>
              <th>License</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php include 'list customers.php';?>
          </tbody>
        </table>
        <?php include 'modal customers.php';?>
       
</body>
</html>