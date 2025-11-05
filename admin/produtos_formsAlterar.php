<?php
   
    require_once "config.inc.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM produtos WHERE id='id'";
    $resultado=mysqli_query($conexao,$sql);

    if(mysqli_num_rows($resultado)>0){
        $produto=mysqli_fetch_array($resultado);
    }
    ?>
    <h2>Cadastro de Clientes</h2>
    <form action="?pg=produtos_alterar"method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <label>Produto</label>
        <input type="text" name="produto" value="<?=$produto['produto']?>"><br>
        <label>Preço</label>
        <input type="number" name="preco" value="<?=$produto['preco']?>"><br>
        <label>Estoque</label>
        <input type="number" name="estoque" value="<?=$produto['estoque']?>"><br>

        <input type="submit" value="Atualizar Produto">
    </form>
 <?php
    else{
        echo "<h2>Nenhum produto cadastrado</h2>";
    }
?>
    