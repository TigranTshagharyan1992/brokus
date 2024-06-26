@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
<!-- Page Css -->
<link rel="stylesheet" href="{{asset('assets/css/pages/about.css')}}">
<!-- ========================== -->
@endsection

@section('content')

<div class="fullscreen-block">
    <div class="fullscreen-block__bg">
        <img src="{{asset('assets/img/content/about.jpg')}}" alt="About">
    </div>
    <div class="row align-center">
        <div class="column sm-12 lg-10 xl-8">
            <h1 class="fullscreen-block__title font-48 font-lg-34 font-sm-24">{{$data->entityDataLang->edl_title}}</h1>
            <div class="fullscreen-block__text font-20 font-lg-16 font-sm-14">
                {!!$data->entityDataLang->edl_text_1!!}
            </div>
        </div>
    </div>
</div>

<div class="goals">
    <div class="row">
        <div class="column sm-12">
            <h2 class="goals__title h2-font title-space_lg text-center">
                {{$data->entityDataLang->edl_char_6}}
            </h2>
        </div>
        <div class="column sm-12">
            <div class="goals__list">
                <div class="row">
                    <div class="column sm-6 xl-3 flex">
                        <div class="goal-block">
                            <div class="goal-block__icon icon-square icon-square_main">
                                <div class="icon-square__wrap">
                                    <i class="icon icon-chart"></i>
                                </div>
                            </div>
                            <div class="goal-block__value font-80 font-lg-48 font-sm-40">{{$data->entityData->ed_char_1}}</div>
                            <div class="goal-block__title font-20 font-lg-16 font-sm-12">{{$data->entityDataLang->edl_char_1}}</div>
                        </div>
                    </div>
                    <div class="column sm-6 xl-3 flex">
                        <div class="goal-block">
                            <div class="goal-block__icon icon-square icon-square_main">
                                <div class="icon-square__wrap">
                                    <i class="icon icon-book"></i>
                                </div>
                            </div>
                            <div class="goal-block__value font-80 font-lg-48 font-sm-40">{{$data->entityData->ed_char_2}}</div>
                            <div class="goal-block__title font-20 font-lg-16 font-sm-12">{{$data->entityDataLang->edl_char_2}}</div>
                        </div>
                    </div>
                    <div class="column sm-6 xl-3 flex">
                        <div class="goal-block">
                            <div class="goal-block__icon icon-square icon-square_main">
                                <div class="icon-square__wrap">
                                    <i class="icon icon-users"></i>
                                </div>
                            </div>
                            <div class="goal-block__value font-80 font-lg-48 font-sm-40">{{$data->entityData->ed_char_3}}</div>
                            <div class="goal-block__title font-20 font-lg-16 font-sm-12">{{$data->entityDataLang->edl_char_3}}</div>
                        </div>
                    </div>
                    <div class="column sm-6 xl-3 flex">
                        <div class="goal-block">
                            <div class="goal-block__icon icon-square icon-square_main">
                                <div class="icon-square__wrap">
                                    <i class="icon icon-calculator"></i>
                                </div>
                            </div>
                            <div class="goal-block__value font-80 font-lg-48 font-sm-40">{{$data->entityData->ed_char_4}}</div>
                            <div class="goal-block__title font-20 font-lg-16 font-sm-12">{{$data->entityDataLang->edl_char_4}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team">
    <div class="row">
        <div class="column sm-12 md-4 xl-3 xl-offset-1 flex align-middle">
            <div class="team__body">
                <h2 class="team__title h2-font title-space_sm">{{$data->entityDataLang->edl_char_5}}</h2>
                <div class="team__desc font-20 font-lg-16 font-sm-14">{{$data->entityDataLang->edl_text_2}}</div>
            </div>
        </div>
        <div class="column sm-12 md-8 xl-7">
            <div class="team__slider">
                <div class="team-slider">
                    <div class="team-slider__wrap">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($data->entityGallery as $gallery)
                                    <a href="{{asset(\App\Helpers\Helper::image($gallery['eg_path']))}}" class="team-slider__slide swiper-slide glightbox" data-gallery="team">
                                        <img src="{{asset(\App\Helpers\Helper::image($gallery['eg_path']))}}" alt="team">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="team-slider__controls">
                        <div class="team-slider__arrows slider-arrows">
                            <div class="slider-arrow team-slider__arrow team-slider__arrow_prev">
                                <i class="icon icon-arrow-left-round"></i>
                            </div>
                            <div class="slider-arrow team-slider__arrow team-slider__arrow_next">
                                <i class="icon icon-arrow-right-round"></i>
                            </div>
                        </div>
                        <div class="team-slider__dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
