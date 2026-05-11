<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {

			var toggle  = document.getElementById('nav-toggle');
			var navbar  = document.getElementById('mainNavbar');
			var ddItem  = document.getElementById('dropdownFarnosti');

			/* Hamburger — otevřít / zavřít hlavní menu */
			toggle.addEventListener('click', function () {
				var isOpen = navbar.classList.toggle('open');
				toggle.setAttribute('aria-expanded', isOpen);
			});

			/* Dropdown — otevřít / zavřít podmenu */
			ddItem.querySelector('.dropdown-toggle').addEventListener('click', function (e) {
				e.preventDefault();
				ddItem.classList.toggle('open');
			});

			/* Zavřít vše po kliknutí na odkaz (anchor, jiná stránka) */
			navbar.querySelectorAll('a:not(.dropdown-toggle)').forEach(function (a) {
				a.addEventListener('click', function () {
					navbar.classList.remove('open');
					toggle.setAttribute('aria-expanded', 'false');
					ddItem.classList.remove('open');
				});
			});

			/* Zavřít dropdown kliknutím mimo */
			document.addEventListener('click', function (e) {
				if (!ddItem.contains(e.target)) {
					ddItem.classList.remove('open');
				}
			});
		});
	</script>

	
	<title>Římskokatolické farnosti Světlá nad Sázavou a Číhošť</title>
	<meta name="description" content="Římskokatolické farnosti Světlá nad Sázavou a Číhošť">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./favicon.ico" sizes="any">
	<link rel="stylesheet" href="css/jag4.css">
	
</head>

<body id="body">

	<!-- NAVIGACE -->
	<header id="navigation">
		<div class="container">

			<!-- Hamburger (viditelný jen na mobilu) -->
			<button id="nav-toggle" aria-controls="mainNavbar" aria-expanded="false" aria-label="Otevřít menu">
				<span class="sr-only">Otevřít menu</span>
				<img src="img/zelva-1.svg" alt="🐢" aria-hidden="true" style="height:20px; width:15px;">
			</button>

			<!-- Hlavní navigace -->
			<nav id="mainNavbar" aria-label="Hlavní navigace">
				<ul>
					<li>
						<a href="vespers/2026_04_10.html">
							<img src="img/apokalypsa.svg" alt="Hodinová apokalypsa" style="width:1.5em;">
						</a>
					</li>
					<li>
						<a href="#Bohosluzby">Pořad bohoslužeb</a>
					</li>
					<li class="dropdown" id="dropdownFarnosti">
						<a href="#" class="dropdown-toggle" aria-haspopup="true">
							Farnosti <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#Farnosti">Spravované farnosti</a></li>
							<li><a href="#Kontakt">Kontakt</a></li>
							<li><a href="PRF.php">Pastorační rada farnosti</a></li>
							<li><a href="#Duchovni">Duchovní program</a></li>
						</ul>
					</li>
					<li>
						<a href="#Toufar">Toufar—Číhošť</a>
					</li>
				</ul>
			</nav>

		</div>
	</header>

	<!-- ÚVOD -->
	<div id="jHD"><?php include('./HD-2026-05-nockostelu.inc'); ?></div>

	<!-- FARNOSTI -->
	<section id="Farnosti" class="features">
		<div class="container">
			<h2>Společně spravované farnosti</h2>
			<div class="col-halves sec-sub-title">
				<div class="col">
					<div class="service-item">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 2em; fill: #8C2318;"><path d="M281.71 320.3c-33.28 3.17-57.71 33.02-57.71 66.45V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V385.8c0-15.95 10.86-30.76 26.59-33.36C302.61 349.15 320 364.58 320 384v120c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V384c0-37.42-32.12-67.34-70.29-63.7zm276.86 35.69L448 303.26v-29.14c0-11.24-5.9-21.66-15.54-27.44L304 169.6V96h72c4.42 0 8-3.58 8-8V72c0-4.42-3.58-8-8-8h-72V8c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v56h-72c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h72v73.6l-128.46 77.08A31.997 31.997 0 0 0 128 274.12v29.15L17.43 355.99C6.96 360.99 0 373.89 0 388.32V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V388.32c0-1.98.45-3.42.8-4.21l95.2-45.4V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V274.12l128-76.8 128 76.8V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V338.71l95.2 45.4c.35.78.8 2.22.8 4.21V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V388.32c0-14.43-6.96-27.33-17.43-32.33z"></path></svg>
						</div>
						<div class="service-desc">
							<h3>Římskokatolická farnost Světlá nad Sázavou</h3>
							<p>IČO: 15060586<br>účet: 1120630319/0800</p>
							<p>ID: hamajse</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="service-item">
						<div class="service-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 2em; fill: #8C2318;"><path d="M281.71 320.3c-33.28 3.17-57.71 33.02-57.71 66.45V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V385.8c0-15.95 10.86-30.76 26.59-33.36C302.61 349.15 320 364.58 320 384v120c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V384c0-37.42-32.12-67.34-70.29-63.7zm276.86 35.69L448 303.26v-29.14c0-11.24-5.9-21.66-15.54-27.44L304 169.6V96h72c4.42 0 8-3.58 8-8V72c0-4.42-3.58-8-8-8h-72V8c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v56h-72c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h72v73.6l-128.46 77.08A31.997 31.997 0 0 0 128 274.12v29.15L17.43 355.99C6.96 360.99 0 373.89 0 388.32V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V388.32c0-1.98.45-3.42.8-4.21l95.2-45.4V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V274.12l128-76.8 128 76.8V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V338.71l95.2 45.4c.35.78.8 2.22.8 4.21V504c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8V388.32c0-14.43-6.96-27.33-17.43-32.33z"></path></svg>
						</div>
						<div class="service-desc">
							<h3>Římskokatolická farnost Číhošť</h3>
							<p>IČO: 60127554<br>účet: 1473464379/0800</p>
							<p>ID: 88dikqn</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- DUCHOVNÍ PROGRAM -->
	<section id="Duchovni" class="features" style="background-color:white;">
		<div class="container">
			<h2>Duchovní program</h2>
			<div class="col-wide sec-sub-title">
				<div class="col">
					<p>Věříme, že svátosti jsou projevem zdravého křesťanského života, viditelným gestem a&nbsp;skutečným setkáním s&nbsp;trojjediným Bohem. Pro jejich přijetí je důležité odpovídající docenění i&nbsp;osobní příprava. <br>
						Svátosti <b>křtu</b>, <b>biřmování</b> a&nbsp;<b>eucharistie</b> uvádějí do plného křesťanského života. <b>Svátosti smíření</b> a&nbsp;<b>pomazání nemocných</b> jsou posilou ve chvílích slabosti a&nbsp;nedostatečnosti, ať už fyzické nebo duchovní. <b>Svátosti manželství</b> a&nbsp;<b>kněžství</b> jsou znamením služby i&nbsp;postavení uprostřed celé společnosti. <br>
						Domluvy ohledně doprovázení při přípravě a&nbsp;přijetí těchto svátostí jsou možné po telefonickém nebo osobním setkání v&nbsp;kostele.</p>
					<p style="text-align:right;">Pavel Jäger<br>správce farnosti</p>
				</div>
			</div>
		</div>
	</section>

	<!-- TOUFAR -->
	<section id="Toufar" class="features">
		<div class="container">
			<h2>P. Josef Toufar — Číhošť</h2>
			<div class="col-offset sec-sub-title">
				<div class="col">
					<p>Kostel Nanebevzetí Panny Marie v&nbsp;Číhošti je otevřený v&nbsp;době bohoslužeb nebo po předchozí domluvě.<br>Za podobných podmínek je přístupná i&nbsp;výstava o&nbsp;životě P.&nbsp;Josefa Toufara v&nbsp;budově místní fary.<br>
					<br>
					Za&nbsp;příznivého počasí během <b>července a srpna 2025</b> budou kostel i&nbsp;fara přístupné po celý den.<br>
					<br>
					Každou druhou sobotu v&nbsp;měsíci je <b>smírná pobožnost</b>.<br>
					<span class="cihost-casy">8.45 hod.</span>— modlitba růžence<br>
					<span class="cihost-casy">9.30 hod.</span>— mše svatá<br>
					<span class="cihost-casy">10.00 hod.</span>— eucharistická adorace<br></p>
				</div>
			</div>
			<div class="col-pair">
				<div class="spacer"></div>
				<div class="col">
					<div class="service-item">
						<div class="service-icon">
							<a href="https://www.joseftoufar.cz"><img src="img/toufar-hlava.svg" style="height:4em;" alt="Josef Toufar (✝1950)"></a>
						</div>
						<div class="service-desc">
							<h3>P. Josef Toufar (✝1950)</h3>
							<p class="mensi">oběť komunistického pronásledování katolické církve v&nbsp;Československu</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="service-item">
						<div class="service-icon">
							<a href="https://www.nfcihost.cz"><img src="img/nfcihost-krizek.svg" style="height:4em;" alt="Nadační fond Číhošť"></a>
						</div>
						<div class="service-desc">
							<h3>Nadační fond</h3>
							<p class="mensi">Nadačního fondu kostela Nanebevzetí Panny Marie v&nbsp;Číhošti</p>
						</div>
					</div>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
	</section>

	<!-- BOHOSLUŽBY -->
	<section id="Bohosluzby" class="features" style="background-color:white;">
		<div class="container">
			<h2>Pořad bohoslužeb</h2>
			<div class="sec-sub-title text-center">
				<p>Rozpis bohoslužeb a dalších sdělení pro aktuální týden vložen <span id="jDatumOhlasek" style="font-weight:600;"><?php include('./datum_ohlasek.inc'); ?></span>.<br>
				<a href="./ohlasky.pdf?t=<?php echo filemtime('./ohlasky.pdf'); ?>">
					<img src="./ohlasky.webp?t=<?php echo filemtime('./ohlasky.webp'); ?>" alt="Aktuální ohlášky" style="width:100%;">
				</a>
				</p>
			</div>
		</div>
	</section>

	<!-- KONTAKT -->
	<section id="Kontakt" class="features">
		<div class="container">
			<h2>Kontakt</h2>
			<div class="sec-sub-title text-center">
				<p class="centerKontakt" style="text-align:left; font-weight:400; margin-left:auto; margin-right:auto; width:15em;">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="kontakt-ikona"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
					&nbsp;&nbsp;Pavel Jäger<br>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="kontakt-ikona"><path d="M494.586 164.516c-4.697-3.883-111.723-89.95-135.251-108.657C337.231 38.191 299.437 0 256 0c-43.205 0-80.636 37.717-103.335 55.859-24.463 19.45-131.07 105.195-135.15 108.549A48.004 48.004 0 0 0 0 201.485V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V201.509a48 48 0 0 0-17.414-36.993zM464 458a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V204.347c0-1.813.816-3.526 2.226-4.665 15.87-12.814 108.793-87.554 132.364-106.293C200.755 78.88 232.398 48 256 48c23.693 0 55.857 31.369 73.41 45.389 23.573 18.741 116.503 93.493 132.366 106.316a5.99 5.99 0 0 1 2.224 4.663V458zm-31.991-187.704c4.249 5.159 3.465 12.795-1.745 16.981-28.975 23.283-59.274 47.597-70.929 56.863C336.636 362.283 299.205 400 256 400c-43.452 0-81.287-38.237-103.335-55.86-11.279-8.967-41.744-33.413-70.927-56.865-5.21-4.187-5.993-11.822-1.745-16.981l15.258-18.528c4.178-5.073 11.657-5.843 16.779-1.726 28.618 23.001 58.566 47.035 70.56 56.571C200.143 320.631 232.307 352 256 352c23.602 0 55.246-30.88 73.41-45.389 11.994-9.535 41.944-33.57 70.563-56.568 5.122-4.116 12.601-3.346 16.778 1.727l15.258 18.526z"></path></svg>
					&nbsp;&nbsp;Náměstí Trčků z Lípy 94<br>
					<span style="float:left; width:1.25em;">&nbsp;</span>&nbsp;&nbsp;582 91 Světlá nad Sázavou<br>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="kontakt-ikona"><path d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"/></svg>
					&nbsp;&nbsp;776 215 841<br>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="kontakt-ikona"><path d="M528 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h480c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm8 336c0 4.411-3.589 8-8 8H48c-4.411 0-8-3.589-8-8V112c0-4.411 3.589-8 8-8h480c4.411 0 8 3.589 8 8v288zM170 270v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm-336 82v-28c0-6.627-5.373-12-12-12H82c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm384 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zM122 188v-28c0-6.627-5.373-12-12-12H82c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm96 0v-28c0-6.627-5.373-12-12-12h-28c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12zm-98 158v-16c0-6.627-5.373-12-12-12H180c-6.627 0-12 5.373-12 12v16c0 6.627 5.373 12 12 12h216c6.627 0 12-5.373 12-12z"></path></svg>
					&nbsp;&nbsp;rkf.svetlanadsazavou&commat;dihk.cz
				</p>
			</div>
		</div>
	</section>

</body>
</html>