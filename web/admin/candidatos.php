<?php
session_start();

if ( !isset($_SESSION['login']) && !isset($_SESSION['senha']) ) {
    session_destroy();

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    header('location: ../portal/login.php');
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
                <h1>Lista de Candidatos</h1>
            </div>
            <div class="col-md-2 text-right">
                <h1><a href="candidato/cadastrar_candidato.php" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Novo Candidato</a></h1>
            </div>
            <br/>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th width="250">Nome</th>
                    <th>CPF</th>
                    <th>Rua</th>
                    <th>Num</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Fixo</th>
                    <th>Cel</th>
                    <th>Email</th>
                    <th>1ª Opc</th>
                    <th>2ª Opc</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require 'banco/conexao.php';

                $link = DBConnect();

                $query_list = "SELECT * FROM candidato";

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
                            <td><?= $row[7] ?></td>
                            <td><?= $row[8] ?></td>
                            <td><?= $row[9] ?></td>
                            <td><?= $row[10] ?></td>
                            <td><?= $row[11] ?></td>
                            <td><?= $row[12] ?></td>
                            <td>
                                <a href="candidato/editar_candidato.php?id=<?= $row[0] ?>"
                                   class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"
                                                                        aria-hidden="true"></span></a>
                                <a onclick="return confirm('Deseja realmente excluir este curso?')"
                                   href="candidato/excluir_candidato.php?id=<?= $row[0] ?>"
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