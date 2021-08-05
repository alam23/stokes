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
        <p ><strong>USUARIO:</strong></br>{{auth()->user()->name}} </p>
        <p ><strong>CÓDIGO DE SEGURO:</strong></br>001512685 </p>
        <p><strong>TIPO DE SEGURO:</strong></br>Plan -> Cuidamos a toda tu familia</p>
        <p><strong>ESTADO DE PAGO DE SEGURO:</strong></br>Pagos al día</p>
        <p><strong>FECHA DE PAGOS DE SEGURO:</strong></br>Cada quincena del mes correspondiente</p>
        <p><strong>MONTO:</strong></br>100 nuevos soles</p>
    </div>
</div>
@endsection