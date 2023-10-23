@extends('layouts.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-10">
            <div class="card">
                <div class="card-header" style="background-color: #349590; color: white; ">
                    <h2 class="card-title text-center">Crear Nuevo Producto</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio_venta" class="form-label">Precio de Venta:</label>
                            <input type="text" class="form-control" id="precio_venta" name="precio_venta" />
                        </div>
                        <div class="mb-3">
                            <label for="precio_compra" class="form-label">Precio de Compra:</label>
                            <input type="text" class="form-control" id="precio_compra" name="precio_compra" />
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría:</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" />
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock:</label>
                            <input type="number" class="form-control" id="stock" name="stock" min="0" />
                        </div>
                        <div class="mb-3">
                            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad:</label>
                            <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" />
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('product.index') }}" class="btn btn-primary">Regresar</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
