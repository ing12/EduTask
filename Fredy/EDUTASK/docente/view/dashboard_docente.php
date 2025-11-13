<?php
$pageTitle = "EduTask - Docente";
include_once '../../includes/header_app.php';
?>

    <main class="container mt-4">
        <div class="search-box">
            <input type="text" placeholder="Buscar Curso por Nombre o Clave">
            <button><i class="icon-search">🔍</i></button>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-9">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card custom-card">
                            <div class="card-header d-flex align-items-center card-header-docente">
                                <span class="avatar">A</span>
                                <span class="name ms-2">Leslie Isabel García García</span>
                            </div>
                            <div class="card-body">
                                <div class="card-image"></div>
                                <h3>Nombre Materia</h3>
                                <p class="clave">Clave</p>
                                <p class="info">Semestre_Mate<br>Créditos</p>
                                <button class="btn btn-ver">Mirar →</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card custom-card">
                            <div class="card-header d-flex align-items-center card-header-docente">
                                <span class="avatar">A</span>
                                <span class="name ms-2">Leslie Isabel García García</span>
                            </div>
                            <div class="card-body">
                                <div class="card-image"></div>
                                <h3>Nombre Materia</h3>
                                <p class="clave">Clave</p>
                                <p class="info">Semestre_Mate<br>Créditos</p>
                                <button class="btn btn-ver">Mirar →</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card custom-card">
                            <div class="card-header d-flex align-items-center card-header-docente">
                                <span class="avatar">A</span>
                                <span class="name ms-2">Leslie Isabel García García</span>
                            </div>
                            <div class="card-body">
                                <div class="card-image"></div>
                                <h3>Nombre Materia</h3>
                                <p class="clave">Clave</p>
                                <p class="info">Semestre_Mate<br>Créditos</p>
                                <button class="btn btn-ver">Mirar →</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-lg-3">
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

<?php include_once '../../includes/footer_app.php'; ?>