<div class="regester">
    <div class="container">
        {{$step}}
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-regester">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link @if($step >=1) active @endif">
                                <div class="sub-tab-regester">
                                    <img src="{{asset('front/images/gear.png')}}" alt="">
                                    <span>البيانات الشخصية</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($step>=2) active @endif">
                                <div class="sub-tab-regester">
                                    <img src="{{asset('front/images/gear.png')}}" alt="">
                                    <span>بيانات الشركة</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($step==3) active @endif">
                                <div class="sub-tab-regester">
                                    <img src="{{asset('front/images/gear.png')}}" alt="">
                                    <span> تم التسجيل</span>
                                </div>
                            </a>

                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="sub-regester">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- start tap form 1 -->
                            @if($step==1)
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <form>
                            <div class="form_sub-regester">
                                <h2> من فضلك املأ البيانات التالية :</h2>
                                <div class="input-sub-regester">
                                    <input type="text" wire:model="name" class="form-control"
                                        placeholder="اسم المستخدم  ( يشترط أن يكون بالإبنجليزية )">
                                </div>

                                <div class="input-sub-regester">
                                    <input type="password" wire:model="password" class="form-control"
                                        placeholder=" كلمة المرور">
                                </div>


                                <div class="input-sub-regester">
                                    <input type="password" wire:model="password2" class="form-control"
                                        placeholder="تأكيد كلمة المرور">
                                </div>


                                <div class="input-sub-regester">
                                    <input type="email" wire:model="email" class="form-control"
                                        placeholder="البريد الإلكتروني">
                                </div>
                                <div class="input-sub-regester">
                                    <input type="tel" wire:model="phone" class="form-control" placeholder="رقم الجوال">
                                </div>

                                <div class="btn-tab">

                                    <button type="button" class="ctm-btn" wire:click="validateUserform()">
                                        التالي</button>
                                    {{-- <button type="button" class="ctm-btn" id="send-code" data-target="#register-modal" data-toggle="modal"> التالي</button> --}}
                                </div>
                            </div>
                        </form>
                        <!-- end tap form 1 -->
                    </div>
                    @elseif($step==2)

                    <div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form>
                            <div class="form_sub-regester">
                                <h2> بيانات الشركة الخاصة بك :</h2>
                                <div class="input-sub-regester">
                                    <select class="form-select form-control" wire:model="activity_type_id"
                                        aria-label="Default select example" required>

                                        <option selected> نوع النشاط</option>
                                        @foreach ($activity_types as $activity_type)
                                        <option value="{{$activity_type->id}}">{{$activity_type->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="input-sub-regester">
                                    <input type="text" wire:model="facility_name" class="form-control"
                                        placeholder="اسم المنشأة">
                                </div>


                                <div class="input-sub-regester">
                                    <input type="number" wire:model="owners_number" class="form-control"
                                        placeholder="رقم هوية صاحب المنشأة">
                                </div>


                                <div class="input-sub-regester">
                                    <input type="date" wire:model="date" class="form-control"
                                        placeholder="تاريخ ميلاد صاحب المنشأة ">
                                </div>

                                <div class="input-fille">
                                    <input type="file" wire:model="commercial_register_image" class="image"
                                        id="input-file">
                                    <label for="input-file" class="form-control">
                                        <span>صورة السجل التجاري </span>
                                        <i class="bi bi-upload"></i>
                                    </label>

                                    <p class="prev">
                                        <img src="" class="preview-input-file" alt="">
                                    </p>
                                </div>


                                <div class="input-sub-regester">
                                    <input type="number" wire:model="bank_account_number" class="form-control"
                                        placeholder="رقم الإيبان ( الحساب البنكي ) غير إجباري* ">
                                </div>

                                <div class="input-sub-regester">
                                    <select class="form-select form-control" wire:model="region_id"
                                        aria-label="Default select example" required>
                                        <option selected> المنطقة</option>
                                        @foreach ($regions as $region)
                                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="input-sub-regester">
                                    <input type="text" wire:model="city" class="form-control" placeholder="المدينة  ">
                                </div>




                                <div class="input-sub-regester">
                                    <select class="form-select form-control" wire:model="agent_company"
                                        aria-label="Default select example" required>
                                        <option selected> هل المنشأة وكيل لأحد الشركات ؟</option>
                                        <option value="1"> نعم </option>
                                        <option value="2">لا </option>
                                    </select>
                                </div>

                                <div class="input-sub-regester">
                                    <select class="form-select form-control " wire:model="authorized_distributor"
                                        aria-label="Default select example" required>
                                        <option selected> هل المنشأة موزع معتمد ؟</option>
                                        <option value="1"> نعم </option>
                                        <option value="2">لا </option>
                                    </select>
                                </div>


                                <div class="input-sub-regester">
                                    <select class="form-select form-control" wire:model="company_sector_specialist_id"
                                        aria-label="Default select example" required>
                                        <option selected> متخصص بقطاع شركة</option>
                                        @foreach ($company_sectors as $company_sector)
                                        <option value="{{$company_sector->id}}">{{$company_sector->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="input-sub-regester">
                                    <select class="form-select form-control " wire:model="other_branches"
                                        aria-label="Default select example" required>
                                        <option selected> هل يوجد لديك فروع أخرى </option>
                                        <option value="1">نعم </option>
                                        <option value="2">لا </option>


                                    </select>
                                </div>

                                @if($showOtherBranches)
                                @foreach ($branches as $index=>$branch)

                                <h5 class="text-danger">فرع رقم {{$index+1}}</h5>

                                <div class="input-sub-regester">
                                    <select class="form-select form-control " wire:model="branches.{{ $index }}.region_id"
                                        aria-label="Default select example" required>
                                        <option selected> المنطقة</option>
                                        @foreach ($regions as $region)
                                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error("branches.{$index}.region_id")
                                    <div class="help-block">
                                        <ul role="alert">
                                            <li>{{ $message }}</li>
                                        </ul>
                                    </div>
                                @enderror


                                <div class="input-sub-regester">
                                    <input type="text" wire:model="branches.{{$index}}.city" class="form-control" placeholder="المدينة  ">
                                </div>
                                @error("branches.{$index}.city")
                                    <div class="help-block">
                                        <ul role="alert">
                                            <li>{{ $message }}</li>
                                        </ul>
                                    </div>
                                @enderror


                                <div class="input-sub-regester">
                                    <input type="tel" wire:model="branches.{{$index}}.phone" class="form-control"
                                        placeholder="رقم الجوال">
                                </div>
                                @error("branches.{$index}.phone")
                                    <div class="help-block">
                                        <ul role="alert">
                                            <li>{{ $message }}</li>
                                        </ul>
                                    </div>
                                @enderror


                                <div class="map-re">
                                    {{-- <div id="map"></div> --}}
                                    <input type="text" wire:model="branches.{{$index}}.establishment_location" class="form-control"
                                        placeholder=" موقع المنشأة / المحل" id="address" required>
                                    <input type="hidden" wire:model="lat" id="lat">
                                    <input type="hidden" wire:model="lng" id="lng">
                                </div>
                                @endforeach
                                @error("branches.{$index}.establishment_location")
                                    <div class="help-block">
                                        <ul role="alert">
                                            <li>{{ $message }}</li>
                                        </ul>
                                    </div>
                                @enderror

                                <button type="button" class="btn btn-success" wire:click="addBranch()">
                                    +
                                    اضافة فرع اخر
                                </button>
                                @endif
                                {{-- end of other branches --}}



                                <div class="btn-tab">

                                    <a class="ctm-btn" wire:click="saveCompanyData()"> التالي</a>
                                </div>

                            </div>

                        </form>
                    </div>

                    @elseif($step==3)
                    <div>
                        <div class="done_register">
                            <div class="img_done_register">
                                <img src="images/icon.png" alt="">
                            </div>
                            <h2>تم التسجيل بنجاح</h2>
                            <a href="{{url('/')}}" class="ctm-btn"> العودة إلى الرئيسية <i
                                    class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!--start register-model -->
    <div class="modal fade" id="registerModel">
        <div class="modal-dialog modal-dialog-centered big-modal">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="register_sub_modal">
                        <h2>رمز التحقق</h2>
                        <p>برجاء إدخال رمز التحقق للتأكد من رقم الجوال</p>
                        <p class="text-primary">للاختبار اكتب 6666</p>
                        <input type="number" class="form-control" wire:model.defer="pin_code" placeholder="كود التحقق">
                        <div> لم يتم إرسال رمز التحقق. <a href=""> إعادة إرسال</a></div>
                        <button class="ctm-btn" wire:click="checkCode()"> التالي</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
