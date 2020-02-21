 @extends('layouts.mayorMedellin')

@section('content')

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">Joyas al por Mayor en Medellín Antioquia</li>
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
          <h1 class="uppercase heading bottom30">Joyas al por Mayor en Medellín Antioquia</h1>
        </div>
        
      </div>
      <span class="uppercase heading bottom30">Joyas al por Mayor en Medellín Antioquia</span>
      <p>
          Somos la mayor fábrica de joyas capaz de distribuir joyas al por mayor en Medellín y Antioquía, nosotros somos fabricantes hace más de 10 años donde hemos adquirido la experiencia necesaria para hacer de nuestras joyas oro plata las más lindas y con mejores acabados de Colombia, nuestras joyas son hechas a mano con Oro de 14 kilates y Plata ley 925 (los mejores materiales para mezclar el oro y la plata en una sola composición). Valeny joyeros tiene los mejores precios del mercado y siempre está a la vanguardia de la moda de la joyería.</p>

<p>Si te encuentras en la búsqueda de joyerías en Medellín te recomendamos que busques un punto de fabricación directa, debido a que el hecho de comprar en joyerías te quita la posibilidad de poder trabajar con mejores precios. Recomendamos que adquieras joyas por mayor en nuestra empresa porque te ofrecemos muchas posibilidades de mejorar tu negocio; diseñamos con tu propia marca y damos una amplia gama de posibilidades en cuanto a la elaboración de joyas a tu gusto.</p>

<p>La joyería contemporánea es el tipo de práctica entendida como la descendiente de una actividad creativa basada en la artesanía, que encuentra su origen en los talleres medievales. Tal definición pone el acento en el pasado histórico de la joyería contemporánea y encuentra antecedentes, por un lado, en los movimientos arts & crafts anglosajones, y por el otro en la aparición de movimientos de joyería radicales en los años 60, que subraya las nociones de individualidad, artesanía y creatividad, y su conflictiva relación con la gran producción en serie. Nosotros conocemos a la perfección las tendencias contemporáneas en la elaboración de joyas que puede dar una mejor posición al momento de vender tus joyas.  Joyas de Colombia para el mundo !</p><br>


<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/Anillo-Colmena-de-oro-y-plata.jpg')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<center><a href="{{ route('catalogo')}}"><img src="{{ asset('images/nuestro-catalogo-valeny.png')}}" alt="nuestro-catalogo-valeny" class="img-responsive"  ></a></center>
<br><br>
    </div>
  </section>

@endsection
