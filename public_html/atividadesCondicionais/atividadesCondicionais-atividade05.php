<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 5</h2>
                <div>
                    <form action="?p=atividadesCondicionais/atividadesCondicionais-atividade05" method="POST">
                        <p>5. Faça um formulário HTML que receba o preço à vista de um determinado produto e a quantidade de parcelas, calcule o preço total a pagar e o valor da prestação mensal, referentes ao pagamento parcelado.
                            Se o pagamento for em duas vezes, acréscimo de 2%; Se parcelado em 3 ou 4 vezes deve ser dado um
                            acréscimo de 5% no total a ser pago. Se o parcelamento for em 5 vezes ou mais, o acréscimo será de 8%.
                        </p>
                        <div class="form-group">
                            <strong>Preço à vista</strong> <br>
                            <input class="form-control" type="number" name="preco" autocomplete="off" id="" placeholder="Preço">
                        </div>
                        <div class="form-group">
                            <strong>Número de parcelas</strong> <br>
                            <input class="form-control" type="number" name="nParcelas" autocomplete="off" id="" placeholder="Parcelas">
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
                        $preco = $_POST['preco'];
                        $nParcelas = $_POST['nParcelas'];

                        if ($nParcelas == '2') {
                            $preco *= 1.02;
                        } elseif ($nParcelas == '3' || $nParcelas == '4') {
                            $preco *= 1.05;
                        } else {
                            $preco *= 1.08;
                        }
                        $mensalidade = $preco / $nParcelas;
                        echo "<p>Total: R$ $preco </p>";
                        echo "<p>Mensal: R$ $mensalidade</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesCondicionais\img\CodigoAtividade05.png" alt="Print do código">
            </div>
        </div>
    </div>
</div>