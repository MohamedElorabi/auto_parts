@include('layouts.header')




            <div class="bannr_header" style="background-image: url({{asset('front/images/banner.png')}});">
                <div class="caption">
                    <h2>   سجل معنا </h2>
                    <p><a href="{{url('index')}}"> الرئيسية </a> -  <a href="{{url('regester')}}">  سجل معنا </a></p>
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



<!-- start regester =======
==============
======-->
@livewire('register')





@include('layouts.footer')






