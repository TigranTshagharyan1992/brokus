<div class="lang-switcher toggler">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            @php($img = 'assets/img/'.$current_locale.'.svg')
            <div class="lang-switcher__current lang-switcher__item toggler-trigger">
                <img width="20" height="20" src="{{asset($img)}}" alt="{{ $current_locale }}">
                <span>{{ $current_locale }}</span>
                <i class="icon icon-chevron-down"></i>
            </div>
        @endif
    @endforeach
    <div class="lang-switcher__dropdown">
        <div class="lang-switcher__dropdown-body">
            <div class="lang-switcher__dropdown-items">
                @foreach($available_locales as $locale_name => $available_locale)
                    @if($available_locale !== $current_locale)
                        @php($img = 'assets/img/'.$available_locale.'.svg')
                        <div class="lang-switcher__item">
                            <a href="{{route($currentRouteName, ['lang' => $available_locale])}}">
                                <img width="20" height="20" src="{{asset($img)}}" alt="{{ $available_locale }}">
                                <span>{{ $available_locale }}</span>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
