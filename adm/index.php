<?php
require('../conexao.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    
</head>
<body>
<body>
    <nav class="dp-menu">
        <ul>
            <li><span style="font-size:20px;fonte-style:italic;color:white;cursor:pointer" onclick="openNav()">&#9776; Abrir</span></li>
            <li><a href="../destroy.php">Sair</a></li>
              
            </li>
            <li><img src="../img/logo.png" alt="" class="brand-image img-retangular elevation-2" style="opacity: .8" width="100" height="50" >
        </ul>
    </nav>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./encomendas/formNvEncomenda.html">Adicionar Encomenda</a>
  <a href="./encomendas/listaEncomendas.php">Lista de Encomendas</a>
  <a href="./produto/listaProduto.php">Lista De Roupas</a>
  <a href="./produto/formNvRoupa.html">Adicionar Roupas</a>
  <a href="./cliente/listaCliente.php">Lista de clientes</a>
  <a href="./cliente/FormNvCliente.html">Adicionar Clientes</a>
</div>

<main>
        <div class="gallery-container">
            <a href="../img/roupa5.jpeg" class="gallery-items">
                <img src="../img/roupa5.jpeg" alt="">
            </a>
            <a href="../img/roupa2.jpeg" class="gallery-items">
                <img src="../img/roupa2.jpeg" alt="">
            </a>
            <a href="../img/roupa3.jpeg" class="gallery-items">
                <img src="../img/roupa3.jpeg" alt="">
            </a>
           
           
    </main>
   

<footer class="site-footer">
<span>CristineModas</span>

</footer>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
   
</body>

</html>
</body>