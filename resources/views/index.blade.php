@extends('layouts.base')

@section('content')
    <br>
    <h1>Productos</h1>

    <div>
        <a href="{{ route('product.create') }}" class="btn btn-success">Nuevo Producto</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio de Venta</th>
                <th scope="col">Precio de Compra</th>
                <th scope="col">Categoría</th>
                <th scope="col">Stock</th>
                <th scope="col">Fecha de Caducidad</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->nombre }}</td>
                    <td>{{ $product->descripcion }}</td>
                    <td>{{ $product->precio_venta }}</td>
                    <td>{{ $product->precio_compra }}</td>
                    <td>{{ $product->categoria }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->fecha_caducidad }}</td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">Editar</a>
                        <br />
                        <form action="{{ route('product.destroy', $product->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
