function toggleMenu () {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}

function footerYear () {
    const currentYear = new Date().getFullYear();
    document.querySelector('footer p').textContent += ` ${currentYear}`;
}