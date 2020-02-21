@extends('layouts.app')

@section('content')

<section class="rev_slider_wrapper">    
      <div id="rev_slider" class="rev_slider"  data-version="5.0">
        <ul>    
          <!-- SLIDE  -->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="{{asset('images/fondorosa.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover">                          
            <div class="tp-caption tp-resizeme"
                 data-x="right" data-hoffset="" 
                 data-y="0" data-voffset="10" 
                 data-width="['auto','auto','auto','auto']"
                 data-height="['auto','auto','auto','auto']"
                 data-transform_idle="o:1;"
                 data-transform_in="x:right;s:2000;e:Power4.easeInOut;" 
                 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                 data-start="3000" 
                 data-splitin="none" 
                 data-splitout="none" 
                 data-responsive_offset="on" 
                 style="z-index: 7; white-space: nowrap;">
              <img src="{{asset('images/home2-banner1layer1.png')}}" alt="" >
            </div>
            <!-- LAYER NR. 1 -->
            <h3 class="tp-caption tp-resizeme uppercase"                            
                data-x="left"
                data-y="185"                            
                data-width="full"
                data-transform_idle="o:1;"
                data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                            
                data-start="800">Lo nuevo en oro plata
            </h3>
            <h1 class="tp-caption tp-resizeme uppercase"                            
                data-x="left"
                data-y="228"                            
                data-width="full"
                data-transform_idle="o:1;"
                data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                            
                data-start="1000">
              <strong>Joyas de 
              </strong> Máxima Calidad
            </h1>
            <div class="tp-caption tp-resizeme"                             
                 data-x="left"
                 data-y="415"                           
                 data-width="full"
                 data-transform_idle="o:1;"
                 data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                               
                 data-start="1300">
              <p>"La vida es una fiesta, viste para ella"
                <br>- AUDREY HERPBURN
              </p>
            </div>
            <div class="tp-caption tp-resizeme"                             
                 data-x="left"
                 data-y="510"                           
                 data-width="full"
                 data-transform_idle="o:1;"
                 data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                           
                 data-start="1600">
              <a href="{{route('catalogo')}}" class="btn-common">Cotizar ahora oro plata
              </a>
            </div>
          </li>
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="images/002.jpg" alt="" data-bgposition="center center" data-bgfit="cover">              
            <div class="tp-caption tp-resizeme"
                 data-x="right" data-hoffset="" 
                 data-y="0" data-voffset="10" 
                 data-width="['auto','auto','auto','auto']"
                 data-height="['auto','auto','auto','auto']"
                 data-transform_idle="o:1;"
                 data-transform_in="x:right;s:2000;e:Power4.easeInOut;" 
                 data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                 data-start="3000" 
                 data-splitin="none" 
                 data-splitout="none" 
                 data-responsive_offset="on" 
                 style="z-index: 7; white-space: nowrap;">
              <img src="{{asset('images/002.png')}}" alt="" >
            </div>
            <!-- LAYER NR. 1 -->
            <h3 class="tp-caption tp-resizeme uppercase"              
                data-x="left"
                data-y="185"              
                data-width="full"
                data-transform_idle="o:1;"
                data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                
                data-start="800">Lo nuevo
            </h3>
            <h1 class="tp-caption tp-resizeme uppercase"              
                data-x="left"
                data-y="228"              
                data-width="full"
                data-transform_idle="o:1;"
                data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                
                data-start="1000">
              <strong>Joyas 
              </strong> Oro y plata
            </h1>
            <div class="tp-caption tp-resizeme"               
                 data-x="left"
                 data-y="415"             
                 data-width="full"
                 data-transform_idle="o:1;"
                 data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                 
                 data-start="1300">
              <p>Precios de fábrica
              </p>
            </div>
            <div class="tp-caption tp-resizeme"               
                 data-x="left"
                 data-y="510"             
                 data-width="full"
                 data-transform_idle="o:1;"
                 data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                 data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"               
                 data-start="1600">
              <a href="{{route('catalogo')}}" class="btn-common">Cotizar ahora oro plata
              </a>
            </div>
          </li>
        </ul>               
      </div>
      <!-- END REVOLUTION SLIDER -->
    </section>
<p></p>
 
 <!--Slogan-->
    <section id="slogan">
      <div class="container sloganBg">
        <div class="row">
          <div class="col-md-12">
            <div class="left">
              <h2 class="uppercase">
                <span>CONOZCA NUESTRA
                </span> JOYERÍA DE ORO Y PLATA
              </h2>
              <p> Con precios increibles.
              </p>
            </div>
            <div class="right">
              <a href="{{route('contacto')}}" class="btn-common uppercase" > Contacto
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Three Box Products-->
    <section id="grid_box">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <a class="grid_box clearfix" href="{{route('anillos.colombia')}}">
              <div class="image_left">
                <img src="{{ asset('images/product-box1.png')}}" alt="Product">
              </div>
              <div class="grid_body">
                <h2 class="uppercase">Anillos
                </h2>
                <h4>Diseños exclusivos
                </h4>
                <h3>
                  ({{ $anillos->count() }})
                </h3>
              </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a class="grid_box clearfix" href="{{route('pulseras.colombia')}}">
              <div class="image_left">
                <img src="{{ asset('images/product-box2.png')}}" alt="Product">
              </div>
              <div class="grid_body">
                <h2 class="uppercase">Pulseras 
                  
                </h2>
                <h4>Elegancia y exclusividad
                </h4>
                <h3>({{ $pulseras->count() }})
                </h3>
              </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a class="grid_box clearfix" href="{{route('dijes.colombia')}}">
              <div class="image_left">
                <img src="{{asset('images/product-box3.png')}}" alt="Product">
              </div>
              <div class="grid_body">
                <h2 class="uppercase">Dijes 
                </h2>
                <h4>Diseños personalizados
                </h4>
                <h3>({{ $dijes->count() }})
                </h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--NEW ARRIVALS-->
    <section id="arrivals" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="heading_space uppercase">Nuevos productos
            </h2>
            <p class="bottom_half">Lo mejors en joyería, oro plata, solo oro, piedras y muchos más...
            </p>
          </div>
        </div>
        <div class="row">
          <div id="fourCol-slider" class="owl-carousel">
            @foreach ($joyas as $joya)
            <div class="item">
              <div class="product_wrap">
                <div class="image">
                  <div class="social">
                    <ul>
                      <li>
                        <a href="#.">
                          <i class="fa fa-expand">
                          </i>
                        </a>
                      </li>
                      <li>
                        <a href="#.">
                          <i class="fa fa-exchange">
                          </i>
                        </a>
                      </li>
                      <li>
                        <a href="#.">
                          <i class="fa fa-heart-o">
                          </i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="fancybox" href="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}">
                    <img src="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}" alt="Product" class="img-responsive"  ><br>
                    <img src="{{ asset('images/valeny.png') }}" alt="Product" class="img-responsive"  >
                  </a>
                </div>
                <div class="product_desc">
                   @php
        $nombre = str_replace(" ", "-", $joya->name);
            @endphp
                  <p><a href="{{ route('joyas.profile',[$nombre])}}">{{ $joya->name}}</a> 
                  </p>
                  <span class="price">
                    <i class="fa fa-dollar">
                    </i>{{$joya->precio}}
                  </span>
                  <a class="fancybox" href="images/product5.jpg" data-fancybox-group="gallery">
                    <i class="fa fa-shopping-bag open">
                    </i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
           
          </div>
        </div>
      </div>
    </section>
   
  
    <!--Slogan-->
    <section id="slogan">
      <div class="container sloganBg2">
        <div class="row">
          <div class="col-md-12">
            <div class="left">
              <h2 class="uppercase">
                <span>SEA DISTRIBUIDOR
                </span> ORO Y PLATA
              </h2>
              <p> Precios especiales.
              </p>
            </div>
            <div class="right">
              <a href="{{route('contacto')}}" class="btn-common uppercase" > Contacto
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!--Testinomial-->
    <section id="sobre" class="padding"  >
      <div class="container" >
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
            <div id="tstinomial-slider" class="owl-carousel">
              <div class="item text-center" >
                <div class="testinomial_pic heading_space">
                  <img src="{{asset('images/testinomial1.png')}}" alt="testinomial">
                  <h6 class="uppercase"  >Valeny
                  </h6>
                  <span class="uppercase">Joyería
                  </span>
                </div>
                <p>Valeny es una joyería mayorista productora de elegantes joyas de oro y plata elaboradas a mano por artesanos joyeros. También elaboramos joyas fabricadas en Acero con precios realmente competitivos. Nuestros precios son los mejores del mercado de la joyería. Los Anillos, Pulseras, Aretes y Dijes contienen piedras, circones, oro rosado, oro amarillo, plata ley 925. Nuestra fábrica principal está ubicada en Bucaramanga, Santander, Colombia. Desde donde despachamos al exterior nuestras joyas. 10 años de experiencia en la elaboración de joyas hacen que seamos la mejor opción en proveedores de joyas de calidad.
                </p>
              </div> 
            </div>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="availability text-center margin_top">
              <i class="fa fa-heart">
              </i>
              <h5 class="uppercase">SATISFACCIÓN
              </h5>
              <span>Ofrecemos los mejores precios del mercado.
              </span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="availability text-center margin_top">
              <i class="fa fa-car">
              </i>
              <h5 class="uppercase">ENVIOS
              </h5>
              <span> Realizamos envíos a toda Colombia y a cualquier país.
              </span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="availability text-center margin_top">
              <i class="fa fa-diamond">
              </i>
              <h5 class="uppercase">PRODUCTOS DE CALIDAD
              </h5>
              <span>Contamos con más de 30 años, fabricando joyas en oro y plata.
              </span>
            </div>
          </div>
        </div>
         <!--Slogan--> 
         <p></p>
    <section id="slogan">
      <div class="container sloganBg3">
        <div class="row">
          <div class="col-md-12">
            <div class="left">
              <h2 class="uppercase">
                <span>REGISTRATE
                </span> EN NUESTRO NEWSLETTER
              </h2>
              <p>obtenga descuentos. 
                
             
              </p>
            </div>
            <div class="right">
              <FORM method="post" action="{{ route('enviar.new')}}" class="contact-form" >
                 @csrf
<input type="email" class="form-control"  id="email" name="email" placeholder="correo@ejemplo.com"> <input type="submit" class="btn-form uppercase border-radius margintop40" value="Registrarme">
</FORM>
            </div>
          </div>
        </div>
      </div>
    </section>
      </div>
    </section>
    <section id="sobre" class="padding"  >
    <!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/784835" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
  </section>

@endsection
