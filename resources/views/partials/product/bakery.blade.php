<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                        @foreach ($bakery as $item)
                            <span class="section-heading-upper">{{$item->titreHaut}}</span>
                            <span class="section-heading-lower">{{$item->titreBas}}</span>  
                        @endforeach
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/products-02.jpg')}}"
                alt="">
            <div class="product-item-description d-flex ml-auto">
                <div class="bg-faded p-5 rounded">
                    @foreach ($bakeryText as $item)
                        <p class="mb-0">{{$item->texte}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
