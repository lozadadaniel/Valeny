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
            <li class="active">Garantía</li>
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
          <h1 class="uppercase heading bottom30">Garantía</h1>
        </div>
        
      </div>
      <p>
        Todos los artículos que compres en Valeny Joyeros pasan un control de calidad por parte de un profesional antes de su venta, quien verificará si el producto responde a la calidad exigida.</p>

<p>Los artículos serán correctamente empaquetados para que no sufran ningún tipo de desperfecto durante el transporte.</p>


<p>Nuestros productos son Garantizados, La Joyas Requieren de cuidados delicados, ya que con el tiempo pueden deteriorase presentando raspaduras , ralladuras ocasionadas por el uso habitual de las piezas . Estas son joyas en plata con aplicaciones en oro . Con Materiales de excelente calidad y especializada mano de obra.</p>

<p>La Garantía No cubre daños ocasionados por el desgaste normal , síntomas de maltrato como raspaduras , ralladuras , desprendimiento de piedras alteraciones por el uso de químicos o el uso inadecuado de la joya.
      </p>

    </div>
  </section>

@endsection
