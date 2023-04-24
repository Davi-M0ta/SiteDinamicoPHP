<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Questão 2</h2>
                <div>
                    <form action="" method="POST">
                        <p>2- Considerando as diversas funções para tratamento de arrays disponíveis no site oficial da linguagem. Selecione 4 funções e elabore uma explicação do seu funcionamento e construa um exemplo prático (funcional) do uso de cada uma das opções escolhidas. Pode incluir entrada por formulário e exibição dos resultados.</p>

                        <select class="form-control" name="funcao" id="">
                            <option value="0">Selecione uma das funções abaixo:</option>
                            <option value="1">Função array_shift</option>
                            <option value="2">Função array_unique</option>
                            <option value="3">Função array_reverse</option>
                            <option value="4">Função shuffle</option>
                        </select>
                        <input class="btn btn-dark" type="submit" name="envia" value="Enviar" id="">
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-6">
                <h2 class="text-center">Resultado</h2>
                <div>
                    <?php
                    if (isset($_POST['envia'])) {
                        $funcao = $_POST['funcao'];
                        switch ($funcao) {
                            case 0:
                                echo "
                                    <div class='alert alert-danger' role='alert'>
                                        Você não escolheu nenhuma função.
                                    </div>";
                                break;
                            case 1:
                                echo "<div class='text-center'>";
                                echo "<p><strong>Função Array_shift</strong></p>";
                                echo "</div>";
                                echo "<p><strong>O que faz?</strong> Array_shift() retira o primeiro elemento de array e o retorna, diminuindo array em um elemento e movendo todos os outros elementos para trás.</p>";
                                echo "<p><strong>Exemplo:</strong>";
                                $mochila = ['caderno', 'estojo', 'garrafa', 'livro'];
                                echo "<br> • Array Mochila:<br>";
                                print_r($mochila);
                                echo "</p>";
                                echo "<p> • Array após passar pela função array_shift():<br> ";
                                array_shift($mochila);
                                print_r($mochila);
                                echo "</p>";
                                break;
                            case 2:
                                echo "<div class='text-center'>";
                                echo "<p><strong>Função Array_unique</strong></p>";
                                echo "</div>";
                                echo "<p><strong>O que faz?</strong> Array_unique() remove os valores duplicados de um array.</p>";
                                echo "<p><strong>Exemplo:</strong>";
                                echo "<br>• Array Planetas: <br>";
                                $planetas = ['Terra', 'Marte', 'Marte', 'Vênus', 'Jupiter'];
                                print_r($planetas);
                                echo "<br>";
                                echo "<br> • Array após passar pela função array_unique(): <br>";
                                $result = array_unique($planetas);
                                print_r($result);
                                echo "</p>";
                                break;
                            case 3:
                                echo "<div class='text-center'>";
                                echo "<p><strong>Função Array_reverse</strong></p>";
                                echo "</div>";
                                echo "<p><strong>O que faz?</strong> Array_reverse() retorna um array com os elementos na ordem inversa.</p>";
                                echo "<p><strong>Exemplo:</strong>";
                                echo "<br>• Array Números: <br>";
                                $numeros = ['1', '2', '3', '4', '5', '6'];
                                print_r($numeros);
                                echo "<br>";
                                echo "<br> • Array após passar pela função array_reverse(): <br>";
                                $reverse = array_reverse($numeros);
                                print_r($reverse);
                                break;
                            case 4:
                                echo "<div class='text-center'>";
                                echo "<p><strong>Função Shuffle</strong></p>";
                                echo "</div>";
                                echo "<p><strong>O que faz?</strong> Shuffle() mistura os elementos de um array.</p>";
                                echo "<p><strong>Exemplo:</strong>";
                                echo "<br>• Array Letras: <br>";
                                $letras = ['A', 'B', 'C', 'D', 'E'];
                                print_r($letras);
                                echo "<br>";
                                echo "<br> • Array após passar pela função shuffle(): <br>";
                                shuffle($letras);
                                print_r($letras);
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesArrays\img\atvd02Print1.png" alt="Código da atividade ">
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesArrays\img\atvd02Print2.png" alt="Código da atividade ">
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesArrays\img\atvd02Print3.png" alt="Código da atividade ">
                <img class="img-thumbnail imgPrint" id="myImg" src="atividadesArrays\img\atvd02Print4.png" alt="Código da atividade ">
            </div>
        </div>
    </div>

</div>