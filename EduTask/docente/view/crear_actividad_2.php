<!DOCTYPE html>
<html lang="es">
<head>
<?php
require_once '../../includes/navbar_docente.php';
?>
</head>

<body>
    <div class="container mt-4 mb-5">
        <!-- Migas de pan -->
        <nav class="breadcrumb mb-4">
            <a href="#" class="text-decoration-none text-dark">Inicio</a> &gt; 
            <span>Programación Web</span>
        </nav>

        <!-- Formulario responsivo -->
        <div class="row g-4">
            <!-- Columna Izquierda -->
            <div class="col-12 col-md-6">
                <div class="form-card h-100">
                    <div class="mb-3">
                        <label for="nombreAct" class="form-label">Nombre de la Actividad</label>
                        <input type="text" class="form-control" id="nombreAct" placeholder="Ej. Ensayo sobre enlaces químicos">
                        <span class="obligatorio">Obligatorio</span>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="4" placeholder="Describe brevemente la actividad"></textarea>
                        <span class="obligatorio">Obligatorio</span>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha -->
            <div class="col-12 col-md-6">
                <div class="form-card h-100">
                    <div class="mb-3">
                        <label for="materia" class="form-label">Materia</label>
                        <select class="form-select" id="materia">
                            <option selected disabled>Selecciona una materia</option>
                            <option>Programación Web</option>
                            <option>Lógica Funcional</option>
                            <option>Base de Datos</option>
                        </select>
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <select class="form-select" id="valor">
                            <option selected disabled>Selecciona el valor</option>
                            <option>10%</option>
                            <option>20%</option>
                            <option>30%</option>
                        </select>
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="mb-3">
                        <label for="fechaEntrega" class="form-label">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fechaEntrega">
                        <span class="obligatorio">Obligatorio</span>
                    </div>

                    <div class="d-grid d-md-flex justify-content-md-end">
                        <a href="../dashboard_docente.php">
                        <button class="btn btn-crear">Crear Actividad</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
