<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
        <!-- Font Awesome -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <!-- Styles -->
    <link  rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
</head>
<body style="background-color:#F4F4F4;">
    

   <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark unique-color-dark">
    <a class="navbar-brand mr-5" href="#">TiendaName</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <!-- Links -->
   
      <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  mr-3">
                <a class="nav-link" href="#">
                    <i class="fas fa-cash-register"></i> Punto de Venta
                </a>
              </li>
            
                <li class="nav-item  mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-basket"></i>Compras
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item  mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-invoice-dollar"></i> Ventas
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
                  <li class="nav-item  mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-tie"></i> Clientes
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item  mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-pie"></i>Reportes
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item  mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-invoice"></i>Facturas
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link" href="#">
                        <i class="fas fa-boxes"></i> Inventario
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
      
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-cogs"></i>Configuracion</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
      
        </ul>
      <ul class="navbar-nav ml-auto ">
        
        <li class="nav-item dropdown ">
          <a class="nav-link p-0 dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="https://images.pexels.com/photos/2795879/pexels-photo-2795879.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" width="40" height="40" class="rounded-circle z-depth-0">

            </a>
          <div class="dropdown-menu dropdown-menu-right flex-column" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="#">
                @if (Route::has('login'))                
                    @auth                   
                    @else
                        <a class="dropdown-item"  href="{{ route('login') }}">Login</a>                      
                    @endauth    
                     </a>          
                @endif
           
            <a class="dropdown-item"  href="{{ route('register') }}">Perfil</a>
          </div>
        </li>
        
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
            <!--/.Navbar -->

        <main class="py-4">
            @yield('content')
        </main>

  <!-- Footer -->

   <footer id="footer" style="background-image:url('{{asset('images/footerDiez.jpg')}}')" class="navbar-fixed-bottom">

  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> PuntoDeVenta.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  
</body>
</html>
