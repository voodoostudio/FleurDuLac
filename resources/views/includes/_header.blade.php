<!-- Header Section -->
<header id="main-header">
    <div class="inner-container container">
        <div class="l-sec col-xs-7 col-sm-6 col-md-3">
            <a href="{{ route('home.locale') }}" id="t-logo">
                <img src="/img/logo.svg" alt="Hotel Fleur du Lac">
            </a>
        </div>
        <div class="r-sec col-xs-5 col-sm-6 col-md-9">
            <nav id="main-menu">
                <ul class="list-inline">
                    <li class="<?php if($current_page == 'home') {echo 'active';} ?>"><a href="{{ route('home.locale') }}">{{ trans('lang.home') }}</a></li>
                    <li class="<?php if($current_page == 'rooms') {echo 'active';} ?>"><a href="{{ route('rooms.locale') }}">{{ trans('lang.room') }}</a></li>
                    <li class="<?php if($current_page == 'restaurant') {echo 'active';} ?>"><a href="{{ route('restaurant.locale') }}">{{ trans('lang.restaurant') }}</a></li>
                    <li class="<?php if($current_page == 'bar_and_terrace') {echo 'active';} ?>"><a href="{{ route('bar_and_terrace.locale') }}">{{ trans('lang.bar_and_terrace') }}</a></li>
<!--                    <li class="--><?php //if($current_page == 'offres') {echo 'active';} ?><!--"><a href="#">Offres</a></li>-->
                    <li class="<?php if($current_page == 'events') {echo 'active';} ?>"><a href="{{ route('events.locale') }}">{{ trans('lang.event') }}</a></li>
                    <li class="<?php if($current_page == 'contact') {echo 'active';} ?>"><a href="{{ route('contact.locale') }}">{{ trans('lang.contact') }}</a></li>
                </ul>
            </nav>
            <div id="main-menu-handle" class="ravis-btn btn-type-2"><i class="fa fa-bars"></i><i class="fa fa-close"></i></div><!-- Mobile Menu handle -->
            <a href="#" id="header-book-bow" class="ravis-btn btn-type-2"><span>Reservation</span> <i class="fa fa-calendar"></i></a>
            <div id="languages" class="languages">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="ravis-btn btn-type-2 {{ ($localeCode == App::getLocale()) ? 'active' : '' }}" rel="alternate" hreflang="{{$localeCode}}" href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">
                            <span>{{ $properties['native'] }}</span>
                        </a>
                @endforeach
            </div>

        </div>
    </div>
    <div id="mobile-menu-container"></div>
</header>
<!-- End of Header Section -->