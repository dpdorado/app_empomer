@extends('base')

@section('main')
<div class="row">


<div class="col-sm-12">
  <h1 class="display-3">Clientes</h1>    
  
  <div>
    <a style="margin: 19px;" href="{{ route('customers.create')}}" class="btn btn-primary">Agregar cliente</a>
  </div> 

  <div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Cedula</td>
          <td>Nombres</td>
          <td>Apellidos</td>
          <td>Extracto</td>          
          <td>Dirección</td>
          <td>Teléfono</td>
          <td colspan = 2>Opciones</td>
        </tr>
    </thead>
    <tbody>
        @forelse($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->extract}}</td>
            <td>{{$customer->direction}}</td>
            <td>{{$customer->telephone}}</td>
            <td>
                <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
          <p>No se encontraron clientes registrados.</p>
        @endforelse                
    </tbody>
  </table>
  <div>
    {{ $customers->links() }}
  </div>
<div>
</div>
@endsection