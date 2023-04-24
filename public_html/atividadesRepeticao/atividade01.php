<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 1</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade01" method="POST">
                        <p>Criar um script em PHP capaz de verificar se um número lido (GET) é primo ou não.
                            Caso seja primo, mostrar a informação em um alert-success do bootstrap e caso
                            contrário, o resultado a ser exibido deverá ser em uma alert-warning.</p>
                        <div class="form-group">
                            <strong>Insira um número</strong> <br>
                            <input class="form-control" type="number" name="numero" placeholder="Número" autocomplete="off" id="">
                        </div>
                        <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Enviar" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    $divisor = 0;
                    if (isset($_POST["envia"])) {
                        $numero = $_POST["numero"];

                        if (empty($numero)) {
                            echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Você não inseriu nenhum número.
                                    </div>";
                        } else {
                            for ($i = 1; $i <= $numero; $i++) {
                                if ($numero % $i == 0) {
                                    $divisor++;
                                }
                            }
                            if ($divisor == 2 || $numero == 1) {
                                echo "
                                        <div class='alert alert-success' role='alert'>
                                            O número $numero é um número primo!
                                        </div>";
                            } else {
                                echo "
                                        <div class='alert alert-warning' role='alert'>
                                            O número $numero não é um número primo!
                                        </div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd01Print.png" alt="Código da atividade 1">
            </div>
        </div>
    </div>
</div>