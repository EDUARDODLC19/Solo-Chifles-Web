/*!
* Start Bootstrap - Business Casual v7.0.9 (https://startbootstrap.com/theme/business-casual)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-business-casual/blob/master/LICENSE)
*/

window.addEventListener('DOMContentLoaded', () => {
    const listHoursArray = document.querySelectorAll('.list-hours li');
    if (listHoursArray.length) {
        listHoursArray[new Date().getDay()]?.classList.add('today');
    }
});

// Manejo del formulario de reseñas
document.getElementById("reviewForm")?.addEventListener("submit", event => {
    event.preventDefault();

    const name = document.getElementById("name")?.value.trim();
    const rating = document.getElementById("rating")?.value.trim();
    const review = document.getElementById("review")?.value.trim();

    if (name && rating && review) {
        const newReview = document.createElement("div");
        newReview.className = "review-item bg-light p-4 rounded mb-4";
        newReview.innerHTML = `
            <h4>${name}</h4>
            <p><em>"${review}"</em></p>
            <div class="rating">${"⭐".repeat(Number(rating))}</div>
        `;

        document.querySelector(".review-list")?.appendChild(newReview);
        document.getElementById("reviewForm").reset();
    } else {
        alert("Por favor, completa todos los campos del formulario.");
    }
});

// Redirección al formulario de pedidos
function redirectToOrderForm() {
    window.location.href = 'pedidosform.html';
}

function validateAndRedirect() {
    const username = document.getElementById('username')?.value.trim();
    const password = document.getElementById('password')?.value.trim();

    if (!username || !password) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Nueva expresión regular para mayor flexibilidad
    const passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^A-Za-z0-9])[A-Za-z\d\S]{8,}$/;

    if (!passwordPattern.test(password)) {
        alert('La contraseña debe tener al menos:\n- Una letra mayúscula\n- Una letra minúscula\n- Un número\n- Un carácter especial\n- Mínimo 8 caracteres.');
        return;
    }

    alert('Inicio de sesión exitoso.');
    window.location.href = '../Administrador/index.html';
}
