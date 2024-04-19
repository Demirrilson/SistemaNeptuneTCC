<?php  
 include('head.php');
 require('connect.php');


 $cadastro_id = mysqli_real_escape_string($con, $_GET['Cadastro_id']);

 $query = "SELECT * FROM `cadastro` WHERE Cadastro_id = $cadastro_id";


 $result = mysqli_query($con, $query);

 if(mysqli_num_rows($result) > 0) {
    
    while ($funcionario = mysqli_fetch_array($result)) {
        ?>

        <div class="info">
        <p>
            <?php echo $funcionario['Nome']; ?>
        </p>

        <p>
            <?php echo $funcionario['Cadastro_id']; ?>
        </p>

        <p>
            <?php echo $funcionario['Email']; ?>
        </p>

        <p>
            <?php echo $funcionario['Telefone']; ?>
        </p>

        <p>
            <?php echo $funcionario['Cargo']; ?>
        </p>

        <p>
            <?php echo $funcionario['Endereco']; ?>
        </p>

        <p>
            <?php echo $funcionario['Data_contratacao']; ?>
        </p>

        <p>
            <?php echo $funcionario['Expediente']; ?>
        </p>
        
    </div>  

    <div class="bts-card">
    <a href="alterar.php?Cadastro_id=<?php echo $funcionario['Cadastro_id']; ?>"> 
            <i class="fa-regular fa-pen-to-square"></i>
            
        </a>
    </div>

    <?php 
    }

    } else{
        echo "Funcionario não encontrado";
    } 
    ?>