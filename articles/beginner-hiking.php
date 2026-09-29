<?php

$pageTitle = 'Aloittelijan opas retkeilyyn';
$basePath = '../';

$article = [
	'title' => 'Aloittelijan opas retkeilyyn',
	'category' => 'Retkeily',
	'image' => $basePath . 'images/articles/hiking.jpg',
	'imageAlt' => 'Retkeilijä kulkemassa metsäpolulla',
	'intro' => 'Ensimmäisen retken ei tarvitse olla pitkä tai vaikea. Hyvä suunnittelu auttaa tekemään kokemuksesta miellyttävämmän.',
	'sections' => [
		[
			'heading' => 'Aloita yksinkertaisesti',
			'paragraphs' => [
				'Valitse ensimmäiseksi retkeksi omaan kokemukseesi sopiva kohde. Tavoitteena ei tarvitse olla pitkä matka, vaan luonnossa liikkumiseen tutustuminen.',
			],
		],
		[
			'heading' => 'Suunnittele ennen lähtöä',
			'paragraphs' => [
				'Tutustu valitsemaasi reittiin etukäteen ja mieti, millaisia varusteita juuri kyseisellä retkellä tarvitaan.',
				'Suunnitelmaa kannattaa pystyä muuttamaan, jos olosuhteet eivät vastaa odotuksia.',
			],
		],
		[
			'heading' => 'Nauti matkasta',
			'paragraphs' => [
				'Retkeilyssä ei tarvitse kiirehtiä. Pidä taukoja ja anna aikaa ympäristön kokemiseen.',
			],
		],
	],
];

require '../includes/article-template.php';