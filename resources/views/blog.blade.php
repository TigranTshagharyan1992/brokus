@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/blog.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="blog-heading">
    <div class="row">
        <div class="column sm-12 md-6 lg-5">
            <div class="blog-heading__body">
                <h1 class="blog-heading__title font-48 font-lg-34 font-sm-28">{{ $data->entityDataLang->edl_title }}</h1>
                <div class="blog-heading__desc font-20 font-lg-16 font-sm-14">
                    {{ $data->entityDataLang->edl_text_1 }}
                </div>
            </div>
        </div>
        <div class="column sm-12 md-6 lg-7">
            <div class="blog-heading__preview">
                <img width="1302" height="456" src="{{asset('assets/img/content/blog-heading.png')}}" alt="Blog">
            </div>
        </div>
    </div>
</div>

<div class="blog-listing">
    <div class="row">
        @foreach($blogs as $blog)
            <div class="column sm-12 md-6 lg-4">
                <a href="{{ route('blogInner', ['id' => \App\Helpers\Helper::seoUrlOrId($blog), 'lang' => app()->getLocale()]) }}" class="blog-card">
                    <div class="blog-card__preview">
                        <img width="516" height="296" src="{{asset(\App\Helpers\Helper::image($blog->entityData->ed_image))}}" alt="Blog">

                        <div class="blog-card__info info-pair">
                            @if($blog->entityData->ed_datetime_1)
                                <div class="blog-card__info-item info-pair__item">
                                    <i class="icon icon-date"></i>
                                    <span>{{\App\Helpers\Helper::prettyDate($blog->entityData->ed_datetime_1)}}</span>
                                </div>
                            @endif

                            <div class="blog-card__info-item info-pair__item">
                                <i class="icon icon-clock"></i>
                                <span>{{$blog->entityData->ed_char_1}} րոպե</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__body">
                        <div class="blog-card__title">
                            {{ $blog->entityDataLang->edl_title }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            <div class="column sm-12">
                {{ $blogs->links('vendor.pagination.semantic-ui') }}
            </div>
    </div>
</div>

@endsection
