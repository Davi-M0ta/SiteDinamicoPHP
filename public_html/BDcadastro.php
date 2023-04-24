<link rel="stylesheet" href="styles\styleCadastro.css">
<div class="container-fluid">
<?php
    if(!isset($_SESSION['login'])){
        echo "<meta http-equiv='refresh' content='0; url=?p=login'>";
    }
?>
    <div class="container">

        <div class="row">
            <p class="h2 text-center titulo">Formulário de Cadastro</p>

            <div class="col-sm-6 col-md-12 col-lg-6">
                <form method="POST" action="?p=BDcadastro">
                    <div class="form-group">
                        <label for="textNome"><strong>Nome completo</strong></label>
                        <input type="text" name="Nome" id="textNome" class="form-control" required autocomplete="off" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="inpEmail"><strong>E-mail</strong></label>
                        <input type="email" name="Email" id="inpEmail" class="form-control" required autocomplete="off" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="inpCpf"><strong>CPF</strong></label>
                        <input type="text" name="cpf" id="inpCpf" class="form-control" autocomplete="off" placeholder="Digite seu CPF" required onkeypress="$(this).mask('000.000.000-00');" maxlength="12">
                    </div>
                    <div class="form-group">
                        <label for="dateNascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="DataNascimento" id="dateNascimento" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inpSenha"><strong>Senha</strong></label>
                        <input type="password" name="senha" id="inpSenha" class="form-control" required placeholder="Digite sua senha">
                    </div>
                    <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Enviar">
                </form>
            </div>

            <div class="col-sm-6 col-md-12 col-lg-6">
                <?php
                    if (isset($_POST['envia'])) {
                        $nome   = $_POST['Nome'];
                        $email  = $_POST['Email'];
                        $cpf    = $_POST['cpf'];
                        $data   = $_POST['DataNascimento'];
                        $senha  = $_POST['senha'];

                        $sql = "INSERT INTO `usuarios` (`Nome`, `Email`, `Cpf`, `DataNascimento`, `Senha`) VALUES ('$nome', '$email', '$cpf', '$data', '$senha');";

                        if (mysqli_query($conn, $sql)) {
                            echo "
                                    <div class='alert alert-success' role='alert'>
                                        Cadastro realizado com sucesso!
                                    </div>";
                        } else {
                            echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Erro ao fazer o cadastro!
                                        " . $sql . " " . mysqli_error($conn) . ";
                                    </div>";
                        }
                        mysqli_close($conn);
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="img\CodSistema\Cadastro.png" alt="Código PHP">
            </div>
        </div>

    </div>
</div>