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
                <h1>Editar Curso</h1>
            </div>
            <div class="col-md-2 text-right">
                <h1><a href="../cursos.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Voltar</a></h1>
            </div>
            <?php

            require '../banco/conexao.php';

            $link = DBConnect();

            $id = $_GET["id"];
            $query_list = "SELECT * FROM curso WHERE idcurso='$id'";

            if ($result = $link->query($query_list)) {

                while ($row = $result->fetch_row()) {

            ?>
            <br/>
            <form role="form" class="form-format" enctype= "multipart/form-data" name="form_curso" method="post" action="#">
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="cNome" maxlength="148" value="<?= $row[2] ?>" autofocus required>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="cod">Código</label>
                        <input type="text" class="form-control" id="cod" name="cCod" maxlength="10" value="<?= $row[1] ?>" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="duracao">Duração</label>
                        <input type="text" class="form-control" id="duracao" name="cDuracao" value="<?= $row[3] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="periodo">Período</label>
                        <input type="text" class="form-control" id="periodo" name="cPeriodo" maxlength="10" value="<?= $row[4] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mensalidade">Mensalidade</label>
                        <input type="text" class="form-control" id="mensalidade" name="cMensalidade" maxlength="14" value="<?= $row[5] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao"  name="cDescricao" class="form-control"  maxlength="999" required><?= $row[6] ?></textarea>
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
 <?php
                }
            }
?>
            <?php
            if(isset($_POST['tEnviar'])){
                $cod = $_POST['cCod'];
                $nome = $_POST['cNome'];
                $duracao = intval($_POST['cDuracao']);
                $periodo = $_POST['cPeriodo'];
                $mensalidade = $_POST['cMensalidade'];
                $descricao = $_POST['cDescricao'];

                $target_path = "fotos/";
                $destination1 = $target_path . $_FILES['foto1']['name'];
                move_uploaded_file($_FILES['foto1']['tmp_name'], $destination1);

                $destination2 = $target_path . $_FILES['foto2']['name'];
                move_uploaded_file($_FILES['foto2']['tmp_name'], $destination2);

                $destination3 = $target_path . $_FILES['foto3']['name'];
                move_uploaded_file($_FILES['foto3']['tmp_name'], $destination3);


                $query = $link->query("UPDATE curso SET cod='$cod', nome='$nome', duracao='$duracao', periodo='$periodo', mensalidade='$mensalidade', descricao='$descricao', foto1='$destination1', foto2='$destination2', foto3='$destination3' WHERE idcurso='$id'");

                if($query){
                    echo '<script language="javascript">';
                    echo 'alert("Editado com Sucesso!")';
                    echo '</script>';
                } else{
                    echo '<script language="javascript">';
                    echo 'alert("Ocorreu um Erro!")';
                    echo '</script>';
                }
            }
            DBClose($link);
            ?>



        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<?php
include "../footer.php";
?>