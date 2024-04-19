<?php  
 include('head.php');
 require('connect.php');


 $fornecedor_id = mysqli_real_escape_string($con, $_GET['Fornecedor_id']);

 $query = "SELECT * FROM `fornecedor` WHERE Fornecedor_id = $fornecedor_id";

 $result = mysqli_query($con, $query);

 if(mysqli_num_rows($result) > 0){

    while ($fornecedor = mysqli_fetch_array($result)) {
        ?>

        <div class="info">
        <p>
            <?php echo $fornecedor['Nome']; ?>
        </p>
        
        <p>
            <?php echo $fornecedor['Email']; ?>
        </p>

        <p>
            <?php echo $fornecedor['Telefone']; ?>
        </p>

        <div class="bts-cards">
                <a href="alterarFornecedor.php?Fornecedor_id=<?php echo $fornecedor['Fornecedor_id']; ?>"> 
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
             </div>
        
    </div>  


    <?php }
    } ?>