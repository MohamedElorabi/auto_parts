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
                    <h2 class="content-header-title float-left mb-0">بيانات المنطقة</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">بيانات المنطقة</li>
                            <li class="breadcrumb-item active">تعديل</li>
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
                    <form class="form form-vertical" action="{{route('region.update', $region->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            <div class="row">


                                <div class="col-12">
                                    <div class="form-group">
                                        <label>اسم المنطقة</label>
                                        <input type="text" name="region_name" class="form-control" value="{{$region->region_name}}">
                                    </div>
                                </div>





                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-edit"></i>تعديل</button>
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
