@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/faq.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="fullscreen-block fullscreen-block_faq">
    <div class="fullscreen-block__bg">
        <img src="{{asset('assets/img/content/activity-main.jpg')}}" alt="Price Policy">
    </div>
    <div class="row">
        <div class="column sm-12 lg-10 xl-5">
            <h1 class="fullscreen-block__title font-48 font-lg-34 font-sm-24">{{ $data->entityDataLang->edl_title }}</h1>
            <div class="fullscreen-block__text font-20 font-lg-16 font-sm-14">
                {!! $data->entityDataLang->edl_text_1 !!}
            </div>
        </div>
    </div>
</div>

<div class="faq">
    <div class="row">
        <div class="column sm-12 lg-10 xl-7">
            <div class="accordion">
                @foreach($faqs as $faq)
                    <div class="accordion__item">
                        <div class="accordion__header" tabindex="0">
                            <div class="accordion__title font-bold font-20 font-lg-18 font-sm-14">
                                {{ $faq->entityDataLang->edl_title }}
                            </div>
                            <div class="accordion__arrow"></div>
                        </div>
                        <div class="accordion__body" style="display: none;">
                            <div class="font-lg-14 font-sm-12">
                                {!! $faq->entityDataLang->edl_text_1 !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
