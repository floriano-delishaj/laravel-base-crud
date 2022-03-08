<header>
    <div class="container">
        <div class="header-left">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/dc-logo.png') }}" />
            </a>
        </div>

        <div class="header-right">
            <ul>
                <li class="">
                    <a href="{{ route('comics.index') }}">
                        Comics
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('comics.create') }}">
                        Create comics
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
