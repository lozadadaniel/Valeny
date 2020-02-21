 @extends('layouts.atlanta')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">joyas oro plata Atlanta</li>
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
          <h1 class="uppercase heading bottom30">joyas oro plata Atlanta</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">joyas oro plata Atlanta</span>
      <p>
        Si te encuentras en la búsqueda de joyas en oro plata por mayor en Atlanta, Georgia, buscando un proveedor que te brinde seguridad, fiabilidad y que tenga experiencia en el mercado de la joyería en oro plata al por mayor estas en el lugar indicado, joyas oro plata Atlanta. te contamos que en joyerías Valeny  trabajamos hace más de 10 años en la fabricación y exportación de joyas al por mayor con materiales de alta calidad y finos acabados, siendo reconocidos a nivel internacional.</p>

        <p>Nuestro mercado principal se encuentra en Latinoamérica, contamos con una capacidad de producción de miles de joyas por semana fabricadas por los mejores artesanos del oro y la plata en Colombia, lo que nos da reconocimiento en Latinoamérica es nuestros acabados de lujo de calidad exportación.</p>

<p>Los diseños de nuestros anillos son muy apetecidos, debido a que estos prototipos son analizados previamente en su fase de desarrollo para que gusten mucho en el mercado de la joyería. Constantemente estamos innovando, creando nuevas colecciones para ampliar el margen de elección de nuestros productos para nuestros clientes.</p>

<p>Desarrollamos tu marca propia si requieres de este servicio, Atlanta es unas de las ciudades con mayor proyección de nuestras joyas, el margen de ganancia para nuestros clientes (quienes nos compran al por mayor) es tan amplio que se crean alianzas estratégicas de carácter económico por muchos años.</p>

<br>


<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Set-Acora-de-oro-y-plata-1.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
