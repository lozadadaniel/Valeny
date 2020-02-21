 @extends('layouts.nw')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">Joyas oro plata en New York</li>
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
          <h1 class="uppercase heading bottom30">Joyas oro plata en New York</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">Joyas oro plata en New York</span>
      <p>
          Nueva York es la ciudad más poblada del estado homónimo y de los Estados Unidos de América, por esto es la plaza perfecta para comercializar joyas en oro plata, opción de negocio rentable fiable y duradera. Comercializar joyas oro plata en new york es muy sencillo puesto que esta metrópolis está habitada por demasiados turistas que encuentran en nuestras joyas un producto demasiado atractivo para adquirir. Joyas de oro y plata Valeny cuenta con mas de 10 años de experiencia en la fabricación, venta y exportaciónen el mercado de la joyería.</p>

          <p>Si eres latino y te encuentras en New York deseando tener tu propio negocio de joyería o ya lo tienes y simplemente quieres establecer una alianza comercial con un fabricante de confianza éste es el lugar indicado. Puedes solicitar nuestro catálogo comercial en cualquier momento y estaremos siempre dispuestos a brindarte la mejor asesoría para hacer de tu negocio un rubro exitoso.</p>

<p>Nuestra casa matriz se encuentra en Bucaramanga Colombia donde seleccionamos los mejores artesanos joyeros por su experiencia y calidad humana y con quienes trabajamos hace más de 10 años, son piezas elaboradas a mano minuciosamente para que nuestros clientes puedan lucir una joya de calidad exportación. Danos el gusto de atenderte</p>

<h2 class="uppercase heading bottom30">Joyas oro plata en new york? Joyas oro plata? Joyas de oro y plata en new york ?</h2>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Set-Acora-de-oro-y-plata-1.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
