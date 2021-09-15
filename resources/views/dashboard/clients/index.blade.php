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
                    <h2 class="content-header-title float-left mb-0">العملاء</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">العملاء</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>
<form action="#" method="get" style="margin-bottom: 20px">
    <div class="row">

    </div>
</form>

<div class="content-body">
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">

            <div class="card-content">
                <div class="table-responsive">
                    @if($users->count() > 0)
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم العميل</th>
                                <th>الايميل</th>
                                <th>رقم الهاتف</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($users as $user)
                            <?php $i++ ?>
                            <tr>
                                <td>{{$user->$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
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

