<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Front/css/style.css">
    <title>Vita juice</title>
</head>

<body>
    <header>
        <div class="container header">
            <img src="Front/img/logo.png" alt="logo" class="logo">
            <div class="levels">
                <div class="first-level">
                    <div class="region">
                        <img src="Front/img/region.png" alt="">
                        <p>Ваш регион</p>
                    </div>
                    <ul class="first-level__items">
                        <li>
                            <div class="basket">
                                <p>Корзина</p>
                                <img src="Front/img/basket.png" alt="basket">
                            </div>
                        </li>
                        <li>
                            <div class="log-in">
                                <p>Войти</p>
                                <img src="Front/img/log in.png" alt="log-in">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="second-level">
                    <ul class="categories">
                        <li class="category">
                            <a href="">
                                <p>Соки</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Миксы</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Смузи</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Ласси</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Детокс</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Боулы</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Салаты</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="category">
                            <a href="">
                                <p>Здоровая еда</p>
                                <span></span>
                            </a>
                        </li>
                    </ul>

                    <ul class="header__links">
                        <li class="header__link">
                            <a href="">
                                <p>О нас</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="header__link">
                            <a href="">
                                <p>Франшиза</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="header__link">
                            <a href="">
                                <p>Контакты</p>
                                <span></span>
                            </a>
                        </li>
                        <li class="header__link">
                            <a href="">
                                <p>Работа</p>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>
@yield('content')
    <footer>
        <div class="level-1 container">
            <p class="level-1__header">Правовая информация</p>
            <div class="level-1__content">
                <p>Все права пренадлежат<br>
                    ООО «Компания Вита Джус»<br>
                    ИНН 12456789/ОГРН123456789833
                </p>
                <ul class="law-items">
                    <div>
                        <li>
                            <a href="">
                                <p>Публичная оферта</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>Политика конфиденциальности</p>
                            </a>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="">
                                <p>Пользовательское соглашение</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>Бонусная программа</p>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="level-2">
            <div class="level-2__content container">
                <p class="join__label">присоединяйтесь к vita juice</p>
                <div class="shortcuts">
                    <a href=""><img src="Front/img/vk.png" alt=""></a>
                    <a href=""><img src="Front/img/instagram 2.png" alt=""></a>
                    <a href=""><img src="Front/img/facebook.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>