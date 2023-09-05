// Función para mostrar el primer modal
function showModal() {
    document.getElementById("myModal").style.display = "block";
}

// Función para ocultar el primer modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

// Asigna los eventos de clic a los botones o elementos correspondientes para el primer modal
document.getElementById("showModalButton").addEventListener("click", showModal);
document.getElementById("closeModal").addEventListener("click", closeModal);
document.getElementById("closeModalButton").addEventListener("click", closeModal);

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
