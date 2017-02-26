@extends('main')

@section('title','Events')

@section('current_page')
    <?php $current_page = 'events'?>
@endsection

@section('content')

    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/events.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">Evénements</div>
                    <div class="sub-title">Infrastructures et professionnels à votre service</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="/{{ App::getLocale() }}">Accueil</a></li>
                    <li class="current"><a href="{{ url($current_page.'/'.App::getLocale()) }}">Evénements</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

    <section class="events_section">
        <div class="inner-container container">
            <div class="t-sec">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Du petit-déjeuner au menu gastronomique, du séminaires au mariage.<br>
                                en passant par le buffet business ou la pause-café, du sur mesure pour tous événements.</p>
                            <p>Notre équipe de professionnel se tient à votre disposition pour vous assister,<br>
                                vous conseiller et vous établir une offre sur mesure.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">Evènement Privé</p>
                            <p>L’engagement qualité est de n’utiliser que des produits frais et de saison pour toutes vos manifestations.<br>
                                Grâce à cette garantie fraîcheur, vos réceptions pourront bénéficier des produits les plus nobles du marché.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Tour -->
    <section id="video-tour" data-bg-img="/img/video.jpg">
        <div class="inner-container container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="ravis-title">
                        <div class="inner-box">
                            <div class="title">Vos évènements sur mesure</div>
                            <div class="sub-title">Vos rêves deviennent réalité</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row btn-box">
                <!--<a href="http://www.youtube.com/watch?v=23BFVDEdi-0" class="play-btn video-url">-->
                <!--<i class="fa fa-play"></i>-->
                <!--</a>-->
                <a href="/video/events.MOV" class="play-btn video-url">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End of Video Tour -->

    <section class="events_section">
        <div class="inner-container container">
            <div class="t-sec">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/forfaits_boissons_apritif.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Forfait apéritif (PDF)</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/forfaits_amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Forfait Amuse-Bouches  (PDF)</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Carte amuse bouche  (PDF)</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/forfait_boissons.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Forfait boissons  (PDF)</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/carte_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Carte banquet  (PDF)</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/menus_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Menu banquet  (PDF)</a><br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">Mariage</p>
                            <div class="col-xs-12 col-sm-4 col-md-4 margin_bottom_15">
                                <img src="/img/events/1.jpg" alt="" style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 margin_bottom_15">
                                <img src="/img/events/2.jpg" alt=""  style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <img src="/img/events/3.jpg" alt=""  style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p>Vos rêves deviennent réalité pour un jour inoubliable.<br>
                                Le cocktail du mariage débute dans nos jardins, pieds dans l’eau.<br>
                                La réception se déroule dans une des salles ou salons de notre restaurant face au lac.<br>
                                Et la fin de soirée dansantes se prolongent au bar privatisable.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="/pdf/forfait_mariage.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>Forfait Mariage (PDF)</a><br><br>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="/pdf/cgv_mariage.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>CGV (PDF)</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">Evènement Professionnels</p>
                            <p>Un lieu propice à la création et à la réflexion.<br>
                                La Fleur du Lac offre une ambiance parfaite pour le bon déroulement de vos séminaires et conférences.<br>
                                Notre savoir-faire et expérience sont mis à votre disposition pour une organisation sans faute.</p>
                            <p><i class="fa fa-wifi" aria-hidden="true"></i> WIFI GRATUIT</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">Capacités Salles</p>
                            <p>La Fleur du Lac propose un large choix de salles de réunion ou de restauration, modulables et privatisables.</p>
                            <div class="table_container">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Restaurant</th>
                                        <th>Veranda</th>
                                        <th>Salon d’or</th>
                                        <th>Café des amis</th>
                                        <th>Salon des Fleurs</th>
                                        <th>Bar</th>
                                        <th>Lobby</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>14,10x7,70<br>
                                            H : 2,50
                                        </td>
                                        <td>14,70 x 5<br>
                                            H : 2,20
                                        </td>
                                        <td>9 x 5,70<br>
                                            H : 2,70
                                        </td>
                                        <td>5,70 x 3,90<br>
                                            H : 2,50
                                        </td>
                                        <td>10,60 x 5,50<br>
                                            H : 2,47
                                        </td>
                                        <td>8,80 x 4</td>
                                        <td>8,80 x 6,70<br>
                                            H : 2,50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Théatre</td>
                                        <td>150</td>
                                        <td></td>
                                        <td>30</td>
                                        <td></td>
                                        <td>60 pers.</td>
                                        <td rowspan="5">40 max</td>
                                        <td rowspan="5">50 max</td>
                                    </tr>
                                    <tr>
                                        <td>U</td>
                                        <td>40</td>
                                        <td>56</td>
                                        <td>16</td>
                                        <td></td>
                                        <td>24 pers.</td>
                                    </tr>
                                    <tr>
                                        <td>Classe</td>
                                        <td>70</td>
                                        <td></td>
                                        <td>16</td>
                                        <td>25</td>
                                        <td>30 pers.</td>
                                    </tr>
                                    <tr>
                                        <td>Epi</td>
                                        <td>60</td>
                                        <td>80</td>
                                        <td>35</td>
                                        <td></td>
                                        <td>24 pers.</td>
                                    </tr>
                                    <tr>
                                        <td>Table Royale</td>
                                        <td>40</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>15</td>
                                        <td>30 pers.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection