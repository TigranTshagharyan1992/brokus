@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/blog-inner.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="blog-inner">
    <div class="row align-between">
        <div class="column sm-12 lg-7">
            <div class="blog-inner__main">
                <div class="blog-inner__header">
                    <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}" class="blog-inner__arrow">
                        <img width="32" height="32" src="{{asset('assets/img/arrow-left.svg')}}" alt="arrow left">
                    </a>
                    <div class="blog-inner__heading">
                        <div class="blog-inner__category font-bold font-14 font-sm-12">Բլոգ</div>
                        <h1 class="blog-inner__title font-black font-32 font-md-26 font-sm-18">
                            {{ $data->entityDataLang->edl_title }}
                        </h1>
                    </div>
                </div>
                <div class="blog-inner__img">
                    <img width="929" height="528" src="{{asset(\App\Helpers\Helper::image($data->entityData->ed_image))}}" alt="Blog">
                </div>
                <div class="blog-inner__info">
                    <div class="info-pair info-pair_md">
                        <div class="info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>{{\App\Helpers\Helper::prettyDate($data->entityData->ed_datetime_1)}}</span>
                        </div>
                        <div class="info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>{{$data->entityData->ed_char_1}} րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-inner__body widgets">
                    @foreach($widgets as $widget)
                        @if($widget['entity_type'] == 'Text')
                            <div class="widget text-widget">
                                {!! $widget['entityDataLang']['edl_text_1'] !!}
                            </div>
                        @endif
                        @if($widget['entity_type'] == 'Title')
                            <div class="video-widget__title">
                                {!! $widget['entityDataLang']['edl_title'] !!}
                            </div>
                            @endif
                        @if($widget['entity_type'] == 'DesignText')
                                <div class="widget important-widget">
                                    {!! $widget['entityDataLang']['edl_text_1'] !!}
                                </div>                        @endif
                        @if($widget['entity_type'] == 'ImageRight')
                            <h3 class="h3-font media-inner__title">{{$widget['entityDataLang']['edl_char_1']}}</h3>
                        @endif
                        @if($widget['entity_type'] == 'ImageLeft')
                            <h3 class="h3-font media-inner__title">{{$widget['entityDataLang']['edl_char_1']}}</h3>
                        @endif
                        @if($widget['entity_type'] == 'Video' && isset($widget['entityData']['ed_image']) && $widget['entityData']['ed_image'])
                                <div class="widget text-widget video-widget">
                                    @if(isset($widget['entityData']['ed_text_1']) && $widget['entityData']['ed_text_1'])
                                        @php $youtube = explode("v=", $widget['entityData']['ed_text_1']) @endphp
                                        <a href="https://www.youtube.com/embed/{{ $youtube[1] }}" class="video-widget__preview glightbox" data-gallery="gallery1">
                                            <div class="video-widget__btn">
                                                <img width="64" height="64" src="{{asset('assets/img/play.svg')}}" alt="play">
                                            </div>
                                            <img width="929" height="528" src="{{asset(\App\Helpers\Helper::image($widget['entityData']['ed_image']))}}" alt="video">
                                        </a>
                                    @endif
                                </div>
                        @endif
                            @if($widget['entity_type'] == 'ImageRight')
                                <div class="widget text-widget image-widget image-widget_right">
                                    <img width="304" height="192" src="{{asset(\App\Helpers\Helper::image($widget['entityData']['ed_image']))}}" alt="Widget">
                                    {!! $widget['entityDataLang']['edl_text_1'] !!}
                                </div>
                            @endif
                            @if($widget['entity_type'] == 'ImageLeft')
                                <div class="widget text-widget image-widget image-widget_left">
                                    <img width="304" height="192" src="{{asset(\App\Helpers\Helper::image($widget['entityData']['ed_image']))}}" alt="Widget">
                                    {!! $widget['entityDataLang']['edl_text_1'] !!}
                                </div>
                            @endif
                    @endforeach
                    <div class="widget social-widget">
                        <div class="social-widget__title">կիսվել այս հոդվածով</div>
                        <div class="social-widget__icons">
                            <div class="social-widget__icons-wrap">
                                <div class="btn btn_gray-border btn_badge btn_lg st-custom-button cursor" data-network="facebook" data-title="#" data-url="">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="btn btn_gray-border btn_badge btn_lg st-custom-button cursor" data-network="linkedin" data-title="#" data-url="">
                                    <i class="icon icon-linkedin"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($blogs))
        <div class="column sm-12 lg-5 xl-4">
            <div class="suggested-blogs">
                <div class="suggested-blogs__title">կարող է հետաքրքիր լինել</div>
                <div class="suggested-blogs__list">
                    @foreach($blogs as $blog)
                        <a href="{{ route('blogInner', ['id' => \App\Helpers\Helper::seoUrlOrId($blog), 'lang' => app()->getLocale()]) }}" class="blog-card">
                            <div class="blog-card__preview">
                                <img width="516" height="296" src="{{asset(\App\Helpers\Helper::image($blog->entityData->ed_image))}}" alt="Blog">
                                <div class="blog-card__info info-pair">
                                    <div class="blog-card__info-item info-pair__item">
                                        <i class="icon icon-date"></i>
                                        <span>{{\App\Helpers\Helper::prettyDate($blog->entityData->ed_datetime_1)}}</span>
                                    </div>
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
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
