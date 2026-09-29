<?php

$pageTitle = 'Vaellusretket';
$basePath = '../';

$service = [
	'title' => 'Vaellusretket',
	'image' => $basePath . 'images/services/hiking.jpg',
	'imageAlt' => 'Vaeltaja metsämaisemassa',
	'intro' => 'Hidasta hetkeksi ja lähde tutustumaan pohjoisen luontoon.',
	'heading' => 'Löydä oma polkusi luontoon',
	'description' => 'Nordic Escapen vaellusretket tarjoavat mahdollisuuden tutustua luontoon, maisemiin ja erilaisiin retkeilykokemuksiin.',
	'features' => [
		'Tietoa retken vaativuudesta',
		'Varustesuosituksia',
		'Retken suunnitteluun liittyviä tietoja',
		'Mahdollinen opastus',
	],
	'check' => 'Kohteet, kestot, vaativuustasot ja palveluun sisältyvät asiat täydennetään myöhemmin.',
];

require '../includes/service-template.php';
?>