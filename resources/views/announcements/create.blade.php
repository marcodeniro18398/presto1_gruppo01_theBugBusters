<x-layout>
    <div class="container py-4 margin-title">
        <div class="row pt-3 pb-4 justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-uppercase font-primary subtitle">{{__('ui.insertAnnouncement')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:create-announcement />
            </div>
        </div>
    </div>
</x-layout>