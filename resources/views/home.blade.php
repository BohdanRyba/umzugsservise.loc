@extends('layouts.app')
@section('header')
    @include('partials.header')
@endsection
@section('content')
    <div class="section-choice-service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-site">
                        <h2 class="number_one"> #1</h2>
                        <h1 class="animate_text">Umzugsunternehmen in Deutschland {{__('app.test')}}</h1>
                        <p>Переезд</p>
                        <p>Хранение вещей</p>
                        <p>Сопутствующие услуги</p>
                    </div>
                    <div class="mob_main_girl">
                        <div class="left-pict" data-aos="fade-right"
                             data-aos-offset="100" data-aos-duration="800"
                             data-aos-easing="ease-in-sine" data-aos-delay="200" data-aos-once="true"
                             style="background-image: url('{{asset('front/img/main/block1/girl.png')}}');"></div>
                        <div class="right-pict" data-aos="fade-left"
                             data-aos-offset="100"
                             data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="800"
                             data-aos-once="true"
                             style="background-image: url('{{asset('front/img/main/block1/dog.png')}}');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-choice">
        <div class="section-choice-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="choice-tab">
                            <div class="tab-menu">
                                <button class="filter active">
                                    Переезд
                                </button>
                                <button class="filter">
                                    Хранение вещей
                                </button>
                            </div>
                            <div class="tab-content">
                                <div class="content-choice">
                                    <form class="main_relocation">
                                        <input type="hidden" name="val" value="Переезд">
                                        <div class="form-group ad">
                                            <div class="adress-from">
                                                <p>Откуда</p>
                                                <input class="popup-index" type="tel" name="index_from"
                                                       placeholder="Индекс" maxlength="5">
                                            </div>
                                            <div class="adress-for">
                                                <p>Куда</p>
                                                <input class="popup-index" type="tel" name="index_for"
                                                       placeholder="Индекс" maxlength="5">
                                            </div>
                                            <div class="but-btn">
                                                <button type="submit" class="form-btn">Оставить заявку</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="content-choice">
                                    <form class="main_storage">
                                        <input type="hidden" name="val" value="Хранение вещей">
                                        <div class="form-group">
                                            <div class="adress_storage">
                                                <p>Адрес</p>
                                                <input class="popup-index" type="tel" name="index_adress"
                                                       placeholder="Индекс" maxlength="5">
                                            </div>
                                            <p>Период хранения</p>
                                            <div class="cal-val">
                                                <input class="popup-calendar datepicker_from" name="date_from"
                                                       placeholder="дд.мм.гггг" type="text">
                                            </div>
                                            <div class="line-cal"></div>
                                            <div class="cal-val for_val">
                                                <input class="popup-calendar  datepicker_for" name="date_for"
                                                       placeholder="дд.мм.гггг" type="text">
                                            </div>
                                            <div class="but-btn">
                                                <button type="submit" class="form-btn"><span>Оставить заявку</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content-descript">
            <div class="content-choice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="information">
                                <p>Sie suchen nach einem günstigen Umzugsunternehmen in Deutschland? Dann sind wir genau
                                    die
                                    Richtigen! Aus den vielen verschiedenen Umzugsfirmen filtern wir die besten Angebote
                                    für Sie
                                    raus und lassen Ihnen diese zukommen. Sie entscheiden dann nach Qualität und Preis,
                                    welches der
                                    Unternehmen zu Ihnen am besten passt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-choice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="information">
                                <p>Sie suchen nach einem günstigen Umzugsunternehmen in Deutschland? Dann sind wir genau
                                    die
                                    Richtige</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-working">
        <div class="container">
            <div class="everything-simple">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Как это работает? Все просто!</h2>
                        <div class="col-sm-4">
                            <div class="step" data-aos="zoom-out" data-aos-delay="100" data-aos-once="true">
                                <div class="block-pict">
                                    <img src="{{asset('front')}}/img/main/block2/3_zayavka1.svg" alt="">
                                </div>
                                <div class="number-step">
                                    <p>1</p>
                                </div>
                                <div class="info">
                                    <p>Оставить заявку удобным вам способом</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="step cent-st" data-aos="zoom-out" data-aos-delay="500" data-aos-once="true">
                                <div class="block-pict">
                                    <img src="{{asset('front')}}/img/main/block2/3_predlojenia2.svg" alt="">
                                </div>
                                <div class="number-step">
                                    <p>2</p>
                                </div>
                                <div class="info">
                                    <p>Получить ряд предложений от разных компаний совершенно бесплатно</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="step" data-aos="zoom-out" data-aos-delay="800" data-aos-once="true">
                                <div class="block-pict">
                                    <img src="{{asset('front')}}/img/main/block3/1.png" alt="">
                                </div>
                                <div class="number-step">
                                    <p>3</p>
                                </div>
                                <div class="info">
                                    <p>Выбрать компанию с лучшим предложением по цене и качеству</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="make-deal">
                <div class="info">
                    <p>До заключения сделки клиент не несет никаких обязательств перед компаниями, которые предложили
                        свои
                        услуги по выполнению оставленной заявки.</p>
                    <p>Клиент защищен гарантией выполнения услуги!
                        Подробнее читать в <a href="#js-document">Название документа</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-expert">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12 p-l">
                    <div class="col-left">
                        <img src="{{asset('front')}}/img/main/block3/pict.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-r">
                    <div class="col-right">
                        <h3>Мы эксперты в своем деле</h3>
                        <p>Изучив за много лет работы сферу перевозок на личном опыте, мы предлагаем сервис, который
                            объединит клиентов и поставщиков слуг, сделает процесс переезда проще и удобнее.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list b-r b-b">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="100" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Мы работаем только с проверенными сертифицированными специалистами</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list b-r b-b">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="300" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Простая и удобная форма заявки упрощает оценку стоимости выполнения услуги</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list b-b">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="500" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Никаких скрытых платежей, вы платите только за выполнение услуги</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list b-r">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="700" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Разнообразие предложений от компаний-перевозчиков дает возможность выбрать лучшее
                                предложение
                                по соотношению цены и качества</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list b-r">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="900" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Клиент защищен от недобросовестных предпринимателей — на нашем сервисе выполнение заказа
                                гарантировано</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-l p-r">
                    <div class="checked-list">
                        <div class="icon-check">
                            <div class="pic-checked" data-aos="fade-right" data-aos-delay="1200" data-aos-once="true"
                                 style="background-image: url('{{asset('front/img/main/block4/4_chekmark.svg')}}');">
                            </div>
                            <p>Мы работаем качественно и оперативно. Переезд в 24 часа — это реально</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-benefits">
        <div class="benefits-inner">
            <div class="container">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="benefits-element">
                        <div class="benefits-icon">
                            <img src="{{asset('front')}}/img/main/block4/4_up1.svg" alt="">
                        </div>
                        <div class="benefits-all">
                            <p class="benefits-number">15</p>
                            <p class="benefits-title">лет</p>
                        </div>
                        <p class="benefits-info">успешной работы на рынке</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  col-xs-6">
                    <div class="benefits-element">
                        <div class="benefits-icon">
                            <img src="{{asset('front')}}/img/main/block4/4_otziv2.svg" alt="">
                        </div>
                        <div class="benefits-all">
                            <p class="benefits-number">98</p>
                            <p class="benefits-procent">%</p>
                        </div>
                        <p class="benefits-info">положительных отзывов клиентов</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  col-xs-6">
                    <div class="benefits-element mob_elem">
                        <div class="benefits-icon hand">
                            <img src="{{asset('front')}}/img/main/block4/4_hands3.svg" alt="">
                        </div>
                        <div class="benefits-all mob_partner">
                            <p class="benefits-number">300</p>
                            <p class="benefits-title"> партнеров</p>
                        </div>
                        <p class="benefits-info">проверенных временем транспортных компаний</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  col-xs-6">
                    <div class="benefits-element">
                        <div class="benefits-icon">
                            <img src="{{asset('front')}}/img/main/block4/4_car4.svg" alt="">
                        </div>
                        <div class="benefits-all">
                            <p class="benefits-number last">100.000</p>
                        </div>
                        <p class="benefits-info">выполненных переездов</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-services">
        <div class="left-service">
            <div class="title-service">
                <h2>Предоставление услуг по всей Германии</h2>
            </div>
            <div class="list-city">
                <ul>
                    <li><a href="#">Бранденбург</a></li>
                    <li><a href="#">Берлин</a></li>
                    <li><a href="#">Баден-Вюртемберг</a></li>
                    <li><a href="#">Бавария</a></li>
                    <li><a href="#">Бремен</a></li>
                    <li><a href="#">Гессен</a></li>
                    <li><a href="#">Гамбург</a></li>
                    <li><a href="#">Мекленбург-Передняя Померания</a></li>
                    <li><a href="#">Нижняя Саксония</a></li>
                    <li><a href="#">Северный Рейн-Вестфалия</a></li>
                    <li><a href="#">Рейнланд-Пфальц</a></li>
                    <li><a href="#">Шлезвиг-Гольштейн</a></li>
                    <li><a href="#">Саар</a></li>
                    <li><a href="#">Саксония</a></li>
                    <li><a href="#">Саксония-Анхальт</a></li>
                    <li><a href="#">Тюрингия</a></li>
                </ul>
                <div class="service-btn  b-all">
                    <a href="#">Заказать услугу в своем городе</a>
                </div>
            </div>
        </div>
        <div class="right-service" data-aos="zoom-out-left" data-aos-delay="200" data-aos-once="true">
            <img src="{{asset('front')}}/img/main/block5/foto.png" alt="">
        </div>
    </div>
    <div class="section-partners">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partners-title">
                        <h2>Наши партнеры</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slider-partners owl-carousel">
                    <div class="slider-item">
                        <div class="foto-partners">
                            <img src="{{asset('front')}}/img/main/block6/foto-1.png" alt="">
                        </div>
                        <p>Название транспортной компании из Бремена</p>
                    </div>
                    <div class="slider-item">
                        <div class="foto-partners">
                            <img src="{{asset('front')}}/img/main/block6/foto-2.png" alt="">
                        </div>
                        <p>Название транспортной компании из Бремена</p>
                    </div>
                    <div class="slider-item">
                        <div class="foto-partners">
                            <img src="{{asset('front')}}/img/main/block6/foto-3.png" alt="">
                        </div>
                        <p>Название транспортной компании из Бремена</p>
                    </div>
                    <div class="slider-item">
                        <div class="foto-partners">
                            <img src="{{asset('front')}}/img/main/block6/foto-4.png" alt="">
                        </div>
                        <p>Название транспортной компании из Бремена</p>
                    </div>
                    <div class="slider-item">
                        <div class="foto-partners">
                            <img src="{{asset('front')}}/img/main/block6/foto-5.png" alt="">
                        </div>
                        <p>Название транспортной компании из Бремена</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="descript-partners">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                            Proin
                            gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar
                            tempor.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam
                            fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien
                            nunc
                            eget.</p>
                    </div>
                    <div class="btn-bottom b-all">
                        <a href="#js-partner">Стать партнером</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-reviews">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Отзывы наших клиентов</h2>
                </div>
            </div>
            <div class="row">
                <div class="reviews-slider owl-carousel" data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1500" data-aos-once="true">
                    <div class="reviews-item">
                        <div class="top-item">
                            <div class="icon">
                                <img src="{{asset('front')}}/img/main/block7/logo.png" alt="">
                            </div>
                            <div class="descript">
                                <div class="info-company">
                                    <h4>Название компании</h4>
                                    <p>13409 Berlin</p>
                                    <div class="star">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="down-item">
                            <div class="descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.
                                    Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales
                                    pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur
                                    ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis
                                    orci,
                                    sed rhoncus sapien nunc eget.</p>
                            </div>
                            <div class="adress">
                                <p>Имя, Город</p>
                                <p>дд.мм. гггг</p>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-item">
                        <div class="top-item">
                            <div class="icon">
                                <img src="{{asset('front')}}/img/main/block7/logo.png" alt="">
                            </div>
                            <div class="descript">
                                <div class="info-company">
                                    <h4>Название компании Название компании Название компании</h4>
                                    <p>13409 Berlin</p>
                                    <div class="star">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="down-item">
                            <div class="descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.
                                    Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales
                                    pulvinar tempor. </p>
                            </div>
                            <div class="adress">
                                <p>Имя, Город</p>
                                <p>дд.мм. гггг</p>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-item">
                        <div class="top-item">
                            <div class="icon">
                                <img src="{{asset('front')}}/img/main/block7/logo.png" alt="">
                            </div>
                            <div class="descript">
                                <div class="info-company">
                                    <h4>Название компании Название компании</h4>
                                    <p>13409 Berlin</p>
                                    <div class="star">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                        <img class="n-star" src="{{asset('front')}}/img/main/block7/7_star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="down-item">
                            <div class="descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet.
                                    Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales
                                    pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur
                                    ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate,</p>
                            </div>
                            <div class="adress">
                                <p>Имя, Город</p>
                                <p>дд.мм. гггг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-leadership">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="leadership-title">
                        <h2>Руководство для переезда</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="relocation repeat-col">
                        <div class="foto-relocation">
                            <a href="#">
                                <img src="{{asset('front')}}/img/main/block8/foto1.png" alt="">
                            </a>
                        </div>
                        <div class="descript">
                            <a href="#">Очень длинное название статьи в две строки</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="relocation repeat-col">
                        <div class="foto-relocation">
                            <a href="#">
                                <img src="{{asset('front')}}/img/main/block8/foto2.png" alt="">
                            </a>
                        </div>
                        <div class="descript">
                            <a href="#">Название статьи</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="relocation repeat-col">
                        <div class="foto-relocation">
                            <a href="#">
                                <img src="{{asset('front')}}/img/main/block8/foto3.png" alt="">
                            </a>
                        </div>
                        <div class="descript">
                            <a href="#">Очень длинное название статьи в две строки</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-bottom b-all">
                <a href="#">Узнать больше</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
@endsection
