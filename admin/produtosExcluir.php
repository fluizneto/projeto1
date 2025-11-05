<?php
    require_once "config.inc.php";
    $id=$_GET['id'];
//deletando o produto escolhido de acordo com o id
    $sql="DELETE FROM produtos WHERE id=$id";
    $resultado=mysqli_query($conexao,$sql);

    if($resultado){
        //caso o processo se realize
        echo "<h2>Registro devidamente excluido</h2>";
        echo"<a href='?pg=produtos_admin'>Listar Produtos</a>";
    }else{
        echo "<h2>Erro ao excluir produto selecionado</h2>";
        echo "<br><a href='?pg=produtos_admin'>Listar produtos</a>";

    }