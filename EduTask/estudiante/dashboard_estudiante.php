<!DOCTYPE html>

<html lang="es">

<head>
<?php 
require_once '../includes/navbar_docente.php';
?>
</head>

<body>



  <header class="navbar navbar-expand-lg custom-navbar px-4 py-2">

    <div class="container-fluid d-flex justify-content-between align-items-center">



      <div class="logo d-flex align-items-center">

        <img src="../assets/img/logo.png" alt="EduTask Logo" class="logo-img">

      </div>



      <div class="collapse navbar-collapse" id="navbarContent">

        <nav class="navbar-nav mx-auto">

          <a href="#" class="nav-link mx-2">Inicio</a>

          <a href="#" class="nav-link mx-2">Mis Cursos</a>

          <a href="#" class="nav-link mx-2">Actividades</a>

        </nav>

      </div>



      <div class="d-flex align-items-center">

        <div class="perfil">

          <i class="user-icon fs-3">👤</i>

        </div>



        <button class="navbar-toggler d-lg-none ms-2" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
          aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

      </div>



    </div>

  </header>



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

              <div class="card-header d-flex justify-content-between align-items-center">

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

              <div class="card-header d-flex justify-content-between align-items-center">

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

              <div class="card-header d-flex justify-content-between align-items-center">

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



  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>