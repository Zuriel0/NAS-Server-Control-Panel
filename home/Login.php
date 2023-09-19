<!doctype html>
<html lang="es">
  <head>
    <title>Login Servicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="background-svg" alt="background-svg">   
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>    
            <div class="col-md-4">
            <br/>
            <div class="card">
              <div class="card-header">
                Iniciar Sesión
              </div>
              <div class="card-body">
                <form action="" method="post">
                <?php if(isset($errorLogin)){
                    echo "Correo y/o password incorrecto"."<br/>";}   ?>
                  Correo: <input class="form-control" type="text" name="Mail" >
                  <br/>
                  Contraseña: <input class="form-control" type="password" name="password" >
                  <br/>
                  <button class="btn btn-success" type="submit">Iniciar sesión </button>
                </form>          
              </div>
            </div>
            </div>    
            <div class="col-md-4">  
            </div>    
        </div>
    </div>
  </body>
</html>
<style>
  .background-svg{
  background-color: #3AF6FF;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%232E46FF' stroke-width='66.7' stroke-opacity='0.05' %3E%3Ccircle fill='%233AF6FF' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%232aeafe' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%231bdbfe' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%230cccfd' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%2303b7f5' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23049fe5' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%230489d4' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%230474c3' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%230562b3' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%230551a3' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23054193' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23053482' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%23042872' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%23041e63' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%23041553' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%23030e43' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%23030833' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23020424' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
  background-attachment: fixed;
  background-size: cover;
}
</style>