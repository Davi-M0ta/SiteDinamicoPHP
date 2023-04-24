<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 4</h2>
                <div>
                    <form action="?p=atividadesCondicionais/atividadesCondicionais-atividade04" method="POST">
                        <p>4. Faça um script que leia 3 notas e uma letra (‘A’ ou ‘P’). A partir disso, caso a letra escolhida seja ‘A’, calcule e mostre a média aritmética das notas lidas, caso seja ´P’ calcule a média ponderada. Exibir o resultado dentro de uma div de 150x150, com cantos arredondados – caso a nota seja maior ou igual a 7,0 o fundo da div deve ser verde (Aprovado); Se a média estiver entre 5,0 e 6,9 a div deve ter o fundo amarelo (Exame); caso a nota seja menor que 5,0 div vermelha (Reprovado).
                        </p>
                        <div class="form-group">
                            <strong>Insira a letra A ou P</strong> <br>
                            <input class="form-control" type="text" name="letra" autocomplete="off" placeholder="Insira uma letra">
                        </div>
                        <div class="form-group">
                            <strong>Nota 1</strong> <br>
                            <input class="form-control" type="number" name="nota1" autocomplete="off" placeholder="Insira a 1ª nota">
                        </div>
                        <div class="form-group">
                            <strong>Nota 2</strong> <br>
                            <input class="form-control" type="number" name="nota2" autocomplete="off" placeholder="Insira a 2ª nota">
                        </div>
                        <div>
                            <strong>Nota 3</strong> <br>
                            <input class="form-control" type="number" name="nota3" autocomplete="off" placeholder="Insira a 3ª nota">
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
                        $letra = $_POST['letra'];
                        $nota1 = $_POST['nota1'];
                        $nota2 = $_POST['nota2'];
                        $nota3 = $_POST['nota3'];

                        switch ($letra) {
                            case ('A' || 'a'):
                                $media = (($nota1 + $nota2 + $nota3) / 3);
                                break;
                            case ('P' || 'p'):
                                $media = ((($nota1 * 1) + ($nota2 * 2) + ($nota3 * 3)) / 6);
                                break;
                            default:
                                echo "Letra não informada!";
                                break;
                        }
                        $media = number_format($media, 2, ',', ' ');

                        if ($media >= 7.0) {
                            echo "<div class='text-center' style='width: 150px; height: 150px; background-color: #70AD47; border-radius: 25px; padding-top: 3%;'>
                                        <p>Média: $media</p>
                                        <strong>Aprovado</strong>";
                        } else if ($media == 5.0 || $media == 6.9) {
                            echo "<div class='text-center' style='width: 150px; height: 150px; background-color: #FFC000; border-radius: 25px; padding-top: 3%;'>
                                        <p>Média: $media</p>
                                        <strong>Exame</strong>";
                        } else if ($media < 5.0) {
                            echo "<div class='text-center' style='width: 150px; height: 150px; background-color: #FF0000; border-radius: 25px; padding-top: 3%;'>
                                        <p>Média: $media</p>
                                        <strong>Reprovado</strong></div>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="text-center">Código PHP</h2>
                    <img class="img-thumbnail imgPrint" id="myImg" src="atividadesCondicionais\img\CodigoAtividade04.png" alt="Print do código">
                </div>
            </div>
        </div>
    </div>

</div>
</div>