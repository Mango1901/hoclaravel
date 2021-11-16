@extends('welcome')
@section('content')


<div class="features_items"><!--features_items-->
    <div class="fb-like" data-href="http://localhost" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
    <div class="fb-share-button" data-href="http://localhost" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u{{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <h2 class="title text-center">Features Items</h2>
    @foreach($all_product as $key=>$value)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <form>
                        {{csrf_field()}}
                        <input type="hidden" name="cart_product_id" value="{{$value->id}}" class="cart_product_id_{{$value->id}}">
                        <input type="hidden" name="cart_product_name" value="{{$value->name}}" class="cart_product_name_{{$value->id}}">
                        <input type="hidden" name="cart_product_image" value="{{$value->image}}" class="cart_product_image_{{$value->id}}">
                        <input type="hidden" name="cart_product_price" value="{{$value->price}}" class="cart_product_price_{{$value->id}}">
                        <input type="hidden" name="cart_product_quantity" value="1" class="cart_product_quantity_{{$value->id}}">
                    <a href="{{URL::to('/product-details/'.$value->id)}}">
                    <img src="{{URL::to('style/uploads/product/'.$value->image)}}" width="120" height="150" alt="" />
                    <h2>{{number_format($value->price)}} VNĐ</h2>
                    <p>{{$value->name}}</p>
{{--                    <a href="{{URL::to('/product-details/'.$value->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Show Details</a>--}}
               </a>
                       <button type="button" class="btn btn-default add-to-cart" data-id="{{$value->id}}">Add To Cart</button>
                    </form>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div><!--features_items-->
@endsection
