<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC basico productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/a9204978b8.js" crossorigin="anonymous"></script>
    <style>
        .page-item.active .page-link {
            background-color: #00a8e3;
            border: 1px solid #00a8e3;
            color: white;
        }
    </style>
</head>

<body style="--bs-body-font-family: 'Spartan', sans-serif;">
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
                    <a href="../vista/empleados.php" class="nav-link fw-bold active" style="background-color: #00a8e3">
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
                <button type="button" class="btn text-light button-add ms-auto mb-4 d-block rounded-circle" style="background-color: #00a8e3" title="Agregar Empleados" data-bs-toggle="modal" data-bs-target="#modalAdd">
                    <i class="fa-solid fa-plus m-auto"></i>
                </button>
                <table id="example" class="table table-striped" style="width:100%;">
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
                                <button class="btn text-light" style="background-color: #00a8e3" data-bs-toggle="modal" data-bs-target="#modalEdit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetails">
                                    <i class="fa-solid fa-file-lines"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
        <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Agregar Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="name" name="nombres" placeholder="Ingrese nombres">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="lastName" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="lastName" name="apellidos" placeholder="Ingrese apellidos">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="rut" class="form-label">Rut</label>
                                    <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese rut">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="correo" placeholder="Ingrese correo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="sex" class="form-label">Sexo</label>
                                    <select class="form-select" id="sex">
                                        <option selected></option>
                                        <option value="sexo">Masculino</option>
                                        <option value="sexo">Femenino</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="nationality" class="form-label">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nationality" name="nacionalidad" placeholder="Ingrese nacionalidad">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="age" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="age" name="fecha_nacimiento">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="address" name="direccion" placeholder="Ingrese dirección">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="phone" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="phone" name="telefono" placeholder="Ingrese telefono">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="civil_status" class="form-label">Estado Civil</label>
                                    <select class="form-select" id="civil_status">
                                        <option selected></option>
                                        <option value="estado_civil">Soltero/a</option>
                                        <option value="estado_civil">Casado/a</option>
                                        <option value="estado_civil">Viudo/a</option>
                                        <option value="estado_civil">Divorciado/a</option>
                                        <option value="estado_civil">Conviviente civil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="bank" class="form-label">Banco</label>
                                    <input type="text" class="form-control" id="bank" name="banco" placeholder="Ingrese banco">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="account-type" class="form-label">Tipo Cuenta</label>
                                    <input type="text" class="form-control" id="account-type" name="tipo_cuenta" placeholder="Ingrese tipo de cuenta">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="account_number" class="form-label">N° Cuenta</label>
                                    <input type="text" class="form-control" id="account_number" name="numero_cuenta" placeholder="Ingrese número de cuenta">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="admission_date" class="form-label">Fecha Ingreso</label>
                                    <input type="date" class="form-control" id="admission_date" name="fecha_ingreso">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="validity" class="form-label">Fecha Vigencia</label>
                                    <input type="date" class="form-control" id="validity" name="vigencia">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn text-light fw-bold" value="Agregar" style="background-color: #00a8e3" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Editar Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="name" name="nombres" placeholder="Ingrese nombres">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="lastName" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="lastName" name="apellidos" placeholder="Ingrese apellidos">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="rut" class="form-label">Rut</label>
                                    <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese rut">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="correo" placeholder="Ingrese correo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="sex" class="form-label">Sexo</label>
                                    <select class="form-select" id="sex">
                                        <option selected></option>
                                        <option value="sexo">Masculino</option>
                                        <option value="sexo">Femenino</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="nationality" class="form-label">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nationality" name="nacionalidad" placeholder="Ingrese nacionalidad">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="age" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="age" name="fecha_nacimiento">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="address" name="direccion" placeholder="Ingrese dirección">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="phone" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="phone" name="telefono" placeholder="Ingrese telefono">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="civil_status" class="form-label">Estado Civil</label>
                                    <select class="form-select" id="civil_status">
                                        <option selected></option>
                                        <option value="estado_civil">Soltero/a</option>
                                        <option value="estado_civil">Casado/a</option>
                                        <option value="estado_civil">Viudo/a</option>
                                        <option value="estado_civil">Divorciado/a</option>
                                        <option value="estado_civil">Conviviente civil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="bank" class="form-label">Banco</label>
                                    <input type="text" class="form-control" id="bank" name="banco" placeholder="Ingrese banco">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="account-type" class="form-label">Tipo Cuenta</label>
                                    <input type="text" class="form-control" id="account-type" name="tipo_cuenta" placeholder="Ingrese tipo de cuenta">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="account_number" class="form-label">N° Cuenta</label>
                                    <input type="text" class="form-control" id="account_number" name="numero_cuenta" placeholder="Ingrese número de cuenta">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-4">
                                    <label for="admission_date" class="form-label">Fecha Ingreso</label>
                                    <input type="date" class="form-control" id="admission_date" name="fecha_ingreso">
                                </div>
                                <div class="mb-3 col-4">
                                    <label for="validity" class="form-label">Fecha Vigencia</label>
                                    <input type="date" class="form-control" id="validity" name="vigencia">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn btn-info text-light fw-bold" value="Editar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Eliminar Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <i class="fa-solid fa-triangle-exclamation w-25 h-25 mx-auto d-block text-danger"></i>
                            <span class="mx-auto my-4 fs-4 text-center d-block">¿Seguro que deseas eliminar al empleado?</span>
                            <div class="modal-footer">
                                <button class="btn btn-secondary fw-bold">Cancelar</button>
                                <button class="btn btn-danger fw-bold">Eliminar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="modalDetails" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Detalles Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <h6 class="fw-bold">Nombres</h3>
                                <p>Alan Marcelo</p>
                            </div>
                            <div class="mb-3 col-6">
                                <h6 class="fw-bold">Apellidos</h3>
                                <p>Ortega García</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                            <h6 class="fw-bold">Rut</h3>
                                <p>20.215.252-K</p>
                            </div>
                            <div class="mb-3 col-6">
                                <h6 class="fw-bold">Correo Electrónico</h3>
                                <p>alanortega765@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Sexo</h3>
                                <p>Masculino</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Nacionalidad</h3>
                                <p>Chileno</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Nombres</h3>
                                <p>21/06/1999</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Dirección</h3>
                                <p>Guallatire 1981</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Teléfono</h3>
                                <p>45316989</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Estado Civil</h3>
                                <p>Casado</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Banco</h3>
                                <p>Banco Estado</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Tipo de Cuenta</h3>
                                <p>Cuenta Rut</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">N° Cuenta</h3>
                                <p>20215252</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Fecha Ingresso</h3>
                                <p>10/05/2022</p>
                            </div>
                            <div class="mb-3 col-4">
                                <h6 class="fw-bold">Fecha Vigencia</h3>
                                <p>10/05/2030</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn text-light fw-bold" style="background-color: #00a8e3" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
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