<!-- Header -->
<header class="header">
    <div class="row">
        <div class="column sm-12">
            <div class="header__wrapper">
                <div class="header__content">
                    <div class="header__burger">
                        <div class="burger toggler-trigger">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="burger__line" fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="#4F4F4F" />
                                <path class="burger__line" fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z" fill="#4F4F4F" />
                                <path class="burger__line" fill-rule="evenodd" clip-rule="evenodd" d="M2 18C2 17.4477 2.44772 17 3 17H21C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18Z" fill="#4F4F4F" />
                            </svg>
                        </div>
                    </div>
                    <div class="header__logo">
                        <a href="{{ route('home') }}" class="main-logo">
                            <img width="77" height="48" src="{{asset('assets/img/logo.svg')}}" alt="Brokus">
                        </a>
                    </div>
                    <div class="header__menu header-menu">
                        <div class="header-menu__wrap">
                            <nav class="header-menu__nav">
                                <div class="header-menu__link {{$currentRouteName == 'about' ? 'active' : ''}}">

                                    <a href="{{ route('about') }}">{{GetData::findWord($content, 0)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'services' ? 'active':''}}">
                                    <a href="{{ route('services') }}">{{GetData::findWord($content, 1)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'pricePolicy' ? 'active':''}}">
                                    <a href="{{ route('pricePolicy') }}">{{GetData::findWord($content, 2)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'partners' ? 'active':''}}">
                                    <a href="{{ route('partners') }}">{{GetData::findWord($content, 3)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'contacts' ? 'active':''}}">
                                    <a href="{{ route('contacts') }}">{{GetData::findWord($content, 4)}}</a>
                                </div>
                            </nav>
                            <div class="header-menu__footer">
                                <div class="header-menu__about">
                                    <a href="tel: {{GetData::findWord($content, 14)}}" class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-phone"></i>
                                        </div>
                                        <div class="info-pair__value">
                                            {{GetData::findWord($content, 14)}}
                                        </div>
                                    </a>
                                    <div class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-message"></i>
                                        </div>
                                        <div class="info-pair__value">
                                            {{GetData::findWord($content, 16)}}
                                        </div>
                                    </div>
                                    <div class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-pin"></i>
                                        </div>
                                        <div class="info-pair__value">
                                            {{GetData::findWord($content, 17)}}
                                        </div>
                                    </div>
                                </div>
                                <div class="header-menu__social">
                                    <a href="{{GetData::findWord($content, 18)}}" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                        <i class="icon icon-facebook"></i>
                                    </a>
                                    <a href="{{GetData::findWord($content, 19)}}" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                        <i class="icon icon-instagram"></i>
                                    </a>
                                    <a href="{{GetData::findWord($content, 20)}}" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                        <i class="icon icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__action">
                    @include('layouts/language_switcher')
                </div>
            </div>
        </div>
    </div>
</header>
