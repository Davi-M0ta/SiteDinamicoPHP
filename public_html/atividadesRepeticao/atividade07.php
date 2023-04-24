<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 7</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade07" method="POST">
                        <p> Construa um formulário de solicitação de empréstimos. <br> Construa um script em php que receba os valores dessa tela (valor e número de parcelas) e calcule o valor das
                            parcelas(fixas), considerando o número meses para pagar e a taxa mensal (veja imagem acima). Deve ser
                            exibido um relatório em tabela (table-sm Bootstrap) com as datas, e o valor das prestações. Exibir também
                            o valor dos juros e montante pago pelo solicitante (tela com fundo azul success).</p>
                        <h3>Dados empréstimos:</h3><br>
                        <div class="form-group">
                            <strong>Valor empréstimo</strong>
                            <input class="form-control" type="number" name="valor" autocomplete="off" placeholder="Valor">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><strong>Parcelas</strong></label>
                            <select class="form-control" name="parcelas" id="exampleFormControlSelect1">
                                <option value="0">Selecione o número de parcelas</option>
                                <option value="1">6 meses - taxa 1,2%/m </option>
                                <option value="2">12 meses - taxa 1,8%/m </option>
                                <option value="3">24 meses - taxa 2,0%/m </option>
                                <option value="4">36 meses - taxa 2,5%/m </option>
                                <option value="5">48 meses - taxa 2,8%/m </option>
                            </select>
                        </div>
                        <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Solicitar" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    error_reporting(0);
                    if (isset($_POST['envia'])) {
                        $parcelas = $_POST["parcelas"];
                        $valor = $_POST["valor"];
                        $data = date('Y-m-d');
                        echo "
                            <table class='table table-sm'>
                                <thead class='bg-dark text-white'>
                                    <tr>
                                        <th scope='col'>Data</th>
                                        <th class='text-center' scope='col'>Valor p/ parcela</th>
                                        <th class='text-center' scope='col'>Valor total</th>
                                    </tr>
                                </thead>
                            <tbody>";

                        switch ($parcelas) {
                            case 0:
                                echo "<div class='alert alert-danger' role='alert'>
                                        Selecione o número de parcelas que deseja!</div>";
                                break;
                            case 1:
                                $i = 0.012;
                                $n = 6;
                                break;
                            case 2:
                                $i = 0.018;
                                $n = 12;
                                break;
                            case 3:
                                $i = 0.02;
                                $n = 24;
                                break;
                            case 4:
                                $i = 0.025;
                                $n = 36;
                                break;
                            case 5:
                                $i = 0.028;
                                $n = 48;
                            default:
                                echo "Erro";
                        }

                        $CF = $i / (1 - (1 / (pow((1 + $i), $n))));
                        $parc = ($valor * $CF);
                        $montante = ($n * $parc);

                        $juros = ($montante - $valor);
                        $juros = number_format($juros, 2, ',', '');

                        $valorParcela = ($valor / $n);
                        $valorParcela = number_format($valorParcela, 2, ',', '');
                        $montante = number_format($montante, 2, ',', '');
                        $parc = number_format($parc, 2, ',', '');
                        for ($i = 1; $i <= $n; $i++) {
                            $data = date('d/m/Y', strtotime("+1 month", strtotime($data)));

                            echo "
                                <th scope='row'>$data</th>
                                    <td class='text-center'>R$ $valorParcela + juros</td>
                                    <td class='text-center'>R$ $parc</td>
                                </tr>";
                        }
                        echo "
                                <tr class='table-success'>
                                    <th scope='row'>Total de juros:</th>
                                    <td colspan='3'>R$ $juros</td>
                                </tr>
                                <tr class='table-success'>
                                    <th scope='row'>Montante:</th>
                                    <td colspan='3'>R$ $montante</td>";
                    }
                    ?>

                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd07PrintP1.png" alt="Código da atividade 7 parte 1">

                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd07PrintP2.png" alt="Código da atividade 7 parte 2">

            </div>
        </div>
    </div>

</div>