@extends('layouts.main')
@section('content')
<!-- Banner -->
<div class="container-fluid banner">
  <div class="row align-items-center">
    <div class="col-12 col-lg-4 offset-lg-1 wow zoomIn">
      <div class="banner__content">
        <div class="banner__contentDiscountBadge">50%</div>
        <h4 class="banner__contentSubTitle">The Driver Depot</h4>
        <h1 class="banner__contentTitle">Tablet <br />Holder</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
          saepe laboriosam, laudantium error inventore vero labore vitae
        </p>
        <a href="products.html" class="themeBtn">Shop Now</a>
      </div>
    </div>
    <div class="col-12 col-lg-7">
      <div class="banner__slider">
        <img src="{{asset('images/banner.png')}}" alt="banner image" class="imgFluid" />
        <img src="{{asset('images/banner.png')}}" alt="banner image" class="imgFluid" />
        <img src="{{asset('images/banner.png')}}" alt="banner image" class="imgFluid" />
      </div>
    </div>
  </div>
</div>
<!-- Browse Categories -->
<div class="container-fluid browseCategories wow fadeInUp">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
      <div class="sectionHeading">
        <h2>Browse By Categories</h2>
      </div>
      <div class="default__slider">
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-1.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-2.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-3.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-4.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-1.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-2.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-3.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
        <div class="browseCategories__category">
          <img src="{{asset('images/category-slider-4.png')}}" alt="category image" class="imgFluid" />
          <a href="#">Lorem Ipsum</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Strip -->
<div class="strip">
  <div class="container-fluid">
    <div class="row justify-content-center wow zoomIn">
      <div class="col-12 col-lg-10">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="strip__div">
              <img src="{{asset('images/icon-1.png')}}" alt="icon" class="imgFluid" />
              <h4>Free Delivery</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="strip__div">
              <img src="{{asset('images/icon-2.png')}}" alt="icon" class="imgFluid" />
              <h4>24/7 Support</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="strip__div">
              <img src="{{asset('images/icon-3.png')}}" alt="icon" class="imgFluid" />
              <h4>Return Policy</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="strip__div">
              <img src="{{asset('images/icon-4.png')}}" alt="icon" class="imgFluid" />
              <h4>Special Offers</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- New Arrival -->
<div class="container-fluid newArrival wow zoomIn">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
      <div class="sectionHeading">
        <h2>New Arrivals</h2>
      </div>
      <div class="default__slider">
        @for($i=0;$i < 8; $i++)
        <div class="productCard">
          <div class="productCard__img">
            <img src="{{asset('images/product-1.png')}}" alt="product" class="imgFluid" />
          </div>
          <div class="productCard__bottom">
            <span class="productCard__bottomTitle">
              Lorem Ipsum Dolor Sit
            </span>
            <span class="productCard__bottomPrice">$4.99</span>
          </div>
          <div class="productCard__bottomOverlay">
            <a href="single-product.html">Shop Now</a>
            <a href="cart.html">Add to Cart</a>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>
<!-- Adverts -->
<div class="container-fluid wow fadeInUp">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-11">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="advert">
            <img src="{{asset('images/advert-1.png')}}" alt="image" class="imgFluid" />
            <div class="advert__content">
              <h4>Lorem Ipsum</h4>
              <h2>Lorem Ipsum</h2>
              <p>
                Lorem ipsum dolor sit amet <br />
                consectetur adipisicing elit.
              </p>
              <a href="products.html" class="themeBtn">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="advert">
            <img src="{{asset('images/advert-2.png')}}" alt="image" class="imgFluid" />
            <div class="advert__content textRight">
              <h4>Lorem Ipsum</h4>
              <h2>Lorem Ipsum</h2>
              <p>
                Lorem ipsum dolor sit amet <br />
                consectetur adipisicing elit.
              </p>
              <a href="products.html" class="themeBtn">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="advert">
            <img src="{{asset('images/advert-3.png')}}" alt="image" class="imgFluid" />
            <div class="advert__content textRight">
              <h4>Lorem Ipsum</h4>
              <h2>Lorem Ipsum</h2>
              <p>
                Lorem ipsum dolor sit amet <br />
                consectetur adipisicing elit.
              </p>
              <a href="products.html" class="themeBtn">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature Products -->
<div class="container-fluid featureProducts wow zoomIn">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
      <div class="sectionHeading">
        <h2>Featured Products</h2>
      </div>
      <div class="row no-gutters">
        @for($i=0;$i < 8;$i++) <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="productCard">
            <div class="productCard__img">
              <img src="{{asset('images/product-4.png')}}" alt="product" class="imgFluid" />
            </div>
            <div class="productCard__bottom">
              <span class="productCard__bottomTitle">
                Lorem Ipsum Dolor Sit
              </span>
              <span class="productCard__bottomPrice">$4.99</span>
            </div>
            <div class="productCard__bottomOverlay">
              <a href="single-product.html">Shop Now</a>
              <a href="{{route('cart')}}">Add to Cart</a>
            </div>
          </div>
      </div>
      @endfor
    </div>
  </div>
</div>
</div>
@endsection
@section('css')
<style type="text/css">
  /*in page css here*/
</style>
@endsection
@section('js')
<script type="text/javascript">
  (() => {
    /*in page css here*/
  })()
</script>
@endsection