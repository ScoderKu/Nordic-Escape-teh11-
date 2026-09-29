<?php

$pageTitle = 'Maastopyöräily';
$basePath = '../';

$service = [
	'title' => 'Maastopyöräily',
	'image' => '/images/services/mountain-biking.jpg',
	'imageAlt' => 'Maastopyöräilijä metsäpolulla',
	'intro' => 'Yhdistä liikkuminen, luonto ja aktiivinen matkailuelämys.',
	'heading' => 'Seikkailu alkaa polulta',
	'description' => 'Maastopyöräily tarjoaa aktiivisen tavan nähdä maisemia ja tutustua ympäristöön kahdella pyörällä.',
	'features' => [
		'Reittitiedot',
		'Vaikeustaso',
		'Varustesuositukset',
		'Tietoa valmistautumisesta',
	],
	'check' => 'Reittien pituudet, kestot ja vaikeustasot lisätään vasta varmennettujen tietojen perusteella.',
];

require '../includes/service-template.php';
?>