<header>
    <div class='top-header'>
        <div class='container'>
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>

    <div class="container">

        <ul>
            <li>
                <a @if (Route::currentRouteName() == 'characters') class='link active' @endif href="{{ route('characters') }}">Characters</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'comics') class='link active' @endif href="{{ route('comics') }}">Comics</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'movies') class='link active' @endif href="{{ route('movies') }}">Movies</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'tv') class='link active' @endif href="{{ route('tv') }}">Tv</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'games') class='link active' @endif href="{{ route('games') }}">Games</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'collectibles') class='link active' @endif href="{{ route('collectibles') }}">Collectibles</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'videos') class='link active' @endif href="{{ route('videos') }}">Videos</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'fans') class='link active' @endif href="{{ route('fans') }}">Fans</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'news') class='link active' @endif href="{{ route('news') }}">News</a>
            </li>
    
            <li>
                <a @if (Route::currentRouteName() == 'shop') class='link active' @endif href="{{ route('shop') }}">Shop</a>
            </li>
        </ul>

    </div>
</header>