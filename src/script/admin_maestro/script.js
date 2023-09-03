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



 /* This is for the second modal */ 

 function showModal() {
    document.getElementById("myModal2").style.display = "block";
}

// Función para ocultar el modal
function closeModal() {
    document.getElementById("myModal2").style.display = "none";
}

// Asigna los eventos de clic a los botones o elementos correspondientes
document.getElementById("showModalButton2").addEventListener("click", showModal);
document.getElementById("closeModal2").addEventListener("click", closeModal);
document.getElementById("closeModalButton2").addEventListener("click", closeModal);