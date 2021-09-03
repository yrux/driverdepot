@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
</div>
<!-- Blogs -->
<div class="blogsWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 wow zoomIn">
                            <img src="{{asset('images/blog-1.png')}}" alt="blog" class="imgFluid" />
                        </div>
                        <div class="col-12 col-md-6 wow fadeInUp">
                            <div class="blog__content">
                                <span>Latest News</span>
                                <a href="#" class="blog__contentTitle">
                                    Lorem ipsum dolor sit amet
                                </a>
                                <span>July 28, 2021</span>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                    enim ipsam voluptatem quia voluptas sit aspernatur aut
                                    odit aut fugit, sed quia consequuntur magni dolores eos
                                    qui ratione voluptatem sequi nesciunt.
                                    <br />
                                    <br />
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                    aut odit aut fugit, sed quia consequuntur.
                                </p>
                                <a href="#" class="themeBtn">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-2.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-3.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-4.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-5.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-6.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <div class="blog">
                    <img src="{{asset('images/blog-7.png')}}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="#" class="blog__contentTitle">
                            Lorem ipsum dolor sit amet
                        </a>
                        <span>July 28, 2021</span>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#">Continue Reading</a>
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