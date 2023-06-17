<div>
    <div   class="app-feature app-feature-1">
        <div class="app-feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                        <div class="screen-section-header">
                            <div class="section-heading center-responsive">

                                <div class="main-heading c-dark">
                                    <h1>Semua Aplikasi</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                        {{-- {{ $app->links('vendor.pagination.default') }} --}}
                        {{ $app->links('pagination::default') }}
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    @foreach ($app as $key )

                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper" style=" min-height: 400px; max-height:400px;">
                                <a href="/" class="icon">
                                    <i class="las la-comments"></i>
                                </a>
                                <a href="/">
                                    <h3 class="c-dark" style="margin:0.9rem 0 1.3rem 0">
                                        <p style="font-size: font-size: 3rem;
                                        font-weight: 600;">
                                            {{ $key->nama_aplikasi }}
                                        </p>
                                    </h3>
                                </a>
                                <p class="c-grey">{{ $key->deskripsi }}</p>
                            </div>
                            <a href="/" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
