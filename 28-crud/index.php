<?php
/// Header
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Emal</th>
          <th>Idade</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Severino</td>
          <td>Joaquim</td>
          <td>severinojoaquim@outlook.com</td>
          <td>54</td>
          <td><a href="" class="btn-floating orange"><i class="material-icons">edit</a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="adicionar.php" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php
/// Footer
include_once 'includes/footer.php';
?>
        