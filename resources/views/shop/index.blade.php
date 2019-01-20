@extends('layout.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('style')
    <link rel="stylesheet" href="{{url('/mylib/style.css')}}">
@endsection

@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url($product->imgPath)}}" class="img-responsive">
                <div class="caption">
                    <h3>{{$product->title}}</h3>
                    <p class="desc">
                        {{$product->desc}}
                    </p>
                    <div class="clearfix">
                        <p class="pull-left price">{{$product->price}} <i class="fa fa-dollar"></i></p>
                        <p class="pull-right"><a href="{{route('addtocart',['id'=>$product->id])}}" class="btn btn-success" role="button">Add To Cart</a> </p>
                    </div>


                </div>
            </div>
        </div>
            @endforeach
    </div>


    @endsection