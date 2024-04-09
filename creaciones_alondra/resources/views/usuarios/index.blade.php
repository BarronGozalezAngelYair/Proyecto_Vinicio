<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Usuarios"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Usuarios"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Usuarios</h6>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="usuarios/create" class="btn btn-sm btn-success" data-toggle="tooltip" data-original-title="Agregar usuario">
                                <i class="fas fa-plus"></i> Agregar Usuario
                            </a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                #</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Nombre</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Apellido Materno</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Apellido Paterno</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Correo Electronico</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Contraseña</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Operaciones</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)

                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$usuario ->id}}</h6>
        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold ">{{$usuario ->nombre}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$usuario ->ap_materno}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$usuario ->ap_paterno}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$usuario ->correo}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$usuario ->contraseña}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="usuarios/{{$usuario->id}}" class="btn btn-sm btn-info" data-toggle="tooltip" data-original-title="Leer usuario">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="Editar usuario">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger"
                                                            data-toggle="tooltip"
                                                            data-original-title="Eliminar usuario"
                                                            onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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
        </div>
        <x-footers.auth></x-footers.auth>

    </main>
    <x-plugins></x-plugins>

</x-layout>
