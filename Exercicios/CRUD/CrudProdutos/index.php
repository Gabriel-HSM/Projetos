<?php
require "requires/bootstrap.php";
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TESTE</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
      <!--<img class="ms-3" src="imagens/caixa-nav.png" alt="caixa aberta vazia" width="50" height="50">-->

        <div class="container-fluid">
          <h1 style="color:White;">Inicio</h1>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="produto/produtoindex.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="categoria/categoriaindex.php">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
        </li>
      </ul>
    </div>

</nav> 
</nav>
<a class="btn btn-lg btn-primary mt-1" href="produto/produtoindex.php">PRODUTO</a>
<a class="btn btn-lg btn-primary mt-1" href="categoria/categoriaindex.php">CATEGORIA</a>

  
</body>
</html>

