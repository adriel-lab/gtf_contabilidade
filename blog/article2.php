

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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['title'] . $gtf; ?></title>
    <link rel="icon" type="image/x-icon" href="https://i.imgur.com/qiiSm1H.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");

        body {
            font-family: "Poppins", sans-serif !important;
        }

        .bold-text {
            font-weight: 600;
            /* 700 is commonly used for bold */
        }
    </style>
</head>

<body>

    <!-- Article Section -->
    <div class="container my-5">
      
                
                <div class="container my-5">
                    <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
                        <div>
                            <small>
                                <a href="#" class="text-primary"> <?php echo $article['subjects']  ?> </a>
                            </small>
                        </div>
                        <h1 class="bold-text text-dark"><?php echo $article['title']; ?></h1>
                        <p class="my-2" style="line-height: 2;"><?php echo $article['body']; ?></p>

                        <div class="my-3 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="https://i.imgur.com/vErj3Y4.png" style="width: 100px;" />

                                <small class="ml-2">
                                    <h5 class="text-primary d-block"> GTF Contabilidade</h5>
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
                                    $article_created_at = $article['created_at']; // Substitua isso pela variável real da data de criação do artigo
                                    $timestamp = strtotime($article_created_at);
                                    $mes_em_portugues = date('F j, Y, g:i a', $timestamp);
                                    $mes_em_portugues = strtr($mes_em_portugues, $meses_em_portugues);


                                    ?>

                                    <span>Publicado em:⠀<?php echo $mes_em_portugues; ?>

                                    </span>
                                </small>
                            </div>
                            <div class="text-primary">
                                <a class="mx-1">
                                    <i id="shareButton" class="fas fa-share"></i>

                                </a>
                                <a href="/#" class="w-6 mx-1">

                                    <!-- Facebook icon SVG -->

                                </a>
                                <a href="/#" class="w-6 mx-1">

                                    <!-- Instagram icon SVG -->

                                </a>
                            </div>
                        </div>

                        <img class="w-100 my-3 random-image" id="randomImage" />

                        <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">

                            <!-- Additional content, e.g., more paragraphs, quotes, etc. -->

                            <!-- Add more content as needed -->

                            <div class="my-3">
                                <small>
                                    <?php
                                    // Tags do artigo
                                    $tags = $article['tags'];

                                    // Verifica se há tags antes de processar
                                    if (!empty($tags)) {
                                        // Divide as tags em um array
                                        $tags_array = explode(',', $tags);

                                        // Adiciona '#' no início de cada palavra
                                        $tags_array = array_map(function ($tag) {
                                            return '#' . trim($tag);
                                        }, $tags_array);

                                        // Junta as palavras novamente
                                        $tags_formatted = implode(', ', $tags_array);

                                        echo $tags_formatted;
                                    } else {
                                        echo 'No tags available';
                                    }
                                    ?>
                                </small>
                            </div>

                        </div>
                    </div>
                </div>
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
    <script>
       window.onload = function () {
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
                    const imageFile = new File([blob], 'LOGO.png', { type: blob.type });

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



</body>

</html>