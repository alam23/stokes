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

    <div class="card shadow border-dark mt-3">
    <div class="card-body ">
    <table class = 'table'>
          <thead>
            <th>ID</th>
            <th>ID de asegurado</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Fecha</th>
          </thead>
          <tbody>
            @foreach ($segpers as $segper)
              <tr>
                <td>{{$segper->id}}</td>
                <td>{{$segper->user_id}}</td>
                <td>{{$segper->tipo}}</td>
                <td>{{$segper->monto_pago}}</td>
                <td>{{$segper->fecha_pago}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    </div>


@endsection