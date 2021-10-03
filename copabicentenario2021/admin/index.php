<script>
  var contra ="admin";
  contra = prompt("Password")

  if (contra =="yates2021")
  {
    
  }else
  {
    alert("acceso denegado");
    var pagina="https://www.google.com"
    function redireccionar()
    {
      location.href=pagina
    }
    setTimeout("redireccionar()",0);
  }
</script>
<?php require_once '../db/dbcon.php'; ?>
<!doctype html>
<html lang="es">

<head>
  <title>Acceso a atletas registrados Copa Bicentenario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          Atletas Registrados
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Copa Bicentenario
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Atletas</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Atletas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="http://velayucatan.org/copabicentenario2021">
                   Salir
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Atletas Registrados</h4>
                 <!-- <p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Fecha de Nac.
                        </th>
                        <th>
                          Género
                        </th>
                        <th>
                          Número Vela
                        </th>
                        <th>
                          Club
                        </th>
                        <th>
                          Clase
                        </th>
                        <th>
                          Fecha Registro
                        </th>
                      </thead>
                      <tbody>
                        
                      <?php
$resultados = mysqli_query($conexion, "SELECT * FROM usuarios");
  while ($row = mysqli_fetch_array($resultados)) {
      ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['fecha_nac']; ?></td>
                    <td><?php echo $row['genero']; ?></td>
                    <td><?php echo $row['no_vela']; ?></td>
                    <td><?php echo $row['club']; ?></td>
                    <td><?php echo $row['clase']; ?></td>
                    <td><?php echo $row['fecha_reg']; ?></td>
                  </tr>
                  <?php
  } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="http://www.velayucatan.org/copabicentenario2021">
                Copa Bicentenario 2021
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            Powered by 
            <a href="https://www.interjmex.com" target="_blank">Interjmex</a>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>