<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 4</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade04" method="POST">
                        <p>Criar um script em PHP para mostrar o fatorial de um número informado pelo usuário.
                            O cálculo do fatorial é feito da seguinte forma: n! = 1 x ... x n-1 x n Exemplo: 5! = 1 x 2 x 3 x 4 x 5 = 120. O fatorial de 0 é 1. Mostrar mensagem de erro (alert-danger) para números lidos que sejam menores que 0. O fatorial deve ser exibido em um alert-info.</p>
                        <div class="form-group">
                            <strong>Insira um número para ver descobrir seu fatorial</strong><br>
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
                        $numeroInicial = $numero;
                        $fatorial = 1;

                        if (empty($numero)) {
                            echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Você não inseriu nenhum número.
                                    </div>";
                        } else if ($numero < 0) {
                            echo "<div class='alert alert-danger' role='alert '>
                            Número inserido é menor que 0</div>";
                        } else {
                            if ($numero == 0) {
                                echo "<div class='alert alert-secondary' role='alert '>
                            O fatorial de 0 é 1</div>";
                            } else {
                                for ($i = $numero; $i > 1; $i--) {
                                    $fatorial *= $numero;
                                    $numero--;
                                }
                                echo "<div class='alert alert-info' role='alert '>
                            $numeroInicial! = $fatorial</div>";
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
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd04Print.png" alt="Código da atividade 4">
            </div>
        </div>
    </div>

</div>