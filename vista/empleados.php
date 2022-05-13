<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC basico productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../vista/css/main.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/a9204978b8.js" crossorigin="anonymous"></script>
</head>

<body>
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
                    <a href="../vista/empleados.php" class="nav-link active">
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
            <main>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Fecha Ingreso</th>
                            <th>Vigencia</th>
                            <th>Sueldo Base</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <button class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    lengthMenu: "Mostrar _MENU_ por página",
                    zeroRecords: "Ningún registro encontrado",
                    info: "Página _PAGE_ de _PAGES_",
                    search: "Buscar: ",
                    loading: "Cargando...",
                    processing: "Procesando...",
                    paginate: {
                        previous: "Anterior",
                        next: "Siguiente"
                    },
                },
                columnDefs: [{
                    orderable: false,
                    targets: [5]
                }, ]
            });
        });
    </script>
    <?php include_once("./layouts/footer.php") ?>