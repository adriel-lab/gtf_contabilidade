<?php
session_start();
if (!isset($_SESSION['nome_usuario'])) {
    // Se não estiver autenticado, redirecionar para a página de login
    header("Location: login.php");
    exit();
}

$user = $_SESSION['nome_usuario'];
$work = $_SESSION['work'];

include('conexao.php');
function isPageActive($pageName)
{
    // Obtém o caminho do script atual
    $currentPath = $_SERVER['PHP_SELF'];

    // Verifica se o nome da página corresponde ao final do caminho do script
    return (strpos($currentPath, $pageName) !== false);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTF contabilidade | Painel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/qiiSm1H.png" type="image/x-icon">
    <!-- Custom styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .article-buttons {
            text-align: right;
        }
        .btn-bd-primary{
            background-color: #000;
            border-color: #000;
        }
        .btn.show{
            background-color: #000;
            border-color: #000;
        }
        .btn:hover{
            background-color: #000;
            border-color: #000;
        }
        .dropdown-item.active{
            background-color: #000;
        }
    </style>


</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <span class="icon logo" aria-hidden="true"></span>
                        <div class="logo-text">
                            <span class="logo-title">GTF</span>
                            <span class="logo-subtitle">Painel</span>
                        </div>
                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a <?php echo (isPageActive('painel.php') ? 'class="active"' : ''); ?> href="painel.php">
                                <span class="icon home" aria-hidden="true"></span>Painel
                            </a>
                        </li>
                        <li>
                            <a <?php echo (isPageActive('blog.php') ? 'class="active show-cat-btn"' : 'show-cat-btn'); ?> href="">
                                <span class="icon document" aria-hidden="true"></span>Blog
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class=" cat-sub-menu">
                                <li>
                                    <a <?php echo (isPageActive('blog.php') ? 'class="active"' : ''); ?> href="blog.php">Adicionar novo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                      <!-- ! MENU 
                    <span class="system-menu__title">system</span>
                    <ul class="sidebar-body-menu">
                        <li>
                            <a <?php echo (isPageActive('users-01.html') || isPageActive('users-02.html') ? 'class="show-cat-btn active"' : 'show-cat-btn'); ?> href="##">
                                <span class="icon user-3" aria-hidden="true"></span>Users
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a <?php echo (isPageActive('users-01.html') ? 'class="active"' : ''); ?> href="users-01.html">Users-01</a>
                                </li>
                                <li>
                                    <a <?php echo (isPageActive('users-02.html') ? 'class="active"' : ''); ?> href="users-02.html">Users-02</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a <?php echo (isPageActive('settings.php') ? 'class="active"' : ''); ?> href="##">
                                <span class="icon setting" aria-hidden="true"></span>Settings
                            </a>
                        </li>
                    </ul>
                    -->
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="##" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <picture>
                            <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                        </picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title"><?php echo $user; ?></span>
                        <span class="sidebar-user__subtitle"><?php echo $work; ?></span>
                    </div>
                </a>
            </div>
        </aside>


        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">

                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>

                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>

                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">Meu Perfil</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Perfil</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Configurações da Conta</span>
                                    </a></li>
                                <li><a class="danger" href="logout.php">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Sair</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- ! Main -->

            <!-- ! artigos -->


            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Editar Blog</h2>
                    <br>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                        Adicionar novo artigo
                    </button>
                    <br>
                    <br>

                    <!-- Modal inserir -->
                    <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addArticleModalLabel">Adicionar novo artigo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Add your form for adding new articles here -->
                                    <form action="process_add_article.php" method="post">
                                        <div class="mb-3">
                                            <label for="title" style="color: #000;" class="form-label">Assunto</label>
                                            <input type="text" class="form-control" id="title" name="assunto" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="title" style="color: #000;" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" style="color: #000;" class="form-label">Subtitulo</label>
                                            <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" style="color: #000;" class="form-label">Texto</label>
                                            <textarea class="form-control" id="body" name="body2" rows="8" required></textarea>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            <var><b>insira as tags separadas por virgulas </b> </var>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" style="color: #000;" class="form-label">Tags</label>
                                            <input type="text" class="form-control" id="title" name="tags" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" style="color: #000;" class="form-label">Adicione um link de uma imagem</label>
                                            <input type="text" class="form-control" id="title" name="link">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Search Bar -->
                    <form action="blog.php" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Procurar artigos...">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>

                        </div>
                    </form>
                    <div class="row stat-cards">
                        <?php
                        // Pagination settings
                        $articlesPerPage = 12;  // Number of articles per page
                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                        $startArticleIndex = ($currentPage - 1) * $articlesPerPage;

                        // Fetch articles based on search query or all articles
                        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

                        // Apply search filter if a search term is provided
                        if ($searchTerm != '') {
                            $escapedSearchTerm = $conn->real_escape_string($searchTerm);
                            $sql = "SELECT * FROM articles WHERE title LIKE '%$escapedSearchTerm%'";
                        } else {
                            $sql = "SELECT * FROM articles ORDER BY created_at DESC, id DESC";
                        }

                        // Execute the query to get the total number of articles
                        $totalResult = $conn->query($sql);
                        $totalArticles = $totalResult->num_rows;

                        // Modify the SQL query to include pagination
                        $sql .= " LIMIT $startArticleIndex, $articlesPerPage";
                        $result = $conn->query($sql);

                        $articles = array();
                        if ($result) {
                            while ($article = $result->fetch_assoc()) {
                                $articles[] = $article;
                            }
                        }

                        foreach ($articles as $article) {
                        ?>


                            <div class="col-md-6 col-xl-3">
                                <article class="stat-cards-item">
                                    <div class="stat-cards-icon warning">
                                        <i data-feather="file" aria-hidden="true"></i>
                                    </div>
                                    <div class="stat-cards-info">
                                        <p class="stat-cards-info__num"><?php echo substr($article['title'], 0, 29); ?></p>
                                        <p class="stat-cards-info__title"> </p>
                                        <p class="stat-cards-info__progress">
                                            <span class="stat-cards-info__profit success">
                                                <i data-feather="trending-up" aria-hidden="true"></i><?php echo  $article['id']; ?>
                                            </span>
                                            <?php echo  $article['created_at']; ?>
                                        </p>
                                        <div class="article-buttons">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo  $article['id']; ?>">
                                                <i class="fas fa-trash" style="color: red;"></i> <!-- Font Awesome trash icon for Excluir -->
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editModal<?php echo  $article['id']; ?>">
                                                <i class="fas fa-edit" style="color: aqua;"></i> <!-- Font Awesome edit icon for Editar -->
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo  $article['id']; ?>">
                                                <i class="fas fa-eye eye"></i> <!-- Font Awesome eye icon for Visualizar -->
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal<?php echo  $article['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Excluir Artigo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Replace this with your actual delete content -->
                                                <p>Você tem certeza que deseja apagar permanentemente o artigo: <b> <?php echo  $article['title']; ?></b>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                                                <!-- Form for deleting an article -->
                                                <form action="delete_article.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo  $article['id']; ?>">
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal<?php echo  $article['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Editar Artigo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form for editing an article -->
                                                <form action="edit_article.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo  $article['id']; ?>">

                                                    <div class="mb-3">
                                                        <label for="editTitle" class="">Título</label>
                                                        <!-- Display current title -->
                                                        <input type="text" class="form-control" id="editTitle" name="title" value="<?php echo  $article['title']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editTitle" class="">Assunto</label>
                                                        <!-- Display current title -->
                                                        <input type="text" class="form-control" id="editTitle" name="assunto" value="<?php echo  $article['subjects']; ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="editContent" class="">Subtitulo</label>
                                                        <!-- Display current content -->
                                                        <textarea class="form-control" id="editContent" name="body" rows="4" ><?php echo $article['body']; ?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editContent" class="">Texto</label>
                                                        <!-- Display current content -->
                                                        <textarea class="form-control" id="editContent" name="body2" rows="16" ><?php echo $article['body2']; ?></textarea>
                                                    </div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <var><b> insira as tags separadas por virgulas </b> </var>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editTitle" class="">Tags</label>
                                                        <!-- Display current title -->
                                                        <input type="text" class="form-control" id="editTitle" name="tags" value="<?php echo  $article['tags']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editTitle" class="">Link da imagem</label>
                                                        <!-- Display current title -->
                                                        <input type="text" class="form-control" id="editTitle" name="link" value="<?php echo  $article['link']; ?>">
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- View Modal -->
                                <div class="modal fade" id="viewModal<?php echo  $article['id']; ?>" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel">Visualizar Artigo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Replace this with your actual view content -->
                                                <h4><?php echo  $article['title']; ?></h4>
                                                <br>
                                                <p><?php echo $article['body']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php

                        }
                        ?>


                    </div>

                    <!-- Pagination Links -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php
                            $totalPages = ceil($totalArticles / $articlesPerPage);
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<li class="page-item ' . ($i == $currentPage ? 'active' : '') . '">';
                                echo '<a class="page-link" href="?page=' . $i . '&search=' . $searchTerm . '">' . $i . '</a>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </nav>
                    <?php
                    // Close the database connection
                    $conn->close();
                    ?>
                    <!-- ! fim artigos -->
                    <div class="row">
                        <div class="col-lg-9">
                        </div>
                        <div class="col-lg-3">


                        </div>
                    </div>
                </div>
            </main>


            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p><?php
                            $ano_actual = date("Y");
                            echo $ano_actual;
                            ?>
                            © GTF Contabilidade - <a href="https://adrieldias.netlify.app/" target="blank">Desenvolvido e Projetado por Adriel Dias</a></p>
                          
                        </div>
                    <ul class="footer-end">
                        
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
</body>

</html>