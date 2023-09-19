</p>
<div class="container text-center">
  <div class="row">
    <div class="col align-self-start">
    </div>
    <div class="col align-self-center">
      <div class="card text-bg-light mb-3" style="max-width: 22rem;">
        <div class="card-header">Agregar usuarios</div>
        <div class="card-body">
            <div class="mb-3 row">
              <label for="exampleDataList" class="col-sm-4 col-form-label">Nombre:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="exampleDataList">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Contraseña:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword">
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" value="jefe" type="radio" name="flexRadioDefault" id="flexRoot">
              <label class="form-check-label" for="flexRoot">
                Root
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" value="contador" type="radio" name="flexRadioDefault" id="flexContadores" >
              <label class="form-check-label" for="flexContadores">
                Contadores
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" value="capturista" type="radio" name="flexRadioDefault" id="flexCapturistas" checked>
              <label class="form-check-label" for="flexCapturistas">
                Capturistas
              </label>
            </div>
            </p>
            <div class="col" style="display: grid;">
              <button class="btn btn-primary" onclick="jQuery();" type="submit" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Agregar Usuario</button>
            </div>
        </div>
      </div>
    </div>
    <div class="col align-self-end">
    </div>
  </div>
</div>
