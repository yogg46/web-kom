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
                    <a class="badge badge-rounded badge-info badge-xl">URGENT</a>
                    <a class="badge badge-rounded badge-warning badge-xl">DISPOSISI SURAT</a>
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-bold">Klien (OPD)</h3>
                <p>berisi deskripsi aplikasi sesuai dengan form yg telah diisi oleh project manager</p>
                <div class="d-flex justify-content-between">

                    <div class="">Progress
                    </div>
                    <div class="form-group ">
                        <input class="form-control form-control-sm text-black" type="number" placeholder="" value="65"
                            min="0" max="100" style="text-align: center;height: 30px;width: 60px">
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success progress-animated" style="width: 65%; height:20px;"
                        role="progressbar">
                        60% Complete
                    </div>
                </div>
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


                    <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                        data-target="#modalAK">Analisis Kebutuhan</button>

                    <button type="button" class="btn btn-danger  btn-lg light mb-5  ml-2 px-4" data-toggle="modal"
                        data-target="#modalC">Coding</button>

                    <button type="button" class="btn btn-info  btn-lg light mb-5 ml-2 px-4" data-toggle="modal"
                        data-target="#modalT">Testing</button>
                    <button type="button" class="btn btn-info  btn-lg light  ml-2 px-4" data-toggle="modal"
                        data-target="#modalU">UAT</button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="modalAK">
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
<div class="modal fade" id="modalC">
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
<div class="modal fade" id="modalT">
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
<div class="modal fade" id="modalU">
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
                            <input type="text" class="form-control form-control-lg" placeholder="masukkan tanggal UAT">
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
@endsection