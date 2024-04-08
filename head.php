<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4 class="navbar-brand">Mini Sistema de Facturacion</h4>
          <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Sections</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link fs-4" href="../Customers/customer.php"><img src="icon/Cliente.png" class="rounded me-3 mb-3" alt="..." style="width: 40px; height: 40px;">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="../Categories/categories.php"><img src="icon/Categories.png" class="rounded me-3 mb-3 " alt="..." style="width: 40px; height: 40px;">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-4" href="../Product/product.php"><img src="icon/Product.png" class="rounded me-3 mb-3 " alt="..." style="width: 40px; height: 40px;">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-4" href="../bills/bills.php"><img src="icon/Bills.png" class="rounded me-3 mb-3 " alt="..." style="width: 40px; height: 40px;">Bills</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
