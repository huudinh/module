document.addEventListener("DOMContentLoaded", function() {

    const btnkn1km = document.getElementsByClassName("btnkn1km");
    const popup_regist_1_0_8_overlayClickForm = document.getElementById("popup_regist_1_0_8_overlayClickForm");
    const popup_regist_1_0_8_overlay = document.getElementById("popup_regist_1_0_8_overlay");
    const close_form = document.getElementById("close-form");

    for (const regist of btnkn1km) {
        regist.addEventListener("click", function() {
            popup_regist_1_0_8_overlayClickForm.style.display = "block";
            popup_regist_1_0_8_overlay.style.display = "block";
        });
    }

    close_form.addEventListener("click", function() {
        popup_regist_1_0_8_overlayClickForm.style.display = "none";
        popup_regist_1_0_8_overlay.style.display = "none";
    });

    popup_regist_1_0_8_overlay.addEventListener("click", function() {
        popup_regist_1_0_8_overlayClickForm.style.display = "none";
        popup_regist_1_0_8_overlay.style.display = "none";
    });

});

var regist_ft_1_0_8__box = tns({
    container: '.regist_ft_1_0_8__box',
    items: 4,
    slideBy: 'page',
    autoplay: false,
    autoplayButtonOutput: false,
    mouseDrag: true,
    loop: false,
    nav: false,
    gutter: 0,
    responsive: {
        0: {
            items: 4
        },
        414: {
            items: 4
        },
        768: {
            items: 4
        },
        1024: {
            items: 4
        }
    },
});