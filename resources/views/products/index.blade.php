
@extends('layout.index')
@section('cart')
    <li><a @if(session('cart'))style="color: red" @endif class="nav-link" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> ({{ session()->get('cart')->totalQty ?? "0"}})</a></li>
@endsection
@section('products-list')
    @foreach($products as $product)
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{asset('storage/'.$product['image'])}}" alt="" />
                        <h2>${{$product['price']}}</h2>
                        <p>{{$product['name']}}</p>
                        <a href="{{ route('cart.addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection
