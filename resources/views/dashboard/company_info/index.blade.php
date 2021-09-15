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



<div class="content-body">
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">

            <div class="card-content">
                <div class="table-responsive">

                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نوع النشاط</th>
                                <th>اسم المنشاة</th>
                                <th>اسم صاحب المنشاة</th>
                                <th>رقم هوية صاحب المنشأة</th>
                                <th>تاريخ الميلاد</th>
                                <th>صورة السجل التجارى</th>
                                <th>رقم الحساب البنكى</th>
                                <th>المنطقة</th>
                                <th>المدينة</th>
                                <th>وكيل أحد الشركات</th>
                                <th>موزع معتمد</th>
                                <th>متخصص بقطاع الشركات</th>
                                <th>عرض</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0 ?>
                            @foreach ($companies_info as $company_info)
                            <?php $i++ ?>
                            <tr>
                                <td>{{$company_info->$i}}</td>
                                <td>{{$company_info->activity_types->name}}</td>
                                <td>{{$company_info->facility_name}}</td>
                                <td>{{$company_info->user->name}}</td>
                                <td>{{$company_info->owners_number}}</td>
                                <td>{{$company_info->date}}</td>
                                <td><img src="{{asset('storage/'.$company_info->commercial_register_image)}}" height="50px"></td>
                                <td>{{$company_info->bank_account_number}}</td>
                                <td>{{$company_info->region->region_name}}</td>
                                <td>{{$company_info->city}}</td>
                                <td>{{$company_info->agent_company}}</td>
                                <td>{{$company_info->authorized_distributor}}</td>
                                <td>{{$company_info->company_sector->name}}</td>


                                <td>
                                    <a href="{{url(route('company_info.show' , $company_info->id))}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
