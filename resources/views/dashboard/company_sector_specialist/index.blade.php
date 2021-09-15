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
                    <h2 class="content-header-title float-left mb-0">قطاع الشركة</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">قطاع الشركة</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>
<form action="#" method="get" style="margin-bottom: 20px">
    <div class="row">

        <div class="col-md-4">


                <a href="{{route('company_sector_specialist.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>أضف</a>


        </div>
    </div>
</form>

<div class="content-body">
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">

            <div class="card-content">
                <div class="table-responsive">
                    @if($company_sectors->count() > 0)
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم قطاع الشركة</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($company_sectors as $company_sector)
                            <tr>
                                <td>{{$company_sector->id}}</td>
                                <td>{{$company_sector->name}}</td>
                                <td>
                                    <a href="{{route('company_sector_specialist.edit', $company_sector->id)}}" class="btn btn-info btn-sm">تعديل</a>



                                    <form action="{{ route('company_sector_specialist.destroy', $company_sector->id)}}" method="post" style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger delete btn-sm">حذف</button>
                                    </form>

                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    @else
                    <h2>لايوجد اى بيانات</h2>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

