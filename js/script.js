const toggleMenu = () => {
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".links");

    hamburger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
    });
};

toggleMenu();