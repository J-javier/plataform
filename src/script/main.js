// Función para mostrar el modal
function showModal() {
    document.getElementById("myModal").style.display = "block";
}

// Función para ocultar el modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

// Asigna los eventos de clic a los botones o elementos correspondientes
document.getElementById("showModalButton").addEventListener("click", showModal);
document.getElementById("closeModal").addEventListener("click", closeModal);
document.getElementById("closeModalButton").addEventListener("click", closeModal);



