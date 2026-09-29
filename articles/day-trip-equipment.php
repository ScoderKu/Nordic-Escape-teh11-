<?php

$pageTitle = 'Mitä mukaan päiväretkelle?';
$basePath = '../';

$article = [
	'title' => 'Mitä mukaan päiväretkelle?',
	'category' => 'Varusteet',
	'image' => '/images/articles/day-trip-equipment.jpg',
	'imageAlt' => 'Retkeilyvarusteita valmiina päiväretkelle',
	'intro' => 'Sopiva varustus riippuu retkestä, olosuhteista ja omista tarpeista. Pakkaaminen kannattaa aloittaa suunnitelmasta.',
	'sections' => [
		[
			'heading' => 'Pakkaa retken mukaan',
			'paragraphs' => [
				'Mieti ensin, minne olet menossa, kuinka pitkästä retkestä on kyse ja millaisissa olosuhteissa liikut.',
				'Näiden tietojen perusteella on helpompi arvioida mukaan tarvittavia vaatteita, ruokaa, juomaa ja muita henkilökohtaisia varusteita.',
			],
		],
		[
			'heading' => 'Pidä pakkaaminen yksinkertaisena',
			'paragraphs' => [
				'Kaikkea mahdollista ei tarvitse ottaa mukaan. Tärkeintä on, että mukana olevat varusteet sopivat juuri suunniteltuun retkeen.',
			],
		],
	],
];

require '../includes/article-template.php';