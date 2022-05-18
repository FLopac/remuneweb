<?php include_once("./layouts/header.php") ?>
<div>
    <nav class="sidebar d-flex flex-column flex-shrink-0 bg-light vh-100 p-3">
        <img class="sidebar__icon" src="../vista/img/icono2.jpg" alt="Logo">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../vista/index.php" class="nav-link link-dark">
                    <i width="30" class="fa-solid fa-house-chimney"></i>
                    Inicio
                </a>
            </li>
            <li class="nav-item">
                <a href="../vista/empleados.php" class="nav-link link-dark">
                    <i width="30" class="fa-solid fa-user-tie"></i>
                    Empleados
                </a>
            </li>
            <li class="nav-item">
                <a href="../vista/haberes.php" class="nav-link link-dark">
                    <i width="30" class="fa-solid fa-arrow-trend-up"></i>
                    Haberes
                </a>
            </li>
            <li class="nav-item">
                <a href="../vista/descuentos.php" class="nav-link link-dark">
                    <i width="30" class="fa-solid fa-arrow-trend-down"></i>
                    Descuentos
                </a>
            </li>
            <li class="nav-item">
                <a href="../vista/liquidaciones.php" class="nav-link link-dark">
                    <i width="30" class="fa-solid fa-file-invoice-dollar"></i>
                    Liquidaciones
                </a>
            </li>
            <li class="nav-item">
                <a href="../vista/remuneraciones.php" class="nav-link active fw-bold" style="background-color: #00a8e3">
                    <i width="30" class="fa-solid fa-table-cells"></i>
                    Remuneraciones
                </a>
            </li>
        </ul>
        <hr>
        <button class="btn btn-dark">Cerrar Sesión</button>
    </nav>
    <div class="main-container">
        <div class="app-bar shadow-sm d-flex flex-column align-items-center justify-content-center">
            <span class="fs-4 fst-italic fw-light">Gestión de remuneraciones</span>
        </div>
        <main class="d-flex justify-content-center align-items-center">
            Remuneraciones
        </main>
    </div>
</div>
<?php include_once("./layouts/footer.php") ?>