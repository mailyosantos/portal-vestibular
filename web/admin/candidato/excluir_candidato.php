<?php
session_start();

if ( !isset($_SESSION['login']) && !isset($_SESSION['senha']) ) {
    session_destroy();

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    header('location: ../../portal/login.php');
}
?>

<?php

require '../banco/db_candidato.php';

$link = DBConnect();

$id = $_GET['id'];

if(isset($id)){
    $query = $link->query("DELETE FROM candidato WHERE idcandidato = $id");
    if($query){
        echo "<script>location.href='../candidatos.php';</script>";
    } else{
        header('location: ../candidatos.php');
    }
}

$query->close();

DBClose($link);
