<link rel="stylesheet" href="styles\styleCadastro.css">
<div class="container-fluid">
<?php
    $id = $_GET['id'];
    if(!isset($_SESSION['login'])){
        echo "<meta http-equiv='refresh' content='0; url=?p=login'>";
    }
?>
    <div class="container">
        <div class="row justify-content-center align-itens-center">
            <p class="h2 text-center titulo">Exclui Registro de Cliente <?php echo"(id: $id)"?></p>
            <div class="col-md-4 col-lg-6">
                <?php
                        $sql = "DELETE FROM `usuarios` WHERE  `Id`=$id;";
                        $result = mysqli_query($conn, $sql);
                            if (mysqli_query($conn, $sql)) {
                                echo "
                                    <div class='alert alert-success' role='alert'>
                                        Registro excluido com sucesso!
                                    </div>";
                            } else {
                                echo "
                                    <div class='justify-content-center align-itens-center alert alert-danger' role='alert'>
                                        Erro ao excluir o registro!
                                        " . $sql . " " . mysqli_error($conn) . ";
                                    </div>";
                                }
                        mysqli_close($conn);
                        echo "<script type='text/javascript'>
                                window.location = '?p=ListaClientes'
                            </script>";
                ?>
            </div>
        </div>
    </div>
</div>