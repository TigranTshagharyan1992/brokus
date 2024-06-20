
<!-- footer -->
<footer class="footer">
    <div class="footer__cooperate">
                <div class="cooperate">
                    <div class="row align-center">
                        <div class="column sm-12 lg-10 xl-8">
                            <div class="cooperate__wrap">
                                <div class="cooperate__heading">
                                    <h3 class="cooperate__title h2-font title-space_sm">Ցանկանում ե՞ք Համագործակցել</h3>
                                    <div class="cooperate__desc font-20 font-sm-16">Դիմեք մեզ հետադարձ կապի միջոցով</div>
                                </div>
                                <form action="#" class="cooperate__form">
                                    <div class="form-fields">
                                        <div class="form-fields__item">
                                            <div class="form-field form-field_default form-field_md">
                                                <div class="form-field__label">ԱՆՈՒՆ ԱԶԳԱՆՈՒՆ</div>
                                                <div class="form-field__target">
                                                    <input type="text" name="name" class="form-field__input" required>
                                                </div>
                                            </div>
                                            <div class="form-field form-field_default form-field_md">
                                                <div class="form-field__label">ՀԵՌԱԽՈՍԱՀԱՄԱՐ</div>
                                                <div class="form-field__target">
                                                    <input type="number" name="phone" class="form-field__input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-fields__item">
                                            <div class="form-field form-field_default form-field_md">
                                                <div class="form-field__label">ԷԼ․ ՀԱՍՑԵ</div>
                                                <div class="form-field__target">
                                                    <input type="email" name="email" class="form-field__input" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-fields__item">
                                            <div class="form-field form-field_default form-field_textarea form-field_md">
                                                <div class="form-field__label">ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆ</div>
                                                <div class="form-field__target">
                                                    <textarea class="form-field__input" name="message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cooperate__form-submit">
                                        <button type="submit" class="btn btn_lg btn_space_lg btn_primary">
                                            <span>ուղարկել հաղորդագրություն</span>
                                            <i class="icon icon-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="footer__main">
        <div class="row">
            <div class="column sm-12">
                <div class="footer__wrap">
                    <div class="footer__content">
                        <div class="footer__logo">
                            <a href="{{ route('home') }}" class="main-logo">
                                <img src="{{asset('assets/img/logo-white.svg')}}" alt="Brokus">
                            </a>
                        </div>
                        <div class="footer__nav">
                            <div class="footer__category font-18 font-lg-16 font-sm-14 font-bold">ԲԱԺԻՆՆԵՐ</div>
                            <div class="footer__links">
                                <a href="{{ route('about') }}" class="footer__link font-lg-14 font-sm-12">Մեր Մասին</a>
                                <a href="{{ route('services') }}" class="footer__link font-lg-14 font-sm-12">Գործառույթներ</a>
                                <a href="{{ route('pricePolicy') }}" class="footer__link font-lg-14 font-sm-12">Գնային Քաղաքականություն</a>
                                <a href="{{ route('partners') }}" class="footer__link font-lg-14 font-sm-12">Գործընկերներ</a>
                                <a href="{{ route('contacts') }}" class="footer__link font-lg-14 font-sm-12">Կապ</a>
                            </div>
                        </div>
                        <div class="footer__contacts">
                            <div class="footer__category font-18 font-lg-16 font-sm-14 font-bold">ԿՈՆՏԱԿՏՆԵՐ</div>
                            <div class="footer__about">
                                <a href="tel:+37491052052" class="info-pair">
                                    <div class="info-pair__icon">
                                        <i class="icon icon-phone"></i>
                                    </div>
                                    <div class="info-pair__value font-sm-12">
                                        (+374) 91 052 052, (+374) 41 052 052
                                    </div>
                                </a>
                                <div class="info-pair">
                                    <div class="info-pair__icon">
                                        <i class="icon icon-message"></i>
                                    </div>
                                    <div class="info-pair__value font-sm-12">
                                        office@brokus.am
                                    </div>
                                </div>
                                <div class="info-pair">
                                    <div class="info-pair__icon">
                                        <i class="icon icon-pin"></i>
                                    </div>
                                    <div class="info-pair__value font-sm-12">
                                        Ծովակալ Իսակովի պող․ շենք 10
                                    </div>
                                </div>
                            </div>
                            <div class="footer__social">
                                <a href="#" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                    <i class="icon icon-facebook"></i>
                                </a>
                                <a href="#" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                    <i class="icon icon-instagram"></i>
                                </a>
                                <a href="#" class="btn btn_white-border btn_badge btn_sm" target="_blank">
                                    <i class="icon icon-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <span class="font-14 font-sm-12">©2024 Brokus.am All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
