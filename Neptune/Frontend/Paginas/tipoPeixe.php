<?php 
include('head.php');

?>

<html>
    <body>
        <?php include ('connect.php');?>

        <div class="container">
            <form action="tipoPeixe.act.php" method="post" enctype="multipart/form-data">
                <label>Espécie:</label>
                <input type="text" placeholder="Digite a espécie do peixe..." name="nome" required>

                <input type="submit" value="Cadastrar">
                
            </form>
        </div>

    </body>
</html>