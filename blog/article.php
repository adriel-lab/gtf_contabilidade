<?php
$gtf = " || GTF CONTABILIDADE";
$currentPage = $_SERVER['REQUEST_URI'];
// Include your database connection file here
include('conexao.php');

// Assuming you pass the article ID via URL parameter
$article_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($article_id) {
    // Fetch the specific article based on ID
    $sql = "SELECT * FROM articles WHERE id = $article_id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $article = $result->fetch_assoc();
?>
        <!doctype html>
        <html lang="pt-br" data-bs-theme="auto">

        <head>
            <script src="../assets/js/color-modes.js"></script>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php echo $article['title'] . $gtf; ?></title>
            <link rel="icon" type="image/x-icon" href="https://i.imgur.com/qiiSm1H.png">

            <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
            <style>
                .no-break {
                    white-space: nowrap;
                }

                @media (max-width: 767px) {

                    /* Estilos específicos para dispositivos móveis */
                    .no-break {
                        white-space: normal;
                    }
                }

                .btn-bd-primary {
                    background-color: #000;
                    border-color: #000;
                }

                .btn.show {
                    background-color: #000;
                    border-color: #000;
                }

                .btn:hover {
                    background-color: #000;
                    border-color: #000;
                }

                .dropdown-item.active {
                    background-color: #000;
                }
            </style>

            <!-- Custom styles for this template -->
            <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
            <!-- Custom styles for this template -->
            <link href="blog.css" rel="stylesheet">
        </head>

        <body>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                </symbol>
                <symbol id="circle-half" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                </symbol>
                <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                </symbol>
                <symbol id="sun-fill" viewBox="0 0 16 16">
                    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                </symbol>
            </svg>

            <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
                <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    <span class="visually-hidden" id="bd-theme-text">Aparência</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#sun-fill"></use>
                            </svg>
                            Claro
                            <svg class="bi ms-auto d-none" width="1em" height="1em">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#moon-stars-fill"></use>
                            </svg>
                            Escuro
                            <svg class="bi ms-auto d-none" width="1em" height="1em">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                                <use href="#circle-half"></use>
                            </svg>
                            Auto
                            <svg class="bi ms-auto d-none" width="1em" height="1em">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </symbol>
                <symbol id="cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
                <symbol id="chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </symbol>
            </svg>

            <div class="container">
                <header class="border-bottom lh-1 py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-4 pt-1">
                            <a class="link-secondary" href="#"> <?php echo $article['subjects']  ?> </a>
                        </div>
                        <div class="col text-center">
                            <a class="blog-header-logo text-body-emphasis text-decoration-none no-break" style="font-size: 20px; text-align:center;" href="#">
                                <?php echo $article['title']; ?>
                            </a>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <a class="link-secondary" href="#" aria-label="Search">

                            </a>

                        </div>
                    </div>
                </header>

                <div class="nav-scroller py-1 mb-3 border-bottom">
                    <nav class="nav nav-underline justify-content-between">
                        <a class="nav-item nav-link link-body-emphasis active" href="#">GTF</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Finanças</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Tributos</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Auditoria</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Custos</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Gerencial</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Forense</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Internacional</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Gestão</a>
                        <a class="nav-item nav-link link-body-emphasis" href="#">Software</a>

                    </nav>
                </div>
            </div>

            <main class="container">
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    <div class="col-lg-6 px-0">
                        <h1 class="display-4 fst-italic"><?php echo $article['title']; ?></h1>
                        <p class="lead my-3"><?php echo $article['body']; ?></p>

                    </div>
                </div>


                <div class="row mb-2">
                    <?php
                    $sql2 = "SELECT * FROM articles ORDER BY RAND() LIMIT 2";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        // Loop através dos resultados e imprime os dados em HTML
                        while ($row2 = $result2->fetch_assoc()) {

                    ?>
                            <div class="col-md-6">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $row2['subjects']; ?></strong>
                                        <h5 class="mb-0"><?php echo mb_strlen($row2["title"], 'UTF-8') > 30 ? mb_substr($row2["title"], 0, 28, 'UTF-8') . '...' : $row2["title"]; ?></h5>
                                        <div class="mb-1 text-body-secondary"><?php echo $row2['created_at']; ?></div>
                                        <p class="card-text mb-auto"><?php echo mb_strlen($row2["body"], 'UTF-8') > 85 ? mb_substr($row2["body"], 0, 85, 'UTF-8') . '...' : $row2["body"]; ?></p>
                                        <a href="article.php?id=<?php echo $row2['id']; ?>" target="_blank" class="icon-link gap-1 icon-link-hover stretched-link">
                                            Continue lendo..
                                            <svg class="bi">
                                                <use xlink:href="#chevron-right" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        <?php if (empty($row2["link"])) { ?>
                                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <rect width="100%" height="100%" fill="#55595c" />
                                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagem</text>
                                            </svg>
                                        <?php } else { ?>
                                            <img src="<?php echo $row2["link"]; ?>" alt="Descrição da Imagem" width="200" height="250">
                                        <?php } ?>
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

                <div class="row g-5">
                    <div class="col-md-8">
                        <h3 class="pb-4 mb-4 fst-italic border-bottom">
                            De GTF Contabilidade

                            <a class="mx-1">
                                <i id="shareButton" class="fas fa-share"></i>

                            </a>
                        </h3>

                        <article class="blog-post">
                            <h2 class="display-5 link-body-emphasis mb-1"><?php echo $article['title']; ?></h2>
                            <p class="blog-post-meta"> <?php
                                                        // Matriz de tradução dos nomes dos meses para português
                                                        $meses_em_portugues = array(
                                                            "January"   => "Janeiro",
                                                            "February"  => "Fevereiro",
                                                            "March"     => "Março",
                                                            "April"     => "Abril",
                                                            "May"       => "Maio",
                                                            "June"      => "Junho",
                                                            "July"      => "Julho",
                                                            "August"    => "Agosto",
                                                            "September" => "Setembro",
                                                            "October"   => "Outubro",
                                                            "November"  => "Novembro",
                                                            "December"  => "Dezembro"
                                                        );

                                                        // Exemplo de uso
                                                        $article_created_at = $article['created_at']; // Substitua isso pela variável real da data de criação do artigo
                                                        $timestamp = strtotime($article_created_at);
                                                        $mes_em_portugues = date('F j, Y, g:i a', $timestamp);
                                                        $mes_em_portugues = strtr($mes_em_portugues, $meses_em_portugues);


                                                        ?>Publicado em: <?php echo $mes_em_portugues; ?> por <a href="#">GTF Contabilidade</a></p>

                            </p>

                            <img class="w-100 my-3 random-image" id="randomImage" />

                            <?php
                            function makeBold($text)
                            {
                                // Usando expressão regular para encontrar palavras entre '**' e '**' e colocá-las em negrito
                                $pattern = '/\*\*(.*?)\*\*/';
                                $replacement = '<strong>$1</strong>';
                                $text_with_bold = preg_replace($pattern, $replacement, $text);

                                return $text_with_bold;
                            }
                            ?>
                            <p><?php echo nl2br(makeBold($article['body2'])); ?></p>



                            <nav class="blog-pagination" aria-label="Pagination">
                                <?php
                                // Tags do artigo
                                $tags = $article['tags'];
                                echo '<p><var> Tags: </var></p>';


                                // Verifica se há tags antes de processar
                                if (!empty($tags)) {
                                    // Divide as tags em um array
                                    $tags_array = explode(',', $tags);

                                    // Adiciona '#' no início de cada palavra
                                    $tags_array = array_map(function ($tag) {
                                        return '#' . trim($tag);
                                    }, $tags_array);

                                    // Gera um botão para cada tag
                                    foreach ($tags_array as $tag) {
                                        echo ' ';
                                        echo '<a class="btn btn-outline-primary rounded-pill" href="#">' . $tag . '</a>';
                                    }
                                } else {
                                    // Caso não haja tags, exibe um botão com texto padrão
                                    echo '<a class="btn btn-outline-primary rounded-pill" href="#">No tags available</a>';
                                }
                                ?>

                            </nav>


                    </div>

                    <div class="col-md-4">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 bg-body-tertiary rounded">
                                <h4 class="fst-italic">Sobre nós</h4>
                                <p class="mb-0">O processo de transformar sonhos em negócios é uma jornada emocionante e desafiadora que requer paixão, planejamento sólido e determinação.</p>
                            </div>

                            <div>
                                <h4 class="fst-italic">Postagens recentes</h4>
                                <ul class="list-unstyled">

                                    <?php
                                    $sql3 = "SELECT * FROM articles ORDER BY created_at DESC, id DESC LIMIT 5";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        // Loop através dos resultados e imprime os dados em HTML
                                        while ($row3 = $result3->fetch_assoc()) {

                                    ?>

                                            <li>
                                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="article.php?id=<?php echo $row3['id']; ?>" target="_blank">
                                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                        <?php if (empty($row3["link"])) { ?>
                                                            <rect width="100%" height="100%" fill="#777" />
                                                        <?php } else { ?>
                                                            <image href="<?php echo $row3["link"]; ?>" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" />
                                                        <?php } ?>
                                                    </svg>

                                                    <div class="col-lg-8">
                                                        <h6 class="mb-0"><?php echo $row3['title']; ?></h6>
                                                        <small class="text-body-secondary">

                                                            <?php
                                                            // Matriz de tradução dos nomes dos meses para português
                                                            $meses_em_portugues = array(
                                                                "January"   => "Janeiro",
                                                                "February"  => "Fevereiro",
                                                                "March"     => "Março",
                                                                "April"     => "Abril",
                                                                "May"       => "Maio",
                                                                "June"      => "Junho",
                                                                "July"      => "Julho",
                                                                "August"    => "Agosto",
                                                                "September" => "Setembro",
                                                                "October"   => "Outubro",
                                                                "November"  => "Novembro",
                                                                "December"  => "Dezembro"
                                                            );

                                                            // Exemplo de uso
                                                            $article_created_at = $row3['created_at']; // Substitua isso pela variável real da data de criação do artigo

                                                            // Criar um objeto DateTime
                                                            $dt = new DateTime($article_created_at);

                                                            // Formatando a data
                                                            $mes_em_portugues = $dt->format('F j, Y, g:i a');

                                                            // Traduzindo os meses
                                                            $mes_em_portugues = strtr($mes_em_portugues, $meses_em_portugues);

                                                            echo $mes_em_portugues;
                                                            ?>


                                                        </small>
                                                    </div>
                                                </a>
                                            </li>

                                    <?php
                                        }
                                    } else {
                                        echo "Nenhum resultado encontrado.";
                                    }

                                    // Fecha a conexão

                                    ?>


                                </ul>
                            </div>



                        </div>
                    </div>
                </div>

            </main>
    <?php
    } else {
        echo '<p>No article found with the given ID.</p>';
    }
} else {
    echo '<p>Invalid article ID.</p>';
}

// Close the database connection
$conn->close();
    ?>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
        <p>&copy; <?php echo date("Y"); ?> Copyright <strong><span>GTF CONTABILIDADE</span></strong>. All Rights Reserved</p>

        <p class="mb-0">
            Desenvolvido e projetado por: <a style="color: inherit;" href="https://adrieldias.netlify.app/">Adriel Dias</a>

        </p>
    </footer>
    <script>
        window.onload = function() {
            const imageUrls = [
                "https://i.imgur.com/ercjS5y.png",
                "https://i.imgur.com/G2yCZFU.png",
                "https://i.imgur.com/jq4Ngrf.jpg"
            ];

            const randomImageUrl = imageUrls[Math.floor(Math.random() * imageUrls.length)];
            const randomImageElement = document.getElementById("randomImage");

            if (randomImageElement) {
                randomImageElement.src = randomImageUrl;
            } else {
                console.error("Elemento com id 'randomImage' não encontrado.");
            }
        };
    </script>
    <script>
        let sharing = false; // Variable to track if a sharing operation is in progress

        document.getElementById('shareButton').addEventListener('click', () => {
            if (navigator.share && !sharing) {
                sharing = true; // Set sharing flag to true

                const imageUrl = 'https://i.imgur.com/WqmElvz.png';

                fetch(imageUrl)
                    .then(response => response.blob())
                    .then(blob => {
                        const imageFile = new File([blob], 'LOGO.png', {
                            type: blob.type
                        });

                        navigator.share({
                                title: '<?php echo $article['title']; ?>',
                                text: '<?php echo implode(' ', array_slice(str_word_count($article['body'], 1), 0, 10)); ?>',
                                url: '<?php echo $currentPage; ?>',
                                files: [imageFile]
                            })
                            .then(() => {
                                console.log('Conteúdo compartilhado com sucesso');
                                sharing = false; // Reset sharing flag after successful share
                            })
                            .catch((error) => {
                                console.error('Erro ao compartilhar:', error);
                                sharing = false; // Reset sharing flag after an error
                            });
                    })
                    .catch(error => {
                        console.error('Erro ao carregar a imagem:', error);
                        sharing = false; // Reset sharing flag after an error
                    });
            } else {
                alert('A API Web Share não é suportada neste navegador ou já existe uma operação de compartilhamento em andamento.');
            }
        });
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        </body>

        </html>