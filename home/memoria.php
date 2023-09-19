<?php
require "../include/home.php";
?>
</p>
<div class="container text-center">
    <div class="row">
      <div class="col align-self-start">
      </div>
      <div class="col align-self-center">
        <div class="card text-bg-light mb-3" >
          <div class="card-header">Espacio del Disco</div>
          <div class="card-body">
              <div class="col text-start">
                Estado del Disco
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                </div>
                <div class="col text-center">
                En uso <?php echo "92"."B";?> <i class="bi bi-square-fill" style ="color: #0D6EFD;"></i> Libre <?php echo "32"."B";?> <i class="bi bi-square" style="color: #e9ecef; border-color: gray;"></i>
                </div>
              </div>
              <div class="col text-start">
                Espacio ocupado por carpeta
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: <?php echo "32";?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: <?php echo "12";?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-warning" role="progressbar" aria-label="Segment three" style="width: <?php echo "56";?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="col text-center">
                Contadores <?php echo  "12k"."B";?> <i class="bi bi-square-fill" style ="color: #0D6EFD;"></i> Capturistas <?php echo  "12k"."B";?> <i class="bi bi-square-fill" style="color: #198754;"></i> Dirección <?php echo  "24k"."B";?> <i class="bi bi-square-fill" style="color: #FFC107; border-color: gray;"></i>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col align-self-end">
      </div>
    </div>
  </div>