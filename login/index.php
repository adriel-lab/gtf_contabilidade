<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>GTF CONTABILIDADE - LOGIN</title>

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

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
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
	<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets2/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../assets2/vendor/swiper/swiper-bundle.min.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="../assets2/css/style.css">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
		<div class="row g-0">
			<!-- left -->
			<div class="col-lg-7 vh-100 d-none d-lg-block">
				<!-- Slider START -->
				<div class="swiper h-100" data-swiper-options='{
					"pagination":{
						"el":".swiper-pagination",
						"clickable":"true"
					}}'>

					<!-- Slider items START -->
					<div class="swiper-wrapper">
						<!-- Item -->
						<div class="swiper-slide">
							<div class="card rounded-0 h-100" data-bs-theme="dark" style="background-image:url(https://i.imgur.com/Lkbfxgw.jpeg); background-position: center left; background-size: cover;">
								<!-- Bg overlay -->
								<div class="bg-overlay bg-dark opacity-5"></div>

								<!-- Card info -->
								<div class="card-img-overlay z-index-2 p-7">
									<div class="d-flex flex-column justify-content-end h-100">
										<!-- Quote -->
										<h4 class="fw-light">"A contabilidade é a linguagem dos negócios, permitindo que as empresas comuniquem seu desempenho financeiro de forma clara e precisa."</h4>
										<!-- Info -->
										<div class="d-flex justify-content-between mt-5">
											<div>
												<h5 class="mb-0">- Warren Buffett</h5>
												<span>Investidor e Empresário</span>
											</div>
											<!-- Rating star -->
											<ul class="list-inline mb-1">
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small"><i class="fa-solid fa-star-half-alt text-white"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Item -->
						<div class="swiper-slide">
							<div class="card rounded-0 h-100" data-bs-theme="dark" style="background-image:url(https://i.imgur.com/rnxVymw.jpeg); background-position: center left; background-size: cover;">
								<!-- Bg overlay -->
								<div class="bg-overlay bg-dark opacity-5"></div>

								<!-- Card info -->
								<div class="card-img-overlay z-index-2 p-7">
									<div class="d-flex flex-column justify-content-end h-100">
										<!-- Quote -->
										<h4 class="fw-light">"A contabilidade não é apenas números; é a arte de interpretar e analisar esses números para orientar a gestão eficaz dos recursos empresariais."</h4>
										<!-- Info -->
										<div class="d-flex justify-content-between mt-5">
											<div>
												<h5 class="mb-0">- Mary Harris Jones</h5>
												<span>Contadora e Consultora Financeira</span>
											</div>
											<!-- Rating star -->
											<ul class="list-inline mb-1">
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small"><i class="fa-solid fa-star-half-alt text-white"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Item -->
						<div class="swiper-slide">
							<div class="card rounded-0 h-100" data-bs-theme="dark" style="background-image:url(https://i.imgur.com/1B2cRHl.png); background-position: center left; background-size: cover;">
								<!-- Bg overlay -->
								<div class="bg-overlay bg-dark opacity-5"></div>

								<!-- Card info -->
								<div class="card-img-overlay z-index-2 p-7">
									<div class="d-flex flex-column justify-content-end h-100">
										<!-- Quote -->
										<h4 class="fw-light">"O registro correto de transações financeiras é fundamental para a saúde financeira de uma empresa, fornecendo insights valiosos para tomadas de decisão estratégicas."</h4>
										<!-- Info -->
										<div class="d-flex justify-content-between mt-5">
											<div>
												<h5 class="mb-0">- Peter Drucker</h5>
												<span>Consultor de Gestão e Escritor</span>
											</div>
											<!-- Rating star -->
											<ul class="list-inline mb-1">
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small me-0"><i class="fa-solid fa-star text-white"></i></li>
												<li class="list-inline-item small"><i class="fa-solid fa-star-half-alt text-white"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Pagination -->
					<div class="swiper-pagination swiper-pagination-line mb-3"></div>
				</div>
			</div>

			<!-- Right -->
			<div class="col-sm-10 col-lg-5 d-flex m-auto vh-100">
				<div class="row w-100 m-auto">
					<div class="col-sm-10 my-5 m-auto">

						<a href="index.html"><img src="https://i.imgur.com/rcirJ36.png" class="h-60px mb-4" alt="logo"></a>

						<h2 class="mb-0">Bem vindo de volta</h2>
						<p class="mb-0">Bem-vindo de volta, por favor insira seus dados</p>

					
					
						<!-- Form START -->
						<form action="../blog/process.php" method="post">
							<!-- Email -->
							<div class="input-floating-label form-floating mb-4">
								<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
								<label for="floatingInput">Endereço de email</label>
							</div>

							<!-- Password -->
							<div class="input-floating-label form-floating mb-4 position-relative">
								<input type="password" name="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password">
								<label for="floatingInput">Senha</label>
								<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
									<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
								</span>
							</div>

							<!-- Check box -->
							<div class="mb-4 d-flex justify-content-between">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="checkbox-1">
									<label class="form-check-label" for="checkbox-1">Lembre de mim</label>
								</div>

								<a href="#" class="link-underline-primary"> Esqueceu sua senha?</a>
							</div>

							<!-- Button -->
							<div class="align-items-center mt-0">
								<div class="d-grid">
									<button class="btn btn-dark mb-0" type="submit">Login</button>
								</div>
							</div>
						</form>
						<!-- Form END -->

						<!-- Sign up link -->
						<div class="mt-4 text-center">
							
						</div>
					</div>
				</div>
			</div>
		</div>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="../assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!--Vendors-->
<script src="../assets2/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Theme Functions -->
<script src="../assets2/js/functions.js"></script>

</body>
</html>