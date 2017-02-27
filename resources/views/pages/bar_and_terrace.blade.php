@extends('main')

@section('title','Bar and Terrace')

@section('current_page')
    <?php $current_page = 'bar_and_terrace'?>
@endsection

@section('content')  
    
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/bar_and_terrace.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">Bar et Terrasses</div>
                    <div class="sub-title">Détente entre lac et montagne</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">Accueil</a></li>
                    <li class="current"><a href="{{ route('bar_and_terrace.locale') }}">Bar et Terrasses</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

    <!--Restaurant Menu Section-->
    <section id="restaurant-menus">
        <div class="inner-container container">
            <div class="t-sec">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">Ambiance & convivialité dans un décor chic & cosy</p>
                            <p>Dans le charme retro des pubs anglais, décor boisé, lumière tamisée, fauteuils Chesterfield.<br>
                                Point de rencontre de la region morgienne et lieux de detente pour les collaborateurs des sociétés vaudoises.<br>
                                La journée, pour un café après une promenade matinale au bord du lac ou un rendez-vous professionnel.<br>
                                Le soir, musique lounge accompagnant un large choix de vins, cocktails et spiritueux.<br>
                                Tous les dimanches, choix de pâtisseries maison ou d’en-cas salés.<br>
                                Ouvert tous les jours de 10h à minuit.</p>
                        </div>
                        <div class="col-xs-6">
                            <img src="/img/bar_and_terrace/1.jpg" alt="" style="width: 100%; margin-top: 20px">
                        </div>
                        <div class="col-xs-6">
                            <img src="/img/bar_and_terrace/2.jpg" alt=""  style="width: 100%; margin-top: 20px">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">Jardin, Terrasses et ponton privé</p>
                            <p> Au beaux jours les terrasses du bar et du restaurant offrent un panorama époustouflant.<br>
                                Jardin et espaces de détente extérieurs sont à votre disposition pour un instant de bien-être orienté plein sud.<br>
                                Accès direct à notre établissement par bateau via notre ponton privé. Merci de téléphoner pour réservation.</p>
                        </div>
                        <div class="col-xs-6">
                            <img src="/img/bar_and_terrace/3.jpg" alt="" style="width: 100%; margin-top: 20px">
                        </div>
                        <div class="col-xs-6">
                            <img src="/img/bar_and_terrace/4.jpg" alt=""  style="width: 100%; margin-top: 20px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End of Restaurant Menu Section-->

@endsection    