<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/intro.jpg')}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    @foreach ($presentation as $item)
                        <span class="section-heading-upper">{{$item->titreHaut}}</span>
                        <span class="section-heading-lower">{{$item->titreBas}}</span>
                    @endforeach
                </h2>
                @foreach ($presentationText as $item)
                    <p class="mb-3">{{$item->texte}}
                    </p>
                @endforeach
                <div class="intro-button mx-auto">
                    @foreach ($presentationBTN as $item)
                        <a class="btn btn-primary btn-xl" href="#">{{$item->button}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
