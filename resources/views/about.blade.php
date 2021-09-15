@include('layouts.header')


<div class="aboutus">
    <div class="container">
        <!-- start title -->
        <div class="title">
           <div class="row align-items-center" >
               <div class="col-lg-2  col-md-4">
                   <h2> <img src="{{asset('front/images/a2.png')}}" alt=""> من نحن </h2>
               </div>
               <div class="col-lg-10  col-md-8">
                   <div class="shep-title">
                   </div>
               </div>
           </div>
       </div>
       <!-- end title -->

       <div class="sub-aboutus">
           <div class="row">
               <div class="col-lg-6 col-md-6">
                   <div class="img_sub_aboutus">
                       <div class="big-img">
                           <img src="{{asset('front/images/ttttt.png')}}" alt="">
                       </div>
                       <div class="small-img">
                          <img src="{{asset('front/images/242365346.png')}}" alt="">
                       </div>
                   </div>
               </div>


               <div class="col-lg-6 col-md-6">
                   <div class="text-sub-about">
                       <h2> من نحن</h2>
                       @foreach ($settings as $setting)
                            <p>{{$setting->about}}</p>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>


    </div>


    <div class="statistics-about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="sub-statistics-about">
                        <!--SINGLE ITEM-->
                        <div class="img-statistics-about">
                            <img src="{{asset('front/images/1.png')}}" alt="">
                        </div>

                       <div class="single_counter_item">
                           <h3>  + <span class="timer">1234</span></h3>
                       </div>

                       <p>
                           قطع غيار جديدة
                       </p>
                       <!--SINGLE ITEM-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="sub-statistics-about">
                       <!--SINGLE ITEM-->
                       <div class="img-statistics-about">
                           <img src="{{asset('front/images/car-parts.png')}}" alt="">
                       </div>

                      <div class="single_counter_item">
                          <h3>   <span class="timer">250 </span></h3>
                      </div>

                      <p>
                         قطع غيار تشليح
                      </p>
                      <!--SINGLE ITEM-->
                   </div>
               </div>
               <div class="col-lg-4 col-md-6">
                   <div class="sub-statistics-about">
                       <!--SINGLE ITEM-->
                       <div class="img-statistics-about">
                           <img src="{{asset('front/images/5.png')}}" alt="">
                       </div>

                      <div class="single_counter_item">
                          <h3> % <span class="timer">100%</span></h3>
                      </div>

                      <p>
                       العناية بالسيارات
                      </p>
                      <!--SINGLE ITEM-->
                   </div>
               </div>

               <div class="col-lg-4 col-md-6">
                   <div class="sub-statistics-about">
                       <!--SINGLE ITEM-->
                       <div class="{{asset('front/img-statistics-about')}}">
                           <img src="images/3.png" alt="">
                       </div>

                      <div class="single_counter_item">
                          <h3>  + <span class="timer">745</span></h3>
                      </div>

                      <p>
                       إطارات
                      </p>
                      <!--SINGLE ITEM-->
                   </div>
               </div>


               <div class="col-lg-4 col-md-6">
                   <div class="sub-statistics-about">
                       <!--SINGLE ITEM-->
                       <div class="img-statistics-about">
                           <img src="{{asset('front/images/4.png')}}" alt="">
                       </div>

                      <div class="single_counter_item">
                          <h3>  + <span class="timer">745</span></h3>
                      </div>

                      <p>
                       زيوت
                      </p>
                      <!--SINGLE ITEM-->
                   </div>
               </div>




            </div>
        </div>
    </div>


   <div class="services-other">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12">
                   <div class="title-services-other">
                       <h2> معرض خدماتنا </h2>
                       <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                   </div>
               </div>

               <div class="col-lg-12">
                       <div class="owl-carousel owl-theme maincarousel" id="owl-demo">
                           <div class="item">
                               <div class="img-slider">
                                   <img src="{{asset('front/images/012.png')}}" alt="">
                               </div>
                           </div>

                           <div class="item">
                               <div class="img-slider">
                                   <img src="{{asset('front/images/013.png')}}" alt="">
                               </div>
                           </div>
                           <div class="item">
                               <div class="img-slider">
                                   <img src="{{asset('front/images/014.png')}}" alt="">
                               </div>
                           </div>

                           <div class="item">
                               <div class="img-slider">
                                   <img src="{{asset('front/images/015.png')}}" alt="">
                               </div>
                           </div>

                       </div>

               </div>
           </div>
       </div>
   </div>


</div>


<!-- end aboutus =====
====================
=========== -->
@include('layouts.footer')
