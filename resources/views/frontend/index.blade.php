<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>EduCenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{url('frontend/images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{('frontend/images/favicon.png')}}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->

  <!-- preloader end -->

<!-- header -->

@include('frontend.partials.header')

<!-- /header -->
<!-- Modal -->

@include('frontend.partials.modal')

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="{{url('/frontend/images/banner/banner-1.jpg')}}">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>

            <a href="{{route('user.donation')}}" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply For Donation</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>

            <a href="{{route('user.loan')}}" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply For Loan</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>

            <a href="{{route('user.abook')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply For Book</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>














<!-- /hero slider -->

<!-- banner-feature -->

{{-- @include('frontend.layouts.sship') --}}

<!-- /banner-feature -->

<!-- about us -->

<!-- /about us -->

<!-- courses -->

<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0"></h6>
        <h2 class="section-title text-white"></h2>
        <li class="list-inline-item"><a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#mehadi">Donate Here</a></li>
        {{-- <a href="{{route('user.donate')}}" class="btn btn-secondary">Donate Here</a> --}}
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="{{url('/frontend/images/backgrounds/success-story.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="" href="" data-vbtype="">
          <i class=""></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
        <a href="{{route('user.ourWork')}}"><h2 class="section-title">Our Work</h2></a>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->

{{-- @include('frontend.layouts.event') --}}

<!-- /events -->

<!-- teachers -->
{{-- @include('frontend.partials.donor') --}}


<!-- /teachers -->

<!-- blog -->

{{-- @include('frontend.partials.blog') --}}

<!-- /blog -->

<!-- footer -->

@include('frontend.partials.footer')

<!-- /footer -->

<!-- jQuery -->
<script src="{{url('/frontend/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{url('/frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{url('/frontend/plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{url('/frontend/plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{url('/frontend/plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{url('/frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{url('/frontend/plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{url('/frontend/js/script.js')}}"></script>

</body>
</html>















<div class="modal fade" id="mehadi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('donate.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Make A Donation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Amount:</label>
                    <input name="ammount" type="number" class="form-control" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="">Transaction_ID</label>
                    <input name="transaction_ID" type="number" class="form-control" placeholder="Transaction_ID">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Payment_method</label>
                    <select name="payment_method" class="form-control" id="exampleFormControlSelect1">
                      <option>bKash</option>
                      <option>Rocket</option>
                      <option>MCash</option>
                      <option>OK_Wallet</option>
                      <option>SureCash</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Type</label>
                    <select  name="type" class="form-control" id="exampleFormControlSelect1">
                      <option>Yearly</option>
                      <option>Monthly</option>
                      <option>Weekly</option>
                    </select>
                  </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>


















