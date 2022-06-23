<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/tether.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>

<script>
    // Back to top button
    (function () {
        $(document).ready(function () {
            return $(window).scroll(function () {
                return $(window).scrollTop() > 600 ? $("#back-to-top").addClass("show") : $(
                    "#back-to-top").removeClass("show")
            }), $("#back-to-top").click(function () {
                return $("html,body").animate({
                    scrollTop: "0"
                })
            })
        })
    }).call(this);

</script>
