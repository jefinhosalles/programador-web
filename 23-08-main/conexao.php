<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha ="";
    $sbname = "progweb";

    //Criar a conexao
    $conn = mysqli_connect($servidores, $usuario, $senha, $bdname);

    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "conexao realizada com sucesso";
    }