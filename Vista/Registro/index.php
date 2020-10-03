  </nav> 
</div>

<!-- body -->
<div class="container-fluid">
  <div class="col-xl-15 col-lg-14">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="row justify-content-center">
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h2 text-gray-900 mb-4">Registro de Solicitud</h1>
              </div>
              <div class="text-left">
                <span>
                  -Ingrese el número de DNI y presionar el boton Validar con RENIEC</br>
                  -Rellene los campos obligatorios (*)</br>
                  -De ser posible ingrese el número de expediente o documento que desea consultar, esto para facilitar la busqueda. 
                </span>
              </div>
              <form class="user" method="POST" name="formulario" id="formulario">
                <div class="container">
                  </br>
                  <div class="row">
                    <span>Datos del solicitante</span>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control" name="dni" placeholder="DNI">
                    </div>
                    <div class="col-sm-6">
                      <a href="#" id="datos_ciudadano" class="btn btn-secondary btn-block">Validar con RENIEC</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="apaterno" placeholder="Apellido Paterno" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="amaterno" placeholder="Apellido Materno" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nombres" placeholder="Nombres" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="telefono" placeholder="Celular*">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email*">
                  </div>                  
                  <div class="row">
                    <span>Datos de la solicitud</span>
                  </div>
                  <hr>
                  <div class="form-group">
                    <input type="text" class="form-control" name="otorgadox" placeholder="Otorgado por">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="afavor" placeholder="A favor de">
                  </div>
                  <div class="form-group">
                    <select name="Notarios_RUC" class="form-control select2" style="width: 100%;">
                      <option value="">Notario</option>
                      <?php if (!$_POST) { while ($fila = mysqli_fetch_array($datos)) { ?>
                        <option value="<?php echo $fila['RUC'];?>"><?php echo $fila['nombres'];?></option>
                      <?php } }?>
                    </select>
                  </div>
                  <!-- <div class="form-group">
                    <input type="text" class="form-control" name="fecha" placeholder="fecha">
                  </div> -->
                  <button type="submit" data-toggle="modal" data-target="#resumenModal" name="btnRegistrarSolicitud" class="btn btn-primary btn-block">Registrar Solicitud</button>
                  <div class="form-group">
                  <!-- <a href="#" data-toggle="modal" data-target="#resumenModal" name="btnRegistrar" class="btn btn-primary btn-block">Registrar Solicitud</a> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>                  
        </div>
      </div>
    </div>
</div>
<script src="<?php echo URL; ?>Vista/Registro/reniec.js"></script>
<!-- Logout Modal-->
<!-- <div class="modal fade" id="resumenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Resumen de la Solicitud</h1>
          </div>
          <form class="user" method="post">
            <div class="container">
              <div class="form-group row">
                <div class="col-5">
                  <label><strong>Numero de trámite:</strong></label>
                </div>
                <div class="col-3">
                  <label>20</label>
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <div class="col-5">
                  <label><strong>Fecha de registro:</strong></label>
                </div>
                <div class="col-3">
                  <label>12-12-20</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-7">
                  <label><strong>Fecha estimada de respuesta:</strong></label>
                </div>
                <div class="col-3">
                  <label>12-12-20</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-3">
                  <label><strong>Estado:</strong></label>
                </div>
                <div class="col-3">
                  <label>En proceso</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-4">
                  <label><strong>A nombre de:</strong></label>
                </div>
                <div class="col-3">
                  <label>Pepe</label>
                </div>
              </div>
              <div class="form-group row">
                <span>
                  Se le ha enviado el <strong>código</strong> a su <strong>correo</strong> y <strong>número de teléfono</strong>, esto le servirá para realizar la consulta del estado de su documento solicitado.
                </span>
              </div>
              <button type="submit" name="btnIngresar" class="btn btn-primary btn-user btn-block">
                Aceptar
              </button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div> -->