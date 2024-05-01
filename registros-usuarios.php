
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabela-usuarios.css">
    <title>Document</title>
</head>
<body>
    
<h2>Dados dos usuários</h2>
<?php
// Inclua o arquivo de conexão
require_once 'conexao.php';

try {
    // Query para selecionar todos os registros da tabela de usuários
    $query = "SELECT * FROM usuarios";
    // Preparando e executando a consulta usando PDO
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verificando se há registros
    if ($resultado) {
        echo "<table border='1'>";
        echo "<tr>
                <th>Nome</th>
                <th>Email</th>
                
                <th>Data de Registro</th>
                <th>Imagem de Perfil</th>
              </tr>";

        // Loop através de cada registro
        foreach ($resultado as $row) {
            echo "<tr>";
            // Exibindo os dados do registro
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
         
            echo "<td>" . htmlspecialchars($row['data_registro']) . "</td>";

            // Exibindo a imagem do perfil, se disponível
            echo "<td>";
            if (!empty($row['img_perfil'])) {
                echo "<img src='pasta_img_perfil/" . htmlspecialchars($row['img_perfil']) . "' alt='Imagem de Perfil' style='width: 120px; height: 120px; border-radius: 50%;'> ";
            } else {
                echo "Nenhuma imagem de perfil disponível";
            }
            echo "</td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum registro encontrado</p>";
    }
} catch (PDOException $e) {
    // Tratamento de erros
    echo "Erro: " . $e->getMessage();
}

// Fim da página HTML
?>

</body>
</html>