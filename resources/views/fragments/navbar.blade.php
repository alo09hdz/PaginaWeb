<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-sharp fa-regular fa-candy"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Dulces</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>