<?php include('inc/header.php'); ?>
<?php include('inc/menu.php'); ?>

<div class="page-title-area ptb-100">
  <div class="container">
    <div class="page-title-content">
      <h1>Registro</h1>
      <ul>
        <li class="item"><a href="index.html">Inicio</a></li>
        <li class="item"><a href="registro.html"><i class='bx bx-chevrons-right'></i>Registro</a></li>
      </ul>
    </div>
  </div>
  <div class="bg-image">
    <img src="assets/img/page-title-area/registro.jpg" alt="Demo Image">
  </div>
</div>
<div class="authentication-section">
  <div class="container">
    <div class="main-form ptb-100">
      <form id="#authForm">
        <div class="content">
          <h3>Formato de Registro</h3>
          <p>Copa Bicentenario</p>
        </div>
        <div class="form-group">
          <div class="input-icon"><i class='bx bx-at'></i></div>
          <input type="text" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" placeholder="Nombre completo" required>
        </div>
        
        
        <div class="row">
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="date" class="form-control" placeholder="Fecha de Nacimiento" required>
        </div>
  </div>
  <div class="col">
  <div class="form-group col">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <select class="col" aria-label="">
  <option class="col" selected>Género</option>
  <option class="col" value="1">Masculino</option>
  <option class="col" value="2">Femenino</option>
</select>
        </div>
  </div>
</div>
<div class="row">
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" placeholder="Número de Vela" required>
        </div>
  </div>
  <div class="col">
  <div class="form-group">
          <div class="input-icon"><i class='bx bx-user'></i></div>
          <input type="text" class="form-control" placeholder="Club o Estado" required>
        </div>
  </div>
</div>


clase

        <div class="row align-items-start mb-30">
          <div class="col-lg-12">
            <div class="checkbox">
              <input type="checkbox" id="agreement">
              <label for="agreement">Acepto los <a href="terms-of-service.html">Términos de servicio</a> y <a href="privacy-policy.html">las Politicas de Privacidad.</a></label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn-primary">
        Enviar Registro
        </button>
        <br><br><hr>
        <div class="checkbox text-center">
        <label for="agreement">Si ya estas registrado <a href="terms-of-service.html"> procede al pago</a> o al <a href="privacy-policy.html"> envio de comprobante.</a></label></div>
      </form>
    </div>
  </div>
</div>

<?php include('inc/footer.php'); ?>