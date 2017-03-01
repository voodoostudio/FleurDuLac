@extends('main')

@section('title',trans('lang.bar_and_terrace'))

@section('current_page')
    <?php $current_page = 'bar_and_terrace'?>
@endsection

@section('content')  
    
    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="/img/backgrounds/bar_and_terrace.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{ trans('lang.bar_and_terrace') }}</div>
                    <div class="sub-title">{{ trans('lang.sub_title_bar_and_terrace') }}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('bar_and_terrace.locale') }}">{{ trans('lang.bar_and_terrace') }}</a></li>
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
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif;">{{ trans('lang.title_bar_and_terrace_1') }}</p>
                            <p>{!! trans('lang.description_bar_and_terrace_1') !!}</p>
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
                            <p style="color: #d2bd7f; font: 30px/70px 'Great Vibes', Arial, Helvetica, sans-serif; margin-top: 50px;">{{ trans('lang.title_bar_and_terrace_2') }}</p>
                            <p> {!! trans('lang.description_bar_and_terrace_2') !!}</p>
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