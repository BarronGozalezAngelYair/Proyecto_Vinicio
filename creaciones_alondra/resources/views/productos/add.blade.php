<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Productos"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="d-flex justify-content-end">
                    <a href="/productos" class="btn btn-sm btn-primary" data-toggle="tooltip" data-original-title="Regresar">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agregar Producto</h6>
                            </div>
                        </div>
                        <br>
                        <div class="card-body px-4">
                            <form action="/productos" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control bg-light text-dark" id="nombre" name="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción:</label>
                                    <input type="text" class="form-control bg-light text-dark" id="descripcion" name="descripcion" required>
                                </div>
                                <div class="mb-3">
                                    <label for="precio" class="form-label">Precio:</label>
                                    <input type="number" step="0.01" class="form-control bg-light text-dark" id="precio" name="precio" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stock:</label>
                                    <input type="number" class="form-control bg-light text-dark" id="stock" name="stock" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                                    <a href="/productos" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
