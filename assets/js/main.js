function gantiGambar(img){
    document.getElementById("gambarUtama").src = img.src;
}

function revealOnScroll() {
    const reveals = document.querySelectorAll(".reveal");

    reveals.forEach((element) => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const revealPoint = 120;

        if (elementTop < windowHeight - revealPoint) {
            element.classList.add("active");
        } else {
            element.classList.remove("active");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);