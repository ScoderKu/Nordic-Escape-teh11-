<article class="article-card" data-article-card>
	<img
		src="<?= htmlspecialchars($article['image']) ?>"
		alt="<?= htmlspecialchars($article['imageAlt']) ?>"
		class="article-card-image"
		loading="lazy"
	>

	<div class="article-card-content">
		<p class="article-category">
			<?= htmlspecialchars($article['category']) ?>
		</p>

		<h3>
			<?= htmlspecialchars($article['title']) ?>
		</h3>

		<p>
			<?= htmlspecialchars($article['excerpt']) ?>
		</p>

		<a class="text-link" href="<?= htmlspecialchars($article['url']) ?>">
			Lue lisää &rarr;
		</a>
	</div>
</article>