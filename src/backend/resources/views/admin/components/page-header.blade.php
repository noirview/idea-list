<div class="page-header">
    <div class="_container">
        <div class="page-header__body">
            <h1 class="page-header__title">{{ $title }}</h1>
            <div class="page-header__actions">
                @isset($createButton)
                    <a href="{{ $createButton['url'] }}" class="btn btn__main">{{ $createButton['title'] }}</a>
                @endisset
                <div class="page-header__list">
                    <div class="page-header__lang">
                        RU
                        <svg>
                            <use xlink:href="{{ asset('img/admin/sprite.svg') }}#drop"></use>
                        </svg>
                        <ul class="page-header__lang-list">
                            <li><a href="#">eng</a></li>
                            <li class="active"><a href="#">ru</a></li>
                        </ul>
                    </div>
                    <a href="#" class="page-header__search">
                        <svg>
                            <use xlink:href="{{ asset('img/admin/sprite.svg') }}#search"></use>
                        </svg>
                    </a>
                    <a href="#" class="page-header__mess">
                        <svg>
                            <use xlink:href="{{ asset('img/admin/sprite.svg') }}#messpc"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="page-header__nav">
                @foreach($navigation as $navItem)
                    <li class="page-header__nav-item @isset($navItem['active'])active @endisset"><a
                            href="{{ $navItem['url'] }}">{{ $navItem['title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- Page header -->
