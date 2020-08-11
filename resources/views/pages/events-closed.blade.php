@extends('main')

@section('title',trans('lang.event'))

@section('current_page')
    <?php $current_page = 'events'?>
@endsection

@section('content')

    <!--Breadcrumb Section-->
    <section style="flex: 1" id="breadcrumb-section" data-bg-img="/img/backgrounds/events.jpg">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title text-uppercase">{{ trans('lang.contact_hotel_for_info') }}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="current"><a href="{{ route('events_closed.locale') }}">{{ trans('lang.event') }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End of Breadcrumb Section-->

@endsection