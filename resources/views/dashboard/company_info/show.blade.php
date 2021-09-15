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
                    <h2 class="content-header-title float-left mb-0">بيانات الشركة</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">بيانات الشركة</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
<div class="row match-height">
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical">

                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>نوع النشاط</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->activity_types->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>اسم المنشأة</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->facility_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>اسم صاحب المنشأة</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->user->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>رقم هوية صاحب المنشأة</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->owners_number}}">
                                    </div>

                                    <div class="form-group">
                                        <label>تاريخ الميلاد</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->date}}">
                                    </div>

                                    <div class="form-group">
                                        <label>صورة السجل التجارى</label>
                                        <img src="{{asset('storage/'.$company_info->commercial_register_image)}}" height="50px">
                                    </div>

                                    <div class="form-group">
                                        <label>رقم الحساب البنكى</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->bank_account_number}}">
                                    </div>

                                    <div class="form-group">
                                        <label>اسم المنطقة</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->region->region_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>اسم المدينة</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->city}}">
                                    </div>

                                    <div class="form-group">
                                        <label>اسم وكيل أحد الشركات</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->agent_company}}">
                                    </div>

                                    <div class="form-group">
                                        <label>موزع معتمد</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->authorized_distributor}}">
                                    </div>

                                    <div class="form-group">
                                        <label>متخصص بقطاع الشركات</label>
                                        <input type="text" disabled class="form-control" value="{{$company_info->company_sector->name}}">
                                    </div>
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

@endsection
