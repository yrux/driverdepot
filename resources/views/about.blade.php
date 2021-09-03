@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>About</h1>
            </div>
        </div>
    </div>
</div>
<!-- Who We Are Section -->
<div class="about whoWeAre">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow zoomIn">
                <img src="{{asset('images/who-we-are.png')}}" alt="about" class="imgFluid" />
            </div>
            <div class="col-12 col-lg-6 wow fadeInUp">
                <div class="about_content">
                    <h6>About</h6>
                    <h5>The Driver Depot</h5>
                    <h2>Who We Are</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
                        sint aspernatur laudantium dolore facere autem ipsum in qui
                        harum! Minus repudiandae quas repellat amet! Sed deleniti
                        doloremque eum? Odit, sint.
                        <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate impedit earum eum vero ad soluta quos quo est ea
                        enim. Asperiores ab accusantium voluptatibus veritatis nihil
                        maiores neque accusamus impedit nostrum tenetur! Sed ducimus
                        voluptatem reiciendis sapiente in enim tenetur?
                    </p>
                    <a href="#">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What We Do Section -->
<div class="about whatWeDo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow fadeInUp">
                <div class="about_content">
                    <h6>About</h6>
                    <h5>The Driver Depot</h5>
                    <h2>What We Do</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
                        sint aspernatur laudantium dolore facere autem ipsum in qui
                        harum! Minus repudiandae quas repellat amet! Sed deleniti
                        doloremque eum? Odit, sint.
                        <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate impedit earum eum vero ad soluta quos quo est ea
                        enim. Asperiores ab accusantium voluptatibus veritatis nihil
                        maiores neque accusamus impedit nostrum tenetur! Sed ducimus
                        voluptatem reiciendis sapiente in enim tenetur?
                    </p>
                    <a href="#">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow zoomIn">
                <img src="{{asset('images/what-we-do.png')}}" alt="about" class="imgFluid" />
            </div>
        </div>
    </div>
</div>
<!-- Team Members -->
<div class="container teamMembers wow zoomIn">
    <div class="sectionHeading">
        <h2>Our Team Members</h2>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="teamMembers__card">
                <img src="{{asset('images/team-1.png')}}" alt="image" class="imgFluid" />
                <div class="teamMembers__cardContent">
                    <h3>Emma Wilson</h3>
                    <h4>Lorem Ipsum</h4>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="teamMembers__card">
                <img src="{{asset('images/team-2.png')}}" alt="image" class="imgFluid" />
                <div class="teamMembers__cardContent">
                    <h3>Jerry Gilbert</h3>
                    <h4>Lorem Ipsum</h4>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="teamMembers__card">
                <img src="{{asset('images/team-3.png')}}" alt="image" class="imgFluid" />
                <div class="teamMembers__cardContent">
                    <h3>Emma Wilson</h3>
                    <h4>Lorem Ipsum</h4>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="teamMembers__card">
                <img src="{{asset('images/team-4.png')}}" alt="image" class="imgFluid" />
                <div class="teamMembers__cardContent">
                    <h3>Jerry Gilbert</h3>
                    <h4>Lorem Ipsum</h4>
                    <a href="#"></a>
                </div>
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