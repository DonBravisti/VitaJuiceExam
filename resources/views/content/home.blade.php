<main>
    <div class="first__banner">
        <div class="banner__inner">
            <div><img src="Front/img/Banner.png" alt=""></div>
            <!-- <div><img src="Front/img/Banner.png" alt=""></div>
            <div><img src="Front/img/Banner.png" alt=""></div> -->
        </div>
    </div>

    <div class="production">
        <h2>Наша Продукция</h2>
        <div class="production__inner">
            <img src="Front/img/girl with phrase.png" alt="">
            <div class="assortment container">
                @foreach ($categories as $category)
                <div class="assortment-item">
                    <a href="/{{$category->eng_category_name}}">
                        <img src="Front/img/{{$category->eng_category_name}}.png" alt="">
                        <p>{{$category->category_name}}</p>
                    </a>
                </div>
                @endforeach
                <!-- <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/mix.png" alt="">
                        <p>Миксы</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/smuzi.png" alt="">
                        <p>Смузи</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/detox.png" alt="">
                        <p>Детокс</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/lassi.png" alt="">
                        <p>Ласси</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/boul.png" alt="">
                        <p>Боулы</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/salad.png" alt="">
                        <p>Салаты</p>
                    </a>
                </div>
                <div class="assortment-item">
                    <a href="">
                        <img src="Front/img/healthy food.png" alt="">
                        <p>Здоровая еда</p>
                    </a>
                </div> -->
            </div>
        </div>
    </div>

    <div class="bestsellers container">
        <h2>Хиты продаж</h2>
        <div class="product__cards">
            <div class="product__card">
                <img src="Front/img/lassi 2.png" alt="">
                <a href="">
                    <p>Ласси</p>
                </a>
                <p class="product__card-amount">500 мл</p>
                <div class="product__card-price">
                    <p>375₽</p>
                    <img src="Front/img/heart.png" alt="">
                </div>
                <button>
                    <p>В Корзину</p>
                </button>
            </div>
            <div class="product__card">
                <img src="Front/img/lassi 2.png" alt="">
                <a href="">
                    <p>Ласси</p>
                </a>
                <p class="product__card-amount">500 мл</p>
                <div class="product__card-price">
                    <p>375₽</p>
                    <img src="Front/img/heart.png" alt="">
                </div>
                <button>
                    <p>В Корзину</p>
                </button>
            </div>
            <div class="product__card">
                <img src="Front/img/lassi 2.png" alt="">
                <a href="">
                    <p>Ласси</p>
                </a>
                <p class="product__card-amount">500 мл</p>
                <div class="product__card-price">
                    <p>375₽</p>
                    <img src="Front/img/heart.png" alt="">
                </div>
                <button>
                    <p>В Корзину</p>
                </button>
            </div>
        </div>
    </div>

    <div class="delivery">
        <h2>Доставка и оплата</h2>
        <div class="delivery__content">
            <div class="delivery__inner container">
                <h3>Зона доставки</h3>
                <div class="delivery__advantages delivery__vars">
                    <div>
                        <span></span>
                        <p>Минимальная сумма заказа 500 руб.</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Минимальная сумма заказа 750 руб.</p>
                    </div>
                    <div>
                        <span></span>
                        <p>Минимальная сумма заказа 1000 руб.</p>
                    </div>
                </div>
                <img src="Front/img/map.png" alt="">
                <h3>Варианты оплаты</h3>
                <div class="delivery__vars">
                    <div>
                        <img src="Front/img/cash.png" alt="">
                        <p>Наличными</p>
                        <p>Оплата наличными курьеру или при получении заказа</p>
                    </div>
                    <div>
                        <img src="Front/img/card.png" alt="">
                        <p>Картой</p>
                        <p>Оплата банковской картой курьеру при получение заказа</p>
                    </div>
                    <div>
                        <img src="Front/img/online.png" alt="">
                        <p>Онлайн оплата</p>
                        <p>Безопасная и удобная оплата заказ на сайте.</p>
                    </div>
                </div>
                <h3>Способы доставки</h3>
                <div class="delivery__vars">
                    <div>
                        <img src="Front/img/carrier.png" alt="">
                        <p>Курьером</p>
                        <p>Вы оплачиваете только заказ, доставка — бесплатно</p>
                    </div>
                    <div>
                        <img src="Front/img/pickup.png" alt="">
                        <p>Самовывоз</p>
                        <p>Можете сами забрать заказ, указав это при оформлении заказа.</p>
                    </div>
                </div>
            </div>
            <div class="delivery__img">
                <img src="Front/img/delivery guy.png" alt="">
            </div>
        </div>
    </div>

    <div class="loyalty container">
        <h2>Наша система лояльности</h2>
        <div class="loyalty-inner">
            <img src="Front/img/virtual card.png" alt="">
            <div class="program">
                <p>С картой вы получите</p>
                <div class="program-items">
                    <div>
                        <img src="Front/img/phone.png" alt="">
                        <p>Всегда рядом в вашем телефоне</p>
                    </div>
                    <div>
                        <img src="Front/img/gift.png" alt="">
                        <p>Участвуй в акциях и получай подарки</p>
                    </div>
                    <div>
                        <img src="Front/img/drink.png" alt="">
                        <p>Каждый 5-й напиток бесплатно</p>
                    </div>
                </div>
                <div class="arrange">
                    <p>Хотите оформить?</p>
                    <button>
                        <p>Получить</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>