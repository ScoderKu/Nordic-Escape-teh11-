<?php

$pageTitle = 'Galleria';
$basePath = '';

require 'includes/header.php';

$galleryImages = [
	[
		'src' => $basePath . 'images/gallery/hiking.jpg',
		'alt' => 'Retkeilijä luonnon keskellä',
		'caption' => 'Retkeily',
	],
	[
		'src' => $basePath . 'images/gallery/lake.jpg',
		'alt' => 'Järvimaisema suomalaisessa luonnossa',
		'caption' => 'Järvimaisema',
	],
	[
		'src' => $basePath . 'images/gallery/kayaking.jpg',
		'alt' => 'Meloja järvellä',
		'caption' => 'Melonta',
	],
	[
		'src' => $basePath . 'images/gallery/forest.jpg',
		'alt' => 'Vihreä metsämaisema',
		'caption' => 'Metsä',
	],
	[
		'src' => $basePath . 'images/gallery/cycling.jpg',
		'alt' => 'Maastopyöräilijä metsäpolulla',
		'caption' => 'Maastopyöräily',
	],
	[
		'src' => $basePath . 'images/gallery/winter.jpg',
		'alt' => 'Luminen metsä talvella',
		'caption' => 'Talvi',
	],
	[
		'src' => $basePath . 'images/gallery/campfire.jpg',
		'alt' => 'Nuotio luonnon keskellä',
		'caption' => 'Luontoelämys',
	],
	[
		'src' => $basePath . 'images/gallery/landscape.jpg',
		'alt' => 'Pohjoismainen luontomaisema',
		'caption' => 'Pohjoisen maisemat',
	],
];

?>

<main>
	<section class="hero">
		<div class="container hero-content">
			<p class="hero-label">Nordic Escape</p>
			<h1>Kuvagalleria</h1>
			<p>Tutustu pohjoisen luontoon, maisemiin ja outdoor-elämyksiin kuvien kautta.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-header">
				<p class="section-label">Galleria</p>
				<h2>Hetkiä luonnosta</h2>
				<p>Löydä inspiraatiota seuraavaan matkaan ja tutustu Nordic Escapen tunnelmaan.</p>
			</div>

			<div class="gallery-grid">
				<?php foreach ($galleryImages as $image): ?>
					<figure class="gallery-item">
						<button
							class="gallery-button"
							type="button"
							data-gallery-image="<?= htmlspecialchars($image['src']) ?>"
							data-gallery-alt="<?= htmlspecialchars($image['alt']) ?>"
							data-gallery-caption="<?= htmlspecialchars($image['caption']) ?>"
							aria-label="Avaa kuva: <?= htmlspecialchars($image['caption']) ?>"
						>
							<img
								src="<?= htmlspecialchars($image['src']) ?>"
								alt="<?= htmlspecialchars($image['alt']) ?>"
								loading="lazy"
							>
						</button>
						<figcaption><?= htmlspecialchars($image['caption']) ?></figcaption>
					</figure>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<div
	class="lightbox"
	id="gallery-lightbox"
	hidden
	role="dialog"
	aria-modal="true"
	aria-labelledby="lightbox-caption"
>
	<div class="lightbox-content">
		<button
			class="lightbox-close"
			type="button"
			aria-label="Sulje kuva"
		>
			&times;
		</button>
			<img id="lightbox-image" alt="">
		<p id="lightbox-caption"></p>
	</div>
</div>

<?php require 'includes/footer.php'; ?>