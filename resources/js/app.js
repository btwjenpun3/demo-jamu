import './bootstrap';

function initCarousels() {
	const carousels = document.querySelectorAll('[data-carousel-track]');

	carousels.forEach((track) => {
		const shell = track.closest('.carousel-shell');
		const prevButton = shell?.querySelector('[data-carousel-prev]');
		const nextButton = shell?.querySelector('[data-carousel-next]');
		const dotsContainer = shell?.parentElement?.querySelector('[data-carousel-dots]');
		const slides = Array.from(track.children);

		if (!slides.length) {
			return;
		}

		const getSlideWidth = () => {
			const slide = slides[0];
			return slide.getBoundingClientRect().width + parseFloat(getComputedStyle(track).gap || '0');
		};

		const updateDots = () => {
			if (!dotsContainer) {
				return;
			}

			const currentIndex = Math.round(track.scrollLeft / getSlideWidth());

			dotsContainer.querySelectorAll('[data-carousel-dot]').forEach((dot, index) => {
				dot.setAttribute('aria-current', index === currentIndex ? 'true' : 'false');
				dot.classList.toggle('bg-[#8a5a34]', index === currentIndex);
				dot.classList.toggle('bg-[#d7b690]', index !== currentIndex);
			});
		};

		const scrollToIndex = (index) => {
			const slideWidth = getSlideWidth();
			track.scrollTo({ left: slideWidth * index, behavior: 'smooth' });
		};

		if (prevButton) {
			prevButton.addEventListener('click', () => {
				const slideWidth = getSlideWidth();
				track.scrollBy({ left: -slideWidth, behavior: 'smooth' });
			});
		}

		if (nextButton) {
			nextButton.addEventListener('click', () => {
				const slideWidth = getSlideWidth();
				track.scrollBy({ left: slideWidth, behavior: 'smooth' });
			});
		}

		if (dotsContainer) {
			dotsContainer.innerHTML = slides
				.map(
					(_, index) =>
						`<button type="button" data-carousel-dot aria-label="Slide ${index + 1}" class="h-2.5 w-8 rounded-full bg-[#d7b690] transition" aria-current="${index === 0 ? 'true' : 'false'}"></button>`,
				)
				.join('');

			dotsContainer.querySelectorAll('[data-carousel-dot]').forEach((dot, index) => {
				dot.addEventListener('click', () => scrollToIndex(index));
			});
		}

		track.addEventListener('scroll', () => {
			window.requestAnimationFrame(updateDots);
		});

		window.addEventListener('resize', updateDots, { passive: true });
		updateDots();
	});
}

document.addEventListener('DOMContentLoaded', initCarousels);
