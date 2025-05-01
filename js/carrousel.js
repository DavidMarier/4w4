(function () {
    console.log("carrousel.js");

    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousel = document.querySelectorAll(".hero__carrousel");
    let hero__animation = document.querySelectorAll(".hero__animation");
    let index = 0;
    const interval = 5000;

    console.log("hero__radio__input.length = ", hero__radio__input.length);

    hero__radio__input.forEach((elm, i) => {
        hero__radio__input[index].dispatchEvent(new Event("mousedown"));
        console.log("elm.id_carrousel = ", elm.dataset.id_carrousel);
        elm.addEventListener("mousedown", function () {
            index = i;
            parcourir_carrousel();
            parcourir_animation();
            hero__carrousel[index].classList.add("hero__carrousel--active");
            hero__animation[index].classList.add("hero__animation--active");
            elm.checked = true;
        });
    });

    function parcourir_carrousel() {
        hero__carrousel.forEach((img) => {
            img.classList.remove("hero__carrousel--active");
        });
    }

    function parcourir_animation() {
        hero__animation.forEach((elm) => {
            elm.classList.remove("hero__animation--active");
        });
    }

    function changement_boutons_radio() {
        setInterval(() => {
            index = (index + 1) % hero__radio__input.length;
            hero__radio__input[index].dispatchEvent(new Event("mousedown"));
        }, interval);
    }

    changement_boutons_radio();
})();
