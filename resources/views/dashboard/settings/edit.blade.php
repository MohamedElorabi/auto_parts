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
                    <form class="form form-vertical" action="{{route('settings.update', $setting->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-body">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>من نحن</label>
                                        <textarea name="about" class="form-control">{{$setting->about}}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>سياسة الخصوصية</label>
                                        <textarea name="privacy_policy" class="form-control">{{$setting->privacy_policy}}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>اتفاقية المسنخدم</label>
                                        <textarea name="user_agreement" class="form-control">{{$setting->user_agreement}}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>مركز المساعدة</label>
                                        <textarea name="help_center" class="form-control">{{$setting->help_center}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>فيس بوك</label>
                                        <input type="text" name="facebook_url" class="form-control" value="{{$setting->facebook_url}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>انستجرام</label>
                                        <input type="text" name="instagram_url" class="form-control" value="{{$setting->instagram_url}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>سناب شات</label>
                                        <input type="text" name="snap_chat_url" class="form-control" value="{{$setting->snap_chat_url}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>تويتر</label>
                                        <input type="text" name="twitter_url" class="form-control" value="{{$setting->twitter_url}}">
                                    </div>
                                </div>




                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-plus"></i>تعديل</button>
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
