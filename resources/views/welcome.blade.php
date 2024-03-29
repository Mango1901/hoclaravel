<?php use Illuminate\Support\Facades\Session?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$meta_description}}">
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <link  rel="icon" type="image/x-icon" href="" />
    <meta name="author" content="">

    {{--    <meta property="og:image" content="{{$image_og}}" />--}}
    <meta property="og:site_name" content="http://hoclaravel.com" />
    <meta property="og:description" content="{{$meta_description}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />
    <title>{{$meta_title}}</title>
    <link href="{{asset('style/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('style/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('style/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('style/frontend/js/respond.min.js')}}"></script>
    <![endif]-->
{{--    <link rel="shortcut icon" href="images/ico/favicon.ico">--}}
{{--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('style/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">--}}
{{--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('style/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">--}}
{{--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('style/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">--}}
{{--    <link rel="apple-touch-icon-precomposed" href="{{URL::to('style/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">--}}
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{URL::to('/Home')}}"><img src="{{URL::to('style/frontend/images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <?php
                        $customer_id = session::get('customer_id');
                        ?>
                        <ul class="nav navbar-nav">
                            <li><a href="{{URL::to('/account')}}"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <?php
                            if($customer_id){
                            ?>
                            <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Checkout</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if($customer_id){
                            ?>
                            <li><a href="{{URL::to('/show-cart-ajax')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>  Cart</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if($customer_id){
                            ?>
                            <li><a href="{{URL::to('/logout-customer')}}"><i class="fa fa-lock"></i> Logout</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Login</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/Home')}}" class="active">Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form action="{{URL::to('/search')}}" method="post">
                        {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="search_submit" placeholder="Search"/>
                            <input type="submit" name="search_items" class="btn btn-success btn-sm" value="Go"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        @php
                        $i=0;
                        @endphp
                        @foreach($slider as $key => $slider_value)
                            @php
                            $i++;
                            @endphp
                        <div class="item <?php  if($i == 1){echo 'active';}else {echo '';} ?>">
                            <div class="col-sm-6">
                                <img src="{{URL::to('style/uploads/slider/'.$slider_value->slider_image)}}" width="100%" class="img img-responsive" alt="{{$slider_value->slider_description}}" />
                                <img src="{{URL::to('style/frontend/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            @foreach($category_product as $key=>$cate_pro)
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{URL::to('/show-category/'.$cate_pro->id)}}">{{$cate_pro->category_name}}</a></h4>
                            </div>
                            @endforeach
                        </div>
                    </div><!--/category-products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="{{URL::to('style/frontend/images/home/shipping.jpg')}}" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('style/frontend/images/home/20e2301893405352ceb3984471d609fb.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('style/frontend/images/home/8934803011258.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('style/frontend/images/home/do-an-nhanh-gay-vo-sinh-o-nam-gioi.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{URL::to('style/frontend/images/home/S7995dbf695124161aa6621c02aabf7f8p.jpg')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{URL::to('style/frontend/images/home/map.png')}}" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="{{asset('style/frontend/js/jquery.js')}}"></script>
<script src="{{asset('style/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('style/frontend/js/price-range.js')}}"></script>
<script src="{{asset('style/frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('style/frontend/js/main.js')}}"></script>
<script src="{{asset('style/frontend/js/sweetalert.min.js')}}"></script>
<script>
$(function () {
$('.add-to-cart').click(function () {
    var id= $(this).data('id');
    var cart_product_id = $('.cart_product_id_' + id).val();
    var cart_product_name = $('.cart_product_name_' + id).val();
    var cart_product_image = $('.cart_product_image_' + id).val();
    var cart_product_price = $('.cart_product_price_' + id).val();
    var cart_product_quantity = $('.cart_product_quantity_' + id).val();
    var _token = $('input[name="_token"]').val();
    $.ajax({
       url:'{{url("/add-cart-ajax")}}',
       method:'POST',
        data:{
            cart_product_id:cart_product_id,
            cart_product_name:cart_product_name,
            cart_product_image:cart_product_image,
            cart_product_price:cart_product_price,
            cart_product_quantity:cart_product_quantity,
            _token:_token
        },
        success:function (data){
           swal({
             title: 'Product was added to cart',
             text: "You can buy another product or go to your cart",
             showCancelButton: true,
               cancelButtonText: 'Continue to buy',
               confirmButtonClass: "btn-success",
               confirmButtonText: "Go to your cart",
               closeOnConfirm: false,
           },
               function () {
                     window.location.href="{{URL('/show-cart-ajax')}}";
               });
       }
    });
});
});
</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('.send_order').click(function(){
            swal({
                    title: "Xác nhận đơn hàng",
                    text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                                swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){
                            location.reload();
                        } ,3000);

                    } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                    }

                });


        });
    });
   </script>
<script>
    $(function () {
        $('.choose').change(function () {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action == 'city') {
                result = 'province';
            } else if(action == 'province') {
                result = 'wards';
            }

            $.ajax({
                url: '{{url("/select-delivery-checkout")}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function (data) {
                    $('#'+result).html(data);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.calculate_delivery').click(function(){
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if(matp == '' && maqh =='' && xaid ==''){
                alert('Please choose place to calculate delivery cost');
            }else{
                $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                        location.reload();
                    }
                });
            }
        });
    });
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
</body>
</html>
