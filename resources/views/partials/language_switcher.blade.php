<li>
    <a href="#" class="dropdown-toggle">
        @switch($current_locale)
            @case('fa')
                فارسی
            @break

            @case('en')
                English
            @break

            @default
                زبان
        @endswitch
    </a>
    <ul class="sub-menu">
        @foreach ($available_locales as $locale_name => $available_locale)
            @if ($available_locale === $current_locale)
                <li>
                    <a class="dropdown-item text-success">
                        @switch($locale_name)
                            @case('فارسی')
                                Fa
                            @break

                            @case('انگلیسی')
                                EN
                            @break

                            @default
                        @endswitch
                    </a>
                </li>
            @else
                <li>
                    <a class="dropdown-item" href="/language/{{ $available_locale }}">
                        <span>
                            @switch($locale_name)
                                @case('انگلیسی')
                                    EN
                                @break

                                @case('فارسی')
                                    فارسی
                                @break

                                @default
                            @endswitch
                        </span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
