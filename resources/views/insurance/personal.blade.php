@extends('layouts.panel')
@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Seguro personal</h3>
    <div class="col text-right">
      <a href="{{ url('insurance/family')}}" class="btn btn-sm btn-success">Ir a seguro familiar</a>
    </div>
  </div>
</div>
<div class="card shadow">
    <div class="card-body">
        <p>Código seguro</p>
        <p>Tipo de seguro</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
    </div>
</div>
@endsection