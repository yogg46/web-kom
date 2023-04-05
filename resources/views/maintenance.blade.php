@extends('layouts.main')

@section('isi')
{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div  class="dataTables_wrapper no-footer">
                        <table  id="example" class="display min-w850"   >
                        <thead>
                            <tr role="row">
                                <th   >No.</th>
                                <th  >Nama Aplikasi</th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" >OPD</th>
                                <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1"  >Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            </tbody><tbody>
                                <tr role="row" class="odd">
                                        <td>1</td>
                                        <td> <strong>Rumah Baca</strong></td>
                                        <td>Dinas Kominfo Kab. Magetan</td>
                                        <td>
                                            <div class="dropdown bootstrap-select form-control default-select">
                                                <select class="form-control default-select" id="sel1" tabindex="-98">
                                                <option>Maintenance</option>
                                                <option>Perbaikan</option>
                                                <option>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </td>
                                </tr>
                            </tbody>
                        </tbody><tbody>
                            <tr role="row" class="odd">
                                    <td>1</td>
                                    <td> <strong>Rumah Baca</strong></td>
                                    <td>Dinas Kominfo Kab. Magetan</td>
                                    <td>
                                        <div class="dropdown bootstrap-select form-control default-select">
                                            <select class="form-control default-select" id="sel1" tabindex="-98">
                                            <option>Maintenance</option>
                                            <option>Perbaikan</option>
                                            <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Menampilkan 1 sampai 10 dari 30 daftar</div>
                    <div class="float-right">

                        <nav>
                            <ul class="pagination pagination-sm pagination-gutter pagination-info">
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
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
    </div> --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Basic Datatable</h4>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aplikasi</th>
                                    <th>OPD</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td> <strong>Rumah Baca</strong></td>
                                    <td>Dinas Kominfo Kab. Magetan</td>
                                    <td>
                                        <div class="dropdown bootstrap-select form-control default-select">
                                            <select class="form-control default-select" id="sel1" tabindex="-98">
                                            <option>Maintenance</option>
                                            <option>Perbaikan</option>
                                            <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td> <strong> Baca</strong></td>
                                    <td>Dinas Kominfo Kab. Magetan</td>
                                    <td>
                                        <div class="dropdown bootstrap-select form-control default-select">
                                            <select class="form-control default-select" id="sel1" tabindex="-98">
                                            <option>Maintenance</option>
                                            <option>Perbaikan</option>
                                            <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Aplikasi</th>
                                    <th>OPD</th>
                                    <th>Status</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('css')
<link href="/asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="/asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/asset/js/plugins-init/datatables.init.js"></script>
@endpush
