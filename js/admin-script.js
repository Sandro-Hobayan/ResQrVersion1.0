const adminHamburger = document.querySelector('.admin-hamburger');
const adminMobileMenu = document.getElementById('adminMobileMenu');
const adminOverlay = document.getElementById('adminMenuOverlay');
const adminClose = document.querySelector('.admin-close-menu');

function openAdminMenu() { adminMobileMenu.classList.add('active'); adminOverlay.classList.add('active'); document.body.style.overflow = 'hidden'; }
function closeAdminMenu() { adminMobileMenu.classList.remove('active'); adminOverlay.classList.remove('active'); document.body.style.overflow = ''; }

adminHamburger?.addEventListener('click', openAdminMenu);
adminClose?.addEventListener('click', closeAdminMenu);
adminOverlay?.addEventListener('click', closeAdminMenu);