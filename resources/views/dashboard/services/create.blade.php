@extends('dashboard.layouts.app')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">الخدمات</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">الخدمات</li>
                            <li class="breadcrumb-item active">أضف</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="content-body">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>

@endif
    <!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
<div class="row match-height">
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>اسم الخدمة</label>
                                        <input type="text" name="service_name" class="form-control" value="{{old('service_name')}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label> نبذة عن الخدمة</label>
                                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>صورة</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-plus"></i>أضف</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Vertical form layout section end -->

</div>
</div>
</div>
@endsection
