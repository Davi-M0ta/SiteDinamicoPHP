<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 4</h2>
                <div>
                    <form action="" method="POST">
                        <p>4. Faça um script php em que sejam declaradas quatro variáveis (n1, n2,
                            n3 e n4), atribua valores a essa variável, calcule a média aritmética e
                            imprima na tela.</p>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    $n1 = 5;
                    $n2 = 2;
                    $n3 = 8;
                    $n4 = 9;

                    $media = ($n1 + $n2 + $n3 + $n4) / 4;

                    echo "<p><strong>Valor número 1:</strong> " . $n1 . "</p>";
                    echo "<p><strong>Valor número 2:</strong> " . $n2 . "</p>";
                    echo "<p><strong>Valor número 3:</strong> " . $n3 . "</p>";
                    echo "<p><strong>Valor número 4:</strong> " . $n4 . "</p>";
                    echo "<p>A Média Aritmética é de <strong> $media pontos </strong>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesBasicas\img\Atvd04Print.png" alt="Código da atividade 4">
            </div>
        </div>
    </div>

</div>