 @extends('layouts.cali')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">JOYERIAS ORO Y PLATA EN CALI POR MAYOR</li>
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
          <h1 class="uppercase heading bottom30">JOYERIAS ORO Y PLATA EN CALI POR MAYOR</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">JOYERIAS ORO Y PLATA EN CALI POR MAYOR</span>
      <p>
          “Las joyas tienen una vida dentro de sí: sus colores hablan lo que las palabras no alcanzan” Somos proveedores de joyas oro plata en Cali, nuestras joyas son elaboradas con oro de 14k y plata ley 925 con las mejores técnicas de fabricación artesanal y estándares internacionales de calidad.</p>

<p>La alquimia ha impresionado y fascinado desde la antigüedad. Hoy, los resultados de estos experimentos, han trascendido la ornamentación, para transformarse en joyas como referencias simbólicas de las pasiones humanas.</p>

<p>Nuestra fabrica tiene como propósito construir joyas de caldiad, con base en nuevas aleaciones de metales (oro y plata), incorporándole el diseño y la personalidad de nuestra imagen, mediante la ejecución de técnicas de la joyería y la orfebrería. </p>

<p>La intención es satisfacer al máximo las necesidades de nuestros clientes, cumpliendo requerimientos de los mismo. Cali es una de las mejores plazas para la venta de nuestros productos , tanto por su ubicación geográfica como por su comercio. Nuestros diseños gustan mucho a la mujer latina lo que adhiere un plus comercial que incentiva la exportación de nuestras joyas, puedes solicitar nuestro catálogo en cualquier momento y serás atendido como un miembro más de la familia VALENY joyeros. “Cali – Ciudad Divina”.</p><br>


<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Set-Acora-de-oro-y-plata-1.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
