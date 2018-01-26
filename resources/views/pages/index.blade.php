@extends('main')

@section('title','La Fleur du Lac')

@section('current_page')
    <?php $current_page = 'home'?>
@endsection

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

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
                        <div class="up-sec">{{ trans('lang.sub_title_index_1') }}</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/2.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">{{ trans('lang.sub_title_index_2') }}</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/3.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">{{ trans('lang.sub_title_index_3') }}</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/4.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">{{ trans('lang.sub_title_index_4') }}</div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="img-container" data-bg-img="/img/slider/5.jpg"></div>
                <div class="slide-caption">
                    <div class="inner-container clearfix">
                        <div class="down-sec">La Fleur du Lac</div>
                        <div class="up-sec">{{ trans('lang.sub_title_index_5') }}</div>
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
                    <div class="title"><span>{{ trans('lang.title_index_1') }}</span></div>
                    <div class="sub-title">{{ trans('lang.sub_title_index_6') }}</div>
                </div>
                <div class="content">
                    <p>{{ trans('lang.description_index_1') }}</p>
                    <p>{{ trans('lang.description_index_2') }}</p>
                    <p>{!! trans('lang.description_index_3') !!}</p>
{{--                    <p style="font-size: 12px; opacity: 0.7">{{ trans('lang.description_index_4') }}</p>--}}
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
                            <div class="title">{{ trans('lang.title_video_index') }}</div>
                            <div class="sub-title">{{ trans('lang.sub_title_video_index') }}</div>
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
                    <div class="title">{{ trans('lang.title_index_2') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_index_7') }}</div>
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
                               data-title="{{ trans('lang.description_img_index_1') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_1') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 lobby">
                        <figure>
                            <img src="/img/gallery/2.jpg" alt="image 2"/>
                            <a href="/img/gallery/2.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_2') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_2') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/3.jpg" alt="image 3"/>
                            <a href="/img/gallery/3.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_3') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_3') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/4.jpg" alt="image 4"/>
                            <a href="/img/gallery/4.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_4') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_4') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/5.jpg" alt="image 5"/>
                            <a href="/img/gallery/5.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_27') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_27') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/6.jpg" alt="image 6"/>
                            <a href="/img/gallery/6.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_28') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_28') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/7.jpg" alt="image 7"/>
                            <a href="/img/gallery/7.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_29') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_29') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/8.jpg" alt="image 8"/>
                            <a href="/img/gallery/8.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_30') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_30') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 restaurant">
                        <figure>
                            <img src="/img/gallery/9.jpg" alt="image 9"/>
                            <a href="/img/gallery/9.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_5') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_5') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/10.jpg" alt="image 10"/>
                            <a href="/img/gallery/10.jpg" class="more-details"
                               data-title='{{ trans('lang.description_img_index_6') }}'>Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_6') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/7.jpg" alt="image 7"/>
                            <a href="/img/gallery/7.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_7') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_7') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/8.jpg" alt="image 8"/>
                            <a href="/img/gallery/8.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_8') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_8') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/9.jpg" alt="image 9"/>
                            <a href="/img/gallery/9.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_9') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_9') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/10.jpg" alt="image 10"/>
                            <a href="/img/gallery/10.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_10') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_10') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 lobby">
                        <figure>
                            <img src="/img/gallery/11.jpg" alt="image 11"/>
                            <a href="/img/gallery/11.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_11') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_11') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/12.jpg" alt="image 12"/>
                            <a href="/img/gallery/12.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_12') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_12') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 bars">
                        <figure>
                            <img src="/img/gallery/13.jpg" alt="image 13"/>
                            <a href="/img/gallery/13.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_13') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_13') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 restaurant">
                        <figure>
                            <img src="/img/gallery/14.jpg" alt="image 14"/>
                            <a href="/img/gallery/14.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_14') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_14') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/15.jpg" alt="image 15"/>
                            <a href="/img/gallery/15.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_15') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_15') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/16.jpg" alt="image 16"/>
                            <a href="/img/gallery/16.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_16') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_16') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/17.jpg" alt="image 17"/>
                            <a href="/img/gallery/17.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_17') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_17') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/18.jpg" alt="image 18"/>
                            <a href="/img/gallery/18.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_18') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_18') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/19.jpg" alt="image 19"/>
                            <a href="/img/gallery/19.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_19') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_19') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/20.jpg" alt="image 20"/>
                            <a href="/img/gallery/20.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_20') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_20') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/21.jpg" alt="image 21"/>
                            <a href="/img/gallery/21.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_21') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_21') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/22.jpg" alt="image 22"/>
                            <a href="/img/gallery/22.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_22') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_22') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 rooms">
                        <figure>
                            <img src="/img/gallery/23.jpg" alt="image 23"/>
                            <a href="/img/gallery/23.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_23') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_23') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/24.jpg" alt="image 24"/>
                            <a href="/img/gallery/24.jpg" class="more-details" data-title="{{ trans('lang.description_img_index_24') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_24') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/25.jpg" alt="image 25"/>
                            <a href="/img/gallery/25.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_25') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_25') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/26.jpg" alt="image 26"/>
                            <a href="/img/gallery/26.jpg" class="more-details"
                               data-title="{{ trans('lang.description_img_index_26') }}">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4>{{ trans('lang.description_img_index_26') }}</h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/27.jpg" alt="image 27"/>
                            <a href="/img/gallery/27.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/28.jpg" alt="image 28"/>
                            <a href="/img/gallery/28.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/29.jpg" alt="image 29"/>
                            <a href="/img/gallery/29.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/30.jpg" alt="image 30"/>
                            <a href="/img/gallery/30.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/31.jpg" alt="image 31"/>
                            <a href="/img/gallery/31.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/32.jpg" alt="image 32"/>
                            <a href="/img/gallery/32.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/33.jpg" alt="image 33"/>
                            <a href="/img/gallery/33.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/34.jpg" alt="image 34"/>
                            <a href="/img/gallery/34.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/35.jpg" alt="image 35"/>
                            <a href="/img/gallery/35.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/36.jpg" alt="image 36"/>
                            <a href="/img/gallery/36.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/37.jpg" alt="image 37"/>
                            <a href="/img/gallery/37.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/38.jpg" alt="image 38"/>
                            <a href="/img/gallery/38.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/39.jpg" alt="image 39"/>
                            <a href="/img/gallery/39.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/40.jpg" alt="image 40"/>
                            <a href="/img/gallery/40.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/41.jpg" alt="image 41"/>
                            <a href="/img/gallery/41.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/42.jpg" alt="image 42"/>
                            <a href="/img/gallery/42.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/43.jpg" alt="image 43"/>
                            <a href="/img/gallery/43.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/44.jpg" alt="image 44"/>
                            <a href="/img/gallery/44.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                    <li class="item col-xs-6 col-md-4 pool">
                        <figure>
                            <img src="/img/gallery/45.jpg" alt="image 45"/>
                            <a href="/img/gallery/45.jpg" class="more-details"
                               data-title="">Enlarge</a>
                            {{--<figcaption>--}}
                                {{--<h4></h4>--}}
                            {{--</figcaption>--}}
                        </figure>
                    </li>
                </ul>

                <!--<a href="pages/gallery-masonry.html" class="gallery-more-btn ravis-btn btn-type-2">More ...</a>-->
            </div>
        </div>
    </section>
    <!-- End of Gallery -->

@endsection

@section ('scripts')
    <script src="https://privatedeal.com/slider-button/{{$lang}}/lafleurdulac" async></script>
@endsection

