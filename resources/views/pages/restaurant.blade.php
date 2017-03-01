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
                        <span class="title">{{ trans('lang.title_menu_restaurant_1') }}</span>
                        <span class="sub-title">{{ trans('lang.sub_title_menu_restaurant_1') }}</span>
                    </a>
                    <a href="#menu-2" class="tab-box">
                        <span class="title">{{ trans('lang.title_menu_restaurant_2') }}</span>
                        <span class="sub-title">{{ trans('lang.sub_title_menu_restaurant_2') }}</span>
                    </a>
                    <a href="#menu-3" class="tab-box">
                        <span class="title">{{ trans('lang.title_menu_restaurant_3') }}</span>
                        <span class="sub-title">{{ trans('lang.sub_title_menu_restaurant_3') }}</span>
                    </a>
                    <a href="#menu-4" class="tab-box">
                        <span class="title">{{ trans('lang.title_menu_restaurant_4') }}</span>
                        <span class="sub-title">{{ trans('lang.sub_title_menu_restaurant_4') }}</span>
                    </a>
                    <a href="#menu-5" class="tab-box">
                        <span class="title">{{ trans('lang.title_menu_restaurant_5') }}</span>
                        <span class="sub-title">{{ trans('lang.sub_title_menu_restaurant_5') }}</span>
                    </a>
                </div>
                <div class="col-md-8 tab-content" data-bg-img="/img/menu-tabs/1.jpg">
                    <div class="tab-pane fadeInLeft clearfix active" id="menu-1" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_1') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_1') }}</div>
                                        <div class="price">36.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_2') }}</div>
                                        <div class="price">27.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_3') }}</div>
                                        <div class="price">21.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_4') }}</div>
                                        <div class="price">36.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_5') }}</div>
                                        <div class="price">26.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_6') }}</div>
                                        <div class="price">22.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_7') }}</div>
                                        <div class="price">27.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_8') }}</div>
                                        <div class="price">9.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_9') }}</div>
                                        <div class="price">9.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_2') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_10') }}</div>
                                        <div class="price">41.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_11') }}</div>
                                        <div class="price">44.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_12') }}</div>
                                        <div class="price">43.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_13') }}</div>
                                        <div class="price">48.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_14') }}</div>
                                        <div class="price">39.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_15') }}</div>
                                        <div class="price">58.-/pers</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_3') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_16') }}</div>
                                        <div class="price">200g / 300g/ 400g : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_17') }}</div>
                                        <div class="price">200g 47.-</div>
                                    </div>
                                    <p class="sub_title">{{ trans('lang.additional_description_menu_restaurant_1') }}</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_18') }}</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_19') }}</div>
                                        <div class="price">42.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_20') }}</div>
                                        <div class="price">36.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <p>{{ trans('lang.additional_description_menu_restaurant_2') }}</p>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_4') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_21') }}</div>
                                        <div class="price">12.-</div>
                                    </div>

                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_5') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_22') }}</div>
                                        <div class="price">15.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_23') }}</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_24') }}</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_25') }}</div>
                                        <div class="price">13.-</div>
                                    </div>

                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_26') }}</div>
                                        <div class="price">13.-</div>
                                    </div>
                                    <div class="icns_block">
                                        <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_27') }}</div>
                                        <div class="price">13.-</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="icons_legend">
                                <div>
                                    <img src="/img/vegetarian_1.svg" alt="vegetarian">
                                    <span>{{ trans('lang.additional_description_menu_restaurant_3') }}</span>
                                </div>
                                <div>
                                    <img src="/img/gluten_free_1.svg" alt="gluten free">
                                    <span>{{ trans('lang.additional_description_menu_restaurant_4') }}</span>
                                </div>
                            </div>
                            <p class="currency_explanation">{{ trans('lang.additional_description_menu_restaurant') }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-2" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_6') }}</div>
                                    <div class="price main_price">82.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_28') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_29') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_30') }}</p>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_7') }}</div>
                                    <div class="menu_item">
                                        <div class="title"> {{ trans('lang.description_menu_restaurant_31') }}</div>
                                        <div class="price">15.-</div>
                                    </div>

                                    <div class="menu_item">
                                        <div class="title"> {{ trans('lang.description_menu_restaurant_32') }}</div>
                                        <div class="price">28.-</div>
                                    </div>
                                    <div class="menu_item">
                                        <div class="title"> {{ trans('lang.description_menu_restaurant_33') }}</div>
                                        <div class="price">38.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title"> {{ trans('lang.description_menu_restaurant_34') }}</div>
                                        <div class="price">18.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title"> {{ trans('lang.description_menu_restaurant_35') }}</div>
                                        <div class="price">23.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_8') }}</div>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_36') }}</div>
                                        <div class="price">62.-</div>
                                    </div>
                                    <p>{{ trans('lang.additional_description_menu_restaurant_5') }}</p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_37') }}</div>
                                        <div class="price">28.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_9') }}</div>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_38') }}</div>
                                        <div class="price">17.-</div>
                                    </div>
                                </li>
                            </ul>
                            <p class="currency_explanation">{{ trans('lang.additional_description_menu_restaurant') }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-3" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_10') }}</div>
                                    <div class="price main_price">22.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_39') }}
                                        <br><span><i>{{ trans('lang.ou') }}</i></span><br>
                                        {{ trans('lang.description_menu_restaurant_40') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_41') }}</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_11') }}</div>
                                    <div class="price main_price">68.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_42') }}
                                        <br><span><i>{{ trans('lang.ou') }}</i></span><br>
                                        {{ trans('lang.description_menu_restaurant_43') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_44') }}
                                        <br><span><i>{{ trans('lang.ou') }}</i></span><br>
                                        {{ trans('lang.description_menu_restaurant_45') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_46') }}
                                        <br><span><i>{{ trans('lang.ou') }}</i></span><br>
                                        {{ trans('lang.description_menu_restaurant_47') }}
                                    </p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_12') }}</div>
                                    <div class="price main_price">58.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_48') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_49') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_50') }}</p>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_13') }}</div>
                                    <div class="title center_title">{{ trans('lang.description_menu_restaurant_51') }}</div>
                                    <div class="price main_price">98.-</div>
                                    <div class="title center_title">{{ trans('lang.description_menu_restaurant_52') }}</div>
                                    <div class="price main_price">132.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_53') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_54') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_55') }}
                                        <br><span>*</span><br>
                                        {!! trans('lang.description_menu_restaurant_56') !!}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_57') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_58') }}</p>
                                </li>
                            </ul>
                            <p class="currency_explanation">{{ trans('lang.additional_description_menu_restaurant') }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-4" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_14') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_59') }}</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_15') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{!! trans('lang.description_menu_restaurant_60') !!}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_16') }} </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{!! trans('lang.description_menu_restaurant_61') !!}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_17') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{!! trans('lang.description_menu_restaurant_62') !!}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_18') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{!! trans('lang.description_menu_restaurant_63') !!}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_19') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{!! trans('lang.description_menu_restaurant_64') !!}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_20') }}</div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_65') }}</div>
                                        <div class="price">7.50</div>
                                    </div>
                                </li>
                            </ul>
                            <p class="currency_explanation">{{ trans('lang.additional_description_menu_restaurant') }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fadeInLeft clearfix" id="menu-5" data-img-name="/img/menu-tabs/1.jpg">
                        <div class="menu-list col-xs-12">
                            <ul>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_66') }}</div>
                                        <div class="price">6.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_67') }}</div>
                                        <div class="price">19.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_68') }}</div>
                                        <div class="price">200g / 300g/ 400g : 42.- / 48.- / 54.-</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_69') }}</div>
                                        <div class="price">200g 47.-</div>
                                    </div>
                                    <p class="sub_title">{{ trans('lang.additional_description_menu_restaurant_6') }}
                                    </p>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_70') }}</div>
                                        <div class="price">7.50</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="menu_item">
                                        <div class="title">{{ trans('lang.description_menu_restaurant_71') }}</div>
                                        <div class="price">14.-</div>
                                    </div>
                                </li>
                                <li class="menu_block">
                                    <div class="title main_title">{{ trans('lang.name_menu_restaurant_21') }}</div>
                                    <div class="price main_price">58.-</div>
                                    <p>{{ trans('lang.description_menu_restaurant_72') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_73') }}
                                        <br><span>*</span><br>
                                        {{ trans('lang.description_menu_restaurant_74') }}
                                    </p>
                                </li>
                            </ul>
                            <p class="currency_explanation">{{ trans('lang.additional_description_menu_restaurant') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Restaurant Menu Section-->

@endsection