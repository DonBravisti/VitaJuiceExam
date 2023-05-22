<main>
    <div class="category__header">
        <p>{{$category->category_name}}</p>
    </div>
    @foreach ($products as $item)
    <div class="product_cards">
        <div class="product__card">
            <img src="Front/img/{{$category->eng_category_name}}.png" alt="">
            <a href="">
                <p>{{$item->product_name}}</p>
            </a>
            <p class="product__card-amount">{{$item->volume}}</p>
            <div class="product__card-price">
                <p>{{$item->price}}</p>
                <img src="Front/img/heart.png" alt="">
            </div>
            <button>
                <p>В Корзину</p>
            </button>
        </div>
    </div>
    @endforeach
</main>