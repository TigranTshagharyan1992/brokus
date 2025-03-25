
<!-- footer -->

<footer class="footer {{$currentRouteName == 'home'?'footer_advanced':''}}">
    @if($currentRouteName == 'home')
        <div class="footer__cooperate">
            <div class="cooperate">
                <div class="row align-center">
                    <div class="column sm-12 lg-10 xl-8">
                        <div class="cooperate__wrap">
                            <div class="cooperate__heading">
                                <h3 class="cooperate__title h2-font title-space_sm">{{GetData::findWord($content, 6)}}</h3>
                                <div class="cooperate__desc font-20 font-sm-16">{{GetData::findWord($content, 7)}}</div>
                            </div>
                            <form method="post" action="{{ route('contact',['lang' => app()->getLocale()]) }}" class="cooperate__form">
                                @csrf
                                <div class="form-fields">
                                    <div class="form-fields__item">
                                        <div class="form-field form-field_default form-field_md">
                                            <div class="form-field__label">{{GetData::findWord($content, 8)}}</div>
                                            <div class="form-field__target">
                                                <label for="name"></label>
                                                <input type="text" name="name" class="form-field__input" id="name" required>
                                            </div>
                                        </div>
                                        <div class="form-field form-field_default form-field_md">
                                            <div class="form-field__label">{{GetData::findWord($content, 32)}}</div>
                                            <div class="form-field__target">
                                                <label for="number"></label>
                                                <input type="number" name="phone" class="form-field__input" id="number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-fields__item">
                                        <div class="form-field form-field_default form-field_md">
                                            <div class="form-field__label">{{GetData::findWord($content, 9)}}</div>
                                            <div class="form-field__target">
                                                <label for="email"></label>
                                                <input type="email" name="email" class="form-field__input" id="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-fields__item">
                                        <div class="form-field form-field_default form-field_textarea form-field_md">
                                            <div class="form-field__label">{{GetData::findWord($content, 10)}}</div>
                                            <div class="form-field__target">
                                                <label for="message"></label>
                                                <textarea class="form-field__input"  id="message" name="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cooperate__form-submit">
                                    <button type="submit" class="btn btn_lg btn_space_lg btn_primary">
                                        <span>{{GetData::findWord($content, 11)}}</span>
                                        <i class="icon icon-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="footer__main">
        <div class="row">
            <div class="column sm-12">
                <div class="footer__wrap">
                    <div class="footer__content">
                        <div class="footer__logo">
                            <a href="{{ route('home', ['lang' => app()->getLocale()]) }}" class="main-logo">
                                <img src="{{asset('assets/img/logo-white.svg')}}" alt="Brokus">
                            </a>
                        </div>
                        <div class="footer__body">
                            <div class="footer__nav">
                                <div class="footer__category font-18 font-lg-16 font-sm-14 font-bold">{{GetData::findWord($content, 12)}}</div>
                                <div class="footer__links">
                                    <a href="{{ route('about', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">{{GetData::findWord($content, 0)}}</a>
                                    <a href="{{ route('services', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">{{GetData::findWord($content, 1)}}</a>
                                    <a href="{{ route('pricePolicy', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">{{GetData::findWord($content, 2)}}</a>
                                    <a href="{{ route('partners', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">{{GetData::findWord($content, 3)}}</a>
                                    <a href="{{ route('contacts', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">{{GetData::findWord($content, 4)}}</a>
                                </div>
                            </div>
                            <div class="footer__nav">
                                <div class="footer__links">
                                    <a href="{{ route('about', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">Կապ</a>
                                    <a href="{{ route('services', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">Հաճախ տրվող հարցեր</a>
                                    <a href="{{ route('pricePolicy', ['lang' => app()->getLocale()]) }}" class="footer__link font-lg-14 font-sm-12">Գաղտնիության քաղաքականություն</a>
                                </div>
                            </div>
                            <div class="footer__contacts">
                                <div class="footer__category font-18 font-lg-16 font-sm-14 font-bold">{{GetData::findWord($content, 13)}}</div>
                                <div class="footer__about">
                                    <a href="tel: {{GetData::findWord($content, 14)}}" class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-phone"></i>
                                        </div>
                                        <div class="info-pair__value font-sm-12">
                                            {{GetData::findWord($content, 14)}}, {{GetData::findWord($content, 15)}}
                                        </div>
                                    </a>
                                    <div class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-message"></i>
                                        </div>
                                        <div class="info-pair__value font-sm-12">
                                            {{GetData::findWord($content, 16)}}
                                        </div>
                                    </div>
                                    <div class="info-pair">
                                        <div class="info-pair__icon">
                                            <i class="icon icon-pin"></i>
                                        </div>
                                        <div class="info-pair__value font-sm-12">
                                            {{GetData::findWord($content, 17)}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer__social">
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
                    <div class="footer__copyright">
                        <span class="font-14 font-sm-12">©2025 Brokus.am All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
