@extends('layouts.app')

@section('content')
<!--Page Header-->
  <section class="page_header padding">
    <div class="container">
      <div class="header_content padding">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="uppercase"> Contáctanos</h1>
            <p>Siempre puedes enviarnos un correo electrónico.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a>
            </li>
            <li class="active">Contáctanos</li>
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
          <h3 class="uppercase heading bottom30">Enviar un mensaje</h3>
          <form method="post" class="contact-form padding_bottom"  action="{{ route('enviar.contacto')}}" >
             @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="¿Cómo te llamas?">
              </div>
              <div class="col-md-6 form-group">
                <label for="exampleInputEmail2">Correo</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="correo@ejemplo.com">
              </div>
              <div class="col-md-12 form-group">
                <label for="message">Mensaje</label>
                <textarea name="mensaje" class="form-control" placeholder="Escribe tu mensaje aquí..."></textarea>
                <input type="submit" class="btn-form uppercase border-radius margintop40" value="Enviar tu mensaje">
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4">
          <div class="contact_detail padding_bottom">
            <h3 class="uppercase heading bottom30">Información.</h3>
            <p class="bottom30">Si tienes alguna pregunta sobre lo que ofrecemos, nuestros productos y servicios, siempre puedes enviarnos un correo electrónico, responderemos en un plazo de 24 horas.</p>
             <div class="address bottom30">
              <i class="fa fa-map-marker"></i>
              <h5 class="uppercase">Ubicación</h5>
              <p>Bucaramanga, Colombia.</p>
            </div>
            <div class="address bottom30">
              <i class="fa fa-map-marker"></i>
              <h5 class="uppercase">Distribuidores</h5>
              <p>Colombia, Argentina, Chile, Miami, Ecuador ,Panamá,Costa Rica, Mexico, Estados Unidos.</p>
            </div>
            <div class="address bottom30">
              <i class="fa  fa-phone"></i>
              <h5 class="uppercase">Número</h5>
              <p>(+57) 3016469607</p>
            </div>
            <div class="address">
              <i class="fa fa-envelope-o"></i>
              <h5 class="uppercase">Correo</h5>
              <p>Info: <a href="#.">info@valeny.com</a>
              </p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

   <!--NEW ARRIVALS-->
    <section id="taller" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="heading_space uppercase">Nuestro taller de fabricación
            </h2>
            <p class="bottom_half">Podemos decir que nosotros Valeny joyeros somos una de las mejores o sino la mejor fabrica de joyas Colombia en oro plata, con reconocimiento internacional en la fabricación, comercialización y exportación de las mismas. ¿nuestro respaldo? Mas de 30 años de experiencia en este sector que nos da un peso específico en el mercado.</p>

<p>Nuestra casa Matriz se encuentra en Bucaramanga Santander por ser la cuna de la joyería en oro plata de Colombia, desde donde despachamos nuestros productos a cualquier lugar del mundo. Contamos con un gran equipo de artesanos, diseñadores y expertos en comercialización de joyas. Podemos surtir con nuestras prendas una amplia variedad de negocios de joyerías, desarrollar prototipos a gusto de nuestros clientes, asesorar en la estrategia de comercialización de nuestros clientes.
            </p><br><br>
          </div>
        </div>
        <div class="row">
          <div id="fourCol-slider" class="owl-carousel">
           
            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <a class="fancybox" href="{{ asset('images/joyeros01.jpg') }}">
                    <img src="{{ asset('images/joyeros01.jpg') }}" alt="Product" class="img-responsive"  >
                    
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <a class="fancybox" href="{{ asset('images/joyeros02.jpg') }}">
                    <img src="{{ asset('images/joyeros02.jpg') }}" alt="Product" class="img-responsive"  >
                    
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <a class="fancybox" href="{{ asset('images/joyeros03.jpg') }}">
                    <img src="{{ asset('images/joyeros03.jpg') }}" alt="Product" class="img-responsive"  >
                    
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <a class="fancybox" href="{{ asset('images/joyeros04.jpg') }}">
                    <img src="{{ asset('images/joyeros04.jpg') }}" alt="Product" class="img-responsive"  >
                    
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <a class="fancybox" href="{{ asset('images/joyeros05.jpg') }}">
                    <img src="{{ asset('images/joyeros05.jpg') }}" alt="Product" class="img-responsive"  >
                    
                  </a>
                </div>
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
    </section>
   

  
@endsection
