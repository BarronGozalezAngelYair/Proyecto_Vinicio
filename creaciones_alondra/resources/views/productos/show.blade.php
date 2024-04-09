<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Productos"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg">
                            <h6 class="text-white text-capitalize px-4 pt-4 pb-2">Producto</h6>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Precio: ${{ number_format($producto->precio, 2) }}</li>
                                <li class="list-group-item">Stock: {{ $producto->stock }} unidades</li>
                            </ul>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a href="/productos" class="btn btn-sm btn-primary" data-toggle="tooltip" data-original-title="Regresar">
                                <i class="fas fa-arrow-left me-2"></i> Regresar
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Puedes agregar más tarjetas de productos aquí -->
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
