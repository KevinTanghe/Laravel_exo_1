<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        @foreach ($store as $item)
                            <span class="section-heading-upper">{{$item->titreHaut}}</span>
                            <span class="section-heading-lower">{{$item->titreBas}}</span>
                        @endforeach
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        @foreach ($store as $item)
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->dimanche}}
                                <span class="ml-auto">{{$item->fermer}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->lundi}}
                                <span class="ml-auto">{{$item->semaine}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->mardi}}
                                <span class="ml-auto">{{$item->semaine}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->mercredi}}
                                <span class="ml-auto">{{$item->semaine}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->jeudi}}
                                <span class="ml-auto">{{$item->semaine}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->vendredi}}
                                <span class="ml-auto">{{$item->semaine}}</span>
                            </li>
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{$item->samedi}}
                                <span class="ml-auto">{{$item->week}}</span>
                            </li>
                        @endforeach
                    </ul>
                    @foreach ($storeInfo as $item)
                        <p class="address mb-5">
                            <em>
                                <strong>{{$item->info1}}</strong>
                                <br>
                                {{$item->info2}}
                            </em>
                        </p>
                        <p class="mb-0">
                            <small>
                                <em>{{$item->info3}}</em>
                            </small>
                            <br>
                            {{$item->info4}}
                        </p>   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
