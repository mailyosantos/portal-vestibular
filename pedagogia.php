<?php
include "header.php";
?>


<!-- *****************************************************************************************************************
 BLUE WRAP
 ***************************************************************************************************************** -->

<?php

require 'admin/banco/conexao.php';

$link = DBConnect();

$query_list = "SELECT * FROM curso WHERE cod='PED'";

if ($result = $link->query($query_list)) {

while ($row = $result->fetch_row()) {

?>

<div id="blue">
    <div class="container">
        <div class="row">
            <h3><?= $row[2] ?></h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<!-- *****************************************************************************************************************
 TITLE & CONTENT
 ***************************************************************************************************************** -->

<div class="container mt">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 centered">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img id="foto01" src="<?php echo "admin/" .$row[7] ?>" alt="">
                    </div>
                    <div class="item">
                        <img id="foto02" src="<?php echo "admin/" . $row[8] ?>" alt="">
                    </div>
                    <div class="item">
                        <img id="foto03" src="<?php echo "admin/" . $row[9] ?>" alt="">
                    </div>
                </div>
            </div><! --/Carousel -->
        </div>

        <div class="col-lg-5 col-lg-offset-1">
            <div class="spacing"></div>
            <div id="conteudo-principal">
                <h4><?= $row[2] ?></h4>
                <div class="hline"></div>
                <p><?= $row[6] ?></p>
            </div>
        </div>

        <div class="col-lg-4 col-lg-offset-1">
            <div class="spacing"></div>
            <h4>Informações do Curso</h4>
            <div class="hline"></div>
            <div id="conteudo-lateral">
                <p><b>Duração:</b> <?= $row[3] ?></p>
                <p><b>Período:</b> <?= $row[4] ?></p>
                <p><b>Mensalidade::</b> <?= $row[5] ?></p>
            </div>
        </div>
        <?php
        }
        }
        DBClose($link);

        ?>
        <br><br>
    </div><! --/row -->
</div><! --/container -->


<?php
include "footer.php";
?>

