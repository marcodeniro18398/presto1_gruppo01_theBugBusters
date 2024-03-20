<x-layout>
    <div class="container-fluid mx-0 font-primary min-vh-70 margin-title">
        <h2 class="font-primary text-uppercase subtitle mb-3 mt-3">{{ __('ui.allCategory') }}</h2>
        <div class="row row-cols-md-5">
            @foreach ($categories as $category)
                <div class="col-6 col p-0">

                    <a class="portfolio-box " href="{{ route('categoryShow', ['category' => $category]) }}"
                        title="Project Name">
                        <div class="position-relative">
                            <div class="sfondo">
                                <p class="project-category">{{ __('ui.category') }}</p>
                                <h3 class="text-uppercase">{{ __('ui.' . $category->name) }}</h3>
                            </div>

                            <img class="img-hover img-category" src="{{ asset($category->img) }}" alt="...">
                            <div class="portfolio-box-caption">
                                {{-- <h4 >{{ __('ui.'.$category->name) }}</h4> --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
