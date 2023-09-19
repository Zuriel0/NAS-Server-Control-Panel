<?php 
require ("./../include/User_session.php");
$userSession = new UserSession();
$dataSession=$userSession->getCurrentUser();
if(isset($dataSession['id'])){
}else { 
  header("location:./../index.php"); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Panel de control</title>
</head>
<body class="background-svg" alt="background-svg" onload="init();">  
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand disabled"  >
      <img src="../upload/Logo.jpg" alt="Anxzu" width="40" height="40">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="div-btn4" aria-current="page" href="">Estado de la memoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="div-btn1" aria-current="page" href="">Lista de usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="div-btn2" href="">Agregar usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="div-btn3" href="">Eliminar usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="div-btn5" href="">Opciones de Disco</a>
        </li>
      </ul>
      <a class="navbar-text" href="../include/logout.php" style="text-decoration: none">
        Logout<i class="bi bi-box-arrow-in-right"></i>
      </a>
    </div>
  </div>
</nav>
<div  id="central">
</div>
<style>
.background-svg{
  background-color: #3AF6FF;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%232E46FF' stroke-width='66.7' stroke-opacity='0.05' %3E%3Ccircle fill='%233AF6FF' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%232aeafe' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%231bdbfe' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%230cccfd' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%2303b7f5' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23049fe5' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%230489d4' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%230474c3' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%230562b3' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%230551a3' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23054193' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23053482' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%23042872' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%23041e63' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%23041553' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%23030e43' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%23030833' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23020424' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
  background-attachment: fixed;
  background-size: cover;
}
</style>
<script src="./../scripts/addUser.js"></script>
<script src="./../scripts/delUser.js"></script>
<script src="./../scripts/navbar.js"></script>

</body>
</html>
