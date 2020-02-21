 @extends('layouts.barranquilla')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">JOYERIA ORO PLATA EN BARRANQUILLA</li>
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
          <h1 class="uppercase heading bottom30">JOYERIA ORO PLATA EN BARRANQUILLA</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">JOYERIA ORO PLATA EN BARRANQUILLA</span>
      <p>
          Gracias al reconocimiento por el trabajo con oro, plata, esmeraldas, piedras preciosas, semipreciosas, entre otros materiales autóctonos presentes en la oferta colombiana, la joyería en oro plata nacional se ha convertido en algo único y exclusivo que se refleja en la preferencia del público internacional, si te encuentras en la búsqueda de joyas oro plata en Barranquilla Colombia éste es tu lugar.</p>

<p>Dentro de la gama de productos se encuentran piezas únicas hechas a mano y otros de elaboración a gran escala; además el trabajo con técnicas ancestrales que se combinan con diseños de vanguardia y clásicos de la joyería internacional. Colombia es el primer productor mundial de esmeraldas, calificadas como las más finas; lo cual le imprime la diferenciación y exclusividad deseada por los consumidores a nivel mundial.</p>



<p>Aunque de manera leve, la única ciudad del país donde las ventas del comercio crecieron en abril fue Barranquilla con un 0,9%. En el mismo mes del 2016 el crecimiento fue de 5%</p>

<p>En cuanto a los resultados de Barranquilla, el director de la Federación Nacional de Comerciantes (Fenalco) Atlántico, Héctor Carbonell, señala que estos resultados coinciden con la percepción de los afiliados al gremio, ya que un 50% dijo haber tenido un buen comportamiento. “En la ciudad también hay un tema de confianza de los consumidores que es muy importante”, añadió Carbonell.</p>

<p>JOYAS VALENY puede ser el proveedor indicado para tu negocio de joyas en oro plata, quizás si estás pensando en exportar dichas prendas, te damos todas las facilidades para lograr tus objetivos de ventas. Joyas en oro plata por mayor hechas a ma</p><br>


<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Set-Acora-de-oro-y-plata-1.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
