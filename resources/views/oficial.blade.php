<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Sistema-EstadisticoCJ</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
  <!-- Custom styles for this template --> 
  <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{ asset('css/administrador.css')}}" rel="stylesheet">

</head>

<body>

<div id="app">

  <div class="d-flex" id="wrapper">

   <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">  <h5 class="text-white" style="text-align: center;"> Bienvenido -   {{ Auth::user()->name }} <span class="caret"></span> </h5> </div>
          <div class="row">
              <div class="col-md-12  offset-md-1 col-lg-12 col-sm-12">
                  <img src="{{ asset('/images/escudo.png') }}" class="escudo">
              </div>    
          </div>  
          <div class="list-group list-group-flush">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              

              <a class="nav-link menuMain active" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="false"><i class="fas fa-home"></i> Inicio</a>

              <!-- Menu con submenu usuarios-->

              <li class="nav-item">
                  <a class="nav-link collapsed py-1 dropdown-toggle" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-users"></i> Modulo I</a>
                  <div class="collapse" id="submenu1sub1" aria-expanded="false" aria-controls="v-pills-home">
                      <ul class="flex-column nav pl-4">
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-libro-tab" data-toggle="pill" href="#v-pills-libro" role="tab" aria-controls="v-pills-libro" aria-selected="false"><i class="fas fa-users"></i>
                                   Libro de gobierno
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link p-1" id="v-pills-moduloUno-tab" data-toggle="pill" href="#v-pills-moduloUno" role="tab" aria-controls="v-pills-moduloUno" aria-selected="false"> <i class="fas fa-user"></i>
                                  Modulo I
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <!-- Termina menu con submenu usuarios-->

              

              <a class="nav-link menuMain" id="v-pills-expedientes-tab" data-toggle="pill" href="#v-pills-expedientes" role="tab" aria-controls="v-pills-expedientes" aria-selected="false"><i class="fas fa-file-alt"></i> Consulta-Expedientes</a>

              <a class="nav-link menuMain" id="v-pills-manualAyuda-tab" data-toggle="pill" href="#v-pills-manualAyuda" role="tab" aria-controls="v-pills-manualAyuda" aria-selected="false"> <i class="fas fa-question"></i> Manual-Ayuda</a>
      
              <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                </form>                       
              Cerrar Sesion</a>
            </div>
          </div>

      </div>
      <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


     <!-- Menu nav -->
      <nav id="fondo" class="navbar navbar-expand-lg navbar-light bg-light border-bottom fondo">
        <button class="btn btn-danger" id="menu-toggle"><i class="fas fa-align-justify"></i></button>
        <div class="row">
          <div class="col-md-12 offset-md-3 col-lg-12 col-sm-12 offset-sm-3">
            <h5 class="text-white"> SISTEMA DE ESTADISTICAS DEL PODER JUDICIAL DEL ESTADO DE TLAXCALA </h5>       
            <hr class="my-4 rayabutron">
          </div>
        </div>
      </nav>
      <!--Termina menu nav-->
      <!-- Etiqueta para los contenidos del menu Nav-->
      <div class="tab-content" id="v-pills-tabContent">
        <!-- Empieza contenido de inicio -->
        <div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
            <div class="container-fluid">
              <h1 class="mt-4">Bienvenidos</h1>
              <p> Al sistema de generación de estadísticas del <strong> Poder Judicial del Estado de Tlaxcala. </strong> </p>
              
              

              <br> 
            </div>
        </div>
        <!-- Termina contenido de inicio-->



      <!-- Empieza formulario de libro de gobierno -->
        <div class="tab-pane fade" id="v-pills-libro" role="tabpanel" aria-labelledby="v-pills-libro-tab">

          <div class="alert alert-secondary text-center" role="alert">
            <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> de expedientes, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
          </div>

          <div class="container">
           
            Libro de gobierno

          </div>
        </div>
      <!-- Termina formulario libro de gobierno -->

     <!-- Empieza formulario de moduloUno -->
      <div class="tab-pane fade" id="v-pills-moduloUno" role="tabpanel" aria-labelledby="v-pills-moduloUno-tab">

        <div class="alert alert-secondary text-center" role="alert">
          <font size="4"> ACCIONES: </font>  <strong> ALTAS Y BAJAS </strong> del modulo I, <strong> ACTUALIZACIÓN DE LA INFORMACIÓN </strong> y generación de <strong> REPORTES </strong>
        </div>

        <div class="container">
         
          Modulo I

        </div>
      </div>
      <!-- Termina formulario moduloUno -->


    <!-- /#wrapper -->
  </div>
<!--Cierre de div="app" -->
</div>

</div> </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>


<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
 

</body>

</html>