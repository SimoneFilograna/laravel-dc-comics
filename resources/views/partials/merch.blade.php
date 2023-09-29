@php
    $merch = [
        [
            "logoMerch" => "/images/buy-comics-digital-comics.png",
            "merchName" => "DIGITAL COMICS",
        ],

        [
            "logoMerch" => "/images/buy-comics-merchandise.png",
            "merchName" => "DC MERCHANDISE",
        ],

        [
            "logoMerch" => "/images/buy-comics-subscriptions.png",
            "merchName" => "SUBSCRIPTION",
        ],

        [
            "logoMerch" =>"/images/buy-comics-shop-locator.png",
            "merchName" => "COMIC SHOP LOCATOR",
        ],
        [
            "logoMerch" => "/images/buy-dc-power-visa.svg",
            "merchName" => "DC POWER VISA",
        ],
];
@endphp

<div class="blue-container">
    <div class="big-merch-container">
        @foreach ($merch as $singleMerch)
            <div class="merchbox text-white d-flex align-items-center gap-3">
                <div class="logo-merch-cont">
                    <img src="{{$singleMerch["logoMerch"]}}" alt="" class="logo-merch-item">
                </div>
                <a href="#">{{$singleMerch["merchName"]}}</a>
            </div>           
        @endforeach
    </div>
</div>