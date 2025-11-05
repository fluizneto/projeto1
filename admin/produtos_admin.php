<?php
   require_once "config.inc.php";
   echo "<a href='?pg=produtos_form'>Cadastrar Produtos</a>";

   echo"<h1>Lista de Produtos</h1>";
   
   
   //recebe as informaçoes da tabela criada e verifica os produtos que constam
   $sql="SELECT * FROM produtos";
   $resultado=mysqli_query($conexao,$sql);
   
    //Se já houver produtos cadastrador, exibe-os na tela. Caso contrário, exibe a mensagem do else
   if(mysqli_num_rows($resultado)>0){
      while($dados=mysqli_fetch_array($resultado)){
         
         echo "id:".$dados ['id']."<br>";
         echo "produto:".$dados ['produto']."<br>";
         echo "preco:".$dados ['preco']."<br>";
         echo "estoque:".$dados ['estoque']."<br>";
         echo " <a href='?pg=produtos_alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=produtosExcluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
      }
   }else{
      echo"<h3>Nenhum produto cadastrado.</h3>";
   }

