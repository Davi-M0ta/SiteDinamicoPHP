<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 1</h2>
                <div>
                    <form action="" method="POST">
                        <p>1. Faça um código php, onde sejam criadas duas variáveis inteiras.
                            Imprima seus valores na tela e em seguida imprima o resultado das
                            quatro operações básicas.</p>

                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    $num1 = 25;
                    $num2 = 10;

                    echo "<p><strong>Número 1:</strong> $num1</p>";
                    echo "<p><strong>Número 2:</strong> $num2</p>";

                    $result = $num1 + $num2; //somando
                    echo "<p><strong>Soma:</strong> " . $result . "</p>";

                    $result = $num1 - $num2; //substração
                    echo "<p><strong>Subtração:</strong> " . $result . "</p>";

                    $result = $num1 * $num2; //multiplicação
                    echo "<p><strong>Multiplicação:</strong> " . $result . "</p>";

                    $result = $num1 / $num2; //divisão
                    echo "<p><strong>Divisão:</strong> " . $result . "</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesBasicas\img\Atvd01Print.png" alt="Código da atividade 1">
            </div>
        </div>
    </div>

</div>