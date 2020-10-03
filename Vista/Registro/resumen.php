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
                <h1 class="h2 text-gray-900 mb-4">Resumen de registro</h1>
              </div>
              <div class="text-left">
                <span>
                </span>
              </div>
              
              <div class="container">
                  
                  <div class="container">
                    <div class="form-group row">
                      <div class="col-5">
                        <label><strong>Numero de trámite:</strong></label>
                      </div>
                      <div class="col-3">
                        <label><?= $datos['idSolicitud']?></label>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                      <div class="col-5">
                        <label><strong>Fecha de registro:</strong></label>
                      </div>
                      <div class="col-3">
                        <label><?= $datos['fechaRegistro']?></label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-7">
                        <label><strong>Fecha estimada de respuesta:</strong></label>
                      </div>
                      <div class="col-3">
                        <label>2020-10-09</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-3">
                        <label><strong>Estado:</strong></label>
                      </div>
                      <div class="col-3">
                        <label>En proceso de busqueda</label>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <div class="col-4">
                        <label><strong>A nombre de:</strong></label>
                      </div>
                      <div class="col-3">
                        <label>Pepe</label>
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <span>
                        Se le ha enviado el <strong>código</strong> a su <strong>email registrado</strong>, esto le servirá para realizar la consulta del estado de su documento solicitado.
                      </span>
                    </div>
                    <!-- <div class="form-group row">
                      <input type="text" name="dni_reg_solicitante" value="<?= $datos;?>" hidden>
                    </div> -->
                  </div>
              
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
          
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div> -->