<?php
$basePath = '';

require 'includes/header.php';

$services = [
	[
		'title' => 'Vaellusretket',
		'image' => 'images/services/hiking.jpg',
		'alt' => 'Vaeltaja metsämaisemassa',
		'text' => 'Löydä uusia maisemia ja koe luonto jalan.',
		'url' => 'services/hiking.php',
	],
	[
		'title' => 'Melontaretket',
		'image' => 'images/services/kayaking.jpg',
		'alt' => 'Meloja järvimaisemassa',
		'text' => 'Tutustu maisemiin vesiltä käsin.',
		'url' => 'services/kayaking.php',
	],
	[
		'title' => 'Maastopyöräily',
		'image' => 'images/services/mountain-biking.jpg',
		'alt' => 'Maastopyöräilijä metsäpolulla',
		'text' => 'Yhdistä luonto ja aktiivinen liikkuminen.',
		'url' => 'services/mountain-biking.php',
	],
	[
		'title' => 'Talviretket',
		'image' => 'images/services/winter.jpg',
		'alt' => 'Talvinen metsämaisema',
		'text' => 'Koe pohjoisen luonto talvisessa maisemassa.',
		'url' => 'services/winter.php',
	],
	[
		'title' => 'Outdoor-kurssit',
		'image' => 'images/services/outdoor-courses.jpg',
		'alt' => 'Outdoor-taitojen harjoittelua',
		'text' => 'Opi uusia taitoja luonnossa liikkumiseen.',
		'url' => 'services/outdoor-courses.php',
	],
];

?>

<main>
	<section class="hero">
		<div class="container hero-content">
			<p class="hero-label">Nordic Escape</p>
			<h1>Elämyksiä luonnossa</h1>
			<p>Tutustu erilaisiin tapoihin kokea luonto, matkailu ja pohjoisen maisemat.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-header">
				<p class="section-label">Palvelut</p>
				<h2>Löydä seuraava elämyksesi</h2>
			</div>

			<div class="card-grid">
				<?php foreach ($services as $item): ?>
					<article class="card">
						<img
							src="<?= htmlspecialchars($item['image']) ?>"
							alt="<?= htmlspecialchars($item['alt']) ?>"
							class="card-image"
							loading="lazy"
						>

						<div class="card-content">
							<h3><?= htmlspecialchars($item['title']) ?></h3>
							<p><?= htmlspecialchars($item['text']) ?></p>
							<a class="text-link" href="<?= htmlspecialchars($item['url']) ?>">
								Tutustu palveluun &rarr;
							</a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<?php require 'includes/footer.php'; ?>