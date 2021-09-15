@include('layouts.header')



            <div class="bannr_header" style="background-image: url(../../../../../../public/front/images/banner.png)">
                <div class="caption">
                    <h2>   تواصل معنا  </h2>
                    <p><a href="{{url('index')}}"> الرئيسية </a> -  <a href="contectus.html">  تواصل معنا </a></p>
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



<div class="contectus">
    <div class="container">
           <!-- start title -->
           <div class="title">
            <div class="row align-items-center" >
                <div class="col-lg-3 col-md-4">
                    <h2> <img src="{{asset('front/images/a2.png')}}" alt=""> تواصل معنا</h2>
                </div>
                <div class="col-lg-9  col-md-8">
                    <div class="shep-title">
                    </div>
                </div>
            </div>
        </div>
        <!-- end title -->

        <div class="form-contectus">
            @if(Session::has('message_sent'))
                <div class="alert alert-success">
                    {{ Session::get('message_sent') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-8 pg-none">
                    <form action="{{route('contact_us')}}" method="POST" class="sub-contectus">
                        @csrf
                        <div class="title_contectus">
                            <h2> أرسل لنا رسالة ..!  </h2>
                        </div>
                        <div class="input-contectus">
                            <i class="bi bi-person"></i>
                            <input type="text" name="name" placeholder="الاسم " class="form-control" required>
                        </div>
                        <div class="input-contectus">
                            <i class="bi bi-envelope"></i>
                            <input type="email" name="email" placeholder="البريدالإلكتروني " class="form-control" required>
                        </div>

                        <div class="input-contectus">
                            <i class="bi bi-chat-text"></i>
                            <textarea name="message" class="form-control" placeholder="الرسالة" id="" cols="" rows=""></textarea>
                        </div>

                        <div class="btn-contectus">
                            <button class="ctm-btn"> إرسال </button>
                        </div>

                    </form>
                </div>

                <div class="col-lg-4 pg-none">
                    <div class="sub2-contectus">
                        <div class="title_contectus">
                            <h2> أرسل لنا رسالة ..!  </h2>
                        </div>

                        <div class="links-contectus">
                            <ul>
                                <li><a href=""> <i class="bi bi-telephone-fill"></i>  +0112344578950  </a></li>
                                <li><a href=""> <i class="bi bi-geo-alt-fill"></i>  الرياض , المملكة العربية السعودية</a></li>
                                <li><a href=""> <i class="bi bi-envelope-fill"></i> icompanyname@gmail.com </a></li>
                            </ul>
                            <img src="{{asset('front/images/map (5).png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
