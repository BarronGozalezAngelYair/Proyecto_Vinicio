<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="categorias"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Categorías"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-gradient-primary p-3">
                            <h5 class="text-white mb-0">Agregar Nueva Categoría</h5>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form action="/categorias" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nombre" class="form-label">Nombre de la Categoría</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control bg-light" placeholder="Ingrese el nombre de la categoría">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control bg-light" name="descripcion" id="descripcion" rows="3" placeholder="Ingrese la descripción de la categoría"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4 me-2">Guardar Categoría</button>
                                    <a href="/categorias" class="btn btn-secondary my-4">Cancelar</a>
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
