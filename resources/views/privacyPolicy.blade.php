@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/privacy-policy.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="privacy-policy">
    <div class="privacy-policy__heading">
        <div class="row">
            <div class="column sm-12 text-center">
                <h1 class="privacy-policy__title font-48 font-lg-34 font-sm-28">{{ $data->entityDataLang->edl_title }}</h1>
            </div>
        </div>
    </div>
    <div class="privacy-policy__body">
        <div class="row align-center">
            <div class="column sm-12 lg-10 xl-8">
                <div class="privacy-policy__content font-sm-14 rich-text">
                    {!!  $data->entityDataLang->edl_text_1 !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
