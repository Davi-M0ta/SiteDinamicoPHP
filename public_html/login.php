<link rel="stylesheet" href="styles\styleCadastro.css">
<div class="container">

    <div class="container">

        <div class="row justify-content-center align-itens-center">
            <p class="h2 text-center titulo">Login</p>
            <div class="col-md-4 col-lg-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="textNome"><strong>Nome</strong></label>
                        <input type="text" name="login" id="textNome" class="form-control" required autocomplete="off" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="inpSenha"><strong>Senha</strong></label>
                        <input type="password" name="senha" id="inpSenha" class="form-control" placeholder="Digite sua senha">
                    </div>
                    <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="logar" value="Logar">
                </form>
            </div>

            <?php
                if(isset($_POST['logar'])){
                    $login = $_POST['login'];
                    $senha = $_POST['senha'];

                    $sql = "SELECT loginNome, senha FROM administradores";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            if(($row['loginNome'] === $login) AND ($row['senha'] === $senha)){
                                $_SESSION['login'] = $row['loginNome'];
                                $log = true;
                                break;
                            }else{
                                $log = false;
                            }
                        }
                    }
                    if($log === true){
                        echo "<meta http-equiv='refresh' content='0; url=?p=apresentacao&login=true'>";
                    }elseif($log === false){
                        echo "<div class='text-center alert alert-danger' role='alert'>
                                <strong>Algo de errado aconteceu!</strong><br>
                                Nome ou senha inválidos.</div>";
                    }
                }
                mysqli_close($conn);
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="img\CodSistema\Login.png" alt="Código PHP">
            </div>
        </div>
    </div>
</div>