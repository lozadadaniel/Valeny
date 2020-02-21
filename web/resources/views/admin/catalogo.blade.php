@extends('layouts.app')

@section('content')

@if(Auth::user()->tipo =='superadmin')

<!--Page Nav-->
  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a>
            </li>
            <li class="active">Catálogos</li>
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
            <h4 class="heading uppercase bottom30">Solicitudes enviadas</h4>
            <div class="accordion-container">
              <div class="set">
                <a href="#." class="active uppercase">Enlaces<i class="fa fa-plus"></i></a>
                <div class="content" style="display:block;">
                  <ul>
                    <li><a href="{{route('catalogo')}}">Catálogos</a>
                    </li>
                    <li><a href="#.">Usuarios</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </aside>

      </div>

      <div class="col-md-9 col-sm-9">
        <div class="shop-grid-controls">
          <a class="side-button bottom30" href="#."> Show Sidebar</a>
          <div class="view-button grid bottom30">
            <i class="fa fa-th-large"></i>
          </div>
          <div class="view-button list active bottom30">
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
        <div class="row shop-grid list-view">
          <div class="col-md-4 col-sm-6">
           <table class="table" id="table-id">

              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Ciudad</th>
                  <th>Interesado en</th>
                  <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogos as $catalogo)
                <tr>
                    <td>{{$catalogo->name}}</td>
                    <td>{{$catalogo->email}}</td>
                    <td>{{$catalogo->phone}}</td>
                    <td>{{$catalogo->city}}</td>
                    <td>{{$catalogo->categorias->name}}</td>
                    <td><div class="modal-area-button">
                                <a class="mg-b-10" href="#" data-toggle="modal" data-target="#{{ $catalogo->id }}">✏️</a>
                            </div>
                                <div id="{{ $catalogo->id }}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <center><h1>Enviar Catálogo</h1>  </center>
                                            <hr>
                                            <div class="row">
                                              <div class="col-md-6"><b>Adjuntar archivo .pdf:</b> <br>
                          <form method="post" action="#" >
                            @csrf
                
                          <input type="file">
                          <b>Nota:</b>
                          <textarea class="form-control" placeholder="Escribe aquí tu mensasje..."></textarea>

                          <button type="submit" class="btn btn-general btn-blue mr-2">Enviar mensaje</button>
                          </form>
                          

                         </div>
                            </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cerrar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                               </td>
                </tr>
                @endforeach
            </tbody>
        </table>
          </div>
          
        </div>
       
      </div>

    </div>
  </section>

  @else

  <!--Page Nav-->
  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a>
            </li>
            <li class="active">Catálogos</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="grid padding">
    <h1>Acceso denegado...</h1>
  </section>

  @endif

@endsection
