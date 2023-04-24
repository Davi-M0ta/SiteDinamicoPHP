<!--Conteúdo-->
<div class="container-fluid">

    <div class="container">

        <div class="row texto-home align-items-center ">
            <div class="col-sm-4 ">
                <img class="img-thumbnail" src="./img/home-img.jpg" alt="Davi da Mota">
            </div>

            <div class="col-sm-8">
                <p class="h4">Informações sobre o Desenvolvedor</p>
                <p><strong>Nome:</strong> Davi Brasil dos Santos da Mota</p>
                <p><strong>Cidade:</strong> Santo Augusto - RS</p>
                <p><strong>Idade:</strong> 16 anos</p>
                <p><strong>Escola:</strong> Instituto Federal de Educação Ciência e Tecnologia Farroupilha (IFFAR) - Campus Santo Augusto</p>

                <p class="h4">Sobre o site</p>
                <p>Esse site foi feito para possibilitar a entrega das atividades de PHP, da matéria de Programação II</p>
            </div>
            <?php
                if(isset($_GET['login'])){
                    if($_GET['login'] == "true" ){
                        echo "<div class='text-center alert alert-success' role='alert'>
                    O login foi realizado com sucesso!</div>";
                    }
                }
            ?>
        </div>
    </div>
</div>