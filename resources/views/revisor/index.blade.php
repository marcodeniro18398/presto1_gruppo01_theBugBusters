<x-layout>
    <div class="container-fluid margin-title">
        @if (!$announcement_to_check)
            <div class="row justify-content-center align-items-center vh-70 w-100">
                <div class="col-12 col-md-10 text-center">
                    <h2 class="subtitle">
                        {{ __('ui.nothingAnnouncementRevisioned') }}
                    </h2>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <h2 class="subtitle">
                        {{ __('ui.announcementRevisioned') }}
                    </h2>
                </div>
            </div>
        @endif
        <div class="row w-100 justify-content-center">
            @if ($announcement_to_check)
                <div class="  col-12 col-md-3 w-100 my-1 d-flex justify-content-center ">
                    <div class="card bg-grey color-champagnePink">
                        @if ($announcement_to_check->images)
                            @foreach ($announcement_to_check->images as $image)
                                <img src="{{ $image->getUrl(400, 300) }}" class="img-fluid p-3 rounded" alt="">

                                <div class="row">
                                    <div class="col-6 ">
                                        <div class="card-body-custom px-0">
                                            <h5 class="tc-accent mt-1 ms-4 pb-3 ">
                                                Tags:
                                            </h5>

                                            <div class="d-flex  flex-column align-items-start ">
                                                @if ($image->labels)
                                                    <ul class="">
                                                        @foreach ($image->labels as $label)
                                                            <li class="  ">
                                                                {{ $label }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 ">
                                        <div class="card-body-custom px-0">
                                            <h5 class="tc-accent mt-1 pb-3">
                                                Revisione immagini:
                                            </h5>
                                            <p class="mb-0">Adulti: <span class="{{ $image->adult }}"> </span></p>
                                            <p class="mb-0">Satira: <span class="{{ $image->spoof }}"> </span></p>
                                            <p class="mb-0">Medicina: <span class="{{ $image->medical }}"> </span>
                                            </p>
                                            <p class="mb-0">Violenza: <span class="{{ $image->violence }}">
                                                </span>
                                            </p>
                                            <p class="mb-0">Contenuto ammiccante: <span class="{{ $image->racy }}">
                                                </span></p>
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        @else
                            <img src="https://picsum.photos/300" class="img-fluid p-3 rounded" alt="">
                        @endif
                        <div class="card-body-custom py-3">
                            <h5 class="card-title">{{ $announcement_to_check->name }}</h5>
                            <p class="card-text">{{ $announcement_to_check->description }}</p>
                            <p class="card-text">{{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="">
                            <div class="row justify-content-center pb-4" >
                                <div class="col-12 col-md-6 d-flex justify-content-center">
                                    <form
                                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-success shadow">{{ __('ui.accept') }}</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-center">
                                    <form
                                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-danger shadow">{{ __('ui.refuse') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            @elseif ($announcement_to_undo)
                <div class="d-flex justify-content-center align-items-end w-100">
                    <form action="{{ route('revisor.undo', ['announcement' => $announcement_to_undo]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">{{ __('ui.reset') }}</button>
                    </form>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                {{-- {{ $announcements->links() }} --}}
            </div>
        </div>
    </div>

</x-layout>
