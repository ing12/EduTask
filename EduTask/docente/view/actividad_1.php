<!DOCTYPE html>
<html lang="es">
<head>
<?php
require_once '../../includes/navbar_docente.php';
?>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-4">
            <a href="#" class="navbar-brand">
                <img src="../../assets/img/logo.png" alt="Logo" width="150" height="60">
            </a>

            <!-- Botón hamburguesa -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mis Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Actividades</a></li>
                </ul>
                <div class="user-icon ms-3">
                    <i class="bi bi-person-circle fs-4"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container container-main">
        <!-- ENCABEZADO -->
        <div class="row align-items-center mb-3">
            <div class="col-6 col-md-8">
                <button class="title-page">⟵ Clave</button>
            </div>

            <!-- Botón Crear Actividad (solo móvil) -->
            <div class="col-6 col-md-4 text-end d-block d-lg-none">
                <a href="crear_actividad_2.php">
                    <button class="btn-actividad">Crear Actividad</button>
                </a>
            </div>
        </div>

        <div class="row">
            <!-- COLUMNA IZQUIERDA -->
            <div class="col-lg-8 mb-4">
                <div class="card-materia mb-4">
                    <h4>Programación Web</h4>
                    <div class="mt-2">
                        <span class="tag">8 Horas</span>
                        <span class="tag">1 Hora P.</span>
                        <span class="tag">4 Créditos</span>
                        <span class="tag">Semestre</span>
                    </div>
                </div>

                <!-- Lista de tareas -->
                <div class="task-card">
                    <div class="task-title">Realiza un Ensayo</div>
                    <small>De desarrollo web</small>
                </div>
                <div class="task-card">
                    <div class="task-title">Diseña una Página Web</div>
                    <small>Usando HTML y CSS</small>
                </div>
                <div class="task-card">
                    <div class="task-title">Proyecto Final</div>
                    <small>Aplicación web funcional</small>
                </div>
            </div>

            <!-- COLUMNA DERECHA -->
            <div class="col-lg-4">
                <div class="sidebar text-center">
                    <h5>Trabajo en Clase</h5>
                    <!-- Botón visible solo en escritorio -->
                    <a href="crear_actividad_2.php" class="d-none d-lg-block mt-3">
                        <button class="btn-actividad">Crear Actividad</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
