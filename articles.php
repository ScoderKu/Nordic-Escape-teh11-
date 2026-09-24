<?php
$pageTitle = 'Artikkelit';
$basePath = '';

require 'includes/header.php';

$articles = [
	[
		'title' => 'Aloittelijan opas retkeilyyn',
		'category' => 'Retkeily',
		'image' => 'images/articles/beginner-hiking.jpg',
		'imageAlt' => 'Retkeilijä kulkemassa metsäpolulla',
		'excerpt' => 'Ensimmäisen retken ei tarvitse olla pitkä tai vaikea.',
		'url' => 'articles/beginner-hiking.php',
	],
	[
		'title' => 'Mitä mukaan päiväretkelle?',
		'category' => 'Varusteet',
		'image' => 'images/articles/day-trip-equipment.jpg',
		'imageAlt' => 'Retkeilyvarusteita päiväretkelle',
		'excerpt' => 'Aloita pakkaaminen retken tarpeista ja olosuhteista.',
		'url' => 'articles/day-trip-equipment.php',
	],
	[
		'title' => 'Turvallinen vaellus luonnossa',
		'category' => 'Retkeily',
		'image' => 'images/articles/hiking-safety.jpg',
		'imageAlt' => 'Retkeilijä suunnittelemassa reittiä',
		'excerpt' => 'Hyvä retki alkaa valmistautumisesta.',
		'url' => 'articles/hiking-safe.php',
	],
	[
		'title' => 'Retkeily talvella',
		'category' => 'Talvi',
		'image' => 'images/articles/winter-hiking.jpg',
		'imageAlt' => 'Retkeilijä lumisessa metsässä',
		'excerpt' => 'Talvinen luonto vaatii tavallista enemmän suunnittelua.',
		'url' => 'articles/winter-hiking.php',
	],
	[
		'title' => 'Löydä seuraava luontokohteesi Suomessa',
		'category' => 'Matkailu',
		'image' => 'images/articles/destinations-finland.jpg',
		'imageAlt' => 'Suomalainen järvi- ja metsämaisema',
		'excerpt' => 'Etsi omaan matkustustyyliisi sopiva luontokokemus.',
		'url' => 'articles/destinations-finland.php',
	],
];

?>

<main>
	<section class="hero">
		<div class="container hero-content">
			<p class="hero-label">Nordic Escape</p>
			<h1>Ideoita ja inspiraatiota</h1>
			<p>Tutustu matkailuun, retkeilyyn ja pohjoisen luontoon liittyviin artikkeleihin.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-header">
				<p class="section-label">Artikkelit</p>
				<h2>Inspiraatiota seuraavalle matkalle</h2>
			</div>

			<div class="article-search">
				<label for="article-search-input">Hae artikkeleita</label>
				<input
					type="search"
					id="article-search-input"
					placeholder="Esimerkiksi retkeily, talvi tai varusteet"
					autocomplete="off"
					aria-describedby="article-search-results"
				>
				<p
					id="article-search-results"
					class="search-results"
					aria-live="polite"
				>
					Kaikki artikkelit
				</p>
			</div>

			<div class="article-grid">
				<?php foreach ($articles as $article): ?>
					<?php require 'includes/article-card.php'; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<?php require 'includes/footer.php'; ?>