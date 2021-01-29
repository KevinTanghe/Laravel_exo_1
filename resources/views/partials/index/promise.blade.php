<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        @foreach ($promise as $item)
                            <span class="section-heading-upper">{{$item->titreHaut}}</span>
                            <span class="section-heading-lower">{{$item->titreBas}}</span> 
                        @endforeach
                    </h2>
                    @foreach ($promiseText as $item)
                        <p class="mb-0">{{$item->texte}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
