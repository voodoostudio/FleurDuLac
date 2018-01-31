@extends('main')

@section('title',trans('lang.event'))

@section('current_page')
    <?php $current_page = 'events'?>
@endsection

@section('content')

    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/events.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{ trans('lang.event') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_events') }}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('events.locale') }}">{{ trans('lang.event') }}</a></li>
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
                            <p>{!! trans('lang.description_events_1') !!}</p>
                            <p>{!! trans('lang.description_events_2') !!}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">{{ trans('lang.title_events_1') }}</p>
                            <p>{!! trans('lang.description_events_3') !!}</p>
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
                            <div class="title">{{ trans('lang.title_video_events') }}</div>
                            <div class="sub-title">{{ trans('lang.sub_title_video_events') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row btn-box">
                {{--<a href="http://www.youtube.com/watch?v=23BFVDEdi-0" class="play-btn video-url">--}}
                {{--<i class="fa fa-play"></i>--}}
                {{--</a>--}}
                <a href="/video/events.mov" class="play-btn video-url">
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
                            <a href="/pdf/forfaits_boissons_apritif.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_1') }}</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/forfaits_amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_2') }}</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/amuse_bouches.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_3') }}</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/forfait_boissons.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_4') }}</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/carte_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_5') }}</a><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <a href="/pdf/menus_banquets.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_6') }}</a><br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">{{ trans('lang.title_events_2') }}</p>
                            <div class="col-xs-12 col-sm-4 margin_bottom_30">
                                <img src="/img/events/1.jpg" alt="" style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 margin_bottom_30">
                                <img src="/img/events/2.jpg" alt=""  style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 margin_bottom_30">
                                <img src="/img/events/3.jpg" alt=""  style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 margin_bottom_30">
                                <img src="/img/events/4.jpg" alt=""  style="width: 100%">
                            </div>
                            <div class="col-xs-12 col-sm-4 margin_bottom_30">
                                <img src="/img/events/5.jpg" alt=""  style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p>{!! trans('lang.description_events_4') !!}</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="/pdf/forfait_mariage.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_7') }}</a><br><br>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="/pdf/cgv_mariage.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><br>{{ trans('lang.title_pdf_events_8') }}</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">{{ trans('lang.title_events_3') }}</p>
                            <p>{!! trans('lang.description_events_5') !!}</p>
                            <p><i class="fa fa-wifi" aria-hidden="true"></i> {{ trans('lang.free_wi_fi') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">{{ trans('lang.title_events_4') }}</p>
                            <p>{{ trans('lang.description_events_6') }}</p>
                            <div class="table_container">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>{{ trans('lang.title_table_events_1') }}</th>
                                        <th>{{ trans('lang.title_table_events_2') }}</th>
                                        <th>{{ trans('lang.title_table_events_3') }}</th>
                                        <th>{{ trans('lang.title_table_events_4') }}</th>
                                        <th>{{ trans('lang.title_table_events_5') }}</th>
                                        <th>{{ trans('lang.title_table_events_6') }}</th>
                                        <th>{{ trans('lang.title_table_events_7') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>14,10x7,70<br>
                                            {{ trans('lang.table_events_h') }} 2,50
                                        </td>
                                        <td>14,70 x 5<br>
                                            {{ trans('lang.table_events_h') }} 2,20
                                        </td>
                                        <td>9 x 5,70<br>
                                            {{ trans('lang.table_events_h') }} 2,70
                                        </td>
                                        <td>5,70 x 3,90<br>
                                            {{ trans('lang.table_events_h') }} 2,50
                                        </td>
                                        <td>10,60 x 5,50<br>
                                            {{ trans('lang.table_events_h') }} 2,47
                                        </td>
                                        <td>8,80 x 4</td>
                                        <td>8,80 x 6,70<br>
                                            {{ trans('lang.table_events_h') }} 2,50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('lang.table_events_1') }}</td>
                                        <td>150</td>
                                        <td></td>
                                        <td>30</td>
                                        <td></td>
                                        <td>60 {{ trans('lang.table_events_pers') }}</td>
                                        <td rowspan="5">40 {{ trans('lang.table_events_max') }}</td>
                                        <td rowspan="5">50 {{ trans('lang.table_events_max') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('lang.table_events_2') }}</td>
                                        <td>40</td>
                                        <td>56</td>
                                        <td>16</td>
                                        <td></td>
                                        <td>24 {{ trans('lang.table_events_pers') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('lang.table_events_3') }}</td>
                                        <td>70</td>
                                        <td></td>
                                        <td>16</td>
                                        <td>25</td>
                                        <td>30 {{ trans('lang.table_events_pers') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('lang.table_events_4') }}</td>
                                        <td>60</td>
                                        <td>80</td>
                                        <td>35</td>
                                        <td></td>
                                        <td>24 {{ trans('lang.table_events_pers') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('lang.table_events_5') }}</td>
                                        <td>40</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>15</td>
                                        <td>30 {{ trans('lang.table_events_pers') }}</td>
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