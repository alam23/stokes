@extends('layouts.panel')
@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-0">Mi perfil</h3>
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


    <ul class="list-group">
    <h4  class="fas fa-user" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del Usuario:</h4>
    <li class="list-group-item">{{ $patient->name }}</li><br/>
    <h4 <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo Electrónico:</h4><br/>
    <li class="list-group-item">{{ $patient->email }}</li><br/>
    <h4 <i class="fas fa-address-book"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DPI:</h4><br/>
    <li class="list-group-item">{{ $patient->dpi }}</li><br/>
   <form action="{{ url('profile/edit')}}" method="POST" align="center">
              @csrf
              @method('DELETE')
              <a href="{{ url('profile/edit')}}" class="btn btn-sm btn-primary" >Editar</a>
            </form>
</ul>
  </div>
</div>
@endsection