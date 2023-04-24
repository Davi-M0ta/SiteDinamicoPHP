<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 5</h2>
                <div>
                    <form action="?p=atividadesRepeticao/atividade05" method="POST">
                        <p>Dado um número digitado pelo usuário, apresentar os
                            resultados da tabuada desse numero em uma tabela.</p>
                        <div class="form-group">
                            <strong>Insira um número para ver sua tabuada</strong><br>
                            <input class="form-control" type="number" name="numero" id="" placeholder="Número" autocomplete="off">
                        </div>

                        <input style="background-color: #21094e;" class="btn btn-dark" type="submit" name="envia" value="Enviar" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>

                    <?php
                    if (isset($_POST['envia'])) {
                        $numero = $_POST['numero'];

                        if (empty($numero)) {
                            echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Você não inseriu nenhum número.
                                    </div>";
                        } else {
                            echo "
                                    <table class='table table-striped'>
                                        <thead class='bg-dark text-white'>
                                            <tr>
                                                <th scope='col'>Tabuada do $numero</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>";
                            for ($i = 1; $i <= 10; $i++) {
                                $result = ($numero * $i);
                                echo "<tr><td>$numero x $i = $result</td></tr>";
                            }
                            echo "</tr>
                                </tbody>
                                </table>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesRepeticao\img\atvd05Print.png" alt="Código da atividade 5">
            </div>
        </div>
    </div>

</div>