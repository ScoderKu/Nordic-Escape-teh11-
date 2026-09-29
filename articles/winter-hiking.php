<?php

$pageTitle = 'Retkeily talvella';
$basePath = '../';

$article = [
	'title' => 'Retkeily talvella',
	'category' => 'Talvi',
	'image' => '/images/articles/winter-hiking.jpg',
	'imageAlt' => 'Retkeilijä lumisessa metsämaisemassa',
	'intro' => 'Talvinen luonto tarjoaa erilaisen retkeilykokemuksen ja vaatii tavallista enemmän huomiota suunnitteluun.',
	'sections' => [
		[
			'heading' => 'Suunnittele olosuhteiden mukaan',
			'paragraphs' => [
				'Talvisen retken suunnittelussa kannattaa huomioida retken luonne, omat taidot ja vallitsevat olosuhteet.',
			],
		],
		[
			'heading' => 'Valmistaudu etukäteen',
			'paragraphs' => [
				'Pukeutumista ja mukaan otettavia varusteita kannattaa miettiä ennen lähtöä juuri suunnitellun retken tarpeiden perusteella.',
			],
		],
		[
			'heading' => 'Pidä suunnitelma joustavana',
			'paragraphs' => [
				'Jos olosuhteet muuttuvat, myös suunnitelmaa pitää pystyä muuttamaan.',
			],
		],
	],
];

require '../includes/article-template.php';