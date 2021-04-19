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
    <title>About</title>
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
   
    <section class="about" id="about">
        <div class="about__wrapper">
            <div class="about__block about__block-me">
                <div class="about__inner">
                    <div class="about__content-text">
                        <div class="text-header">
                            <div class="divider"></div><span>About me</span>
                        </div>
                        <div class="text-title">{{ __('text.home') }}</div>
                        <div class="about__descr">{{ __('text.about') }}</div>
                        <ul class="about__list">
                            <li class="about__link"><a href="https://github.com/tameoo" target="blank"><i
                                        class="fab fa-github"></i></a></li>
                            <li class="about__link"><a href="https://www.instagram.com/tmbrllnnd" target="blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="about__link"><a href="https://vk.com/tmbrlndd" target="blank"><i
                                        class="fab fa-vk"></i></a></li>
                            <li class="about__link"><a href="" target="blank"><i class="fab fa-linkedin"></i></a></li>
                            <li class="about__link"><a href="" target="blank"><i class="far fa-paper-plane"></i></a>
                            </li>
                            <li class="about__link"><a href="" target="blank"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about__block about__block-skills">
                <div class="about__inner">
                    <div class="about__content-text">
                        <div class="text-header">
                            <div class="divider"></div><span>My Skills</span>
                        </div>
                        <ul class="about__skills">
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">Web Design</div>
                                        <div class="about__skill-number"><span>70</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">HTML</div>
                                        <div class="about__skill-number"><span>90</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">CSS</div>
                                        <div class="about__skill-number"><span>90</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">Javascript</div>
                                        <div class="about__skill-number"><span>75</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">React</div>
                                        <div class="about__skill-number"><span>60</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                            <li class="about__skill">
                                <div class="about__skill-wrapper">
                                    <div class="about__skill-box">
                                        <div class="about__skill-title">Angular</div>
                                        <div class="about__skill-number"><span>40</span>%</div>
                                    </div>
                                    <div class="about__skill-progress"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="locale" style="position: absolute;top: 20px;right: 50px; list-style-type: none; width: 100px; display: flex; justify-content: space-between ">
            <li class="lang" ><a style="color:#fff; text-decoration:none;" href="en">EN</a></li>
            <li class="lang" ><a style="color:#fff; text-decoration:none;" href="kz">KZ</a></li>
            <li class="lang" ><a style="color:#fff; text-decoration:none;" href="ru">RU</a></li>
        </ul>
    </section>
    <script src="{{ URL::asset('script.js') }}"></script>
</body>
</html>