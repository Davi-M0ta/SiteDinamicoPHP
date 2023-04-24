<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 6</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade06" method="POST">
                        <p>Construa um script que receba uma data de um formulário e exiba em uma tabela zebrada os
                            próximos 24 meses incrementados mês a mês à partir da data recebida</p>
                        <div class="form-group">
                            <strong>Informe uma data</strong>
                            <input class="form-control" type="date" autocomplete="off" name="data">
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

                        $data = $_POST["data"];
                        echo "
                                <table class='table table-striped'>
                                    <thead class='bg-dark text-white'>
                                        <tr>
                                            <th scope='col'>Próximos 24 meses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>";
                        for ($i = 1; $i <= 24; $i++) {
                            $data = date('d-m-Y', strtotime("+1 month", strtotime($data)));
                            echo "<tr><td>$data</td></tr>";
                        }
                        echo "</tr>
                            </tbody>
                            </table>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd06Print.png" alt="Código da atividade 6">
            </div>
        </div>
    </div>

</div>