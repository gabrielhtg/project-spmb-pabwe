// Modal dialog
function createPopUp(id) {
    let popupNode = document.querySelector(id);
    let overlay = popupNode.querySelector(".overlay");
    let closeBtn = popupNode.querySelector(".btn-close");

    function openPopup() {
        popupNode.classList.add("active");
    }

    function closePopup() {
        popupNode.classList.remove("active");
    }

    overlay.addEventListener("click", closePopup);
    closeBtn.addEventListener("click", closePopup);

    return openPopup;
}

let popups = document.querySelectorAll(".open-popup");

popups.forEach(function (popupButton) {
    popupButton.addEventListener("click", function () {
        let popupId = popupButton.getAttribute("data-popup");
        let popup = createPopUp(popupId);
        popup();
    });
});
