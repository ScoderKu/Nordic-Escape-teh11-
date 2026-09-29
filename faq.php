<?php

$pageTitle = 'Usein kysytyt kysymykset';
$basePath = '';

require 'includes/header.php';

$faqItems = [
	[
		'question' => 'Kenelle Nordic Escapen palvelut sopivat?',
		'answer' => 'Nordic Escapen tavoitteena on tarjota vaihtoehtoja erilaisille matkailijoille ja luonnosta kiinnostuneille. Tarkista aina valitsemasi aktiviteetin vaativuus ja osallistumisvaatimukset palvelusivulta.',
	],
	[
		'question' => 'Tarvitsenko aikaisempaa kokemusta?',
		'answer' => 'Se riippuu valitusta aktiviteetista. Osa elämyksistä voidaan suunnata aloittelijoille ja osa kokeneemmille osallistujille. Tarkemmat vaatimukset ilmoitetaan myöhemmin jokaisen palvelun yhteydessä.',
	],
	[
		'question' => 'Mitä minun pitää ottaa mukaan?',
		'answer' => 'Tarvittavat varusteet riippuvat aktiviteetista, vuodenajasta ja olosuhteista. Tarkista aina palvelukohtaiset varuste- ja valmistautumisohjeet ennen lähtöä.',
	],
	[
		'question' => 'Voinko vuokrata varusteita?',
		'answer' => 'Varusteiden vuokrausta ei ole vielä määritelty Nordic Escapen palveluihin. Tämä tieto täydennetään myöhemmin, kun palveluiden lopullinen sisältö on päätetty.',
	],
	[
		'question' => 'Miten teen varauksen?',
		'answer' => 'Varsinaista verkkovarausjärjestelmää tai toimivaa yhteydenottolomaketta ei ole vielä käytössä. Voit tiedustella palveluista sähköpostitse osoitteesta Khoi@nordicescape.fi.',
	],
	[
		'question' => 'Mitä tapahtuu, jos sää on huono?',
		'answer' => 'Sään vaikutus riippuu aktiviteetista ja palvelusta. Lopulliset käytännöt esimerkiksi retken siirtämisestä tai peruuttamisesta määritellään palveluehdoissa myöhemmin.',
	],
	[
		'question' => 'Voinko peruuttaa varauksen?',
		'answer' => 'Peruutusehtoja ei ole vielä määritelty. Ennen varsinaisen varausjärjestelmän käyttöönottoa sivustolle lisätään selkeät tiedot varaus- ja peruutusehdoista.',
	],
	[
		'question' => 'Miten voin ottaa yhteyttä?',
		'answer' => 'Voit ottaa yhteyttä sähköpostitse osoitteeseen Khoi@nordicescape.fi tai puhelimitse numeroon 040 123 4567. Yhteydenottolomaketta ei vielä ole kytketty viestien lähettämiseen.',
	],
];

?>

<main id="main-content">
	<section class="hero">
		<div class="container hero-content">
			<p class="hero-label">Nordic Escape</p>
			<h1>Usein kysytyt kysymykset</h1>
			<p>Löydä vastauksia Nordic Escapen palveluihin, retkiin ja käytännön asioihin liittyviin kysymyksiin.</p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-header">
				<p class="section-label">FAQ</p>
				<h2>Miten voimme auttaa?</h2>
				<p>Tutustu yleisimpiin kysymyksiin. Jos et löydä vastausta, voit ottaa meihin yhteyttä.</p>
			</div>

			<div class="faq-list">
				<?php foreach ($faqItems as $index => $item): ?>
					<?php
					$buttonId = 'faq-button-' . $index;
					$answerId = 'faq-answer-' . $index;
					?>

					<div class="faq-item">
						<h3 class="faq-heading">
							<button
								type="button"
								class="faq-question"
								id="<?= $buttonId ?>"
								aria-expanded="false"
								aria-controls="<?= $answerId ?>"
							>
								<span><?= htmlspecialchars($item['question']) ?></span>
								<span class="faq-icon" aria-hidden="true">+</span>
							</button>
						</h3>

						<div
							class="faq-answer"
							id="<?= $answerId ?>"
							role="region"
							aria-labelledby="<?= $buttonId ?>"
							hidden
						>
							<p><?= htmlspecialchars($item['answer']) ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="cta">
		<div class="container">
			<h2>Etkö löytänyt vastausta?</h2>
			<p>Lähetä meille viesti, jos haluat kysyä lisää Nordic Escapen palveluista tai sisällöstä.</p>
			<a class="button button-primary" href="contact.php">Ota yhteyttä</a>
		</div>
	</section>
</main>

<?php require 'includes/footer.php'; ?>