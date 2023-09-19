<?php 
function sepWay ($arg, $seps){
  $sep = $seps;
  $cad = $arg;
  $Separador = explode($sep, $cad);
  return $Separador;
}

$myfile = fopen("./../bash/users.txt", "r") or die("Unable to open file!");
$res = fread($myfile,filesize("./../bash/users.txt"));
$res = sepWay($res,"|");
fclose($myfile);
?>
</p>
<div class="container text-center">
  <div class="row">
    <div class="col align-self-start">
     
    </div>
    <div class="col align-self-center">
      <div class="card text-bg-light mb-3" style="max-width: 22rem;">
        <div class="card-header">Eliminar usuarios</div>
        <div class="card-body">
          <ul class="list-group">
            <?php for($i=1; $i < count($res) -1 ; $i++ ) {
              $key = sepWay($res[$i], " ");
              $scn =  $key[1];?>
            <li class="list-group-item d-flex justify-content-between align-items-center" id="names<?php echo $i;?>" value="hola">
              <?php echo $key[1]; ?>  
              <span class="badge bg-success rounded-pill none" id="succesSpan<?php echo $i;?>"><i class="bi bi-check"></i> Elimando</span><a href="#" id="delButton<?php echo $i;?>" onclick="delButton(<?php echo $i;?>, '<?php echo $scn;?>');"><span class="badge bg-danger rounded-pill"><i class="bi bi-trash"></i> Eliminar</span></a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col align-self-end">
     <style>
      .none{
        display: none;
      }
     </style>
    </div>
  </div>
</div>