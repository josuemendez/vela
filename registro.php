<?php include('inc/header.php'); ?>
<?php include('inc/menu.php'); ?>


<div class="page-title-area ptb-100">
  <div class="container">
    <div class="page-title-content">
      <h1>Registro</h1>
      <ul>
        <li class="item"><a href="index.php">Inicio</a></li>
        <li class="item"><a href="registro.html"><i class='bx bx-chevrons-right'></i>Registro</a></li>
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
</div> <br>
<div class="content">
          <h3>Por favor elige tu clase</h3>
          <p>y categoría</p>
        </div>

   <div class="row">  
     <div class="col-6">
        <Label> <strong>Optimist</strong> </Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Principiante</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Avanzado</label>
</div>
</div>
<div class="col-6">
<Label><strong>Laser</strong></Label> <br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Standar</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Radial</label>
</div>
</div>
</div>  
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Zeasail 10</strong></Label> <br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Seleccionar</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>Bic Techno</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Sub 15</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Sub 17</label>
</div>
    </div> 
</div>
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>C420</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Sub 19</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Open</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>Idfoil</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Elite 17+</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Open</label>
</div>
    </div> 
</div>
<hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Hobie</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Intermedios</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Avanzados</label>
</div>
    </div> 
    <div class="col-6">
    <Label><strong>J24</strong></Label><br>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Seleccionar</label>
</div>
    </div> 
</div> <hr>
<div class="row">  
    <div class="col-6">
    <Label><strong>Yates</strong></Label>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Seleccionar</label>
</div>

    </div> 
    <div class="col-6">
      
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
        <button type="submit" class="btn-primary">
        Enviar Registro
        </button>
        <br><br><hr>
        <div class="checkbox text-center">
        <label for="agreement">Si ya estas registrado <a href="pago.php"> procede al pago</a> o al <a href="comprobante.php"> envio de comprobante.</a></label></div>
      </form>
    </div>
  </div>
</div>

<?php include('inc/footer.php'); ?>