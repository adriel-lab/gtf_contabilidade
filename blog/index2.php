<?php
include('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" type="image/x-icon" href="https://i.imgur.com/qiiSm1H.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../assets/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <link href="features.css" rel="stylesheet">

    <style>
        .article-link {
            text-decoration: none;
            /* Remove o sublinhado padrão */
            color: inherit;
            /* Usa a cor do texto padrão do contêiner pai (preto, por exemplo) */
        }

        .article-link:hover {
            color: inherit;
            /* Mantém a cor do texto padrão ao passar o mouse */
        }

        .bg-black {
            background-color: #000;
        }
    </style>

    <style>
        /* Cor padrão do botão btn-primary */
        .btn-primary {
            background-color: #000;
            /* Cor de fundo */
            border-color: #000;
            /* Cor da borda */
            color: #fff;
            /* Cor do texto */
        }

        /* Cor do botão btn-primary no estado :hover */
        .btn-primary:hover {
            background-color: #333;
            /* Cor de fundo no hover */
            border-color: #333;
            /* Cor da borda no hover */
            color: #fff;
            /* Cor do texto no hover */
        }
    </style>

    <style>
        /* Estilo padrão para todas as li */
        .page-link {
            color: #000;
        }

        /* Estilo específico para a li da página ativa */
        .page-item.active {
            background-color: #000;
            /* Cor de fundo da li da página ativa */
            border-color: #000;
            /* Cor da borda da li da página ativa */
            color: #fff;
            /* Cor do texto da li da página ativa */
        }

        /* Estilo específico para a li desativada (disabled) */


        /* Estilo do link da página ativa */
        .page-item.active .page-link {
            background-color: #000;
            /* Cor de fundo do link da página ativa */
            border-color: #000;
            /* Cor da borda do link da página ativa */
            color: #fff;
            /* Cor do texto do link da página ativa */
        }
    </style>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="collection" viewBox="0 0 16 16">
            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
        <symbol id="cpu-fill" viewBox="0 0 16 16">
            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </symbol>
        <symbol id="gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
        </symbol>
        <symbol id="speedometer" viewBox="0 0 16 16">
            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
        </symbol>
        <symbol id="toggles2" viewBox="0 0 16 16">
            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
            <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
        </symbol>
        <symbol id="tools" viewBox="0 0 16 16">
            <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol id="geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
        </symbol>
    </svg>

</head>

<body style="background-color:#fff; color:#000;">

    <!-- Hero Section -->
    <div class="hero bg-black text-light text-center py-5">
        <img src="https://i.imgur.com/WqmElvz.png" style="width: 300px;" />
        <p class="lead">Explore os artigos e as <br> atualizações mais recentes.</p>
    </div>

    <!-- Article Section -->
    <div class="container mt-3">
        <!-- Search Bar -->
        <form action="index.php" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Procurar artigos...">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                <a href="login.php" class="btn btn-primary">Painel</a>
            </div>
        </form>
        <br>
        <h2 class="border-bottom" style="text-align: center;">Artigos mais recentes</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <?php
            $sql1 = "SELECT * FROM articles ORDER BY created_at DESC, id DESC LIMIT 3";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                // Loop através dos resultados e imprime os dados em HTML
                while ($row = $result1->fetch_assoc()) {

            ?>



                    <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $row["link"] ; ?>'); background-size: cover; background-position: center;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h5 class="pt-5 mt-5 mb-4 lh-1 fw-bold">
                                    <?php echo '<a href="article.php?id=' . $row['id'] . '" class="article-link">' . $row["title"] . '</a>'; ?>
                                </h5>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="https://i.imgur.com/qiiSm1H.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill" />
                                        </svg>
                                        <small>GTF</small>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3" />
                                        </svg>
                                        <small><?php echo $row['created_at']; ?> </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



            <?php
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }

            // Fecha a conexão

            ?>



        </div>

        <div class="container px-4 py-5">


            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col d-flex flex-column align-items-start gap-2">
                    <h2 class="fw-bold text-body-emphasis-dark" style="color: #000;">Desbravando as fronteiras da contabilidade: Uma Seleção Cativante dos Artigos em Alta Atualmente</h2>
                    <p class="text-body-dark">Embarque em uma jornada de descoberta e inspiração com nossa seleção exclusiva de artigos em alta! Explore tópicos envolventes e mergulhe em conteúdo cativante que desafia, entretém e expande seus horizontes. Não perca a chance de se atualizar com o que há de mais relevante e impactante.</p>
                  
                </div>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <?php
                        $sql2 = "SELECT * FROM articles ORDER BY RAND() LIMIT 4";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            // Loop através dos resultados e imprime os dados em HTML
                            while ($row2 = $result2->fetch_assoc()) {

                        ?>
                                <div class="col d-flex flex-column gap-2">
                                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-4 rounded-3">
                                        <svg class="bi" width="1em" height="1em" >
                                            <use xlink:href="#collection" />
                                        </svg>
                                    </div>
                                    <h4 class="fw-semibold mb-0 text-body-emphasis-dark">

                                        <?php echo '<a href="article.php?id=' . $row2['id'] . '" class="article-link">' . $row2["title"] . '</a>'; ?>
                                    </h4>
                                   
                                </div>
                        <?php
                            }
                        } else {
                            echo "Nenhum resultado encontrado.";
                        }

                        // Fecha a conexão

                        ?>


                    </div>
                </div>
            </div>
        </div>

        <h1 class="pb-2 border-bottom">Artigos</h1>

        <?php
        // Include your database connection file here


        // Pagination
        $limit = 5;  // Number of articles per page
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;

        // Fetch articles based on search query or all articles
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $articles = [];

        // Apply search filter if a search term is provided
        if ($search != '') {
            $search_term = $conn->real_escape_string($search);
            $sql = "SELECT * FROM articles WHERE title LIKE '%$search_term%'";
        } else {
            $sql = "SELECT * FROM articles ORDER BY created_at DESC, id DESC";
        }

        // Execute the query to get the total number of articles
        $total_result = $conn->query($sql);
        $total_articles = $total_result->num_rows;

        // Modify the SQL query to include pagination
        $sql .= " LIMIT $start, $limit";
        $result = $conn->query($sql);

        $articles = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
        }

        foreach ($articles as $article) {
            echo '<a href="article.php?id=' . $article['id'] . '" class="article-link">';
            echo '<div class="article-preview">';
            echo '<h2>' . $article['title'] . '</h2>';
            echo '<p>' . substr($article['body'], 0, 150) . '...</p>';  // Mostrar os primeiros 150 caracteres do corpo do artigo
            echo '</div>';
            echo '</a>';
            echo '<hr>';
        }

        // Pagination Links
        $total_pages = ceil($total_articles / $limit);
        echo '<nav aria-label="Page navigation">';
        echo '<ul class="pagination justify-content-center">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '">';
            echo '<a class="page-link" href="?page=' . $i . '&search=' . $search . '">' . $i . '</a>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</nav>';

        // Close the database connection
        $conn->close();
        ?>
    </div>
    </div>



    <footer style="background-color: #000;" id="footer">
        <br>
        <br>
        <br>
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info" style="text-align: center;">

                            <img src="../assets/img/logo.png" alt="Descrição da imagem" style="width: 300px;" alt="logo">
                        </div>
                    </div>




                    <div class="col-lg-6 col-md-6"> <!-- Coluna do meio -->
                        <div class="footer-info">
                            <div class="social-links mt-3">
                                <br>
                                <br><br>
                                <strong></strong> <br>
                                <strong></strong> <br>
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center; color:#fff" class="col-lg-3 col-md-6 footer-newsletter">

                    </div>

                </div>
            </div>
            <br>

            <p style="text-align: center; color:#fff"><b>TRANSFORMANDO SONHOS EM NEGÓCIOS.</b></p>

        </div>

        <div style="text-align: center; color:#fff" class="container">
            <hr>
            <div class="copyright">
                &copy; <?php echo date("Y"); ?> Copyright <strong><span>GTF CONTABILIDADE</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
                Desenvolvido e projetado por: <a style="color: inherit;" href="https://adrieldias.netlify.app/">Adriel Dias</a>
            </div>
        </div>
    </footer><!-- End Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>