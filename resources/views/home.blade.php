@extends('layouts.panel')
@section('content')
<div class="row">
  <div class="col-md-12 mb-4"> 
    <div class="card">
      <div class="card-header">INICIO</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
          <h1><p style="text-align:center" ><font size=6>¡ BIENVENIDO a SIHO, {{auth()->user()->name}} !</font></p></h1>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" align="center">
    <div class="carousel-item active">
    <img class="d-block w-50"  src="{{asset('img/theme/salud05.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="{{asset('img/theme/salud07.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="{{asset('img/theme/salud03.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  </div>
        
        

        </div>
        <div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <h2 class="card-title">Contamos con los mejores Profesionales en la Salud</h2>
      <p class="card-text">En Siho encontrarás a los mejores doctores en sus determinadas áreas como al gran doctor House, médico reconocido mundialmente, cada uno especialista en lo que se dedica, contamos con más de 30 sedes a nivel nacional, cuenta con nosotros para cuidar de tu salud.</p>
      <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos aproximadamente</small></p>
    </div>
    <img class="card-img-top" src="{{asset('img/theme/salud20.jpg')}}" alt="Card image cap">
  </div>
  <div class="card">
    
    <div class="card-body">
      <h2 class="card-title">Contamos con la mejor Infraestructura</h2>
      <p class="card-text">Contamos con lo último en tecnología médica, para proteger y cuidar de mejor manera a nuestros pacientes, contamos con salas médicas de la gama más alta y cumplimos los protocolos de bioseguridad. Nuestra última adquisición de Acelerador de Partículas es el gran atractivo de nuestro hospital</p>
      <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos aproximadamente</small></p>
    </div>
    <img class="card-img-top" src="{{asset('img/theme/salud11.jpg')}}" alt="Card image cap">
  </div>
  <div class="card">
    
    <div class="card-body">
      <h2 class="card-title">Ganadores de múltiples Premios y el mejor Sistema Médico</h2>
      <p class="card-text">El premio de más alto nivel para médicos innovadores se encuentra en nuestro hospital, con los doctores Meredith Grey (jefa de Cirugía General) y la gran jefa de cirugía cardiotorácica Cristina Yang como líderes en nuestro hospital, también contamos con el gran doctor Derek Shepperd quien es el mejor Neurocirujano.</p>
      <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos aproximadamente</small></p>
    </div>
    <img class="card-img-top" src="{{asset('img/theme/salud10.jpg')}}" alt="Card image cap">
  </div>
</div>
      </div>

      
    </div>
  </div>
</div>

@endsection

