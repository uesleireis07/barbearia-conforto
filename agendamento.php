<?php

    $nome = $_POST['nome'];
    $horario = $_POST['horario'];
    $dia = $_POST['dia'];
    $corte = $_POST['corte'];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "barbearia";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    $consulta = "INSERT INTO `agendamento` (`id`, `nome`, `horario`, `dia`, `corte`) VALUES (NULL, '". $nome ."', '". $horario ."', '". $dia ."', '". $corte ."')";
    $result = $conn->query($consulta);
    $conn->close();
       

    header('Location: http://localhost/barbearia-conforto-novo/index.php');
?>  
