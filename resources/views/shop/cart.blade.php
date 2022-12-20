@extends('layout')

@section('title')
    Корзина
@endsection

@section('content')
@foreach($cart as $id => $item)
    <div class="cart" id="cart_item_{{$id}}">
    <link rel="stylesheet" href="/style.css">
        <img src="{{ URL::to('/') }}/img/{{ $item['image']}}" width="30%"><br>
        <b><a href="{{ route('shop.good.view', $id)}}">{{ $item['name'] }}</a></b><br>
        {{ $item['price'] }}
        <button data-ajax="{{ route('shop.cart.remove', $id)}}" data-ajax-after="hide('cart_item_{{$id}}')" class="button">Удалить</button>
        <button data-ajax="{{ route('shop.cart.dec', $id)}}" data-ajax-after="dec('cart_item_count{{$id}}', 'cart_item_{{$id}}', '{{$id}}')" class="button">-</button>
        <span style="color:blue" id="cart_item_count{{$id}}">{{ $item['count'] }}</span>
        <button data-ajax="{{ route('shop.cart.inc', $id)}}" data-ajax-after="inc('cart_item_count{{$id}}')" class="button">+</button>
    </div>
    @endforeach

    @if(count($cart)==0)
    <div style="padding: 300px;">
       <h1> Корзина пуста</h1>
       </div>
    @endif
    <div style="margin-top: 100px; margin-bottom: 300px; text-align: center"><h1>Сумма заказа:<div id="total_price" style="display:inline-block"></div>руб.</h1></div>
    </div>
    
<script>
    function hide(id){
        $('#'+id).hide();
        update_total();
    }

    function inc(id){
        $('#'+id).text(parseInt($('#'+id).text())+1);
        update_total();
    }
 
    function dec(id, card_id, item_id){
        var val = parseInt($('#'+id).text())-1;
        $('#'+id).text(val);
        if(val<1)
            document.location.href = "/cart/remove/"+item_id;
        update_total();
    }

    function update_total(){
        $.ajax("{{ route('shop.cart.total_price') }}")
            .done((text)=>{
                $('#total_price').text(text);
            })
            .fail((xmlHttpRequest)=>{
                $.notify(xmlHttpRequest.statusText + ' ' + xmlHttpRequest.status, "error");
            })
    }
    update_total();
</script>
@endsection