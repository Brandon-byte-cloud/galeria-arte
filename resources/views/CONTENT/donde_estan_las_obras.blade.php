<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Obras</title>

    <link rel="stylesheet" href="{{ asset('css/donde_estan_los_cuadro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark  shadow-sm mb-4">
        <div class="container-fluid">
            <a class="navbar-brand color">Consulta de Obras</a>
            <button class="btn btn-outline-primary" id="btnAuth"><i class="fa-solid fa-user" id="lockIcon"></i><span id="btnAuthText">ADMIN</span></button>
        </div>
    </nav>

    <div class="juntar">

        <!-- BUSQUEDA -->
        <section id="busqueda_artista">
            <select id="Artistas" class="form-select">
                <option selected>Selecciona un artista</option>
            </select>

            <select id="Epoca" class="form-select">
                <option selected>Selecciona el movimiento</option>
            </select>

            <select id="Obras" class="form-select">
                <option selected>Selecciona una obra</option>
            </select>
            <button type="button" class="btn btn-dark" id="btnConsultar"> <i class="fa-solid fa-magnifying-glass fa-shake"></i></button>
        </section>

        <section id="informacion">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Artista</th>
                        <th>Movimiento</th>
                        <th>Obra</th>
                        <th>QR</th>
                    </tr>
                </thead>
                <tbody id="tabla-publica"></tbody>
            </table>
        </section>

        <!--ADMIN -->
        
        <section id="admin-section" class="d-none mt-5">

            <h2 class="text-center mb-4 color" style="color: rgb(182, 182, 219)"> Panel Administrador </h2>
            <button class="btn btn-primary mb-3" onclick="abrirModalPersona()"> Nueva Obra </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Artista</th>
                        <th>Obra</th>
                        <th>Movimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="admin-body"></tbody>
            </table>
        </section>
    </div>
    
    <!-- Ingreo del admin -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">Iniciar Sesión</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" id="loginEmail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" id="loginPassword" class="form-control"required>
                        </div>
                        <button class="btn btn-dark w-100"> Iniciar sesión </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CRUD -->
    <div class="modal fade" id="personaModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"> Guardar Registro </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"> </button>
                </div>
                <div class="modal-body">
                    <form id="personaForm">
                        <input type="hidden" id="personaId">
                        <div class="mb-3">
                            <label>Artista</label>
                            <input type="text" id="artistaInput" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Obra</label>
                            <input type="text" id="obraInput" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Movimiento</label>
                            <input type="text" id="epocaInput"class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>QR</label>
                            <input type="text" id="qrInput" class="form-control" required>
                        </div>
                        <button class="btn btn-primary w-100">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/consulta.js') }}"></script>
    <script src="https://kit.fontawesome.com/3f10846bf4.js" crossorigin="anonymous"></script>
</body>
</html>