<?php require __DIR__ . '/header.php'; ?>

<main>
	<article>
		<header class="article-hero">
			<div class="container article-header">
				<p class="article-category">
					<?= htmlspecialchars($article['category']) ?>
				</p>
				<h1><?= htmlspecialchars($article['title']) ?></h1>
				<p class="article-intro">
					<?= htmlspecialchars($article['intro']) ?>
				</p>
			</div>
		</header>

		<div class="container">
			<img
				src="<?= htmlspecialchars($article['image']) ?>"
				alt="<?= htmlspecialchars($article['imageAlt']) ?>"
				class="article-main-image"
			>
		</div>

		<div class="container article-layout">
			<div class="article-content">
				<?php foreach ($article['sections'] as $section): ?>
					<section>
						<h2><?= htmlspecialchars($section['heading']) ?></h2>

						<?php foreach ($section['paragraphs'] as $paragraph): ?>
							<p><?= htmlspecialchars($paragraph) ?></p>
						<?php endforeach; ?>
					</section>
				<?php endforeach; ?>

				<p class="article-back-link">
					<a class="text-link" href="articles.php">&larr; Takaisin artikkeleihin</a>
				</p>
			</div>
		</div>
	</article>
</main>

<?php require __DIR__ . '/footer.php'; ?>