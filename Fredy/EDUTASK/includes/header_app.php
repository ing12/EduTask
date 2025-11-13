<?php
// Define un título desde la página que lo incluye
$pageTitle = isset($pageTitle) ? htmlspecialchars($pageTitle) : 'EduTask';
// Array para estilos *adicionales* (si una página los necesita)
$pageStyles = isset($pageStyles) ? (array) $pageStyles : [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/main_app.css">

    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
    <?php endforeach; ?>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../../assets/img/logo.png" alt="EduTask Logo" class="logo-img">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavApp" aria-controls="navbarNavApp" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavApp">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Mis Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Actividades</a></li>
            </ul>
        </div>

        <div class="d-none d-lg-block">
            <a href="#" class="user-icon"><i class="bi bi-person-circle"></i></a>
        </div>
    </div>
</nav>