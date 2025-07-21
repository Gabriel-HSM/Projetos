<?php

require "bootstrap.php";
require "header.php";
require "footer.php";
require "conexao.php";

$query = mysqli_query($conexao, 'SELECT * FROM produtos ORDER BY id DESC');


?>

<div class="container mt-2">
    <table class="table text-center table-striped">
  <thead>

  <!--Colunas--> 
  <a class="btn btn-success btn-lg mb-2" href="">CRIAR PRODUTO</a>
  <a class="btn btn-primary btn-lg mb-2 ms-1" href="">CRIAR CATEGORIA</a>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">VALOR</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">AÇÕES</th>
    </tr>
  </thead>

  <!--Linhas-->
  <?php while ($linha = mysqli_fetch_assoc($query)) {?>

  <tbody>
    <tr>
      <th><?=$linha['id']?></th>
      <td><?=$linha['nome']?></td>
      <td><?=$linha['valor']?></td>
      <td><?=$linha['categoria']?></td>
      <td>
        <button class="btn btn-primary btn-sm">Editar</button>
        <button class="btn btn-danger btn-sm">Excluir</button>
        <button class="btn btn-primary btn-sm">Editar</button>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>