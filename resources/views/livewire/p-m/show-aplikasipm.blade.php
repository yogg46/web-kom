<div>
    <div class="row">
        <div class="col lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="header-left">
                        <div class="dashboard_bar">
                            {{ $aplikasis->nama_aplikasi }}
                        </div>
                    </div>

                    <div class="float-right">
                        <span class="badge badge-rounded {{ $aplikasis->prioritas == 'Urgent' ? ' badge-danger ':(
                            $aplikasis->prioritas == 'High' ? ' badge-warning ': (
                                $aplikasis->prioritas == 'Medium' ?' badge-primary  ': (
                                    $aplikasis->prioritas == 'Low' ? ' badge-success ':''
                                )
                            )
                        ) }} badge-xl">{{ $aplikasis->prioritas }}</span>
                        <span class="badge badge-rounded badge-info badge-xl">{{ $aplikasis->status_projek }}</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-bold">{{ $aplikasis->R_OPD->nama_opd }}</h3>
                    <p>{{ $aplikasis->deskripsi }}</p>
                    @if ($aplikasis->status_aplikasi == 'Progres')

                    <div class="d-flex justify-content-between">

                        <div class="">Progress
                        </div>
                        <div class="form-group ">
                            <input class="form-control form-control-sm text-black" type="number" placeholder=""
                                value="65" min="0" max="100" style="text-align: center;height: 30px;width: 60px">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-animated" style="width: 65%; height:20px;"
                            role="progressbar">
                            60% Complete
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Add Order -->

    <div class="row">

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h2 class="card-title">Pilih Progres</h2>
                </div>
                <div class="card-body">

                    <div class=" d-flex justify-content-between align-items-stretch flex-column h-auto">
                        @if(!$aplikasis->R_progres()->where('status', 'Disposisi Surat')->exists())

                        <button type="button" class="btn btn-danger  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalDS">Disposisi Surat</button>

                        @endif
                        @if(!$aplikasis->R_progres()->where('status', 'Analisis Awal')->exists())
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalAA">Analisis Awal</button>
                        @endif
                        @if ($aplikasis->status_aplikasi == 'Inisiasi')

                        <button type="button" class="btn btn-danger  btn-lg light ml-2 mb-5  px-4" data-toggle="modal"
                            data-target="#modalA">Antrian</button>
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalTPA">Tolak Projek</button>
                        @endif

                        @if ($aplikasis->status_aplikasi == 'Progres')
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalAK">Analisis Kebutuhan</button>

                        <button type="button" class="btn btn-danger  btn-lg light mb-5  ml-2 px-4" data-toggle="modal"
                            data-target="#modalC">Coding</button>

                        <button type="button" class="btn btn-info  btn-lg light mb-5 ml-2 px-4" data-toggle="modal"
                            data-target="#modalT">Testing</button>
                        <button type="button" class="btn btn-info  btn-lg light  ml-2 px-4" data-toggle="modal"
                            data-target="#modalU">UAT</button>
                        @endif
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#info-progres" data-toggle="tab"
                                        class="nav-link active show">Informasi Progres</a>
                                </li>
                                <li class="nav-item"><a href="#tim-aplikasi" data-toggle="tab" class="nav-link">Tim
                                        Aplikasi</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="info-progres" class="tab-pane fade active show">
                                    <div class="col-xl-12 col-xl-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="DZ_W_TimeLine"
                                                    class="widget-timeline dz-scroll height370 ps ps--active-y">
                                                    @if ($aplikasis->R_progres->count() > 0)
                                                    <ul class="timeline">

                                                        @foreach ($aplikasis->R_progres as $item)

                                                        <li>
                                                            <div class="timeline-badge info">
                                                            </div>
                                                            <a class="timeline-panel text-muted">
                                                                <span>{{ $item->tanggal->format('d-m-Y') }}</span>
                                                                <h6 class="mb-0"><strong>{{ $item->status }}</strong>
                                                                </h6>
                                                                <p class="mb-0">{{ $item->catatan }}</p>
                                                            </a>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                    @endif
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                            style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y"
                                                        style="top: 0px; height: 370px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                            style="top: 0px; height: 261px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tim-aplikasi" class="tab-pane fade">
                                    <div class="pt-3">
                                        @if ($aplikasis->R_Tim->count() > 0)

                                        <div class="media pt-3 pb-3">
                                            <img src="/asset/images/profile/7.jpg" alt="image" class="mr-3 rounded"
                                                width="55">
                                            <div class="media-body">
                                                <h4 class="m-b-10"><a href="post-details.html" class="text-black">Maria
                                                        Nobe</a></h4>
                                                <h5 class="mb-3">Project Manager</h5>
                                            </div>
                                            <img src="/asset/images/profile/7.jpg" alt="image" class="mr-3 rounded"
                                                width="55">
                                            <div class="media-body">
                                                <h4 class="m-b-10"><a href="post-details.html" class="text-black">Maria
                                                        Nobe</a></h4>
                                                <h5 class="mb-3">Project Manager</h5>
                                            </div>
                                        </div>
                                        <div class="media pt-3 pb-3">
                                            <img src="/asset/images/profile/7.jpg" alt="image" class="mr-3 rounded"
                                                width="55">
                                            <div class="media-body">
                                                <h4 class="m-b-10"><a href="post-details.html" class="text-black">Maria
                                                        Nobe</a></h4>
                                                <h5 class="mb-3">Project Manager</h5>
                                            </div>
                                            <img src="/asset/images/profile/7.jpg" alt="image" class="mr-3 rounded"
                                                width="55">
                                            <div class="media-body">
                                                <h4 class="m-b-10"><a href="post-details.html" class="text-black">Maria
                                                        Nobe</a></h4>
                                                <h5 class="mb-3">Project Manager</h5>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div wire:ignore.self class="modal fade" id="modalDS">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Disposisi Surat</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_disposisi'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='disposisi' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres disposisi surat">
                                @error('disposisi')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-bold ">Kirim Notifikasi?</label>
                            <div class="col-lg-8">
                                <div class="row">

                                    <div>

                                        <div class="switch">
                                            <div class="switch__1">
                                                <input wire:model='notif' id="switch-1" type="checkbox">
                                                <label for="switch-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalTPA">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tolak Projek Aplikasi</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_ditolak'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" wire:model='tolak' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres disposisi surat">
                                @error('tolak')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Alasan ditolak</label>
                            <div class="col-lg-10">
                                <textarea wire:model='alasan_tolak' class="form-control form-control-lg" rows="8"
                                    placeholder="masukkan deskripsi"></textarea>
                                @error('alasan_tolak')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-bold ">Kirim Notifikasi?</label>
                            <div class="col-lg-8">
                                <div class="row">

                                    <div>

                                        <div class="switch">
                                            <div class="switch__1">
                                                <input wire:model='notif' id="switch-1" type="checkbox">
                                                <label for="switch-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalAA">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Analisis Awal</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_analisis_awal'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='analisis_awal' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres disposisi surat">
                                @error('analisis_awal')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-bold ">Kirim Notifikasi?</label>
                            <div class="col-lg-8">
                                <div class="row">

                                    <div>

                                        <div class="switch">
                                            <div class="switch__1">
                                                <input wire:model='notif' id="switch-1" type="checkbox">
                                                <label for="switch-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalA">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">Antrian Aplikasi</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">

                            <div class="form-group">
                                <strong><label>Prioritas Aplikasi</label></strong>
                                <select class="form-control default-select" id="sel1">
                                    <option>Urgent</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong><label>Pilih Nomor Antrian Aplikasi</label></strong>
                                <select class="form-control default-select" id="sel2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="basic-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="control-label">Project Manager</label></strong>
                                            <select class="form-control default-select" id="sel1">
                                                <option>Anna</option>
                                                <option>Anni</option>
                                                <option>Anne</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="control-label">Quality Assurance</label></strong>
                                            <select class="form-control default-select" id="sel1">
                                                <option>Anna</option>
                                                <option>Anni</option>
                                                <option>Anne</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="control-label">System Analyst</label></strong>
                                            <select class="form-control default-select" id="sel1">
                                                <option>Anna</option>
                                                <option>Anni</option>
                                                <option>Anne</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong><label class="control-label">Programmar</label></strong>
                                            <select multiple class="form-control default-select" id="sel1">
                                                <option>Anna</option>
                                                <option>Anni</option>
                                                <option>Anne</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalAK">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Analisis Kebutuhan</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Kebutuhan">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalC">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Coding</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Coding">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalT">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">Testing</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="masukkan tanggal testing">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi BUG</label>
                            <div class="col-lg-10">
                                <textarea class="form-control form-control-lg" rows="6" id="comment"
                                    placeholder="masukkan deskripsi BUG"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modalU">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">UAT</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="masukkan tanggal UAT">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi BUG</label>
                            <div class="col-lg-10">
                                <textarea class="form-control form-control-lg" rows="6" id="comment"
                                    placeholder="masukkan deskripsi BUG"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    @push('css')
    <style>
        /* SWITCH */
        .switch {
            grid-column: 0.5;
            display: grid;
            grid-template-columns: repeat(2, min-content);
            grid-gap: 0.5rem;
            justify-self: center;
        }

        .switch input {
            display: none;
        }

        .switch__1,
        .switch__2 {
            width: 6rem;
        }

        .switch__1 label,
        .switch__2 label {
            display: flex;
            align-items: center;
            width: 100%;
            height: 2rem;
            box-shadow: 0.3rem 0.3rem 0.6rem #c8d0e7, -0.2rem -0.2rem 0.5rem #fff;
            background: rgba(255, 255, 255, 0);
            position: relative;
            cursor: pointer;
            border-radius: 1.6rem;
        }

        .switch__1 label::after,
        .switch__2 label::after {
            content: "";
            position: absolute;
            left: 0.4rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background: #9baacf;
            transition: all 0.4s ease;
        }

        .switch__1 label::before,
        .switch__2 label::before {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(330deg, #5b0eeb 0%, #6d5dfc 50%, #8abdff 100%);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .switch input:checked~label::before {
            opacity: 1;
        }

        .switch input:checked~label::after {
            left: 76%;
            background: #e4ebf5;
        }
    </style>
    @endpush

    @push('js')
    <script>
        window.addEventListener('UAT', event => {
                $("#modalU").modal('hide');
            })
        window.addEventListener('Testing', event => {
                $("#modalT").modal('hide');
            })
        window.addEventListener('Coding', event => {
                $("#modalC").modal('hide');
            })
        window.addEventListener('Analisis-Kebutuhan', event => {
                $("#modalAK").modal('hide');
            })
        window.addEventListener('Antrian-Aplikasi', event => {
                $("#modalA").modal('hide');
            })
        window.addEventListener('Analisis-Awal', event => {
                $("#modalAA").modal('hide');
            })
        window.addEventListener('Tolak-Projek-Aplikasi', event => {
                $("#modalTPA").modal('hide');
            })
        window.addEventListener('Disposisi-Surat', event => {
                $("#modalDS").modal('hide');
            })
    </script>
    @endpush
</div>