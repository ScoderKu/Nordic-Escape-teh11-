<?php

$pageTitle = 'Talviretket';
$basePath = '../';

$service = [
	'title' => 'Talviretket',
	'image' => $basePath . 'images/services/winter.jpg',
	'imageAlt' => 'Talvinen metsämaisema',
	'intro' => 'Tutustu pohjoisen luonnon tunnelmaan talvikaudella.',
	'heading' => 'Talvi näyttää luonnon toisen puolen',
	'description' => 'Talviset maisemat tarjoavat erilaisen ympäristön luonnossa liikkumiseen ja uusiin elämyksiin.',
	'features' => [
		'Tietoa aktiviteetin vaativuudesta',
		'Varustesuosituksia',
		'Tietoa olosuhteista',
		'Valmistautumisohjeita',
	],
	'check' => 'Tarjottavat talviaktiviteetit sekä niiden tarkat vaatimukset päätetään myöhemmin.',
];

require '../includes/service-template.php';
?>