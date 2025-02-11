@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create') }}" class="btn btn-primary mr-2 text-white">Crear Receta</a>
@endsection
@section('content')

    <h2 class="text-center mb-5">Administra tus Recetas</h2>
        <div class="col-md-10 mx-auto bg white p3">
            <table class="table">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pizza</td>
                        <td>Pizzas</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

@endsection
