{{-- @include('layouts.main') --}}
@extends('layouts.main')
@section('isi')
    @if (Auth::user()->role == 'Super Admin')
        <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">
            <div class="mb-3 mr-3">
                <div class="input-group search-area d-xl-inline-flex d-none">
                    <input type="text" class="form-control" placeholder="cari project">
                    <div class="input-group-append">
                        <span class="input-group-text"><a href="javascript:void(0)"><i
                                    class="flaticon-381-search-2"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="event-tabs mb-3 mr-3">
                <ul class="nav nav-tabs" role="tablist">

                </ul>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                                    <table id="example4" class="display min-w850 dataTable no-footer" role="grid"
                                        aria-describedby="example4_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 75px;">No.</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="example4"
                                                    rowspan="1" colspan="1" style="width: 152px;"
                                                    aria-sort="descending">Project</th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 150px;">OPD</th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 105px;">Prioritas</th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 140px;">Tim</th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 180px;">Deskripsi Aplikasi</th>
                                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                                    colspan="1" style="width: 50px;">Progres</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td> <strong> antrian@magetan.go.id </strong></td>
                                                <td>Disdukcapil Magetan</td>
                                                <td><span class="badge-rounded badge-success text-bold">LOW</span></td>
                                                <td></td>
                                                <td>Aplikasi untuk antrian</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 60%; height:6px;"
                                                            role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <tr role="row" class="odd">
                                            <td>2</td>
                                            <td> <strong> pelatihan.DTS@magetan.go.id </strong></td>
                                            <td>Diskominfo Magetan</td>
                                            <td><span class="badge light badge-danger text-bold">URGENT</span></td>
                                            <td></td>
                                            <td>Aplikasi untuk pendaftaran dan informasi pelatihan DTS</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" style="width: 60%; height:6px;"
                                                        role="progressbar">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>

                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>3</td>
                                                <td> <strong> ruangbaca@magetan.go.id </strong></td>
                                                <td>Dinas ARPUS Magetan</td>
                                                <td><span class="badge-rounded badge-danger text-bold">HIGH</span></td>
                                                <td></td>
                                                <td>Aplikasi untuk arsip e-book</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 60%; height:6px;"
                                                            role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>4</td>
                                                <td> <strong> permukiman@magetan.go.id </strong></td>
                                                <td>Perkim Magetan</td>
                                                <td><span class="badge-rounded badge-warning text-bold">MEDIUM</span></td>
                                                <td></td>
                                                <td>Aplikasi untuk pengajuan pembangunan</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 60%; height:6px;"
                                                            role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>


                                    </table>
                                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                                        Menampilkan 1 sampai 10 dari 30 daftar</div>
                                    <div class="float-right">

                                        <nav>
                                            <ul class="pagination pagination-sm pagination-gutter pagination-info">
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="la la-angle-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">4</a></li>
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="la la-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Aplikasi</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-info">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Aplikasi</th>
                                            <th scope="col">OPD</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>permukiman@magetan.go.id</td>
                                            <td>Otto</td>
                                            <td>
                                                <div class="d-flex align-items-center"><i
                                                        class="fa fa-circle text-success mr-1"></i> Maintenance</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>ruangbaca@magetan.go.id</td>
                                            <td>Thornton</td>
                                            <td>
                                                <div class="d-flex align-items-center"><i
                                                        class="fa fa-circle text-success mr-1"></i> Maintenance</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
