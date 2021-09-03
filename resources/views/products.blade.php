@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Products</h1>
            </div>
        </div>
    </div>
</div>
<!-- Tabs -->
<div class="container wow fadeInUp">
    <ul class="tabs">
        <li id="defaultTabOpen" onclick="tabsToggle('all',this)">All</li>
        <li onclick="tabsToggle('accessories',this)">Accessories</li>
        <li onclick="tabsToggle('gadgets',this)">Gadgets</li>
        <li onclick="tabsToggle('overTheRoad',this)">Over the Road Items</li>
        <li onclick="tabsToggle('cleaning',this)">Cleaning Items</li>
    </ul>
</div>
<!-- Filter -->
<div class="container filter wow fadeInUp">
    <form action="#">
        <div>
            <button type="submit">
                Filter <i class="bx bx-right-arrow-alt"></i>
            </button>
            <select name="sort" id="sort">
                <option value="Most Popular">Most Popular</option>
                <option value="Latest">Latest</option>
                <option value="By Category">By Category</option>
            </select>
        </div>
        <div>
            <label for="">Show:</label>
            <select name="show" id="show">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
            </select>
        </div>
    </form>
</div>
<!-- Products -->
<div id="all" class="container-fluid products tabsContent wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products -->
<div id="accessories" class="container-fluid products tabsContent wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products -->
<div id="gadgets" class="container-fluid products tabsContent wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products -->
<div id="overTheRoad" class="container-fluid products tabsContent wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products -->
<div id="cleaning" class="container-fluid products tabsContent wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-2.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="productCard">
                        <div class="productCard__img">
                            <img src="{{asset('images/product-3.png')}}" alt="product" class="imgFluid" />
                        </div>
                        <div class="productCard__bottom">
                            <span class="productCard__bottomTitle">
                                Lorem Ipsum Dolor Sit
                            </span>
                            <span class="productCard__bottomPrice">$4.99</span>
                        </div>
                        <div class="productCard__bottomOverlay">
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
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
                            <a href="#">Shop Now</a>
                            <a href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pagination -->
<ul class="pagination wow zoomIn">
    <li>
        <a href="#"><i class="bx bx-left-arrow-alt"></i> Previous</a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>
        <a href="#">Next <i class="bx bx-right-arrow-alt"></i></a>
    </li>
</ul>
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