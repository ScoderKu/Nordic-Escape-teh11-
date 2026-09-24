<?php

$pageTitle = 'Turvallinen vaellus luonnossa';
$basePath = '../';

$article = [
	'title' => 'Turvallinen vaellus luonnossa',
	'category' => 'Retkeily',
	'image' => 'images/articles/hiking-safety.jpg',
	'imageAlt' => 'Retkeilijä suunnittelemassa reittiä luonnossa',
	'intro' => 'Hyvä retki alkaa valmistautumisesta ja omiin taitoihin sopivan suunnitelman tekemisestä.',
	'sections' => [
		[
			'heading' => 'Tunne suunnitelmasi',
			'paragraphs' => [
				'Tutustu kohteeseen ja reittiin ennen lähtöä. Arvioi samalla, vastaako suunniteltu retki omaa kokemustasi.',
			],
		],
		[
			'heading' => 'Seuraa olosuhteita',
			'paragraphs' => [
				'Olosuhteet voivat vaikuttaa suunnitelmaan. Retken muuttaminen tai keskeyttäminen voi joskus olla järkevämpi vaihtoehto kuin alkuperäisen suunnitelman noudattaminen.',
			],
		],
		[
			'heading' => 'Varaudu muutoksiin',
			'paragraphs' => [
				'Jätä suunnitelmaan joustoa ja arvioi tilannetta uudelleen retken aikana tarvittaessa.',
			],
		],
	],
];

require '../includes/article-template.php';