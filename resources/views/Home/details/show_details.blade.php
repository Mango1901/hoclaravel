@extends('welcome')
@section('content')
    <?php use Illuminate\Support\Facades\Session; ?>
    @foreach($show_details as $key=>$value_detail)
        <div class="fb-like" data-href="http://hoclaravel.com" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
        <div class="fb-share-button" data-href="http://hoclaravel.com" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u{{$url_canonical}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{URL::to('style/uploads/product/'.$value_detail->image)}}" alt="" />
                <h3>ZOOM</h3>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="{{URL::to('style/frontend/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                <h2>{{$value_detail->name}}</h2>
                <p>ID: {{$value_detail->id}}</p>
                <img src="{{URL::to('style/frontend/images/product-details/rating.png')}}" alt="" />
                <?php
                $cart = session::get('cart');
                ?>

                <form>
                    {{csrf_field()}}
                    <input type="hidden" name="cart_id" value="{{$value_detail->id}}" class="cart_id_{{$value_detail->id}}">
                    <input type="hidden" name="cart_name" value="{{$value_detail->name}}" class="cart_name_{{$value_detail->id}}">
                    <input type="hidden" name="cart_image" value="{{$value_detail->image}}" class="cart_image_{{$value_detail->id}}">
                    <input type="hidden" name="cart_price" value="{{$value_detail->price}}" class="cart_price_{{$value_detail->id}}">
                    <input type="hidden" name="cart_quantity" value="1" class="cart_quantity_{{$value_detail->id}}">
                    <span>
									<span>{{number_format($value_detail->price)}} VNĐ</span>
                        <?php
                        $customer_id = session::get('customer_id');
                        if($customer_id){
                        ?>
									<button type="button" name class="btn btn-default add-to-cart" data-id="{{$value_detail->id}}">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
                        <?php
                        }else {
                        ?>
                        <?php
                   }
                       ?>
                    </span>
                </form>

                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> {{$value_detail->brand_name}}</p>
                <p><b>Category:</b> {{$value_detail->category_name}}</p>
                <a href=""><img src="{{URL::to('style/frontend/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->
    @endforeach
    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach($related_product as $key=>$value_related)
                        <a href="{{URL::to('/product-details/'.$value_related->id)}}">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('style/uploads/product/'.$value_related->image)}}" alt="" />
                                    <h2>{{number_format($value_related->price)}} VNĐ</h2>
                                    <p>{{$value_related->name}}</p>
{{--                                    <button type="button" class="btn btn-default add-to-cart" data-id="{{$value_related->id}}">Add To Cart</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div><!--/recommended_items-->
@endsection
