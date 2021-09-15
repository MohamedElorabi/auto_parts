
<div class="footer1">
    <div class="sub-footer" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-footer">
                        <img src="{{asset('front/images/logo fff.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="element-footer">
                        <ul>
                            <li> <a href="{{url('about')}}"> من نحن</a></li>
                            <li> <a href="{{url('privacy_policy')}}">   سياسة الخصوصية </a></li>
                            <li><a href="{{url('user_agreement')}}"> اتفاقية المستخدم</a></li>
                            <li> <a href="{{url('help_center')}}">   مركز المساعدة</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="madia">
                        <ul>

                            <li><a href="" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                            <li><a href="" target="_blank">  <i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="" target="_blank">  <i class="fab fa-snapchat-ghost"></i></a></li>
                            <li><a href="" target="_blank"> <i class="fab fa-twitter"></i></a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="end-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p> جميع الحقوق محفوظة   &copy;    لمنصة قطع غيار </p>
                </div>

                <div class="col-lg-6">
                    <a href="https://jaadara.com/"> صنع بكل حب    <i class="fas fa-heart"></i>   في معامل جدارة</a>
                </div>

            </div>

        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdarVlRZOccFIGWJiJ2cFY8-Sr26ibiyY&libraries=places&callback=initAutocomplete&language=<?php echo e('ar'); ?>"
    defer></script>
    @livewireScripts
    <script src="{{asset('front/js/custom.js')}}"></script>
    <script>
           window.addEventListener("modalShow", (event) => {

            $("#registerModel").modal("show");
        });
        window.addEventListener("modalClose", (event) => {

    $("#registerModel").modal("hide");
    });
    </script>
<script src="js/custom.js"></script>

</body>
<!-- end-body
=================== -->

</html>





