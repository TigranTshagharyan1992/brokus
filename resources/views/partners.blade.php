@extends('layouts.app')

{{--@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection--}}

{{--@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection--}}

{{--@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection--}}

@section('styles')

    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/partners.css')}}">
    <!-- ========================== -->
@endsection

@section('content')


<div class="partners">
    <div class="row">
        <div class="column sm-12">
            <h1 class="text-center h2-font title-space_lg">{{$data->entityDataLang->edl_title}}</h1>
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
    </div>
</div>
@endsection
