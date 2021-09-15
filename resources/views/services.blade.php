@include('layouts.header')

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


         <div class="services_featured_index">
             <div class="row">

                @foreach ($services as $service)
                <div class="col-lg-4  col-md-6 col-sm-6 col-12">
                    <div class="sub-services-index">
                        <div class="img-services-index">
                            <img src="{{$service->image}}" alt="">
                        </div>

                        <div class="text-services-index">
                            <h3>{{$service->service_name}}</h3>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                  </div>
                @endforeach




                 <div class="col-lg-12">
                     <div class="btn-services-index">
                         <a href="" class="ctm-btn"> المزيد   <i class="bi bi-arrow-left"></i></a>
                     </div>
                 </div>
             </div>
         </div>




    </div>
 </div>



@include('layouts.footer')
