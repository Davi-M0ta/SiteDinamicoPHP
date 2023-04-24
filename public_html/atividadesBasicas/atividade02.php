<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 2</h2>
                <div>
                    <form action="" method="POST">
                        <p>2. Faça um código php, onde sejam criadas duas variáveis String,
                            armazene os valores de nome e sobrenome. Concatene seus valores
                            em uma outra chamada nomecompleto. Imprima seus valores na tela.</p>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    $nome = "Davi";
                    $sobrenome = " Brasil dos Santos da Mota";
                    $nomecompleto = $nome . $sobrenome;

                    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
                    echo "<p><strong>Sobrenome:</strong> " . $sobrenome . "</p>";
                    echo "<p><strong>Nome Completo:</strong> " . $nomecompleto . "</p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesBasicas\img\Atvd02Print.png" alt="Código da atividade 2">
            </div>
        </div>
    </div>

</div>