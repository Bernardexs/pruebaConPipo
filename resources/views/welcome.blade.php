<!-- resources/views/productos/index.blade.php -->


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Productos</div>
                    <div class="panel-body">
                        <a href="{{ route('productos.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Crear Producto
                        </a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>
                                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i> Editar
                                            </a>
                                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Eliminar
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
