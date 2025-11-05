<?php

   require_once "config.inc.php";

//verifica o método de envio do formulário
   if($_SERVER['REQUEST_METHOD']=='POST'){
     $produto=$_POST['produto'];
     $preco=$_POST['preco'];
     $estoque=$_POST['estoque'];
     $id=$_POST['id'];
//atualiza as informações alteradas
     $sql="UPDATE produtos SET
        produto='$produto',
        preco=$preco',
        estoque='$estoque',
        WHERE id='$id'";

    $executa=mysqli_query($conexao,$sql);
    if($executa){//verifica se alteração foi feita
        echo "<h2>Alteração concluída.</h2>";
        echo "<a href='?pg=produtos_admin'>Voltar</a>";
    }else{
        echo "<h2>Erro na Alteração</h2>";
        echo "<a href='?pg=produtos_admin'>Voltar</a>";

    }
//caso não seja enviado pelo metodo post
   }else{
     echo "<h2>Acesso Negado</h2>";
        echo "<a href='?pg=produtos_admin'>Voltar</a>";


   }