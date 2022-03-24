document.addEventListener("DOMContentLoaded", function() {
    const bvkn_dkcall = document.getElementsByClassName("popup_map_1_0_0__click");
    const popup_map_1_0_0_overlayClickform = document.getElementById("popup_map_1_0_0_overlayClickform");
    const popup_map_1_0_0_overlay = document.getElementById("popup_map_1_0_0_overlay");
    const popup_map_1_0_0_closePopup = document.getElementById("popup_map_1_0_0__close");
    for (const call of bvkn_dkcall) {
        call.addEventListener("click", function() {
            popup_map_1_0_0_overlayClickform.style.display = "flex";
            popup_map_1_0_0_overlay.style.display = "block";
        });
    }
    popup_map_1_0_0_closePopup.addEventListener("click", function() {
        popup_map_1_0_0_overlayClickform.style.display = "none";
        popup_map_1_0_0_overlay.style.display = "none";
    });
    popup_map_1_0_0_overlay.addEventListener("click", function() {
        popup_map_1_0_0_overlayClickform.style.display = "none";
        popup_map_1_0_0_overlay.style.display = "none";
    });
});