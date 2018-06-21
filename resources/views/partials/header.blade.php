<header>
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-4 col-xs-5 p-l p-r">
                    <div class="picture-logo">
                        <a href="/">
                            <img src="{{asset('front/img/header/logo.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-4 col-xs-3">
                    <div class="outer-menu">
                        <input class="checkbox-toggle" type="checkbox"/>
                        <div class="hamburger">
                            <div></div>
                        </div>
                        <div class="menu">
                            <div>
                                <div>
                                    <ul>
                                        <li><a href="{{route('home',['locale'=>Session::get('locale')])}}">Главная</a></li>
                                        <li><a href="/working.php">Как мы работаем</a></li>
                                        <li><a href="/partners.php">Партнерам</a></li>
                                        <li><a href="/aboutUs.php">О нас</a></li>
                                        <li><a href="{{route('blog.index',['locale'=>App::getLocale()])}}">Блог</a></li>
                                        <li><a href="/faq.php">FAQ</a></li>
                                        <li><a href="/lk_client.php">Личный кабинет</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4  col-xs-4">
                    <div class="entrance">
                        <div class="language">
                            <a class="@if(App::getLocale() == 'en') active @endif"
                               href="{{route('change.lang',['locale'=>'en'])}}">
                                <img src="{{asset('front/img/header/1_menu_Flag_of_United_Kingdom.svg')}}" alt="">
                            </a>
                            <a class="@if(App::getLocale() == 'de') active @endif"
                               href="{{route('change.lang',['locale'=>'de'])}}">
                                <img src="{{asset('front/img/header/1_menu_Flag_of_Germany.svg')}}" alt="">
                            </a>
                            <a class="@if(App::getLocale() == 'ru') active @endif"
                               href="{{route('change.lang',['locale'=>'ru'])}}">
                                <img src="{{asset('front/img/header/1_menu_Flag_of_Russia.svg')}}" alt="">
                            </a>
                        </div>
                        @guest

                            <div class="header-btn b-all">
                                <a href="{{route('login',['locale'=>App::getLocale()])}}">Вход</a>
                            </div>
                        @else
                            <div class="header-btn b-all">
                                <a href="{{ route('logout',['locale'=>App::getLocale()]) }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выход
                                </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout',['locale'=>App::getLocale()]) }}"
                                  method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        @endguest

                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
