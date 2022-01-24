@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-primary mr-2 text-white">Volver</a>
@endsection
@section('content')

    <h2 class="text-center mb-5">Crear Receta Nueva</h2>
    <div class="row justify-conten-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('recetas.store') }}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo Receta</label>
                    <input class="form-control @error('titulo') is-invalid @enderror" type="text" name="titulo" id="titulo" placeholder="Titulo Receta" value="{{ old('titulo') }}">
                    @error('titulo')
                        <div class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="frorm-group pb-2">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror">
                        <option value="">Seleccionar</option>
                        @foreach ($categorias as $id=>$categoria)
                            <option value="{{ $id }}" {{ old('categoria')== $id ? 'selected' : ''  }}>{{ $categoria }}</option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <div class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                <div class="form-group pb-2">
                    <input id="editor" type="hidden" name="editor">
                    <trix-editor input="editor"></trix-editor>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary mr-2 text-white" type="submit" value="Agregar Receta">
                </div>
            </form>
        </div>
    </div>

@endsection
