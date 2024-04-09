<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Categorias"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Categorías"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-gradient-primary p-3">
                            <h5 class="text-white mb-0">Lista de Categorías</h5>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="categorias/create" class="btn btn-sm btn-success" data-toggle="tooltip" data-original-title="Agregar usuario">
                                <i class="fas fa-plus"></i> Agregar Categoria
                            </a>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorias as $categoria)
                                            <tr>
                                                <th scope="row">{{ $categoria->id }}</th>
                                                <td>{{ $categoria->nombre }}</td>
                                                <td>{{ $categoria->descripcion }}</td>
                                                <td class="align-middle text-center">
                                                <div class="d-flex justify-content-center">
                                                    <a href="#"class="btn btn-sm btn-info" data-toggle="tooltip" data-original-title="Leer usuario">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="Editar usuario">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="#" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Eliminar categoria" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoria?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
