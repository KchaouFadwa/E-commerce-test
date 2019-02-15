@extends('layouts.master' )

@section('title')
    shopping cart
@endsection

@section('content')



    <h1>Visits details  </h1>
    @foreach($list as $key => $item )

        <span>visitor id:{{$key}}</span>
        <hr>
        <ul class="list-group">

            @foreach($item as $productname )
            <li class="list-group-item">{{$productname}}</li>

            @endforeach
        </ul>

        <hr>





    @endforeach



    <hr>
    <span>  return to the store   : <a href="{{route ('product.index')}}"><i class="fa fa-store" ></i>store </a></span>
@endsection

