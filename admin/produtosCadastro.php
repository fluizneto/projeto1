<?php
    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){//verifica se o método usado é o post
        $produto=$_POST["produto"];
        $preco=$_POST["preco"];
        $estoque=$_POST["estoque"];

        //Transfere as informações recebidas para o banco de dados de produtos
        $sql="INSERT INTO produtos(produto, preco, estoque)
               VALUES ('$produto','$preco','$estoque')";
        $executa=mysqli_query($conexao,$sql);
        if($executa){
            echo"<h2>Cadastro realizado com sucesso!</h2>";
            echo"<a href='?pg=produtos_admin'>Voltar</a>";
        }else{//caso a operaçao falhe
            echo"<h2>Erro no cadastro.</h2>";
            echo"<a href='?pg=produtos_admin'>Voltar</a>";
        }     

    }else{//Caso não seja pelo metodo post
        echo"<h2>Acesso Negado</h2>";
            echo"<a href='?pg=produtos_admin'>Voltar</a>";

    }