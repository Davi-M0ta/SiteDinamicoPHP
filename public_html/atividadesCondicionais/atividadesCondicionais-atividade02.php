<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 2</h2>
                <div>
                    <form action="?p=atividadesCondicionais/atividadesCondicionais-atividade02" method="POST">
                        <p>2- Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: equilátero, escaleno ou isósceles.</p>
                        <div class="form-group">
                            <strong>Insira o lado A</strong> <br>
                            <input class="form-control" type="text" name="ladoA" autocomplete="off" id="" placeholder="Lado A">
                        </div>
                        <div class="form-group">
                            <strong>Insira o lado B</strong> <br>
                            <input class="form-control" type="text" name="ladoB" autocomplete="off" id="" placeholder="Lado B">
                        </div>
                        <div class="form-group">
                            <strong>Insira o lado C</strong> <br>
                            <input class="form-control" type="text" name="ladoC" autocomplete="off" id="" placeholder="Lado C">
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

                        $ladoA = $_POST['ladoA'];
                        $ladoB = $_POST['ladoB'];
                        $ladoC = $_POST['ladoC'];

                        if (empty($ladoA) || empty($ladoB) || empty($ladoC)) {
                            echo "Você deixou algum campo em branco.";
                        } else if (($ladoA == $ladoB) and ($ladoB == $ladoC)) {
                            echo "Este é um triângulo <strong>Equilátero</strong> <br> 
                            <img src='atividadesCondicionais\img\Equilatero.png' alt='Triangulo Equilatero'>";
                        } else {
                            if (($ladoA == $ladoB and $ladoA <> $ladoC) || ($ladoB == $ladoC and $ladoB <> $ladoA) || ($ladoA == $ladoC and $ladoC <> $ladoB)) {
                                echo "Este é um triângulo <strong>Isósceles</strong><br>
                                <img src='atividadesCondicionais\img\Isosceles.png' alt='Triangulo Isosceles'>";
                            } else {
                                if ($ladoA <> $ladoB and $ladoA <> $ladoC) {
                                    echo "Este é um triângulo <strong>Escaleno</strong><br>
                                    <img src='atividadesCondicionais\img\Escaleno.png' alt='Triangulo Escaleno'>";
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
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" src="atividadesCondicionais\img\CodigoAtividade02.png" Id="myImg" alt="Print do código">
            </div>
        </div>
    </div>
</div>