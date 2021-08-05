@extends('layouts.panel')
@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <h3 class="mb-10">Informar ingreso a emergencias</h3>
    <div class="form-group">
          <label for="description">Descripcion</label>
          <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}" placeholder="Describe brevemente el problema" required>
    </div>
<button class="btn btn-success">Informar a emergencias</button>    
</div>
@endsection