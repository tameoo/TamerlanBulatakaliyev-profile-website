<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tameooo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="icons/favicon/favicon.ico" type="image/x-icon" sizes="190x190">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="{{ asset('style.min.css') }}" rel="stylesheet" type="text/css" >
</head>

<body>
    <header class="header">
        <div class="header__burger"><span class="header__item"></span> <span
                class="header__item header__item_bigger"></span> <span class="header__item"></span></div>
    </header>

    <section class="menu">
        <div class="menu__overlay"></div>
        <div class="menu__wrapper">
            <div class="menu__inner">
                <div class="menu__close"><span id="left"></span> <span id="right"></span></div>
                <div class="menu__header">Tameooo</div>
                <ul class="menu__list">
                    <li class="menu__link"><a href="{{ route('index') }}">Home</a></li>
                    <li class="menu__link"><a href="{{ route('about') }}">About</a></li>
                </ul>
                </ul>
            </div>
        </div>
    </section>

    <section class="home" id="home">
        <div class="container">
            <div class="home__inner">
                <div class="home__about">
                    <div class="home__content-text">
                        <div class="text-header">
                            <div class="divider"></div><span>{{ __('text.hello') }}</span>
                        </div>
                        <div class="home__title">
                            <h1 class="glitch">Tameooo</h1>
                        </div>
                        <div class="home__typing"><span class="writer"></span><span class="cursor">|</span></div><button
                            class="btn home__btn"><a href="#"></a><span>{{ __('text.download') }}</span></button>
                    </div><img src="img/1.png" class="home__static home__static_moveDown" alt="static"
                        style="left: 4%; bottom: 78.2415%;"> <img src="img/2.png"
                        class="home__static home__static_moveDown" alt="static" style="left: 5%; bottom: 16.4179%;">
                    <img src="img/3.png" class="home__static home__static_moveUp" alt="static"
                        style="left: 20%; bottom: 75.7323%;"> <img src="img/4.png"
                        class="home__static home__static_moveUp" alt="static" style="left: 30%; bottom: 8.2148%;"> <img
                        src="img/5.png" class="home__static home__static_moveUp" alt="static"
                        style="left: 40%; bottom: 73.2279%;"> <img src="img/6.png"
                        class="home__static home__static_moveUp" alt="static" style="left: 50%; bottom: 12.8747%;"> <img
                        src="img/7.png" class="home__static home__static_moveUp" alt="static"
                        style="left: 60%; bottom: 74.2195%;"> <img src="img/8.png"
                        class="home__static home__static_moveDown" alt="static" style="left: 70%; bottom: 20.9412%;">
                    <img src="img/9.png" class="home__static home__static_movesDown" alt="static"
                        style="left: 80%; bottom: 72.5548%;"> <img src="img/10.png"
                        class="home__static home__static_moveUp" alt="static" style="left: 90%; bottom: 11.7824%;">
                </div>
                <div class="home__img"><img src="img/main_img.jpg" alt="main_img"></div>
            </div>
        </div>
    </section>
    
    <script src=" {{ URL::asset('script.js') }}"></script>
</body>
</html>