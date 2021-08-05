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


    <ul class="list-group ml-3">
    <h4  class="fas fa-user" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del usuario:</h4>
    <li class="list-group-item">{{ $patient->name }}</li><br/>
    <h4 <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo electrónico:</h4><br/>
    <li class="list-group-item">{{ $patient->email }}</li><br/>
    <h4 <i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dirección:</h4><br/>
    <li class="list-group-item">{{ $patient->address }}</li><br/>
    <h4 <i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de celular:</h4><br/>
    <li class="list-group-item">{{ $patient->phone }}</li><br/>

   <form action="{{ url('profile/edit')}}" method="POST" align="center">
              @csrf
              @method('DELETE')
              <a href="{{ url('profile/edit')}}" class="btn mb-3 btn-primary" >Editar</a>
            </form>
</ul>
  </div>
</div>
@endsection