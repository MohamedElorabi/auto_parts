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
                    <h2 class="content-header-title float-left mb-0">الإعدادات</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">لوحة التحكم</a>
                            </li>
                            <li class="breadcrumb-item active">الإعدادات</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div>

    <div class="row">

        <div class="col-md-4">
                <a href="{{route('settings.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>أضف</a>
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
                                <th>من نحن</th>
                                <th>سياسة الخصوصية</th>
                                <th>اتفاقية المستخدم</th>
                                <th>مركز المساعدة</th>
                                <th>فيس بوك</th>
                                <th>انستجرام</th>
                                <th>سناب شات</th>
                                <th>تويتر</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0 ?>
                            @foreach ($settings as $setting)
                            <?php $i++ ?>
                            <tr>
                                <td>{{$setting->$i}}</td>
                                <td>{{Str::limit($setting->about,10)}}</td>
                                <td>{{Str::limit($setting->privacy_policy,10)}}</td>
                                <td>{{Str::limit($setting->user_agreement,10)}}</td>
                                <td>{{Str::limit($setting->help_center,10)}}</td>
                                <td>{{Str::limit($setting->facebook_url,10)}}</td>
                                <td>{{Str::limit($setting->instagram_url,10)}}</td>
                                <td>{{Str::limit($setting->snap_chat_url,10)}}</td>
                                <td>{{Str::limit($setting->twitter_url,10)}}</td>
                                <td>
                                    <a href="{{route('settings.edit', $setting->id)}}" class="btn btn-info btn-sm">تعديل</a>



                                    <form action="{{ route('settings.destroy', $setting->id)}}" method="post" style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger delete btn-sm">حذف</button>
                                    </form>

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

