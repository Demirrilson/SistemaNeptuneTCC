<?php 
include('head.php');

?>

<html>
    <body>
        <?php include ('connect.php');?>

        <div class="container">
            <form action="cadFuncionario.act.php" method="post" enctype="multipart/form-data">
                <label>Nome:</label>
                <input type="text" name="nome" required>

                <label>E-mail</label>
                <input type="text" name="email" required>

                <label>Telefone</label>
                <input type="number" required placeholder="(xx) xxxxx-xxxx" required="required" pattern="[0-9]+$" name="telefone">

                <label>Cargo</label>
                <input type="text" placeholder="" name="cargo" required>

                <label>Salário</label>
                <input type="number" placeholder="" name="salario" required>

                <label>Endereço</label>
                <input type="text" placeholder="" name="endereco" required>

                <label>Data Contratação</label>
                <input type="date" placeholder="" name="dataContratacao" required>

                <label>Data demissão</label>
                <input type="date" placeholder="" name="dataDemissao" >

                <label>Expediente</label>
                <input type="text" placeholder="" name="expediente" required>

                <input type="submit" value="Cadastrar">
                
            </form>
        </div>
    </body>
</html>
