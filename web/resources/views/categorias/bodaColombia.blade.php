 @extends('layouts.boda')

@section('content') 

  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Inicio</a>
            </li>
            <li class="active">Boda de Oro y plata al por mayor </li>
          </ul >
        </div>
      </div>
    </div>
  </section>

  <!--Contact Us-->
  <section id="contact" class="padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="uppercase heading bottom30">{{ $bodaColombia->name }} por mayor Colombia</h1>
        </div>
        
      </div>
      <img src="{{ asset('images/boda-oro-plata-valeny.jpg')}}" alt="boda-oro-plata" class="img-responsive"  >
      <p>
        </p>

        <h4 class="uppercase heading bottom30">boda de Oro y plata al por mayor</h4>

        <section class="grid padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="shop-grid-controls">
          <a class="side-button bottom30" href="#.">
            Show Sidebar
          </a>
          <div class="view-button grid active bottom30">
            <i class="fa fa-th-large"></i>
          </div>
          <div class="view-button list bottom30">
            <i class="fa fa-align-justify"></i>
          </div>
          <div class="entry bottom30">
          <form class="grid-form">
              <div class="form-group">
                <div class="select form-control">
                  <select name="country" id="city">
                  <option selected>Defaul sorting</option>
                  <option>Defaul sorting</option>
                  <option>Defaul sorting</option>
                  </select>
                </div>
              </div>
          </form>
          </div>
        </div>
      </div>  
      <div class="col-sm-4 text-right">
         <h5 class="result uppercase bottom30">Mostrando {{ $bodaColombia->joyas->count() }} resultados</h5>
      </div>
    </div>  
    
    <div class="row shop-grid grid-view">
       @foreach ($bodaColombia->joyas as $joya)
      <div class="col-md-3 col-sm-6">
        <div class="product_wrap heading_space">
          <div class="image">
            <div class="tag">
                <div class="tag">
                
              </div>
              </div>
            <a class="fancybox" href="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}"><img src="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}" alt="Product" class="img-responsive"><br>
                    <img src="{{ asset('images/valeny.png') }}" alt="Product" class="img-responsive"  ></a>
          </div>
          <div class="product_desc">
             @php
        $nombre = str_replace(" ", "-", $joya->name);
            @endphp
           <a href="{{ route('joyas.profile',[$nombre])}}"><p class="title">{{ $joya->name}}</p></a>
           <div class="list_content">
               <h4 class="bottom30">{{ $joya->name}} </h4>
               <p>{{ $joya->description}}</p>
                <div class="cart-buttons">
                  <a class="uppercase border-radius btn-dark" href="cart.html">&nbsp; Cotizar</a>
                  <a class="icons" href="#.">
                  <i class="fa fa-exchange"></i>
                  </a>
                </div>
           </div>
           <span class="price"><i class="fa fa-dollar"></i>0.0</span>
           <a class="fancybox" href="{{route('catalogo')}}" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</section>


    </div>
  </section>

@endsection
