@extends('main')

@section('title','La Fleur du Lac')

@section('current_page')
    <?php $current_page = 'home'?>
@endsection

@section('content')

    <div class="slider-available-sec">
        <!-- Main Slider -->
        <section id="main-slider">
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/1.jpg"></div>
                <!-- Change the URL section based on your image\'s name -->
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">Vivez au bord du lac Léman</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/2.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">Charme et services pour votre confort</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/3.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">Vos événements entre lac et montagne</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/4.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">Une gastronomie qui éveille les sens</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/5.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">Détendez-vous face au Mont Blanc</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Main Slider -->
    </div>

    <!--Welcome Section-->
    <section id="welcome-section">
        <div class="inner-container container">
            <div class="l-sec col-md-7">
                <div class="ravis-title-t-1">
                    <div class="title"><span>Hôtel La Fleur du Lac</span></div>
                    <div class="sub-title">Hôtel 4 étoiles de Charme, entre lac et montagne.</div>
                </div>
                <div class="content">
                    <p>Situé à Morges, sur les rives du Lac Léman L’Hotel & Restaurant La Fleur du Lac, bénéficie d’ un cadre idyllique et vous offre un panorama sans pareil sur les Alpes et le majestueux Mont-Blanc.</p>
                    <p>Hotel d’affaire au centre de la cote vaudoise, idéal pour vos séjours professionnels à seulement 15 min. de Lausanne et 30 min. de Genève et Montreux.</p>
                    <p>Hotel familial également , avec chambres communicantes et large choix d’activités sportives, culturelles et détente.<br>
                        Côté lac : voile, pédalos, baignades, croisières en bateaux à vapeur ou sur la galère.<br>
                        Côté montagne : randonnées pédestres dans le vignoble, balades à bicyclette ou en VTT.</p>
                    <p style="font-size: 12px; opacity: 0.7">Enfin, Hotel de charme suisse pour des week-end romantiques dans le confort et la sérénité.</p>
                </div>
            </div>
            <div class="r-sec col-md-5">
                <img src="/img/welcome.jpg" alt="Fleur du Lac">
            </div>
        </div>
    </section>
    <!--End of Welcome Section-->

    <!-- Video Tour -->
    <section id="video-tour" data-bg-img="/img/video.jpg">
        <div class="inner-container container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="ravis-title">
                        <div class="inner-box">
                            <div class="title">L’hôtel en vidéo</div>
                            <div class="sub-title">Un petit coin de paradis en Suisse</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row btn-box">
                <!--<a href="http://www.youtube.com/watch?v=23BFVDEdi-0" class="play-btn video-url">-->
                <!--<i class="fa fa-play"></i>-->
                <!--</a>-->
                <a href="/video/homepage.MOV" class="play-btn video-url">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End of Video Tour -->

    <!-- Gallery -->
    <section id="gallery">
        <div class="inner-container container">

            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">Galeries</div>
                    <div class="sub-title">Dans un cadre incroyable, charme et services pour votre confort</div>
                </div>
            </div>

            <!-- Gallery Container -->
            <div class="gallery-container">
                <!--<div class="sort-section">-->
                <!--<div class="sort-section-container">-->
                <!--<div class="sort-handle">Filters</div>-->
                <!--<ul class="list-inline">-->
                <!--<li><a href="#" data-filter="*" class="active">All</a></li>-->
                <!--<li><a href="#" data-filter=".restaurant">Restaurant</a></li>-->
                <!--<li><a href="#" data-filter=".bars">Bars</a></li>-->
                <!--<li><a href="#" data-filter=".pool">Pool</a></li>-->
                <!--<li><a href="#" data-filter=".rooms">Rooms</a></li>-->
                <!--<li><a href="#" data-filter=".lobby">Lobby</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->
                <ul class="image-main-box clearfix">
                    <li class="item col-xs-6 col-md-4 lobby">
                        <figure>
                            <img src="/img/gallery/1.jpg" alt="image 1"/>
                            <a href="/img/gallery/1.jpg" class="more-details"
                               data-title="Débarcadère privé">Enlarge</a>
                            <figcaption>
                                <h4>Débarcadère privé</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 lobby">
                        <figure>
                            <img src="/img/gallery/2.jpg" alt="image 2"/>
                            <a href="/img/gallery/2.jpg" class="more-details"
                               data-title="Terrasses et jardins fleuries">Enlarge</a>
                            <figcaption>
                                <h4>Terrasses et jardins fleuries</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/3.jpg" alt="image 3"/>
                            <a href="/img/gallery/3.jpg" class="more-details" data-title="Un cadre époustouflant pour une gastronomie qui met tous les sens en éveil">Enlarge</a>
                            <figcaption>
                                <h4>Un cadre époustouflant pour une gastronomie qui met tous les sens en éveil</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/4.jpg" alt="image 4"/>
                            <a href="/img/gallery/4.jpg" class="more-details"
                               data-title="La mythique entrecôte sauce Charlemagne">Enlarge</a>
                            <figcaption>
                                <h4>La mythique entrecôte sauce Charlemagne</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 restaurant">
                        <figure>
                            <img src="/img/gallery/5.jpg" alt="image 5"/>
                            <a href="/img/gallery/5.jpg" class="more-details"
                               data-title="Luxury Feelings">Enlarge</a>
                            <figcaption>
                                <h4></h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/6.jpg" alt="image 6"/>
                            <a href="/img/gallery/6.jpg" class="more-details"
                               data-title='Restaurant "La Fleur du Lac" récemment rénové'>Enlarge</a>
                            <figcaption>
                                <h4>Restaurant "La Fleur du Lac" récemment rénové</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/7.jpg" alt="image 7"/>
                            <a href="/img/gallery/7.jpg" class="more-details" data-title="Vue sur lac pour vos réceptions">Enlarge</a>
                            <figcaption>
                                <h4>Vue sur lac pour vos réceptions</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/8.jpg" alt="image 8"/>
                            <a href="/img/gallery/8.jpg" class="more-details" data-title="Jardin pieds dans l'eau pour les grandes occasions">Enlarge</a>
                            <figcaption>
                                <h4>Jardin pieds dans l'eau pour les grandes occasions</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/9.jpg" alt="image 9"/>
                            <a href="/img/gallery/9.jpg" class="more-details"
                               data-title="Notre lobby accueillant">Enlarge</a>
                            <figcaption>
                                <h4>Notre lobby accueillant</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/10.jpg" alt="image 10"/>
                            <a href="/img/gallery/10.jpg" class="more-details"
                               data-title="Business corner pour vos rendez-vous pro">Enlarge</a>
                            <figcaption>
                                <h4>Business corner pour vos rendez-vous pro</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 lobby">
                        <figure>
                            <img src="/img/gallery/11.jpg" alt="image 11"/>
                            <a href="/img/gallery/11.jpg" class="more-details"
                               data-title="Bar Le Galion ">Enlarge</a>
                            <figcaption>
                                <h4>Bar Le Galion</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/12.jpg" alt="image 12"/>
                            <a href="/img/gallery/12.jpg" class="more-details" data-title="Ambiance lounge retro">Enlarge</a>
                            <figcaption>
                                <h4>Ambiance lounge retro</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/13.jpg" alt="image 13"/>
                            <a href="/img/gallery/13.jpg" class="more-details"
                               data-title="Terrasse ensoleillée">Enlarge</a>
                            <figcaption>
                                <h4>Terrasse ensoleillée</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 restaurant">
                        <figure>
                            <img src="/img/gallery/14.jpg" alt="image 14"/>
                            <a href="/img/gallery/14.jpg" class="more-details"
                               data-title="Décor alpin">Enlarge</a>
                            <figcaption>
                                <h4>Décor alpin</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/15.jpg" alt="image 15"/>
                            <a href="/img/gallery/15.jpg" class="more-details" data-title="Un spectacle permanent...">Enlarge</a>
                            <figcaption>
                                <h4>Un spectacle permanent...</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/16.jpg" alt="image 16"/>
                            <a href="/img/gallery/16.jpg" class="more-details" data-title="..renouvelé chaque moment de la journée et au fil des saisons">Enlarge</a>
                            <figcaption>
                                <h4>..renouvelé chaque moment de la journée et au fil des saisons</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/17.jpg" alt="image 17"/>
                            <a href="/img/gallery/17.jpg" class="more-details" data-title="Chambre rénovée">Enlarge</a>
                            <figcaption>
                                <h4>Chambre rénovée</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/18.jpg" alt="image 18"/>
                            <a href="/img/gallery/18.jpg" class="more-details" data-title="Confort et agréments ">Enlarge</a>
                            <figcaption>
                                <h4>Confort et agréments </h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/24.jpg" alt="image 24"/>
                            <a href="/img/gallery/24.jpg" class="more-details" data-title="Lunch convivial">Enlarge</a>
                            <figcaption>
                                <h4>Lunch convivial</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/25.jpg" alt="image 25"/>
                            <a href="/img/gallery/25.jpg" class="more-details" data-title="Mythique">Enlarge</a>
                            <figcaption>
                                <h4>Mythique</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/26.jpg" alt="image 26"/>
                            <a href="/img/gallery/26.jpg" class="more-details" data-title="Café des amis">Enlarge</a>
                            <figcaption>
                                <h4>Café des amis</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/19.jpg" alt="image 19"/>
                            <a href="/img/gallery/19.jpg" class="more-details" data-title="Parking privé de 50 places ">Enlarge</a>
                            <figcaption>
                                <h4>Parking privé de 50 places </h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/20.jpg" alt="image 20"/>
                            <a href="/img/gallery/20.jpg" class="more-details" data-title="Un sentier pittoresque, à fleur d'eau jusqu'à Lausanne">Enlarge</a>
                            <figcaption>
                                <h4>Un sentier pittoresque, à fleur d'eau jusqu'à Lausanne</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/21.jpg" alt="image 21"/>
                            <a href="/img/gallery/21.jpg" class="more-details" data-title="Sans jamais quitter les rives du Lac Léman">Enlarge</a>
                            <figcaption>
                                <h4>Sans jamais quitter les rives du Lac Léman</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/22.jpg" alt="image 212"/>
                            <a href="/img/gallery/22.jpg" class="more-details"
                               data-title="En passant par la conviviale plage de Préverenges, le Lac Léman comme terrain de jeu">Enlarge</a>
                            <figcaption>
                                <h4>En passant par la conviviale plage de Préverenges, le Lac Léman comme terrain de jeu</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/23.jpg" alt="image 23"/>
                            <a href="/img/gallery/23.jpg" class="more-details"
                               data-title="A 15 minutes à pied de Morges, son histoire, sa culture et ses vignobles">Enlarge</a>
                            <figcaption>
                                <h4>A 15 minutes à pied de Morges, son histoire, sa culture et ses vignobles</h4>
                            </figcaption>
                        </figure>
                    </li>
                </ul>

                <!--<a href="pages/gallery-masonry.html" class="gallery-more-btn ravis-btn btn-type-2">More ...</a>-->
            </div>
        </div>
    </section>
    <!-- End of Gallery -->

@endsection

