@extends('layout')

@section('title')
    Сообщение 
@endsection

@section('content')

    @foreach($products as $product)
    <body>
      <link rel="stylesheet" href="/style.css">
      <div class="card" align="center">
        <div class="product-item">
          <img src="{{ $product->image }}" style="object-fit: cover; margin-top: 50 px; margin-bottom: 20px">
          <div class="product-list">
            <h3>{{ $product->name }}</h3>
            <span class="price">{{ $product->price }} ₽</span>
            <p>{{ $product->short_description }}</p>
            {{--<a class="btn btn1" onclick="setTarget(document.getElementById('id_{{ $product->id }}'))">Подробнее</a>--}}
            <div class="product-item">
              <button data-ajax="{{ route('shop.cart.add', $product->id)}}" class="btn">Купить</button>
            </div>
          </div>
        </div>
    
        {{--<div id="shop_card_modal_{{$product->id}}" class="modal">
          <div class="modal-content">
            <p>
            <h2><a href="{{ route('shop.good.view', $product->id)}}">{{ $product->name }}</a></h2>
    
            <img src="{{ $product->image }}" style="object-fit: cover; margin-bottom: 40px">
            <p>{{ $product->short_description }}</p>
    
            @foreach($product->properties as $property)
    
            <li>{{$property->property_name}}: {{$property->property_value}} {{$property->property_price != 0 ?
              " (".$property->property_price.")" : "" }};</li>
    
            @endforeach
    
            Стоимость {{ $product->price }} ₽
    
            <div class="product-item">
              <button data-ajax="{{ route('shop.cart.add', $product->id)}}" class="btn">Купить</button>
            </div>--}}
          </div>
        </div>
    
    
    
    
        @endforeach
        @if(count($products) == 0)
        Категория пуста.
        @endif
      </div>
    </body>
@endsection



