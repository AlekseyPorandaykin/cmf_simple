<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <meta name="viewport" content="width=device-width">

    <title>«Элит-мебель»</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <meta name="theme-color" content="#5d473b">
    <meta name="msapplication-navbutton-color" content="#5d473b">
    <meta name="apple-mobile-web-app-status-bar-style" content="#5d473b">

    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="ie.css">
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="cnt">
            <div class="header__left">
                <div class="header__contacts">
                    <span><b>Тверь:</b> <strong>+7 (4822) 41 81 82</strong></span>
                    <span><b>Москва:</b> <strong>+7 (495) 41 81 82</strong></span>
                    <a class="header__call open-popup" href="#modal-call">Заказать<br> обратный звонок</a>
                </div>
            </div>
            <div class="header__right">
                <div class="header__search">
                    <span class="button-search"></span>
                    <div class="search">
                        <form>
                            <input type="text" placeholder="найти: мягкая мебель">
                        </form>
                    </div>
                </div>
                <div class="header__auth">
                    <a href="#">Вход</a> <a href="#">Регистрация</a>
                </div>
                <div class="header__cart">
                    <a href="#">Корзина пуста</a>
                </div>
            </div>
            <div class="header__center">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    @yield("content")

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="cnt">
            <div class="footer__top clearfix">
                <div class="footer__copyright">
                    Все права защищены.<br>
                    © «Элит-мебель», 2015
                    <img src="img/qd.png" alt="">
                </div>
                <div class="footer__menu footer__menu_pos1">
                    <div class="footer__title">Элит-мебель</div>
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Магазины</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menu footer__menu_pos2">
                    <div class="footer__title">Сервис</div>
                    <ul>
                        <li><a href="#">Наличие товара</a></li>
                        <li><a href="#">Возврат товара</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Работа с браком</a></li>
                        <li><a href="#">Кредит</a></li>
                        <li><a href="#">Подъём и установка</a></li>
                        <li><a href="#">Оплата</a></li>
                    </ul>
                </div>
                <div class="footer__menu footer__menu_pos3">
                    <div class="footer__title">Покупателям</div>
                    <ul>
                        <li><a href="#">Акции и скидки</a></li>
                        <li><a href="#">Накопление бонусов</a></li>
                        <li><a href="#">Помощник</a></li>
                        <li><a href="#">Личный каинет</a></li>
                    </ul>
                </div>
                <div class="footer__menu footer__menu_pos4">
                    <div class="footer__title">Партнеры</div>
                    <ul>
                        <li><a href="#">mebelberi.ru</a></li>
                        <li><a href="#">mebel3shop.ru</a></li>
                        <li><a href="#">klimentina.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom clearifx">
                <div class="footer__map">
                    <a href="#">– карта сайта</a>
                </div>
                <div class="footer__payment">
                    – оплата картами
                </div>
                <div class="footer__author">
                    <a href="#"><img src="img/author.png" alt="">– дизайн сайта</a>
                </div>
                <div class="footer__socialize">
                    <a href="#" class="fb"></a>
                    <a href="#" class="vk"></a>
                    <a href="#" class="in"></a>
                    <a href="#" class="yt"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<!-- BEGIN MODALS -->
<div class="modals hidden">
    <div class="modal" id="modal-call">
        <div class="modal__title">Обратный звонок</div>
        <div class="modal__wrap-input">
            <input type="text" class="input" placeholder="Ваше имя">
            <span class="required">*</span>
            <input type="text" class="input" placeholder="Телефон">
            <span class="required">*</span>
        </div>
        <div class="modal__wrap-input">
            <textarea class="textarea" placeholder="Дополнительные сведенья"></textarea>
        </div>
        <div class="modal__button">
            <input type="submit" class="modal__submit" value="Отправить">
        </div>
    </div>
    <div class="modal modal_review" id="modal-review">
        <div class="modal__title">Отзыв о товаре</div>
        <div class="modal__name">Кровать Корсика</div>
        <div class="modal__wrap-input">
            <textarea class="textarea" placeholder="Ваши впечатления о товаре."></textarea>
        </div>
        <div class="modal__wrap-input">
            <input type="text" class="input input_name" placeholder="Ваше имя">
            <input type="text" class="input input_age" placeholder="Возраст">
            <input type="text" class="input input_city" placeholder="Город">
        </div>
        <div class="modal__wrap-rating clearfix">
            Общее впечатление о товаре:
            <div class="modal__rating">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="modal__button">
            <input type="submit" class="modal__submit" value="Готово">
            <span class="modal__thanks">Спасибо!</span>
        </div>
    </div>
</div>
<!-- END MODALS -->

<script src="js/jquery-1.12.0.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scripts.js"></script>
<!--[if lt IE 10]>
<script src="js/placeholder.js"></script>
<![endif]-->
</body>
</html>