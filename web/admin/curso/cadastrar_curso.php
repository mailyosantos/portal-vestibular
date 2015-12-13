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
include "../header.php";
?>

<!-- *****************************************************************************************************************
 CONTEÚDO DA PÁGINA
***************************************************************************************************************** -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container mtb">
        <div class="row">
            <div class="col-md-10">
                <h1>Cadastrar Curso</h1>
            </div>
            <div class="col-md-2 text-right">
                <h1><a href="../cursos.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Voltar</a></h1>
            </div>

            <form role="form" class="form-format" enctype= "multipart/form-data" name="form_curso" method="post" action="#">
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="cNome" maxlength="148" pattern="([A-Z]|[a-z])\w+" autofocus required>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cod">Código</label>
                        <input type="text" class="form-control" id="cod" name="cCod" maxlength="10" pattern="([A-Z])\w+" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="duracao">Duração</label>
                        <input type="text" class="form-control" id="duracao" name="cDuracao" pattern="(([0-9])\w+)|(([0-9]))" required>
                    </div>
                    <div class="form-group">
                        <label for="periodo">Período</label>
                        <input type="text" class="form-control" id="periodo" name="cPeriodo" maxlength="10" pattern="([A-Z]|[a-z])\w+" required>
                    </div>
                    <div class="form-group">
                        <label for="mensalidade">Mensalidade</label>
                        <input type="text" class="form-control" id="mensalidade" name="cMensalidade" maxlength="14" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao"  name="cDescricao" class="form-control"  maxlength="999" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto1">Fotos </label>
                        <input id="foto1" name="foto1" type="file" class="filestyle" data-placeholder="No file" required>
                        <input id="foto2" name="foto2" type="file" class="filestyle" data-placeholder="No file" required>
                        <input id="foto3" name="foto3" type="file" class="filestyle" data-placeholder="No file" required>
                    </div>

                    <input type="submit" class="btn btn-theme" name="tEnviar" id="cEnviar" value="Enviar" />
                </div>
            </form>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- *****************************************************************************************************************
 PHP
 ***************************************************************************************************************** -->

<?php

require '../../admin/banco/db_curso.php';

if (isset($_POST["tEnviar"])) {

    $curso = array(
        "cod" => $_POST["cCod"],
        "nome" => $_POST["cNome"],
        "duracao" => intval($_POST["cDuracao"]),
        "periodo" => $_POST["cPeriodo"],
        "mensalidade" => $_POST["cMensalidade"],
        "descricao" => $_POST["cDescricao"],

    );

    $target_path = "fotos/";
    $destination1 = $target_path . $_FILES['foto1']['name'];
    move_uploaded_file($_FILES['foto1']['tmp_name'], $destination1);

    $destination2 = $target_path . $_FILES['foto2']['name'];
    move_uploaded_file($_FILES['foto2']['tmp_name'], $destination2);

    $destination3 = $target_path . $_FILES['foto3']['name'];
    move_uploaded_file($_FILES['foto3']['tmp_name'], $destination3);

    $resultado = DBInsert_Curso($curso, $destination1, $destination2, $destination3);

    if ($resultado == 1) {
        echo '<script language="javascript">';
        echo 'alert("Gravado com Sucesso!")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Ocorreu um Erro. Tente Novamente!")';
        echo '</script>';
    }

}

?>


<?php
include "../footer.php";
?>