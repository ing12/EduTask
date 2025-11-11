<!DOCTYPE html>
<html lang="es">
<head>

<?php 
require_once '../includes/navar_docente.php';
?>

</head>
<body>
    <!-- Barra de navegación -->
    <header class="navbar">
        <div class="logo">
            <img src="../assets/img/logo.png" alt="Logo EduTask">
        </div>
        <nav class="menu">
            <a href="#">Inicio</a>
            <a href="#">Mis Cursos</a>
            <a href="#">Actividades</a>
        </nav>
        <div class="perfil">
            <i class="bi bi-person"></i>
        </div>
    </header>

    <!-- Contenedor principal -->
    <main class="container">
        <div class="top-section">
            <!-- Buscador -->
            <div class="search-box">
                <input type="text" placeholder="Buscar Curso por Nombre o Clave">
                <button><i class="bi bi-search"></i></button>
            </div>
        </div>

        <div class="content">
            <!-- Tarjetas de cursos -->
            <div class="cards">
                <div class="card">
                    <div class="card-header">
                        <span class="avatar">A</span>
                        <span class="name">Leslie Isabel García García</span>
                    </div>
                    <div class="card-body">
                        <div class="card-img"></div>
                        <p><strong>Nombre Materia</strong></p>
                        <p>Clave</p>
                        <p>Semestre_Mate<br>Créditos</p>
                        <button class="btn-ver">Mirar →</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="avatar">A</span>
                        <span class="name">Leslie Isabel García García</span>
                    </div>
                    <div class="card-body">
                        <div class="card-img"></div>
                        <p><strong>Nombre Materia</strong></p>
                        <p>Clave</p>
                        <p>Semestre_Mate<br>Créditos</p>
                        <button class="btn-ver">Mirar →</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="avatar">A</span>
                        <span class="name">Leslie Isabel García García</span>
                    </div>
                    <div class="card-body">
                        <div class="card-img"></div>
                        <p><strong>Nombre Materia</strong></p>
                        <p>Clave</p>
                        <p>Semestre_Mate<br>Créditos</p>
                        <button class="btn-ver">Mirar →</button>
                    </div>
                </div>
            </div>

            <!-- Panel lateral -->
            <aside class="sidebar">
                <div class="box">
                    <h3>Comentarios</h3>
                    <p>Responde la siguiente pregunta en los siguientes 20 minutos</p>
                    <button class="btn-small red">Ir al Curso →</button>
                </div>

                <div class="box">
                    <h3>Buscar más Cursos</h3>
                    <button class="btn-small">Buscar Curso →</button>
                </div>
            </aside>
        </div>
    </main>
</body>
</html>
