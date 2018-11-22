@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
                <div class="card">
                    <header class="padding text-center bg-primary">

                    </header>
                    <div class="card-body padding">
                        <h1 class="card-title">{{$product->title}}</h1>
                        <h4 class="card-subtitle">{{$product->price}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="card-actions text-right">
                            <button type="button" class="btn btn-outline-success" name="button">Agregar al carrito</button>
                                <div class="pt-1">
                                    @include('products.delete')
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection