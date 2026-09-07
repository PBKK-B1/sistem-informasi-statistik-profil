const progressBar = document.querySelector('.scroll-progress span');

function updateScrollProgress() {
    if (!progressBar) return;

    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    const progress = scrollable > 0 ? (window.scrollY / scrollable) * 100 : 0;
    progressBar.style.width = `${Math.min(progress, 100)}%`;
}

window.addEventListener('scroll', updateScrollProgress, { passive: true });
updateScrollProgress();

const revealItems = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealItems.forEach((item) => {
        item.classList.add('reveal');
        observer.observe(item);
    });
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

document.querySelectorAll('.navbar-collapse .nav-link').forEach((link) => {
    link.addEventListener('click', () => {
        const menu = document.querySelector('.navbar-collapse.show');
        if (menu && window.bootstrap) {
            window.bootstrap.Collapse.getOrCreateInstance(menu).hide();
        }
    });
});

const calculatorForm = document.querySelector('[data-calculator-form]');

if (calculatorForm) {
    calculatorForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const first = calculatorForm.querySelector('[name="angka1"]').value.trim();
        const second = calculatorForm.querySelector('[name="angka2"]').value.trim();
        const operation = calculatorForm.querySelector('[name="operasi"]').value;

        if (first === '' || second === '') return;

        window.location.href = `/hitung/${encodeURIComponent(first)}/${encodeURIComponent(second)}/${encodeURIComponent(operation)}`;
    });
}
