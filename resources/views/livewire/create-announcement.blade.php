<div>
    <form wire:submit.prevent="store">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @csrf
        {{-- <div class="py-2 mb-3">
            <label for="name" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="es.: Mario Rossi">
        </div> --}}
        <div class="py-2 mb-3">
            <label for="name" class="form-label">{{ __('ui.objectName') }}</label>
            <input type="text" class="form-control shadow-input" id="name" wire:model.live="name">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
                </div>
            <div class="py-2 mb-3">
                <label for="description" class="form-label">{{ __('ui.description') }}</label>
                <textarea wire:model.live.blur="description" id="description" class="form-control shadow-input" cols="30" rows="10">
            </textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="py-2 mb-3">
                <label for="price" class="form-label">{{ __('ui.price') }}</label>
                <input type="number" class="form-control shadow-input" id="price" wire:model.live.blur="price">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="py-2 mb-3">
                <label for="category" class="form-label">{{ __('ui.category') }}</label>
                <select id="category" class="form-select shadow-input mb-2" wire:model.defer="category">
                    <option value="">{{ __('ui.selectionCategory') }}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ __('ui.' . $category->name) }}</option>
                    @endforeach
                </select>
                <div class="mb-3 py-2">
                    <input wire:model="temporary_images" type="file" name="images" multiple
                        class="form-control shadow-input" placeholder="Img">
                    @error('temporary_images.*')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>{{__('ui.photoPreview')}}</p>
                        <div class="row border border-4 border-info1 shadow py-4  mb-3">
                            @foreach ($images as $key => $image)
                                <div class="col my-3">
                                    <div class="img-preview mx-auto shadow rounded"
                                        style="background-image: url({{ $image->temporaryUrl() }});">
                                        <button type="button" class="btn btn-danger shadow"
                                            wire:click="removeImage({{ $key }})">{{ __('ui.delete') }}</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-custom1 mt-2">{{ __('ui.send') }}</button>
            </div>
    </form>
</div>
