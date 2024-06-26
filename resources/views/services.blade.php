@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/activity.css')}}">
    <!-- ========================== -->
@endsection

@section('content')


<div class="fullscreen-block">
    <div class="fullscreen-block__bg">
        <img src="{{asset('assets/img/content/activity-main.jpg')}}" alt="Activity">
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

<div class="process">
    <div class="row">
        <div class="column sm-12">
            <h2 class="process__title h2-font title-space_lg text-center">
                {{$data->entityDataLang->edl_char_1}}
            </h2>
            <div class="process-slider">
                <div class="process-slider__wrap">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="process-slider__slide swiper-slide">
                                <div class="process-card">
                                    <div class="process-card__heading">
                                        <div class="goal-block__icon icon-square icon-square_lg icon-square_primary">
                                            <div class="icon-square__wrap">
                                                <i class="icon icon-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-card__body font-18 font-lg-16 font-sm-14">
                                        {{$data->entityDataLang->edl_text_2}}
                                    </div>
                                </div>
                            </div>
                            <div class="process-slider__slide swiper-slide">
                                <div class="process-card">
                                    <div class="process-card__heading">
                                        <div class="goal-block__icon icon-square icon-square_lg icon-square_primary">
                                            <div class="icon-square__wrap">
                                                <i class="icon icon-checklist"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-card__body font-18 font-lg-16 font-sm-14">
                                        {{$data->entityDataLang->edl_text_3}}
                                    </div>
                                </div>
                            </div>
                            <div class="process-slider__slide swiper-slide">
                                <div class="process-card">
                                    <div class="process-card__heading">
                                        <div class="goal-block__icon icon-square icon-square_lg icon-square_primary">
                                            <div class="icon-square__wrap">
                                                <i class="icon icon-banknote"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-card__body font-18 font-lg-16 font-sm-14">
                                        {{$data->entityDataLang->edl_text_4}}
                                    </div>
                                </div>
                            </div>
                            <div class="process-slider__slide swiper-slide">
                                <div class="process-card">
                                    <div class="process-card__heading">
                                        <div class="goal-block__icon icon-square icon-square_lg icon-square_primary">
                                            <div class="icon-square__wrap">
                                                <i class="icon icon-truck"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-card__body font-18 font-lg-16 font-sm-14">
                                        {{$data->entityDataLang->edl_text_5}}
                                    </div>
                                </div>
                            </div>
                            <div class="process-slider__slide swiper-slide">
                                <div class="process-card">
                                    <div class="process-card__heading">
                                        <div class="goal-block__icon icon-square icon-square_lg icon-square_primary">
                                            <div class="icon-square__wrap">
                                                <i class="icon icon-user-speak"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-card__body font-18 font-lg-16 font-sm-14">
                                        {{$data->entityDataLang->edl_text_6}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process-slider__arrows">
                        <div class="slider-arrows">
                            <div class="slider-arrow process-slider__arrow process-slider__arrow_prev">
                                <i class="icon icon-arrow-left-round"></i>
                            </div>
                            <div class="slider-arrow process-slider__arrow process-slider__arrow_next">
                                <i class="icon icon-arrow-right-round"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="stages">
    <div class="row">
        <div class="column sm-12 xl-6">
            <div class="stage-block">
                <div class="stage-block__label">
                    <div class="stage-block__label-wrap"> {{$data->entityDataLang->edl_char_2}}</div>
                </div>
                <div class="stage-block__wrap">
                    <div class="stage-block__row">
                        <div class="stage-block__col hide-sm"></div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-right stage-item_arrow-bottom">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/paperwork.svg')}}" alt="paperwork">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 21)}}</div>
                                <div class="stage-item__arrow">
                                    <span class="hide-sm">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stage-block__row">
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/van.svg')}}" alt="Van">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 22)}}</div>
                                <div class="stage-item__arrow">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right active">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse.svg')}}" alt="Warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 23)}}</div>
                                <div class="stage-item__arrow">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/clock.svg')}}" alt="Clock">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 24)}}</div>
                                <div class="stage-item__arrow">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/van.svg')}}" alt="Van">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 22)}}</div>
                                <div class="stage-item__arrow">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column sm-12 xl-6">
            <div class="stage-block">
                <div class="stage-block__label">
                    <div class="stage-block__label-wrap">{{$data->entityDataLang->edl_char_3}}</div>
                </div>
                <div class="stage-block__wrap">
                    <div class="stage-block__row align-center">
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-right stage-item_arrow-bottom">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/van.svg')}}" alt="Van">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 22)}}</div>
                                <div class="stage-item__arrow">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stage-block__row align-center">
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/paperwork.svg')}}" alt="paperwork">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 21)}}</div>
                                <div class="stage-item__arrow">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right active">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse-filled.svg')}}" alt="Warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 25)}}</div>
                                <div class="stage-item__arrow">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/company.svg')}}" alt="Clock">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 26)}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column sm-12 xl-6">
            <div class="stage-block">
                <div class="stage-block__label">
                    <div class="stage-block__label-wrap">{{$data->entityDataLang->edl_char_4}}</div>
                </div>
                <div class="stage-block__wrap">
                    <div class="stage-block__row">
                        <div class="stage-block__col hide-sm"></div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-right stage-item_arrow-bottom-left active">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse-filled.svg')}}" alt="warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 25)}}</div>
                                <div class="stage-item__arrow">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stage-block__row">
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/paperwork.svg')}}" alt="paperwork">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 27)}}</div>
                                <div class="stage-item__arrow">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/company.svg')}}" alt="Company">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 26)}}</div>
                                <div class="stage-item__arrow">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/paperwork.svg')}}" alt="Paperwork">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 28)}}</div>
                                <div class="stage-item__arrow">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse-filled.svg')}}" alt="Warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 25)}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column sm-12 xl-6">
            <div class="stage-block">
                <div class="stage-block__label">
                    <div class="stage-block__label-wrap">{{$data->entityDataLang->edl_char_5}}</div>
                </div>
                <div class="stage-block__wrap">
                    <div class="stage-block__row">
                        <div class="stage-block__col hide-sm"></div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-left stage-item_arrow-bottom-left">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/paperwork.svg')}}" alt="paperwork">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 28)}}</div>
                                <div class="stage-item__arrow">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right active">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse-filled.svg')}}" alt="Warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 25)}}</div>
                                <div class="stage-item__arrow">
                                    <span>6</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/van.svg')}}" alt="Van">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 22)}}</div>
                                <div class="stage-item__arrow">
                                    <span>7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stage-block__row">
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right active">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/warehouse-filled.svg')}}" alt="warehouse">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 25)}}</div>
                                <div class="stage-item__arrow">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/money.svg')}}" alt="Money">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 29)}}</div>
                                <div class="stage-item__arrow">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-right">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/company.svg')}}" alt="Company">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 26)}}</div>
                                <div class="stage-item__arrow">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                        <div class="stage-block__col">
                            <div class="stage-item stage-item_text-bottom stage-item_arrow-top-left">
                                <div class="stage-item__wrap">
                                    <img width="40" height="40" src="{{asset('assets/img/money.svg')}}" alt="Money">
                                </div>
                                <div class="stage-item__text">{{GetData::findWord($content, 31)}}</div>
                                <div class="stage-item__arrow">
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cooperate-block">
    <div class="row">
        <div class="column sm-12">
            <div class="cooperate-block__wrap">
                <div class="cooperate-block__title font-32 font-md-26 font-sm-20">{{$data->entityDataLang->edl_char_6}}</div>
                <div class="cooperate-block__btn">
                    <a href="?p=contact#cooperate" class="btn btn_lg btn_primary btn_space_lg">
                        <span class="font-sm-14">{{$data->entityDataLang->edl_char_7}}</span>
                        <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
