@extends('layouts.main')

@section('isi')
<div class="row">
    <div class="col lg-12">
        <div class="card">
            <div class="card-header">

                <div class="header-left">
                    <div class="dashboard_bar">
                        Judul Projek Aplikasi
                    </div>
                </div>

                <div class="float-right">
                    <a class="badge badge-rounded badge-info badge-xl">PROJEK APLIKASI BARU</a>
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-bold">Klien (OPD)</h3>
                <p>berisi deskripsi aplikasi sesuai dengan form yg telah diisi oleh project manager</p>
            </div>
        </div>
    </div>
</div>
<!-- Add Order -->

<div class="row">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-block">
                <h2 class="card-title">Pilih Progres</h2>
            </div>
            <div class="card-body">

                <div class=" d-flex justify-content-between align-items-stretch flex-column h-auto">
                    <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                        data-target="#modalTPA">Tolak Projek</a>
                        <button type="button" class="btn btn-danger  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalDS">Disposisi Surat</a>
                            <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                                data-target="#modalAA">Analisis Awal</a>
                                <button type="button" class="btn btn-danger  btn-lg light ml-2 px-4" data-toggle="modal"
                                    data-target="#modalA">Antrian</a>
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
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-badge primary"></div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>10 minutes ago</span>
                                                            <h6 class="mb-0">Coding</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge info">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">New order placed <strong
                                                                    class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at
                                                                volutapt...</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>30 minutes ago</span>
                                                            <h6 class="mb-0">Analisis Kebutuhan</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>15 minutes ago</span>
                                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge warning">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes
                                                                live.</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; height: 370px; right: 0px;">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="modalDS">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Disposisi Surat</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="masukkan tanggal progres disposisi surat">
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
<div class="modal fade" id="modalTPA">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tolak Projek Aplikasi</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="masukkan tanggal projek ditolak">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label-lg font-weight-bold">Alasan ditolak</label>
                        <div class="col-lg-10">
                            <textarea class="form-control form-control-lg" rows="8" id="comment"
                                placeholder="masukkan deskripsi"></textarea>
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
<div class="modal fade" id="modalAA">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Analisis Awal</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="masukkan tanggal progres Analisis Awal">
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
<div class="modal fade" id="modalA">
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
@endsection