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
      <div class="row m-2">
        <button type="button" style="width: fit-content;" class="btn btn-primary fit-content ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="add_product">Agregar</button>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalHeader">Title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="product" enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="col-form-label">Nombre del producto</label>
                  <input type="text" class="form-control product-name" name="name" value="triciclo apache">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Descripcion del producto</label>
                  <input type="text" class="form-control product-details" name="description" value="es un triciclo">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Slug del producto</label>
                  <input type="text" class="form-control product-slug" name="slug" value="apache">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Descripcion</label>
                  <input type="text" class="form-control product-description" name="description" value="esta bonoito">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Caracteristicas</label>
                  <input type="text" class="form-control product-features" name="features" value="esta bonoito">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Marca</label>
                  <input type="number" class="form-control product-brand" name="brand_id" value="1">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Categorias</label>
                  <input type="number" class="form-control product-category" name="categories[0]" value="1">
                </div>
                <div class="mb-3">
                  <label class="col-form-label">Etiquetas</label>
                  <input type="number" class="form-control product-tags" name="tags[0]" value="1">
                </div>
                <div class="modal-footer">
                  <label class="col-form-label">Imagen</label>
                  <input type="file" class="form-control product-cover" name="cover" value="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" id="submit-btn" class="btn btn-primary">Agregar producto</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($products as $product) : ?>
          <div class="card" style="width: 18rem">
            <img src=<?= $product->cover ?> class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $product->name ?></h5>
              <p class="card-text">
                <?= $product->description ?>
              </p>
              <a href=<?= 'product-details?slug=' . $product->slug ?> class="btn btn-primary">Ver producto</a>
              <button type="button" class="btn btn-warning" data-product-id=<?= $product->id ?> data-product-slug='<?= $product->slug ?>' data-product-name='<?= $product->name ?>' data-product-description='<?= $product->description ?>' data-product-features='<?= $product->features ?>' data-product-brand_id='<?= $product->brand_id ?>' data-product-cover='<?= $product->cover ?>' data-product-categories[0]='<?= 1 ?>' data-product-tags[0]='<?= 1 ?>' data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="update_product">Editar</button>
              <button type="button" class="btn btn-danger" onclick="deleteProduct(this)" data-id='<?= $product->id ?>'>Borrar</button>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script>
    function deleteProduct(obj) {
      const id = obj.dataset.id;
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-success",
          cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          const myHeaders = new Headers();
          myHeaders.append("Content-Type", "application/json");

          const graphql = JSON.stringify({
            query: "",
            action: 'delete_product',
            variables: {}
          })
          const requestOptions = {
            method: "DELETE",
            headers: myHeaders,
            body: graphql,
            redirect: "follow"
          };

          fetch(`https://localhost/jona/php/1/home/product/${id}`, requestOptions)
            .then((response) => response.text())
            .then((result) => console.log(result))
            .catch((error) => console.error(error));
          swalWithBootstrapButtons.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
          });
        } else if (
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary file is safe :)",
            icon: "error"
          });
        }
      });
    }

    const exampleModal = document.getElementById('exampleModal')
    if (exampleModal) {
      exampleModal.addEventListener('show.bs.modal', event => {
        const modalBodyForm = exampleModal.querySelector('.modal-body form')
        const button = event.relatedTarget
        const ACTION = button.getAttribute('data-bs-whatever')
        const actionButton = modalBodyForm.querySelector('#submit-btn');
        const title = document.getElementById('modalHeader');
        switch (ACTION) {
          case 'update_product':
            console.log(button.dataset);
            const data = {};
            for (const key in button.dataset) {
              if (key.startsWith('product')) {
                const field = key.replace('product', '').toLowerCase()
                data[field] = button.dataset[key];
              }
            }

            const idInput = document.createElement('input');
            idInput.name = "id";
            idInput.hidden = true;
            modalBodyForm.prepend(idInput)
            const inputs = modalBodyForm.querySelectorAll('input')
            console.log()
            for (let i = 0; i < Object.keys(data).length; i++) {
              inputs[i].value = data[inputs[i].name];
            }
            actionButton.innerText = "Guardar";
            title.innerText = "Editar producto"
            break;
          case 'delete_product':
            break;
          default:
            title.innerText = "Agregar producto"
            break;
        }

        const actionInput = document.createElement('input');
        actionInput.name = "action";
        actionInput.hidden = true;
        actionInput.value = ACTION;
        modalBodyForm.append(actionInput);
      })
    }
  </script>
</body>

</html>
