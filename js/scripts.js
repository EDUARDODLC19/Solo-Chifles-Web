/*!
* Start Bootstrap - Business Casual v7.0.9 (https://startbootstrap.com/theme/business-casual)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-business-casual/blob/master/LICENSE)
*/
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})
document.getElementById("reviewForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Evita que se recargue la página

    // Obtén los valores del formulario
    const name = document.getElementById("name").value;
    const rating = document.getElementById("rating").value;
    const review = document.getElementById("review").value;

    // Crea un nuevo elemento de reseña
    const newReview = document.createElement("div");
    newReview.classList.add("review-item", "bg-light", "p-4", "rounded", "mb-4");
    newReview.innerHTML = `
        <h4>${name}</h4>
        <p><em>"${review}"</em></p>
        <div class="rating">${"⭐".repeat(rating)}</div>
    `;

    // Agrega la nueva reseña a la lista
    document.querySelector(".review-list").appendChild(newReview);

    // Limpia el formulario
    document.getElementById("reviewForm").reset();
});
function redirectToOrderForm() {
    window.location.href = 'pedidosform.html';
}
function validateAndRedirect() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Validar campos vacíos
    if (!username || !password) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Validar patrón de la contraseña
    const passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!passwordPattern.test(password)) {
        alert('La contraseña no cumple con los requisitos.');
        return;
    }

    alert('Inicio de sesión exitoso.');
    window.location.href = '../Administrador/index.html';
}
