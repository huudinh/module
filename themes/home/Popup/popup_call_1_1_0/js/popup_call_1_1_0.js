document.addEventListener("DOMContentLoaded", function() {
    const bvkn_dkcall = document.getElementsByClassName("bvkn_dkcall");
    const popup_call_1_1_0_overlayClickform = document.getElementById("popup_call_1_1_0_overlayClickform");
    const popup_call_1_1_0_overlay = document.getElementById("popup_call_1_1_0_overlay");
    const popup_call_1_1_0_closePopup = document.getElementById("popup_call_1_1_0_closePopup");
    for (const call of bvkn_dkcall) {
        call.addEventListener("click", function() {
            popup_call_1_1_0_overlayClickform.style.display = "block";
            popup_call_1_1_0_overlay.style.display = "block";
        });
    }
    popup_call_1_1_0_closePopup.addEventListener("click", function() {
        popup_call_1_1_0_overlayClickform.style.display = "none";
        popup_call_1_1_0_overlay.style.display = "none";
    });
    popup_call_1_1_0_overlay.addEventListener("click", function() {
        popup_call_1_1_0_overlayClickform.style.display = "none";
        popup_call_1_1_0_overlay.style.display = "none";
    });
});