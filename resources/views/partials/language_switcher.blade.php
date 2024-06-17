<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span class="ml-2 mr-2 text-gray-700">{{ $current_locale }}</span>
        @else

            <a class="ml-1 underline ml-2 mr-2" href="{{route($currentRouteName, ['lang' => $available_locale])}}">
                <span> {{ $available_locale }} </span>
            </a>
        @endif
    @endforeach
</div>
