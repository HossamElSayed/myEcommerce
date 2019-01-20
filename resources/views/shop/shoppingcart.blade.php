@extends('layout.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('style')
    <link rel="stylesheet" href="{{url('/mylib/style.css')}}">
@endsection

@section('content')
    @if(session()->has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($products as $product)
                <li class="list-group-item">
                        <span class="badge">{{$product['Qty']}}</span>
                        <strong>{{$product['item']['title']}}</strong>
                    <span class="label label-success">{{$product['price']}}</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="">Reduce by 1</a></li>
                            <li><a href="">Reduce All</a></li>
                        </ul>

                    </div>
                </li>
                    @endforeach
            </ul>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price: {{$totalprice}}</strong>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success">Check Out <i class="fa fa-check-circle"></i></button>
            </div>
        </div>

        @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Sorry!!... No items to view</h2>
            </div>
        </div>

        @endif



@endsection