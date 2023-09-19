<?php 
require ("./../include/disco.php");
?>

</p>
  <div class="container text-center">
    <div class="row">
      <div class="col align-self-start">
      </div>
      <div class="col align-self-center">
        <div class="card text-bg-light mb-3" >
          <div class="card-header">Opciones del disco </div>
          <div class="card-body">
            <div class="row">
              <div class="col text-start" style="flex-grow : 7;">
                Memoria: Interna  
              </div>
              <div class="col text-end" style="flex-grow : 3;">
              <a tabindex="0" data-toggle="popover" role="button" data-bs-trigger="focus" title="Memoria en uso" data-content="Interna: Memoria del sistema <br> Disco: Dicos duros"><i class="bi bi-exclamation-circle"></i></a>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col text-start" style="flex-grow : 3;">
                Discos: 
              </div>
              <div class="col text-center" style="flex-grow : 7;">
                slot 1 <?php echo $status_1;?> slot 2 <i class="bi bi-circle" style="color: orange;"></i>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col text-start" style="flex-grow : 3;">
                Raid: 
              </div>
              <div class="col text-center" style="flex-grow : 7;">
                <select class="form-select" aria-label="Default select example">
                  <option value="1">Raid 0</option>
                  <option value="2">Raid 1</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col text-center">
                <button class="btn btn-success" <?php if(!$slot_1 && !$slot_2){echo "disabled";} ?> >Iniciar Raid</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col align-self-end">
      </div>
    </div>
  </div>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $(".active").click(function(){
      $("[data-toggle='popover']").popover('hide');
    });
  });
  $('[data-toggle="popover"]').popover({
            html:true
        });
</script>
