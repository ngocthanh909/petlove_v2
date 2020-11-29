@extends('master')
<body>
    <!-- Navigation -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark purple-gradient scrolling-navbar">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                    <img src="{{url('assets/images/master/logo-petlove.svg')}}" alt="Logo">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto align-items-center ">
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">@lang('master.home')</a>
                        </li>
                        {{-- <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/angular/" target="_blank">@lang('master.shop')</a>
            </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('master.shop')</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">About us</a>
                                <a class="dropdown-item" href="#">Our team</a>
                                <a class="dropdown-item" href="#">Contact</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/react/" target="_blank">@lang('master.blog')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/react/" target="_blank">@lang('master.news')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/vue/" target="_blank">@lang('master.about')</a>
                        </li>
                        <!-- Dropdown -->
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-envelope"></i></i><span class="badge badge-danger ml-2">4</span></a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">About us</a>
                                <a class="dropdown-item" href="#">Our team</a>
                                <a class="dropdown-item" href="#">Contact</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart"></i></a>

                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">About us</a>
                                <a class="dropdown-item" href="#">Our team</a>
                                <a class="dropdown-item" href="#">Contact</a>

                            </div>
                        </li>
                        {{-- Logged user --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thanh Do
                                <img src="{{url('assets/images/demo/rosebp.png')}}" alt="user-avatar" class="user-img rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Hồ sơ</a>
                                <a class="dropdown-item" href="#">Giỏ hàng</a>
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->
    </header>
    {{-- Banner --}}
    <div class="container">
        <div class="banner mt-3 z-depth-1" style="background-image: url('{{url('assets/images/banner/banner-2.jpg')}}');">
            <section class="body-content-banner">
                <div>
                    <h1>Miễn phí vận chuyển</h1>
                    <p>Áp dụng cho khách hàng trong nội thành Đà Nẵng</p>
                </div>
            </section>
            <section class="footer-banner">
                <ul>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#" class="use">Vận chuyển</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                    <li><a href="#">Vận chuyển</a></li>
                </ul>
            </section>
        </div>
        {{-- End Banner --}}
        {{-- Offer --}}
        <div class="deal mt-3 home-block z-depth-1">
            <div class="row">
                <div class="col-lg-3">
                    <div class="info-deal" style="background-image: url('{{url('assets/images/deal/deal-bg.png')}}'), linear-gradient(40deg, #ff6ec4, #7873f5) !important  ;">
                        <div class="info-deal-heading">Black Friday</div>
                        <div class="info-deal-right"></div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="info-deal-item z-depth-1">
                                cc
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End offer --}}
    </div>

    <!-- Navigation -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
