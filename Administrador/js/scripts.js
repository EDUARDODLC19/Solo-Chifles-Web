document.addEventListener("DOMContentLoaded", function () { 
    console.log("Script cargado correctamente");

    // Formulario de reseñas
    const reviewForm = document.getElementById("reviewForm");
    const editButton = document.getElementById("edit-values");
    const saveButton = document.getElementById("save-values");
    const valuesList = document.getElementById("values-list");

    if (reviewForm) {
        reviewForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Evita que se recargue la página

            const name = document.getElementById("name").value;
            const rating = document.getElementById("rating").value;
            const review = document.getElementById("review").value;

            const newReview = document.createElement("div");
            newReview.classList.add("review-item", "bg-light", "p-4", "rounded", "mb-4");
            newReview.innerHTML = 
                `<h4>${name}</h4>
                <p><em>"${review}"</em></p>
                <div class="rating">${"⭐".repeat(rating)}</div>`;

            document.querySelector(".review-list").appendChild(newReview);
            reviewForm.reset();
        });
    } else {
        console.error("Formulario de reseñas no encontrado en el DOM.");
    }

    if (editButton && saveButton && valuesList) {
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
    } else {
        console.error("Elementos de edición no encontrados en el DOM.");
    }

    // Edición de contenido de Solo Chifles
    const editSoloChiflesButton = document.getElementById("editSoloChifles");
    const saveSoloChiflesButton = document.getElementById("saveSoloChifles");
    const soloChiflesText = document.getElementById("soloChiflesText");

    if (editSoloChiflesButton && saveSoloChiflesButton && soloChiflesText) {
        editSoloChiflesButton.addEventListener("click", function () {
            const currentText = soloChiflesText.textContent.trim();
            const input = document.createElement("textarea");
            input.value = currentText;
            soloChiflesText.textContent = "";
            soloChiflesText.appendChild(input);

            editSoloChiflesButton.style.display = "none";
            saveSoloChiflesButton.style.display = "inline-block";
        });

        saveSoloChiflesButton.addEventListener("click", function () {
            const input = soloChiflesText.querySelector("textarea");
            if (input) {
                soloChiflesText.textContent = input.value.trim();
            }
            editSoloChiflesButton.style.display = "inline-block";
            saveSoloChiflesButton.style.display = "none";
        });
    } else {
        console.error("Elementos de edición de 'Solo Chifles' no encontrados en el DOM.");
    }

    // Edición de contenido de Nuestra Promesa
    const editNuestraPromesaButton = document.getElementById("editNuestraPromesa");
    const saveNuestraPromesaButton = document.getElementById("saveNuestraPromesa");
    const nuestraPromesaText = document.getElementById("nuestraPromesaText");

    if (editNuestraPromesaButton && saveNuestraPromesaButton && nuestraPromesaText) {
        editNuestraPromesaButton.addEventListener("click", function () {
            const currentText = nuestraPromesaText.textContent.trim();
            const input = document.createElement("textarea");
            input.value = currentText;
            nuestraPromesaText.textContent = "";
            nuestraPromesaText.appendChild(input);

            editNuestraPromesaButton.style.display = "none";
            saveNuestraPromesaButton.style.display = "inline-block";
        });

        saveNuestraPromesaButton.addEventListener("click", function () {
            const input = nuestraPromesaText.querySelector("textarea");
            if (input) {
                nuestraPromesaText.textContent = input.value.trim();
            }
            editNuestraPromesaButton.style.display = "inline-block";
            saveNuestraPromesaButton.style.display = "none";
        });
    } else {
        console.error("Elementos de edición de 'Nuestra Promesa' no encontrados en el DOM.");
    }

    // Editar contenido de soloChiflesHeading y nuestraPromesaHeading
    const soloChiflesHeading = document.getElementById("soloChiflesHeading");
    const editSoloChiflesBtn = document.getElementById("editSoloChiflesBtn");
    const nuestraPromesaHeading = document.getElementById("nuestraPromesaHeading");
    const editNuestraPromesaBtn = document.getElementById("editNuestraPromesaBtn");

    editSoloChiflesBtn.addEventListener("click", () => editText(soloChiflesHeading));
    editNuestraPromesaBtn.addEventListener("click", () => editText(nuestraPromesaHeading));
});

function editText(element) {
    const currentText = element.textContent;
    const newText = prompt("Editar texto:", currentText);
    if (newText !== null && newText.trim() !== "") {
        element.textContent = newText.trim();
    }
}