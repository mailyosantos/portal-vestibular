<?php
session_start();

if ( !isset($_SESSION['login']) && !isset($_SESSION['senha']) ) {
    session_destroy();

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    header('location: ../login.php');
}

?>

<?php
include "header.php";
?>

<!-- *****************************************************************************************************************
 CONTACT FORMS
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-10">
                <h1>Lista de Cursos</h1>
            </div>
            <div class="col-md-2 text-right">
                <h1><a href="cadastrar_curso.php" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Novo Curso</a></h1>
            </div>
            <br/>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="20">ID</th>
                    <th width="40">Código</th>
                    <th width="300">Nome</th>
                    <th width="40">Duração</th>
                    <th width="50">Período</th>
                    <th>Mensalidade</th>
                    <th width="400">Descrição</th>
                    <th width="100">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require 'banco/conexao.php';

                $link = DBConnect();

                $query_list = "SELECT * FROM curso";

                if ($result = $link->query($query_list)) {

                    while ($row = $result->fetch_row()) {

                        ?>
                        <tr>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td><?= $row[5] ?></td>
                            <td><?= $row[6] ?></td>
                            <td>
                                <a href="editar_curso.php?id=<?= $row[0] ?>"
                                   class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"
                                                                        aria-hidden="true"></span></a>
                                <a onclick="return confirm('Deseja realmente excluir este curso?')"
                                   href="excluir_curso.php?id=<?= $row[0] ?>"
                                   class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"
                                                                       aria-hidden="true"></span></a>
                            </td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "Ainda não existem registros. Adicione novos!";
                }
                mysqli_free_result($result);

                DBClose($link);
                ?>
                </tbody>
            </table>
        </div><! --/col-lg-12 -->
    </div><! --/row -->
</div><! --/container -->


<?php
include "footer.php";
?>