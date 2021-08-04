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
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">E-mail</th>
          <th scope="col">DPI</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
            {{ $patient->name }}
          </th>
          <td>
            {{ $patient->email }}
          </td>
          <td>
            {{ $patient->dpi }}
          </td>
          <td>
            <form action="{{ url('profile/edit')}}" method="POST">
              @csrf
              @method('DELETE')
              <a href="{{ url('profile/edit')}}" class="btn btn-sm btn-primary">Editar</a>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection