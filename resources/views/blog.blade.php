@extends('layouts.app')

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
                <h1 class="blog-heading__title font-48 font-lg-34 font-sm-28">ԲԼՈԳ</h1>
                <div class="blog-heading__desc font-20 font-lg-16 font-sm-14">
                    Մեր բլոգում մաքսային աշխարհը ներկայացնում ենք հասանելի ու հետաքրքիր ձևաչափով։ Պարզաբանում ենք
                    բարդ ընթացակարգերը, կիսվում օգտակար խորամանկություններով և պատմում զվարճալի դեպքեր ոլորտից։
                    Եթե մաքսային հարցերը ձեզ թվում են ձանձրալի, ապա պարզապես դեռ չեք կարդացել մեր բլոգը։
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
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
        <div class="column sm-12 md-6 lg-4">
            <a href="{{ route('blogInner', ['lang' => app()->getLocale()]) }}" class="blog-card">
                <div class="blog-card__preview">
                    <img width="516" height="296" src="{{asset('assets/img/content/blog-card.jpg')}}" alt="Blog">

                    <div class="blog-card__info info-pair">
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-date"></i>
                            <span>Փետրվար 16 2025</span>
                        </div>
                        <div class="blog-card__info-item info-pair__item">
                            <i class="icon icon-clock"></i>
                            <span>6 րոպե</span>
                        </div>
                    </div>
                </div>
                <div class="blog-card__body">
                    <div class="blog-card__title">
                        Ճշգրտվել է ապրանքների ցանկը, որոնց համար մաքսային հայտարարագրման ժամանակ
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
