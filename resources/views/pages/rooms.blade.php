@extends('main')

@section('title','Chambres')

@section('current_page')
    <?php $current_page = 'rooms'?>
@endsection

@section('content')
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/rooms.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">Chambres</div>
                    <div class="sub-title">Vivez au bord de l’eau</div>
                </div>
            </div>
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">Accueil</a></li>
                    <li class="current"><a href="{{ route('rooms.locale') }}">Chambres</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

    <!--Room Section-->
    <section id="rooms-section" class="row-view">
        <div class="inner-container container">
            <div class="ravis-title-t-2">
                <div class="title"><span>Confort et services dans un cadre idyllique</span></div>
            </div>
            <div class="desc">
                Orienté plein sud, 30 chambres avec vue et balcon pour une étape ou un long séjour.<br>
                La Fleur du Lac ****, hotel de charme suisse vous offre.<br>
                tous les services et les équipements nécessaires à votre confort.
            </div>

            <div class="room-container clearfix">
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="/img/rooms/single_main.jpg">
                        <div class="gallery">
                            <a href="/img/rooms/single_main.jpg" class="more-info-url"></a>
                            <a href="/img/rooms/single_bath.jpg"></a>
                        </div>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Single (15-20 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">Tarif (petit déjeuner inclus) :</div>
                                    <div class="value">Chf 175.-/nuit (1 personne)</div>
                                </div>
                                <div class="price">
                                    <div class="title">Taxe de séjour :</div>
                                    <div class="value">Chf 3.-/adulte</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            Pour une étape au cœur de la riviera vaudoise.
                            Tous les services et les équipements d’un hôtel 4 étoiles suisse pour votre confort.
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">Lit :</div>
                                        <div class="value">80x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Equipement :</div>
                                        <div class="value">produits d’accueil, sèche-cheveux, minibar gratuit, coffre-fort, balcon vue lac 7 m<sup>2</sup></div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Services :</div>
                                        <div class="value">
                                            <ul class="services_icons">
                                                <li>
                                                    <img src="/img/icons/wifi.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/tv.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/24h_service.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/roomservice2.svg" alt="TV">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--										<li class="col-md-12">-->
                                    <!--											<div class="title">Sur demande :</div>-->
                                    <!--											<div class="value">Peignoir, fer et planche à repasser</div>-->
                                    <!--										</li>-->
                                </ul>
                            </div>
                            <div class="reservation_btn_container">
                                <a href="#" class="more-info">Réservez maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-container clearfix">
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="/img/rooms/standart_main.jpg">
                        <div class="gallery">
                            <a href="/img/rooms/standart_main.jpg" class="more-info-url"></a>
                            <a href="/img/rooms/standart_main2.jpg"></a>
                            <a href="/img/rooms/standart_bath.jpg"></a>
                        </div>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Standard (20-30 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">Tarifs (petit déjeuner inclus) :</div>
                                    <div class="value">Chf 225.-/nuit (1 personne)</div>
                                    <div class="value">Chf 270.-/nuit (2 personnes)</div>
                                </div>
                                <div class="price">
                                    <div class="title">Taxe de séjour :</div>
                                    <div class="value">Chf 3.-/adulte</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            Pour un séjour romantique ou familiale dans un cadre idyllique et avec un large choix d’activités sportives et culturelles.
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">Lit :</div>
                                        <div class="value">QUEEN 160x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Equipement :</div>
                                        <div class="value">Plateau de courtoisie (thé et café), produits d’accueil, sèche-cheveux,
                                            Pantoufle, peignoir, minibar gratuit, fer et planche à repasser, coffre-fort, balcon vue lac 7 m<sup>2</sup>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Services :</div>
                                        <div class="value">
                                            <ul class="services_icons">
                                                <li>
                                                    <img src="/img/icons/wifi.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/tv.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/24h_service.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/roomservice2.svg" alt="TV">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--										<li class="col-md-12">-->
                                    <!--											<div class="title">Sur demande :</div>-->
                                    <!--											<div class="value">Lits séparés, lit supplémentaire, chambres communicantes</div>-->
                                    <!--										</li>-->
                                </ul>
                            </div>
                            <div class="reservation_btn_container">
                                <a href="#" class="more-info">Réservez maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-container clearfix">
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="/img/rooms/superior_main.jpg">
                        <div class="gallery">
                            <a href="/img/rooms/superior_main.jpg" class="more-info-url"></a>
                            <a href="/img/rooms/superior_main2.jpg"></a>
                            <a href="/img/rooms/superior_bath.jpg"></a>
                        </div>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Supérieures (30-40 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">Tarifs (petit déjeuner inclus) :</div>
                                    <div class="value">Chf 295.-/nuit (1 personne)</div>
                                    <div class="value">Chf 350.-/nuit (2 personnes)</div>
                                </div>
                                <div class="price">
                                    <div class="title">Taxe de séjour :</div>
                                    <div class="value">Chf 3.-/adulte</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            Dans un cadre idyllique, calme et sérénité au programme de votre séjour. Toute notre équipe se met à votre disposition pour un service personnalisé.
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">Lit :</div>
                                        <div class="value">QUEEN 160x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Equipement :</div>
                                        <div class="value">Plateau de courtoisie (thé et café), produits d’accueil, sèche-cheveux, pantoufle, peignoir, minibar gratuit, coffre-fort, fer et planche à repasser, terrasse vue lac 15 m<sup>2</sup>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Services :</div>
                                        <div class="value">
                                            <ul class="services_icons">
                                                <li>
                                                    <img src="/img/icons/wifi.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/tv.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/24h_service.svg" alt="TV">
                                                </li>
                                                <li>
                                                    <img src="/img/icons/roomservice2.svg" alt="TV">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--										<li class="col-md-12">-->
                                    <!--											<div class="title">Sur demande :</div>-->
                                    <!--											<div class="value">lits séparés, lit supplémentaire</div>-->
                                    <!--										</li>-->
                                </ul>
                            </div>
                            <div class="reservation_btn_container">
                                <a href="#" class="more-info">Réservez maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="room-container clearfix">
                <div class="room-box row animated-box" data-animation="fadeInUp">
                    <div class="col-md-4 room-img" data-bg-img="/img/rooms/packromance.jpg">
                        <div class="gallery">
                            <a href="/img/rooms/packromance.jpg" class="more-info-url"></a>
                        </div>
                    </div>
                    <div class="r-sec col-md-8">
                        <div class="col-md-6 m-sec">
                            <div class="title-box">
                                <div class="title">Pack Week-end Romance</div>
                                <div class="price">
                                    <div class="title">Tarif (petit déjeuner inclus) :</div>
                                    <div class="value">Chf 690.- / Week end pour 2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">Valable jusqu’au 24 Avril 2017 (selon disponibilité)<br>
                            Pour une arrivée vendredi ou samedi</div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">Hotel :</div>
                                        <div class="value">2 nuits pour 2 personnes en chambre supérieure vue lac et petits déjeuners</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Bar :</div>
                                        <div class="value">2 Apéritifs servis au bar </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">Restaurant :</div>
                                        <div class="value">1 Repas Menu Dégustation avec vin, 1 Repas à la carte au choix</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="reservation_btn_container">
                                <a href="#" class="more-info">Réservez maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('scripts')

    <script>
        //        $('.room-img a').magnificPopup({
        //            type:'image',
        //			gallery: {
        //				enabled:true
        //			}
        //        });
        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                }
            });
        });
    </script>

@endsection
