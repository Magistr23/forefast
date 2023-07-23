 @include('/fragments/header')
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="main">
            <div class="head">
                <h1>ForeFast</h1>
            </div>
            <div class="menu" style="margin-top: 50px">
                <a href="/">О нас</a>
                <a href="/">Контакты</a>
                <a href="/">Дискорд</a>
                <a href="/">Донат</a>
            </div>
        </div>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            .head {
                display: flex;
                justify-content: center;
            }
            .menu, .footer {
                display: flex;
                justify-content: space-around;
            }
            .footer {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 80px;
            }
            html, body {
                height: 100%;
            }
        </style>
        <script src="" async defer></script>
@include('/fragments/footer')