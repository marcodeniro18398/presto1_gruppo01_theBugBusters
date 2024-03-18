<x-layout>
    <div class="container-fluid mx-0 font-primary">
        <h2 class="margin-title font-primary text-uppercase">{{ __('ui.allCategory') }}</h2>
        <div class="row row-cols-md-5">
            @foreach ($categories as $category)
            <div class="col-12 col p-0">
                
                <a class="portfolio-box " href="{{ route('categoryShow', ['category' => $category]) }}"
                    title="Project Name">
                    <div class="position-relative">
                        <div class="sfondo">
                            <p class="project-category">{{ __('ui.category') }}</p>
                            <h3 class="text-uppercase">{{ __('ui.' . $category->name) }}</h3>
                        </div>
                        
                        <img class="img-fluid w-100 img-hover" src="https://picsum.photos/900" alt="...">
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
