<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
  $foto = mysqli_escape_string($connect, $_POST['foto']);
  $datanasc = mysqli_escape_string($connect, $_POST['datanasc']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE tbusuario SET nome = '$nome', login = '$login', senha = '$senha', telefone = '$telefone', foto = '$foto', datanasc = '$datanasc' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../crudusu.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../crudusu.php');
	endif;
endif;