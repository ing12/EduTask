<?php
$pageTitle = "EduTask - Estudiante";
include_once '../../includes/header_app.php';
?>

  <main class="container my-4">

    <div class="buscador mx-auto mb-4 d-flex align-items-center">
      <input type="text" class="form-control border-0 bg-transparent flex-grow-1"
        placeholder="Buscar Curso por Nombre o Clave">
      <button class="btn-search">🔍</button>
    </div>

    <div class="row g-4">
      <div class="col-12 col-lg-9">
        <div class="row g-4 justify-content-center">
          
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-card">
              <div class="card-header d-flex justify-content-between align-items-center card-header-estudiante">
                <span class="avatar">A</span>
                <p class="m-0 flex-grow-1 text-truncate ms-2">Leslie Isabel García García</p>
                <span class="menu">⋮</span>
              </div>
              <div class="card-body">
                <div class="card-image mb-3"></div>
                <h3>Nombre Materia</h3>
                <p class="clave">Clave</p>
                <p class="info">Semestre_Mate</p>
                <p class="info">Créditos</p>
                <button class="btn btn-custom">Mirar →</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-card">
              <div class="card-header d-flex justify-content-between align-items-center card-header-estudiante">
                <span class="avatar">A</span>
                <p class="m-0 flex-grow-1 text-truncate ms-2">Leslie Isabel García García</p>
                <span class="menu">⋮</span>
              </div>
              <div class="card-body">
                <div class="card-image mb-3"></div>
                <h3>Nombre Materia</h3>
                <p class="clave">Clave</p>
                <p class="info">Semestre_Mate</p>
                <p class="info">Créditos</p>
                <button class="btn btn-custom">Mirar →</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-card">
              <div class="card-header d-flex justify-content-between align-items-center card-header-estudiante">
                <span class="avatar">A</span>
                <p class="m-0 flex-grow-1 text-truncate ms-2">Leslie Isabel García García</p>
                <span class="menu">⋮</span>
              </div>
              <div class="card-body">
                <div class="card-image mb-3"></div>
                <h3>Nombre Materia</h3>
                <p class="clave">Clave</p>
                <p class="info">Semestre_Mate</p>
                <p class="info">Créditos</p>
                <button class="btn btn-custom">Mirar →</button>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <aside class="col-12 col-lg-3">
        <div class="entregas p-3 mb-3">
          <h2>Próximas Entregas</h2>
          <ul class="list-unstyled">
            <li><strong>Realiza un Ensayo</strong><br><span>Química</span></li>
            <li><strong>Realiza Los Siguientes Problemas</strong><br><span>Programación</span></li>
            <li><strong>Realiza Los Siguientes Problemas</strong><br><span>Programación</span></li>
          </ul>
        </div>

        <div class="comentarios p-3">
          <h2>Comentarios</h2>
          <p>Responde la siguiente pregunta en los siguientes 20 minutos</p>
          <button class="btn btn-custom">Ir al Curso →</button>
        </div>
      </aside>
    </div>
  </main>

<?php include_once '../../includes/footer_app.php'; ?>