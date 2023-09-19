<?php
function sepWay ($arg, $seps){
    $sep = $seps;
    $cad = $arg;
    $Separador = explode($sep, $cad);
    return $Separador;
  }

$counter = 1;
$myfile = fopen("./../bash/users.txt", "r") or die("Unable to open file!");

$res = fread($myfile,filesize("./../bash/users.txt"));
$res = sepWay($res,"|");


fclose($myfile);

echo "\n";
?>
</p>
  <div class="container text-center">
    <div class="col align-self-center">
      <div class="card text-bg-light mb-3" >
        <div class="card-header">Usuarios Activos</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Usuario</th>
                <th scope="col">Grupo</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i=0; $i < count($res) -1 ; $i++ ) {
                $key = sepWay($res[$i], " ");
                ?>
              <tr>
                <th scope="row"><?php echo $counter;?></th>
                <td><?php echo $key[1];?></td>
                <td><?php echo $key[0];?></td>
              </tr>
              <?php $counter++; } ?>
            </tbody>
          </table>  
        </div>
      </div>
    </div>
  </div>

  