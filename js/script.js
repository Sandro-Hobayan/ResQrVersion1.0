// Public hamburger
const hamburger = document.querySelector('.hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('menuOverlay');
const closeBtn = document.querySelector('.close-menu');

function openMenu() { mobileMenu.classList.add('active'); overlay.classList.add('active'); document.body.style.overflow = 'hidden'; }
function closeMenu() { mobileMenu.classList.remove('active'); overlay.classList.remove('active'); document.body.style.overflow = ''; }

hamburger?.addEventListener('click', openMenu);
closeBtn?.addEventListener('click', closeMenu);
overlay?.addEventListener('click', closeMenu);

// Modal for guidelines
document.addEventListener('click', e => {
    if (e.target.matches('.read-more-btn')) {
        document.getElementById('modalTitle').textContent = e.target.dataset.title;
        document.getElementById('modalBody').textContent = e.target.dataset.desc;
        document.getElementById('guideModal').style.display = 'flex';
    }
    if (e.target.matches('.close-modal') || e.target.matches('#guideModal')) {
        document.getElementById('guideModal').style.display = 'none';
    }
});