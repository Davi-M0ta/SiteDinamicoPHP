<!DOCTYPE html>

<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style-Index.css">
    <link rel="shortcut icon" href="img\logoSite2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://dbreskovit.github.io/000Webhost/remove-water-mark.css">

    <script type="text/javascript" src="js\node_modules\jquery\dist\jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="styles\modal.css">
    <title>Repositório de Programação</title>
</head>
<body>

    <header>
        <h2 class="title text-center">Site de Atividades</h2>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #21094E;">
            <div class="container-fluid">

                <a class="navbar-brand nav" href="?p=apresentacao">Atividades</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?p=apresentacao">Início</a>
                        </li>

                        <li class="nav-item">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Básicas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesBasicas/atividade01">Questão 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesBasicas/atividade02">Questão 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesBasicas/atividade03">Questão 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesBasicas/atividade04">Questão 4</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Desvios de Condição
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesCondicionais/atividadesCondicionais-atividade01">Questão 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesCondicionais/atividadesCondicionais-atividade02">Questão 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesCondicionais/atividadesCondicionais-atividade03">Questão 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesCondicionais/atividadesCondicionais-atividade04">Questão 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesCondicionais/atividadesCondicionais-atividade05">Questão 5</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Comandos de Repetição
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade01">Questão 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade02">Questão 2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade03">Questão 3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade04">Questão 4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade05">Questão 5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade06">Questão 6</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesRepeticao/atividade07">Questão 7</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Arrays
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesArrays/atividade01">Questão 1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="?p=atividadesArrays/atividade02">Questão 2</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sistema
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php
                                    if(isset($_SESSION['login'])){
                                                echo "
                                                <li>
                                                    <a class='dropdown-item' href='?p=logout'>Encerrar Login (". $_SESSION['login'] . ")</a>
                                                </li>
                                                <li>
                                                    <a class='dropdown-item' href='?p=BDcadastro'>Cadastro</a>
                                                </li>
                                                <li>
                                                    <a class='dropdown-item' href='?p=ListaClientes'>Lista de Usuários</a>
                                                </li>
                                                ";
                                        }
                                        else{
                                            echo "
                                            <li>
                                                <a class='dropdown-item' href='?p=login'>Login</a>
                                            </li>
                                            ";
                                        }
                                ?>                                                           
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>