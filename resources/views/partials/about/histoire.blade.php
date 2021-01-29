<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/about.jpg')}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            @foreach ($histoire as $item)
                                <span class="section-heading-upper">{{$item->titreHaut}}</span>
                                <span class="section-heading-lower">{{$item->titreBas}}</span>
                            @endforeach
                        </h2>
                        @foreach ($histoireText as $item)
                            <p>{{$item->firstText}}</p>
                            <p class="mb-0">{{$item->secondText}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
