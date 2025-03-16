@extends('layouts.app')

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
            <h1 class="fullscreen-block__title font-48 font-lg-34 font-sm-24">Հաճախ տվող հարցեր</h1>
            <div class="fullscreen-block__text font-20 font-lg-16 font-sm-14">
                Մեր բլոգում մաքսային աշխարհը ներկայացնում ենք հասանելի ու հետաքրքիր ձևաչափով։
                Պարզաբանում ենք բարդ ընթացակարգերը, կիսվում օգտակար խորամանկություններով և
                պատմում զվարճալի դեպքեր ոլորտից։ Եթե մաքսային հարցերը ձեզ թվում են ձանձրալի,
                ապա պարզապես դեռ չեք կարդացել մեր բլոգը։
            </div>
        </div>
    </div>
</div>

<div class="faq">
    <div class="row">
        <div class="column sm-12 lg-10 xl-7">
            <div class="accordion">
                <div class="accordion__item">
                    <div class="accordion__header" tabindex="0">
                        <div class="accordion__title font-bold font-20 font-lg-18 font-sm-14">
                            Ինչ է մաքսային բրոքերություն և ինչու ես դրա կարիքը:
                        </div>
                        <div class="accordion__arrow"></div>
                    </div>
                    <div class="accordion__body" style="display: none;">
                        <div class="font-lg-14 font-sm-12">
                            Մաքսային բրոքերությունը զբաղվում է մաքսային ընթացակարգերի կազմակերպմամբ, մաքսային տուրքերի
                            վճարմամբ և բոլոր անհրաժեշտ փաստաթղթերի պատրաստմամբ՝ Ձեր ապրանքի ներմուծումը կամ արտահանումը
                            առանց խնդիրների իրականացնելու համար: Մաքսային բրոքերություն պետք է լինի, որպեսզի ապահովեք,
                            որ բոլոր մաքսային կանոնները և պահանջները լիովին պահպանվեն, խուսափեք տուգանքներից ու ուշացումներից:
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header" tabindex="0">
                        <div class="accordion__title font-bold font-20 font-lg-18 font-sm-14">
                            Որքա՞ն ժամանակ է պահանջվում մաքսային ընթացակարգերի համար:
                        </div>
                        <div class="accordion__arrow"></div>
                    </div>
                    <div class="accordion__body" style="display: none;">
                        <div class="font-lg-14 font-sm-12">
                            Մաքսային բրոքերությունը զբաղվում է մաքսային ընթացակարգերի կազմակերպմամբ, մաքսային տուրքերի
                            վճարմամբ և բոլոր անհրաժեշտ փաստաթղթերի պատրաստմամբ՝ Ձեր ապրանքի ներմուծումը կամ արտահանումը
                            առանց խնդիրների իրականացնելու համար: Մաքսային բրոքերություն պետք է լինի, որպեսզի ապահովեք,
                            որ բոլոր մաքսային կանոնները և պահանջները լիովին պահպանվեն, խուսափեք տուգանքներից ու ուշացումներից:
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
