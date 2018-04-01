@extends('main')

@section('title',trans('lang.restaurant'))

@section('current_page')
    <?php $current_page = 'restaurant'?>
@endsection

@section('content')
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/restaurant.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{ trans('lang.restaurant') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_restaurant') }}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('restaurant.locale') }}">{{ trans('lang.restaurant') }}</a></li>
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
                    <video width="100%" height="auto" controls style="max-width: 600px; margin-bottom: 30px">
                        <source src="/video/restaurant.mp4" type="video/mp4">
                    </video>
                    <p>{!! trans('lang.description_restaurant_1') !!}</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">{{ trans('lang.title_restaurant_1') }}</p>
                    <p>{!! trans('lang.description_restaurant_2') !!}</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">{{ trans('lang.title_restaurant_2') }}</p>
                    <p>{!! trans('lang.description_restaurant_3') !!}
                    </p>
                    <ul class="partners_list">
                        {{--<li class="partner">--}}
                            {{--<a href="http://www.passeport-gourmand.ch/restaurants/detail.php?restaurant=7" target="_blank">--}}
                                {{--<img src="/img/partners/passeport_gourmand.jpg" alt="Passeport Gourmand">--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li class="partner">
                            <a href="https://edenred.ch/fr" target="_blank">
                                <img src="/img/partners/ticket_restaurant.jpg" alt="Ticket Restaurant">
                            </a>
                        </li>
                        <li class="partner">
                            <a href="<?php if(Lang::locale() == 'fr') {echo 'https://module.lafourchette.com/fr_CH/module/282921-b80fb';} else {echo'https://module.lafourchette.com/en_GB/module/282921-b80fb';} ?> " target="_blank">
                                <img src="/img/partners/lafourchette.png" alt="Lafourchette">
                            </a>
                        </li>
                    </ul>

                    <div class="row">
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/forfaits_boissons_apritif.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_1') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/forfaits_amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_2') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_3') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/forfait_boissons.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_4') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/carte_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_5') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/menus_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_6') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/repas_noel.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_9') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/reveillon_noel.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_10') }}</a><br><br>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-4">--}}
                            {{--<a href="/pdf/revelion_du_jour_2018.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_11') }}</a><br><br>--}}
                        {{--</div>--}}
                        <div class="col-xs-12">
                            <a href="/pdf/saint_valentin_menu.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_12') }}</a><br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="b-sec clearfix">
                <div class="col-md-4 tab-container">
                    <a href="#summer_menu-1" class="tab-box active">
                        <span class="title">Carte</span>
                        <span class="sub-title">Sens en éveil</span>
                    </a>
                    <a href="#menu-2" class="tab-box">
                        <span class="title">Carte des vins </span>
                        {{--<span class="sub-title">Tradition revisitée</span>--}}
                    </a>
                    <a href="#summer_menu-3" class="tab-box">
                        <span class="title">Menus</span>
                        <span class="sub-title">Accords parfaits</span>
                    </a>
                    <a href="#menu-4" class="tab-box">
                        <span class="title">Plats du jour</span>
                        <span class="sub-title">Fraicheur quotidienne</span>
                    </a>
                    <a href="#menu-5" class="tab-box">
                        <span class="title">Café des amis</span>
                        <span class="sub-title">Burger bar</span>
                    </a>
                </div>
                <div class="col-md-8 tab-content" data-bg-img="/img/menu-tabs/1.jpg">
                    <div name="summer_carte" class="tab-pane fadeInLeft clearfix active" id="summer_menu-1" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">{{ trans('lang.summer_carte_title_1') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_1') }}</div>
                                        <div class="price">3 huîtres / 6 huîtres / 9 huîtres <br> 15.- / 28.- / 38.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_2') }}</div>
                                        <div class="price">24.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_3') }}</div>
                                        <div class="price">28.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_4') }}</div>
                                        <div class="price">24.-</div>
                                        {{--<div class="price">{{ trans('lang.summer_carte_portion') }} : 20.- / 38.-</div>--}}
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_5') }}</div>
                                        <div class="price">22.-</div>
                                    </div>
{{--                                    <p class="sub_title">{{ trans('lang.summer_carte_sub_name_5') }}</p>--}}
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_6') }}</div>
                                        <div class="price">Entrée / Plat avec frites <br> 22.- / 44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_7') }}</div>
                                        <div class="price">11.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.summer_carte_title_2') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_11') }}</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_12') }}</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_13') }}</div>
                                        <div class="price">48.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_14') }}</div>
                                        <div class="price">48.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_15') }}</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_16') }}</div>
                                        <div class="price">38.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.summer_carte_title_3') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_18') }}</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_19') }}</div>
                                        <div class="price">46.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_20') }}</div>
                                        <div class="price">200gr / 300gr/ 400gr : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_21') }}</div>
                                        <div class="price">200gr : 48.-</div>
                                    </div>
                                </li>
                                {{--<li>--}}
                                    {{--<div class="">--}}
                                        {{--<div class="title main_sub_title">{{ trans('lang.summer_carte_sub_title_3') }}</div>--}}
                                        {{--<p class="sub_title">{{ trans('lang.summer_carte_dish_sub_title_3') }}</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_22') }}</div>
                                        <div class="price">36.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_23') }}</div>
                                        <div class="price">28.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">{{ trans('lang.summer_carte_dish_name_24') }}</div>--}}
                                        {{--<div class="price">58.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">{{ trans('lang.summer_carte_title_4') }}</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">{{ trans('lang.summer_carte_dish_name_25') }}</div>--}}
                                        {{--<div class="price">12.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                <li>
                                    <div class="title main_title">{{ trans('lang.summer_carte_title_5') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_26') }}</div>
                                        <div class="price">16.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_26_1') }}</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_27') }}</div>
                                        <div class="price">12.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_28') }}</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_29') }}</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.summer_carte_dish_name_30') }}</div>
                                        <div class="price">15.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                            </ul>

                            <p style="margin-top: 20px; text-align: center">{!! trans('lang.summer_carte_add_info_1') !!}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_2') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_3') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_4') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_5') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_6') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_7') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_8') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_9') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_10') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_11') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_12') }}</p>
                            <p style="text-align: center">{{ trans('lang.summer_carte_add_info_13') }}</p>
                            <div class="icons_legend">
                                <div>
                                    <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    <span>{{ trans('lang.no_gluten') }}</span>
                                </div>
                                <div>
                                    <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    <span>{{ trans('lang.vegetarian') }}</span>
                                </div>
                            </div>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-2" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">Vins au verre  <span>(1 dl)</span></div>
                                    <div class="title main_sub_title">Vins blancs</div>
                                    <div class="menu_item">
                                        <div class="title">Domaine de Chantemerle « Chasselas »</div>
                                        <div class="price"><span class="year">2016</span> 6.- <span>361</span></div>
                                    </div>
                                    <p class="sub_title">Tartegnin Famille Jaccoud (12% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">La Maison du Moulin « Chardonnay »</div>
                                        <div class="price"><span class="year">2015</span> 7.- <span>360</span></div>
                                    </div>
                                    <p class="sub_title">Reverolle (13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Domaine Mur-mur-ium « Viognier »</div>
                                        <div class="price"><span class="year">2015</span> 7.- <span>360</span></div>
                                    </div>
                                    <p class="sub_title">Vin du Vaucluse, Mormoiron (13.5% vol.) </p>
                                </li>


                                <li>
                                    <div class="title main_sub_title">Vins rosés</div>
                                    <div class="menu_item">
                                        <div class="title">Domaine Val d’Eve « Œil de Pedrix »</div>
                                        <div class="price"><span class="year">2016</span> 7.- <span>361</span></div>
                                    </div>
                                    <p class="sub_title">Hammel 1180 Rolle (13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Le Mas de Marcel</div>
                                        <div class="icns_block" style="left: 130px; top: 8px;">
                                            <img src="/img/img_menu_1.png" alt="gluten free">
                                        </div>
                                        <div class="price"><span class="year">2016</span> 6.- <span>361</span></div>
                                    </div>
                                    <p class="sub_title">Costières de Nîmes (12.5% vol.) </p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Vins rouges</div>
                                    <div class="menu_item">
                                        <div class="title">Château St Vincent</div>
                                        <div class="price"><span class="year">2015</span> 6.- <span>361</span></div>
                                    </div>
                                    <p class="sub_title">Grand Cru pinot Noir(13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">In Exelsis</div>
                                        <div class="price"><span class="year">2013</span> 7.- <span>360</span></div>
                                    </div>
                                    <p class="sub_title">Charles Rolaz (13.5% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Maucaillou</div>
                                        <div class="price"><span class="year">2014</span> 7.- <span>361</span></div>
                                    </div>
                                    <p class="sub_title">Bordeaux Supérieur(13%vol.) </p>

                                    <p style="margin-top: 20px; text-align: center;">N’hésitez pas à demander conseil à notre Maître d’hôtel.</p>
                                </li>
                                <li>
                                    <div class="title main_title">Vins en pot <span>(50cl)</span></div>
                                    <div class="title main_sub_title">Vins blancs</div>
                                    <div class="menu_item">
                                        <div class="title">201- Chardonnay</div>
                                        <div class="price"><span class="year">2013</span> 32.-</div>
                                    </div>
                                    <p class="sub_title">Terres de Lavaux (12,8% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">202- Morges « Chasselas »</div>
                                        <div class="price"><span class="year">2015</span> 28.- </div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (12% vol.) </p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Vins rosés</div>
                                    <div class="menu_item">
                                        <div class="title">204- Vaud : « Oeil de perdrix »</div>
                                        <div class="price"><span class="year">2016</span> 28.-</div>
                                    </div>
                                    <p class="sub_title">Plessis, Bolle S.A. (13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">205- Domaine de Sarraux « Pinot noir, Garanoir, Gamay»</div>
                                        <div class="price"><span class="year">2015</span> 28.- </div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13% vol.) </p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Vins rouges</div>
                                    <div class="menu_item">
                                        <div class="title">209 – Domaine de Sarraux Dessous « Garanoir »</div>
                                        <div class="price"><span class="year">2015</span> 34.-</div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">202- Morges : «Salvagnin »</div>
                                        <div class="price"><span class="year">2015</span> 28.- </div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13% vol.) </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">213 – La Côte «Pinot Noir» les Vignes de Jean-Jacques Bolle</div>
                                        <div class="price"><span class="year">2015</span> 36.- </div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13.5% vol.) </p>
                                </li>
                                <li>
                                    <div class="title main_title">LES CHAMPAGNES <span>(75cl)</span></div>
                                    <div class="title main_sub_title">Les Champagnes blancs bruts</div>
                                    <div class="menu_item">
                                        <div class="title">991 -Champagne « D’Armanville»</div>
                                        <div class="price"> 92.-</div>
                                    </div>
                                    <p class="sub_title">Ville-sur-Arce (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">992 -Champagne « Moët Chandon Imperial brut»</div>
                                        <div class="price"> 118.- </div>
                                    </div>
                                    <p class="sub_title">(12% vol.)</p>
                                    <div style="display: table; margin-bottom: 5px;">
                                        <img src="/img/img_menu_2.png" style="width: 30%; margin: 0 auto; display: table-cell;">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">993 -« Pommery Grand Cru Millésimé»</div>
                                        <div class="price"><span class="year">2000</span> 168.- </div>
                                    </div>
                                    <p class="sub_title">Epernay (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">994- « Pommery Cuvée Louise Millésimé»</div>
                                        <div class="price"><span class="year">1999</span> 390.- </div>
                                    </div>
                                    <p class="sub_title">Epernay (12% vol.)</p>
                                    <p style="margin-top: 20px; text-align: center;">« Une Année que jamais Louise n’oubliera.<br>La souffrance, les joies, les merveilles de cette Année y transpirent »<br><br>
                                        De multiples arômes se libèrent dans des registres variés allant du fruit
                                        rouge bien mature, aux notes de cire d’abeille et de fleur d’acacia tout juste séchée, ou encore des notes de pâte de coing, le tout étant relevé par une pointe de minéralité qui donne de l’élan à cette Louise tout en générosité et rondeur.</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Les Champagnes bruts rosés</div>
                                    <div class="menu_item">
                                        <div class="title">995- « Pommery Rosé » s.a</div>
                                        <div class="price"> 142.-</div>
                                    </div>
                                    <p class="sub_title">Epernay (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_title">VINS BLANCS SUISSES <span>(75cl)</span></div>
                                    <div class="title main_sub_title">La Côte</div>
                                    <div class="menu_item">
                                        <div class="title">1- Vufflens le Château « Chasselas »</div>
                                        <div class="price"><span class="year">2016</span> 40.-</div>
                                    </div>
                                    <p class="sub_title">Bolle S.A. (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">2- La Grand’Rue « Chasselas »</div>
                                        <div class="price"> <span class="year">2015</span> 42.-</div>
                                    </div>
                                    <p class="sub_title">Domaine de La Ville de Morges (12.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">6- Gilly : « Château Saint Vincent »</div>
                                        <div class="price"> <span class="year">2016</span> 75 cl / 37.5 cl : 36.- / 24.-</div>
                                    </div>
                                    <p class="sub_title">Réserve du Domaine G. Rolaz (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">7- Sauvignon Gris</div>
                                        <div class="price"> <span class="year">2016</span> 58.-</div>
                                    </div>
                                    <p class="sub_title">Domaine La Capitaine (13% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Lavaux</div>
                                    <div class="menu_item">
                                        <div class="title">8- Chardonnay</div>
                                        <div class="price"><span class="year">2014</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Terres de Lavaux (12,8% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">9- Yvorne : « L’Ovaille »</div>
                                        <div class="price"><span class="year">2015</span> 75 cl / 37.5 cl : 52.- / 30.-</div>
                                    </div>
                                    <p class="sub_title">Hammel S.A., propriétaire (12.5% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Valais</div>
                                    <div class="menu_item">
                                        <div class="title">11- Petite Arvine « Bio Suisse »</div>
                                        <div class="price"><span class="year">2016</span> 58.-</div>
                                    </div>
                                    <p class="sub_title">Famille Elisabeth, René et Marc Güntert <br> Propriétaires à Miège (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_title">VINS BLANCS FRANÇAIS <span>(75cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">12- Cheverny</div>
                                        <div class="price"><span class="year">2015</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Domaine du Salvard (12,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">13- Sancerre</div>
                                        <div class="price"><span class="year">2014</span> 56.-</div>
                                    </div>
                                    <p class="sub_title">Roland Tissier et Fils (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">15- Chablis</div>
                                        <div class="price"><span class="year">2014</span> 68.-</div>
                                    </div>
                                    <p class="sub_title">Bouchard Père & Fils (12.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">16- Meursault : « Vieilles Vignes »</div>
                                        <div class="price"><span class="year">2006</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">Paul Garaudet, Monthélie (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">17- Pouilly Fuissé</div>
                                        <div class="price"><span class="year">2015</span> 78.-</div>
                                    </div>
                                    <p class="sub_title">Bouchard Père & Fils (13.5% vol.)</p>
                                </li>


                                <li>
                                    <div class="title main_title">VINS ROSES SUISSES ET FRANÇAIS <span>(75cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">18 - Œil de perdrix : « Vufflens le Château »</div>
                                        <div class="price"><span class="year">2015</span> 42.-</div>
                                    </div>
                                    <p class="sub_title">Cave Bolle (13,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">19- Neuchâtel « Château D'Auvernier»</div>
                                        <div class="price"><span class="year">2016</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Thierry Gros jean &Cie (13,2% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">20- Domaine de Sarraux: « Pinot noir, Garanoir, Gamay »</div>
                                        <div class="price"><span class="year">2015</span> 42.-</div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_title">VINS ROUGES SUISSES <span>(75cl)</span></div>
                                    <div class="title main_sub_title">La Côte</div>
                                    <div class="menu_item">
                                        <div class="title">24 – Begnins « Gamaret Merlot »</div>
                                        <div class="price"><span class="year">2015</span> 58.-</div>
                                    </div>
                                    <p class="sub_title">Domaine La Capitaine, Reynald Parmelin (13.4% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">25- La Côte « Pinot noir »Les Vignes de Jean-Jacques Bolle sélectionné par la Fleur du Lac</div>
                                        <div class="price"><span class="year">2014</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Bolle S.A (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">26- Allaman : « Château d’ Allaman »</div>
                                        <div class="price"><span class="year">2015</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Samuel Brocard, vigneron (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">27- Servagnin, Morges Grand Cru</div>
                                        <div class="price"><span class="year">2014</span> 54.-</div>
                                    </div>
                                    <p class="sub_title">Domaine de la ville (13,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">29 - Morges: « Gamay » Château de Vufflens</div>
                                        <div class="price"><span class="year">2015</span> 36.-</div>
                                    </div>
                                    <p class="sub_title">Bolle S.A. (13% vol.)</p>
                                </li>



                                <li>
                                    <div class="title main_sub_title">Lavaux</div>
                                    <div class="menu_item">
                                        <div class="title">31- Orpheus« Gamaret, Garanoir»</div>
                                        <div class="price"><span class="year">2014</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Terres de Lavaux (13.4% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Chablais</div>
                                    <div class="menu_item">
                                        <div class="title">32- Yvorne : « Clos de la George »</div>
                                        <div class="price"><span class="year">2015</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Propriété Jaqueline Rolaz-Thorens (13,5% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Valais</div>
                                    <div class="menu_item">
                                        <div class="title">33- Dôle : « Réserve des Administrateurs »</div>
                                        <div class="price"><span class="year">2015</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Cave Saint-Pierre, à Chamoson (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">36- « Cornalin »</div>
                                        <div class="price"><span class="year">2015</span> 68.-</div>
                                    </div>
                                    <p class="sub_title">Vins des Chevaliers S.A (13.8% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">37- « Syrah »</div>
                                        <div class="price"><span class="year">2014</span> 68.-</div>
                                    </div>
                                    <p class="sub_title">Vins des Chevaliers (13.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">38- « Humagne »</div>
                                        <div class="price"><span class="year">2015</span> 68.-</div>
                                    </div>
                                    <p class="sub_title">Vins des Chevaliers SA (13.5% vol.)</p>
                                </li>



                                <li>
                                    <div class="title main_title">VINS ROUGES FRANÇAIS <span>(75cl)</span></div>
                                    <div class="title main_sub_title">Dordogne</div>
                                    <div class="menu_item">
                                        <div class="title">39- Bergerac « Château Laroque »</div>
                                        <div class="icns_block" style="left: 241px; top: 123px;">
                                            <img src="/img/img_menu_1.png" alt="gluten free">
                                        </div>
                                        <div class="price"><span class="year">2010</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Olivier Faurichon de la Bardonnie (14% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Saint Émilion</div>
                                    <div class="menu_item">
                                        <div class="title">43- « Château Fleur Cardinale »</div>
                                        <div class="price"><span class="year">2011</span> 138.-</div>
                                    </div>
                                    <p class="sub_title">Grand cru, Claude Asseo (15% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Cahors</div>
                                    <div class="menu_item">
                                        <div class="title">49- Probus Clos Triguedina</div>
                                        <div class="price"><span class="year">2005</span> 88.-</div>
                                    </div>
                                    <p class="sub_title">Jean-Luc Baldès (13.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Lalande de Pomerol</div>
                                    <div class="menu_item">
                                        <div class="title">45- «Château La Croix Saint André»</div>
                                        <div class="price"><span class="year">2014</span> 72.-</div>
                                    </div>
                                    <p class="sub_title">Propriétaire à Neac-Gironde (14% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Moulis en Médoc</div>
                                    <div class="menu_item">
                                        <div class="title">100- « Château Chasse-Spleen »</div>
                                        <div class="price"><span class="year">2011</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">Propriétaireà Moulis-en-Medoc (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Bourgogne :Côte de Beaune , Côte d’Or, Côte Chalonnaise</div>
                                    <div class="menu_item">
                                        <div class="title">53- Gevrey-Chambertin Ostrea : « Domaine Trapet père et Fils »</div>
                                        <div class="price"><span class="year">2010</span> 138.-</div>
                                    </div>
                                    <p class="sub_title">Jean et Jean-Louis Trapet (12.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">54- Nuits St Georges « Les Plateaux »</div>
                                        <div class="price"><span class="year">2010</span> 148.-</div>
                                    </div>
                                    <p class="sub_title">Mongeard - Mugneret (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">55- Vosne-Romanée</div>
                                        <div class="price"><span class="year">2012</span> 148.-</div>
                                    </div>
                                    <p class="sub_title">Mongeard - Mugneret (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">56- Savigny-les-Beaune : 1er Cru « La Dominode »</div>
                                        <div class="price"><span class="year">2009</span> 138.-</div>
                                    </div>
                                    <p class="sub_title">Domaine Pavelot Jean Marc et Hugues (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Vallée du Rhône</div>
                                    <div class="menu_item">
                                        <div class="title">59- Châteauneuf du Pape : « La Bastide Saint Dominique »</div>
                                        <div class="price"><span class="year">2014</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">SCEA & M.C. Bonnet (15% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">60- Gigondas : « La Bastide Saint Vincent »</div>
                                        <div class="price"><span class="year">2014</span> 72.-</div>
                                    </div>
                                    <p class="sub_title">La Bastide Saint Vincent<br>Guy Daniel à Violès (14.5% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Languedoc Roussillon</div>
                                    <div class="menu_item">
                                        <div class="title">58- Château Rouquette sur Mer</div>
                                        <div class="price"><span class="year">2014</span> 52.-</div>
                                    </div>
                                    <p class="sub_title">Cuvée « l’esprit Terroir » (13.5%)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">62- Corbières : « Château Bel Evêque » Cuvée Cardinale</div>
                                        <div class="price"><span class="year">2013</span> 62.-</div>
                                    </div>
                                    <p class="sub_title">Pierre Richard, propriétaire (13.5% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_title">HORS D’AGE</div>
                                    <div class="title main_sub_title">Saint Émilion</div>
                                    <div class="menu_item">
                                        <div class="title">151 - Château Rosier</div>
                                        <div class="price"><span class="year">1998</span> 339.-</div>
                                    </div>
                                    <p class="sub_title">Jean-Bernard Saby&Fils EARL 12,5% vol.)<br>-Exemplaire unique-</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Graves</div>
                                    <div class="menu_item">
                                        <div class="title">152 - Château Carbonnieux</div>
                                        <div class="price"><span class="year">1982</span> 118.-</div>
                                    </div>
                                    <p class="sub_title">Société des Grands Graves (12% vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Pauillac</div>
                                    <div class="menu_item">
                                        <div class="title">153 - Picheon-Longueville</div>
                                        <div class="price"><span class="year">1991</span> 105.-</div>
                                    </div>
                                    <p class="sub_title">Sc de Pichon-Longueville à Pouillac(13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">154 - Grand Vin de Château Latour</div>
                                        <div class="price"><span class="year">1987</span> 587.-</div>
                                    </div>
                                    <p class="sub_title">Premier Grand Cru Classé (12,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">155 - Grand Vin de Château Latour</div>
                                        <div class="price"><span class="year">1979</span> 498.-</div>
                                    </div>
                                    <p class="sub_title">Premier Grand Cru Classé</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">156 - Château Mouton Rothschild</div>
                                        <div class="price"><span class="year">1995</span> 1020.-</div>
                                    </div>
                                    <p class="sub_title">Baronne Philippine de Rothschild (12,5% vol.)<br>-Exemplaire unique-</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Saint Julien</div>
                                    <div class="menu_item">
                                        <div class="title">157- Grand Vin de Leoville</div>
                                        <div class="price"><span class="year">1979</span> 198.-</div>
                                    </div>
                                    <p class="sub_title">Société du Château Leoville Las Cases</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">158- Château Beychevelle</div>
                                        <div class="price"><span class="year">1981</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">S.E.D Achille-Fould propriétaire à St Julien</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">159- Château Beychevelle</div>
                                        <div class="price"><span class="year">1982</span> 348.-</div>
                                    </div>
                                    <p class="sub_title">S.E.D Achille-Fould propriétaire à St Julien</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">160.- Château Gruaud-Larose</div>
                                        <div class="price"><span class="year">1976</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">Le Roi des Vins, Le Vin des Rois D.Cordier</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Pommerol</div>
                                    <div class="menu_item">
                                        <div class="title">Château La Croix</div>
                                        <div class="price"><span class="year">1975</span> 75.-</div>
                                    </div>
                                    <p class="sub_title">Ste Civile J. Janoueuix (73cl)</p>
                                </li>
                                <li>
                                    <div class="title main_title">VINS ROUGES D’ITALIE ET D’ESPAGNE <span>(75cl)</span></div>
                                    <div class="title main_sub_title">Italie</div>
                                    <div class="menu_item">
                                        <div class="title">63- Troia «Cantina Diomede»</div>
                                        <div class="price"><span class="year">2013</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Garibaldi (13% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">69 – Colle Massari “Rigoleto”</div>
                                        <div class="price"><span class="year">2014</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Montecucco (13,5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">70 - Amarone « Valpolicella »</div>
                                        <div class="price"><span class="year">2011</span> 88.-</div>
                                    </div>
                                    <p class="sub_title">Ca’ Del Lupo (14.5 % vol.)</p>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Espagne</div>
                                    <div class="menu_item">
                                        <div class="title">65- Reserva « Tempranillo Cabernet Sauvignon »</div>
                                        <div class="price"><span class="year">2010</span> 48.-</div>
                                    </div>
                                    <p class="sub_title">Marques De Castilla (12.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">66- Habla N° 12 « Syrah »</div>
                                        <div class="price"><span class="year">2011</span> 98.-</div>
                                    </div>
                                    <p class="sub_title">Bodegas y viñedas de Trujillo S.L. (14.5% vol.)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">67- Elo Monastrell</div>
                                        <div class="price"><span class="year">2010</span> 88.-</div>
                                    </div>
                                    <p class="sub_title">Compania de vinos del atlantico (13% vol.)</p>
                                </li>

                                <li>
                                    <div class="title main_title">Carte des Digestifs</div>
                                    <div class="title main_sub_title">Whisky Blended Scotch <span>(4 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Justerini & Brooks JB (40%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Chivas Regal 12 ans (40%)</div>
                                        <div class="price">16.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Ballantines (40%)</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Black Label (40%)</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Whisky Single Malt <span>(4 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Lagavulin 16 ans (43%)</div>
                                        <div class="price">19.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Oban 14 ans (43%)</div>
                                        <div class="price">19.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Glenfiddich 12 ans (40%)</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="title main_sub_title">Bourbon <span>(4 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Four Roses (40%)</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Jack Daniel‘s (40%)</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Liqueur <span>(2 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Amaretto (28%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Limoncello (30%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Irish Cream (17%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Cointreau (40%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Grand Marnier (40%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Eau de vie <span>(2 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Eau de vie de Poire (43%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Eau de vie d’Abricot (43%) </div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Grappa Brunello (43%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Vieille prune (42%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_sub_title">Digestif <span>(2 cl)</span></div>
                                    <div class="menu_item">
                                        <div class="title">Cognac V.S.O.P (40%)</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Armagnac V.S.O.P (40%) </div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Calvados Pays d’Auge (40%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Marc de Bourgogne (40%)</div>
                                        <div class="price">10.-</div>
                                    </div>
                                </li>

                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div name="summer_menu" class="tab-pane fadeInLeft clearfix" id="summer_menu-3" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.summer_menu_title_1') }}</div>
                                    <div class="title center_title">{{ trans('lang.summer_menu_price_option_1') }}</div>
                                    <div class="price main_price">112.-</div>
                                    <div class="title center_title">{{ trans('lang.summer_menu_price_option_2') }}</div>
                                    <div class="price main_price">156.-</div>
                                    <p>{{ trans('lang.summer_menu_dish_name_1') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_2') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_3') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_4') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_5') }}
                                        {{--<br><span>*</span><br>--}}
                                        {{--{{ trans('lang.summer_menu_dish_name_6') }}--}}
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.summer_menu_title_2') }}</div>
                                    <div class="price main_price">72.-</div>
                                    <p>{{ trans('lang.summer_menu_dish_name_7') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_8') }}
                                        <br><span><i>{{ trans('lang.or') }}</i></span><br>
                                        {{ trans('lang.summer_menu_dish_name_9') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_10') }}
                                    </p>
                                </li>

                                {{--<li class="menu_block">--}}
                                    {{--<div class="title main_title">{{ trans('lang.summer_menu_title_6') }}</div>--}}
                                    {{--<div class="price main_price">72.-</div>--}}
                                    {{--<p>{{ trans('lang.summer_menu_dish_name_21') }}--}}
                                        {{--<br><span><i>{{ trans('lang.or') }}</i></span><br>--}}
                                        {{--{{ trans('lang.summer_menu_dish_name_22') }}--}}
                                        {{--<br><span>*</span><br>--}}
                                        {{--{{ trans('lang.summer_menu_dish_name_23') }}--}}
                                        {{--<br><span><i>{{ trans('lang.or') }}</i></span><br>--}}
                                        {{--{{ trans('lang.summer_menu_dish_name_24') }}--}}
                                        {{--<br><span>*</span><br>--}}
                                        {{--{{ trans('lang.summer_menu_dish_name_25') }}--}}
                                    {{--</p>--}}
                                {{--</li>--}}

                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.summer_menu_title_3') }}</div>
                                    <div class="price main_price">58.-</div>
                                    <p>{{ trans('lang.summer_menu_dish_name_12') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_13') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.summer_menu_dish_name_14') }}</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.summer_menu_title_5') }}</div>
                                    <div class="price main_price">22.-</div>
                                    <p>{{ trans('lang.summer_menu_dish_name_18') }}
                                        <br><span><i>{{ trans('lang.or') }}</i></span><br>
                                        {{ trans('lang.summer_menu_dish_name_19') }}
                                    </p>
                                </li>
                            </ul>
                            <p style="margin-top: 20px">Servi pour l’ensemble des convives à votre table </p>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-4" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saladine</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Suggestion du Chef</div>
                                        <div class="price">24.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Dessert au gré de la Pâtissière</div>
                                        <div class="price">7.50</div>
                                    </div>
                                </li>
                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-5" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <p style="margin-top: 20px; text-align: center;">Au Burger Bar du Café des Amis,<br>
                                tout est cuisiné maison.<br>
                                NOS BUNS ARTISANAUX<br>
                                NOS VIANDES de 1ère qualité Suisse NOS FRITES ET SAUCES maison<br>
                                NOTRE SAUCE CHARLEMAGNE brevetée
                            </p>
                            <ul>
                                <li>
                                    <div class="title main_title">CHARLEMAGNE</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte</div>
                                        <div class="price">200gr / 300gr/ 400gr : 36.- / 42.- / 48.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet</div>
                                        <div class="price">200gr : 42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">SIDES À VOLONTÉ</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saladine</div>
                                        <div class="price">4.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Frites</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Frites aromatisées à l'huile de truffe</div>
                                        <div class="price">8.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">BURGERS</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">CLASSIC</div>
                                        <div class="price">19.-</div>
                                    </div>
                                    <p class="sub_title">Bœuf 140gr / Cheddar / Tomate / Oignon / Iceberg Mayonnaise aux Herbes</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">CHARLEMAGNE</div>
                                        <div class="price">24.-</div>
                                    </div>
                                    <p class="sub_title">Bœuf 140gr / Roquette, sauce Charlemagne</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">FLEUR DU LAC</div>
                                        <div class="price">28.-</div>
                                    </div>
                                    <p class="sub_title">Bœuf 140gr / Gambas / Roquette, sauce Crustacées</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">SERVIN</div>
                                        <div class="price">22.-</div>
                                    </div>
                                    <p class="sub_title">Bœuf 140gr /galette de pommes de terre/ Raclette, Moutarde à l'Ancienne</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">NEW YORK</div>
                                        <div class="price">24.-</div>
                                    </div>
                                    <p class="sub_title">Bœuf 140gr / Lard fumé / Œuf au plat, sauce Barbecue</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">DEHLI</div>
                                        <div class="price">20.-</div>
                                    </div>
                                    <p class="sub_title">Poitrine de Poulet Tandoori / Iceberg sauce Yaourt Concombr</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">TOKYO</div>
                                        <div class="price">22.-</div>
                                    </div>
                                    <p class="sub_title">Saumon Laqué / Légumes Asiatiques sautés au Soja</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">CAPRI</div>
                                        <div class="price">19.-</div>
                                    </div>
                                    <p class="sub_title">Ricotta / Poivron / Aubergine / Oignon Tomate grillés / Pignons de pin</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">KID'S BURGER</div>
                                        <div class="price">12.-</div>
                                    </div>
                                    <p class="sub_title">Mini Classic (-12ans)</p>
                                </li>
                                <li>
                                    <div class="title main_title">DESSERTS</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Brownie</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Cheescake</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">BOISSONS</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Henniez bleu / verte</div>
                                        <div class="price">5.-</div>
                                    </div>
                                    <p class="sub_title">50cl</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Coca cola / Sprite / Fanta</div>
                                        <div class="price">5.-</div>
                                    </div>
                                    <p class="sub_title">33cl</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Rivella bleu / rouge</div>
                                        <div class="price">3.20</div>
                                    </div>
                                    <p class="sub_title">33cl</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Thè froid / jus de fruits</div>
                                        <div class="price">3.20</div>
                                    </div>
                                    <p class="sub_title">30cl</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bière pression</div>
                                        <div class="price">3.20</div>
                                    </div>
                                    <p class="sub_title">25cl (5%)</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Vin blanc ou rouge de la Côte</div>
                                        <div class="price">3.80</div>
                                    </div>
                                    <p class="sub_title">1dl (12%)</p>
                                </li>

                                <li class="menu_block">
                                    <div class="title main_title">Ouvert tous les jours midi et soir</div>
                                    <p>LA FLEUR DU LAC - CAFE DES AMIS
                                        <br><span>*</span><br>
                                        Rue de Lausanne 70 - 1110 Morges - SUISSE
                                        <br><span>*</span><br>
                                        <a href="www.fleur-du-lac.ch">www.fleur-du-lac.ch</a>
                                    </p>
                                </li>
                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Restaurant Menu Section-->

@endsection