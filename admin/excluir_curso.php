<?php
session_start();

if ( !isset($_SESSION['login']) && !isset($_SESSION['senha']) ) {
    session_destroy();

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    header('location: ../../login.php');
}
?>


<?php

require 'banco/db_curso.php';

$link = DBConnect();

$id = $_GET['id'];

if(isset($id)){
    $query = $link->query("DELETE FROM curso WHERE idcurso = $id");
    if($query){
        echo "<script>location.href='cursos.php';</script>";
    } else{
        header('location: ../cursos.php');
    }
}

$stmt->close();

DBClose($link);
