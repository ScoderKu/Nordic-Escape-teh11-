<?php

$pageTitle = 'Melontaretket';
$basePath = '../';

$service = [
	'title' => 'Melontaretket',
	'image' => 'images/services/kayaking.jpg',
	'imageAlt' => 'Meloja järvimaisemassa',
	'intro' => 'Koe maisemat uudesta näkökulmasta ja vietä aikaa vesillä.',
	'heading' => 'Koe luonto vesiltä',
	'description' => 'Melonta tarjoaa rauhallisen ja aktiivisen tavan tutustua ympäröivään luontoon ja maisemiin.',
	'features' => [
		'Tietoa retken vaativuudesta',
		'Varustetiedot',
		'Tietoa aikaisemman kokemuksen tarpeesta',
		'Retkikohtaiset valmistautumisohjeet',
	],
	'check' => 'Todelliset kohteet, varusteet ja osallistumisvaatimukset tarkistetaan myöhemmin.',
];

require '../includes/service-template.php';
?>