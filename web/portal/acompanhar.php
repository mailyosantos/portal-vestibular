<?php
include "header.php";
?>

<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Inscrição</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<!-- *****************************************************************************************************************
 PHP
 ***************************************************************************************************************** -->

<?php

require "../admin/banco/db_candidato.php";

if (isset($_POST["tAcompanhar"])) {

    $cpf = $_POST["ac_cpf"];
    $candidato = DBSearch_ByCpf($cpf);
    if($candidato == 0){
        echo "<script language='JavaScript'>";
        echo "alert('Não existe inscrição para este CPF.')";
        echo "</script>";
    }
}

?>

<!-- *****************************************************************************************************************
 CONTACT FORMS
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-9">
            <h4>Acompanhamento de Inscrição</h4>
            <div class="hline"></div>
            <form role="form" class="form-format">
                <div class="form-group">
                    <label for="InputData">Status:</label>
                    <input type="text" class="form-control" id="data" disabled="true" value="Inscrição Confirmada em: <?= $candidato["datahora"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputNome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" disabled="true" value="<?= $candidato["nome"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputCpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" disabled="true" value="<?= $candidato["cpf"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputRua">Rua</label>
                    <input type="text" class="form-control" id="rua" disabled="true" value="<?= $candidato["rua"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputNum">Número</label>
                    <input type="text" class="form-control" id="num" disabled="true" value="<?= $candidato["num"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputBai">Bairro</label>
                    <input type="text" class="form-control" id="bairro" disabled="true" value="<?= $candidato["bairro"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputCid">Cidade</label>
                    <input type="text" class="form-control" id="cidade" disabled="true" value="<?= $candidato["cidade"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputCep">CEP</label>
                    <input type="text" class="form-control" id="cep" disabled="true" value="<?= $candidato["cep"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputTel">Telefone Fixo</label>
                    <input type="text" class="form-control" id="tel" disabled="true" value="<?= $candidato["fixo"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputCel">Celular</label>
                    <input type="text" class="form-control" id="cel" disabled="true" value="<?= $candidato["cel"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" disabled="true" value="<?= $candidato["email"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputOpc1">1ª Opção de Curso</label>
                    <input type="text" class="form-control" id="opc1" disabled="true" value="<?= $candidato["opc1"]; ?>">
                </div>
                <div class="form-group">
                    <label for="InputOpc2">2ª Opção de Curso</label>
                    <input type="text" class="form-control" id="opc2" disabled="true" value="<?= $candidato["opc2"]; ?>">
                </div>
            </form>
        </div><! --/col-lg-10 -->

        <div class="col-lg-3">
            <h4>Lembrete</h4>
            <div class="hline"></div>
            <p>Fique atento a data da prova, ela acontecerá dia 12 de dezembro. E não deixe de pagar seu boleto até a data de vencimento para confirmar sua inscrição.</p>
            <p>A prova será realizada no nosso campus com início às 9:00am. Os portões serão abertos uma hora antes.</p>
            <p>Esperamos você!</p>
        </div>
    </div><! --/row -->
</div><! --/container -->


<?php
include "footer.php";
?>