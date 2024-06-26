@extends('layouts.app')

@section('title') {{ $data->entitySeo->es_title ?? $data->entityDataLang->edl_title }} @endsection

@section('keywords') {{ $data->entitySeo->es_keywords ?? ''}} @endsection

@section('description') {{ $data->entitySeo->es_description ?? ''}} @endsection

@section('styles')

    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/contact.css')}}">
    <!-- ========================== -->
@endsection

@section('content')



<div class="contact">
    <div class="row">
        <div class="column sm-12">
            <h1 class="contact__title h2-font">{{$data->entityDataLang->edl_title}}</h1>
        </div>
        <div class="column sm-12 lg-5">
            <div class="contact__heading">
                <div class="contact__about">
                    <a href="tel:+3741052052" class="about-item">
                        <div class="about-item__icon">
                            <i class="icon icon-phone"></i>
                        </div>
                        <div class="about-item__body">
                            <div class="about-item__label font-sm-14">{{GetData::findWord($content, 32)}}</div>
                            <div class="about-item__value font-24 font-lg-20 font-sm-16">{{GetData::findWord($content, 14)}}</div>
                        </div>
                    </a>
                    <div class="about-item">
                        <div class="about-item__icon">
                            <i class="icon icon-message"></i>
                        </div>
                        <div class="about-item__body">
                            <div class="about-item__label font-sm-14">{{GetData::findWord($content, 9)}}</div>
                            <div class="about-item__value font-24 font-lg-20 font-sm-16">{{GetData::findWord($content, 16)}}</div>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-item__icon">
                            <i class="icon icon-pin"></i>
                        </div>
                        <div class="about-item__body">
                            <div class="about-item__label font-sm-14">{{GetData::findWord($content, 33)}}</div>
                            <div class="about-item__value font-24 font-lg-20 font-sm-16">{{GetData::findWord($content, 17)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column sm-12 lg-7 xl-6 relative">
            <div class="contact__map main-map">
                <div class="main-map__title font-20 font-lg-18 font-sm-16 font-medium">{{GetData::findWord($content, 17)}}</div>
                <div class="main-map__wrap">
                    <iframe
                        width="728"
                        height="464"
                        style="border:0"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1524.381863057!2d44.48701815350622!3d40.16981403234471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd58c5e0a63f%3A0x29cfc2a876b8d14e!2sPROF%20CUSTOMS%20SERVICE!5e0!3m2!1sru!2sam!4v1688729931529!5m2!1sru!2sam">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="column sm-12 lg-5">
            <div class="contact__cooperate" id="cooperate">
                <div class="contact__cooperate-title font-32 font-lg-28 font-sm-24">{{GetData::findWord($content, 6)}}</div>
                <div class="contact__cooperate-desc font-20 font-lg-18 font-sm-16">{{GetData::findWord($content, 7)}}</div>
                <form method="post" action="{{ route('contact',['lang' => app()->getLocale()]) }}" class="contact__form">
                    @csrf
                    <div class="form-fields">
                        <div class="form-fields__item">
                            <div class="form-field form-field_default form-field_default-border form-field_md">
                                <div class="form-field__label">{{GetData::findWord($content, 8)}}</div>
                                <div class="form-field__target">
                                    <input type="text" name="name" class="form-field__input" required>
                                </div>
                            </div>
                            <div class="form-field form-field_default form-field_default-border form-field_md">
                                <div class="form-field__label">{{GetData::findWord($content, 32)}}</div>
                                <div class="form-field__target">
                                    <input type="number" name="phone" class="form-field__input" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-fields__item">
                            <div class="form-field form-field_default form-field_default-border form-field_md">
                                <div class="form-field__label">{{GetData::findWord($content, 9)}}</div>
                                <div class="form-field__target">
                                    <input type="email" name="email" class="form-field__input" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-fields__item">
                            <div class="form-field form-field_default form-field_default-border form-field_textarea form-field_md">
                                <div class="form-field__label">{{GetData::findWord($content, 10)}}</div>
                                <div class="form-field__target">
                                    <textarea class="form-field__input" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact__form-submit">
                        <button type="submit" class="btn btn_lg btn_space_lg btn_primary">
                            <span class="font-16 font-sm-14">{{GetData::findWord($content, 11)}}</span>
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </form>
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
