<?php include __DIR__ . '/../head.php'; ?>
<script src='categorie script.js'></script>
      <div class="container-fluid mt-5">
        <h1 class="display-6">Categories</h1>
        <hr>
        <h1 class="display-5">Categories List</h1>
        <nav class="navbar">
          <div class="container-fluid">
            <form class="d-flex" role="search" method="post" action="">
              <input class="form-control me-2" type="search" placeholder="ID Category" aria-label="Search" id="id" name="id">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <button id="add-categories" type="buttom" class="btn float-end btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modal-categories">Add Category</button>
        <table class="table table-striped table-hover mb-5">
          <thead class="table-primary">
            <tr>
              <th>ID Categorie</th>
              <th>Decription</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php include 'list categories.php';?>
          </tbody>
        </table>
        <?php include 'modal categories.php';?>
</body>
</html>