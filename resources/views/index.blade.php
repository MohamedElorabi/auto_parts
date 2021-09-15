@include('layouts.header')

             <!-- start center_header ===
            ===========  -->
            <div class="center_header">
                <div class="row">
                    <!-- start text_header  -->
                    <div class="col-lg-7 col-md-6">
                        <div class="text_header " data-aos="zoom-in-left"  data-aos-duration="700">
                            <h2> منصة قطع غيار ..
                            </h2>
                           @foreach ($settings as $setting)
                            <p>{{$setting->about}}</p>
                           @endforeach

                                <a href="{{url('register_client')}}"> سجل معنا <i class="bi bi-arrow-left"></i></a>
                        </div>
                    </div>
                   <!-- end text_header  -->

                    <!-- start img_header -->
                    <div class="col-lg-5 col-md-6">
                        <div class="sub-img-header" data-aos="zoom-in-right"    data-aos-duration="700">
                            <div class="img_header">
                                <img src="{{asset('front/images/01234.png')}}" alt="">
                            </div>

                            <div class="dots_svg">
                                <object data="svg/XMLID_958_.svg" type="">
                                    <img src="{{asset('front/svg/XMLID_958_.svg')}}" alt="">
                                </object>
                            </div>

                        </div>
                    </div>
                    <!-- end img_header -->


                </div>

            </div>

            <!-- icon-mune -->
            <div class="times" id="times-ican">
                <i class="fas fa-bars"></i>
            </div>
            <!-- -------- -->
        </div>
    </div>
</header>




<!-- end header ===============
===========================
================ -->



<!-- start services_index =======
=====================
===== -->
<div class="services_index">
     <div class="container">
         <div class="title-services_index">
              <div class="row align-items-center">
                  <div class="col-lg-2 col-md-2 col-2">
                      <div class="img_services_index" data-aos="fade-left"  data-aos-duration="600">
                          <img src="{{asset('front/images/img1.png')}}" alt="">
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-2">
                    <div class="img_services_index" data-aos="fade-left"  data-aos-duration="1200">
                        <img src="{{asset('front/images/img1.png')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4" >
                    <div class="text_services_index"  data-aos="zoom-in-up" data-aos-duration="1500">
                        <object data="{{asset('front/svg/logo green.svg')}}" type="">
                            <img src="{{asset('front/svg/logo green.svg')}}" alt="">
                        </object>

                        <h2> خــدمـــاتـنـــا</h2>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2">
                    <div class="img_services_index textright"  data-aos="fade-right"  data-aos-duration="1200">
                        <img src="{{asset('front/images/img1.png')}}" alt="" >
                    </div>
                </div>

                <div class="col-lg-2 col-md-2">
                  <div class="img_services_index textright"  data-aos="fade-right"  data-aos-duration="600">
                      <img src="{{asset('front/images/img1.png')}}" alt="">
                  </div>
              </div>



              </div>
         </div>

        <div class="sub_services_index">
            <div class="row ">
                <div class="col-lg-4 col-md-4 ">
                    <div class="sub_services_index_main" data-aos="fade-left" >
                        <div class="sub_services_index-img">
                            <img src="{{asset('front/images/1.png')}}" alt="">
                        </div>

                        <div class="sub_services_index-text" >
                            <h3> قطع غيار</h3>
                            <span>( قريباً ) </span>
                        </div>

                        <div class="arrow-sub_services_index">
                            <img src="{{asset('front/images/01.png')}}" alt="">
                        </div>
                    </div>


                    <div class="sub_services_index_main" data-aos="fade-left" >
                        <div class="sub_services_index-img">
                            <img src="{{asset('front/images/3.png')}}" alt="">
                        </div>

                        <div class="sub_services_index-text">
                            <h3>إطارات </h3>
                        </div>

                        <div class="arrow-sub_services_index">
                            <img src="{{asset('front/images/02.png')}}" alt="">
                        </div>
                    </div>

                </div>



                <div class="col-lg-4 col-md-4">
                    <div class="sub_services_index_main-img"  data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="{{asset('front/images/2.png')}}" alt="">
                    </div>


                    <div class="new_sub_services_index_main">
                        <div class="new_arrow-sub_services_index">
                            <img src="{{asset('front/images/Line 345.png')}}" alt="">
                        </div>

                        <div class="new-sub_services_index">
                            <div class="sub_services_index-img">
                                <img src="{{asset('front/images/4.png')}}" alt="">
                            </div>

                            <div class="sub_services_index-text">
                                <h3>زيوت </h3>
                            </div>

                        </div>
                    </div>



                </div>





                <div class="col-lg-4  col-md-4">
                    <div class="sub_services_index_main" data-aos="fade-right" >
                        <div class="arrow-sub_services_index">
                            <img src="{{asset('front/images/03.png')}}" alt="">
                        </div>
                        <div class="sub_services_index-img">
                            <img src="{{asset('front/images/car-parts.png')}}" alt="">
                        </div>

                        <div class="sub_services_index-text">
                            <h3> قطع غيار تشليح </h3>
                        </div>

                    </div>


                    <div class="sub_services_index_main" data-aos="fade-right">

                        <div class="arrow-sub_services_index">
                            <img src="{{asset('front/images/04.png')}}" alt="">
                        </div>
                        <div class="sub_services_index-img">
                            <img src="{{asset('front/images/5.png')}}" alt="">
                        </div>

                        <div class="sub_services_index-text">
                            <h3>  العناية بالسيارات </h3>
                        </div>

                    </div>

                </div>
            </div>
        </div>
     </div>
</div>



<!-- end services_index =======
=====================
===== -->




<!-- start aboutus_index
=================
=======-->
<div class="aboutus_index">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 ">
                <!-- start  sub-img-about-index -->
                <div class="sub-img-about-index">
                    <div class="img_aboutus_index">
                        <img class="img-big" src="{{asset('front/images/cccc.png')}}" alt="">
                        <img  class="img-small" src="{{asset('front/images/car-parts-white-background_127657-16593.png')}}" alt="">
                    </div>
                    <div class="over-img-about-index">
                        <object data="svg/XMLID_958_.svg" type="">
                            <img src="{{asset('front/svg/XMLID_958_.svg')}}" alt="">
                        </object>
                    </div>
                </div>
               <!-- end sub-img-about-index -->
            </div>

            <!-- start text-about-index  -->
            <div class="col-lg-6 col-md-6">
                <div class="text-about-index">
                    <h2>  <img src="{{asset('front/images/a2.')}}'" alt="">    مـــن نـــحـــن</h2>
                    @foreach ($settings as $setting)
                        <p>{{$setting->about}}</p>
                    @endforeach
                        <a href="{{url('about')}}" class="ctm-btn"> اقرأ المزيد   <i class="bi bi-arrow-left"></i></a>
                </div>
            </div>
           <!-- end text-about-index  -->
        </div>
    </div>
</div>


<!-- end aboutus_index
=================
=======-->



 <!-- start ervices-index
================
==========-->

<div class="services-index">
   <div class="container">
        <!-- start title -->
        <div class="title">
            <div class="row align-items-center" >
                <div class="col-lg-3  col-md-4">
                    <h2> <img src="{{asset('front/images/a2.png')}}" alt=""> مـميـزات خـدماـنا  </h2>
                </div>
                <div class="col-lg-9  col-md-8">
                    <div class="shep-title">
                    </div>
                </div>
            </div>
        </div>
        <!-- end title -->

    <div class="new_services_index">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="new_sub_services_index">
                    <div class="new_img_sub_services_index">
                        <img src="{{asset('front/images/dollar.png')}}" alt="">
                    </div>
                    <h2>تكلفة أقل </h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="new_sub_services_index">
                    <div class="new_img_sub_services_index">
                        <img src="{{asset('front/images/effective.png')}}" alt="">
                    </div>
                    <h2>توفير  الجهد </h2>
                </div>
            </div>


            <div class="col-lg-4 col-md-4">
                <div class="new_sub_services_index">
                    <div class="new_img_sub_services_index">
                        <img src="{{asset('front/images/time.png')}}" alt="">
                    </div>
                    <h2>توفير  الوقت</h2>
                </div>
            </div>
        </div>
    </div>


   </div>
</div>



<div class="footer" style="background-image: url({{asset('front/svg/vector.svg')}});">
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2> <img src="{{ asset('front/images/a2.png') }}" alt=""> النشرة البريدية </h2>
                    <p> أدخل بريدك الإلكتروني لمتابعة أحدث الأخبار و المنتجات الخاصة بنا</p>
                    <div class="input_newsletter">
                        <i class="bi bi-envelope"></i>
                        <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                        <button> اشتراك</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-footer">
                        <ul>
                            <li> <a href="{{url('about')}}"> من نحن</a></li>
                            <li> <a href="{{url('privacy_policy')}}">سياسة الخصوصية </a></li>
                            <li><a href="{{url('user_agreement')}}">اتفاقية المستخدم</a></li>
                            <li> <a href="{{url('help_center')}}">مركز المساعدة</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="madia">
                        <ul>
                            <li><a href="{{$setting->instagram_url}}" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{$setting->facebook_url}}" target="_blank">  <i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$setting->snapchat_url}}" target="_blank">  <i class="fab fa-snapchat-ghost"></i></a></li>
                            <li><a href="{{$setting->twitter_url}}" target="_blank"> <i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="end-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p> جميع الحقوق محفوظة   &copy;    لمنصة قطع غيار </p>
                </div>

                <div class="col-lg-6">
                    <a href="https://jaadara.com/"> صنع بكل حب    <i class="fas fa-heart"></i>   في معامل جدارة</a>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiyY&libraries=places&callback=initAutocomplete&language=<?php echo e('ar'); ?>"
    defer></script>
    @livewireScripts
    <script src="{{asset('front/js/custom.js')}}"></script>
    <script>
           window.addEventListener("modalShow", (event) => {

            $("#registerModel").modal("show");
        });
        window.addEventListener("modalClose", (event) => {

    $("#registerModel").modal("hide");
    });
    </script>
<script src="js/custom.js"></script>

</body>
<!-- end-body
=================== -->

</html>

















