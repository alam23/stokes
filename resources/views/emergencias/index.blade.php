@extends('layouts.panel')
@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Informar ingreso a emergencias</h3>
  </div>
  <div class="card-body">
    @if (session('notification'))
      <div class="alert alert-success" role="alert">
        {{session('notification')}}
      </div>  
    @endif
  </div>
  <div class="table-responsive">
    <!-- Projects table -->
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @foreach($errors->all() as $error)
            <ul>
              <li>
                {{ $error }}
              </li>
            </ul>
          @endforeach
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <form action="{{ url('profile')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="address">Dirección actual</label>
            <input type="text" name="address" class="form-control"  value="{{old('address', $patient->address)}}" required>
        </div>
        <div class="form-group">
          <label for="name">Lugar de referencia</label>
          <input type="text" name="name" class="form-control" value="" required >
        </div>
        <div class="form-group">
            <label for="phone">Teléfono celular</label>
            <input type="text" name="phone" class="form-control"  value="{{old('phone', $patient->phone)}}" required>
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection