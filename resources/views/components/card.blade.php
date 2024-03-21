<!-- Card Narrower -->
<div class="card card-cascade narrower font-primary color-champagnePink bg-grey">

    <!-- Card image -->
    <div class="view view-cascade overlay card-custom">
        <img class="card-img-top img-card-custom"
            src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200' }}"
            alt="Card image">
        <a>
            <div class="mask rgba-white-slight waves-effect"></div>
        </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade">

        <!-- Label -->
        <h5 class="color-champagnePink pb-2 pt-1 text-center border-category"><i class="bi bi-shop-window"></i><a
                href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                class=""> {{ __('ui.'.$announcement->category->name) }}</a></h5>
        <!-- Title -->
        <h4 class="font-weight-bold card-title mt-3">{{ $announcement->name }}</h4>
        <!-- Text -->
        <p class="card-text text-truncate">{{ $announcement->description }}</p>
        <!-- Price -->
        <p class="card-text">{{ $announcement->price }} €</p>
        <!-- Button -->
        <a href="{{ route('announcements.show', compact('announcement')) }}"
            class="btn mx-1 my-1 btn-custom2">{{__('ui.details')}}</a>

    </div>

    <!-- Card footer -->
    <div class="card-footer text-center card-footer-custom">
        {{__('ui.publication')}} {{ $announcement->created_at->format('d/m/Y') }} {{__('ui.from')}} {{ $announcement->user->name ?? '' }}
    </div>

</div>
<!-- Card Narrower -->
