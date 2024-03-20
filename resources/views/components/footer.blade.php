<!-- Footer -->
<footer class="text-center text-lg-start img-bg-footer">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-custom-footer">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>{{__('ui.connection')}}</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            {{-- <a href="" class="me-4 text-reset">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="bi bi-twitter-x"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="bi bi-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="bi bi-linkedin"></i>
            </a> --}}
            <a target="_blank" href="https://github.com/Hackademy-134/presto1_gruppo01_theBugBusters" class="me-4 text-reset">
                <i class="bi bi-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold fs-3 mb-4">
                        <i class="fas fa-gem me-3"></i>TheBug Busters
                    </h6>
                    <p>
                        {{__('ui.descriptionTeam')}}
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fs-3 fw-bold mb-4">
                        {{__('ui.link')}}
                    </h6>
                    <p>
                        <a href="{{route('work-with-us')}}" class="text-reset fs-4">{{__('ui.workwithus')}}</a>
                    </p>
                    {{-- <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p> --}}
                    <p>
                        <a target="_blank" href="https://laravel.com/" class="text-reset">Laravel</a>
                    </p>
                    <p>
                        <a target="_blank" href="https://laravel.com/docs/10.x" class="text-reset">Laravel (Documentazione v. 10.x)</a>
                    </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 fs-3">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->
</footer>
<!-- Footer -->
