<?php require_once("layouts/header.php"); ?>
<div>
    <nav class="sidebar d-flex flex-column flex-shrink-0 bg-light vh-100 p-3">
        <img class="sidebar__icon" src="../vista/img/icono2.jpg" alt="Logo">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../vista/index.php" class="nav-link link-dark active fw-bold" style="background-color: #00a8e3">
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
                <a href="../vista/remuneraciones.php" class="nav-link link-dark">
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
            Inicio
        </main>
    </div>
</div>
<?php require_once("layouts/footer.php"); ?>

<!-- <a href="index.php?m=nuevo" class="btn">NUEVO</a>
<a href="index.php?m=logout" class="btn">CERRAR SESION</a>
<h1>Hola <?php // echo ($_SESSION['usuario']) 
            ?></h1>
<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>PRECIO</td>
        <td>ACCIÓN</td>
    </tr>
    <tbody>
        <?php

        // if (!empty($dato)) :
        //     foreach ($dato as $key => $value)
        //         foreach ($value as $v) : 
        ?>

                <tr>
                    <td><?php // echo $v['id'] 
                        ?></td>
                    <td><?php // echo $v['nombre'] 
                        ?></td>
                    <td><?php // echo $v['precio'] 
                        ?></td>
                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php // echo $v['id'] 
                                                                    ?>">EDITAR</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php // echo $v['id'] 
                                                                        ?>">ELIMINAR</a>
                    </td>
                </tr>

            <?php // endforeach; 
            ?>
        <?php // else : 
        ?>
            <tr>
                <td colspan="3">NO HAY REGISTROS</td>
            </tr>
        <?php // endif; 
        ?>

    </tbody>
</table> -->