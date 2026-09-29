<?php
require __DIR__ . '/header.php';
?>

<main>
	<section class="service-hero">
		<img
			src="<?= htmlspecialchars($service['image']) ?>"
			alt="<?= htmlspecialchars($service['imageAlt']) ?>"
			class="service-hero-image"
		>

		<div class="service-hero-overlay">
			<div class="container">
				<p class="hero-label">Nordic Escape</p>
				<h1><?= htmlspecialchars($service['title']) ?></h1>
				<p><?= htmlspecialchars($service['intro']) ?></p>
			</div>
		</div>
	</section>

	<section class="section section-light service-details">
		<div class="container service-layout">
			<div class="service-main">
				<p class="section-label">Elämys</p>
				<h2><?= htmlspecialchars($service['heading']) ?></h2>
				<p><?= htmlspecialchars($service['description']) ?></p>

				<h2>Mitä kannattaa tietää?</h2>
				<ul class="service-list">
					<?php foreach ($service['features'] as $feature): ?>
						<li><?= htmlspecialchars($feature) ?></li>
					<?php endforeach; ?>
				</ul>

				<div class="check-note">
					<strong>Tarkista:</strong>
					<?= htmlspecialchars($service['check']) ?>
				</div>
			</div>
		</div>
	</section>

	<section class="cta">
		<div class="container">
			<h2>Kiinnostuitko?</h2>
			<p>Ota yhteyttä ja kysy lisää Nordic Escapen elämyksistä.</p>
			<a class="button button-primary" href="../contact.php">Ota yhteyttä</a>
		</div>
	</section>
</main>

<?php
require __DIR__ . '/footer.php';
?>