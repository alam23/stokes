@extends('layouts.panel')
@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Seguros familiares</h3>
    <div class="col text-right">
      <a href="{{ url('insurance/')}}" class="btn btn-sm btn-success">Ir a seguro personal</a>
    </div>
  </div>
</div>

    @for ($i = 5; $i <= 11; $i++)
    <div class="card shadow border-dark mt-3">
    <div class="card-body ">
        <p>Código seguro</p>
        <p>Tipo de seguro</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
        <p>OTROS DATOS DE LA TABLA SEGUROS</p>
    </div>
    </div>
    @endfor


@endsection