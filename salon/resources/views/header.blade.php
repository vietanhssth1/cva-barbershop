<!--/header-->
<header>
    <div class="top-bar_sub container-fluid">
        <div class="top-forms text-left mt-3">
            <!--/nav-->
            <div class="header_top">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#about">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#services">Dịch vụ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#pricing">Giá</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#testimonials">Phản hồi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#product">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#appointment">Đặt lịch</a>
                            </li>
                        <!-- Dropdown Login-->
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link scroll dropdown-toggle" data-toggle="dropdown">
                                @if(Sentinel::check())
                                    @if(Sentinel::getUser()->inRole('user'))
                                        {{Sentinel::getUser()->username }}
                                    @else 
                                    {{__('home.log_in')}}
                                    @endif
                                @else 
                                    {{__('home.log_in')}}
                                @endif
                                <span class="caret"></span>
                            </a>
                            <ul id="login-dp" class="dropdown-menu">                                                         
                                @if(Sentinel::check())
                                    <!-- BEGIN: LOGGEDUSER --> 
                                    @if(Sentinel::getUser()->inRole('user'))    
                                    {{__('home.hello')}}, {{ Sentinel::getUser()->username }}                    
                                    <li><a href="#">{{__('home.user_information')}}</a></li>
                                    <li><a href="#">{{__('home.your_appointments')}}</a></li>
                                    <li><a href="{{route('logout')}}">{{__('home.log_out')}}</a></li>                       
                                    @else
                                    <!-- END: LOGGEDUSER -->
                                    <!-- BEGIN: LOGIN -->
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{__('home.log_in')}}
                                                <div class="social-buttons">
                                                    <a href="#" class="btn btn-fb">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-tw">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </div>
                                                {{__('home.or')}}
                                                <form class="form" role="form" action="{{route('login')}}" method="post" accept-charset="UTF-8" id="login-nav">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" value="" required>
                                                        @if($errors->first('email'))
                                                            <p class="text-danger"> {{$errors->first('email')}}</p>
                                                        @endif
                                                        <span style="color:darkred;font-weight:bold"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword2">{{__('home.password')}}</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" value="" required>
                                                        @if($errors->first('password'))
                                                            <p class="text-danger"> {{$errors->first('password')}}</p>
                                                        @endif
                                                        <span style="color:darkred;font-weight:bold">
                                                            @if(session('error'))
                                                                {{session('error')}}
                                                            @endif
                                                            @if(session('success'))
                                                                {{session('success')}}
                                                            @endif
                                                        </span> 
                                                        <div class="help-block text-right">
                                                            <a href="">{{__('home.forget_password')}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="login" class="btn btn-primary btn-block">{{__('home.sign_in')}}</button>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> {{__('home.keep_me')}}
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="bottom text-center">
                                                {{__('home.new_here')}}
                                                <a href="#">
                                                    <b>{{__('home.join_us')}}</b>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END: LOGIN -->
                                    @endif
                                    @else
                                    <!-- BEGIN: LOGIN -->
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{__('home.log_in')}}
                                                <div class="social-buttons">
                                                    <a href="#" class="btn btn-fb">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-tw">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </div>
                                                {{__('home.or')}}
                                                <form class="form" role="form" action="{{route('login')}}" method="post" accept-charset="UTF-8" id="login-nav">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" value="" required>
                                                        @if($errors->first('email'))
                                                            <p class="text-danger"> {{$errors->first('email')}}</p>
                                                        @endif
                                                        <span style="color:darkred;font-weight:bold"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword2">{{__('home.password')}}</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" value="" required>
                                                        @if($errors->first('password'))
                                                            <p class="text-danger"> {{$errors->first('password')}}</p>
                                                        @endif
                                                        <span style="color:darkred;font-weight:bold">
                                                            @if(session('error'))
                                                                {{session('error')}}
                                                            @endif
                                                            @if(session('success'))
                                                                {{session('success')}}
                                                            @endif
                                                        </span> 
                                                        <div class="help-block text-right">
                                                            <a href="">{{__('home.forget_password')}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="login" class="btn btn-primary btn-block">{{__('home.sign_in')}}</button>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember"> {{__('home.keep_me')}}
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="bottom text-center">
                                                {{__('home.new_here')}}
                                                <a href="#">
                                                    <b>{{__('home.join_us')}}</b>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END: LOGIN -->
                                @endif
                            </ul>
                        </li>
                        <!-- Dropdown Login-->
                        </ul>
                    </div>

                </nav>
            </div>
            <!--//nav-->
        </div>
        <div class="logo text-center">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cut"></i> CVA <span> Best Hair Salon</span>
            </a>
        </div>
    </div>
</header>
