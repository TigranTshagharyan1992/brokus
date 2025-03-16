<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/top.css')}}">

<div class="not-found">
    <div class="row">
        <div class="column sm-12">
            <div class="not-found__code">404</div>
            <h1 class="not-found__title font-38 font-lg-24 font-sm-20">Էջը չի գտնվել</h1>
            <div class="not-found__text font-18 font-lg-16 font-sm-14">Այս էջը գոյություն չունի կամ հեռացվել է: Խնդրում ենք վերադառնալ գլխավոր էջ։</div>
            <div class="not-found__bnt">
                <a href="{{ route('home') }}" class="btn btn_lg btn_space_lg btn_primary">
                    <span class="font-16 font-sm-14">վերադառնալ</span>
                    <i class="icon icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
