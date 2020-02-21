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
            <li class="active">Joyas de Acero por mayor Colombia</li>
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
          <h1 class="uppercase heading bottom30">Joyas de Acero por mayor Colombia</h1>
        </div>
        <img src="{{ asset('images/joyas-acero-por-mayor-colombia-valeny.jpg')}}" alt="joyas-acero-por-mayor-colombia" class="img-responsive"  >
      </div>
      <p></p>
      <p>
        Somos Fabricantes de Joyas de acero por mayor en Colombia , hacemos envíos a Cualquier País del mundo. Solicita nuestro <a href="{{route('catalogo')}}">Catálogo</a> sin compromiso para potenciar tu negocio de joyas al por mayor. Es un negocio lucrativo, la ventaja del acero consiste en joyas de muy baja oxidación y excelente costo para negociar. Somos proveedores de joyas en Colombia desde hace mas de 10 años. Valeny tiene la experiencia suficiente en el mercado de la joyería que lo hace en NUMERO 1 en joyas al por mayor en Colombia. También tenemos <a href="#">Joyas de oro y plata</a> al por mayor. Acero Quirúrgico de calidad.  </p>

        <h4 class="uppercase heading bottom30"> Si quiere conocer un producto de mejor calidad y precio inigualable, vaya a la siguiente página <a href="#">Joyas Oro Plata Colombia</a></h4>

    </div>
  </section>

@endsection
