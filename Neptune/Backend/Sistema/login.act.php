<?php 
@session_start();


extract($_POST);
var_dump($_POST);

require('connect.php');

$sql = "SELECT Cadastro_id, Nome FROM cadastro";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];

        
        $idFuncionario = $_POST['idFuncionario'];


        mysqli_query($con, "INSERT INTO `login` 
    (`Login_id`, `Username`, `Password`, 
    `Last_login`, `Funcionario_id`) 
    VALUES (NULL, '$username', '$password', 
    '$dataLogin', '$idFuncionario');");

        header("Location: login.php");

    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>