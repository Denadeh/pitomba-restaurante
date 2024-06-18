<?php

require_once "connection.php";


$sql = "SELECT * FROM usuarios";
$result = $mysqli->query($sql);


$mysqli->close();
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body>
<div class="container">
    <h2>Lista de Usuários</h2>
    <button onclick="window.location.href='index.html'">Voltar ao Cadastro</button>
    <div id="users-list">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>";
                echo "<button onclick=\"window.location.href='atualizar.php?id=" . $row["id"] . "'\">Atualizar</button>";
                echo "<button onclick=\"window.location.href='delete.php?id=" . $row["id"] . "'\">Excluir</button>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
