const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 200) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

window.addEventListener("scroll", function() {
    var nav = document.querySelector("nav");
    nav.classList.toggle("shrink", window.scrollY > 1);
})