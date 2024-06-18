<?php

require_once "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if($mysqli->query($sql)=== TRUE) {
        echo "Usuário deletado com sucesso!";
    }
    else{
        echo"Erro ao deletar usuário!";
    }
    $mysqli->close();
  }
  ?>

  <button onclick="window.location.href='exibir.php'">Voltar</button>