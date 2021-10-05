<?php require_once 'db/dbcon.php'; ?>
<?php include('inc/header.php'); ?>
<?php include('inc/menu.php'); ?>


<div class="page-title-area ptb-100">
  <div class="container">
    <div class="page-title-content">
      <h1>Registro</h1>
      <ul>
        <li class="item"><a href="index.php">Inicio</a></li>
        <li class="item"><a href="registro.php"><i class='bx bx-chevrons-right'></i>Registro</a></li>
      </ul>
    </div>
  </div>
  <div class="bg-image">
    <img src="assets/img/page-title-area/registro.jpg" alt="Demo Image">
  </div>
</div>

<?php include('inc/seleccion-registro.php'); ?>
<div class="authentication-section" id="registro">
  <div class="container">
    <div class="main-form ptb-100">
      <form id="#authForm" action="registro.php#enviado" method="post" >
      
        <div class="content">
          <h3>Formato de Registro</h3>
          <p>Copa Bicentenario</p>
        </div>
        <div class="form-group">
          <div class="input-icon"><i class='bx bx-at'></i></div>
          <input type="text" class="form-control" placeholder="Email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" id="nombre" required>
        </div>
        
        
        <div class="row">
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="date" class="form-control" placeholder="Fecha de Nacimiento" name="fecha_nac" id="fecha_nac" required>
        </div>
  </div>
  <div class="col">
  <div class="form-group col">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <select class="col" aria-label="" name="genero" id="genero">
  <option class="col" selected>Género</option>
  <option class="col" value="masculino">Masculino</option>
  <option class="col" value="femenino">Femenino</option>
</select>
        </div>
  </div>
</div>
<div class="row">
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" name="no_vela" id="no_vela" placeholder="Número de Vela" required>
        </div>
  </div>
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" name="club" id="club" placeholder="Club o Estado" required>
        </div>
  </div>
</div> <br>
<div class="content">
          <h3>Por favor elige tu clase</h3>
          <p>y categoría</p>
        </div>

   <div class="row">  
     <div class="col-6">
        <Label> <strong>Optimist</strong> </Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Optimist Principiante">
  <label class="form-check-label" for="clase">Principiante</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Optimist Avanzado">
  <label class="form-check-label" for="clase">Avanzado</label>
</div>
</div>
<div class="col-6">
<Label><strong>Laser</strong></Label> <br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Laser Standar">
  <label class="form-check-label" for="clase">Standar</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Laser Radial">
  <label class="form-check-label" for="clase">Radial</label>
</div>
</div>
</div>  
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Zeasail 10</strong></Label> <br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Zeasail 10">
  <label class="form-check-label" for="clase">Seleccionar</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>Bic Techno</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Bic Techno Sub 15">
  <label class="form-check-label" for="clase">Sub 15</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Bic Techno Sub 17">
  <label class="form-check-label" for="clase">Sub 17</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Bic Techno Principiante">
  <label class="form-check-label" for="clase">Principiante</label>
</div>
    </div> 
</div>
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>C420</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="C420 Sub 19">
  <label class="form-check-label" for="clase">Sub 19</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="C420 Open">
  <label class="form-check-label" for="clase">Open</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>IQfoil</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="IQfoil Elite 17+">
  <label class="form-check-label" for="clase">Elite 17+</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="IQfoil Open">
  <label class="form-check-label" for="clase">Open</label>
</div>
    </div> 
</div>
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Hobie</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Hobie Intermedio">
  <label class="form-check-label" for="clase">Intermedios</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Hobie Avanzado">
  <label class="form-check-label" for="clase">Avanzados</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>J24</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="J24">
  <label class="form-check-label" for="clase">Seleccionar</label>
</div>
    </div> 
</div> <hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Yates</strong></Label>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Yates">
  <label class="form-check-label" for="clase">Seleccionar</label>
</div>

    </div> 
    <div class="col-6">
    <Label><strong>Kitesurf</strong></Label>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="clase" id="clase" value="Kitesurf">
  <label class="form-check-label" for="clase">Seleccionar</label>
    </div> 
</div>
<hr>





       

        <div class="row align-items-start mb-30">
          <div class="col-lg-12">
            <div class="checkbox">
              <input type="checkbox" id="agreement">
              <label for="agreement">Acepto los <a href="#">Términos de servicio</a> y <a href="#">las Politicas de Privacidad.</a></label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn-primary" name="btn_registrar" id="btn_registrar">
        Enviar Registro
        </button>
        <br><br><hr>
        <div class="checkbox text-center">
        <label for="agreement">Si ya estas registrado <a href="pago.php"> procede al pago</a> o al <a href="comprobante.php"> envio de comprobante.</a></label></div>
      </form>
      <?php
$fecha_reg = date("Y-m-d H:i:s");
     if (isset($_POST['btn_registrar'])) {
         $email = $_POST['email'];
         $nombre = $_POST['nombre'];
         $fecha_nac = $_POST['fecha_nac'];
         $genero = $_POST['genero'];
         $no_vela = $_POST['no_vela'];
         $club = $_POST['club'];
         $clase = $_POST['clase'];
         $fecha_reg = $fecha_reg;
         $ejecutar= mysqli_query($conexion, "INSERT INTO usuarios (email, nombre, fecha_nac, genero, no_vela, club, clase, fecha_reg)
                                                VALUES ('$email', '$nombre', '$fecha_nac','$genero','$no_vela','$club','$clase','$fecha_reg')");
         echo '

         <div id="enviado" class="alert alert-success d-flex align-items-center" role="alert">
         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
         <div>
           Registro enviado exitosamente, ahora puede proceder al pago desde <a href="pago.php">aquí</a>
         </div>
       </div>



';
     } ?>
    </div>
  </div>
</div>







<?php include('inc/footer.php'); ?>