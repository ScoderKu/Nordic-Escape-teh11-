<?php
$pageTitle = $pageTitle ?? 'Nordic Escape';
$basePath = $basePath ?? '';
?>

<!DOCTYPE html>
<html lang="fi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= htmlspecialchars($pageTitle) ?> | Nordic Escape</title>
	<link rel="stylesheet" href="<?= htmlspecialchars($basePath) ?>css/style.css">
</head>

<body>

	<header class="site-header">
		<div class="container header-container">
			<a class="logo" href="<?= htmlspecialchars($basePath) ?>index.html">
				Nordic Escape
			</a>

			<nav class="main-nav" aria-label="Päänavigaatio">
				<ul>
					<li><a href="<?= htmlspecialchars($basePath) ?>index.html">Etusivu</a></li>
					<li><a href="<?= htmlspecialchars($basePath) ?>services.php">Palvelut</a></li>
					<li><a href="<?= htmlspecialchars($basePath) ?>articles.php">Artikkelit</a></li>
					<li><a href="<?= htmlspecialchars($basePath) ?>gallery.html">Galleria</a></li>
					<li><a href="<?= htmlspecialchars($basePath) ?>faq.html">FAQ</a></li>
					<li><a href="<?= htmlspecialchars($basePath) ?>contact.html">Yhteystiedot</a></li>
				</ul>
			</nav>
		</div>
	</header>