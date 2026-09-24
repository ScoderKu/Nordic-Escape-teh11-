<?php

$pageTitle = 'Löydä seuraava luontokohteesi Suomessa';
$basePath = '../';

$article = [
	'title' => 'Löydä seuraava luontokohteesi Suomessa',
	'category' => 'Matkailu',
	'image' => 'images/articles/destinations-finland.jpg',
	'imageAlt' => 'Suomalainen järvi- ja metsämaisema',
	'intro' => 'Etsitkö rauhallista luontokokemusta vai aktiivisempaa matkaa? Kohdetta kannattaa lähestyä oman matkustustyylin kautta.',
	'sections' => [
		[
			'heading' => 'Rauhaa luonnossa',
			'paragraphs' => [
				'Jos tavoitteenasi on rauhallinen matka, voit etsiä kohdetta, jossa pääset keskittymään maisemiin ja luonnossa olemiseen.',
			],
		],
		[
			'heading' => 'Aktiivinen matka',
			'paragraphs' => [
				'Aktiivisempaan lomaan voidaan yhdistää esimerkiksi retkeilyä, pyöräilyä tai muita ulkoiluelämyksiä.',
			],
		],
		[
			'heading' => 'Löydä oma matkasi',
			'paragraphs' => [
				'Nordic Escapen tavoitteena on myöhemmin helpottaa erilaisten matkakohteiden ja elämysten löytämistä samasta paikasta.',
			],
		],
	],
];

require '../includes/article-template.php';