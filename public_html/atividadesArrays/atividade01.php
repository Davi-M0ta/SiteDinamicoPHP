<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão </h2>
                <div>
                    <form action="" method="POST">
                        <p>1- Faça um script em php que sorteie 15 dezenas para um jogo da Loteria (intervalo de 1 a 25) e armazene em um array. Exiba as dezenas sorteadas em ordem crescente e não permita que se repitam. Cada dezena sorteada deve ser exibida dento de uma div de 100px X 100px, com cantos arredondados com cor a escolher. As divs devem flutuar à esquerda e ter um espaçamento de 5px entre elas.</p>
                        <input class="btn btn-dark" type="submit" name="envia" value="Sortear os números" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    if (isset($_POST['envia'])) {
                        for ($i = 1; $i <= 25; $i++) {
                            $numeros[] = $i;
                        }
                        $rand_keys = array_rand($numeros, 16);
                        array_shift($rand_keys);

                        foreach ($rand_keys as $sorteado) {
                            echo "
                                <div class='text-white text-center' style='width: 100px; height:100px; font-size: 20px; border-radius:10px; margin-right: 5px; margin-top: 10px; padding-left: 3px; padding-top: 29px; padding-left: 3px; background-color: #512D6D; float: left;'>
                                <strong>$sorteado</strong>
                                </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesArrays\img\atvd01Print.png" alt="Código da atividade 1">
            </div>
        </div>
    </div>

</div>