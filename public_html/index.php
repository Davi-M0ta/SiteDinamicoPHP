<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    
    include("conectarBD.php");
    include("header.php");

    if(isset($_GET["p"])){
    $pagina = $_GET["p"];

        if(file_exists($pagina.".php")){
            include ($pagina.".php");
        }else{
            echo "<h1 class='text-center';>Pagina não encontrada!</h1>";
        }
        }else{
            include("apresentacao.php");
        }

    include("footer.php");
?>