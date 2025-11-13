<?php
$pageTitle = "EduTask - Puntuación";
include_once '../../includes/header_app.php';
?>
    <main class="container main-content">
        <div class="row mb-4">
            <div class="col-12">
                <a href="#" class="back-link">
                    <i class="bi bi-arrow-left"></i>
                    Clave > Puntuación
                </a>
            </div>
        </div>
        <section class="row">
            <div class="col-12">
                <div class="course-banner">
                    <div class="banner-decoration">
                        <i class="bi bi-shapes"></i>
                    </div>
                    <h2 class="display-5 fw-bold text-white">Nombre Materia</h2>
                    <p class="mb-4 opacity-75 text-white">Nombre Docente</p>
                    <div class="d-flex flex-wrap">
                        <span class="badge-custom"><i class="bi bi-calendar-event me-1"></i> Hora_T, Hora_P, Creditos</span>
                        <span class="badge-custom">Semestre</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="row mb-3 mt-4">
            <div class="col-12">
                <h3 class="unit-title">Unidad1: (Nombre Unidad)</h3>
                <p class="unit-subtitle">Calificación_F Unidad</p>
            </div>
        </div>
        <section class="row">
            <div class="col-12">
                <article class="card task-card">
                    <div class="task-icon-left">A</div>
                    <div class="task-info">
                        <h5 class="task-title">Realiza un Ensayo</h5>
                        <span class="task-subtitle">Química</span>
                    </div>
                    <div class="task-grade">90/100</div>
                    <div class="task-decoration-right">
                        <i class="bi bi-triangle-fill me-1 decoration-icon-sm"></i>
                        <i class="bi bi-circle-fill decoration-icon-md"></i>
                    </div>
                </article>
                <article class="card task-card">
                    <div class="task-icon-left">A</div>
                    <div class="task-info">
                        <h5 class="task-title">Realiza un Ensayo</h5>
                        <span class="task-subtitle">Química</span>
                    </div>
                    <div class="task-grade">80/100</div>
                    <div class="task-decoration-right">
                         <i class="bi bi-triangle-fill me-1 decoration-icon-sm"></i>
                        <i class="bi bi-square-fill decoration-icon-md"></i>
                    </div>
                </article>
            </div>
        </section>
    </main> 
<?php include_once '../../includes/footer_app.php'; ?>