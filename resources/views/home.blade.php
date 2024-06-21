@extends('layouts.app')

{{--@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection--}}

{{--@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection--}}

{{--@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection--}}

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/home.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="hero-block">
    <div class="hero-block__wrap">
        <div class="hero-block__body">
            <div class="hero-block__bg">
                <span></span>
            </div>

            <div class="hero-block__content">
                <h1 class="hero-block__title font-48 font-lg-34 font-sm-28">
                    @if(explode(".",  $data->entityDataLang->edl_title))
                        @php($title = explode(".",  $data->entityDataLang->edl_title))
                        {{$title[0]}}<small>.{{$title[1]}}</small>
                    @else
                        {{$data->entityDataLang->edl_title}}
                    @endif
                </h1>
                <div class="hero-block__desc font-20 font-lg-18 font-sm-14">{{$data->entityDataLang->edl_text_1}}</div>
                <div class="hero-block__btn">
                    <a href="?p=about" class="btn btn_lg color-primary">
                        <span class="font-sm-14">մեր մասին</span>
                        <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="hero-block__footer">
                <div class="hero-block__about">
                    <a href="tel:+37491052052" class="info-pair">
                        <div class="info-pair__icon">
                            <i class="icon icon-phone"></i>
                        </div>
                        <div class="info-pair__value">
                            (+374) 91 052 052
                        </div>
                    </a>
                    <div class="info-pair">
                        <div class="info-pair__icon">
                            <i class="icon icon-message"></i>
                        </div>
                        <div class="info-pair__value">
                            office@brokus.am
                        </div>
                    </div>
                </div>
                <div class="hero-block__social">
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
        <div class="hero-block__img">
            <img width="1216" height="624" src="assets/img/hero.jpg" alt="Brokus">
        </div>
    </div>
    <div class="hero-block__numbers numbers-block">
        <div class="row">
            <div class="column sm-12 flex align-center">
                <div class="numbers-block__wrap">
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">20+</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">50+</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">ԳՈՐԾԸՆԿԵՐ</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">30+</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">ԹԻՄԻ ԱՆԴԱՄՆԵՐ</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">1000+</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="activity">
    <div class="row">
        <div class="column sm-12">
            <h2 class="text-center h2-font title-space_lg">Մի փոքր մեր գործունեությունից</h2>
        </div>
        <div class="column sm-12 lg-6">
            <a href="?p=what-we-do" class="activity-block">
                <div class="activity-block__img">
                    <img width="792" height="360" src="assets/img/content/activity.jpg" alt="Activity">
                </div>
                <div class="activity-block__body">
                    <div class="activity-block__title">
                        <div class="activity-block__icon btn btn_md btn_badge">
                            <i class="icon icon-briefcase"></i>
                        </div>
                        <span class="font-24 font-lg-20 font-sm-18 font-medium">Մեր Գործառույթները</span>
                    </div>
                    <div class="activity-block__desc font-lg-14 font-sm-12">
                        Ընկերության գործառույթներն ընդգրկում են Հայաստանի մաքսային սահմանով
                        տեղափոխվող ապրանքների մաքսային ձևակերպումների և դրա հետ կապված այլ
                        գործողությունների իրականացումը մաքսային մարմիններում:
                    </div>
                    <div class="activity-block__btn">
                        <div class="btn btn_lg color-primary">
                            <span class="font-sm-14">մանրամասն</span>
                            <i class="icon icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 lg-6">
            <a href="?p=price-policy" class="activity-block">
                <div class="activity-block__img">
                    <img width="792" height="360" src="assets/img/content/price-policy.jpg" alt="Prices">
                </div>
                <div class="activity-block__body">
                    <div class="activity-block__title">
                        <div class="activity-block__icon btn btn_md btn_badge">
                            <i class="icon icon-dollar"></i>
                        </div>
                        <span class="font-24 font-lg-20 font-sm-18 font-medium">Գնային Քաղաքականություն</span>
                    </div>
                    <div class="activity-block__desc font-lg-14 font-sm-12">
                        Ընկերության կողմից մատուցվող ծառայությունների գները, կողմերի բանակցային
                        պայմանավորվածության արդյունքում կարող են որոշվել և/կամ ենթարկվել
                        փոփոխությունների` կախված բեռի փոքրածավալ կամ մեծածավալ լինելուց...
                    </div>
                    <div class="activity-block__btn">
                        <div class="btn btn_lg color-primary">
                            <span class="font-sm-14">մանրամասն</span>
                            <i class="icon icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="partners">
    <div class="row">
        <div class="column sm-12">
            <h2 class="text-center h2-font title-space_lg">Մեզ վստահում են</h2>
        </div>
        <div class="column sm-12">
            <div class="partners__list">
                <div class="row">
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/chronograph.svg" alt="Chronograph">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/tom-tailor.svg" alt="tom-tailor">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/calvin-klein.svg" alt="celvin-clein">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                    <div class="column sm-6 md-4 lg-3 xl-2">
                        <div class="partner-item">
                            <div class="partner-item__logo">
                                <img src="assets/img/partners/c&f.svg" alt="c&f">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column sm-12 text-center">
            <div class="partners__btn">
                <a href="?p=partners" class="btn btn_primary-border btn_space_lg btn_lg">
                    <span>Բոլոր գործընկերները</span>
                    <i class="icon icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal success-modal modal_sm center-modal">
    <div class="modal__wrapper">
        <div class="modal__body">
            <div class="modal__content text-center">
                <div class="row expanded">
                    <div class="column sm-12">
                        <div class="success-modal__icon">
                            <img src="assets/img/success.svg" alt="Success">
                        </div>
                        <div class="success-modal__title font-32 font-lg-26 font-sm-20">ՇՆՈՐՀԱԿԱԼՈՒԹՅՈՒՆ!</div>
                        <div class="success-modal__desc font-20 font-lg-18 font-sm-16">
                            Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
