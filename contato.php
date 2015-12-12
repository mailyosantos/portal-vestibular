<?php
include "header.php";
?>


<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Contato</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<!-- *****************************************************************************************************************
 CONTACT FORMS
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-12">
            <h4>Entre em contato conosco!</h4>
            <div class="hline"></div>
            <p>Sua mensagem vai ser respondida o mais brevemente possível.</p>
            <form role="form" action="#">
                <div class="form-group">
                    <label for="InputName1">Nome</label>
                    <input type="email" class="form-control" id="nome">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="InputSubject1">Assunto</label>
                    <input type="email" class="form-control" id="assunto">
                </div>
                <div class="form-group">
                    <label for="message1">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-theme">Enviar</button>
            </form>
        </div><! --/col-lg-12 -->
    </div><! --/row -->
</div><! --/container -->


<?php
include "footer.php";
?>
