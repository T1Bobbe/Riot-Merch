<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 needs-validation" action="" method="post" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre (s):</label>
                <input type="text" class="form-control" name="nombre" required>
                <div class="valid-feedback">
                  Correcto!
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido (s)</label>
                <input type="text" class="form-control" name="apellido" required>
                <div class="valid-feedback">
                  Correcto!
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" name="username2" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Introduzca un username valido.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" required>
                <div class="invalid-feedback">
                  Introduzca un email valido.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Contraceña</label>
                <input type="password" class="form-control" name="contracena" required>
                <div class="invalid-feedback">
                  Introduzca una contraceña de 8 caracteres, una minuscula como minimo y algun simbolo especial.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" required>
                <div class="invalid-feedback">
                  Introduzca un numero de telefono valido.
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-danger" type="submit" name="registrar">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>