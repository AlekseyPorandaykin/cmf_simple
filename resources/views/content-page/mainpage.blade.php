@extends('content-page.index')
@section('content')
    <!-- BEGIN MAIN -->
    <div class="main">
        <div class="cnt">Уникальная мебель из Италии</div>
    </div>
    <!-- END MAIN -->
    <!-- BEGIN NAV -->
    <div class="nav">
        <div class="cnt">
            <ul>
                <li><a href="#">Гостинная</a></li>
                <li class="parent">
                    <a href="#">Спальня</a>
                    <ul>
                        <div class="nav__column">
                            <li><a href="#">Гостинные стенки <span>56</span></a></li>
                            <li><a href="#">Шкафы для посуды <span>56</span></a></li>
                            <li><a href="#">Журнальные столы <span>56</span></a></li>
                            <li><a href="#">Тумбы под телевизор <span>56</span></a></li>
                            <li><a href="#">Консоли <span>56</span></a></li>
                        </div>
                        <div class="nav__column">
                            <li><a href="#">Стеллажи <span>56</span></a></li>
                            <li><a href="#">Буфеты <span>56</span></a></li>
                            <li><a href="#">Комоды дизайнерские <span>56</span></a></li>
                            <li><a href="#">Декоративные камины <span>56</span></a></li>
                            <li><a href="#">Навесные потолки <span>56</span></a></li>
                        </div>
                        <div class="nav__column">
                            <li><a href="#">Матрассы с пражинами <span>56</span></a></li>
                            <li><a href="#">Матриссы безпружанные <span>56</span></a></li>
                            <li><a href="#">Детские матрассы <span>56</span></a></li>
                            <li><a href="#">Подушки для сна <span>56</span></a></li>
                        </div>
                    </ul>
                </li>
                <li><a href="#">Прихожая</a></li>
                <li><a href="#">Кабинет</a></li>
                <li><a href="#">Диваны</a></li>
                <li><a href="#">Кресла и пуфы</a></li>
                <li><a href="#">Стол и стулья</a></li>
                <li><a href="#">Матрасы</a></li>
                <li><a href="#">Аксессуары</a></li>
                <li><a href="#">Ротонг и плетение</a></li>
            </ul>
        </div>
    </div>
    <!-- END NAV -->

    <div class="cnt">
        <!-- BEGIN VIDEO -->
        <div class="video active clearfix">
            <div class="video__video">
                <a href="#"><img src="img/video.jpg" alt=""></a>
            </div>
            <div class="video__info">
                <div class="video__title">Хиты продаж</div>
                <a href="#" class="video__more">Популярые товары</a>
            </div>
        </div>
        <!-- END VIDEO -->

        <!-- BEGIN HIT -->
        <div class="hit clearfix">
            <div class="hit__slider">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="hit__item">
                            <img src="img/hit.jpg" alt="">
                            <div class="hit__label">
                                Хит продаж
                            </div>
                            <div class="hit__block clearfix">
                                <div class="hit__description">
                                    <div class="hit__name">Гостиная Наполи М. Компоновка 6</div>
                                    <div class="hit__sire">Гостиная Наполи М. Компоновка 6</div>
                                </div>
                                <div class="hit__price">
                                    38 789 руб.
                                    <s>56 908 руб.</s>
                                </div>
                                <div class="hit__buttons">
                                    <a href="#" class="hit__detail"></a>
                                    <a href="#" class="hit__add"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hit__item">
                            <img src="img/hit.jpg" alt="">
                            <div class="hit__label">
                                Хит продаж
                            </div>
                            <div class="hit__block clearfix">
                                <div class="hit__description">
                                    <div class="hit__name">Гостиная Наполи М. Компоновка 6</div>
                                    <div class="hit__sire">Гостиная Наполи М. Компоновка 6</div>
                                </div>
                                <div class="hit__price">
                                    38 789 руб.
                                    <s>56 908 руб.</s>
                                </div>
                                <div class="hit__buttons">
                                    <a href="#" class="hit__detail"></a>
                                    <a href="#" class="hit__add"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hit__item">
                            <img src="img/hit.jpg" alt="">
                            <div class="hit__label">
                                Хит продаж
                            </div>
                            <div class="hit__block clearfix">
                                <div class="hit__description">
                                    <div class="hit__name">Гостиная Наполи М. Компоновка 6</div>
                                    <div class="hit__sire">Гостиная Наполи М. Компоновка 6</div>
                                </div>
                                <div class="hit__price">
                                    38 789 руб.
                                    <s>56 908 руб.</s>
                                </div>
                                <div class="hit__buttons">
                                    <a href="#" class="hit__detail"></a>
                                    <a href="#" class="hit__add"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hit__info">
                <div class="hit__title">О компании</div>
                <a href="#" class="hit__more">Видео презентация</a>
            </div>
        </div>
        <!-- END HIT -->

        <!-- BEGIN SERIES -->
        <div class="series clearfix">
            <div class="series__block">
                <div class="clearfix">

                    <div class="series__left">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="series__mini active" data-eq="0">
                                    <img src="img/s1.jpg" alt="">
                                    <div><span>Комоды Industrial Chic</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="series__mini" data-eq="1">
                                    <img src="img/s2.jpg" alt="">
                                    <div><span>Спальня Юлиана МиК</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="series__mini" data-eq="2">
                                    <img src="img/s3.jpg" alt="">
                                    <div><span>Столики-Часы Ariva</span></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="series__mini" data-eq="3">
                                    <img src="img/s1.jpg" alt="">
                                    <div><span>Комоды Industrial Chic</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="series__right">
                        <div class="series__slider active">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Комоды<br> INDUSTRIAL CHIC</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Комоды<br> INDUSTRIAL CHIC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="series__slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Спальня Юлиана МиК</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Спальня Юлиана МиК</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="series__slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Столики-Часы Ariva</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Столики-Часы Ariva</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="series__slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Комоды<br> INDUSTRIAL CHIC</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="series__big">
                                        <img src="img/series.jpg" alt="">
                                        <div>
                                            <span>Комоды<br> INDUSTRIAL CHIC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="series__info">
                <div class="series__title">Популярные серии</div>
                <a href="#" class="series__more">Все фибрики</a>
            </div>
        </div>
        <!-- END SERIES -->

        <div class="clearfix">
            <!-- BEGIN DEALS -->
            <div class="deals">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="deals__item">
                            <img src="img/deal.jpg" alt="">
                            <div class="deals__label">Спецпредложение</div>
                            <div class="deals__price">38 789 руб.</div>
                            <div class="deals__block clearfix">
                                <div class="deals__left">
                                    <div class="deals__name">Гладильный комод Ariva-204</div>
                                    <div class="deals__sire">Производитель:Ariva</div>
                                </div>
                                <div class="deals__right">
                                    <a href="#" class="deals__detail"></a>
                                    <a href="#" class="deals__add"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="deals__item">
                            <img src="img/deal.jpg" alt="">
                            <div class="deals__label">Спецпредложение</div>
                            <div class="deals__price">38 789 руб.</div>
                            <div class="deals__block clearfix">
                                <div class="deals__left">
                                    <div class="deals__name">Гладильный комод Ariva-204</div>
                                    <div class="deals__sire">Производитель:Ariva</div>
                                </div>
                                <div class="deals__right">
                                    <a href="#" class="deals__detail"></a>
                                    <a href="#" class="deals__add"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DEALS -->
            <!-- BEGIN NEWS -->
            <div class="news">
                <div class="news__title">Новости/акции</div>
                <div class="news__items">
                    <div class="news__item">
                        <div class="news__name">
                            <a href="#">Зимние скидки</a>
                        </div>
                        <div class="news__date">28.02.2015</div>
                        <div class="news__description">
                            Интересуют скидки на мебель в Твери?
                            Получи персональную скидку на мебель от
                            нашего магазина!
                        </div>
                    </div>
                    <div class="news__item">
                        <div class="news__name">
                            <a href="#">Новые поступдения<br> в элит-мебель</a>
                        </div>
                        <div class="news__date">28.02.2015</div>
                        <div class="news__description">
                            Интересуют скидки на мебель в Твери?
                            Получи персональную скидку на мебель от
                            нашего магазина!
                        </div>
                    </div>
                </div>
                <div class="news__all">
                    <a href="#">Все новости</a>
                </div>
            </div>
            <!-- END NEWS -->
            <!-- BEGIN SERVICE -->
            <div class="service">
                <div class="service__client">
                    <span>Стать<br>постоянным<br> клиентом</span>
                    <a href="#">Преимущества</a>
                </div>
                <div class="service__managers">
                    <div class="service__title">С вами работают:</div>
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="service__item clearfix">
                                <img src="img/manager.png" alt="">
                                <div>
                                    Петрова
                                    Светлана
                                    <span>Менеджер</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service__item clearfix">
                                <img src="img/manager.png" alt="">
                                <div>
                                    Петрова
                                    Светлана
                                    <span>Менеджер</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services__all">
                        <a href="#">все работники</a>
                    </div>
                </div>
            </div>
            <!-- END SERVICE -->
        </div>

        <!-- BEGIN EXPOSURE -->
        <div class="exposure clearfix">
            <div class="exposure__blocks clearfix">
                <a href="#">
                    <img src="img/e1.jpg" alt="">
                    <span>Стол журнальный Варьете-5</span>
                </a>
                <a href="#">
                    <img src="img/e2.jpg" alt="">
                    <span>Стол журнальный Элегант</span>
                </a>
                <a href="#">
                    <img src="img/e3.jpg" alt="">
                    <span>Стол журнальный Элегант</span>
                </a>
            </div>
            <div class="exposure__info">
                <div class="exposure__title">Товары в экспозиции</div>
                <a href="#" class="exposure__more">Товары в наличии</a>
            </div>
        </div>
        <!-- END EXPOSURE -->

        <!-- BEGIN ADVANTAGES -->
        <div class="advantages clearfix">
            <div class="advantages__item advantages__item_pos1">
                <img src="img/a1.png" alt=""> <span>Безналичная<br> оплата</span>
            </div>
            <div class="advantages__item advantages__item_pos2">
                <img src="img/a2.png" alt=""> <span>Гарантия 24<br> месяца</span>
            </div>
            <div class="advantages__item advantages__item_pos3">
                <img src="img/a3.png" alt=""> <span>Сроки доставки<br>  от 5 дней!</span>
            </div>
            <div class="advantages__item advantages__item_pos4">
                <img src="img/a4.png" alt=""> <span>Цены ниже<br>  на 10-15%</span>
            </div>
            <div class="advantages__item advantages__item_pos5">
                <img src="img/a5.png" alt=""> <span>Доставка по всей<br>  территории РФ</span>
            </div>
        </div>
        <!-- END ADVANTAGES -->

        <!-- BEGIN KEYWORDS -->
        <div class="keywords">
            <ul>
                <li><a href="#">Лагуна (Барановичи, Брестская обл.)</a></li>
                <li><a href="#">Домотека</a></li>
                <li><a href="#">Zoom Mebel</a></li>
                <li><a href="#">Астрон</a></li>
                <li><a href="#">Дебют</a></li>
                <li><a href="#">Кострома-Мебель</a></li>
                <li><a href="#">Мебель-Москва</a></li>
                <li><a href="#">Орматек</a></li>
                <li><a href="#">Заречье</a></li>
                <li><a href="#">Три Я</a></li>
                <li><a href="#">Азбука Мебели</a></li>
                <li><a href="#">Новый Стиль</a></li>
                <li><a href="#">Armos</a></li>
                <li><a href="#">Торговля и сервис</a></li>
                <li><a href="#">Багратион</a></li>
                <li><a href="#">Анкор</a></li>
                <li><a href="#">Лером</a></li>
                <li><a href="#">Tomas</a></li>
                <li><a href="#">38 попугаев (Ижевск)</a></li>
                <li><a href="#">Глазовская мебельная фабрика</a></li>
                <li><a href="#">BRW (Gerbor)</a></li>
                <li><a href="#">М - Стиль</a></li>
                <li><a href="#">Мебелик</a></li>
                <li><a href="#">Юта</a></li>
                <li><a href="#">Виталь</a></li>
                <li><a href="#">Малина (Ижевск)</a></li>
                <li><a href="#">Экодизайн</a></li>
                <li><a href="#">Фран</a></li>
                <li><a href="#">Протон</a></li>
                <li><a href="#">Альтерия</a></li>
            </ul>
        </div>
        <!-- END KEYWORDS -->
    </div>
@endsection