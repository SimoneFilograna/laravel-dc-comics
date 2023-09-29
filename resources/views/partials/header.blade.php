@php
    $menuList = [
        [
            "name" => "CHARACTERS",
            "link" => "#",
        ],
        [
            "name" => "COMICS",
            "link" => "#",
        ],
        [
            "name" => "MOVIES",
            "link" => "#",
        ],
        [
            "name" => "TV",
            "link" => "#",
        ],
        [
            "name" => "GAMES",
            "link" => "#",
        ],
        [
            "name" => "COLLECTIBLES",
            "link" => "#",
        ],
        [
            "name" => "VIDEOS",
            "link" => "#",
        ],
        [
            "name" => "FANS",
            "link" => "#",
        ],
        [
            "name" => "NEWS",
            "link" => "#",
        ],
        [
            "name" => "SHOP",
            "link" => "#",
        ],
    ];
@endphp


<header>
    <div class="container top-container">

        <div class="logo">
            <img src="/images/dc-logo.png" alt="">
        </div>

        <div class="list-menu d-flex align-items-center">
            <ul class="nav">
                <li class="nav-item d-flex align-items-center" >
                    @foreach ( $menuList as $singleItem )
                    <a href="#" class="nav-link p-3">{{$singleItem["name"]}}</a>                     
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
    <div class="jumbotron-img"></div>
</header>