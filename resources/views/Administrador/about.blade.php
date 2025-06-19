<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="chifles, plátanos, tradición artesanal, Solo Chifles, historia, valores">
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
        <section class="page-section about-heading">
            <div class="container">
                <div class="bg-faded rounded p-5">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Nuestros Valores</span>
                    </h2>
                    <ul id="contentEditable">
                        <li>Calidad artesanal en cada producto</li>
                        <li>Compromiso con la frescura y el sabor</li>
                        <li>Preservar la tradición local</li>
                        <li>Atención cercana y personalizada</li>
                    </ul>
                    <button id="edit-values" class="btn btn-secondary">Editar Valores</button>
                    <button id="save-values" class="btn btn-primary" style="display: none;">Guardar Valores</button>                    
                </div>
            </div>               
            <center>
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../Administrador/img/Portadachifles.jpg" alt="..." style="width: 750px; height: auto;">
            </center>
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Solo Chifles, Tradición que Cruje</span>
                                    <span class="section-heading-lower">Sobre Nosotros</span>
                                </h2>
                                <div id="about-text" class="mb-3">
                                    <p>Fundado en 2000 por la familia Pérez, "Solo Chifles" ha estado ofreciendo chifles de calidad elaborados artesanalmente con los mejores plátanos y condimentos locales. Estamos comprometidos con preservar la tradición, buscando los ingredientes más frescos y llevándolos directamente a tu mesa.</p>
                                    <p class="mb-0">
                                        Te garantizamos que te enamorarás del sabor único y crujiente de nuestros chifles desde el primer bocado hasta el último. Acompáñanos en tus reuniones diarias, momentos con amigos o simplemente cuando quieras disfrutar de un antojo especial.
                                    </p>
                                </div>                                                                                               
                                <button id="edit-about" class="btn btn-secondary mt-3">Editar Texto</button>
                                <button id="save-about" class="btn btn-primary mt-3" style="display: none;">Guardar Texto</button>
                            </div>                                 
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#videoModal" style="margin-left: 28px;">Conoce más sobre nuestra historia</a>

                <!-- Modal para el video -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Nuestra Historia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
           <div class="modal-body">
        <!-- Inserta el video aquí -->
        <video width="100%" controls>
          <source src="../Administrador/videos/Sobrenosotros.mp4" type="video/mp4">
          Tu navegador no soporta el elemento de video.
        </video>
      </div>
    </div>
  </div>
</div>      
            </div>
        </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; SoloChifles Sitio Web</p>
            <div class="social-icons mt-3">
                <a href="https://www.facebook.com/solochifles" target="_blank" class="social-link">
                    <img src="../Administrador/img/facebook.png" alt="Facebook">
                    </a>
                <a href="https://www.instagram.com/solochifles?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
                    <img src="../Administrador/img/instagram.png" alt="Instagram">
                    </a>
            </div>
        </div>
    </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
// Editar y guardar valores
document.getElementById('edit-values').addEventListener('click', function() {
    const valuesList = document.getElementById('contentEditable');
    const items = valuesList.querySelectorAll('li');
    items.forEach(item => (item.contentEditable = true));
    document.getElementById('edit-values').style.display = 'none';
    document.getElementById('save-values').style.display = 'inline-block';
});
document.getElementById('save-values').addEventListener('click', function() {
    const valuesList = document.getElementById('contentEditable');
    const items = valuesList.querySelectorAll('li');
    items.forEach(item => (item.contentEditable = false));
    document.getElementById('edit-values').style.display = 'inline-block';
    document.getElementById('save-values').style.display = 'none';
});
// Editar y guardar "Sobre Nosotros"
document.getElementById('edit-about').addEventListener('click', function () {
    const aboutText = document.getElementById('about-text');
    aboutText.contentEditable = true;
    aboutText.focus();
    document.getElementById('edit-about').style.display = 'none';
    document.getElementById('save-about').style.display = 'inline-block';
});
document.getElementById('save-about').addEventListener('click', function () {
    const aboutText = document.getElementById('about-text');
    aboutText.contentEditable = false;
    document.getElementById('edit-about').style.display = 'inline-block';
    document.getElementById('save-about').style.display = 'none';
});
    </script>
</body>
</html>