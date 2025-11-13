<?php
$pageTitle = "Crear Actividad";
include_once '../../includes/header_app.php';
?>
    <div class="container mt-4">
        <nav class="breadcrumb mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-brown">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Programacion Web</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-6">
                <div class="form-card">
                    <div class="mb-3">
                        <label for="nombreAct" class="form-label">Nombre Act</label>
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
            <div class="col-md-6">
                <div class="form-card">
                    <div class="mb-3">
                        <label for="materia" class="form-label">Materia</label>
                        <select class="form-select" id="materia">
                            <option selected disabled>Selecciona una materia</option>
                            <option value="quimica">Programacion Web</option>
                            <option value="matematicas">Logica Funcional</option>
                            <option value="biologia">Base de Datos</option>
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
                    <button class="btn btn-crear">Crear Actividad →</button>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../../includes/footer_app.php'; ?>