<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Usuários</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<main>
  <div class="titulo-tabela">
 <h2>Registros de usuários</h2>
 </div>
  <div class="tab_usuarios">

    <table border='1' class="tab_head">
  
<tr>
  <th>Imagem</th>
  <th>Nome</th>
  <th>email</th>
  <th>Nível de japonêsf</th>
  <th>Motivos</th>
  <th>preferência</th>
</tr>

      <?php
include "conexao.php";

$select = mysqli_query($mysqli, "SELECT * FROM usuarios");

while ($dUsuario = mysqli_fetch_assoc($select)){
  echo "<tr>
  <td><img src='{$dUsuario['img_perfil']}' alt='Imagem do Perfil'></td>
  
  <td>{$dUsuario['nome']}</td>
  <td>{$dUsuario['email']}</td>
  <td>{$dUsuario['proficiencia']}</td>
  <td>{$dUsuario['objetivos']}</td> 
  <td>{$dUsuario['forma_aprendizado']}</td>
  </tr>";

}
?>

</table>
</div>
<main>
</body>
</html>