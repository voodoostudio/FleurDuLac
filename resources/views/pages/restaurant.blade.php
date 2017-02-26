@extends('main')

@section('title','Restaurants')

@section('current_page')
    <?php $current_page = 'restaurant'?>
@endsection

@section('content')
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/restaurant.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">Restaurants</div>
                    <div class="sub-title">Un panorama unique pour un repas memorable</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="index.php">Accueil</a></li>
                    <li class="current"><a href="#">Restaurants</a></li>
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
                    <p>L’hiver, le restaurant La Fleur du Lac vous accueille dans différentes ambiances.<br>
                        La salle principale de 100 places, le Salon d’Or de 40 places.<br>
                        Aux beaux jours, la véranda de 60 places et la terrasse de 40 places à fleur d’eau.</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">Envie de plats raffinés classiques revisités et de saveurs oubliées</p>
                    <p>Dans la grande salle retro au plafond boisé style art déco, la baie vitrée s’ouvre sur le Lac comme un tableau.<br>
                        Un décor permanent, idyllique, qui aiguise les sens et met en appétit.<br>
                        Spécialités de poissons lacustres et de mer grillé ou en croute de sel et la fameuse entrecôte sauce Charlemagne sauront vous mettre l’eau à la bouche.</p>
                    <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">Un diner en amoureux, une réunion familiale, un repas d’entreprise</p>
                    <p>Le Salon d’Or, pour une ambiance plus intime, privatisable pour les moments d’exception.<br>
                        De l’apéritif dinatoire en petit comité, à la pièce montée des grandes réceptions.<br>
                        Le professionnalisme de nos équipes rendra ces moments inoubliables.
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
                            <a href="https://www.lafourchette.ch/restaurant/la-fleur-du-lac/282921" target="_blank">
                                <img src="/img/partners/lafourchette.png" alt="Passeport Gourmand">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="b-sec clearfix">
                <div class="col-md-4 tab-container">
                    <a href="#menu-1" class="tab-box active">
                        <span class="title">Carte</span>
                        <span class="sub-title">Sens en éveil</span>
                    </a>
                    <a href="#menu-2" class="tab-box">
                        <span class="title">Suggestions de saison</span>
                        <span class="sub-title">Tradition revisitée</span>
                    </a>
                    <a href="#menu-3" class="tab-box">
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
                    <div class="tab-pane fadeInLeft clearfix active" id="menu-1" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">Entrées</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Duo « Terre et Mer », foie gras de canard et noix de Saint-Jacques à la plancha, lit d’ananas caramélisé, jus réduit à la truffe</div>
                                        <div class="price">36.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Terrine de foie gras de canard maison et son chutney aux figues</div>
                                        <div class="price">27.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tartare de saumon fumé et écrevisse au kiwi et crème d’herbes Mapuche au citron bergamote</div>
                                        <div class="price">21.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tataki d’espadon au sésame, tombée de chou kale, Wakamé au miel et pignons de pin, sauce Aomori</div>
                                        <div class="price">36.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Cold Foie Gras Torchon</div>
                                        <div class="price">26.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tomme vaudoise croustillante au jambon Penthaz</div>
                                        <div class="price">22.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Salade gourmande : foie gras, saumon fumé, œufs de caille, magret fumé</div>
                                        <div class="price">27.-</div>
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
                                        <div class="price">9.-</div>
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
                                        <div class="title">Filets de perche meunière, pommes frites ou pommes vapeur</div>
                                        <div class="price">41.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Sole meunière, pommes vapeur et légumes de saison</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Turbot rôti sur peau, risotto Carnaroli safrané au parmesan, sauce au pastis</div>
                                        <div class="price">43.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Assiette du pêcheur (St-Jacques, cigale, bar, turbot) accompagnée de rattes du Touquet en robe des champs rissolées en persillade aux deux sauces</div>
                                        <div class="price">48.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Tagliatelles au homard</div>
                                        <div class="price">39.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bar entier en croûte de sel pour 2 personnes, légumes de saison</div>
                                        <div class="price">58.-/pers</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">De la terre...</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte de bœuf</div>
                                        <div class="price">200g / 300g/ 400g : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de bœuf</div>
                                        <div class="price">200g 47.-</div>
                                    </div>
                                    <p class="sub_title">Sauce au choix : Charlemagne, Moutarde, Morilles, pommes frites et légumes poêlés</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Pavé de veau rôti sur son rösti, sauce champignons, légumes du moment</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet d’agneau, rattes du Touquet en robe des champs rissolées, sauce à la 42.- menthe poivrée</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Ravioles de Royans sur salpicon de butternut gratinées au parmesan</div>
                                        <div class="price">36.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <p>Provenance de nos viandes : bœuf - Suisse/ veau - Suisse - Hollande / volaille - Suisse – France</p>
                                </li>
                                <li>
                                    <div class="title main_title">Plateau de fromages</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Plateau de fromages</div>
                                        <div class="price">12.-</div>
                                    </div>

                                </li>
                                <li>
                                    <div class="title main_title">Desserts</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Moelleux au chocolat et sa glace</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Gelée de Rhum et son écume de noix de coco</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Mille-feuille « Fleur du Lac » aux poires caramélisées, sorbet maison</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Crème brûlée à la passion</div>
                                        <div class="price">13.-</div>
                                    </div>

                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Clémentine rôtie aux épices de Noël</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Café gourmand</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="icons_legend">
                                <div>
                                    <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    <span>Vegetarien</span>
                                </div>
                                <div>
                                    <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    <span>Sans gluten (à préciser)</span>
                                </div>
                            </div>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-2" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">Menu TOUT FEU TOUT FLAMME</div>
                                    <div class="price main_price">82.-</div>
                                    <p>Cappuccino de butternut
                                        <br><span>*</span><br>
                                        Boeuf Voronoff
                                        <br><span>*</span><br>
                                        Crêpe Suzette flambée à la liqueur d’orange</p>
                                </li>
                                <li>
                                    <div class="title main_title">Entrées</div>
                                    <div class="menu_item">
                                        <div class="title">Huîtres Gillardeau N°3, servies avec citron et vinaigre à l’échalote (3 huîtres)</div>
                                        <div class="price">15.-</div>
                                    </div>

                                    <div class="menu_item">
                                        <div class="title">Huîtres Gillardeau N°3, servies avec citron et vinaigre à l’échalote (6 huîtres)</div>
                                        <div class="price">28.-</div>
                                    </div>
                                    <div class="menu_item">
                                        <div class="title">Huîtres Gillardeau N°3, servies avec citron et vinaigre à l’échalote (9 huîtres)</div>
                                        <div class="price">38.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Cappuccino de butternut aux graines de tournesol et arôme d’huile de noisette du moulin de Sévery</div>
                                        <div class="price">18.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Feuilleté aux escargots de Bourgogne en fricassée au pinot noir de Morges et 23.- sa tombée de poireaux légèrement crémée</div>
                                        <div class="price">23.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Plats</div>
                                    <div class="menu_item">
                                        <div class="title">“SURF’N TURF”</div>
                                        <div class="price">62.-</div>
                                    </div>
                                    <p>Filet de bœuf grillé à la plancha et homard rôti</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bœuf Voronoff</div>
                                        <div class="price">28.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Dessert</div>
                                    <div class="menu_item">
                                        <div class="title">Crêpe Suzette flambée à la liqueur d’orange</div>
                                        <div class="price">17.-</div>
                                    </div>
                                </li>
                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-3" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Enfant</div>
                                    <div class="price main_price">22.-</div>
                                    <p>Entrecôte de bœuf 100g, frites et légumes du jour
                                        <br><span><i>ou</i></span><br>
                                        Filets de perche 100g, frites et légumes du jour
                                        <br><span>*</span><br>
                                        Deux boules de glaces</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu du Pêcheur</div>
                                    <div class="price main_price">68.-</div>
                                    <p>Tartare de saumon fumé et écrevisses au kiwi Crème d’herbes Mapuche au citron bergamote
                                        <br><span><i>ou</i></span><br>
                                        Tataki d’espadon au sésame, tombée de choux kale Wakamé au miel et pignons de pain sauce Aomori
                                        <br><span>*</span><br>
                                        Assiette du pêcheur (St-Jacques, cigale, bar, turbot)
                                        <br><span><i>ou</i></span><br>
                                        Turbot rôti sur peau, risotto Carnaroli safrané au parmesan, sauce au pastis
                                        <br><span>*</span><br>
                                        Clémentine rôtie aux épices de Noël
                                        <br><span><i>ou</i></span><br>
                                        Moelleux au chocolat
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu Charlemagne</div>
                                    <div class="price main_price">58.-</div>
                                    <p>Tomme vaudoise croustillante au jambon Penthaz
                                        <br><span>*</span><br>
                                        Entrecôte de bœuf 200g, sauce au choix
                                        <br><span>*</span><br>
                                        Mille-feuille « Fleur du Lac » aux poires, sorbet maison</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">Menu du Chef</div>
                                    <div class="title center_title">Dégustation de 6 mets</div>
                                    <div class="price main_price">98.-</div>
                                    <div class="title center_title">Dégustation avec un verre de vin par mets</div>
                                    <div class="price main_price">132.-</div>
                                    <p>3 Huitres
                                        <br><span>*</span><br>
                                        Cappuccino de butternut aux graines de tournesol Arôme d’huile de noisette du moulin de Sévery
                                        <br><span>*</span><br>
                                        Duo « Terre et Mer », foie gras de canard et noix de Saint-Jacques à la plancha Lit d’ananas caramélisé, jus réduit à la truffe
                                        <br><span>*</span><br>
                                        SURF’N TURF<br>
                                        Filet de Bœuf grille à la plancha et Homard rôti
                                        <br><span>*</span><br>
                                        Plateau de fromages
                                        <br><span>*</span><br>
                                        Gelée de Rhum et son écume de noix de coco</p>
                                </li>
                            </ul>
                            <p class="currency_explanation">Nos prix sont en francs suisses avec TVA à 8%</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-4" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">Entrée de la semaine :</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Saladine</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Lundi 7 novembre 2016</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Bœuf bourguignon <br>aux tagliatelles fraîches <br> Légumes du jour</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Mardi 8 novembre 2016 </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Pavé de lieu noir, sauce homardine <br> Pommes de terre écrasées à la fourchette <br> Légumes du jour</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Mercredi 9 novembre 2016</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Papillote de carrelet, <br> beurre à l'orange et julienne de légumes <br> Pommes vapeur & Légumes du jour</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Jeudi 10 novembre 2016</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Gambas flambées au Pineau des Charentes <br> taglioline à l'encre de seiche <br> Mousseline de Panais</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Vendredi 11 novembre 2016</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de truite, sauce tomate à la coriandre <br> Riz basmati au chou chinois <br> Légumes du jour</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">Dessert de la semaine</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Beignet aux pommes</div>
                                        <div class="price">7.50</div>
                                    </div>
                                </li>
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
                                        <div class="title">Plats du jour</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Entrecôte de bœuf</div>
                                        <div class="price">200g / 300g/ 400g : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">Filet de bœuf</div>
                                        <div class="price">200g 47.-</div>
                                    </div>
                                    <p class="sub_title">Sauce au choix :  Charlemagne, Moutarde, Morilles Saladine, pommes frites et légumes poêlés
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
                                <li class="menu_block">
                                    <div class="title main_title">Menu Charlemagne</div>
                                    <div class="price main_price">58.-</div>
                                    <p>Tomme vaudoise croustillante au jambon Penthaz
                                        <br><span>*</span><br>
                                        Entrecôte de bœuf 200gr, sauce au choix
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