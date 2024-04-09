<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Vista Usuario"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Vista Usuario"></x-navbars.navs.auth>
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
                            <h6 class="text-white text-uppercase m-0">Detalles del Usuario</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <p class="fw-bold">{{ $usuario->nombre }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ap_paterno" class="form-label">Apellido Paterno:</label>
                                        <p class="fw-bold">{{ $usuario->ap_paterno }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ap_materno" class="form-label">Apellido Materno:</label>
                                        <p class="fw-bold">{{ $usuario->ap_materno }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">Correo Electrónico:</label>
                                        <p class="fw-bold">{{ $usuario->correo }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
