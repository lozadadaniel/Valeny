@extends('layouts.app') 

@section('content')

@if(Auth::user()->tipo =='superadmin')

 @if (session('message'))

            <div class="alert bg-green btn-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Bien hecho!</strong> {{ session('message') }}

                            </div>
            @endif 

<!--Page Nav-->
  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a>
            </li>
            <li class="active">Joyas</li>
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
                    <li><a href="#">{{$category->name}}</a>
                    </li>
                    @endforeach
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </aside>

      </div>



      <div class="col-md-9 col-sm-9">
        <div class="shop-grid-controls">
          <div class="modal-area-button">
                                <a class="side-button bottom30" href="#" data-toggle="modal" data-target="#producto">Agregar producto</a>
                            </div>
                                <div id="producto" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <center><h1>Subir producto</h1>  </center>
                                            <hr>
                                            <div class="row">
                                              <div class="col-md-6">
                          <form method="post" action="{{route('crear.joya')}}" enctype="multipart/form-data" >
                            @csrf
                          <b>Nombre:</b> 
                          <input type="text" class="form-control" name="name" placeholder="Nombre del producto" >
                          <b>Categoría:</b> 
                          <select class="form-control"  name="category_id" >
                                            @foreach($categorys as $category)
                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                            @endforeach
                          </select>
                          <b>Descripción:</b>
                          <textarea class="form-control" placeholder="Escribe aquí..." name="description"></textarea>

                          
                          

                         </div>
                         <div class="col-md-6">
                          <b>Precio:</b> 
                          <input type="text" class="form-control" name="precio" placeholder="¿Cuanto vale?" >
                          <b>Adjuntar Imagen:</b> <br>
                          <input type="file" id="image_path" name="image_path" required>
                         </div>
                            </div>
                            <div class="col-md-12">
                              <b>Tags:</b>
                          <textarea name="tags" class="form-control"  rows="10" cols="40" >Escribe aquí los tags del producto</textarea>
                            </div>
                            <hr>
                            <center>
                            <button type="submit" class="btn btn-general btn-blue mr-2">Guardar</button>
                            </center>
                          </form>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cerrar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

          
          <div class="view-button grid active bottom30">
            <i class="fa fa-th-large"></i>
          </div>
          <div class="view-button list  bottom30"> 
            <i class="fa fa-align-justify"></i>
          </div>
        </div>
        <div class="row shop-grid list-grid">
          @foreach ($joyas as $joya)
          <div class="col-md-4 col-sm-6">
            <div class="product_wrap heading_space">
              <div class="image">
                <div class="tag">
                  <div class="tag-btn">
                    <span class="uppercase text-center">Nuevo</span>
                  </div> 
                </div>
                <a class="fancybox" href="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}"><img src="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}" width="50%">
                </a>
              </div>
              <div class="product_desc">
                <p class="title">{{ $joya->name}}</p>
                <div class="list_content">
                  <h4 class="bottom30">{{ $joya->name}}</h4>
                  <p>{{ $joya->description}}</p>
                  <h3 class="price bottom30"><i class="fa fa-dollar"></i> {{ $joya->precio}} &nbsp;<span class="discount"></h3>
                  <div class="cart-buttons">
                    <a class="icons side-button bottom30" href="#" data-toggle="modal" data-target="#j{{$joya->id}}">
                      <i class="fa fa-pencil"></i>
                    </a>

                    <div id="j{{$joya->id}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <center><h1>Editar producto</h1>  </center>
                                            <hr>
                                            <div class="row">  
                                              <div class="col-md-6">
                          <form method="post" action="{{route('update.joya')}}" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="id" value="{{ $joya->id}}">
                          <b>Nombre:</b> 
                          <input type="text" class="form-control" name="name" value="{{$joya->name}}" >
                          <b>Categoría:</b> 
                          <select class="form-control"  name="category_id" >
                                            <option value="{{ $joya->categoria_id }}" >{{ $joya->categorias->name }}</option> 
                                            @foreach($categorys as $category)
                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                            @endforeach
                          </select>
                          <b>Descripción:</b>
                          <input type="textarea" class="form-control" value="{{ $joya->description}}" name="description"  > </input>

                          
                          
                          
                          

                         </div>
                         <div class="col-md-6">
                          <b>Precio:</b> 
                          <input type="text" class="form-control" name="precio" value="{{ $joya->precio}}" >
                          <b>Subir Nueva Imagen:</b> <br>
                          <img width="30%" src="{{ route('joya.avatar', ['filename'=>$joya->image_path]) }}">
                          <br>
                          <input type="file" id="image_path" name="image_path" >
                         </div>
                            </div>
                            <div class="col-md-12">
                              <b>Tags:</b>
                          <textarea name="tags" class="form-control"  rows="10" cols="40" >{{ $joya->tags}}</textarea>
                            </div>

                            <hr>
                            <center>
                            <button type="submit" class="btn btn-general btn-blue mr-2">Guardar</button>
                            </center>
                          </form>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cerrar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div></div>


                    


                    <a  class="icons side-button bottom30" href="#" data-toggle="modal" data-target="#b{{$joya->id}}">
                      <i class="fa fa-close"></i>
                    </a>


                    <div id="b{{$joya->id}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <center><h1>Borrar producto</h1>  </center>
                                            <hr>
                                            <div class="row">  
                                              <div class="col-md-12">
                          
                          <center>
                            Está seguro de borrar este producto? - {{ $joya->name}}
                          <br>
                          <a href="{{route('delete.joya', ['filename'=>$joya->id])}}" class="btn btn-success">Si</a>
                            <a data-dismiss="modal" class="btn btn-danger">No</a>
                        </center>
                         </div>
                         
                            </div>
  
                                    
                                </div>
                            </div>
                        </div></div>
                  </div>
                </div>
                <span class="price"><i class="fa fa-dollar"></i> {{ $joya->precio}} &nbsp;</span>
              </div>
            </div>
          </div>
           @endforeach
        </div> 
       {{ $joyas->links()}}
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
