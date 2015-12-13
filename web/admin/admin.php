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
 CONTEÚDO
 ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-12">

            <style type="text/css">
                div.img_centro {
                    margin-top: 150px;
                    margin-left: 450px;
                }
            </style>

            <div class="img_centro">
                <img src="../portal/assets/img/browser.png"
            </div>

        </div><! --/col-lg-12 -->
    </div><! --/row -->
</div><! --/container -->


<?php
include "footer.php";
?>