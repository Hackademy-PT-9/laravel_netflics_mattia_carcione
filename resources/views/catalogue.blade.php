<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a class="linkLight @if (Route::currentRouteName() == 'welcome') colorLight linkDark @endif" href="{{route('welcome')}}">Home</a>
                <a class="linkLight @if (Route::currentRouteName() == 'detail') colorLight linkDark @endif" href="{{route('detail')}}">Serie TV</a>
                <a class="linkLight @if (Route::currentRouteName() == 'catalogue') colorLight linkDark @endif" href="{{route('catalogue')}}">Film</a>
            </nav>
        </header>

        <section class="main-container overflow-hidden container">
            <h1>Film su FakeFlix</h1>
            <div class="box">
                <a href="">
                    <img width="380" src="/img/tv-series/breaking-bad.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/the-boys.jpg" alt="">
                </a>

                <a href="">
                    <img width="380" src="/img/tv-series/don-matteo.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/friends.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/stranger.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/hof.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/the-office.jpg" alt="">
                </a>
                <a href="">
                    <img width="380" src="/img/tv-series/cesaroni.jpg" alt="">
                </a>

            </div>
        </section>

        <footer>

        </footer>
    </div>
</body>

</html>