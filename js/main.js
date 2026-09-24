// Nordic Escape
// Sivuston yhteiset JavaScript-toiminnot.

const articleSearchInput = document.querySelector("#article-search-input");
const articleCards = document.querySelectorAll("[data-article-card]");
const articleSearchResults = document.querySelector("#article-search-results");

if (articleSearchInput && articleCards.length > 0 && articleSearchResults) {
	articleSearchInput.addEventListener("input", function () {
		const searchTerm = articleSearchInput.value.trim().toLowerCase();
		let visibleArticles = 0;

		articleCards.forEach(function (card) {
			const articleText = card.textContent.toLowerCase();
			const matchesSearch =
				searchTerm === "" || articleText.includes(searchTerm);

			card.hidden = !matchesSearch;

			if (matchesSearch) {
				visibleArticles++;
			}
		});

		updateSearchResults(searchTerm, visibleArticles);
	});
}

function updateSearchResults(searchTerm, resultCount) {
	if (!articleSearchResults) {
		return;
	}

	if (searchTerm === "") {
		articleSearchResults.textContent = "Kaikki artikkelit";
		return;
	}

	if (resultCount === 0) {
		articleSearchResults.textContent = "Artikkeleita ei löytynyt.";
		return;
	}

	if (resultCount === 1) {
		articleSearchResults.textContent = "1 artikkeli löytyi.";
		return;
	}

	articleSearchResults.textContent = resultCount + " artikkelia löytyi.";
}

// =========================
// Gallery lightbox
// =========================

const galleryButtons = document.querySelectorAll("[data-gallery-image]");
const galleryLightbox = document.querySelector("#gallery-lightbox");
const lightboxImage = document.querySelector("#lightbox-image");
const lightboxCaption = document.querySelector("#lightbox-caption");
const lightboxCloseButton = document.querySelector(".lightbox-close");

let lastFocusedGalleryButton = null;

if (
  galleryButtons.length > 0 &&
  galleryLightbox &&
  lightboxImage &&
  lightboxCaption &&
  lightboxCloseButton
) {
	galleryButtons.forEach(function (button) {
		button.addEventListener("click", function () {
			const imageSrc = button.dataset.galleryImage;
			const imageAlt = button.dataset.galleryAlt;
			const imageCaption = button.dataset.galleryCaption;

			lastFocusedGalleryButton = button;

			lightboxImage.src = imageSrc;
			lightboxImage.alt = imageAlt;
			lightboxCaption.textContent = imageCaption;

			galleryLightbox.hidden = false;
			lightboxCloseButton.focus();
		});
	});

	lightboxCloseButton.addEventListener("click", function () {
		closeGalleryLightbox();
	});

	galleryLightbox.addEventListener("click", function (event) {
		if (event.target === galleryLightbox) {
			closeGalleryLightbox();
		}
	});

	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape" && !galleryLightbox.hidden) {
			closeGalleryLightbox();
		}
	});
}

function closeGalleryLightbox() {
  if (!galleryLightbox) {
    return;
  }

  galleryLightbox.hidden = true;

  lightboxImage.src = "";
  lightboxImage.alt = "";

  if (lastFocusedGalleryButton) {
    lastFocusedGalleryButton.focus();
  }
}

// =========================
// Contact form
// =========================

const contactForm = document.querySelector("#contact-form");

if (contactForm) {
	contactForm.addEventListener("submit", function (event) {
		event.preventDefault();
		clearFormErrors();

		const nameInput = document.querySelector("#name");
		const emailInput = document.querySelector("#email");
		const subjectInput = document.querySelector("#subject");
		const messageInput = document.querySelector("#message");
		const privacyInput = document.querySelector("#privacy");
		const formStatus = document.querySelector("#form-status");
		let formIsValid = true;

		// Name
		if (nameInput.value.trim() === "") {
			showFormError(nameInput, "name-error", "Kirjoita nimesi.");
			formIsValid = false;
		}

		// Email
		const email = emailInput.value.trim();

		if (email === "") {
			showFormError(
				emailInput,
				"email-error",
				"Kirjoita sähköpostiosoitteesi."
			);
			formIsValid = false;
		} else if (!isValidEmail(email)) {
			showFormError(
				emailInput,
				"email-error",
				"Kirjoita kelvollinen sähköpostiosoite."
			);
			formIsValid = false;
		}

		// Subject
		if (subjectInput.value === "") {
			showFormError(subjectInput, "subject-error", "Valitse viestin aihe.");
			formIsValid = false;
		}

		// Message
		if (messageInput.value.trim() === "") {
			showFormError(messageInput, "message-error", "Kirjoita viesti.");
			formIsValid = false;
		}

		// Privacy
		if (!privacyInput.checked) {
			document.querySelector("#privacy-error").textContent =
				"Hyväksy tietosuojaseloste ennen lähettämistä.";
			formIsValid = false;
		}

		// Result
		if (formIsValid) {
			formStatus.textContent =
				"Lomake on täytetty oikein. Viestin lähetys toteutetaan myöhemmin palvelinpuolella.";
		} else {
			formStatus.textContent = "Tarkista lomakkeen tiedot.";
			const firstError = contactForm.querySelector(".input-error");

			if (firstError) {
				firstError.focus();
			}
		}
	});
}

function isValidEmail(email) {
	const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

	return emailPattern.test(email);
}

function showFormError(input, errorId, message) {
	input.classList.add("input-error");
	input.setAttribute("aria-invalid", "true");

	const errorElement = document.querySelector("#" + errorId);

	if (errorElement) {
		errorElement.textContent = message;
	}
}

function clearFormErrors() {
	if (!contactForm) {
		return;
	}

	const invalidInputs = contactForm.querySelectorAll(".input-error");

	invalidInputs.forEach(function (input) {
		input.classList.remove("input-error");
		input.removeAttribute("aria-invalid");
	});

	const errorMessages = contactForm.querySelectorAll(".form-error");

	errorMessages.forEach(function (error) {
		error.textContent = "";
	});

	const formStatus = document.querySelector("#form-status");

	if (formStatus) {
		formStatus.textContent = "";
	}
}

// =========================
// FAQ accordion
// =========================

const faqQuestions = document.querySelectorAll(".faq-question");

if (faqQuestions.length > 0) {
	faqQuestions.forEach(function (question) {
		question.addEventListener("click", function () {
			const answerId = question.getAttribute("aria-controls");
			const answer = document.querySelector("#" + answerId);

			if (!answer) {
				return;
			}

			const isOpen = question.getAttribute("aria-expanded") === "true";

			question.setAttribute("aria-expanded", String(!isOpen));
			answer.hidden = isOpen;

			const icon = question.querySelector(".faq-icon");

			if (icon) {
				icon.textContent = isOpen ? "+" : "−";
			}
		});
	});
}