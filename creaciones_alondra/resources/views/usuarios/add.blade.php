<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Usuarios"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Agregar Usuario"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-end">
                    <a href="/usuarios" class="btn btn-sm btn-primary" data-toggle="tooltip" data-original-title="Regresar">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-header bg-gradient-primary p-3 border-0">
                            <h5 class="text-white mb-0">Agregar Usuario</h5>
                        </div>
                        <div class="card-body">
                            <form action="/usuarios" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control bg-light text-dark" id="nombre" name="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control bg-light text-dark" id="ap_paterno" name="ap_paterno" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ap_materno" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control bg-light text-dark" id="ap_materno" name="ap_materno" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control bg-light text-dark" id="correo" name="correo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control bg-light text-dark" id="contraseña" name="contraseña" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a href="/usuarios" class="btn btn-danger ml-2">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>

    </main>
    <x-plugins></x-plugins>
</x-layout>
