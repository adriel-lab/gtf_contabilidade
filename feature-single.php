<?php include './BD/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<title>GTF CONTABILIDADE - SOBRE</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="www.gtfcontabilidade.com.br">
	<meta name="description" content="GTF CONTABILIDADE">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function(theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
			var el = document.querySelector('.theme-icon-active');
			if (el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
					const activeThemeIcon = document.querySelector('.theme-icon-active use')
					const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
					const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

					document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
						element.classList.remove('active')
					})

					btnToActive.classList.add('active')
					activeThemeIcon.setAttribute('href', svgOfActiveBtn)
				}

				window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
					if (storedTheme !== 'light' || storedTheme !== 'dark') {
						setTheme(getPreferredTheme())
					}
				})

				showActiveTheme(getPreferredTheme())

				document.querySelectorAll('[data-bs-theme-value]')
					.forEach(toggle => {
						toggle.addEventListener('click', () => {
							const theme = toggle.getAttribute('data-bs-theme-value')
							localStorage.setItem('theme', theme)
							setTheme(theme)
							showActiveTheme(theme)
						})
					})

			}
		})
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://i.imgur.com/qiiSm1H.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/vendor/aos/aos.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">

</head>

<body>

	<!-- Header START -->
	<header class="header-sticky header-absolute" data-bs-theme="dark">
		<!-- Logo Nav START -->
		<nav class="navbar navbar-expand-xl">
			<div class="container">
				<!-- Logo START -->
				<a class="navbar-brand me-0" href="index.php">
					<p class="logo">GTF CONTABILIDADE</p>

				</a>
				<!-- Logo END -->

				<!-- Main navbar START -->
				<div class="navbar-collapse collapse" id="navbarCollapse">
					<ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

						<!-- Nav item -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="index.php" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
							<div class="dropdown-menu dropdown-menu-size-lg p-3">
								<div class="row">
									<!-- Image and button -->
									<div class="col-xl-6">
										<div class="card bg-light overflow-hidden h-100 p-3" style="background:url(assets2/images/bg/08.jpg) no-repeat; background-size:cover; background-position:center;">
											<!-- Bg overlay -->
											<div class="bg-overlay bg-dark opacity-5"></div>
											<div class="card-body d-flex justify-content-center text-center flex-column align-items-center position-relative z-index-2 p-0">
												<h5 class="text-white">Faça um orçamento!</h5>
												<a href="https://wa.me/551333030540?text=Vamos+come%C3%A7ar%21" class="btn btn-sm btn-white mb-0">Saiba mais.. <i class="bi bi-arrow-right"></i></a>
											</div>
										</div>
									</div>

									<!-- Index nav links -->
									<div class="col-xl-6">

									</div>

									<!-- CTA -->
									<div class="col-12">
										<hr class="mt-sm-4"> <!-- Divider -->
										<div class="d-sm-flex justify-content-between align-items-center px-2">
											<div class="me-3 mb-2 mb-sm-0">
												<h6 class="mb-2 mb-sm-0">Pronto para começar?</h6>
												<small class="mb-0">Leve sua empresa para o próximo nível com a GTF</small>
											</div>
											<a href="https://wa.me/551333030540?text=Vamos+come%C3%A7ar%21" class="btn btn-sm btn-primary">Entrar em contato</a>
										</div>
									</div>
								</div>
							</div>
						</li>

						<!-- Nav item 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Pages</a>

						</li>

							-->
						<!-- Nav item -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="blog" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
							<div class="dropdown-menu dropdown-menu-center dropdown-menu-size-xl p-3">
								<div class="row g-xl-3">
									<!-- Work -->
									<div class="col-xl-8 d-none d-xl-block">
										<div class="d-flex gap-4">
											<?php
											$sql = "SELECT * FROM articles ORDER BY created_at DESC, id DESC LIMIT 2";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
												// Loop através dos resultados e imprime os dados em HTML
												while ($row = $result->fetch_assoc()) {

											?>
													<!-- Card -->
													<div class="card bg-transparent">
														<!-- Image -->
														<img src="<?php echo $row['link']; ?>" class="card-img" alt="" style="width: 250px; height: 200px;">
														<!-- Card body -->
														<div class="card-body px-0 text-start pb-0">
															<h6><a href="#"><?php echo $row['title']; ?></a></h6>
															<p class="mb-2 small"><?php echo substr($row['body'], 0, 50) . '...'; ?></p>
															<a class="icon-link icon-link-hover stretched-link mb-0" href="/blog/article.php?id=<?php echo $row['id']; ?>" target="_blank">Ler mais...<i class="bi bi-arrow-right"></i> </a>
														</div>
													</div>

											<?php
												}
											} else {
												echo "Nenhum resultado encontrado.";
											}

											// Fecha a conexão

											?>

											<!-- Card -->
										

											<!-- Divider line -->
											<div class="vr ms-2"></div>
										</div>
									</div>

									<!-- Index nav links -->
									<div class="col-xl-4">
										<ul class="list-unstyled">
											<li class="dropdown-header h6">Mais recentes</li>
											<?php
											$sql = "SELECT * FROM articles ORDER BY created_at DESC, id DESC LIMIT 5";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
												// Loop através dos resultados e imprime os dados em HTML
												while ($row = $result->fetch_assoc()) {

											?>
											
											<li> <a href="/blog/article.php?id=<?php echo $row['id']; ?>" target="_blank" class="dropdown-item"><?php echo substr($row['title'], 0, 30) . '...'; ?></a> </li>
											<?php
												}
											} else {
												echo "Nenhum resultado encontrado.";
											}

											// Fecha a conexão

											?>


											<li> <a href="blog" class="dropdown-item">Ver tudo..</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</li>

						<!-- Nav item -->
						<li class="nav-item">
							<a class="nav-link active" href="feature-single.php" id="megaMenu">Sobre nós</a>


						</li>

						<!-- Nav item -->
						<li class="nav-item"> <a class="nav-link" href="contact-v1.php">Contato</a> </li>
					</ul>
				</div>
				<!-- Main navbar END -->

				<!-- Buttons -->
				<ul class="nav align-items-center dropdown-hover ms-sm-2">
					<!-- Dark mode option START -->
					<li class="nav-item dropdown dropdown-animation">
						<button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z">
									<use href="#"></use>
							</svg>
						</button>

						<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
									<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
											<use href="#"></use>
									</svg>Claro
								</button>
							</li>
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
												<use href="#"></use>
									</svg>Escuro
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z">
											<use href="#"></use>
									</svg>Auto
								</button>
							</li>
						</ul>
					</li>
					<!-- Dark mode option END -->

					<!-- Sign up button -->
					<li class="nav-item me-2 d-none d-sm-block">
						<a href="login" class="btn btn-sm btn-light mb-0"><i class="bi bi-person-circle me-1"></i>Painel</a>
					</li>
					<!-- Buy now button -->
					<li class="nav-item d-none d-sm-block">
						<a href="https://wa.me/551333030540?text=Vamos+come%C3%A7ar%21" class="btn btn-sm btn-primary mb-0">Contratar!</a>
					</li>
					<!-- Responsive navbar toggler -->
					<li class="nav-item">
						<button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-animation">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</button>
					</li>
				</ul>

			</div>
		</nav>
		<!-- Logo Nav END -->
	</header>
	<!-- Header END -->

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- =======================
Main hero START -->
		<section class="bg-dark pt-lg-9 pb-7" data-bs-theme="dark">
			<div class="container position-relative pt-4 pt-lg-0">
				<div class="row align-items-center">
					<!-- Title -->
					<div class="col-md-7 col-xl-6 mb-6 mb-md-0">
						<span class="bg-primary bg-opacity-10 text-primary text-uppercase rounded small px-3 py-2">🌎 Sobre a GTF</span>
						<h1 class="h2 my-4">Elevando aspirações à realidade empresarial.</h1>
						<p class="mb-7">Confie a saúde financeira de sua empresa a especialistas comprometidos.<br>
							Estabelecemos conexões humanas, proporcionando atendimento direto e uma equipe exímia.<br>
							Destilamos dados cruciais para embasar as decisões inteligentes de seu empreendimento.<br>
							Reformulamos a contabilidade para nossos clientes, amalgamando tradição e inovação digital.</p>

						<h6 class="text-white fw-normal mb-4">+125 Clientes</h6>
						<p class="mb-7">Em vigor desde 2013, somos uma firma contábil de excelência, que em 2020 abraçou a era tecnológica, conquistando a denominação de contabilidade digital. Por meio de uma operação digitalizada, impulsionamos a eficiência. Entretanto, mantemos a verdadeira essência de nosso serviço, dedicado aos nossos clientes.</p>

						<!-- Client-Slider START -->
						<div class="swiper" data-swiper-options='{
					"loop": false, 
					"slidesPerView": 2, 
					"spaceBetween": 30,
					"breakpoints": { 
						"576": {"slidesPerView": 3}, 
						"768": {"slidesPerView": 3},
						"992": {"slidesPerView": 4}
					}}'>

							<!-- Slider items -->

						</div>
						<!-- Client-Slider END -->
					</div>

					<div class="col-md-4 position-relative ms-auto mb-xl-n9">
						<!-- SVG decoration -->
						<figure class="position-absolute bottom-0 end-0 z-index-1 mb-n6 me-n6 d-none d-lg-block">
							<svg width="167" height="107" viewBox="0 0 167 107" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="fill-white" clip-rule="evenodd" d="M87.1132 1.04286L87.1128 1.04337C86.6896 1.55271 86.2787 2.04727 85.826 2.5C84.8049 3.40765 83.7918 4.32334 82.78 5.23795L82.7799 5.23803L82.7798 5.23811L82.7796 5.23823C80.2242 7.54807 77.6764 9.85101 75.026 12C61.626 22.5 48.226 33 34.926 43.5L9.12598 63.9L9.12586 63.9001C8.7259 64.2001 8.32595 64.5 8.02598 64.8C7.32598 65.4 6.52598 65.8 5.62598 65C4.82598 64.3 5.02598 63.3 5.52598 62.6C6.12598 61.6 6.92598 60.6 7.72598 59.8C8.20935 59.3606 8.69271 58.919 9.17671 58.4769L9.17678 58.4768L9.17686 58.4767L9.17698 58.4766C11.9972 55.9003 14.8387 53.3044 17.826 51C39.426 34.4 61.126 17.9 83.626 2.5C84.826 1.6 86.126 0.8 87.426 0C87.426 0 87.526 0.1 87.826 0.2C87.5789 0.482421 87.3442 0.764841 87.1132 1.04286ZM166.026 21.9C165.676 22.1 165.326 22.325 164.976 22.55C164.626 22.775 164.276 23 163.926 23.2C149.326 31.8 134.926 40.7 120.826 50.2C99.226 64.6 77.826 79.4 57.426 95.4C53.626 98.4 49.926 101.4 46.226 104.4C45.626 104.9 45.126 105.3 44.526 105.7C43.726 106.3 42.926 106.6 42.126 105.9C41.326 105.2 41.526 104.2 42.026 103.5C42.626 102.5 43.326 101.5 44.226 100.7L44.3458 100.59C46.8091 98.3235 49.3691 95.9681 52.026 94C82.426 71 113.626 49.5 146.926 31C150.726 28.8667 154.615 26.9111 158.504 24.9556C160.448 23.9778 162.393 23 164.326 22C164.826 21.8 165.326 21.6 165.726 21.4C165.826 21.5 165.926 21.7 166.026 21.9ZM99.926 8.5C100.626 8 101.226 7.4 101.826 6.8C101.726 6.7 101.626 6.6 101.326 6.5C100.626 7 99.926 7.525 99.226 8.05C98.526 8.575 97.826 9.1 97.126 9.6C93.0918 12.5088 89.0545 15.4176 85.0158 18.3275L85.0151 18.328C65.7284 32.224 46.4088 46.1436 27.226 60.2C21.8311 64.1042 16.7385 68.3108 11.6263 72.5336L11.6262 72.5336C9.53676 74.2595 7.44401 75.9882 5.32601 77.7C3.82601 78.9 2.52601 80.3 1.22601 81.7C0.726013 82.2 0.226013 82.8 0.026013 83.5C-0.073987 84 0.126013 84.7 0.426013 85C0.726013 85.3 1.52601 85.4 1.92601 85.2C2.72601 84.8 3.42601 84.3 4.12601 83.7C6.54336 81.7156 8.93467 79.7052 11.3234 77.6969C15.5554 74.139 19.7794 70.5878 24.126 67.2C34.7347 58.9552 45.3766 50.8101 56.0135 42.669L56.0143 42.6684L56.015 42.6678C63.8265 36.6891 71.6352 30.7125 79.426 24.7C86.3253 19.3005 93.1247 13.9011 99.924 8.50163L99.926 8.5ZM100.426 22C99.326 23 98.226 24 97.026 24.9C93.6956 27.4851 90.3598 30.0703 87.0224 32.6567L87.015 32.6624C76.0246 41.1795 65.0165 49.7104 54.126 58.3C47.6804 63.3921 41.3179 68.5672 34.9849 73.7183C31.4926 76.5588 28.0093 79.3921 24.526 82.2L24.526 82.2001C23.726 82.9 22.926 83.6 22.026 84.1C21.526 84.4 20.426 84.4 20.126 84.1C19.726 83.7 19.626 82.7 19.926 82.2C20.326 81.4 20.926 80.6 21.626 79.9C22.3148 79.2686 22.9953 78.629 23.6771 77.9883L23.6772 77.9882C25.3709 76.3963 27.0722 74.7973 28.926 73.3C48.926 57.5 69.126 42 90.226 27.7C92.5211 26.1427 94.9505 24.5853 97.2941 23.083L97.2943 23.0828C97.8098 22.7524 98.3212 22.4246 98.826 22.1C99.226 21.9 99.626 21.7 100.026 21.4C100.102 21.5146 100.164 21.6 100.217 21.6729L100.217 21.673C100.302 21.791 100.364 21.8764 100.426 22ZM107.355 35.4442C107.542 35.2315 107.732 35.0157 107.926 34.8C107.626 34.6 107.526 34.5 107.526 34.5L107.526 34.5001C106.026 35.6001 104.526 36.7 103.026 37.7C86.326 48.8 70.226 60.7 54.326 72.8C49.6261 76.2999 45.0262 79.8999 40.4262 83.4998L40.426 83.5C39.526 84.2 38.726 85 38.026 85.8C37.426 86.5 37.126 87.4 37.826 88.2C38.526 89.1 39.426 89 40.226 88.5C41.326 87.9 42.426 87.2 43.426 86.4C45.176 85 46.901 83.575 48.626 82.15C50.351 80.725 52.076 79.3 53.826 77.9C65.926 68.4 78.126 58.9 90.326 49.5L105.326 37.5C106.032 36.951 106.676 36.2175 107.355 35.4442Z"></path>
							</svg>
						</figure>

						<!-- Image -->
						<img src="https://i.imgur.com/xDcnXWF.jpg" class="rounded position-relative zindex-2" alt="feature-img">

						<!-- Decoration -->
						<div class="bg-white rounded d-flex align-items-center position-absolute top-0 end-0 mt-n5 px-3 py-2 d-none d-lg-block">
							<p class="text-dark fw-bold mb-0">GTF Contabilidade</p>
							<!-- Avatar -->
							<ul class="mb-0 align-items-center">
								<li class="avatar avatar-xs">
									<img class="avatar-img rounded-circle" src="assets2/images/avatar/06.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-xs">
									<img class="avatar-img rounded-circle" src="assets2/images/avatar/05.jpg" alt="avatar">
								</li>
							</ul>
						</div>

						<!-- Decoration -->
						<div class="card card-body position-absolute bottom-0 start-0 ms-xl-n8 mb-n5">
							<p>Nossos queridos clientes</p>
							<div class="d-flex align-items-center">
								<ul class="avatar-group mb-0 align-items-center">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets2/images/avatar/06.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets2/images/avatar/05.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets2/images/avatar/02.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets2/images/avatar/03.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets2/images/avatar/04.jpg" alt="avatar">
									</li>
								</ul>
								<h6 class="text-white mb-0 ms-2">+80</h6>
							</div>
							<hr>
							<!-- Progress bar -->
							<div class="overflow-hidden">
								<div class="d-flex justify-content-between mb-2">
									<small>Taxa de satisfação</small>
									<small>90%</small>
								</div>
								<div class="progress progress-sm bg-primary bg-opacity-10">
									<div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 90%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Main hero END -->

		<!-- =======================
Core features START -->
		<Section class="pt-xl-9">
			<div class="container pt-xl-6">
				<!-- Title -->
				<div class="inner-container-small text-center mb-4 mb-sm-7">
					<span class="bg-primary bg-opacity-10 text-primary text-uppercase rounded small px-3 py-2">💎 Nossos Recursos </span>
					<h2 class="mb-0 mt-3">O coração da nossa solução</h2>
				</div>

				<div class="row">
					<div class="col-lg-10 mx-auto">
						<!-- Feature item -->
						<div class="row g-4 align-items-center mb-6">
							<div class="col-md-6 pe-md-7">
								<div class="bg-light p-4 rounded-3">
									<img src="https://i.imgur.com/us73MkO.jpeg" alt="">
								</div>
							</div>

							<div class="col-md-6">
								<h3 class="mb-4">
									Parceria Estratégica</h3>
								<p>Na GTF Contabilidade, entendemos que cada empresa é única, enfrentando desafios específicos. Nossa abordagem personalizada, baseada em anos de experiência, garante que você tenha o suporte contábil certo para alcançar seus objetivos.</p>
							</div>
						</div>

						<!-- Feature item -->
						<div class="row g-4 align-items-center mb-6">
							<div class="col-md-6 order-2">
								<h3 class="mb-4">
									Impulsionando Seu Sucesso</h3>
								<p>No coração de nossa abordagem está a compreensão de que cada negócio é único. Na GTF Contabilidade, não aplicamos soluções genéricas. Nossos assessores especializados imergem em sua empresa, compreendendo seus desafios e objetivos.</p>
							</div>

							<div class="col-md-6 ps-md-7 order-md-2">
								<div class="bg-light p-4 rounded-3">
									<img src="https://i.imgur.com/bUI2wVr.png" alt="">
								</div>
							</div>
						</div>

						<!-- Feature item -->
						<div class="row g-4 align-items-center">
							<div class="col-md-6 pe-md-7">
								<div class="bg-light p-4 rounded-3">
									<img src="https://i.imgur.com/cVqmNqz.jpeg" alt="">
								</div>
							</div>

							<div class="col-md-6">
								<h3 class="mb-4">
									Clássica e Digital</h3>
								<p>Na GTF Contabilidade, trazemos o equilíbrio perfeito entre a abordagem clássica e as vantagens da era digital. Nossa filosofia única combina o atendimento humanizado, que coloca você em primeiro lugar, com a eficiência das mais recentes ferramentas de comunicação.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</Section>
		<!-- =======================
Core features START -->

		<!-- =======================
Our solution START -->
		<Section class="pt-0">
			<div class="container">
				<!-- Title -->
				<div class="inner-container-small text-center mb-4 mb-sm-7">
					<span class="bg-primary bg-opacity-10 text-primary text-uppercase rounded small px-3 py-2">Solução final</span>
					<h2 class="mb-0 mt-3">Desbloqueando o sucesso por meio de nossas soluções</h2>
				</div>

				<div class="row g-4 g-lg-5">
					<!-- Iamge -->
					<div class="col-md-5 h-100">
						<img src="https://i.imgur.com/uOyzL4u.jpeg" class="rounded-3" alt="">
					</div>

					<div class="col-md-7 h-100">
						<div class="row g-4 g-lg-5">
							<!-- Feature item -->
							<div class="col-lg-6">
								<div class="card bg-light rounded h-100 overflow-hidden p-5">
									<!-- Card body -->
									<div class="card-body bg-transparent p-0">
										<div class="badge text-bg-dark mb-3">🔃 Recursos</div>
										<p class="small mb-0">Eleve seu negócio a patamares sem precedentes com as ferramentas certas hoje</p>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent text-end p-0 mt-3">
										<span class="fs-1 fw-semibold heading-color">+42%</span>
									</div>
								</div>
							</div>

							<!-- Feature item -->
							<div class="col-lg-6">
								<div class="card bg-light rounded h-100 overflow-hidden p-5">
									<!-- Card body -->
									<div class="card-body bg-transparent p-0">
										<div class="badge text-bg-primary mb-3">🔎 Análise</div>
										<p class="small mb-0">Alcance novos horizontes para o seu empreendimento ao adotar as ferramentas adequadas agora</p>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent text-end p-0 mt-3">
										<span class="fs-1 fw-semibold heading-color">+5X</span>
									</div>
								</div>
							</div>

							<!-- Feature item -->
							<div class="col-12">
								<div class="card bg-light rounded h-100 overflow-hidden p-5">
									<!-- Card body -->
									<div class="card-body bg-transparent p-0">
										<div class="badge text-bg-danger mb-3">💰 Receita</div>
										<p class="small mb-0">Libere todo o potencial do seu negócio e eleve-o a novos patamares, aproveitando o poder das ferramentas e tecnologias de ponta disponíveis atualmente na contabilidade.</p>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent text-end p-0 mt-3">
										<span class="fs-1 fw-semibold heading-color">+$$$</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</Section>
		<!-- =======================
Our solution END -->

		<!-- =======================
CTA START -->
		<section class="position-relative z-index-2 pt-0">
			<div class="container position-relative">
				<div class="bg-dark rounded position-relative overflow-hidden p-4 p-sm-7">
					<!-- SVG decoration -->
					<figure class="position-absolute top-0 start-0 mt-n5">
						<svg class="fill-white" style="opacity:0.02" width="662" height="614" viewBox="0 0 662 614" xmlns="http://www.w3.org/2000/svg">
							<path d="M-78 0V603.815C-61.4821 612.795 -44.1025 615.867 -28.4464 611.85C9.04192 602.16 38.9177 554.186 58.4519 503.612C77.8424 453.511 90.1949 397.029 105.995 343.383C121.794 289.973 142.477 237.745 173.215 206.549C224.779 154.321 291.425 172.991 349.166 202.768C406.907 232.545 466.227 272.248 525.979 256.414C570.505 244.598 611.441 200.878 636.002 138.724C652.233 97.6029 661.138 48.9196 662 0L-78 0Z"></path>
						</svg>
					</figure>

					<!-- SVG decoration -->
					<figure class="position-absolute top-0 end-0 mt-n5 me-n5">
						<svg class="fill-primary opacity-2" width="220px" height="209px" viewBox="0 0 220 209" style="enable-background:new 0 0 220 209;" xml:space="preserve">
							<path d="M84.3,120.6c-1.1-0.3-1.9-0.8-2.4-1.6c-1-1.4-0.7-3.3,0.8-5.2l15.9-21.1c2.2-2.9,6.5-5.3,10.6-5.8 c2.3-0.3,4.2,0,5.4,1l14.9,11.6c1,0.8,1.4,1.9,1.2,3.2c-0.6,3.1-4.6,6.5-9.3,8l-30.9,9.5C88.2,121,85.9,121.1,84.3,120.6z  M112.7,87.7c-1-0.3-2.1-0.3-3.4-0.1c-3.9,0.5-8.1,2.8-10.1,5.6l-15.9,21.1c-1.3,1.7-1.6,3.3-0.8,4.5c1.2,1.7,4.3,2,8,0.9 l30.8-9.5c5.2-1.6,8.4-5,8.9-7.5c0.2-1.1-0.1-2-1-2.6l-14.9-11.6C113.8,88.1,113.3,87.9,112.7,87.7z"></path>
							<path d="M82.9,123.4c-1-0.3-1.8-0.7-2.4-1.4c-1.1-1.4-1-3.3,0.4-5.4l15.2-23.5c3.5-5.4,12.9-8.9,17-6.3l17.8,11.1 c1.2,0.8,1.8,1.9,1.6,3.3c-0.3,3.3-4.4,7.2-9.4,9l-32.9,12.4C87.5,123.6,84.9,123.9,82.9,123.4z M111.6,86.7 c-4.3-1.1-11.9,2.1-14.9,6.7l-15.2,23.5c-1.2,1.9-1.4,3.5-0.5,4.7c1.4,1.8,5.1,1.9,9,0.4l32.9-12.4c5.5-2.1,8.7-5.9,9-8.5 c0.1-1.2-0.3-2.1-1.4-2.7l-17.8-11.1C112.5,87,112.1,86.9,111.6,86.7z"></path>
							<path d="M81.7,126.3c-0.9-0.3-1.7-0.7-2.3-1.3c-1.3-1.3-1.3-3.3,0-5.6l14.1-25.9c3.3-6,13.2-10.4,18-8l20.8,10.3 c1.4,0.7,2.2,1.9,2.2,3.5c-0.1,3.5-4,7.8-9.3,10.2l-34.9,15.6C87,126.5,83.9,126.9,81.7,126.3z M110.3,85.8 c-4.8-1.3-13.4,2.9-16.2,8.1l-14.1,25.9c-1.1,2-1.1,3.7-0.1,4.9c1.4,1.5,5.1,2.1,10.1-0.1l34.9-15.6c5.7-2.6,8.9-6.8,8.9-9.6 c0-1.3-0.6-2.3-1.8-2.9l-20.8-10.3C111,86,110.6,85.9,110.3,85.8z"></path>
							<path d="M80.7,129.6c-0.9-0.2-1.6-0.6-2.2-1.2c-1.4-1.3-1.6-3.4-0.5-5.8l12.7-28.4c2.9-6.6,13.4-11.9,18.9-9.8 l24.1,9.3c1.7,0.7,2.7,1.9,2.8,3.6c0.2,3.7-3.6,8.4-9.1,11.3l-36.8,19.1C86.9,129.6,83.2,130.2,80.7,129.6z M108.8,84.8 c-5.3-1.4-14.9,3.7-17.5,9.7l-12.7,28.4c-1,2.1-0.8,4,0.4,5.1c1.7,1.6,5.9,2,11.3-0.8L127,108c5.9-3.1,9-7.8,8.8-10.7 c-0.1-1.4-0.9-2.5-2.4-3L109.3,85C109.2,84.9,109,84.9,108.8,84.8z"></path>
							<path d="M79.9,133c-0.8-0.2-1.5-0.5-2.1-1c-1.6-1.3-2-3.4-1.1-5.9l10.8-30.9c2.5-7.1,13.4-13.6,19.7-11.8l27.5,7.9 c2,0.6,3.2,1.9,3.4,3.7c0.5,3.8-3.2,9.1-8.8,12.4l-38.3,23C87,132.9,82.8,133.8,79.9,133z M107,84c-6-1.6-16.5,4.7-18.8,11.4 l-10.8,30.9c-0.8,2.3-0.5,4.1,0.9,5.3c2.4,2,7.6,1.3,12.5-1.7l38.3-23c6.1-3.7,8.9-8.7,8.5-11.8c-0.2-1.6-1.2-2.7-3-3.2L107.2,84 C107.1,84,107.1,84,107,84z"></path>
							<path d="M79.5,136.8c-0.7-0.2-1.3-0.5-1.9-0.9c-1.8-1.3-2.4-3.4-1.7-6.1l8.5-33.4c2-7.7,13.2-15.4,20.4-14l31.2,6.2 c2.3,0.5,3.8,1.8,4.2,3.8c0.8,4.1-2.6,9.6-8.4,13.6L92,133.3C87.5,136.4,82.8,137.7,79.5,136.8z M136.2,89.4 c-0.1,0-0.3-0.1-0.5-0.1l-31.2-6.2c-6.8-1.3-17.8,6.2-19.6,13.5L76.4,130c-0.6,2.4-0.1,4.3,1.5,5.4c2.9,2,8.6,0.9,13.8-2.6 l39.7-27.2c6.2-4.3,8.8-9.7,8.1-12.9C139.1,91,138,89.9,136.2,89.4z"></path>
							<path d="M79.3,140.7c-0.6-0.2-1.1-0.4-1.6-0.7c-2-1.2-2.9-3.4-2.4-6.2L80.9,98c1.3-8.2,12.8-17.2,20.9-16.3l35.1,4.1 c2.7,0.3,4.5,1.7,5.1,3.9c1.2,4.2-2,10.3-7.8,14.7l-40.7,31.8C88.5,140,83,141.7,79.3,140.7z M136.7,86.2l0,0.3l-35.1-4.1 c-7.6-0.9-18.9,7.9-20.2,15.7l-5.6,35.8c-0.4,2.6,0.3,4.5,2.1,5.6c3.4,2,9.6,0.5,15-3.8l40.7-31.7c5.6-4.3,8.7-10.1,7.6-14.1 c-0.5-2-2.1-3.2-4.6-3.4L136.7,86.2z"></path>
							<path d="M79.5,144.9c-0.4-0.1-0.9-0.3-1.3-0.5c-2.3-1.1-3.4-3.3-3.3-6.3l2.2-38.2c0.5-8.8,12.2-19.1,21.2-18.8 l39.1,1.6c3.1,0.1,5.3,1.5,6.1,3.9c1.5,4.3-1.4,10.8-7,15.9l-41.3,36.6C90,143.8,83.8,146,79.5,144.9z M137.4,83.1l0,0.3 l-39.1-1.6c-8.5-0.3-20,9.8-20.5,18.2l-2.2,38.2c-0.2,2.7,0.8,4.7,2.9,5.7c4,1.9,10.7-0.2,16.3-5.1l41.3-36.6 c5.5-4.9,8.3-11.1,6.8-15.2c-0.8-2.2-2.7-3.4-5.5-3.5L137.4,83.1z"></path>
							<path d="M80.2,149.2c-0.3-0.1-0.6-0.2-0.8-0.3c-2.6-1-4.1-3.2-4.2-6.3l-1.8-40.4c-0.2-4.1,2-9,6.1-13.3 c4.5-4.8,10.3-7.9,15.1-8.1l43.2-1.3c3.5-0.1,6.1,1.3,7.3,3.9c2,4.5-0.5,11.3-6.1,17l-41.4,41.8C92,147.8,85.1,150.5,80.2,149.2z  M140.6,80.4c-0.8-0.2-1.7-0.3-2.7-0.3l-43.2,1.3c-4.7,0.1-10.3,3.1-14.7,7.9c-3.9,4.2-6.1,9-5.9,12.9l1.8,40.4 c0.1,2.8,1.4,4.8,3.8,5.7c4.6,1.8,11.8-0.9,17.5-6.6l41.4-41.8c5.3-5.4,7.8-12.1,6-16.3C143.8,82.1,142.4,80.9,140.6,80.4z"></path>
							<path d="M81.4,153.8c-0.1,0-0.1,0-0.2,0c-2.9-0.8-4.8-3.1-5.3-6.3L69.5,105c-0.6-4.2,1.1-9.3,4.8-14 c4.4-5.7,10.6-9.6,16.1-10.1l47.5-4.8c4-0.4,7,1,8.5,3.9c2.4,4.6,0.4,11.9-5,18.1l-41,47.3C94.7,151.8,86.9,155.3,81.4,153.8z  M137.9,76.4l0,0.3l-47.5,4.8c-5.4,0.5-11.4,4.3-15.7,9.9c-3.6,4.6-5.3,9.5-4.7,13.6l6.5,42.5c0.5,3,2.1,5,4.8,5.8 c5.3,1.5,12.9-1.9,18.5-8.3l41-47.2c5.2-6,7.2-13,4.9-17.3c-1.4-2.6-4.2-3.9-7.9-3.5L137.9,76.4z"></path>
							<path d="M83.2,158.5c-3-0.8-5-2.9-5.9-6.1l-11.8-44.3c-1.1-4.2,0.1-9.6,3.5-14.7c4.2-6.6,10.7-11.3,16.9-12.4 l51.8-8.7c4.5-0.8,8.1,0.6,10,3.7c2.9,4.7,1.4,12.3-3.7,19.1L104,148.1c-5.6,7.4-13.9,11.7-20.1,10.5 C83.6,158.6,83.4,158.5,83.2,158.5z M142.6,73.1c-1.4-0.4-3.1-0.4-4.9-0.1l-51.8,8.7c-6,1-12.4,5.6-16.5,12.1 c-3.2,5-4.5,10.2-3.4,14.2l11.8,44.3c0.9,3.2,2.9,5.2,6.1,5.8c6,1.2,14-3,19.5-10.2l39.9-52.9c4.9-6.5,6.4-13.9,3.7-18.4 C146.1,74.7,144.5,73.6,142.6,73.1z"></path>
							<path d="M85.6,163.2c-2.9-0.8-5.1-2.8-6.3-5.7l-18-45.7c-1.7-4.2-0.9-9.8,2-15.4c3.9-7.3,10.7-13.1,17.5-14.7 l56.1-13.2c5-1.2,9.3,0.1,11.7,3.5c3.4,4.8,2.5,12.7-2.2,20L108.2,151c-5.3,8.1-13.8,13.3-20.8,12.6 C86.7,163.5,86.2,163.4,85.6,163.2z M137,68.8l0.1,0.3L80.9,82.3c-6.6,1.6-13.3,7.2-17,14.4c-2.8,5.4-3.5,10.8-1.9,14.9l18,45.7 c1.3,3.3,3.9,5.3,7.5,5.6c6.8,0.7,15.1-4.4,20.2-12.3l38.1-58.9c4.6-7.1,5.5-14.7,2.3-19.3c-2.3-3.2-6.2-4.4-11-3.2L137,68.8z"></path>
							<path d="M88.7,168.1c-2.9-0.8-5.1-2.6-6.6-5.3L57.3,116c-2.3-4.3-2.1-10.2,0.4-16.2C61,91.7,68,85,75.3,82.7 l60.3-18.2c5.6-1.7,10.5-0.5,13.5,3.1c4,4.8,3.7,13.1-0.5,20.9l-35.4,65c-4.8,8.8-13.5,14.9-21.2,14.9 C90.8,168.5,89.7,168.3,88.7,168.1z M135.8,65.1L75.5,83.3c-7.2,2.2-14,8.7-17.3,16.7c-2.4,5.8-2.6,11.5-0.4,15.6l24.9,46.8 c1.8,3.5,5.1,5.4,9.2,5.4c7.5,0,16-6,20.7-14.6l35.4-65c4.2-7.6,4.4-15.6,0.6-20.2C145.8,64.6,141.1,63.5,135.8,65.1z"></path>
							<path d="M92.6,172.9c-2.8-0.7-5.1-2.4-6.8-4.8l-32.6-47.4c-3-4.3-3.5-10.5-1.4-17c2.8-8.9,9.7-16.5,17.6-19.4 l64.4-23.9c6.2-2.3,11.8-1.3,15.5,2.6c4.6,4.9,5.1,13.2,1.4,21.7L118.9,156c-4.3,9.6-12.8,16.5-21.3,17.3 C95.8,173.4,94.1,173.3,92.6,172.9z M143.5,60.2c-2.8-0.8-6.1-0.5-9.5,0.7L69.6,84.9c-7.7,2.9-14.5,10.3-17.2,19 c-2,6.3-1.5,12.3,1.3,16.4l32.6,47.4c2.5,3.6,6.5,5.4,11.2,5c8.2-0.7,16.6-7.6,20.7-16.9l31.8-71.3c3.7-8.2,3.2-16.3-1.2-21 C147.4,61.9,145.6,60.8,143.5,60.2z"></path>
							<path d="M97.3,177.7c-2.6-0.7-5-2.1-6.8-4.3l-41.2-47.4c-3.8-4.3-5-10.8-3.4-17.8C48,98.6,54.8,90,63.1,86.4 l68.3-30.1c6.7-3,13.2-2.3,17.7,1.9c5.3,4.9,6.6,13.5,3.5,22.4l-27.1,77.6c-3.5,10.1-11.9,18.1-20.9,19.8 C102,178.3,99.5,178.3,97.3,177.7z M131.5,56.5l0.1,0.3L63.3,86.9c-8.1,3.6-14.7,12-16.8,21.3c-1.5,6.8-0.3,13.1,3.3,17.3 L90.9,173c3.3,3.8,8.1,5.3,13.5,4.3c8.8-1.7,17-9.5,20.4-19.4L152,80.3c3-8.7,1.8-17.1-3.4-21.8c-4.3-4-10.5-4.6-17-1.7 L131.5,56.5z"></path>
							<path d="M102.9,182.3c-2.5-0.7-4.7-1.9-6.7-3.7l-50.6-46.8c-4.7-4.3-6.7-11.2-5.7-18.8c1.4-10.1,7.8-19.5,16.5-24 L128.2,52c7.3-3.7,14.6-3.4,20,0.9c6.1,4.8,8.3,13.7,6,23.1L133,159.7c-2.7,10.7-10.6,19.4-20.1,22.2 C109.3,183,105.9,183.1,102.9,182.3z M128.4,52.2l0.1,0.3L56.6,89.6c-8.5,4.4-14.8,13.6-16.2,23.5c-1,7.4,1,14.1,5.5,18.2 l50.6,46.8c4.2,3.9,10,5.1,16.1,3.3c9.3-2.7,17-11.3,19.6-21.8l21.3-83.8c2.3-9.2,0.1-17.7-5.7-22.4c-5.2-4.2-12.3-4.5-19.3-0.8 L128.4,52.2z"></path>
							<path d="M109.3,186.7c-2.2-0.6-4.3-1.6-6.2-3l-61-45.4c-5.7-4.3-8.8-11.5-8.3-19.8c0.6-10.7,6.5-20.7,15.5-26.1 l75.1-44.6c7.7-4.6,16.1-4.7,22.5-0.3c7,4.7,10.3,13.5,8.7,23.6l-14.1,90c-1.7,11-9.1,20.7-18.7,24.6 C118.1,187.4,113.4,187.8,109.3,186.7z M124.4,48l0.2,0.3L49.5,92.9c-8.8,5.2-14.6,15-15.2,25.6c-0.4,8.1,2.5,15.1,8.1,19.3 l61,45.4c5.3,3.9,12.2,4.6,19,1.9c9.4-3.9,16.7-13.3,18.4-24.2l14.1-90c1.5-9.8-1.6-18.3-8.4-22.9c-6.2-4.2-14.4-4.1-21.9,0.4 L124.4,48z"></path>
							<path d="M116.6,190.8c-1.9-0.5-3.7-1.3-5.5-2.3l-72.2-43.1c-7-4.2-11.1-11.8-11.4-20.9c-0.3-11.1,5.1-21.8,14.2-28 l77.8-52.8c8.1-5.5,17.5-6.2,25.1-1.9c8,4.5,12.4,13.4,11.8,23.9l-5.5,95.9c-0.7,11.4-7.1,21.7-16.9,26.9 C128.2,191.5,122.2,192.2,116.6,190.8z M119.6,43.9l0.2,0.3L42,97c-8.9,6-14.2,16.6-13.9,27.5c0.3,8.9,4.3,16.3,11.1,20.4 l72.2,43.1c6.6,3.9,14.7,4,22.2,0c9.6-5.1,15.9-15.2,16.6-26.4l5.5-95.9c0.6-10.2-3.7-18.9-11.5-23.3c-7.4-4.2-16.6-3.5-24.5,1.9 L119.6,43.9z"></path>
							<path d="M124.9,194.4c-1.5-0.4-2.9-0.9-4.3-1.6L36.2,153c-8.4-4-13.9-12-15-22c-1.3-11.4,3.6-22.8,12.6-29.8 l79.8-61.7c8.4-6.5,18.8-7.9,27.7-3.8c9.1,4.2,14.8,13.2,15.3,24.1l4.6,101.5c0.5,11.6-5.1,22.7-14.6,29 C139.9,195,132.1,196.4,124.9,194.4z M137.2,35c-7.7-2.1-16.1-0.2-23.1,5.2l-79.8,61.7c-8.8,6.8-13.6,18-12.4,29.2 c1.1,9.8,6.4,17.6,14.6,21.5l84.4,39.8c8.2,3.8,17.4,3,25.5-2.4c9.3-6.2,14.8-17.1,14.3-28.5L156.1,60 c-0.5-10.6-6.1-19.5-14.9-23.6C139.9,35.8,138.5,35.3,137.2,35z"></path>
							<path d="M134,197.6c-0.8-0.2-1.6-0.5-2.5-0.8l-97.4-35.4c-9.9-3.6-17.1-12.2-19.1-23c-2.2-11.7,1.8-23.4,10.8-31.3 l81.1-71.2c8.6-7.6,19.9-9.8,30.3-6.1c10.4,3.8,17.6,12.8,19.3,24.1l16.3,106.6c1.8,11.8-2.6,23.4-11.9,30.9 C153.2,197.8,143.2,200,134,197.6z M134.5,29.6c-9.5-2.5-19.5-0.1-27.2,6.7l-81.1,71.2c-8.8,7.7-12.8,19.2-10.6,30.7 c2,10.6,9,19,18.7,22.5l97.4,35.4c9.7,3.5,20.5,1.6,28.8-5.2c9.1-7.4,13.4-18.7,11.6-30.3L155.9,54c-1.7-11.1-8.8-19.9-18.9-23.6 C136.2,30.1,135.3,29.8,134.5,29.6z"></path>
							<path d="M144,200.1L32.8,170.3C21,167.1,12,158.2,8.9,146.4c-3.2-11.8,0.1-24,8.7-32.6L99,32.4 c8.7-8.6,20.9-11.9,32.7-8.7c11.8,3.2,20.8,12.1,23.9,23.9l29.8,111.1c3.2,11.8-0.1,24-8.7,32.6C168,200,155.8,203.3,144,200.1z  M99.2,32.6l0.2,0.2L18,114.2c-8.5,8.5-11.7,20.5-8.6,32c3.1,11.6,11.9,20.3,23.5,23.5l111.2,29.8c11.6,3.1,23.6-0.1,32.1-8.6 c8.5-8.5,11.7-20.5,8.6-32L155,47.7c-3.1-11.6-11.9-20.4-23.5-23.5c-11.6-3.1-23.6,0.1-32.1,8.6L99.2,32.6z"></path>
						</svg>
					</figure>

					<div class="row g-4 position-relative">
						<!-- Title and inputs -->
						<div class="col-lg-10 col-xl-7 mx-auto text-center">
							<!-- Title -->
							<h3 class="text-white mb-3">Não deixe passar! A GTF está conquistando muitos adeptos. Faça parte desse sucesso!</h3>
							<p class="text-white opacity-8">Junte-se à GTF agora e faça parte do grupo crescente que já escolheu um futuro melhor!</p>
							<!-- Search -->
							<a href="https://wa.me/551333030540?text=Vamos+come%C3%A7ar%21"  class="btn btn-primary rounded-2 mb-0">Fazer Parte!</a>
						</div>
					</div> <!-- Row END -->
				</div>
			</div>
		</section>
		<!-- =======================
CTA END -->

		<!-- =======================
Faqs START -->
		<section class="pt-0">
			<div class="container">
				<div class="row">
					<!-- Title -->
					<div class="col-md-5">
						<h2 class="mb-5">Você tem perguntas, nós temos respostas!</h2>
					</div>

					<div class="col-md-7">
						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-1">
									<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
									Qual é a diferença entre um contador e um contador online?
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
									Um contador tradicional opera fisicamente em um escritório, enquanto um contador online utiliza plataformas digitais para oferecer serviços remotos. Ambos desempenham funções contábeis essenciais, mas a principal distinção está na abordagem de trabalho e na acessibilidade.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-2">
									<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
									Como posso organizar meus recibos e documentos financeiros para a contabilidade?
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
									Recomenda-se manter uma organização sistemática dos recibos e documentos, categorizando-os por despesas e receitas. Utilizar softwares de gestão financeira e digitalizar documentos pode facilitar o processo e agilizar a prestação de contas ao contador.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-3">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
									Quais são as principais obrigações fiscais para empresas no Brasil?
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
									As obrigações fiscais variam de acordo com o tipo e tamanho da empresa, mas geralmente incluem o pagamento de impostos como o Imposto de Renda Pessoa Jurídica (IRPJ), Contribuição Social sobre o Lucro Líquido (CSLL) e o recolhimento de tributos estaduais e municipais, como ICMS e ISS.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-4">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
									Como posso reduzir minha carga tributária de maneira legal?
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
									Existem estratégias legais para otimizar a carga tributária, como a escolha do regime tributário mais adequado, aproveitamento de incentivos fiscais e planejamento tributário. É fundamental contar com a orientação de um contador para garantir conformidade com a legislação vigente.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-5">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
									Qual a importância da contabilidade para pequenas empresas?
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
									A contabilidade é vital para pequenas empresas, pois fornece uma visão clara da saúde financeira do negócio. Ela auxilia na tomada de decisões, atende às obrigações legais, facilita o acesso a crédito, e contribui para o crescimento sustentável ao identificar áreas de melhoria e oportunidades de economia.
									</div>
								</div>
							</div>
						</div>
						<!-- Accordion END -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
Faqs END -->

	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- =======================
Footer START -->
	<footer class="bg-dark position-relative overflow-hidden pb-0 pt-6 pt-lg-8" data-bs-theme="dark">

		<!-- SVG decoration -->
		<figure class="position-absolute top-0 start-0 mt-n8 ms-n9">
			<svg class="fill-mode" width="775px" height="834px" viewBox="0 0 775 834" style="enable-background:new 0 0 775 834; opacity: 0.05;" xml:space="preserve">
				<path d="M486.1,564.4c-3.6,2.5-7.4,4.8-11.3,6.4c-12,5.5-25.7,7.9-42.2,7.4c-30.6-1.1-65.6-12.5-102.8-24.4 c-50.7-16.2-103.3-33.4-152.5-27c-56.1,7.2-97.9,44.4-128,114l-0.4-0.2c67.5-156.1,181-119.5,281.1-87.1c37,12,72,23.2,102.5,24.3 c34.3,1.2,58.1-10.7,74.9-37.4C530.1,505,547.1,466,565,425.1C619.4,301,675.6,172.7,892.1,141.3l0.1,0.4 c-216.2,31.4-272.5,159.5-326.8,283.5c-18.1,41.1-35,79.7-57.7,115.6C501.6,550.7,494.5,558.5,486.1,564.4z"></path>
				<path d="M500.9,551.4c-43.7,31-103,15.8-165.5-0.2c-49.9-12.7-101.5-25.8-148.7-16.7c-53.3,10.5-93.2,49-121.6,118 l-0.5-0.1c15.3-37.1,33.3-64.7,55.1-84.7c19.5-17.7,41.3-28.6,66.7-33.7c47.4-9.2,99,3.9,148.9,16.6 c70.4,17.9,137.1,34.9,181.3-14.4c35.7-39.9,57.3-91.7,80.2-146.7c23.8-56.7,48.2-115.5,90.2-163.6c22.7-25.9,48.4-46.4,78.4-62.4 c33.9-18.1,72.2-30.3,117.1-37.1l0.1,0.4C695,155.3,645.2,274.5,597.1,389.7c-22.9,55-44.5,106.8-80.4,146.8 C512.3,542.4,506.6,547.3,500.9,551.4z"></path>
				<path d="M521.3,536.4c-21.9,15.5-48.4,23.4-80.8,23.8c-31.2,0.5-65.1-5.8-97.9-11.9c-49.3-9.2-100.2-18.7-145.7-6.5 c-51.1,13.7-88.9,53.7-116,122.6l-0.6-0.2c60.5-154.1,163.3-135,262.6-116.5c68.1,12.7,132.6,24.6,183.6-15.8 c48.1-38.2,71.1-100.6,95.6-166.5c20.3-55,41.4-111.6,78.3-158.1c20-25.1,42.7-44.9,69.2-60.5c30.1-17.5,64.2-29.1,104.3-35.4 l0.2,0.6c-167.2,26.3-210,141.9-251.4,253.5C598.3,431.5,575,493.8,527,532.2C525.1,533.8,523.2,535.1,521.3,536.4z"></path>
				<path d="M548.9,520.3c-4,2.9-8.2,5.6-12.6,8c-56.6,31.5-120.9,23.8-183,16.6c-51.7-6-100.4-11.8-144.6,3.2 c-49.9,16.9-85.5,57.7-111.3,128.2l-0.6-0.2c13.7-37.3,30.1-66,49.9-87.8c17.8-19.4,37.9-32.8,61.8-40.9 c44.3-15,93.1-9.3,144.9-3.2c62.1,7.2,126.3,14.8,182.8-16.6c59.6-33.2,82-104.7,105.9-180.4c17.1-54.3,34.7-110.5,67.2-156.6 c36.7-52,87.8-82.8,155.7-94l0.2,0.6c-151.9,25-187.8,139.3-222.3,250C620.4,417.6,599.4,484.5,548.9,520.3z"></path>
				<path d="M573.5,509.5c-8.2,5.8-17.4,10.7-27.7,14.6c-59.3,22-119.1,18.8-176.8,15.8c-53.2-2.8-103.3-5.3-147.1,12.5 C172.6,572.3,138.1,615.5,113,688l-0.5-0.1c25.1-72.7,59.6-115.9,108.9-136c44-18,94.2-15.3,147.6-12.6 c57.7,3,117.4,6.1,176.6-15.9c70.7-26.2,91.1-106.3,112.8-191.4c13.9-54.5,28.3-111,56.7-156.9C747,123.2,793,92.6,855.6,82l0,0.7 C716.3,106.5,687,221.4,658.9,332.2C640.4,405,622.6,474.4,573.5,509.5z"></path>
				<path d="M595.2,502.3c-11.3,8-24.6,14-40,17.4c-56.8,12.7-112,12.7-160.5,12.9c-60.2,0.1-112,0.2-157,21.1 c-49.5,23-84,69.3-108.5,146l-0.6-0.2c24.3-76.7,58.9-123.1,108.6-146.3c45.1-21.1,97.2-21.1,157.4-21.2 c48.6,0,103.6-0.1,160.5-12.9c81.6-18.3,99-106.7,117.4-200.6c10.7-55,22-112,46.6-158.2C747,108,788.6,77.5,846.5,67.2l0.1,0.8 C718,91.2,695.2,206.9,673.2,318.9C658.3,394.9,643.8,467.8,595.2,502.3z"></path>
				<path d="M615.3,497.4c-13.7,9.7-30.2,16-50.8,18c-44.4,4.6-86.5,5.8-123.6,6.8c-71.2,2-132.8,3.7-182,27.7 C206,575.6,169.8,627,145,711.3l-0.8-0.1c13-44.6,29-79.3,48.6-106.3c18.1-24.9,39.5-43.1,65.6-55.7 c49.5-24.1,110.9-25.8,182.4-27.7c37.1-1,79.3-2.2,123.5-6.7c92.6-9.4,106.2-106.5,120.5-209.2c7.8-55.9,15.9-113.6,37-160 c23.8-52.7,61.6-83.1,115.3-93.4l0.3,0.7c-53.4,10.1-91,40.4-114.6,92.9c-21.1,46.4-29.2,104.1-36.8,159.9 C674.6,386,663.8,463,615.3,497.4z"></path>
				<path d="M634.4,494c-15.5,11-35.2,17.2-60.4,17.3c-12.3,0.1-24.5,0.1-36.1,0.1c-103.7,0-185.5-0.1-246.4,26.4 c-63.5,27.7-103.7,85-130.5,185.5l-0.8-0.1c13.9-52.5,31.3-92.6,53.2-122.9c20.7-28.8,46.2-49.4,77.8-63.2 c61-26.6,142.9-26.4,246.6-26.4c11.7,0.1,23.8,0,36.1-0.1c103.8-0.2,112.9-105.6,122.5-217.2c4.7-56.9,9.9-115.5,27.5-162.4 c20-53.1,54.1-83.7,104.1-93.7l0.1,0.8c-49.5,9.8-83.5,40.3-103.3,93.1c-17.6,46.9-22.7,105.4-27.6,162 C690.1,378.2,682.9,459.6,634.4,494z"></path>
				<path d="M652.7,491.8c-17.9,12.7-40.7,17.7-69.2,15.4C328,486.2,228.3,517.5,177.2,735.2l-0.9-0.3 c25.9-110.7,64-171.6,127-204c66.6-34.2,160.2-34.6,280.3-24.7c32.2,2.6,56.9-4.1,75.4-20.5c42.1-37.4,45.1-118.6,48-204.7 c4-116.5,8.1-236.8,112.1-258.6l0.1,0.8C715.9,44.8,711.8,164.8,707.8,280.9c-3.1,86.3-5.8,167.7-48.3,205.2 C657.3,488.3,655,490.1,652.7,491.8z"></path>
				<path d="M670.6,490.3c-19.3,13.7-44.8,17.9-77.7,12.7c-138.5-21.4-227.1-13-287.3,27 c-55.4,36.8-89.1,101.7-112.4,216.9l-0.9-0.3C215.8,631,249.6,566,305.1,528.9c60.3-40.1,149.1-48.6,288.1-27.3 c35.9,5.5,63,0,82.6-16.9c43.2-37.5,42.2-124.3,40.9-216.1C714.9,151,713,28.8,809.9,7.7l0.1,0.8c-96,21.1-94.3,142.7-92.7,260.6 c1.3,92.1,2.4,179-41.1,216.7C674.3,487.4,672.6,488.9,670.6,490.3z"></path>
			</svg>
		</figure>

		<!-- SVG decoration -->
		<div class="position-absolute top-0 end-0 mt-n3 me-n4">
			<img src="assets2/images/elements/decoration-pattern-2.svg" style="opacity:0.05;" alt="">
		</div>

		<div class="container position-relative mt-5">
			<div class="row g-4 justify-content-between">

				<!-- Widget 1 START -->
				<div class="col-lg-3">
					<!-- logo -->
					<a class="me-0" href="index.php">
						<img class="light-mode-item h-80px" src="https://i.imgur.com/rcirJ36.png" alt="logo">
						<img class="dark-mode-item h-80px" src="https://i.imgur.com/WqmElvz.png" alt="logo">
					</a>

					<p class="mt-4 mb-2">TRANSFORMANDO SONHOS EM NEGÓCIOS.</p>
				</div>
				<!-- Widget 1 END -->

				<!-- Widget 2 START -->
				<div class="col-lg-8 col-xxl-7">
					<div class="row g-4">
						<!-- Link block -->
						<div class="col-6 col-md-4">
							<h6 class="mb-2 mb-md-4">Links Rápidos</h6>
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link pt-0" href="feature-single.php">Sobre nós</a></li>
								<li class="nav-item"><a class="nav-link" href="contact-v1.php">Contate-nos</a></li>


								<li class="nav-item"><a class="nav-link" href="sign-in.php">Entrar</a></li>
							</ul>
						</div>

						<!-- Link block -->
						<div class="col-6 col-md-4">
							<h6 class="mb-2 mb-md-4">Comunidade</h6>
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link pt-0" href="#">Documentos</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Suporte <i class="bi bi-box-arrow-up-right small ms-1"></i></a></li>
								<li class="nav-item"><a class="nav-link" href="contact-v1.php">Faqs</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Política de Privacidade</a></li>
								<li class="nav-item"><a class="nav-link" href="blog">Notícias e blogs</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Termos e Condições</a></li>
							</ul>
						</div>

						<!-- Link block -->
						<div class="col-md-4">
							<h6 class="mb-2 mb-md-4">Parceiros</h6>
							<div class="row g-2 mt-2 mb-4 mb-sm-5">
								<!-- Google play store button -->
								<div class="col-5 col-sm-4 col-md-6">
									<a href="https://onvio.com.br/clientcenter/pt/auth?r=%2Fhome"> <img src="assets2/images/elements/google-play.png" alt=""> </a>
								</div>
								<!-- App store button -->
								<div class="col-5 col-sm-4 col-md-6">
									<a href="https://gtfcontabilidade.conexa.app/"> <img src="assets2/images/elements/app-store.png" alt="app-store"> </a>
								</div>
							</div>

							<!-- Social buttons -->
							<h6 class="mb-2 mb-md-4">Nossas Redes</h6>

							<ul class="list-inline mb-0 mt-3">
								<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-linkedin-in lh-base"></i></a> </li>
								<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-youtube lh-base"></i></a> </li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Widget 2 END -->
			</div>

			<!-- Divider -->
			<hr class="mt-4 mb-0">

			<!-- Bottom footer -->
			<div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
				<!-- copyright text -->
				<div class="text-body">

					&copy; <?php echo date("Y"); ?> Copyright GTF CONTABILIDADE All Rights Reserved.<br> Desenvolvido e projetado por <a href="https://adrieldias.netlify.app/" class="text-body text-primary-hover">Adriel Dias</a>. </div>
				<!-- copyright links-->
				<!-- Language selector -->
				<div class="dropdown dropup text-center text-md-end mt-3 mt-md-0">
					<a class="btn btn-sm btn-light mb-0" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-globe me-2"></i>GTF Contabilidade
					</a>

				</div>
			</div>
		</div>
	</footer>
	<!-- =======================
Footer END -->

	<!-- Back to top -->
	<div class="back-top"></div>

	<!-- Bootstrap JS -->
	<script src="assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets2/vendor/aos/aos.js"></script>

	<!-- Theme Functions -->
	<script src="assets2/js/functions.js"></script>

</body>

</html>