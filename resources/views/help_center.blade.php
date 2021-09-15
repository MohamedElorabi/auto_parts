@include('layouts.header')

<div class="bannr_header" style="background-image: url({{asset('front/images/banner.png')}});">
    <div class="caption">
        <h2>     مركز المساعدة  </h2>
        <p><a href="{{url('index')}}"> الرئيسية </a> -  <a href="help-center.html">  مركز المساعدة</a></p>
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


<div class="privacy-policy">
<div class="container">
<!-- start title -->
<div class="title">
<div class="row align-items-center" >
<div class="col-lg-3 col-md-4">
    <h2> <img src="{{asset('images/a2.png')}}" alt=""> مركز المساعدة </h2>
</div>
<div class="col-lg-9  col-md-8">
    <div class="shep-title">
    </div>
</div>
</div>
</div>
<!-- end title -->


<div class="text_privacy_policy">
<div class="row">
<div class="col-lg-12">
    @foreach ($settings as $setting)
        <p>{{$setting->help_center}}</p>
    @endforeach
</div>
</div>
</div>
</div>
</div>


@include('layouts.footer')
