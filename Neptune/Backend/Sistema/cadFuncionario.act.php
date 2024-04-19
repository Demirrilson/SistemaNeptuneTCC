<?php 
@session_start();


extract($_POST);
var_dump($_POST);

require('connect.php');

if (!empty($nome)) {
mysqli_query($con, "INSERT INTO cadastro 
(Nome, Email, Telefone, Cargo, Salario, 
Endereco, Data_contratacao, Data_demissao,
 Expediente) VALUES 
 ('$nome', '$email', '$telefone',
  '$cargo', '$salario', '$endereco', 
  '$dataContratacao', '$dataDemissao', 
  '$expediente');");

$_SESSION['resposta'] = "Cadastro realizado com sucesso!";
    header("location:cadFuncionario.php"); 
} else {
    $_SESSION['resposta'] = "Erro: Todos os campos são obrigatórios.";
    header("location:cadFuncionario.php");
}

