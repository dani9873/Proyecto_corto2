@extends('layouts.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-10">
            <div class="card">
                <div class="card-header" style="background-color: #20b2aa; color: white;">
                    <h3 class="card-title text-center">Editar Producto</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $product->nombre }}">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion">{{ $product->descripcion }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio_venta" class="form-label">Precio de Venta:</label>
                            <input type="text" class="form-control" id="precio_venta" name="precio_venta"
                                value="{{ $product->precio_venta }}">
                        </div>
                        <div class="mb-3">
                            <label for="precio_compra" class="form-label">Precio de Compra:</label>
                            <input type="text" class="form-control" id="precio_compra" name="precio_compra"
                                value="{{ $product->precio_compra }}">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría:</label>
                            <input type="text" class="form-control" id="categoria" name="categoria"
                                value="{{ $product->categoria }}">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock:</label>
                            <input type="number" class="form-control" id="stock" name="stock" min="0"
                                value="{{ $product->stock }}">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad:</label>
                            <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad"
                                value="{{ $product->fecha_caducidad }}">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="{{ route('product.index') }}" class="btn btn-primary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
