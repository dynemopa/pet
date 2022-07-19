<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Petology</title>


  <link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css')}}" >


  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" >


  


  <link href="{{url('https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap')}}" rel="stylesheet">

  <link  href="{{asset('frontend/css/style.css')}}" rel="stylesheet" >

  

  <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" >
</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('frontend/images/logo.png')}}" alt="">
            <span>
              Petology
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/service')}}">service </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/petgallery')}}">Pet's gallery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/clinic')}}"> clinic</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/contect')}}">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/login')}}">Login </a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Call: +01 1234567890
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
  