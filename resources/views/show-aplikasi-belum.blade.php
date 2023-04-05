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
                <td>
                    <div class="d-flex">
                        <button type="button" class="btn btn-info  btn-lg light ml-2 px-4">Tolak Projek</a>
                        <button type="button" class="btn btn-danger  btn-lg light ml-2 px-4">Disposisi Surat</a>
                        <button type="button" class="btn btn-info  btn-lg light ml-2 px-4">Analisis Awal</a>
                        <button type="button" class="btn btn-danger  btn-lg light ml-2 px-4">Antrian</a>
                    </div>
                </td>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="profile-tab">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#info-progres" data-toggle="tab" class="nav-link active show">Informasi Progres</a>
                            </li>
                            <li class="nav-item"><a href="#tim-aplikasi" data-toggle="tab" class="nav-link">Tim Aplikasi</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="info-progres" class="tab-pane fade active show">
                                <div class="col-xl-12 col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370 ps ps--active-y">
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
                                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
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
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="#">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 370px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div></div></div>
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
@endsection
