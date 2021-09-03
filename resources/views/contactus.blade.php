@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle wow fadeInDown">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</div>
<!-- Contact Links -->
<div class="contactLinks wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <a href="tel:+6023140841" class="contactLinks_thumbnail">
          <i class="fas fa-phone-alt"></i>
          <span>+ 602-314-0841</span>
        </a>
      </div>
      <div class="col-12 col-md-4">
        <a href="mailto:casianicontreras@gmail.com" class="contactLinks_thumbnail">
          <i class="far fa-envelope"></i>
          <span>casianicontreras@gmail.com</span>
        </a>
      </div>
      <div class="col-12 col-md-4">
        <a href="#" class="contactLinks_thumbnail">
          <i class="fas fa-map-marker-alt"></i>
          <span>
            9788 Rally spring loop, <br />
            Wesley Chapel, FL-33545
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Contact Form -->
<div class="container-fluid contact">
  <div class="row">
    <div class="col-12 col-lg-4 offset-lg-1 wow fadeInUp">
      <div class="contact__form">
        <h2>Have <span>Any Question?</span></h2>
        <h2>Please <span>Contact Us?</span></h2>
        <form action="#">
          <input type="text" name="firstName" id="firstName" placeholder="First Name" />
          <input type="text" name="lastName" id="lastName" placeholder="Last Name" />
          <input type="email" name="email" id="email" placeholder="Email" />
          <input type="text" name="phone" id="phone" placeholder="Phone" />
          <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
          <button type="submit" class="themeBtn">Submit</button>
        </form>
      </div>
    </div>
    <div class="col-12 col-lg-7 wow zoomIn">
      <div class="contact__iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281062214!2d-0.24168183442752886!3d51.52877184100476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1627597456490!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Join Community -->
<div class="container-fluid joinCommunity wow fadeInUp">
  <div class="row">
    <div class="col-12">
      <h2>Join Our Community <span>@thedriverdepot</span></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="joinCommunity__slider">
        <img src="{{asset('images/community-1.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-2.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-3.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-4.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-5.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-1.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-2.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-3.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-4.png')}}" alt="image" class="imgFluid" />
        <img src="{{asset('images/community-5.png')}}" alt="image" class="imgFluid" />
      </div>
    </div>
  </div>
</div>
<!-- <form class="CrudForm" id="inquiry_form" data-noinfo="true" data-customcallback="inquiry_success" data-customcallbackFail="inquiry_error" method="POST" action="{{route('contactusSubmit')}}">
@csrf
<div class="form-group">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      {{Helper::errorField('inquiries_name',$errors)}}
      <input placeholder="First Name" name="inquiries_name" value="{{old('inquiries_name')}}" type="text" class="form-control">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      {{Helper::errorField('inquiries_lname',$errors)}}
      <input placeholder="Last Name" name="inquiries_lname" value="{{old('inquiries_lname')}}" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      {{Helper::errorField('inquiries_email',$errors)}}
      <input placeholder="Email"  name="inquiries_email" value="{{old('inquiries_email')}}" type="text" class="form-control">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      {{Helper::errorField('inquiries_phone',$errors)}}
      <input placeholder="Phone Number" name="inquiries_phone" value="{{old('inquiries_phone')}}" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <textarea placeholder="Comment" name="extra_content" class="form-control">{{old('extra_content')}}</textarea>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="contact_btn">
        <input type="submit" class="form-control" value="Submit">
      </div>
    </div>
  </div>
</div>
</form> -->
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

  function inquiry_error(res) {
    if (res) {
      if (isJSON(res)) {
        res = JSON.parse(res);
        if (res.errors) {
          var _errors = '';
          for (j in res.errors) {
            _errors += res.errors[j].join('</br>') + '</br>';
          }
          generateNotification('0', _errors);
        }
      }
    }
  }

  function inquiry_success(_msg) {
    if (_msg.status) {
      generateNotification('1', 'Thank you! your message has been sent to admin.');
      $('#inquiry_form')[0].reset();
    }
  }
</script>
@endsection