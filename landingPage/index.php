<?php

    $nome=$_GET["nome"];
    $sobrenome=$_GET["sobrenome"];
    $email=$_GET["email"];
    $perfil=$_GET["perfil"];
    $tipo=$_GET["tipo"];
    $historia=$_GET["historia"];


    echo "Nome: ".$nome."<br/>Sobrenome: ".$sobrenome."<br/>Email: 
                ".$email."<br/>Perfil: ".$perfil."<br/>Tipo de produto que pretende mais comprar/fornecer/vender: ".$tipo."<br/>História: 
                ".$historia."<br/>";
     
?>