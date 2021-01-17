@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar categoria</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="id">Id categoria:</label>
                <input type="text" class="form-control" name="id" readonly value={{ $category->id }} />
            </div>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $category->name }} />
            </div>

            <div class="text-right">
                <a href="{{ route('categories.index')}}" class="btn btn-danger">Cancelar y volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>                            
            </div>
        </form>
    </div>
</div>
@endsection