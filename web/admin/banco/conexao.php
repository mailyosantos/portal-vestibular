<?php

    require 'config.php';

    // Abre a conexão com o banco de dados
    function DBConnect(){
        $link = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die (mysqli_error($link));

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        return $link;
    }

    // Fecha a conexão com o banco de dados
    function DBClose($link){
        @mysqli_close($link) or die(mysqli_error($link));
    }

