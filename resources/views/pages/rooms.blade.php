@extends('main')

@section('title',trans('lang.room'))

@section('current_page')
    <?php $current_page = 'rooms'?>
@endsection

@section('content')
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/rooms.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{ trans('lang.room') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_room') }}</div>
                </div>
            </div>
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('rooms.locale') }}">{{ trans('lang.room') }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

    <!--Room Section-->
    <section id="rooms-section" class="row-view">
        <div class="inner-container container">
            <div class="ravis-title-t-2">
                <div class="title"><span>{{ trans('lang.title_room') }}</span></div>
            </div>
            <div class="desc">
                {!! trans('lang.description_room') !!}
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
                                <div class="title">{{ trans('lang.name_room_1') }} (15-20 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tariff_room') }}</div>
                                    <div class="value">Chf 175.-/{{ trans('lang.tariff_value_room_1') }}</div>
                                </div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tax_room') }}</div>
                                    <div class="value">Chf 3.-/{{ trans('lang.tax_value_room') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            {{ trans('lang.description_room_1') }}
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.bed_room') }}</div>
                                        <div class="value">80x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.equipment_room') }}</div>
                                        <div class="value">{!! trans('lang.description_equipment_room_1') !!}</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.services_room') }}</div>
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
                                <!-- DO NOT CHANGE THIS PART -->
                                @include('includes._ghix')
                                <div class="book_room more-info">{{ trans('lang.reservation_button_room') }}</div>
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
                                <div class="title">{{ trans('lang.name_room_2') }} (20-30 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tariff_room') }}</div>
                                    <div class="value">Chf 225.-/{{ trans('lang.tariff_value_room_1') }}</div>
                                    <div class="value">Chf 270.-/{{ trans('lang.tariff_value_room_2') }}</div>
                                </div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tax_room') }}</div>
                                    <div class="value">Chf 3.-/{{ trans('lang.tax_value_room') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            {{ trans('lang.description_room_2') }}
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.bed_room') }}</div>
                                        <div class="value">{{ trans('lang.bed_size_room') }} 160x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.equipment_room') }}</div>
                                        <div class="value">{!! trans('lang.description_equipment_room_2') !!}</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.services_room') }}</div>
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
                                <!-- DO NOT CHANGE THIS PART -->
                                @include('includes._ghix')
                                <div class="book_room more-info">{{ trans('lang.reservation_button_room') }}</div>
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
                                <div class="title">{{ trans('lang.name_room_3') }} (30-40 m<sup>2</sup>)</div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tariff_room') }}</div>
                                    <div class="value">Chf 295.-/{{ trans('lang.tariff_value_room_1') }}</div>
                                    <div class="value">Chf 350.-/{{ trans('lang.tariff_value_room_2') }}</div>
                                </div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tax_room') }}</div>
                                    <div class="value">Chf 3.-/{{ trans('lang.tax_value_room') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">
                            {{ trans('lang.description_room_3') }}
                        </div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.bed_room') }}</div>
                                        <div class="value">{{ trans('lang.bed_size_room') }} 160x200</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.equipment_room') }}</div>
                                        <div class="value">{!! trans('lang.description_equipment_room_3') !!}</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.services_room') }}</div>
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
                                <!-- DO NOT CHANGE THIS PART -->
                                @include('includes._ghix')
                                <div class="book_room more-info">{{ trans('lang.reservation_button_room') }}</div>
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
                                <div class="title">{{ trans('lang.name_room_4') }}</div>
                                <div class="price">
                                    <div class="title">{{ trans('lang.tariff_room') }}</div>
                                    <div class="value">Chf 690.- / {{ trans('lang.tariff_value_room_3') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 desc">{!! trans('lang.description_room_4') !!}</div>

                        <div class="col-md-12 m-sec">
                            <div class="amenities">
                                <ul class="list-inline clearfix">
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.hotel_room') }}</div>
                                        <div class="value">{{ trans('lang.description_hotel_room') }}</div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.bar_room') }}</div>
                                        <div class="value">{{ trans('lang.description_bar_room') }} </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="title">{{ trans('lang.restaurant_room') }}</div>
                                        <div class="value">{{ trans('lang.description_restaurant_room') }}</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="reservation_btn_container">
                                <!-- DO NOT CHANGE THIS PART -->
                                @include('includes._ghix')
                                <div class="book_room more-info">{{ trans('lang.reservation_button_room') }}</div>
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
