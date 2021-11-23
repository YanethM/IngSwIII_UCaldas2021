@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth
                            <div>
                                Bienvenido al sistema {{ auth()->user()->name }}
                                Rol de usuario {{ auth()->user()->rol }}
                            </div>
                        @endauth

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('images/img1.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <a href="{{route('category.index')}}"> <h6 class="card-title">Módulo categorías</h6></a>
                                  <p class="card-text">Descripción.</p>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('images/img2.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <a href="{{route('post.index')}}"> <h6 class="card-title">Módulo publicaciones</h6></a>
                                  <p class="card-text">Descripción.</p>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('images/img3.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <a href="{{route('rol.index')}}"> <h6 class="card-title">Módulo gestión roles</h6></a>
                                  <p class="card-text">Descripción.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
