function toggleMenu () {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}

function displayLocalTime() {
    var userLocalTime = new Date();
    var hours = userLocalTime.getHours();
    var minutes = userLocalTime.getMinutes();
}