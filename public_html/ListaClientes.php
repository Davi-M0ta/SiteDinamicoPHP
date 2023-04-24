<link rel="stylesheet" href="styles\styleCadastro.css">
<div class="container-fluid">
    <script type='text/javascript'>
        function confirmaDelete(id){
            var resposta = confirm("Deseja remover este registro?");
            if (resposta == true){
                window.location.href = "?p=excluiRegistro&id="+id;
            }
        }
    </script>
<div class="container">

    <div class="row">
        <p class="h2 text-center titulo">Usuários Cadastrados</p>

        <div class="col-12 table-responsive">
                <?php
                    error_reporting(0);
                    echo "
                            <table class='table table-hover '>
                                <thead class='text-white' style='background-color: #21094e;'>
                                    <tr>
                                        <th scope='col'>Id</th>
                                        <th scope='col'>Nome</th>
                                        <th scope='col'>CPF</th>
                                        <th scope='col'>E-mail</th>
                                        <th scope='col'>Data de Nascimento</th>
                                        <th scope='col'>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                        ";
                    $sql = "SELECT Id, Nome, Email, Cpf, DataNascimento FROM usuarios;";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $row["DataNascimento"] = date('d/m/Y', strtotime($row['DataNascimento']));
                            echo "<tr>
                                    <td>" . $row['Id'] . "</td>
                                    <td>" . $row['Nome'] . "</td>
                                    <td>" . $row['Cpf'] . "</td>
                                    <td>" . $row['Email'] . "</td>
                                    <td>" . $row['DataNascimento'] . "</td>
                                    <td><a href='?p=BDeditarCadastro&&id=". $row['Id'] ."'><img src='img/edit.png'></a>
                                    <a href=\"javascript:func()\" onclick=\"confirmaDelete('". $row['Id'] ."')\"'>
                                    <img src='img/trash-bin.png'></a></td>
                                </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    mysqli_close($conn);
                ?>

                </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-center" style="margin-top: 20px;">Código PHP</h2>
                <img class="img-thumbnail imgPrint" id="myImg" src="img\CodSistema\ListaClientes1.png" alt="Código PHP">
                <img class="img-thumbnail imgPrint" id="myImg" src="img\CodSistema\ListaClientes2.png" alt="Código PHP">
            </div>
        </div>

    </div>
</div>