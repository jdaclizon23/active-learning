<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Not Found</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .page_404 {
            padding: 40px 0;
            background: #fff;
            font-family: 'Arvo', serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background: no-repeat;
            background-image: url({{asset('failOver.gif')}});
            height: 50vh;
            background-position: center;
        }

        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
        }

        .contant_box_404 {
            margin-top: -50px;
        }
    </style>
</head>

<body>
<div class="h-100">
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1>404</h1>
                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                Looks like you're lost
                            </h3>
                            <p>the page you are looking for is not avaible!</p>
                            <a href="/home" class="link_404">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>
