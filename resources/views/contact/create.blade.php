<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="icons/favicon/favicon.ico" type="image/x-icon" sizes="190x190">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="{{ asset('style.min.css') }}" rel="stylesheet" type="text/css" >
    <title>Contact</title>
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
            </div>
        </div>
    </section>
   
    <section class="contact" id="contact">
        <div class="contact__wrapper">
            <div class="contact__aside">
                <div class="contact__aside-header"><span>Contact</span></div>
            </div>
            <div class="contact__works">
                <div class="contact__works-wrapper">
                    <div class="text-header text-header_mb60">
                        <div class="divider"></div>Get in touch
                    </div>
                    <div class="contact__content">
                        <form class="form" method="POST" action="{{ route('add-email') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form__block">
                                <label for="name">Name</label> 
                                <input type="text" name="name">
                            </div>
                            <div class="form__block">
                                <label for="surname">SurName</label> 
                                <input type="text" name="surname">
                            </div>
                            <div class="form__block">
                                <label for="email">Email</label> 
                                <input type="text" name="email">
                            </div>
                            <div class="form__block">
                                <label for="photo">Photo</label> 
                                <input type="file" name="photo">
                            </div>
                            <button type="submit" class="btn contact__btn">
                                <span>Submit</span>
                            </button>
                        </form>
                        <div class="contact__list">
                            <ul class="contact__list-inner">
                                <li class="contact__link"><a href="https://github.com/tameoo" target="blank"><i
                                            class="fab fa-github"></i></a></li>
                                <li class="contact__link"><a href="https://www.instagram.com/tmbrllnnd"
                                        target="blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="contact__link"><a href="https://vk.com/tmbrlndd" target="blank"><i
                                            class="fab fa-vk"></i></a></li>
                                <li class="contact__link"><a href="" target="blank"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li class="contact__link"><a href="" target="blank"><i
                                            class="far fa-paper-plane"></i></a></li>
                                <li class="contact__link"><a href="" target="blank"><i class="fas fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ URL::asset('script.js') }}"></script>
</body>
</html>