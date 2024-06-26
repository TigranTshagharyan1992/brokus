@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

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
                    @php($title = explode(".",  $data->entityDataLang->edl_title))
                    @if(isset($title[1]))
                        {{$title[0]}}<small>.{{$title[1]}}</small>
                    @else
                        {{$data->entityDataLang->edl_title}}
                    @endif
                </h1>
                <div class="hero-block__desc font-20 font-lg-18 font-sm-14">{{$data->entityDataLang->edl_text_1}}</div>
                <div class="hero-block__btn">
                    <a href="{{ route('about') }}" class="btn btn_lg color-primary">
                        <span class="font-sm-14">{{GetData::findWord($content, 0)}}</span>
                        <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="hero-block__footer">
                <div class="hero-block__about">
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
                </div>
                <div class="hero-block__social">
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
        <div class="hero-block__img">
            <img width="1216" height="624" src="{{asset(\App\Helpers\Helper::image($data->entityData->ed_image))}}" alt="Brokus">
        </div>
    </div>
    <div class="hero-block__numbers numbers-block">
        <div class="row">
            <div class="column sm-12 flex align-center">
                <div class="numbers-block__wrap">
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">{{$data->entityData->ed_char_1}}</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">{{$data->entityDataLang->edl_char_1}}</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">{{$data->entityData->ed_char_2}}</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">{{$data->entityDataLang->edl_char_2}}</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">{{$data->entityData->ed_char_3}}</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">{{$data->entityDataLang->edl_char_3}}</div>
                    </div>
                    <div class="numbers-block__item">
                        <div class="numbers-block__value font-64 font-lg-56 font-sm-40">{{$data->entityData->ed_char_4}}</div>
                        <div class="numbers-block__name font-lg-14 font-sm-12">{{$data->entityDataLang->edl_char_4}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="activity">
    <div class="row">
        <div class="column sm-12">
            <h2 class="text-center h2-font title-space_lg">{{$data->entityDataLang->edl_char_5}}</h2>
        </div>
        <div class="column sm-12 lg-6">
            <a href="{{ route('services') }}" class="activity-block">
                <div class="activity-block__img">
                    <img width="792" height="360" src="{{\App\Helpers\Helper::image($data->entityData->ed_char_5)}}" alt="Activity">
                </div>
                <div class="activity-block__body">
                    <div class="activity-block__title">
                        <div class="activity-block__icon btn btn_md btn_badge">
                            <i class="icon icon-briefcase"></i>
                        </div>
                        <span class="font-24 font-lg-20 font-sm-18 font-medium">{{$data->entityDataLang->edl_char_6}}</span>
                    </div>
                    <div class="activity-block__desc font-lg-14 font-sm-12">
                        {{$data->entityDataLang->edl_text_2}}
                    </div>
                    <div class="activity-block__btn">
                        <div class="btn btn_lg color-primary">
                            <span class="font-sm-14">{{GetData::findWord($content, 5)}}</span>
                            <i class="icon icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 lg-6">
            <a href="{{ route('pricePolicy') }}" class="activity-block">
                <div class="activity-block__img">
                    <img width="792" height="360" src="{{\App\Helpers\Helper::image($data->entityData->ed_char_6)}}" alt="Prices">
                </div>
                <div class="activity-block__body">
                    <div class="activity-block__title">
                        <div class="activity-block__icon btn btn_md btn_badge">
                            <i class="icon icon-dollar"></i>
                        </div>
                        <span class="font-24 font-lg-20 font-sm-18 font-medium">{{$data->entityDataLang->edl_char_7}}</span>
                    </div>
                    <div class="activity-block__desc font-lg-14 font-sm-12">
                        {{$data->entityDataLang->edl_text_3}}
                    </div>
                    <div class="activity-block__btn">
                        <div class="btn btn_lg color-primary">
                            <span class="font-sm-14">{{GetData::findWord($content, 5)}}</span>
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
            <h2 class="text-center h2-font title-space_lg">{{$data->entityDataLang->edl_char_8}}</h2>
        </div>
        <div class="column sm-12">
            <div class="partners__list">
                <div class="row">
                    @foreach($partners as $partner)
                        <div class="column sm-6 md-4 lg-3 xl-2">
                            <div class="partner-item">
                                <div class="partner-item__logo">
                                    <img src="{{asset(\App\Helpers\Helper::image($partner->entityData->ed_image))}}" alt="{{$partner->entityDataLang->edl_title}}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="column sm-12 text-center">
            <div class="partners__btn">
                <a href="{{ route('partners') }}" class="btn btn_primary-border btn_space_lg btn_lg">
                    <span>{{$data->entityDataLang->edl_char_9}}</span>
                    <i class="icon icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@if($errors->any())
    <h4>{{$errors->first()}}</h4>
@endif
<div class="modal success-modal modal_sm center-modal {{Session::get('success') == 'true'?'active':''}}">
    <div class="modal__wrapper">
        <div class="modal__body">
            <div class="modal__content text-center">
                <div class="row expanded">
                    <div class="column sm-12">
                        <div class="success-modal__icon">
                            <img src="{{asset('assets/img/success.svg')}}" alt="Success">
                        </div>
                        <div class="success-modal__title font-32 font-lg-26 font-sm-20">{{GetData::findWord($content, 34)}}</div>
                        <div class="success-modal__desc font-20 font-lg-18 font-sm-16">
                            {{GetData::findWord($content, 35)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
