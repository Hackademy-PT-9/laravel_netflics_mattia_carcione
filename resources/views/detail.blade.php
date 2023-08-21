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
            </nav>
        </header>

        <section class="main-container overflow-hidden container">
            <div class="main-container">
                <img width="380" src="/img/films/barbie.jpg" alt="">
            </div>
            <div class="container">
                <h1>Nome Film</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
        </section>

        <footer>

        </footer>
    </div>
</body>

</html>
