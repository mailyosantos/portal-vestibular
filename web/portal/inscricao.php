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
 CONTACT FORMS
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-9">
            <h4>Faça sua inscrição!</h4>
            <div class="hline"></div>
            <p>Taxa de Inscrição: R$45,00</p>
            <p>As provas serão realizadas no nosso campus no dia 12/12/2015. Inscrições até 09/12/2015, fique atento ao prazo de pagamento no seu boleto.</p>
            <form id="form_inscricao" class="form-format" name="form_inscricao" method="post" action="#">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="cNome" maxlength="148" placeholder="Nome Completo" autofocus required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cCpf" maxlength="14" placeholder="XXX.XXX.XXX-XX" pattern="\d{3}.\d{3}.\d{3}-\d{2}" required>
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" name="cRua" maxlength="148" placeholder="Nome da Rua" required>
                </div>
                <div class="form-group">
                    <label for="num">Número</label>
                    <input type="text" class="form-control" id="num" name="cNum" placeholder="Número" pattern="(([0-9])\w+)|(([0-9]))"required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="cBairro" maxlength="79" placeholder="Bairro" required>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cCidade" maxlength="148" placeholder="Cidade" required>
                </div>
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cCep" maxlength="12" placeholder="XX.XXX-XXX" required>
                </div>
                <div class="form-group">
                    <label for="tel">Telefone Fixo</label>
                    <input type="text" class="form-control" id="tel" name="cTel" maxlength="15" placeholder="(XX) XXXX-XXXX" pattern="\([1-9]{2}\) (?:[2-8][0-9]|9[1-9])[0-9]{2,3}\-[0-9]{4}" required>
                </div>
                <div class="form-group">
                    <label for="cel">Celular</label>
                    <input type="text" class="form-control" id="cel" name="cCel" maxlength="16" placeholder="(XX) XXXXX-XXXX" pattern="\([1-9]{2}\) (?:[2-8][0-9]|9[1-9])[0-9]{2,3}\-[0-9]{4}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="cEmail" maxlength="79" placeholder="email@exemplo.com.br" pattern='/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2}' required>
                </div>
                <div class="form-group">
                    <label for="table_opc1">Curso - 1ª Opção</label>
                    <table class="table table-responsive" id="table_opc1">
                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="ADM">Administração
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="EFIS">Educação Física
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="ECOMP">Engenharia de Computação
                                </label></th>
                        </tr> <br>

                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="EPROD">Engenharia de Produção
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="EMINAS">Engenharia de Minas
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="EAUTO">Engenharia de Controle e Automação
                                </label></th>
                        </tr> <br>

                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="ECIVIL">Engenharia Civil
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="MVET">Medicina Veterinária
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc1" value="PED">Pedagogia
                                </label></th>
                        </tr>
                    </table>
                </div>
                <div class="form-group">
                    <label for="table_opc2">Curso - 2ª Opção</label>
                    <table class="table table-responsive" id="table_opc2">
                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="ADM">Administração
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="EFIS">Educação Física
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="ECOMP">Engenharia de Computação
                                </label></th>
                        </tr> <br>

                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="EPROD">Engenharia de Produção
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="EMINAS">Engenharia de Minas
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="EAUTO">Engenharia de Controle e Automação
                                </label></th>
                        </tr> <br>

                        <tr>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="ECIVIL">Engenharia Civil
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="MVET">Medicina Veterinária
                                </label></th>
                            <th><label class="radio-inline">
                                    <input type="radio" name="opc2" value="PED">Pedagogia
                                </label></th>
                        </tr>
                    </table>
                </div>
                <input type="submit" class="btn btn-theme" name="tEnviar" id="cEnviar" value="Enviar" />
            </form>
        </div><! --/col-lg-10 -->

        <div class="col-lg-3">
            <h4>Consultar Inscrição</h4>
            <div class="hline"></div>
            <p>Digite seu CPF para acompanhar sua inscrição.</p>
            <form id="acompanhar" method="post" action="acompanhar.php">
                <div class="form-group">
                    <label for="c_cpf">CPF</label>
                    <input type="text" class="form-control" name="ac_cpf" "maxlength="14" required>
                    <input type="submit" class="btn btn-theme" name="tAcompanhar" id="cAcompanhar" value="Acompanhar" />
                </div>
            </form>
        </div>
    </div><! --/row -->
</div><! --/container -->


<!-- *****************************************************************************************************************
 PASSANDO DADOS PARA O PHP
 ***************************************************************************************************************** -->

<?php

require '../admin/banco/db_candidato.php';

if (isset($_POST["tEnviar"])) {

    $candidato = array(
        "nome" => $_POST["cNome"],
        "cpf" => $_POST["cCpf"],
        "rua" => $_POST["cRua"],
        "num" => $_POST["cNum"],
        "bairro" => $_POST["cBairro"],
        "cidade" => $_POST["cCidade"],
        "cep" => $_POST["cCep"],
        "fixo" => $_POST["cTel"],
        "cel" => $_POST["cCel"],
        "email" => $_POST["cEmail"],
        "opc1" => $_POST["opc1"],
        "opc2" => $_POST["opc2"]
    );


    $resultado = DBInsert_Candidato($candidato);

    if ($resultado == 1) {
        echo '<script language="javascript">';
        echo 'alert("Inscrição Concluída com Sucesso!")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Ocorreu um Erro. Tente Novamente!")';
        echo '</script>';
    }
}

?>

<?php
include "footer.php";
?>