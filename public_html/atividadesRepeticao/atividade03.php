<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 3</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade03" method="POST">
                        <p>Elabore um programa em PHP que permita mostrar os valores ímpares entre o cubo de um número digitado pelo usuário até o próprio número (ordem decrescente)</p>
                        <div class="form-group">
                            <strong>Insira um Número</strong><br>
                            <input class="form-control" type="number" name="numero" placeholder="Número" autocomplete="off">
                        </div>
                        <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Enviar" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    if (isset($_POST["envia"])) {
                        $numero = $_POST["numero"];
                        $numeroCubo = ($numero * $numero * $numero);

                        if (empty($numero)) {
                            echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Você não inseriu nenhum número.
                                    </div>";
                        } else {
                            echo "<strong>Número inserido:</strong> $numero<br>";
                            echo "<strong>Número inserido ao cubo:</strong> $numeroCubo <br>";
                            for ($i = $numeroCubo; $i >= $numero; $i--) {
                                if ($i % 2 != 0) {
                                    echo "$i ";
                                }
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
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd03Print.png" alt="Código da atividade 3">
            </div>
        </div>
    </div>

</div>