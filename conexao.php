<?php
    $servidor = "localhost"; //servidor local
    $usuario = "root";   //usuario root (qualquer)
    $senha = ""; //senha nula
    $banco = "db_famintos"; //nome do banco de dados

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha); //conexão