
/* This is for the second modal */

// Función para mostrar el segundo modal
function showModalTwo() {
    document.getElementById("myModal2").style.display = "block";
}

// Función para ocultar el segundo modal
function closeModalTwo() {
    document.getElementById("myModal2").style.display = "none";
}

// Asigna los eventos de clic a los botones o elementos correspondientes para el segundo modal
document.getElementById("showModalButton2").addEventListener("click", showModalTwo);
document.getElementById("closeModal2").addEventListener("click", closeModalTwo);
document.getElementById("closeModalButton2").addEventListener("click", closeModalTwo);


// Para el toggle del admin

// script.js this is for the toggle
const dropdownBtn = document.getElementById("dropdownBtn");
const dropdownContent = document.getElementById("dropdownContent");

dropdownBtn.addEventListener("click", () => {
    dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
});
