 @extends('layouts.bogota')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">fábrica de joyas oro plata Bogotá</li>
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
          <h1 class="uppercase heading bottom30">fábrica de joyas oro plata Bogotá</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">fábrica de joyas oro plata Bogotá</span>
      <p>
          En Valeny joyeros somos fabricantes de joyas en oro plata por mayor con experiencia de más de 10 años, con capacidad de surtir a todo Colombia de nuestros preciosos diseños, si estás buscando una fabrica de joyas oro plata bogota, estas en el lugar adecuado. Nosotros enviamos nuestras joyas a cada rincón de Colombia y al exterior. Somos una empresa con casa matriz en Bucaramanga desde donde fabricamos, negociamos y despachamos nuestras joyas a todo el país.</p>

<p>Muchas veces nos preguntan cuál es el mecanismo de negociación de joyas en oro plata, es muy fácil, primeramente, solicitas nuestro catalogo llenando el formulario, inmediatamente nos pondremos en contacto contigo y te enviaremos nuestro reciente catálogo, posterior a eso hacemos la configuración de la solicitud en cuanto a tallas, prendas y materiales, finalmente se realiza el pago de la mercancía y de ahí en adelante fabricamos y entregamos en menos de 15 días. ¿Qué te garantizamos? Joyas con calidad exportación de materiales con garantía de por vida, oro de 14 k y plata de ley 925.</p>

<p>Bucaramanga es la capital de las joyas y del calzado por supuesto que contamos con los mejores manufactureros del oro y la plata para joyería, también tenemos una ventaja y es que podemos servir de maquila para tus productos. ¿Qué es una maquila? Fabricamos tus diseños propios y le ponemos tu marca, en conclusión, tenemos una infinidad de posibilidades para hacer una alianza comercial fiable contigo, asesorarte en el negocio de la joyería para proyectarlo aún más en tu región. Te esperamos.</p><br>


<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Anillo-Bella-aguamarina-de-oro-y-plata.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
