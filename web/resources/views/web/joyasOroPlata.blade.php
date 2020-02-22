@extends('layouts.app')

@section('content')


<!--Page Nav-->
  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a>
            </li>
            <li class="active">Joyas Oro Plata</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="grid padding">
    <h3 class="hidden">heading</h3>
    <div class="container">

         <div class="col-md-3 col-sm-3">
        <aside class="sidebar">
          <div class="widget content_space">
            <h4 class="heading uppercase bottom30">Joyas registradas</h4>
            <div class="accordion-container">
              <div class="set">
                <a href="#." class="active uppercase">Categorias<i class="fa fa-plus"></i></a>
                <div class="content" style="display:block;">
                  <ul>
                    @foreach( $categorys as $category)
                    <li><a href="{{route('home')}}/{{$category->url}}">{{$category->name}}</a>
                    </li>
                    @endforeach
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="widget content_space">
            <div class="fb-page" data-href="https://www.facebook.com/joyasvaleny/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/joyasvaleny/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/joyasvaleny/">Joyas Valeny</a></blockquote></div>
          </div>

        </aside> 

      </div>



      <div class="col-md-9 col-sm-9">
        <div class="shop-grid-controls">
         
                               

          
          <div class="view-button grid active bottom30">
            <i class="fa fa-th-large"></i>
          </div>
          <div class="view-button list  bottom30"> 
            <i class="fa fa-align-justify"></i>
          </div>
        </div>
        <div class="row shop-grid grid-view">
          @foreach ($joyas as $joya)
          <div class="col-md-4 col-sm-6">
            <div class="product_wrap heading_space">
              <div class="image">
                <div class="tag">
                  
                </div>
                <a class="fancybox" href="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}"><img src="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}" alt="Product" class="img-responsive" width="50%"><br>
                    <img src="{{ asset('images/valeny.png') }}" alt="Product" class="img-responsive"  >
                </a>
              </div>
              <div class="product_desc"> 
                 @php
        $nombre = str_replace(" ", "-", $joya->name);
            @endphp
                <a href="{{ route('joyas.profile',[$nombre])}}"><p class="title">{{ $joya->name}}</a></p>
                <div class="list_content">
                  <h4 class="bottom30">{{ $joya->name}}</h4>
                  <p>{{ $joya->description}}</p>
                  <h3 class="price bottom30"><i class="fa fa-dollar"></i> {{ $joya->precio}} &nbsp;<span class="discount"></h3>
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

    </div>
  </section>


@endsection
