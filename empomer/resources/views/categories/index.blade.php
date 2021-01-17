@extends('base')

@section('main')
<div class="row">


<div class="col-sm-12">
  <h1 class="display-3">Categorias </h1>    
  
  <div>
    <a style="margin: 19px;" href="{{ route('categories.create')}}" class="btn btn-primary">Agregar categoria</a>
  </div> 

  <div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif

    @if(session()->get('failed'))
      <div class="alert alert-danger">
        {{ session()->get('failed') }}  
      </div>
    @endif
  </div>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id categoria</td>          
          <td>Nombre</td>          
          <td colspan = 2>Opciones</td>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>            
            <td>
                <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
          <p>No se encontraron categorias registradas.</p>
        @endforelse                
    </tbody>
  </table>
  <div>
    {{ $categories->links() }}
  </div>
<div>
</div>
@endsection