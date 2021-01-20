
<!--Deletar dados da criança-->
<?php 
    require('../conexao.php');
    /*Verificação das crianças vinculadas ao email*/
    if (isset($_POST['crianca']) && !empty($_POST['crianca'])){
      $id_usuario = $_POST['crianca'];
    
      $selecionar= "SELECT * FROM crianca WHERE id_crianca = $id_usuario;";
      $result3= mysqli_query($conexao, $selecionar);
      while($dados = $result3 -> fetch_array()){ 
          $del="DELETE FROM dados_crianca WHERE id_dados_crianca= $id_usuario;";
          $del2="DELETE FROM crianca WHERE id_crianca=$id_usuario;";
          mysqli_query($conexao,$del);
          mysqli_query($conexao,$del2);
        }
    };
    $_POST = array();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>



