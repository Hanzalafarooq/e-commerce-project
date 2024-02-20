
<!doctype html>
<html lang="en">

<head>
  <title>E-commerce</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="{{ asset('css/form.js') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="Acids/css/header.css"> --}}
</head>

<body>
  <header>
    <!-- place navbar here -->
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-light"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">

          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href={{url('/view')}}>
              <div>
                <i class="far fa-envelope fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-warning">11</span>
              </div>
             Brands
            </a>
            <li class="nav-item text-center mx-2 mx-lg-1">
                <a class="nav-link" href="{{route('brands.table')}}">
                  <div>
                    <i class="far fa-envelope fa-lg mb-1"></i>
                    <span class="badge rounded-pill badge-notification bg-success">14</span>
                  </div>
                Brands Table
                </a>
          </li>
          <li class="nav-item text-center mx-2 mx-lg-1">
            <a class="nav-link" href="{{url('/cview')}}">
              <div>
                <i class="far fa-envelope fa-lg mb-1"></i>
                <span class="badge rounded-pill badge-notification bg-primary">16</span>
              </div>
           Categories
            </a>
      </li>
      <li class="nav-item text-center mx-2 mx-lg-1">
        <a class="nav-link" href="{{url('/ctable')}}">
          <div>
            <i class="far fa-envelope fa-lg mb-1"></i>
            <span class="badge rounded-pill badge-notification bg-danger">15</span>
          </div>
     Categories Table
        </a>
  </li>
  <li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{url('/sview')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-danger">13</span>
      </div>
 Sub Categories
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{route('sub.table')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-primary">17</span>
      </div>
 Sub Category Table
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{route('color.view')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-success">11</span>
      </div>
Add Color
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{route('color.table')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-warning">14</span>
      </div>
Color Table
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{route('size.view')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-danger">27</span>
      </div>
Add size
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{route('size.table')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-warning">7</span>
      </div>
Size Table
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{url('pview')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-danger">15</span>
      </div>
Add Product
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{url('/frview')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-danger">15</span>
      </div>
front-end
    </a>
</li>
<li class="nav-item text-center mx-2 mx-lg-1">
    <a class="nav-link" href="{{url('orderdetails')}}">
      <div>
        <i class="far fa-envelope fa-lg mb-1"></i>
        <span class="badge rounded-pill badge-notification bg-danger">15</span>
      </div>
Order Details
    </a>
</li>



        </form>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  </header>

