@extends('layouts.login')

@section('content')

<div class="container-login100">
            <div class="wrap-login100 p-t-90 p-b-30">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}" >
                    @csrf
                    <span class="login100-form-title p-b-40">
                        Ingreso de usuarios
                    </span>

                    <div>
                        <a href="#" class="btn-login-with bg1 m-b-10">
                            <i class="fa fa-facebook-official"></i>
                            Ingresa con facebook
                        </a>

                    </div>

                    <div class="text-center p-t-55 p-b-30">
                        <span class="txt1">
                            Ingresa con tu correo
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16"  data-validate="Please enter email: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Correo" required autocomplete="email">
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                           Ingresa
                        </button>
                    </div>
                    
                    <div class="flex-col-c p-t-224">
                        <span class="txt2 p-b-10">
                            ¿No tienes una cuenta?
                        </span>

                        <a href="#" class="txt3 bo1 hov1">
                            Registrate ahora
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
@endsection
