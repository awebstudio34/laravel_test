@section('footer')
    <div class="footerstyle">
        <div class="foot"><a href="#">Пожаловаться</a></div>
        <div class="foot"><a href="#">Соц. страничка</a></div>
        <div class="foot"><a href="#">Пожелания</a></div>
    </div>
    <script>function footerToBottom() {
            var browserHeight = $(window).height(),
                footerOuterHeight = $('.footerstyle').outerHeight(true),
                mainHeightMarginPaddingBorder = $('.mainl').outerHeight(true) - $('.mainl').height();
            $('.mainl').css({
                'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorder,
            });
        };
        footerToBottom();
        $(window).resize(function () {
            footerToBottom();
        });</script>
    </body>
    </html>
@endsection