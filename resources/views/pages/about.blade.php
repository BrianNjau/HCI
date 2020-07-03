@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<div class="ct-pageWrapper" id="ct-js-wrapper">
    <section class="company-heading intro-type" id="parallax-one">
      <div class="container">
        <div class="row product-title-info">
          <div class="col-md-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div>
      <div class="parallax" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/hero/hero.jpg);"></div>
    </section>
    <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
      <div class="container text-center">
        <h2>WHAT DRIVES US</h2>
        <h3>GATES.COM</h3>
        <div class="col-md-8 col-md-offset-2">
          <div class="red-border"></div>
          <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">The wanting quality of Gates is devastating instead they are a signature of securiy from the outside and safety on the inside.It is therefore our goal to achieve this in anyway to our best profession in conjuction with the customer needs</p>
          <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
        </div>
      </div>
    </section>
    <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>OUR VALUES & CONTACTS</h2>
            <h3>Values are like fingerprints. Nobody is he same but you leave them all over everything you do</h3>
            <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Contact Us</p>
            <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Phone numbers: +255 321 445 or +255 321 123</p>
            <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">E-Mail: Gates@gmail.com</p>
          </div>
        </div>
        <div class="row ct-u-paddingBoth20">
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-medkit" aria-hidden="true"></i>
              <p>INTEGRITY</p>
              <p class="company-icons-subtext hidden-xs">We uphold the highest value of integrity in all undertakings.</p>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-money" aria-hidden="true"></i>
              <p>BOLDNESS</p>
              <p class="company-icons-subtext hidden-xs">We believe that nothing we sell is of underquality and therefore bold in our undertakings.</p>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <p>ACCOUNTABILITY</p>
              <p class="company-icons-subtext hidden-xs">Every Commitment and Action are all acoounted for to our clients.</p>
            </div>
          </div>
        </div>
        <div class="row ct-u-paddingBoth20">
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-coffee" aria-hidden="true"></i>
              <p>HONESTY</p>
              <p class="company-icons-subtext hidden-xs">Transparent and honest in all business dealings.</p>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-gamepad" aria-hidden="true"></i>
              <p>TRUST</p>
              <p class="company-icons-subtext hidden-xs">Trust in the customers dream and what they want.</p>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="company-icons-white">
              <i class="fa fa-cutlery" aria-hidden="true"></i>
              <p>COMMITMENT TO CUSTOMERS</p>
              <p class="company-icons-subtext hidden-xs">Our contact lines work around the clock with someone ready to quench your needs to satisfaction.</p>
            </div>
          </div>
        </div>
        <a class="ct-u-marginTop60 btn btn-solodev-red-reversed btn-fullWidth-sm ct-u-size19" href="http://localhost/gates/public/">HOME</a>
      </div>
    </section>
    <section class="customers-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>PARTNERS</h2>
            <h3>Trusted by some of the world’s leading brand.</h3>
            <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60 marginTop40">THE GREAT COMPANY OF YALE.</p>
            <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60 marginTop40">THE IRON EMPIRE</p>
        </div>
          <div class="clearfix">
        </div>
      </div>
    </section>
  </div>
  

@endsection