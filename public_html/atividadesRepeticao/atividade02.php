<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 2</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade02" method="POST">
                        <p>Elabore um programa em PHP que permita mostrar os números entre o intervalo do número digitado pelo usuário até o cubo desse número.</p>
                        <div class="form-group">
                            <strong>Insira um número</strong> <br>
                            <input class="form-control" type="number" name="n" placeholder="Número" autocomplete="off">
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
                        $n = $_POST["n"];
                        $nCubo = ($n * $n * $n);

                        for ($i = $n; $i <= $nCubo; $i++) {
                            echo "$i ";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd02Print.png" alt="Código da atividade 2">
            </div>
        </div>
    </div>

</div>