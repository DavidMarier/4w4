(function () {
    const images = document.querySelectorAll(".hero__carrousel");
    let index = 0;

    function prochaineImage() {

        images[index].classList.remove("active");

        index = (index + 1) % images.length;

        images[index].classList.add("active");
    }
    setInterval(prochaineImage, 5000);
})();