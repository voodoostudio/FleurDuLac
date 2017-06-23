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
                    <p>{!! trans('lang.description_restaurant_1') !!}</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">{{ trans('lang.title_restaurant_1') }}</p>
                    <p>{!! trans('lang.description_restaurant_2') !!}</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">{{ trans('lang.title_restaurant_2') }}</p>
                    <p>{!! trans('lang.description_restaurant_3') !!}
                    </p>
                    <ul class="partners_list">
                        <li class="partner">
                            <a href="http://www.passeport-gourmand.ch/restaurants/detail.php?restaurant=7" target="_blank">
                                <img src="/img/partners/passeport_gourmand.jpg" alt="Passeport Gourmand">
                            </a>
                        </li>
                        <li class="partner">
                            <a href="https://edenred.ch/fr" target="_blank">
                                <img src="/img/partners/ticket_restaurant.jpg" alt="Ticket Restaurant">
                            </a>
                        </li>
                        <li class="partner">
                            <a href="<?php if(Lang::locale() == 'fr') {echo 'https://module.lafourchette.com/fr_CH/module/282921-b80fb';} else {echo'https://module.lafourchette.com/en_GB/module/282921-b80fb';} ?> " target="_blank">
                                <img src="/img/partners/lafourchette.png" alt="Passeport Gourmand">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="b-sec clearfix">
                <div class="col-md-4 tab-container">
                    <a href="#summer_menu-1" class="tab-box active">
                        <span class="title">Carte</span>
                        <span class="sub-title">Sens en éveil</span>
                    </a>
                    <a href="#menu-2" class="tab-box">
                        <span class="title">Suggestions de Printemps</span>
                        <span class="sub-title">Tradition revisitée</span>
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
                        <span class="sub-title">Detente entre lac et montagne</span>
                    </a>
                </div>
                <div class="col-md-8 tab-content" data-bg-img="/img/menu-tabs/1.jpg">
                    <div style="display: none" class="tab-pane fadeInLeft clearfix active" id="menu-1" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">Entrées</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Salade de foies de volaille, déglacés au vinaigre de Xérès et pignons de pin grillés</div>
                                        <div class="price">19.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tartare de bœuf coupé au couteau</div>
                                        <div class="price">entrée / plat : 21.- / 42.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bouquet de mesclun aux légumes croquants</div>
                                        <div class="price">9.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saladine</div>
                                        <div class="price">6.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Du lac à la mer...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filets de perches meunière, pommes frites ou vapeur et légumes</div>
                                        <div class="price">entrée / plat : 22.- / 42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette du pêcheur - féra, langoustine, rouget – aux saveurs gingembre et coco,légumes de saison et riz vénéré</div>
                                        <div class="price">48.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Pavé de sandre au beurre surprise, écrasé de pommes de terre aux olives et légumes</div>
                                        <div class="price">44.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Rougets barbet en croûte de sésame, méli-mélo de légumes et riz vénéré</div>
                                        <div class="price">45.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Loup de mer sauvage en croûte de sel, beurre citronné et déclinaison de légumes de saison, pommes vapeur (à commander 24 heures à l’avance)</div>
                                        <div class="price">52.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">De la terre...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte de bœuf</div>
                                        <div class="price">200gr / 300gr/ 400gr : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de bœuf</div>
                                        <div class="price">200gr : 47.-</div>
                                    </div>
                                    <p class="sub_title">Sauce au choix :  Charlemagne, Moutarde, Morilles, Pommes frites maison et légumes poêlés</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de canard laqué au miel et poivre de Sichuan, riz vénéré aux légumes</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Ballotine de pintade aux morilles, écrasé pommes de terre aux olives</div>
                                        <div class="price">39.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Fromages</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette de fromages du pays : tomme vaudoise, chèvre, gruyère</div>
                                        <div class="price">10.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Desserts</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Moelleux au chocolat et son sorbet maison</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Mille-feuille « La Fleur du Lac » aux fraises et son sorbet maison</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Corolle exotique aux fruits frais et son sorbet maison</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Pana cotta au citron vert et son coulis à la Mara des bois</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Ile flottante à la banane caramélisée</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tiramisu façon « Bounty » </div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Palette de sorbets maison</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Café gourmand au gré de la pâtissière</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Café gourmand</div>--}}
                                        {{--<div class="price">13.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            </ul>

                            <p style="margin-top: 20px; text-align: center">Chers Clients,<br>Nous travaillons avec des produits frais et de saison issus du terroir, de ce fait, nos menus sont susceptibles de changer en fonction des arrivages.</p>
                            <p style="text-align: center">Provenance de nos viandes</p>
                            <p style="text-align: center">Bœuf  : Suisse</p>
                            <p style="text-align: center">Canard : France</p>
                            <p style="text-align: center">Agneau : Irlande</p>
                            <p style="text-align: center">Pintade : France</p>
                            <div class="icons_legend">
                                <div>
                                    <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    <span>Sans gluten</span>
                                </div>
                                <div>
                                    <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    <span>Vegetarien</span>
                                </div>
                            </div>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div name="summer_carte" class="tab-pane fadeInLeft clearfix active" id="summer_menu-1" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">Pour commencer...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Salade de Mâche, roulés de jambon de Penthaz au chèvre frais</div>
                                        <div class="price">19.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Carpaccio de Bœuf</div>
                                        <div class="price">entrée / plat : 21.- / 42.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tartare de Saumon aux abricots du Valais</div>
                                        <div class="price">entrée / plat : 22.- / 44.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Gambas au combawa sur palet de Melon charentais rôti et granité</div>
                                        <div class="price">22.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Langoustines à l’Orientale, taboulé de chou-fleur et pommes</div>
                                        <div class="price">23.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tarte fine aux Légumes d’été, lit de tapenade et chanterelles</div>
                                        <div class="price">18.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Rosace de Tomate Mozzarella et Guacamole d’avocat</div>
                                        <div class="price">16.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Petits farcis Niçois végétariens</div>
                                        <div class="price">17.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bouquet de Mesclun aux légumes croquants</div>
                                        <div class="price">12.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saladine</div>
                                        <div class="price">8.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Du Lac à la Mer...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filets de Perches meunière du Léman, frites maison</div>
                                        <div class="price">110gr / 220gr : 24.- / 48.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet d’Omble Chevalier du Léman, grenobloise de cocos et légumes</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Goujonnettes de Sole au gingembre et combawa, huile de cacahuète grillée, écrasé de pommes de terre aux herbes</div>
                                        <div class="price">45.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette du Pêcheur : Gambas-Sole-Omble, polenta et légumes</div>
                                        <div class="price">43.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Pavé de Daurade Royale, confit d’échalotte et pommes boulangères</div>
                                        <div class="price">46.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saltimbocca de Saint-Pierre et tagliatelles de navets au safran</div>
                                        <div class="price">45.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Médaillons de Thon snackés au sésame, vinaigrette de poivre vert, fine ratatouille et pommes boulangères</div>
                                        <div class="price">39.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">De la Terre...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte de Bœuf sauce Charlemagne <br> Frites maison</div>
                                        <div class="price">200gr / 300gr/ 400gr : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de Bœuf sauce Charlemagne <br> Frites maison</div>
                                        <div class="price">200gr : 47.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Côte et Rognons de Veau aux oignons confits, colraves et pommes boulangères</div>
                                        <div class="price">46.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Hamburger « La Fleur du Lac » duo Bœuf et Gambas</div>
                                        <div class="price">32.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Suprême de Poulet à l’estragon, écrasé de pommes de terre aux herbes</div>
                                        <div class="price">38.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Risotto d’Artichauts à la barigoule</div>
                                        <div class="price">28.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Frites maison au parmesan et aromatisées à l’huile de truffe</div>
                                        <div class="price">10.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Fromages</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette du pays : Tomme vaudoise, Chèvre, Gruyère</div>
                                        <div class="price">12.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Desserts</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Moelleux au Chocolat et son sorbet maison</div>
                                        <div class="price">15.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Mille-feuille « La Fleur du Lac » aux Fraises et son sorbet</div>
                                        <div class="price">14.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Crumble aux Abricots du Valais et sa double crème de gruyère</div>
                                        <div class="price">15.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Gaspacho de Melon, Fraise et Concombre</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Carpaccio d’Ananas et son sorbet Menthe du potager</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Palette de Sorbets maison</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Café Gourmand au gré de la pâtissière</div>
                                        <div class="price">15.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                            </ul>

                            <p style="margin-top: 20px; text-align: center">Chers Clients,<br>nous travaillons avec des produits frais et de saison, de ce fait, nos menus sont susceptibles de changer en fonction des arrivages.</p>
                            <p style="text-align: center">Provenance des viandes</p>
                            <p style="text-align: center">Bœuf & Veau : Suisse</p>
                            <p style="text-align: center">Poulet : France</p>
                            <div class="icons_legend">
                                <div>
                                    <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    <span>Sans gluten</span>
                                </div>
                                <div>
                                    <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    <span>Vegetarien</span>
                                </div>
                            </div>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-2" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                {{--<li class="menu_block">--}}
                                    {{--<div class="title main_title">Menu TOUT FEU TOUT FLAMME</div>--}}
                                    {{--<div class="price main_price">82.-</div>--}}
                                    {{--<p>Cappuccino de butternut--}}
                                        {{--<br><span>*</span><br>--}}
                                        {{--Boeuf Voronoff--}}
                                        {{--<br><span>*</span><br>--}}
                                        {{--Crêpe Suzette flambée à la liqueur d’orange</p>--}}
                                {{--</li>--}}
                                <li>
                                    <div class="title main_title">Entrées</div>
                                    <div class="menu_item">
                                        <div class="title"> Langoustines et noix de Saint-Jacques sautées sur lit de Pak Choï</div>
                                        <div class="price">19.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title"> Poêlée d’asperges vertes aux morilles</div>
                                        <div class="price">19.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title"> Filet de thon juste mariné à la niçoise et son sorbet poivron</div>
                                        <div class="price">entrée / plat : 17.- / 28.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Cannelloni de saumon et crabe épicé au wasabi</div>
                                        <div class="price">24.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title"> Feuilleté aux escargots de Bourgogne en fricassée au pinot noir de Morges et 23.- sa tombée de poireaux légèrement crémée</div>--}}
                                        {{--<div class="price">23.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                <li>
                                    <div class="title main_title">Plats</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de Féra du Léman dorée sur peau, méli-mélo de légumes et pommes vapeur</div>
                                        <div class="price">39.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
{{--                                    <p>Filet de bœuf grillé à la plancha et homard rôti</p>--}}
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Hamburger « La Fleur du Lac », duo bœuf et gambas <br>
                                            Au choix : frites maison natures ou au parmesan et aromatisées à l’huile de truffe
                                        </div>
                                        <div class="price">32.-</div>
                                    </div>
                                    {{--<p>Frites fraîches au parmesan et à la truffe + Chf 8.-</p>--}}
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de Saint-Pierre, jus de chorizo, riz vénéré aux légumes</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tagliatelles aux gambas et pistou de tomates séchées</div>
                                        <div class="price">29.-</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="title main_title">Petits plats en plus</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Frites fraîches au parmesan et aromatisées à l’huile de truffe</div>
                                        <div class="price">10.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette de légumes printaniers agrémentée de morilles, asperges vertes et purée de pommes de terre aux olives</div>
                                        <div class="price">entrée / plat : 12.- / 24.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                {{--<li>--}}
                                    {{--<div class="title main_title">Dessert</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Pana cotta au citron vert et son coulis à la Mara des bois</div>--}}
                                        {{--<div class="price">13.-</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="icns_block">--}}
                                        {{--<img src="/img/gluten_free_1.svg" alt="gluten free">--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Ile flottante à la banane caramélisée</div>--}}
                                        {{--<div class="price">13.-</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="icns_block">--}}
                                        {{--<img src="/img/gluten_free_1.svg" alt="gluten free">--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Tiramisu façon « Bounty »</div>--}}
                                        {{--<div class="price">13.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                <div class="icons_legend">
                                    <div>
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <span>Sans gluten</span>
                                    </div>
                                    <div>
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                        <span>Végétarien</span>
                                    </div>
                                </div>

                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div style="display: none" class="tab-pane fadeInLeft clearfix" id="menu-3" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">Menu du Pêcheur</div>
                                    <div class="price main_price">68.-</div>
                                    <p>Langoustines et noix de Saint-Jacques sur lit de Pak Choï
                                        <br><span><i>ou</i></span><br>
                                        Filets de perches meunière
                                        <br><span>*</span><br>
                                        Assiette du pêcheur aux saveurs gingembre - coco et riz vénéré et légumes de saison
                                        <br><span><i>ou</i></span><br>
                                        Pavé de sandre au beurre surprise et son écrasé de pommes de terre aux olives
                                        <br><span>*</span><br>
                                        Corolle exotique aux fruits frais et son sorbet maison
                                        <br><span><i>ou</i></span><br>
                                        Moelleux au chocolat et son sorbet maison
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Charlemagne</div>
                                    <div class="price main_price">54.-</div>
                                    <p>Bouquet de mesclun et légumes croquants
                                        <br><span>*</span><br>
                                        Entrecôte de bœuf 200gr, frites maison et sauce au choix
                                        <br><span>*</span><br>
                                        Mille-feuille « La Fleur du Lac » aux fraises et son sorbet maison</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Enfant</div>
                                    <div class="price main_price">22.-</div>
                                    <p>Tagliatelles à la bolognaise
                                        <br><span><i>ou</i></span><br>
                                        Nuggets maison et frites fraîches
                                        <br><span>*</span><br>
                                        Deux boules de glace</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Printanier du Chef</div>
                                    <div class="title center_title">Dégustation de 6 mets</div>
                                    <div class="price main_price">98.-</div>
                                    <div class="title center_title"> Dégustation avec un verre de vin par met</div>
                                    <div class="price main_price">132.-</div>
                                    <p>Poêlée d’asperges vertes
                                        <br><span>*</span><br>
                                        Cannelloni de saumon et crabe épicé au wasabi
                                        <br><span>*</span><br>
                                        Rougets barbet en croûte de sésame
                                        <br><span>*</span><br>
                                        Ballotine de pintade aux morilles, purée de pommes de terre aux olives
                                        <br><span>*</span><br>
                                        Assiette de fromages
                                        <br><span>*</span><br>
                                        Pana cotta au citron vert et son coulis à la Mara des bois</p>
                                </li>
                            </ul>
                            <p style="margin-top: 20px">Servi pour l’ensemble des convives à votre table </p>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div name="summer_menu" class="tab-pane fadeInLeft clearfix" id="summer_menu-3" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Estival du Chef</div>
                                    <div class="title center_title">Dégustation de 6 mets</div>
                                    <div class="price main_price">98.-</div>
                                    <div class="title center_title"> Dégustation avec un verre de vin par met</div>
                                    <div class="price main_price">142.-</div>
                                    <p>Petits farcis Niçois
                                        <br><span>*</span><br>
                                        Gambas au combawa sur palet de Melon charentais rôti
                                        <br><span>*</span><br>
                                        Médaillons de Thon snackés au sésame
                                        <br><span>*</span><br>
                                        Suprême de Poulet à l’estragon
                                        <br><span>*</span><br>
                                        Assiette de Fromages
                                        <br><span>*</span><br>
                                        Carpaccio d’Ananas
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu du Pêcheur</div>
                                    <div class="price main_price">68.-</div>
                                    <p>Langoustines à l’Orientale
                                        <br><span><i>ou</i></span><br>
                                        Tartare de Saumon
                                        <br><span>*</span><br>
                                        Assiette du Pêcheur
                                        <br><span><i>ou</i></span><br>
                                        Filet d’Omble Chevalier du lac Léman
                                        <br><span>*</span><br>
                                        Moelleux au Chocolat
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Charlemagne</div>
                                    <div class="price main_price">58.-</div>
                                    <p>Bouquet de Mesclun et légumes croquants
                                        <br><span>*</span><br>
                                        Entrecôte de Bœuf 200gr sauce Charlemagne, frites maison
                                        <br><span>*</span><br>
                                        Mille-feuille « La Fleur du Lac » aux fraises et son sorbet maison</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Végétarien & Sans Gluten</div>
                                    <div class="price main_price">52.-</div>
                                    <p>Petits farcis niçois
                                        <br><span>*</span><br>
                                        Risotto d’Artichauts à la barigoule
                                        <br><span>*</span><br>
                                        Gaspacho de Melon, Fraise et Concombre
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Enfant</div>
                                    <div class="price main_price">22.-</div>
                                    <p>Steak haché et pâtes
                                        <br><span><i>ou</i></span><br>
                                        Nuggets maison et frites fraîches
                                        <br><span>*</span><br>
                                        Deux boules de glace au choix
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
                                {{--<li>--}}
                                    {{--<div class="title main_title">Entrée de la semaine</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Saladine Verte</div>--}}
                                        {{--<div class="price">6.-</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Lundi 1 mai 2017</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Cuisse de poulet à l’estragon <br> Légumes et gnocchi de pomme de terre </div>--}}
                                        {{--<div class="price">19.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Mardi 2 mai 2017 </div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Souris d’agneau <br> Semoule aux petits légumes</div>--}}
                                        {{--<div class="price">19.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Mercredi 3 mai 2017</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Emincé de soupion <br> Légumes et riz basmati	</div>--}}
                                        {{--<div class="price">19.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Jeudi 4 mai 2017</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Escalope de dinde panée <br> Légumes et spaghetti</div>--}}
                                        {{--<div class="price">19.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Vendredi 5 mai 2017</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Filet de sébaste sauce vin blanc <br> Légumes et risotto d’orge perlé</div>--}}
                                        {{--<div class="price">19.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="title main_title">Dessert de la semaine</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="menu_item">--}}
                                        {{--<div class="title">Dessert au gré de la pâtissière</div>--}}
                                        {{--<div class="price">7.50</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-5" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrée de la semaine</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Suggestion du Chef à</div>
                                        <div class="price">24.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte de bœuf</div>
                                        <div class="price">200gr / 300gr/ 400gr : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de bœuf</div>
                                        <div class="price">200gr : 47.-</div>
                                    </div>
                                    <p class="sub_title">Sauce au choix :  Charlemagne, Moutarde, Morilles Saladine et frites maison
                                    </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Dessert de la semaine</div>
                                        <div class="price">7.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Mille-feuille « Fleur du Lac », sorbet maison</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Café gourmand</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Charlemagne</div>
                                    <div class="price main_price">54.-</div>
                                    <p>Bouquet de mesclun et légumes croquants
                                        <br><span>*</span><br>
                                        Entrecôte de bœuf 200gr, frites maison et sauce au choix
                                        <br><span>*</span><br>
                                        Mille-feuille « Fleur du Lac », sorbet maison
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