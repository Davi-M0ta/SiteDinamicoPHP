<div class="container-fluid">
    <div class="container">
        <div class="row ">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 1</h2>
                <div>
                    <form action="?p=atividadesCondicionais/atividadesCondicionais-atividade01" method="POST">
                        <p>1. Entrar com um número e informar se ele é divisível por 3, por 5, por 10 ou se não é divisível por nenhum destes.</p> <br>
                        <div class="form-group">
                            <strong>Informe um número</strong> <br>
                            <input class="form-control" type="text" name="numero" id="" autocomplete="off" placeholder="Número"> <br>
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

                        $numero = $_POST['numero'];
                        if (empty($numero)) {
                            echo "<p>O número não foi declarado.</p>";
                        } else if ($numero % 3 == 0) {
                            echo "<p>$numero é divisível por 3.</p>";
                        } else if ($numero % 5 == 0) {
                            echo "<p>$numero é divisível por 5.</p>";
                        } else if ($numero % 10 == 0) {
                            echo "<p>$numero é divisível por 10.</p>";
                        } else {
                            echo "<p>$numero não é divisível por 3, 5 ou 10.</p>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="text-center">Código PHP</h2>
                    <img class="img-thumbnail imgPrint" id="myImg" src="atividadesCondicionais\img\CodigoAtividade01.png" alt="Print do código">
                </div>
            </div>
        </div>
    </div>
</div>
</div>