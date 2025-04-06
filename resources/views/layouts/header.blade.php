<!-- Header -->
<header class="header">
    <div class="row">
        <div class="column sm-12">
            <div class="header__wrapper">
                <div class="header__content">
                    <div class="header__burger">
                        <div class="burger">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 7C20.75 7.41421 20.4142 7.75 20 7.75L4 7.75C3.58579 7.75 3.25 7.41421 3.25 7C3.25 6.58579 3.58579 6.25 4 6.25L20 6.25C20.4142 6.25 20.75 6.58579 20.75 7Z" fill="#293241"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 12C20.75 12.4142 20.4142 12.75 20 12.75L4 12.75C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25L20 11.25C20.4142 11.25 20.75 11.5858 20.75 12Z" fill="#293241"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 17C20.75 17.4142 20.4142 17.75 20 17.75L4 17.75C3.58579 17.75 3.25 17.4142 3.25 17C3.25 16.5858 3.58579 16.25 4 16.25L20 16.25C20.4142 16.25 20.75 16.5858 20.75 17Z" fill="#293241"/>
                            </svg>
                        </div>
                    </div>
                    <div class="header__logo">
                        <a href="{{ route('home', ['lang' => app()->getLocale()]) }}" class="main-logo">
                            <img width="77" height="48" src="{{asset('assets/img/logo.svg')}}" alt="Brokus">
                        </a>
                    </div>
                    <div class="header__menu header-menu">
                        <div class="header-menu__wrap">
                            <nav class="header-menu__nav">
                                <div class="header-menu__link {{$currentRouteName == 'about' ? 'active' : ''}}">

                                    <a href="{{ route('about', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 0)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'services' ? 'active':''}}">
                                    <a href="{{ route('services', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 1)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'pricePolicy' ? 'active':''}}">
                                    <a href="{{ route('pricePolicy', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 2)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'partners' ? 'active':''}}">
                                    <a href="{{ route('partners', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 3)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'contacts' ? 'active':''}}">
                                    <a href="{{ route('contacts', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 4)}}</a>
                                </div>
                                <div class="header-menu__link {{$currentRouteName == 'blog' ? 'active':''}}">
                                    <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}">{{GetData::findWord($content, 36)}}</a>
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
