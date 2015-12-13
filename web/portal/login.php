<?php
    session_start();
    $status = session_status();
    if($status == PHP_SESSION_NONE){
        session_start();
    }else if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
            }

?>

<?php
include "header.php";
?>

<!-- *****************************************************************************************************************
 LOGIN ADMINISTRADOR
 ***************************************************************************************************************** -->
<script src="assets/js/modernizr.js"></script>

<script type="text/javascript">
    function sucesso(){
        setTimeout("window.location='../admin/admin.php', 5000");
    }
    function erro(){
        setTimeout("window.location='login.php', 5000");
    }

</script>

<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Área do Administrador</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Login" name="tLogin" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="tSenha" type="password" required>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-success btn-block" name="tLogar" id="cLogar" value="Login"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>
<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>


<?php

    require '../admin/banco/conexao.php';

    $link = DBConnect();

    if (isset($_POST['tLogar'])) {

        $login = $_POST['tLogin'];
        $senha = $_POST['tSenha'];

        $query_login = "SELECT * FROM login WHERE usuario='$login' AND senha='$senha'";
        $query = $link->query($query_login);

        $rows = mysqli_num_rows($query);

        if($rows != 1){
            echo "<script>alert(\"Login ou senha inválidos !\")</script>";
            echo "<script>erro()</script>";

        } else {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            echo "<script>sucesso()</script>";

        }

    }
    DBClose($link);

?>

<?php
include "footer.php";
?>
