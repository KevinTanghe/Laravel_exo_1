<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                        @foreach ($world as $item)
                            <span class="section-heading-upper">{{$item->titreHaut}}</span>
                            <span class="section-heading-lower">{{$item->titreBas}}</span>
                        @endforeach
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/products-03.jpg')}}"
                alt="">
            <div class="product-item-description d-flex mr-auto">
                <div class="bg-faded p-5 rounded">
                    @foreach ($worldText as $item)
                        <p class="mb-0">{{$item->texte}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
