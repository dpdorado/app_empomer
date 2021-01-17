@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar ofrenda</h1>

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
        <form method="post" action="{{ route('gifts.update', $gift->id) }}">
            @method('PATCH') 
            @csrf  
            <div class="form-group">
              <label for="id">Id ofrenda:</label>
              <input type="text" class="form-control" name="id" readonly value={{ $gift->id }} />
            </div>          
            <div class="form-group">
              <label for="name">Nombre:</label>
              <input type="text" class="form-control" name="name"  value={{ $gift->name }} />
            </div>

            <div class="form-group">
                <label for="price">Precio por ..:</label>
                <input type="text" class="form-control" name="price" value={{ $gift->price }} />
            </div>          

            <div class="form-group">
                <label for="category_id">Categoria:</label>            
                <select class="form-control" name="category_id" id="FormControlSelect">
                        <option selected="true" disabled="disabled" value={{$gift->category->id}}>{{ $gift->category->name }}</option>
                        @foreach($categories as $category)
                        <option value={{$category->id}}>{{$category->name}} </option>
                        @endforeach
                </select>             
            </div>                   
                           
            <div class="text-right">
                <a href="{{ route('gifts.index')}}" class="btn btn-danger">Cancelar y volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>                            
            </div>
        </form>
    </div>
</div>
@endsection