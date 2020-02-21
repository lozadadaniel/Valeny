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
            <li class="active">Boletin</li>
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
                    <li><a href="{{route('catalogo')}}">Boletin</a>
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
                  <th>ID</th>
                  <th>Correo</th>
                  
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                <tr>
                    <td>{{$new->id}}</td>
                    <td>{{$new->email}}</td>
                    
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
            <li class="active">Boletin</li>
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
