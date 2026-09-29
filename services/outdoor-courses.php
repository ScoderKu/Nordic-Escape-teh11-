<?php

$pageTitle = 'Outdoor-kurssit';
$basePath = '../';

$service = [
	'title' => 'Outdoor-kurssit',
	'image' => $basePath . 'images/services/outdoor-courses.jpg',
	'imageAlt' => 'Outdoor-taitojen harjoittelua luonnossa',
	'intro' => 'Kehitä taitojasi ja lisää varmuutta luonnossa liikkumiseen.',
	'heading' => 'Opi uusia outdoor-taitoja',
	'description' => 'Kurssien tavoitteena on tarjota käytännöllisiä taitoja luonnossa liikkumiseen ja outdoor-harrastuksiin.',
	'features' => [
		'Retkeilyn perustaidot',
		'Suunnistuksen perusteet',
		'Varusteiden käyttö',
		'Luonnossa liikkumiseen liittyvät käytännön taidot',
	],
	'check' => 'Kurssien todellinen sisältö, kouluttajat ja osallistumisvaatimukset määritellään myöhemmin.',
];

require '../includes/service-template.php';
?>