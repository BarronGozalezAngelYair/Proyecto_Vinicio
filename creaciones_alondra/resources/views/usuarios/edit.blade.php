<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Usuarios"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Editar Usuario"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <a href="/usuarios" class="btn btn-sm btn-primary" data-toggle="tooltip" data-original-title="Regresar">
                        <i class="fas fa-arrow-left me-2"></i> Regresar
                    </a>
                </div>
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header bg-gradient-primary py-3 border-radius-lg">
                            <h6 class="text-white text-uppercase m-0">Editar Usuario</h6>
                        </div>
                        <div class="card-body">
                            <form action="/usuarios/{{$usuario->id}}" method="POST">
                                {!! csrf_field() !!}
                                @method("PATCH")
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control bg-light text-dark" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ap_paterno" class="form-label">Apellido Paterno:</label>
                                    <input type="text" class="form-control bg-light text-dark" id="ap_paterno" name="ap_paterno" value="{{ $usuario->ap_paterno }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ap_materno" class="form-label">Apellido Materno:</label>
                                    <input type="text" class="form-control bg-light text-dark" id="ap_materno" name="ap_materno" value="{{ $usuario->ap_materno }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo Electrónico:</label>
                                    <input type="email" class="form-control bg-light text-dark" id="correo" name="correo" value="{{ $usuario->correo }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control bg-light text-dark" id="contraseña" name="contraseña" value="{{ $usuario->contraseña }}" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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

