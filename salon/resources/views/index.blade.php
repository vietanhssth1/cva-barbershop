@extends('master')
@section('title', 'Trang chủ')
@section('index')
    <!-- banner -->
    <section class="banner" id="home">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info bg1">
                        <div class="bs-slider-overlay">
                            <div class="banner-text container">
                                <h5 class="tag text-left mb-3 text-uppercase">Chúng tôi là CVA babershop</h5>
                                <h1 class="movetxt text-left agile-title text-uppercase">Nơi tốt nhất để</h1>
                                <h2 class="movetxt text-left mb-3 agile-title text-uppercase">Có một mái tóc đẹp</h2>
                                <a class="bt mt-4 text-capitalize scroll" href="#about" role="button"> Xem thêm
							<i class="fas fa-cut"></i>
						</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg2">
                        <div class="bs-slider-overlay">
                            <div class="banner-text container">
                                <h5 class="tag text-left mb-3 text-uppercase">Chúng tôi là CVA babershop</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Tóc của bạn là</h4>
                                <h4 class="movetxt text-left mb-3 agile-title text-uppercase">Nhiệm vụ của chúng tôi</h4>
                                <a class="bt mt-4 text-capitalize scroll" href="#about" role="button"> Xem thêm
							<i class="fas fa-cut"></i>
						</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg3">
                        <div class="bs-slider-overlay">
                            <div class="banner-text container">
                                <h5 class="tag text-left mb-3 text-uppercase">Chúng tôi là CVA babershop</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Chúng tôi làm tóc của bạn</h4>
                                <h4 class="movetxt text-left mb-3 agile-title text-uppercase">Hoàn hảo</h4>

                                <a class="bt mt-4 text-capitalize scroll" href="#about" role="button"> Xem thêm
							<i class="fas fa-cut"></i>
						</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg4">
                        <div class="bs-slider-overlay">
                            <div class="banner-text container">
                                <h5 class="tag text-left mb-3 text-uppercase">Chúng tôi là CVA babershop</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Người đàn ông thực sự</h4>
                                <h4 class="movetxt text-left mb-3 agile-title text-uppercase">Với một bộ râu đẹp</h4>
                                <a class="bt mt-4 text-capitalize scroll" href="#about" role="button"> Xem thêm
							<i class="fas fa-cut"></i>
						</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //banner -->

    <!-- About -->
    <section class="about py-5" id="about">
        <div class="container py-lg-3 py-2">
            <div class="heading text-center">
                <i class="fas fa-cut"></i>
                <h3 class="heading mb-sm-5 mb-3 text-uppercase">Về chúng tôi</h3>
            </div>
            <div class="row about-grids">
                <div class="col-lg-4 about-grid1 mb-lg-0 mb-5">
                    <h3 class="text-uppercase">Cảm ơn đã đến với CVA babershop</h3>
                    <p class="my-lg-4 my-3">CVA babershop tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khoẻ mạnh cuốn hút phái đẹp; tinh thần thư giãn để bứt phá trong sự nghiệp.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-grid2 p-5">
                        <h3>Chuyên gia tạo mẫu tóc</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-grid3 p-5">
                        <h3>25 năm kinh nghiệm</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //About -->

    <!-- services -->
    <section class="services py-5" id="services">
        <div class="container-fluid">
            <div class="heading text-center">
                <i class="fas fa-cut"></i>
                <h3 class="heading mb-sm-5 mb-3 text-uppercase">Dịch vụ của chúng tôi</h3>
            </div>
            <div class="row service-grids">
                <div class="col-lg-2 col-sm-6 col-12 serviceimage1">

                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Combo 7 bước</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 serviceimage2">

                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Nhuộm màu thời trang</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 serviceimage3">

                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Uốn xoăn</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Tẩy màu tóc</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 serviceimage3">

                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Protein phục hồi hư tổn</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 serviceimage1">

                </div>
                <div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
                    <h4>Tẩy da chết</h4>
                    <p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
                    <a class="bt text-capitalize" href="#" role="button"> Xem thêm
					<i class="fas fa-cut"></i>
				</a>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 serviceimage2">

                </div>
            </div>
        </div>
    </section>
    <!-- //services -->

    <!-- pricing -->
    <section class="py-5" id="pricing">
        <div class="container">
            <div class="heading text-center">
                <i class="fas fa-cut"></i>
                <h3 class="heading mb-sm-5 mb-3 text-uppercase">Bảng Giá</h3>
            </div>
            <!--/tabs-->
            <div class="responsive_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Cắt tóc</li>
                        <li>Làm đẹp</li>
                        <li>Thư giãn</li>
                        <li>Dịch vụ khác</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">
                            <div class="tab-info">
                                <div class="row tab-grids">
                                    <div class="col-md-6">
                                        <h3>Combo 7 bước <span class="price"> 100.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <h3>Kiểu SIDE PART<span class="price">70.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Kiểu SIDE SWEPT <span class="price"> 80.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Kiểu LAYER <span class="price"> 70.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <!--/tab_two-->
                        <div class="tab2">

                            <div class="tab-info">
                                <div class="row tab-grids">
                                    <div class="col-md-6">
                                        <h3>Vuốt sáp & xịt gôm<span class="price"> 30.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <h3>Cạo râu<span class="price"> 10.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Lấy dáy tai<span class="price"> 10.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Lột mụn<span class="price"> 20.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_two-->
                        <!--/tab_three-->
                        <div class="tab3">

                            <div class="tab-info">
                                <div class="row tab-grids">
                                    <div class="col-md-6">
                                        <h3>Gội đầu<span class="price">20.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <h3>Chăm sóc da mặt bằng công nghệ cao<span class="price"> 20.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Massage bấm huyệt<span class="price"> 40.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Cạo mặt êm ái<span class="price"> 10.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_three-->
                        <!--/tab_four-->
                        <div class="tab4">

                            <div class="tab-info">
                                <div class="row tab-grids">
                                    <div class="col-md-6">
                                        <h3>Đắp mặt nạ lạnh<span class="price"> 20.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-3">
                                        <h3>Tẩy da chết<span class="price"> 20.000 đ</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3>Razor Shave<span class="price"> 11$</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                    <div class="col-md-6 mt-md-5 mt-3">
                                        <h3> Beard Softening <span class="price"> 25$</span></h3>
                                        <p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_four-->
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--//tabs-->
            <div class="clearfix"> </div>
        </div>
    </section>
    <!-- //pricing -->

    <!-- Team -->
    <section class="barbers py-5" id="team">
        <div class="container py-lg-3 py-2">
            <div class="heading text-center">
                <i class="fas fa-cut"></i>
                <h3 class="heading mb-sm-5 mb-3 text-uppercase">Stylish của chúng tôi</h3>
            </div>
            <div class="row barber-grids">
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 text-center">
                    <div class="barber-grid1">
                        <img src="images/barber1.jpg" class="img-fluid" alt="" />
                    </div>
                    <h4 class="mt-3">David Alison</h4>
                    <p>Barber</p>
                    <div class="social mt-2">
                        <ul class="d-flex justify-content-center">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 text-center">
                    <div class="barber-grid1">
                        <img src="images/barber2.jpg" class="img-fluid" alt="" />
                    </div>
                    <h4 class="mt-3">David Alison</h4>
                    <p>Barber</p>
                    <div class="social mt-2">
                        <ul class="d-flex justify-content-center">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-md-0 mb-5 text-center">
                    <div class="barber-grid1">
                        <img src="images/barber3.jpg" class="img-fluid" alt="" />
                    </div>
                    <h4 class="mt-3">David Alison</h4>
                    <p>Barber</p>
                    <div class="social mt-2">
                        <ul class="d-flex justify-content-center">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-center">
                    <div class="barber-grid1">
                        <img src="images/barber4.jpg" class="img-fluid" alt="" />
                    </div>
                    <h4 class="mt-3">David Alison</h4>
                    <p>Barber</p>
                    <div class="social mt-2">
                        <ul class="d-flex justify-content-center">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Team -->

    <!-- testimonials -->
    <div class="testimonials" id="testimonials">
        <div class="test_agile_info py-5">
            <div class="container py-lg-3">
                <div class="heading text-center">
                    <i class="fas fa-cut"></i>
                    <h3 class="heading mb-sm-5 mb-3 text-uppercase">Phản hồi của khách hàng</h3>
                </div>
                <ul id="flexiselDemo1">
                    <li>
                        <div class="wthree_testimonials_grid_main">
                            <div class="wthree_testimonials_grid">
                                <p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
                                <h5>Mark Henry</h5>
                                <div class="wthree_testimonials_grid_pos">
                                    <img src="images/t1.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="wthree_testimonials_grid_main">
                            <div class="wthree_testimonials_grid">
                                <p>Lorem laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
                                <h5>Linda Carl</h5>
                                <div class="wthree_testimonials_grid_pos">
                                    <img src="images/t2.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="wthree_testimonials_grid_main">
                            <div class="wthree_testimonials_grid">
                                <p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa, eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
                                <h5>Michael Paul</h5>
                                <div class="wthree_testimonials_grid_pos">
                                    <img src="images/t3.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- contact map and address -->
    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="heading text-center">
                <i class="fas fa-cut"></i>
                <h3 class="heading mb-sm-5 mb-3 text-uppercase">Vị trí của chúng tôi</h3>
            </div>
            <div class="contact-main-grid">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722638946!2d2.277020320550042!3d48.85883773941345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1524720355592"></iframe>
                </div>
                <div class="contact-info">
                    <div class="mb-5">
                        <h4 class="mb-3">Address</h4>
                        <p><span class="fas fa-map mr-2"></span>Tòa nhà 3D Center phố Duy Tân</p>
                        <p>Cầu Giấy, Hà Nội</p>
                        <p><span class="fas fa-phone mr-2"></span> (+84) 246 297 3538</p>
                        <p><span class="fas fa-envelope mr-2"></span> <a href=""> mail@example.com</a> </p>
                    </div>
                    <div class="">
                        <h4 class="mb-3">Giờ mở cửa</h4>
                        <p><span class="fas fa-clock mr-2"></span> Thứ 2 - Thứ 6: 8:00 - 21:00</p>
                        <p><span class="fas fa-clock mr-2"></span> Thứ 7 - Chủ nhật: 8:30 - 20:30</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact map and address -->

    <!-- Appointment -->
    <section class="appointment" id="appointment">
        <div class="test_agile_info py-5">
            <div class="container py-lg-3">
                <div class="heading text-center">
                    <i class="fas fa-cut"></i>
                    <h3 class="heading mb-sm-5 mb-3 text-uppercase">Make an Appointment</h3>
                </div>
                <div class="contact_grid_right">
                    <form action="#" method="post">
                        <div class="contact_left_grid">
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="Email" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <input id="datepicker" name="Text" type="text" placeholder="Date Of Appointment" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                            </div>
                            <div class="form-group">
                                <textarea id="textarea" placeholder="Your Message Here"></textarea>
                            </div>
                            <input class="form-control" type="submit" value="Make An Appointment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //Appointment -->
@endsection