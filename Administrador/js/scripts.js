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
document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.getElementById("edit-values");
    const saveButton = document.getElementById("save-values");
    const valuesList = document.getElementById("values-list");

    // Comprobar si los elementos existen
    if (!editButton || !saveButton || !valuesList) {
        console.error("Elementos necesarios no encontrados en el DOM.");
        return;
    }

    // Habilitar la edición de valores
    editButton.addEventListener("click", function () {
        const items = valuesList.querySelectorAll("li");
        items.forEach(item => {
            const input = document.createElement("input");
            input.type = "text";
            input.value = item.textContent.trim();
            item.textContent = "";
            item.appendChild(input);
        });
        editButton.style.display = "none";
        saveButton.style.display = "inline-block";
    });

    // Guardar los valores editados
    saveButton.addEventListener("click", function () {
        const items = valuesList.querySelectorAll("li");
        items.forEach(item => {
            const input = item.querySelector("input");
            if (input) {
                item.textContent = input.value.trim();
            }
        });
        editButton.style.display = "inline-block";
        saveButton.style.display = "none";
    });
});