<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<script defer src="https://cloud.umami.is/script.js" data-website-id="495c1db9-1130-4ebb-b0ef-edce72aea90d"></script>

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
	<link rel="stylesheet" href="css/farnost.css">
	<?php
		$host = strtolower(explode(':', $_SERVER['HTTP_HOST'] ?? '', 2)[0]);
		$jeCihost = $host === 'cihost.farnost.cz';
	?>

	<style>
		
		@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;800&display=swap');
		<?php include __DIR__ . '/css/farnost.css'; ?>
		@media (width < 768px) { #Advent > .container {	width: 100%; padding-inline: 0; } }
	</style>
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
					<li><a href="#Advent">🕯 Advent</a></li>
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

	<main>
	    <div id="jHD">
	        <?php if ($jeCihost): ?>
	            <?php include __DIR__ . '/2026-Cihost-4.inc'; ?>
	        <?php else: ?>
	            <?php include __DIR__ . '/HD-2026-12-advent_vanoce-2.inc'; ?>
	        <?php endif; ?>
	    </div>

	    <section id="Farnosti" class="section">
	        <div class="content">
	            <h2>Společně spravované farnosti</h2>
	            <div class="parish-grid">
	                <article>
	                    <h3>Římskokatolická farnost Světlá nad Sázavou</h3>
	                    <p>IČO: 15060586<br>účet: 1120630319/0800<br>ID: hamajse</p>
	                </article>
	                <article>
	                    <h3>Římskokatolická farnost Číhošť</h3>
	                    <p>IČO: 60127554<br>účet: 1473464379/0800<br>ID: 88dikqn</p>
	                </article>
	            </div>
	        </div>
	    </section>

	    <section id="Duchovni" class="section">
	        <div class="content">
	            <h2>Duchovní program</h2>
	            <p>Věříme, že svátosti jsou projevem zdravého křesťanského života, viditelným gestem a&nbsp;skutečným setkáním s&nbsp;trojjediným Bohem. Pro jejich přijetí je důležité odpovídající docenění i&nbsp;osobní příprava.</p>
	            <p>Svátosti <b>křtu</b>, <b>biřmování</b> a&nbsp;<b>eucharistie</b> uvádějí do plného křesťanského života. <b>Svátosti smíření</b> a&nbsp;<b>pomazání nemocných</b> jsou posilou ve chvílích slabosti a&nbsp;nedostatečnosti, ať už fyzické nebo duchovní. <b>Svátosti manželství</b> a&nbsp;<b>kněžství</b> jsou znamením služby i&nbsp;postavení uprostřed celé společnosti.</p>
	            <p>Domluvy ohledně doprovázení při přípravě a&nbsp;přijetí těchto svátostí jsou možné po telefonickém nebo osobním setkání v&nbsp;kostele.</p>
	            <p>Pavel Jäger<br>správce farnosti</p>
	        </div>
	    </section>

	    <section id="Toufar" class="section">
	        <div class="content">
	            <h2>P. Josef Toufar — Číhošť</h2>
	            <p>Kostel Nanebevzetí Panny Marie v&nbsp;Číhošti je otevřený v&nbsp;době bohoslužeb nebo po předchozí domluvě.<br>Za podobných podmínek je přístupná i&nbsp;výstava o&nbsp;životě P.&nbsp;Josefa Toufara v&nbsp;budově místní fary.</p>
	            <p>Za&nbsp;příznivého počasí během <b>července a&nbsp;srpna 2026</b> budou kostel i&nbsp;fara přístupné po celý den.</p>
	            <p>Každou druhou sobotu v&nbsp;měsíci je <b>smírná pobožnost</b>.</p>
	            <dl class="times">
	                <div><dt>8.45 hod.</dt><dd>— modlitba růžence</dd></div>
	                <div><dt>9.30 hod.</dt><dd>— mše svatá</dd></div>
	                <div><dt>10.00 hod.</dt><dd>— eucharistická adorace</dd></div>
	            </dl>
	            <div class="toufar-links">
	                <article class="linked-note">
	                    <a href="https://www.joseftoufar.cz"><img src="img/toufar-hlava.svg" alt="Josef Toufar (✝1950)"></a>
	                    <div>
	                        <a href="https://www.joseftoufar.cz"><h3>P. Josef Toufar (✝1950)</h3></a>
	                        <p>oběť komunistického pronásledování katolické církve v&nbsp;Československu</p>
	                    </div>
	                </article>
	                <article class="linked-note">
	                    <a href="https://www.nfcihost.cz"><img src="img/nfcihost-krizek.svg" alt="Nadační fond Číhošť"></a>
	                    <div>
	                        <a href="https://www.nfcihost.cz"><h3>Nadační fond</h3></a>
	                        <p>Nadačního fondu kostela Nanebevzetí Panny Marie v&nbsp;Číhošti</p>
	                    </div>
	                </article>
	            </div>
	        </div>
	    </section>

	    <section id="Bohosluzby" class="section">
	        <div class="content">
	            <h2>Pořad bohoslužeb</h2>
	            <p>Rozpis bohoslužeb a dalších sdělení pro aktuální týden vložen <strong id="jDatumOhlasek"><?php
	                /* Datum vložení ohlášek — automaticky podle poslední změny ohlasky.pdf */
	                $mesice = [1 => 'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'];
	                $soubor = __DIR__ . '/ohlasky.pdf';
	                if (is_file($soubor)) {
	                    $t = filemtime($soubor);
	                    echo date('j.', $t) . '&nbsp;' . $mesice[(int) date('n', $t)] . '&nbsp;' . date('Y', $t);
	                } else {
	                    echo 'nějak špatně';
	                }
	            ?></strong>.</p>
	            <a class="notices" href="./ohlasky.pdf?t=<?php echo $t ?? 0; ?>">
	                <img src="./ohlasky.webp?t=<?php echo @filemtime(__DIR__ . '/ohlasky.webp') ?: 0; ?>" alt="Aktuální ohlášky">
	            </a>
	        </div>
	    </section>

	    <section id="Advent" class="features">
	      <div class="container">
			<h2 class="sr-only">Advent 2026 ve Světlé nad Sázavou</h2>
	        <?php include('./2026-12-advent_ve_Svetle-2.inc'); ?>
	      </div>
	    </section>

	    <section id="Kontakt" class="section">
	        <div class="content">
	            <h2>Kontakt</h2>
	            <address>
	                Pavel Jäger<br>
	                Náměstí Trčků z Lípy 94<br>
	                582 91 Světlá nad Sázavou<br>
	                776 215 841<br>
	                rkf.svetlanadsazavou&commat;dihk.cz
	            </address>
	        </div>
	    </section>
	</main>

</body>
</html>
