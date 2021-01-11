@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Registrar cliente</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.store') }}">
          @csrf
          <div class="form-group">
              <label for="id">Cedula:</label>
              <input type="text" class="form-control" name="id"/>
          </div>

          <div class="form-group">    
              <label for="first_name">Nombres:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Apellidos:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="extract">Extracto:</label>
              <input type="text" class="form-control" name="extract"/>
          </div>

          <div class="form-group">
              <label for="direction">Dirección:</label>
              <input type="text" class="form-control" name="direction"/>
          </div>

          <div class="form-group">
              <label for="telephone">Teléfono:</label>
              <input type="text" class="form-control" name="telephone"/>
          </div>
                              
          <div class="text-right">
            <a href="{{ route('customers.index')}}" class="btn btn-danger">Cancelar y volver</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection