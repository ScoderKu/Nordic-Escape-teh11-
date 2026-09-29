<?php
$pageTitle = 'Yhteystiedot';
$basePath = '';
$formStatus = '';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
	$formStatus = 'Lomaketta ei vielä voi lähettää. Ota yhteyttä sähköpostitse osoitteeseen Khoi@nordicescape.fi.';
}

require 'includes/header.php';
?>

<main>
	<section class="hero">
		<div class="container hero-content">
			<p class="hero-label">Nordic Escape</p>
			<h1>Ota yhteyttä</h1>
			<p>Onko sinulla kysyttävää matkakohteesta, aktiviteetista tai Nordic Escapen sisällöstä? Lähetä meille viesti.</p>
		</div>
	</section>

	<section class="section">
		<div class="container contact-layout">
			<div class="contact-intro">
				<p class="section-label">Yhteystiedot</p>
				<h2>Miten voimme auttaa?</h2>
				<p>Kerro lyhyesti, mistä olet kiinnostunut ja miten voimme auttaa.</p>

				<div class="contact-details">
					<h3>Nordic Escape</h3>
					<p><strong>Sähköposti:</strong><br>Khoi@nordicescape.fi</p>
					<p><strong>Puhelin:</strong><br>040 123 4567</p>
					<p><strong>Sijainti:</strong><br>Savon Ammattiopisto, Kuopio, Suomi</p>
				</div>
			</div>

			<div class="contact-form-wrapper">
				<form action="contact.php" method="post" id="contact-form" class="contact-form">
					<div class="form-field">
						<label for="name">Nimi</label>
						<input
							type="text"
							id="name"
							name="name"
							autocomplete="name"
							required
							aria-describedby="name-error"
						>
						<p class="form-error" id="name-error" aria-live="polite"></p>
					</div>

					<div class="form-field">
						<label for="email">Sähköposti</label>
						<input
							type="email"
							id="email"
							name="email"
							autocomplete="email"
							required
							aria-describedby="email-error"
						>
						<p class="form-error" id="email-error" aria-live="polite"></p>
					</div>

					<div class="form-field">
						<label for="subject">Aihe</label>
						<select
							id="subject"
							name="subject"
							required
							aria-describedby="subject-error"
						>
							<option value="">Valitse aihe</option>
							<option value="hiking">Vaellusretket</option>
							<option value="kayaking">Melontaretket</option>
							<option value="cycling">Maastopyöräily</option>
							<option value="winter">Talviretket</option>
							<option value="courses">Outdoor-kurssit</option>
							<option value="other">Muu kysymys</option>
						</select>
						<p class="form-error" id="subject-error" aria-live="polite"></p>
					</div>

					<div class="form-field">
						<label for="message">Viesti</label>
						<textarea
							id="message"
							name="message"
							rows="7"
							required
							aria-describedby="message-error"
						></textarea>
						<p class="form-error" id="message-error" aria-live="polite"></p>
					</div>

					<div class="form-field form-checkbox">
						<input
							type="checkbox"
							id="privacy"
							name="privacy"
							required
							aria-describedby="privacy-error"
						>
						<label for="privacy">
							Olen tutustunut
							<a href="privacy.php">tietosuojaselosteeseen</a>.
						</label>
					</div>

					<p class="form-error" id="privacy-error" aria-live="polite"></p>
					<button type="submit" class="button button-primary">Lähetä viesti</button>
					<p id="form-status" class="form-status" aria-live="polite"><?= htmlspecialchars($formStatus) ?></p>
				</form>
			</div>
		</div>
	</section>
</main>

<?php require 'includes/footer.php'; ?>