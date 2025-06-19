<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Start Sitio Web Solo Chifles</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header class="main-header">
            <div class="logo">
                <img src="../assets/img/solo chifles sin fondo-1.png" alt="Logo Solo Chifles">
            </div>            
            </div>
            <div class="site-title">
                <span class="site-heading-upper">El sabor que cruje en cada momento especial</span>
                <h1 class="site-heading-lower">Solo Chifles</h1>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container">
                <!-- Navbar con las secciones -->
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Catálogo de Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reviews.php">Reseñas</a>
                        </li>
                    </ul>
                </div>
                <!-- Contenedor separado para el botón "Acceder" -->
                <div class="d-flex">
                    <a href="../index.php" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm">
                        <i class="fas fa-sign-in-alt me-2"></i>PARTIR
                    </a>
                </div>                
            </div>
        </nav>        
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Visítanos</span>
                                <span class="section-heading-lower">ESTAMOS ABIERTOS</span>
                            </h2>
                            <ul id="hours-list" class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Domingo
                                    <span class="ms-auto">Cerrado</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Lunes
                                    <span class="ms-auto">7:00 AM hasta 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Martes
                                    <span class="ms-auto">7:00 AM hasta 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Miércoles
                                    <span class="ms-auto">7:00 AM hasta 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Jueves
                                    <span class="ms-auto">7:00 AM hasta 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Viernes
                                    <span class="ms-auto">7:00 AM hasta 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sábado
                                    <span class="ms-auto">9:00 AM hasta 5:00 PM</span>
                                </li>
                            </ul>
                            <button id="edit-hours" class="btn btn-secondary">Editar Horarios</button>
                            <button id="save-hours" class="btn btn-primary" style="display: none;">Guardar Horarios</button>
                            <p class="mb-0">
                                <small><em>Comunícate en cualquier momento</em></small>
                                <br />
                                <span id="phone-number">0963923907</span>
                                <button id="edit-phone" class="btn btn-secondary btn-sm ms-2">Editar</button>
                                <button id="save-phone" class="btn btn-primary btn-sm ms-2" style="display: none;">Guardar</button>
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            // Referencias a los elementos
            const editButton = document.getElementById('edit-hours');
            const saveButton = document.getElementById('save-hours');
            const hoursList = document.getElementById('hours-list');
        
            // Activar edición
            editButton.addEventListener('click', () => {
                const items = hoursList.querySelectorAll('li');
                items.forEach(item => {
                    item.contentEditable = true; // Hacer editable
                    item.style.border = "1px dashed #ccc"; // Estilo visual para indicar edición
                });
                editButton.style.display = 'none';
                saveButton.style.display = 'inline-block';
            });
        
            // Guardar cambios
            saveButton.addEventListener('click', () => {
                const items = hoursList.querySelectorAll('li');
                items.forEach(item => {
                    item.contentEditable = false; // Desactivar edición
                    item.style.border = "none"; // Quitar estilo visual
                });
                editButton.style.display = 'inline-block';
                saveButton.style.display = 'none';
            });
        </script>  
        <script>
            document.getElementById('edit-phone').addEventListener('click', function() {
                const phoneNumber = document.getElementById('phone-number');
                phoneNumber.contentEditable = true;
                phoneNumber.style.border = '1px solid #ced4da';
                phoneNumber.style.padding = '2px';
                document.getElementById('edit-phone').style.display = 'none';
                document.getElementById('save-phone').style.display = 'inline-block';
        
                // Escuchar cambios en tiempo real
                phoneNumber.addEventListener('input', restrictToNumbers);
            });
        
            document.getElementById('save-phone').addEventListener('click', function() {
                const phoneNumber = document.getElementById('phone-number');
                phoneNumber.contentEditable = false;
                phoneNumber.style.border = 'none';
                phoneNumber.style.padding = '0';
                document.getElementById('edit-phone').style.display = 'inline-block';
                document.getElementById('save-phone').style.display = 'none';
        
                // Dejar de escuchar cambios
                phoneNumber.removeEventListener('input', restrictToNumbers);
            });
        
            // Función para restringir la entrada a números
            function restrictToNumbers(event) {
                const phoneNumber = event.target;
                phoneNumber.textContent = phoneNumber.textContent.replace(/\D/g, ''); // Elimina cualquier carácter que no sea un número
            }
        </script>                    
        <section class="contact-section">
            <div class="container">
                <h1>Contáctanos</h1>
                <p class="text-center mb-4">
                    ¿Tienes dudas o necesitas más información sobre nuestros productos? Completa el formulario y responderemos tus consultas lo antes posible.
                </p>
        
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Ingresa tu nombre completo" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="phone" class="form-label">Número de Teléfono</label>
                        <input type="tel" class="form-control" id="phone" placeholder="123-456-7890" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="consultationType" class="form-label">Motivo de la Consulta</label>
                        <select class="form-control" id="consultationType" required>
                            <option value="Información sobre productos">Información sobre productos</option>
                            <option value="Asesoramiento en compras">Asesoramiento en compras</option>
                            <option value="Consultas generales">Consultas generales</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                    </div>
                
                    <button type="submit" class="submit-btn">Enviar Consulta</button>
                </form>
                
                <!-- Mensaje de confirmación -->
                <div id="confirmationMessage" style="display:none; padding: 20px; background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; border-radius: 5px;">
                    ¡Gracias por tu consulta! Nos comunicaremos contigo lo antes posible.
                </div>                
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <p class="m-0 small">Copyright &copy; SoloChifles Sitio Web</p>
                <div class="social-icons mt-3">
                    <a href="https://www.facebook.com/solochifles" target="_blank" class="social-link">
                        <img src="../Administrador/img/facebook.png" alt="Facebooks">
                        </a>
                    <a href="https://www.instagram.com/solochifles?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
                        <img src="../Administrador/img/instagram.png" alt="Instagram">
                        </a>
                </div>
            </div>
        </footer> 
        <script>
            // Validación de solo números para el campo de teléfono
            document.getElementById('phone').addEventListener('input', function(event) {
                // Eliminar caracteres no numéricos
                event.target.value = event.target.value.replace(/\D/g, '');
            });
        
            // Manejo del envío del formulario
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario
        
                // Mostrar mensaje de confirmación
                document.getElementById('confirmationMessage').style.display = 'block';
        
                // Ocultar el formulario (opcional, si quieres que el formulario desaparezca)
                document.getElementById('contactForm').style.display = 'none';
            });
        </script>        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
