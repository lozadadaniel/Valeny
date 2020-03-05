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
            <li class="active">Solicitar catálogo</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  @if (session('message'))

            <div class="alert bg-green btn-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Bien hecho!</strong> {{ session('message') }}

                            </div>
            @endif 


  <!--Contact Us-->
  <section id="contact" class="padding_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="uppercase heading bottom30">Solicitar Catálogo</h3>
          <form method="post" action="{{ route('enviarCatalogo')}}" >
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
              </div>
              <div class="col-md-6 form-group">
                <label for="exampleInputEmail2">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com">
              </div>
               <div class="col-md-6 form-group">
                <label for="exampleInputName2">Telefono</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="000-000-0000">
              </div>
              <div class="col-md-6 form-group">
                <label for="exampleInputEmail2">Ciudad</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="">
              </div>
              <div class="col-md-6 form-group">
                <label for="exampleInputEmail2">Producto de interes</label>
                 <select class="form-control"  name="categoria_id" >
                                            @foreach($categorias as $categoria)
                                            <option value="{{ $categoria->id }}" >{{ $categoria->name }}</option>
                                            @endforeach
                          </select>
              </div>
              <div class="col-md-6 form-group">
                <label for="exampleInputEmail2">Pais</label>
                <input type="text" class="form-control" id="pais" name="pais" placeholder="">
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" class="btn-form uppercase border-radius margintop40" >Enviar</button>
                
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

<!--Page Header-->
  <section class="page_header2 padding">
    <div class="container">
      <div class="header_content padding">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="uppercase"> Solicitar Catálogo</h1>
            <p>Siempre puedes enviarnos un correo electrónico.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  

@endsection
