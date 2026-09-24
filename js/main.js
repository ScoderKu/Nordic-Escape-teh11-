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