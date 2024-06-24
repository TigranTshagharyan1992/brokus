@extends('layouts.app')

{{--@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection--}}

{{--@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection--}}

{{--@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection--}}

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/price-policy.css')}}">
    <!-- ========================== -->
@endsection

@section('content')


<div class="fullscreen-block">
    <div class="fullscreen-block__bg">
        <img src="{{asset('assets/img/content/price-policy-main.jpg')}}" alt="Price Policy">
    </div>
    <div class="row align-center">
        <div class="column sm-12 lg-10 xl-8">
            <h1 class="fullscreen-block__title font-48 font-lg-34 font-sm-24">{{$data->entityDataLang->edl_title}}</h1>
            <div class="fullscreen-block__text font-20 font-lg-16 font-sm-14">
                {!! $data->entityDataLang->edl_text_1 !!}
            </div>
        </div>
    </div>
</div>

<div class="price-policy">
    <div class="row">
        <div class="column sm-12">
            <div class="price-policy__wrap">
                <div class="policy-block">
                    <div class="row">
                        <div class="column sm-12 lg-6">
                            <div class="policy-block__img">
                                <img width="792" height="528" src="{{asset('assets/img/content/containers.jpg')}}" alt="Containers">
                            </div>
                        </div>
                        <div class="column sm-12 lg-6">
                            <div class="policy-block__body">
                                <div class="policy-block__title h2-font">
                                    <div class="policy-block__icon icon-square icon-square_sm icon-square_primary">
                                        <div class="icon-square__wrap">
                                            <i class="icon icon-star"></i>
                                        </div>
                                    </div>
                                    <span>{{ $data->entityDataLang->edl_char_1 }}</span>
                                </div>
                                <div class="policy-block__text font-18 font-lg-16 font-sm-14">
                                    {{ $data->entityDataLang->edl_text_2 }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="policy-block">
                    <div class="row">
                        <div class="column sm-12 lg-6 lg-order-2">
                            <div class="policy-block__img">
                                <img width="792" height="528" src="{{asset('assets/img/content/trucks.jpg')}}" alt="Trucks">
                            </div>
                        </div>
                        <div class="column sm-12 lg-6 lg-order-1">
                            <div class="policy-block__body">
                                <div class="policy-block__title h2-font">
                                    <div class="policy-block__icon icon-square icon-square_sm icon-square_primary">
                                        <div class="icon-square__wrap">
                                            <i class="icon icon-hand-stars"></i>
                                        </div>
                                    </div>
                                    <span>{{ $data->entityDataLang->edl_char_2}}</span>
                                </div>
                                <div class="policy-block__text font-18 font-lg-16 font-sm-14">
                                    {{ $data->entityDataLang->edl_text_3}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
