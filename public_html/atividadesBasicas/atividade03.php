<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 3</h2>
                <div>
                    <form action="" method="POST">
                        <p>3. Construa um código php, em que seja exibida na tela o cálculo do imc
                            de uma pessoa que tem 1,72 m de altura e o peso de 80 kg. <br> Obs: para
                            calcular o IMC utilize a fórmula: imc=peso/altura².</p>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    $altura = 1.72;
                    $peso = 80;
                    $imc = $peso / ($altura * $altura);
                    $arredondado = number_format($imc, 2, ',', ' ');
                    $imc = $arredondado;

                    echo "<p><strong>Altura=</strong> $altura m</p>";
                    echo "<p><strong>Peso=</strong> " . $peso . "Kg</p>";
                    echo "<p><strong>IMC=</strong> " . $imc . "</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesBasicas\img\Atvd03Print.png" alt="Código da atividade 3">
            </div>
        </div>
    </div>

</div>