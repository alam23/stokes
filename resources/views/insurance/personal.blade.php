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
        <table class = 'table'>
          <thead>
            <th>ID</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Fecha</th>
          </thead>
          <tbody>
            @foreach ($segpers as $segper)
              <tr>
                <td>{{$segper->id}}</td>
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