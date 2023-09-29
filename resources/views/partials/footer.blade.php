@php
    $credits = [
        [
            "credTitle" => "DC COMICS",
            "linkedElements" => [
                [
                    "name" => "Characters",
                    "path" => "/"
                ],
                [
                    "name" => "Comics",
                    "path" => "/"
                ],
                [
                    "name" => "Movies",
                    "path" => "/"
                ],
                [
                    "name" => "TV",
                    "path" => "/"
                ],
                [
                    "name" => "Games",
                    "path" => "/"
                ],
                [
                    "name" => "Videos",
                    "path" => "/"
                ],
                [
                    "name" => "News",
                    "path" => "/"
                ],
            ]
        ],
        [
            "credTitle" => "DC",
            "linkedElements" => [
                [
                    "name" => "Terms Of Use",
                    "path" => "/",
                ],
                [
                    "name" => "Privacy policy (New)",
                    "path" => "/",
                ],
                [
                    "name" => "Ad Choices",
                    "path" => "/",
                ],
                [
                    "name" => "Advertising",
                    "path" => "/",
                ],
                [
                    "name" => "Jobs",
                    "path" => "/"
                ],
                [
                    "name" => "Subscriptions",
                    "path" => "/",
                ],
                [
                    "name" => "Talent Workshops",
                    "path" => "/",
                ],
                [
                    "name" => "CPSC Certificates",
                    "path" => "/",
                ],
                [
                    "name" => "Ratings",
                    "path" => "/",
                ],
                [
                    "name" => "Shop Help",
                    "path" => "/",
                ],
                [
                    "name" => "Contact Us",
                    "path" => "/",
                ],
            ],
        ],
        [
            "credTitle" => "SITES",
            "linkedElements" => [
                [
                    "name" => "DC",
                    "path" => "/",
                ],
                [
                    "name" => "MAD Magazine",
                    "path" => "/",
                ],
                [
                    "name" => "DC Kids",
                    "path" => "/",
                ],
                [
                    "name" => "DC Universe",
                    "path" => "/",
                ],
                [
                    "name" => "DC Power visa",
                    "path" => "/",
                ],
                
            ],
        ],
        [
            "credTitle" => "SHOP",
            "linkedElements" => [
                [
                    "name" => "Shop DC",
                    "path" => "/",
                ],
                [
                    "name" => "Shop DC Collectibles",
                    "path" => "/",
                ],
            ]
        ],
    ]

@endphp

<footer>
    <footer>
        <div class="maxi-container-foot">

            <div class="container d-flex justify-content-between">
                <div class="credits pt-5">
                    <div class="row align-items-start pb-4 pt-2">

                        @foreach ($credits as $singleCredit)
                            <div class="col-4 d-flex" v-for="singleCredit in credits">
                                <div class="box text-white">
                                    <h5 class="foot-title pb-2 fw-bold">{{$singleCredit["credTitle"]}}</h5>
                                    <ul class="credits-list">

                                        @foreach ( $singleCredit["linkedElements"] as $singleRef )
                                            <li >
                                                <a href="#" class="text-link">{{$singleRef["name"]}}</a>
                                            </li>                                   
                                        @endforeach
                                    </ul>
                                </div>
                            </div>                           
                        @endforeach
                        
                    </div>
                </div>
                <div class="big-image"></div>
            </div>
        </div>

        <div class="last-foot-container p-5">
            <div class="container d-flex justify-content-between">
                <div class="button-cont">
                    <button class="btn btn-outline-primary">SIGN UP NOW!</button>
                </div>
                <div class="ref d-flex gap-3 align-items-center">
                    <div>
                        <a href="#" class="follow-title">FOLLOW US</a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/dc/?locale=it_IT">
                            <img src="/images/footer-facebook.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://twitter.com/DCOfficial">
                            <img src="/images/footer-twitter.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCiifkYAs_bq1pt_zbNAzYGg">
                            <img src="/images/footer-youtube.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.pinterest.it/dccomics/">
                            <img src="/images/footer-pinterest.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.pscp.tv/">
                            <img src="/images/footer-periscope.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</footer>