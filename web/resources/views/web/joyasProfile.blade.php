  @extends('layouts.app')

@section('content')
<section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a>
            </li>
            <li>Products</li>
            <li class="active"> {{ $joyas->name }} </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!--Cart Detail -->
  <section id="cart" class="padding_bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div id="slider_product" class="cbp margintop40">
            <div class="cbp-item">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="{{ route('joya.avatar', ['filename'=>$joyas->image_path]) }}" alt="">
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="detail_pro margintop40">
            <h1 class="bottom30">{{ $joyas->name}} </h1>
            <b>Fabricante:</b> <a href="{{ route('home')}}"> Valeny</a> <br>
            <b>Existencia:</b> Disponible <br>
            <b>Descripción: </b><p class="bottom30">{{ $joyas->description}}</p>

            <h3 class="bottom30">Escribenos a Whatsapp (+57) 310 3766113</h3><br>
            <div class="cart-buttons">
              <a class="uppercase border-radius btn-dark" href="{{route('catalogo')}}"><i class="fa fa-shopping-basket"></i> &nbsp; Cotizar</a>
            </div>

            <div class="cart-share margintop30">
              <ul>
                <li><a href="#." class="facebook"><i class="fa fa-facebook-official"></i><span>Like</span></a>
                </li>
                <li><a href="#." class="twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                </li>
                <li><a href="#." class="google"><i class="fa fa-google"></i></a>
                </li>
                <li><a href="#." class="share"><i class="fa fa-plus-square"></i><span>Share</span></a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bottom_half">
    <div class="container">
      <div class="row">
        <div class="clearfix col-md-12">
          <div class="shop_tab">
            <ul class="tabs">
              <li class="active" rel="tab1">
                <h4 class="heading uppercase">Descripción</h4>
              </li>
              <li rel="tab2">
                <h4 class="heading uppercase">Tags del producto</h4>
              </li>
            </ul>
            <div class="tab_container">
              <div id="tab1" class="tab_content">
                <p><b>Joyas Medellín de oro y plata
Joyas Medellín</b><br>
Preciosos set, conjunto o juego de joyas de oro y plata conformados (en su mayoría) por un Dije dos Aretes y un Anillo en oro plata Hecho a mano por artesanos joyeros. <br>
<b>Descripción Set</b><br>
Nuestra experiencia certificada de 30 años en el mercado nos da un plus de confiabilidad,exclusividad y calidad. Puedes comprar sets por mayor para tu negocio.
Realizamos envíos internacionales a cualquier país. Solicita nuestro Catálogo y entérate de nuevos diseños. Síguenos en Facebook.</p>
              </div>

              <div id="tab2" class="tab_content">
                <ol class="commentlist">
                  <p>
                  	 joyas de oro y plata, Oro plata por mayor, de oro, de plata, Joyas Por Mayor, Joyas Por Mayoreo, Joyas Por Mayor Chile, Joyas Por Mayor Santiago, Joyas Por Mayor Patronato, Joyas Por Mayor Plata, Joyas Por Mayor Acero Quirurgico, Joyas Por Mayor Plata Y Oro, Joyas Por Mayor Argentina, Joyas Por Mayor En Once, De Oro Y Plata Letra, Cotizacion joyas De Oro Y Plata, Compra De Oro Y Plata, Joyas De Oro Y Plata, Anillos De Oro Y Plata, Precio De Oro Y Plata, Lagrimas De Oro Y Plata, Alianzas De Oro Y Plata, Joyas De Oro Y Plata, Joyas De Oro Y Plata Por Mayor, Joyas De Oro Y Plata Por Catalogo, Joyas De Oro Y Plata Para Revender, Joyas De Oro Y Plata Precios, Joyas De Oro Y Plata Para Vender, Joyas De Oro Y Plata Al Por Mayor, Joyas De Oro Y Plata Para Vender Por Catalogo, Joyas De Oro Y Plata Venta Por Mayor, Joyas De Oro Y Plata Por Mayor En Tucuman, Dijes De Oro Y Plata, Dijes De Oro Y Plata Bulgari, Dijes De Oro Y Plata Mercadolibre, Dijes De Oro Y Plata Precios, Dijes De Oro Y Plata Para Chicas, Cadenas Y Dijes De Oro Y Plata Precio, Cadenas Y Dijes De Oro Y Plata, Cadenas Con Dijes De Oro Y Plata, Dijes Oro Plata Colombia, Dijes De Plata Y Oro Para Mujeres, sijes Miami, anillos Miami, anillos de oro y plata por mayor, anillos por mayor, pulseras de oro y plata por mayor, aretes de oro y plata, aretes, aretes por mayor, mayoristas joyas, sets de oro y plata, sets en oro plata acora panamá.
                  </p>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="feature_product" class="bottom_half">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="heading uppercase bottom30">Productos Relacionados</h4>
        </div>
        @foreach ($anillos as $anillo)
        <div class="col-md-3 col-sm-6">
        	
          <div class="product_wrap bottom_half">
            <div class="tag-btn"><span class="uppercase text-center">New</span>
            </div>
            <div class="image">
              <a class="fancybox" href="{{ route('joya.avatar', ['filename'=>$anillo->image_path]) }}"><img src="{{ route('joya.avatar', ['filename'=>$anillo->image_path]) }}"    >
              </a>
            </div>
            <div class="product_desc">
              <p class="title">{{$anillo->name}}</p>
              <span class="price"><i class="fa fa-dollar"></i>0</span>
              <a class="fancybox" href="{{route('catalogo')}}" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
            </div>
          </div>
          
        </div>
        @endforeach
      </div>
    </div>
  </section>
 


@endsection
