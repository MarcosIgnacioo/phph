<?php
include_once("app/ProductController.php");
session_start();
$productController = new ProductController();
$products = $productController->getAllProducts($_SESSION['api_token']);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous" />
</head>

<body>
  <div class="row">
    <div
      class="col-3 d-flex flex-column flex-shrink-0 p-3 bg-light"
      style="width: 280px">
      <a
        href="/"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Orders
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#grid"></use>
            </svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Customers
          </a>
        </li>
      </ul>
      <hr />
      <div class="dropdown">
        <a
          href="#"
          class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
          id="dropdownUser2"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          <img
            src="https://github.com/mdo.png"
            alt=""
            width="32"
            height="32"
            class="rounded-circle me-2" />
          <strong>mdo</strong>
        </a>
        <ul
          class="dropdown-menu text-small shadow"
          aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    <div class="col">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="row">

        <?php foreach ($products as $product) : ?>
          <div class="card" style="width: 18rem">
            <img src=<?= $product->cover ?> class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $product->name ?></h5>
              <p class="card-text">
                <?= $product->description ?>
              </p>
              <a href=<?= $product->slug ?> class="btn btn-primary">Ver producto</a>
            </div>
          </div>
        <?php endforeach ?>

        <div class="card" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
