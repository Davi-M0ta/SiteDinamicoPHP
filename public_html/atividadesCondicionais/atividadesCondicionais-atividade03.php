<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 3</h2>
                <div>
                    <form action="?p=atividadesCondicionais/atividadesCondicionais-atividade03" method="POST">
                        <p>3. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p>

                        <div class="form-group">
                            <strong>Insira um número inteiro de 1 a 12</strong> <br>
                            <input class="form-control" type="number" name="mes" autocomplete="off" id="" placeholder="Nº do mês">
                        </div>
                        <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Enviar">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    if (isset($_POST["envia"])) {
                        $mes = $_POST['mes'];

                        switch ($mes) {
                            case 1:
                                echo "Fevereiro";
                                break;
                            case 2:
                                echo "Janeiro";
                                break;
                            case 3:
                                echo "Março";
                                break;
                            case 4:
                                echo "Abril";
                                break;
                            case 5:
                                echo "Maio";
                                break;
                            case 6:
                                echo "Junho";
                                break;
                            case 7:
                                echo "Julho";
                                break;
                            case 8:
                                echo "Agosto";
                                break;
                            case 9:
                                echo "Setembro";
                                break;
                            case 10:
                                echo "Outubro";
                                break;
                            case 11:
                                echo "Novembro";
                                break;
                            case 12:
                                echo "Dezembro";
                                break;
                            default:
                                echo "Mês não existente";
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesCondicionais\img\CodigoAtividade03.png" alt="Print do código">
            </div>
        </div>
    </div>
</div>