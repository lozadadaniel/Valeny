 @extends('layouts.app')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">Devoluciones</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!--Contact Us-->
  <section id="contact" class="padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="uppercase heading bottom30">Devoluciones</h1>
        </div>
        
      </div>
      <p>
        No aceptamos devoluciones   salvo que la joya  tenga algun defecto de fabrica ,  tendra  30 dias para realizar  la devolucion y le  enviaremos  una   nueva  joya .
      </p>

    </div>
  </section>

@endsection
